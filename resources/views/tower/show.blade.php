@extends ('tower-map')

@section('main-page')
<h1>Data Tower</h1>

<p>Berikut ini adalah data pasien yang anda pilih</p>
<table>
<tr><td><b>Nomor</b></td>
<td>: {{ $tower->id }}</td></tr>
<tr><td><b>Nama Pasien</b></td>
<td>: {{ $tower->long1 }}</td></tr>
<tr><td><b>Tanggal Lahir</b></td>
<td>: {{ $tower->lat1}} </td></tr>
<tr><td><b>Tanggal Masuk</b></td>
<td>: {{ $tower->created_at}}</td></tr>
</table>

<p>
<a href="{{ route('tower.show_edit', $tower->id) }}"><button class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</button></a>
<a href="{{ route('tower.get_destroy', $tower->id) }}"><button class="btn btn-danger" onclick="return deleteConfirmation();"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Hapus</button></a>
</p>

@endsection