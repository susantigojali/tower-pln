@extends ('tower-map')

@section ('main-page')
<h1>Tambah Tower</h1>

{!! Form::open(['route' => 'tower.store']) !!}

@include ('tower.form')

{!! Form::close() !!}

@endsection