@extends('layouts.app')
@section('content')


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@700&display=swap" rel="stylesheet">

	<style type="text/css">
		h2 {
			margin-bottom: 20px;
			margin-top: 15px;
			color: #DC143C;
			font-family: 'PT Sans';
			font-size: 40px;
		}
		
		.btn {
			color: white;
		}

		label {
			font-family: 'PT Sans'; 
			color: black;
		}

	</style>
</head>
<body>
	<div class="container">
	<div class="col-md-10">

	<h2>Edit Data Album</h2>
	<form action="{{ url('/tracks/' . $rows->id)}}" method="post" enctype="multipart/form-data">
	<input name="_method" type="hidden" value="patch" >
	@csrf

	<table>
		<div class="form-group row">
			<label for="inputEmail3" class="col-sm-3 col-form-label" style="font-size: 20px">Judul Lagu</label>:
		<div class="col-sm-5">
			<input type="text" name="tracks_name" value="{{ $rows->tracks_name}}" style="background-color: #F08080; color: white" class="form-control" id="inputEmail3">
		</div>
		</div>


		<div class="form-group row">
			<label for="inputEmail3" class="col-sm-3 col-form-label" style="font-size: 20px">File</label>:
		<div class="col-sm-5">
			<input type="file" name="tracks_file" id="inputEmail3">
		</div>
		</div>

		<div class="form-group row">
			<label for="inputEmail3" class="col-sm-3 col-form-label" style="font-size: 20px">Album - Artist</label>:
		<div class="col-sm-5">
			<select name="album_id" class="form-control" style="background-color: #F08080; color: white">
				@foreach($album as $row)
				<option value="{{$row->id}}"
				@if($row->id ==$rows->id)
				selected
				@endif
				>{{$row->album_name}} - {{$row->artist->artist_name}}</option>
				@endforeach
			</select>
		</div>
		</div>


		<div class="form-group row">
			<label for="inputEmail3" class="col-sm-3 col-form-label" style="font-size: 20px">Durasi</label>:
		<div class="col-sm-5">
			<input type="text" name="tracks_time" value="{{ $rows->tracks_time}}" style="background-color: #F08080; color: white" class="form-control" id="inputEmail3">
		</div>
		</div>

	</table>
			<div class="form-group row">
			<div class="col-sm-10">
				<input type="submit" value="UPDATE" class="btn" style="background-color: #DC143C">
			<div>
			</div>


	</form>
</div>
</body>
</html>

@endsection