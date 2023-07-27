<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-ltOtkla2KzHYbsl2O5/tZOaAcJ6n0b1z1OVvUcX5YKuk8XK3E+3v95UHeL8B6AS66/z1f2uY0AZQK2BQ7G7Cg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Estilo de Preguntas y Respuestas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #162D4D;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            margin: 0;
        }

        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Esto hace que ocupe todo el alto de la ventana */
            max-width: 800px; /* Ancho máximo del contenedor */
            width: 100%; /* Opcional: para que el contenido no se desborde en pantallas pequeñas */
            margin: 0 auto; /* Centrar horizontalmente */
        }

        .container {
            max-width: 800px;
        }

        .hero {
            background-color: #654321;
            padding: 20px;
            border-radius: 8px;
        }

        .text-white {
            color: #fff;
        }

        .mb-4 {
            margin-bottom: 1rem;
        }

        .area {
            margin-bottom: 20px;
        }

        h4 {
            margin-bottom: 10px;
            color: #007bff;
            font-size: 24px;
            text-align: center;
        }

        p {
            margin-bottom: 5px;
            color: #fff;
        }

        .form-select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        .btn {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 4px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 14px;
        }

        .btn-primary {
            background-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .respuesta-list {
            list-style: none; /* Eliminar las viñetas de la lista */
            padding: 0; /* Eliminar el padding para evitar espacios innecesarios */
        }

        /* Estilo para el contenedor de la opción de respuesta */
        .respuesta-item {
            padding: 5px 10px;
            border-radius: 4px;
            background-color: #f2f2f2;
            cursor: pointer;
            margin-bottom: 8px;
        }

        /* Estilo para el texto de la opción de respuesta */
        .respuesta-item label {
            margin-left: 10px;
        }

        /* Estilo para el contenedor de la opción de respuesta seleccionada */
        .respuesta-item.checked {
            background-color: #007bff; /* Cambiar color de fondo de la opción seleccionada a azul */
            color: #fff; /* Cambiar color del texto de la opción seleccionada */
        }

        .jugadores-container {
        display: flex; /* Mostrar los contenedores de los jugadores en una sola fila */
        justify-content: space-between; /* Distribuir los contenedores a lo largo del ancho */
        align-items: center; /* Centrar verticalmente los elementos en el contenedor */
        background-color: #162D4D;  /* Color de fondo para resaltar los contenedores */
        }

        .jugador-container {
        display: flex;
        align-items: center;
        padding: 10px;
        margin: 0 5px;
        background-color: #fff;
        border-radius: 8px;
        color: #162D4D /* Color de texto negro */
        }

        .jugador-container i {
            margin-right: 5px;
            color: #162D4D; /* Color del icono de persona negro */
        }

        /* Estilos adicionales para el icono de persona */
        .fas.fa-user {
            font-size: 20px;
        }

        /* Estilos adicionales para el icono de persona */
        .fas.fa-user {
            font-size: 20px;
        }      
        .image-container {
            position: absolute;
            top: 20px; /* Cambiar la posición vertical según necesites */
            right: 20px; /* Cambiar la posición horizontal según necesites */
            z-index: 1; /* Aseguramos que la imagen esté por encima del contenido */
        }
        .imageLenguaje-container {
            position: absolute;
            top: 20px; /* Cambiar la posición vertical según necesites */
            left: 20px; /* Cambiar la posición horizontal según necesites */
            z-index: 1; /* Aseguramos que la imagen esté por encima del contenido */
        }

    </style>
</head>

<body>
    <div class="image-container">
        <img src="/assets/img/historia_icon.png" alt="Descripción de la imagen">
    </div>
    <div class="imageLenguaje-container">
        <img src="/assets/img/lenguaje_icon.png" alt="Descripción de la imagen">
    </div>
    <div class="form-container">
        <div class="container">
            <div class="jugadores-container">
            <div class="jugador-container">
                <h5>Jugador Retado:<br>
                    @if ($user_retador)
                        {{ $user_retador->name }}
                    @else
                        <span>No se encontraron datos del jugador retador.</span>
                    @endif
                </h5>
            </div>
            <div class="jugador-container">
                <h5>Jugador Creador:<br>
                    @if ($user_creador)
                        {{ $user_creador->name }}
                    @else
                        <span>No se encontraron datos del jugador creador.</span>
                    @endif
                </h5>
            </div>
        </div>
            <div class="hero">
                <form action="{{ route('guardar_respuestas') }}" method="post" class="form-questions">
                    @csrf
                    @php $areasCount = count($preguntasRespuestasPorArea); @endphp
                   @foreach ($preguntasRespuestasPorArea as $areaNombre => $datosArea)
                        <div class="area" id="{{ $areaNombre }}" @if ($loop->first) style="display: block;" @else style="display: none;" @endif>
                            <h4>{{ $areaNombre }}</h4>
                            @if (is_string($datosArea))
                                <p>{{ $datosArea }}</p>
                            @else
                                @foreach ($datosArea['preguntas'] as $pregunta)
                                    <div class="pregunta" @if ($loop->first) style="display: block;" @else style="display: none;" @endif>
                                        <p>{{ $pregunta->texto }}</p>
                                        <ul class="respuesta-list">
                                            @foreach ($datosArea['respuestas'] as $respuesta)
                                                @if ($respuesta->pregunta_id === $pregunta->id)
                                                    <li class="respuesta-item" onclick="selectAnswer(this)">
                                                        <input type="radio" name="respuestas[{{ $pregunta->id }}]" value="{{ $respuesta->id }}" style="display: none;">
                                                        <label>{{ $respuesta->texto }}</label>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                @endforeach
                                @if (!$loop->last)
                                   <!-- ... -->
                                    <button type="button" class="btn btn-primary mt-3" onclick="siguientePregunta('{{ $areaNombre }}')">Siguiente</button>
                                    <!-- ... -->

                                @endif
                            @endif
                        </div>
                    @endforeach
                    <!-- El botón "Enviar Respuestas" se mostrará después de responder todas las preguntas -->
                        <input type="hidden" name="respuestas" value="{{ $respuestasJSON }}">
                        <input type="hidden" name="salaId" value="{{ $salaId }}">
                        <input type="hidden" name="UserId" value="{{ $UserId }}">
                    <button type="submit" class="btn btn-primary mt-3 btn-enviar-respuestas" style="display: none;">Enviar Respuestas</button>
                </form>
            </div>
        </div>
    </div>

<script>
        var areas = document.querySelectorAll('.area');
        var totalRespuestasEsperadas = 0;
        var respuestas = {};
        var totalPreguntas = document.querySelectorAll('.pregunta').length;
        var totalRespuestas = 0;

        function selectAnswer(element) {
            var preguntaId = element.querySelector('input[type="radio"]').getAttribute('name').match(/\d+/)[0];
            respuestas[preguntaId] = element.querySelector('input[type="radio"]').value;

            var containers = document.querySelectorAll('.respuesta-item');
            containers.forEach(function (item) {
                item.classList.remove('checked');
            });

            element.classList.add('checked');

            // Contar la cantidad de respuestas seleccionadas
            totalRespuestas = Object.keys(respuestas).length;

             // Actualizar el campo oculto con el JSON de respuestas actualizado
                var respuestasInput = document.querySelector('input[name="respuestas"]');
                respuestasJSON = JSON.stringify(respuestas);
                respuestasInput.value = respuestasJSON;

            // Mostrar u ocultar el botón "Enviar Respuestas" según las preguntas respondidas
            var botonEnviar = document.querySelector('.btn-enviar-respuestas');
            if (totalRespuestas === 6) {
                botonEnviar.style.display = 'block';
            } else {
                botonEnviar.style.display = 'none';
            }
        }

        function siguientePregunta(areaNombre) {
            var areaActual = document.getElementById(areaNombre);
            var preguntas = areaActual.querySelectorAll('.pregunta');
            var preguntaActual = areaActual.querySelector('.pregunta:not([style*="display: none"])');
            var siguientePregunta = null;

            for (var i = 0; i < preguntas.length; i++) {
                if (preguntas[i] === preguntaActual && i < preguntas.length - 1) {
                    siguientePregunta = preguntas[i + 1];
                    break;
                }
            }

            if (siguientePregunta) {
                preguntaActual.style.display = 'none';
                siguientePregunta.style.display = 'block';

                // Habilitar el botón "Enviar Respuestas" si todas las preguntas están respondidas en la última área
                if (areaActual.nextElementSibling === null && totalRespuestas === totalPreguntas) {
                    var botonEnviar = document.querySelector('.btn-enviar-respuestas');
                    botonEnviar.style.display = 'block';
                }
            } else {
                // Si no hay siguiente pregunta en esta área, cambiamos a la siguiente área
                areaActual.style.display = 'none';
                var siguienteArea = areaActual.nextElementSibling;
                if (siguienteArea) {
                    siguienteArea.style.display = 'block';
                }

                // Verificar si estamos en la última área y activar el botón "Enviar Respuestas"
                var todasRespondidas = true;
                areas.forEach(function (area) {
                    var preguntas = area.querySelectorAll('.pregunta');
                    preguntas.forEach(function (pregunta) {
                        var preguntaId = pregunta.querySelector('input[type="radio"]').getAttribute('name').match(/\d+/)[0];
                        if (!respuestas[preguntaId]) {
                            todasRespondidas = false;
                        }
                    });
                });

                // Habilitar el botón "Enviar Respuestas" si todas las preguntas están respondidas
                var botonEnviar = document.querySelector('.btn-enviar-respuestas');
                botonEnviar.style.display = todasRespondidas ? 'block' : 'none';
            }
            console.log(respuestas);
        }

         function enviarRespuestas() {
        var respuestasJSON = JSON.stringify(respuestas);

        // Asignar el JSON de respuestas al campo oculto del formulario
        var respuestasInput = document.getElementById('respuestasJSON');
        if (respuestasInput) {
            respuestasInput.value = respuestasJSON;

            // Enviar el formulario
            var form = document.querySelector('.form-questions');
            if (form) {
                form.submit();
            }
        }
        console.log(respuestasJSON);
    }

        document.addEventListener('DOMContentLoaded', function () {
            var preguntas = document.querySelectorAll('.pregunta');
            totalPreguntas = preguntas.length;
            totalRespuestasEsperadas = totalPreguntas; // El número total de respuestas esperadas es igual al número de preguntas.

            // Deshabilitar el botón "Enviar Respuestas" al cargar la página
            var botonEnviar = document.querySelector('.btn-enviar-respuestas');
            botonEnviar.style.display = 'none';
        });
    </script>
</body>
</html>