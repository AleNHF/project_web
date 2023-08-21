@extends('layouts.game')

@section('content')
    <section id="hero" class="hero">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-10 custom-col align-left">
                <h3 class="text-white mb-4">Elige a tu Rival</h3>
                <select class="form-select" id="studentDropdown" name="selectedStudent">
                    <option value="" disabled selected>Selecciona un estudiante</option>
                    {{-- @foreach ($datosUsuarios as $usuario)
                    <option value="{{ $usuario['id'] }}">{{ $usuario['name'] }}</option>
                @endforeach --}}
                </select>
                <!-- Aggiungere il pulsante di invio qui -->
                <button type="button" class="btn btn-primary mt-3" style="margin-left: 50px;" data-sala-id="#"
                    onclick="jugar()">Juguemos</button>
                <!-- Botón para abrir el card flotante -->
                <button type="button" class="btn btn-primary mt-3" style="margin-left: 50px;" data-sala-id="#"
                    onclick="mostrarCard()">Unete a una Sala</button>

                <!-- Card flotante -->
                <div id="cardFlotante"
                    style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);">
                    <h2>Ingrese un texto</h2>
                    <input type="text" id="textoIngresado" placeholder="Ingrese aquí"
                        style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px;">
                    <!-- En tu archivo de vista Blade (.blade.php) -->
                    <input type="hidden" id="userId" value="{{ auth()->user()->id }}">
                    <button type="button" class="btn btn-primary" onclick="redireccionar()">Enviar</button>
                    <button type="button" class="btn btn-secondary" onclick="ocultarCard()">Cancelar</button>
                </div>

            </div>
        </div>
    </section>


    <script>
        function jugar() {
            // Obtener el ID del usuario seleccionado en el select
            var UserId = document.getElementById('studentDropdown').value;
            var salaId = document.querySelector('.btn-primary[data-sala-id]').getAttribute('data-sala-id');
            // Redirigir a la ruta "/preguntas" con el ID del usuario seleccionado como parámetro
            window.location.href = '/jueguito/preguntas/' + salaId + '/' + UserId;
        }

        // Función para mostrar el card flotante
        function mostrarCard() {
            var cardFlotante = document.getElementById('cardFlotante');
            cardFlotante.style.display = 'block';
        }

        // Función para ocultar el card flotante
        function ocultarCard() {
            var cardFlotante = document.getElementById('cardFlotante');
            cardFlotante.style.display = 'none';
        }

        // Función para redireccionar a la vista con el texto ingresado
        function redireccionar() {
            var userId = document.getElementById('userId').value;
            var salaId = document.getElementById('textoIngresado').value;
            // Reemplaza 'ruta_destino' con la ruta que deseas redireccionar, y agrega el parámetro con el texto ingresado.
            window.location.href = '/jueguito/preguntas/' + encodeURIComponent(salaId) + '/' + userId;
            console.log(window.location.href);
        }
    </script>
@endsection

<style>
    /* Estilos para el contenedor */
    /* Estilos para el contenedor */
    .container {
        max-width: 800px;
        /* Ajusta el ancho máximo según tus necesidades */
        margin: 0 auto;
        /* Centra el contenedor horizontalmente */
        padding: 20px;
        /* Añade un poco de espacio interno al contenedor */
    }

    /* Estilos para la clase hero */
    .hero {
        margin: 0 10px background-color: #f2f2f2;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        padding-left: 10px;
        /* Ajusta el espacio a la izquierda */
    }

    /* Estilos para el texto dentro de la clase hero */
    .hero h3 {
        color: #333;
    }

    /* Estilos para el select dentro de la clase hero */
    .hero select {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    /* Estilos para el botón dentro de la clase hero */
    .hero button {
        padding: 15px 30px;
        /* Ajusta el padding para más espacio vertical y horizontal */
        margin-top: 15px;
        /* Ajusta el margen superior para dar espacio entre el select y el botón */
        margin-bottom: 15px;/ color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .hero button:hover {
        background-color: #0056b3;
    }

    #cardFlotante {
        max-width: 400px;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }
</style>
