@extends('layouts.app')

@section('title')
	Sign in
@stop

@section('content')

	<div class="bg-login">
		<div class="user-box1">
			<img class="user-logo" src="/img/UserLogo.png">
			<h2 class="kl-h21">Sign In Here</h2>
			@if (count($errors) > 0)
				@foreach($errors->all() as $error)
					<div class="alert alert-danger">
						<p>{{ $error }} </p>
						<br>
					</div>
				@endforeach
			@endif
			<form method="post" action="/user/signin">
				<p>Email</p>
				<input type="text" name="email" placeholder="Enter Email">
				<p>Password</p>
				<input type="password" name="password" placeholder="••••••">
				<input type="submit" class="sign-in" name="" value="Submit">
				<a href="#" class="forget-pass">Forget Password</a><a class="kl-signup" href="/user/signup">Sign up</a>
				{{ csrf_field() }}
			</form>
			
		</div>
	</div>

@stop