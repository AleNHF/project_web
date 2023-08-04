<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group" style="margin-bottom: 10px">
                    {{ Form::label('Nombre completo') }}
                    {{ Form::text('name', $user->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre completo']) }}
                    {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group" style="margin-bottom: 10px">
                    {{ Form::label('Email') }}
                    {{ Form::text('email', $user->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
                    {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="form-group" style="margin-bottom: 10px">
                    {{ Form::label('Telefono') }}
                    {{ Form::text('telefono', $user->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
                    {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="form-group" style="margin-bottom: 10px">
                    {{ Form::label('Carnet de Identidad') }}
                    {{ Form::text('ci', $user->ci, ['class' => 'form-control' . ($errors->has('ci') ? ' is-invalid' : ''), 'placeholder' => 'Carnet de Identidad']) }}
                    {!! $errors->first('ci', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="form-group" style="margin-bottom: 10px">
                    {{ Form::label('Roles') }}
                    {{ Form::select('roles[]', $roles, $userRole, ['class' => 'form-select']) }}
                    {!! $errors->first('roles', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
        <div class="row">
            {{-- <div class="col-md-6">
                <h5>Docente</h5>
                <div class="form-group" style="margin-bottom: 10px">
                    {{ Form::label('Especialidad') }}
                    {{ Form::text('especialidad', $docente->especialidad ?? null, ['class' => 'form-control' . ($errors->has('especialidad') ? ' is-invalid' : ''), 'placeholder' => 'Especialidad']) }}
                    {!! $errors->first('especialidad', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div> --}}
            <div class="col-md-6">
                <h5>Administrativo</h5>
                <div class="form-group" style="margin-bottom: 10px">
                    {{ Form::label('Cargo') }}
                    {{ Form::text('cargo', $administrativo->cargo ?? null, ['class' => 'form-control' . ($errors->has('cargo') ? ' is-invalid' : ''), 'placeholder' => 'Cargo ocupado']) }}
                    {!! $errors->first('cargo', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
    </div>
    <div class="box-footer mt20" style="margin-top: 15px">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>
