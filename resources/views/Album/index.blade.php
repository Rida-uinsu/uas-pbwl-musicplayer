@extends('layouts.app')
@section('content')


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@700&display=swap" rel="stylesheet">
	<style type="text/css">
		h2	{
			margin-bottom: 20px;
			margin-top: 15px;
			color: #DC143C;
			font-family: 'PT Sans';
			font-size: 35px;
			
		}

		table th {
			font-family: 'Nunito';
		}

		table {
			margin-top: 10px;
			text-align: center;
			border: 2px solid salmon;
		}

		table td {
		border: 2px solid salmon;
	}
	</style>
</head>

<body>
	<div class="container">
	<center><h2>Data Album</h2></center>
	<a  href="{{ url('album/create') }}" class="btn btn-success bg-succes">+ Tambah Data</a>
	<table class="table">
		<thead class="bg-light">
		<tr style="background-color:#FF7F50; color: white";>
			<th scope="col">NO</th>
			<th scope="col">NAMA</th>
			<th scope="col">ARTIST</th>
			<th scope="col">EDIT</th>
		</tr>

		@foreach($rows as $row)
		<tr style="background-color: #fFF5EE; color: black; border: 2px solid salmon";>
			<td>{{ $row->id }}</td>
			<td>{{ $row->album_name }}</td>
			<td>{{ $row->artist->artist_name }}</td>
			<td>
				<a href="{{ url('album/' . $row->id . '/edit')}}" class="btn btn-warning">EDIT</a>
				
				<form action="{{ url('album/' . $row->id)}}" method="post" class="d-inline">
					<input name="_method" type="hidden" value="delete">
					@csrf
					<button class="btn btn-danger">DELETE</button>
				</form>
			</td>
		</tr>
		@endforeach
	</table>
	
</div>
</body>
</html>


@endsection