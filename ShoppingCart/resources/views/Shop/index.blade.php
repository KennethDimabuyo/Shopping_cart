@extends('layouts.app')

@section('title')
	Nekko Shop
@stop

@section('content')

	<div class="content">
		<div class="container">
			<div class="large-space">
				<h2>Nekko Shop</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>

			<div>
				@foreach ($products as $product)
					<div class="products_wrap">
						<img src="img/{{ $product->photo }}">
						<div class="item__tag">{{ $product->name }} - <strong>{{ $product->price }}</strong></div>
						@if(Auth::guest())
							<input type="submit" value="Add to cart" name="modal" class="btn-success" id="btn-modal" onclick="showDlg()">
						@else
							<a href="/addtocart/{{ $product->id }}"><div class="btn-success">Add to Cart</div></a>
						@endif
					</div>
				@endforeach
				<!-- Modal -->
				<div id="white-background"></div>
				<div id="klbox">
					<div id="kl-header">You are logged out.</div>
					<div id="kl-body">Kindly log in to continue.</div>
					<div id="kl-footer">
						<a href="/user/signin"><button onclick="klLogin()">Log in</button></a>
					</div>
				</div>

			</div>
		</div>
	</div>

<script src="js/jquery-3.2.1.js"></script>
<script src="js/jquery-3.2.1.min.js"></script>
<script>
	function klLogin() {
		var whitebg = document.getElementById('white-background');
		var dlg = document.getElementById('klbox');
		whitebg.style.display = "none";
		dlg.style.display = "none";
	}

	function showDlg() {
		var whitebg = document.getElementById('white-background');
		var dlg = document.getElementById('klbox');
		whitebg.style.display = "block";
		dlg.style.display = "block";

		var winWidth = window.innerWidth;
		var winHeight = window.innerHeight;

		dlg.style.left = (winWidth/2) - 480/2 + "px";
		dlg.style.top = "150px";
	}
</script>

@stop