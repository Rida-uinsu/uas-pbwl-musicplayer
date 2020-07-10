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
	<center><h2>Data Tracks</h2></center>
	<a  href="{{ url('tracks/create') }}" class="btn btn-success bg-succes">+ Tambah Data</a>
	<table class="table">
		<thead class="bg-light">
		<tr style="background-color:#FF7F50; color: white";>
			<th scope="col" style="font-size: 15px">NO</th>
			<th scope="col" style="font-size: 13px">JUDUL LAGU</th>
			<th scope="col" style="font-size: 15px">ARTIS-ALBUM</th>
			<th scope="col" style="font-size: 15px">NAMA  FILE</th>
			<th scope="col" style="font-size: 15px">DURASI</th>
			<th scope="col" style="font-size: 15px">EDIT</th>
		</tr>

		@foreach($rows as $row)
		<tr style="background-color: #fFF5EE; color: black; border: 2px solid salmon">
			<td>{{ $row->id }}</td>
			<td>{{ $row->tracks_name }}</td>
			<td>{{ $row->album->artist->artist_name }} - {{ $row->album->album_name}}</td>
			<td>{{ $row->tracks_file }}</td>
			<td>{{ $row->tracks_time }}</td>

			<td>
				<a href="{{ url('tracks/' . $row->id . '/edit')}}" class="btn btn-warning">EDIT</a>
				
				<form action="{{ url('tracks/' . $row->id)}}" method="post" class="d-inline">
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