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
	<form action="{{ url('/album/' . $rows->id)}}" method="post">
	<input name="_method" type="hidden" value="patch">
	@csrf

	<table>
		<div class="form-group row">
			<label for="inputEmail3" class="col-sm-2 col-form-label" style="font-size: 18px">Nama Album</label>:
		<div class="col-sm-5">
			<input type="text" name="album_name" value="{{ $rows->album_name}}" style="background-color: #F08080; color: white" class="form-control" id="inputEmail3">
		</div>
		</div>

		<div class="form-group row">
			<label for="inputEmail3" class="col-sm-2 col-form-label" style="font-size: 19px">Nama Artist</label>:
		<div class="col-sm-5">
			<select name="artist_id" class="form-control" style="background-color: #F08080; color: white">
				@foreach($artist as $row)
				<option value="{{$row->id}}"
				@if($row->id ==$rows->artist_id)
				selected
				@endif
				>{{$row->artist_name}}</option>
				@endforeach
			</select>
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