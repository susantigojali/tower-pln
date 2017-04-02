@extends ('tower-map')

@section('main-page')
<h1>Ubah Pasien</h1>

{!! Form::model($tower, ['route' => ['tower.update', $tower->id], 'method' => 'PUT', 'class' => 'form-horizontal']) !!}

@include ('tower.form')

{!! Form::close() !!}

@endsection