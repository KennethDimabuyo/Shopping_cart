@extends('layouts.app')

@section('title')
	Nekko Cart
@stop

@section('content')
	<style type="text/css">
		body{	
			margin: 0;
			background-color: #2a363b;
			color: #ffcc00;
		}
	</style>

	<div class="cart-wrap">
		<table class="table table-striped">
			<tr>
				<td>Photo</td>
				<td>Name</td>
				<td>Quantity</td>
				<td>Price</td>
				<td></td>
			</tr>
			@if (Auth::guest())
				<div class="empty">
					Your cart is empty.
				</div>
			@else
				@foreach($carts as $cart)
					<tr>
						<td><img src="/img/{{ $cart->photo }}" style="width: 130px; height: 100px; position: relative;"></td>
						<td>{{ $cart->name }}</td>
						<td><input type="number" name="qty" value="{{ $cart->quantity }}"></td>
						<td>{{ $cart->price }}</td>
						<td><button>X</button></td>
					</tr>
				@endforeach
			@endif
		</table>
	</div>
@stop