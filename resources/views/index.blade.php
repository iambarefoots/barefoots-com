@extends('layout/main')
@section('title','BAREFOOTS')
@section('container')
<div class="container mt-5">
	<div class="row">
		<div class="col text-center">
			<button style="border-radius: 25px;" type="button" class="btn btn-info btn-lg">
				<a style="text-decoration: none;font-family: Raleway;" class="text-white" href="/login">SIGN IN</a>
			</button>
			<button style="border-radius: 25px;" type="button" class="btn btn-info btn-lg">
				<a style="text-decoration: none;font-family: Raleway;" class="text-white" href="/register">SIGN UP</a>
			</button>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col text-center">
			<h1 class="mt-5" style="font-family: 'Fugaz One';font-size: 100px;">HARTA, TAHTA, PEMROGRAMAN WEB LANJUT</h1>
			<button style="border-radius: 25px;" type="button" class="btn btn-info btn-lg">
				<a style="text-decoration: none;font-family: Raleway;" class="text-white" href="/biodata">BIODATA</a>
			</button>
		</div>
	</div>
</div>
@endsection