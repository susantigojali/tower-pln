<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
{!! Form::label('name', 'Nama:') !!}
{!! Form::text('name', null, ['class' => 'form-control']) !!}
{!! $errors->first('name', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('long1') ? 'has-error' : '' }}">
{!! Form::label('long1', 'long1:') !!}
{!! Form::text('long1', null, ['class' => 'form-control']) !!}
{!! $errors->first('long1', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('lat1') ? 'has-error' : '' }}">
{!! Form::label('lat1', 'lat1:') !!}
{!! Form::text('lat1', null, ['class' => 'form-control']) !!}
{!! $errors->first('lat1', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('long1') ? 'has-error' : '' }}">
{!! Form::label('long2', 'long2:') !!}
{!! Form::text('long2', null, ['class' => 'form-control']) !!}
{!! $errors->first('long2', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('lat1') ? 'has-error' : '' }}">
{!! Form::label('lat2', 'lat2:') !!}
{!! Form::text('lat2', null, ['class' => 'form-control']) !!}
{!! $errors->first('lat2', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('long1') ? 'has-error' : '' }}">
{!! Form::label('long3', 'long3:') !!}
{!! Form::text('long3', null, ['class' => 'form-control']) !!}
{!! $errors->first('long3', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('lat1') ? 'has-error' : '' }}">
{!! Form::label('lat3', 'lat3:') !!}
{!! Form::text('lat3', null, ['class' => 'form-control']) !!}
{!! $errors->first('lat3', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('long1') ? 'has-error' : '' }}">
{!! Form::label('long4', 'long4:') !!}
{!! Form::text('long4', null, ['class' => 'form-control']) !!}
{!! $errors->first('long4', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('lat1') ? 'has-error' : '' }}">
{!! Form::label('lat4', 'lat4:') !!}
{!! Form::text('lat4', null, ['class' => 'form-control']) !!}
{!! $errors->first('lat1', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group">
{!! Form::submit('OK', ['class' => 'btn btn-primary']) !!}
</div>