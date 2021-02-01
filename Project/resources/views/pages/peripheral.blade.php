@extends('layouts.main-layout')

@section('content')
	
	<h1>{{ $peripheral -> name }}</h1>

	Detail:
	<ul>
		<li>Model: {{ $peripheral -> model }}</li>
		<li>Price: {{ $peripheral -> price }}</li>
		<li>Consumption: {{ $peripheral -> consumption }}</li>
	</ul>


@endsection