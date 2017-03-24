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

<div class="form-group">
{!! Form::submit('OK', ['class' => 'btn btn-primary']) !!}
</div>