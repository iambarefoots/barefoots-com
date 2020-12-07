@extends('layout/main')
@section('title','SIGN IN')
@section('container')
<div class="container mt-5">
	<div class="row">
		<div class="col text-center">
			<button style="border-radius:25px;" type="button" class="btn btn-info btn-lg">
				<a style="text-decoration: none;font-family: Raleway;" class="text-white" href="/">HOME</a>
			</button>
		</div>
	</div>
</div>
<div style="font-family: Raleway;" class="container mt-5">
	<div class="row">
		<div class="col-3"></div>
		<div class="col-6 border-top pt-2">
			<h3 class="text-center">SIGN IN</h3>
			<br>
		<form class="form-signin px-5" method="POST" action="{{route('login')}}">
				{{ csrf_field() }}
				<label for="inputEmail" class="sr-only">Email address</label>
				<input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
				<br>
				<label for="inputPassword" class="sr-only">Password</label>
				<input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
				<div class="checkbox mb-3">
					<br>
				  <label>
					<input type="checkbox" value="remember-me"> Remember me
				  </label>
				</div>
				<button class="btn btn-lg btn-info btn-block" type="submit">Sign in</button>
				<p class="mt-5 mb-3 text-muted text-center">&copy; iambarefoots x rikimaru</p>
			  </form>
		</div>
		<div class="col-3"></div>
	</div>
</div>
@endsection