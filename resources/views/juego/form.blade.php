<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $juego->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $juego->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::text('fecha', $juego->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ganador') }}
            {{ Form::text('ganador', $juego->ganador, ['class' => 'form-control' . ($errors->has('ganador') ? ' is-invalid' : ''), 'placeholder' => 'Ganador']) }}
            {!! $errors->first('ganador', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('resultado_final') }}
            {{ Form::text('resultado_final', $juego->resultado_final, ['class' => 'form-control' . ($errors->has('resultado_final') ? ' is-invalid' : ''), 'placeholder' => 'Resultado Final']) }}
            {!! $errors->first('resultado_final', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estudiante_creador_id') }}
            {{ Form::text('estudiante_creador_id', $juego->estudiante_creador_id, ['class' => 'form-control' . ($errors->has('estudiante_creador_id') ? ' is-invalid' : ''), 'placeholder' => 'Estudiante Creador Id']) }}
            {!! $errors->first('estudiante_creador_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estudiante_jugador_id') }}
            {{ Form::text('estudiante_jugador_id', $juego->estudiante_jugador_id, ['class' => 'form-control' . ($errors->has('estudiante_jugador_id') ? ' is-invalid' : ''), 'placeholder' => 'Estudiante Jugador Id']) }}
            {!! $errors->first('estudiante_jugador_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>