@extends ('tower-map')

@section ('main-page')
<h3>Add Tower</h3>

{!! Form::open(['route' => 'tower.store', 'class' => 'form-horizontal']) !!}

@include ('tower.form')

{!! Form::close() !!}

@endsection