<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('texto') }}
            {{ Form::text('texto', $respuesta->texto, ['class' => 'form-control' . ($errors->has('texto') ? ' is-invalid' : ''), 'placeholder' => 'Texto']) }}
            {!! $errors->first('texto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('esCorrecta') }}
            {{ Form::text('esCorrecta', $respuesta->esCorrecta, ['class' => 'form-control' . ($errors->has('esCorrecta') ? ' is-invalid' : ''), 'placeholder' => 'Escorrecta']) }}
            {!! $errors->first('esCorrecta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pregunta_id') }}
            {{ Form::text('pregunta_id', $respuesta->pregunta_id, ['class' => 'form-control' . ($errors->has('pregunta_id') ? ' is-invalid' : ''), 'placeholder' => 'Pregunta Id']) }}
            {!! $errors->first('pregunta_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>