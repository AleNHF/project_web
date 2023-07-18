<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('tiempo') }}
            {{ Form::text('tiempo', $partida->tiempo, ['class' => 'form-control' . ($errors->has('tiempo') ? ' is-invalid' : ''), 'placeholder' => 'Tiempo']) }}
            {!! $errors->first('tiempo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('resultado') }}
            {{ Form::text('resultado', $partida->resultado, ['class' => 'form-control' . ($errors->has('resultado') ? ' is-invalid' : ''), 'placeholder' => 'Resultado']) }}
            {!! $errors->first('resultado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('juego_id') }}
            {{ Form::text('juego_id', $partida->juego_id, ['class' => 'form-control' . ($errors->has('juego_id') ? ' is-invalid' : ''), 'placeholder' => 'Juego Id']) }}
            {!! $errors->first('juego_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pregunta_id') }}
            {{ Form::text('pregunta_id', $partida->pregunta_id, ['class' => 'form-control' . ($errors->has('pregunta_id') ? ' is-invalid' : ''), 'placeholder' => 'Pregunta Id']) }}
            {!! $errors->first('pregunta_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>