<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Pregunta;
use App\Models\PageVisit;
use App\Models\Respuesta;
use Illuminate\Http\Request;

/**
 * Class PreguntaController
 * @package App\Http\Controllers
 */
class PreguntaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $preguntas = Pregunta::paginate();
        $preguntas = Pregunta::all();
        $visits = PageVisit::where('page_slug', 'preguntas')->value('visits');

        return view('pregunta.index', compact('preguntas', 'visits'));
            //->with('i', (request()->input('page', 1) - 1) * $preguntas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pregunta = new Pregunta();
        $visits = PageVisit::where('page_slug', 'preguntas/create')->value('visits');
        $areas = Area::all();
        $respuesta = new Respuesta();

        return view('pregunta.create', compact('pregunta', 'visits', 'areas', 'respuesta'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Pregunta::$rules);

        $pregunta = Pregunta::create($request->all());  
        
        $pregunta->docente_id = auth()->user()->id;
        $pregunta->save();

        foreach ($request->input('respuestas') as $respuestaData) {
            Respuesta::create([
                'texto' => $respuestaData['texto'],
                'esCorrecta' => $respuestaData['esCorrecta'],
                'pregunta_id' => $pregunta->id
            ]);
        }

        return redirect()->route('preguntas.index')
            ->with('success', 'Pregunta created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pregunta = Pregunta::find($id);
        $respuestas = Respuesta::where('pregunta_id', $pregunta->id)->get();

        return view('pregunta.show', compact('pregunta', 'respuestas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pregunta = Pregunta::find($id);
        $areas = Area::all();
        $respuesta = Respuesta::where('pregunta_id', $pregunta->id)->get();

        return view('pregunta.edit', compact('pregunta', 'areas', 'respuesta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Pregunta $pregunta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pregunta $pregunta)
    {
        request()->validate(Pregunta::$rules);

        $pregunta->update($request->all());

        $respuestas = Respuesta::where('pregunta_id', $pregunta->id)->get();

        foreach ($respuestas as $index => $item) {
            $respuestaData = $request->input('respuestas.' . $index);
        
            if ($respuestaData) {
                $item->update([
                    'texto' => $respuestaData['texto'],
                    'esCorrecta' => $respuestaData['esCorrecta'],
                ]);
            }
        }
      
        return redirect()->route('preguntas.index')
            ->with('success', 'La pregunta se actualizó con éxito.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $pregunta = Pregunta::find($id)->delete();

        Respuesta::where('pregunta_id', $pregunta->id)->delete();

        return redirect()->route('preguntas.index')
                ->with('success', 'Pregunta deleted successfully');
    }
}
