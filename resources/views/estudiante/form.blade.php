<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group" style="margin-bottom: 10px">
            {{ Form::label('Carrera de Interés') }}
            {{ Form::text('carreraInteres', $estudiante->carreraInteres, ['class' => 'form-control' . ($errors->has('carreraInteres') ? ' is-invalid' : ''), 'placeholder' => 'Carrera de interés']) }}
            {!! $errors->first('carreraInteres', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group" style="margin-bottom: 10px">
            {{ Form::label('Colegio') }}
            {{ Form::text('colegio', $estudiante->colegio, ['class' => 'form-control' . ($errors->has('colegio') ? ' is-invalid' : ''), 'placeholder' => 'Colegio']) }}
            {!! $errors->first('colegio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group" style="margin-bottom: 10px">
            {{ Form::label('Grado') }}
            {{ Form::text('grado', $estudiante->grado, ['class' => 'form-control' . ($errors->has('grado') ? ' is-invalid' : ''), 'placeholder' => 'Grado cursado']) }}
            {!! $errors->first('grado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group" style="margin-bottom: 10px">
            {{ Form::label('usuario_id') }}
            {{ Form::text('usuario_id', $estudiante->usuario_id, ['class' => 'form-control' . ($errors->has('usuario_id') ? ' is-invalid' : ''), 'placeholder' => 'Usuario Id']) }}
            {!! $errors->first('usuario_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt20" style="margin-top: 15px">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>
