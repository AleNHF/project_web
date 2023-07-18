<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('carreraInteres') }}
            {{ Form::text('carreraInteres', $estudiante->carreraInteres, ['class' => 'form-control' . ($errors->has('carreraInteres') ? ' is-invalid' : ''), 'placeholder' => 'Carrerainteres']) }}
            {!! $errors->first('carreraInteres', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('colegio') }}
            {{ Form::text('colegio', $estudiante->colegio, ['class' => 'form-control' . ($errors->has('colegio') ? ' is-invalid' : ''), 'placeholder' => 'Colegio']) }}
            {!! $errors->first('colegio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('grado') }}
            {{ Form::text('grado', $estudiante->grado, ['class' => 'form-control' . ($errors->has('grado') ? ' is-invalid' : ''), 'placeholder' => 'Grado']) }}
            {!! $errors->first('grado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('usuario_id') }}
            {{ Form::text('usuario_id', $estudiante->usuario_id, ['class' => 'form-control' . ($errors->has('usuario_id') ? ' is-invalid' : ''), 'placeholder' => 'Usuario Id']) }}
            {!! $errors->first('usuario_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>