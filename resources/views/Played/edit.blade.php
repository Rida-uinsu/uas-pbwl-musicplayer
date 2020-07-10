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

	<h2>Edit Data Played</h2>
	<form action="{{ url('/played/' . $rows->id)}}" method="post" enctype="multipart/form-data">
	<input name="_method" type="hidden" value="patch" >
	@csrf

	<table>
		<div class="form-group row">
			<label for="inputEmail3" class="col-sm-3 col-form-label" style="font-size: 18px">Tracks</label>:
		<div class="col-sm-5">
			<select name="tracks_id" class="form-control" style="background-color: #F08080; color: white">
				@foreach($tracks as $row)
				<option value="{{$row->id}}"
				@if($row->id ==$rows->id)
				selected
				@endif
				>{{$row->tracks_name}} - {{ $row->album->artist->artist_name}}</option>
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