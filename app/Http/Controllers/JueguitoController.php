<?php

namespace App\Http\Controllers;
use App\Models\Juego;
use App\Models\Estudiante;
use App\Models\Pregunta;
use App\Models\Area;
use App\Models\Respuesta;
use App\Models\Sala;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class JueguitoController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function interno()
    {
        $userID = auth()->id();
        $estudiante = Estudiante::where('usuario_id', $userID)->first();
        if (!$estudiante) {
            return 'No se encontró al estudiante correspondiente.';
        }
    
        $colegio = $estudiante->colegio;
        $estudiantes = Estudiante::with('user')
                         ->where('colegio', $colegio)
                         ->where('id', '!=', $estudiante->id)
                         ->get();
        $datosUsuarios = $estudiantes->map(function ($estudiante) {
            return [
                'id' => $estudiante->user->id,
                'name' => $estudiante->user->name, // Ajusta el campo "nombre" según el nombre real en tu tabla "usuarios"
                'email' => $estudiante->user->email, // Ajusta el campo "correo" según el nombre real en tu tabla "usuarios"
            ];
        });
        $sala = new Sala();

        // Asignar el ID del usuario a la sala
        $sala->user_creador = $userID;

        // Guardar la sala en la base de datos
        $sala->save();
        $salaId = $sala->id;
        return view('jueguito.interno', compact('datosUsuarios', ['salaId']));
    }
    

    public function sala($salaId,$UserId)
    {
            // Obtener todas las áreas
            $areas = Area::all();

            // Inicializar un array para almacenar las preguntas y respuestas por área
            $preguntasRespuestasPorArea = [];
            foreach ($areas as $area) {
                // Obtener las preguntas asociadas a esta área
                $preguntas = Pregunta::where('area_id', $area->id)->take(5)->get();
                // Verificar si hay preguntas para esta área
                if ($preguntas->isEmpty()) {
                    $preguntasRespuestasPorArea[$area->id] = 'No hay preguntas para esta área.';
                } else {
                    // Obtener las respuestas asociadas a las preguntas de esta área
                    $preguntaIDs = $preguntas->pluck('id')->toArray();
                    $respuestas = Respuesta::whereIn('pregunta_id', $preguntaIDs)->get();

                    // Agregar las preguntas y respuestas a la lista por área
                    $preguntasRespuestasPorArea[$area->nombre] = [
                        'preguntas' => $preguntas,
                        'respuestas' => $respuestas,
                    ];
                }
            }
            Sala::where('id', $salaId)->update(['user_retador' => $UserId]);
            $sala_user = Sala::where('id', $salaId)->first();
            $user_retador = User::find($sala_user->user_retador);
            $user_creador = User::find($sala_user->user_creador);//funciona solo con el autenticado
            // Redirigir a la vista 'jueguito.preguntas' con las preguntas y respuestas por área
            $respuestasJSON = [];
            $respuestasJSON = json_encode($respuestasJSON);
            $UserId= auth()->id();
            return view('jueguito.preguntas', compact('preguntasRespuestasPorArea','user_retador','user_creador','respuestasJSON','salaId','UserId'));
    }

    public function guardar_respuestas(Request $request)
    {
        // Obtener las respuestas enviadas desde el formulario
        $respuestas = $request->input('respuestas');

        $salaId = $request->input('salaId');
        $userId = $request->input('UserId');
        $respuestasCorrectas = Respuesta::where('esCorrecta', true)
            ->pluck('id')
            ->toArray();

        $numeroRespuestasCorrectas = 0;
        $respuestasArray = json_decode($respuestas, true);

        // Verificar si se pudo decodificar el JSON correctamente
        if ($respuestasArray === null && json_last_error() !== JSON_ERROR_NONE) {
            echo "Error al decodificar el JSON de respuestas: " . json_last_error_msg();
            // Otra opción es redirigir a una página de error o mostrar un mensaje de error al usuario.
            return;
        }

// Verificar si se pudo decodificar el JSON correctamente
        if (is_array($respuestasArray)) {
            foreach ($respuestasArray as $preguntaId => $respuestaId) {
                // $preguntaId es el número de pregunta y $respuestaId es el valor de respuesta asociado a esa pregunta.
                if (in_array($respuestaId, $respuestasCorrectas)) {
                    $numeroRespuestasCorrectas++;
                }
                // Resto del código para contar respuestas correctas, etc.
            }
        } else {
            echo "Error al decodificar el JSON de respuestas." . PHP_EOL;
        }

        $ganador = null;
        $resultadoFinal = $numeroRespuestasCorrectas;
        $sala = Sala::where('id', $salaId)->first();

        if ($sala) {
            if ($numeroRespuestasCorrectas > $resultadoFinal) {
                $resultadoFinal = $numeroRespuestasCorrectas;
                $ganador = $userId; 
            }
        }
        $juego = Juego::where('nombre', $salaId)
        ->first();
        
        if ($juego) {
            // El juego ya existe, entonces actualizas los campos ganador y resultado_final si el nuevo resultado es mayor
            if ($resultadoFinal > $juego->resultado_final) {
                $juego->ganador = auth()->id();
                $juego->resultado_final = $resultadoFinal;
                $juego->save();
                $ganador = User::find($userId);
            }
        } else {
            // El juego no existe, así que lo creas
            $juego = new Juego();
            $juego->nombre =$salaId;
            $juego->estudiante_creador_id = $sala->user_creador;
            $juego->estudiante_jugador_id = $sala->user_retador;
            $juego->estado = true;
            $juego->fecha = Carbon::now();
            $juego->ganador = $userId;
            $juego->resultado_final = $resultadoFinal;
            $juego->save();
            $ganador = User::find($userId);
        }

        return view('jueguito.result', [
            'ganador' => $ganador->email,
            'resultado_final' => $juego->resultado_final
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function duelo()
    {
        $juego = new Juego();
        return view('juego.create', compact('juego'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function general(Request $request)
    {
        request()->validate(Juego::$rules);

        $juego = Juego::create($request->all());

        return redirect()->route('juegos.index')
            ->with('success', 'Juego created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $juego = Juego::find($id);

        return view('juego.show', compact('juego'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $juego = Juego::find($id);

        return view('juego.edit', compact('juego'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Juego $juego
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Juego $juego)
    {
        request()->validate(Juego::$rules);

        $juego->update($request->all());

        return redirect()->route('juegos.index')
            ->with('success', 'Juego updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $juego = Juego::find($id)->delete();

        return redirect()->route('juegos.index')
            ->with('success', 'Juego deleted successfully');
    }
}
