@extends ('tower-map')

@section('main-page')
<h1>Ubah Pasien</h1>

{!! Form::model($tower, ['route' => ['tower.update', $tower->id], 'method' => 'PUT']) !!}

@include ('tower.form')

{!! Form::close() !!}

@endsection