@extends('layouts.main-layout')

@section('content')
	<h1>Available peripherals list</h1>

	<ul>
		@foreach ($peripherals as $peripheral)
			<li>
				<a href="{{ route('peripheral', $peripheral -> id) }}">
					{{$peripheral -> name}}				
				</a>
			</li>
		@endforeach
	</ul>

	<h2>
		<a href="{{ route('peripheral-create') }}">
			ADD NEW PERIPHERAL
		</a>
	</h2>

@endsection