

<div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
    <div style="text-align: center;">
        <h1>Resultados por ahora:</h1>
        <p>Resultado Final: {{ $resultado_final }}</p>
        <p>Ganador: {{ $ganador }}</p>
        <a href="{{ route('game') }}" style="display: inline-block; margin-top: 20px; padding: 10px 20px; background-color: #007bff; color: #fff; text-decoration: none; border-radius: 4px;">Salir</a>
    </div>
</div>
