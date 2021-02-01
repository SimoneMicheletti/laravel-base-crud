@extends('layouts.main-layout')

@section('content')
	
	<form action="{{ route('peripheral-store') }}" method="POST">

		@csrf
		@method('POST')

		<label for="name">Name:</label>
		<input name="name" type="text">

		<br>
		
		<label for="model">Model:</label>
		<input name="model" type="text">

		<br>

		<label for="price">Price:</label>
		<input name="price" type="text">

		<br>

		<label for="consumption">Consumption:</label>
		<input name="consumption" type="text">

		<br>

		<input type="submit" value="SAVE">


	</form>

@endsection