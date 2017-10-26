@extends('layouts.app')

@section('title')
	Sign Up
@stop

@section('content')
	<div class="bg-login">
		<div class="user-box">
			<img class="user-logo" src="/img/UserLogo.png">
			<h2 class="kl-h21">Sign Up Here</h2>
			<form method="post" action="signup">
			<p>Name</p>
				<input type="text" name="fname" placeholder="Enter FullName">
				<p>Email</p>
				<input type="text" name="email" placeholder="Enter Email">
				<p>Password</p>
				<input type="password" name="password" placeholder="••••••">
				<input type="submit" class="sign-up" name="" value="Submit">
				{{ csrf_field() }}
			</form>
			
		</div>
	</div>
@stop