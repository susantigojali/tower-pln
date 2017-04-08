@extends ('tower-map')

@section('main-page')
<h4>Tower List</h4>

<form method="get">
<div class="input-group">
  <input type="text" class="form-control" placeholder="Search for tower" name="name">
  <span class="input-group-btn">
    <button class="btn btn-default" type="submit">Search</button>
  </span>
</div>
</form>

<br>

 <a href="{{route('tower.create') }}">
 	<button class="btn btn-primary" ><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add</button>
 </a>


@if(!is_null(Session::get('message')))
	<br><br>
	<div class="alert alert-danger">
        <span class="close" data-dismiss="alert">&times;</span>
        <strong>Error!</strong> {{ Session::get('message') }}
    </div>
@endif

<table class="table table-hover">
<thead>
	<tr>
	<th>No.</th>
	<th>Tower Name</th>
	<th>long1</th>
	<th>lat1</th>
	<th>long2</th>
	<th>lat2</th>
	<th>long3</th>
	<th>lat3</th>
	<th>long4</th>
	<th>lat4</th>
	<th></th>
	</tr>
</thead>
<tbody>
	@foreach ($towers as $towerNo => $tower)
	<tr>
	<td>{{ $towerNo+1 }}</td>
	<td>{{ $tower->name }}</td>
	<td>{{ $tower->long1 }}</td>
	<td>{{ $tower->lat1 }}</td>
	<td>{{ $tower->long2 }}</td>
	<td>{{ $tower->lat2 }}</td>
	<td>{{ $tower->long3 }}</td>
	<td>{{ $tower->lat3 }}</td>
	<td>{{ $tower->long4 }}</td>
	<td>{{ $tower->lat4 }}</td>
	<td>
	<a href="{{ route('tower.edit', $tower->id) }}"><button class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</button></a>
	<a href="{{ route('tower.get_destroy', $tower->id) }}"><button class="btn btn-danger" onclick="return deleteConfirmation();"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete</button></a>
	</td>
	</tr>
	@endforeach
	@if(count($towers)==0)
	<tr>
	<th colspan="11"><h2><center>No Result</center></h2></th>
	</tr>
	@endif
</tbody>
</table>
@endsection