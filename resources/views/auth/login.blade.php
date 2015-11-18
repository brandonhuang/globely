@extends('layouts.main')

@section('javascript')
	<script src="/js/ball_physics.js"></script>
@stop

@section('content')
	<section class="form">
		<div>
			<div class="card">
				@if (count($errors) > 0)
					<div class="error">
						@foreach ($errors->all() as $error)
							<p>{{ $error }}</p>
						@endforeach
					</div>
				@endif
				<div class="card-header">
					<img id="globely-logo" src="/images/globely_logo.png" alt="Globely Icon">
				</div>
				<div class="card-content">
					<form method="POST" action="/auth/login">
						{!! csrf_field() !!}
						<label for="email">Email</label>
						<input id="email" name="email" type="email" required value="{{ old('email') }}">
						<label id="password">Password</label>
	          <input id="password" type="password" name="password" required>
						<input class="teal" type="submit" value="Login">
					</form>
				</div>
			</div>
	  </div>
	</section>
@stop
