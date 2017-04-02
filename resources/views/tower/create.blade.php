@extends ('tower-map')

@section ('main-page')
<h1>Tambah Tower</h1>

{!! Form::open(['route' => 'tower.store', 'class' => 'form-horizontal']) !!}

@include ('tower.form')

{!! Form::close() !!}

@endsection