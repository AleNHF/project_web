<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group" style="margin-bottom: 10px">
            {{ Form::label('Pregunta') }}
            {{ Form::text('texto', $pregunta->texto, ['class' => 'form-control' . ($errors->has('texto') ? ' is-invalid' : ''), 'placeholder' => 'Texto']) }}
            {!! $errors->first('texto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group" style="margin-bottom: 10px">
            {{ Form::label('Área') }}
            {{ Form::select('area_id', $areas->pluck('nombre', 'id'), $pregunta->area_id, ['class' => 'form-control' . ($errors->has('area_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione un área']) }}
            {!! $errors->first('area_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <h5>Respuestas</h5>
        <div class="row">
            @for ($i = 1; $i <= 5; $i++)
                <div class="col-md-8">
                    <div class="form-group" style="margin-bottom: 10px">
                        {{ Form::label('Respuesta ' . $i) }}
                        {{ Form::text('respuestas[' . ($i - 1) . '][texto]', isset($pregunta) ? $pregunta->respuestas[$i - 1]['texto'] : null, ['class' => 'form-control' . ($errors->has('texto') ? ' is-invalid' : ''), 'placeholder' => 'Respuesta ' . $i]) }}
                        {!! $errors->first('texto', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        {{ Form::label('Respuesta', 'Seleccione una opción') }}
                        {{ Form::select('respuestas[' . ($i - 1) . '][esCorrecta]', [true => 'Correcta', false => 'Incorrecta'], isset($pregunta) ? $pregunta->respuestas[$i - 1]['esCorrecta'] : null, ['class' => 'form-control' . ($errors->has('esCorrecta') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una opción']) }}
                        {!! $errors->first('esCorrecta', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                </div>
            @endfor
        </div>        
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>