@extends('layout/main')
@section('title','SIGN UP')
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
			<h3 class="text-center">SIGN UP</h3>
			<br>
        <form class="form-signin px-5" method="POST" action="{{route('register')}}">
                {{ csrf_field() }}
                <label for="inputEmail" class="sr-only">Name</label>
        <input type="text" name="name" id="inputName" class="form-control" placeholder="Place your name.." required autofocus>
                <br>
                <label for="inputEmail" class="sr-only">Email address</label>
				<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required>
				<br>
				<label for="inputPassword" class="sr-only">Password</label>
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <br>
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" name="password_confirmation" id="inputPassword" class="form-control" placeholder="Password" required>
				<br>
				<label for="inputPhone" class="sr-only">Phone</label>
                <input type="text" name="phone" id="inputPhone" class="form-control" placeholder="Phone" required>
				<br>
				<label for="inputAddress" class="sr-only">Address</label>
                <input type="text" name="address" id="inputAddress" class="form-control" placeholder="Address" required>
                <br><br>
                <button class="btn btn-lg btn-info btn-block" type="submit">Sign Up</button>
				<p class="mt-5 text-muted text-center">&copy; iambarefoots  x  rikimaru</p>
			  </form>
		</div>
		<div class="col-3"></div>
	</div>
</div>
@endsection