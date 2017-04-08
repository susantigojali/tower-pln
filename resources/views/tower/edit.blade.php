@extends ('tower-map')

@section('main-page')
<h3>Edit Tower</h3>

{!! Form::model($tower, ['route' => ['tower.update', $tower->id], 'method' => 'PUT', 'class' => 'form-horizontal']) !!}

@include ('tower.form')

{!! Form::close() !!}

@endsection