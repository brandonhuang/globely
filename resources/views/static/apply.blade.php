@extends('layouts.main')

@section('content')
	<section>
		<div class="content">
			<p>Thank you for your interest in joining the GLOBELY network. Please make sure you have read over our application procedure and tips on <b>How It Works</b> page before begin</p>
		</div>
	</section>
	<section>
		<div class="content">
			<form method="POST" action="/users">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<label>I am applying as a</label>
				<div class="radio-button">					
					<input id="distributor" class="hidden" type="radio" name="user-type" value="distributor">
					<label for="distributor" class="radio-label">Distributor</label>
				</div>
				<div class="radio-button">
					<input id="supplier" class="hidden" type="radio" name="user-type" value="supplier">
					<label for="supplier" class="radio-label">Supplier</label>
				</div>
				<label for="email">Email</label>
				<input id="email" name="email" type="email">
				<label for="company-name">Company Name</label>
				<input id="company-name" name="company-name" type="text">
				<label for="password">Password</label>
				<input id="password" name="password" type="password">			
				<label for="confirm-password">Confirm Password</label>
				<input id="confirm-password" name="confirm-password" type="password">
				<label for="website">Website</label>
				<input id="website" name="website" type="text">
				<label for="tax-id">Tax ID</label>
				<input id="tax-id" name="tax-id" type="text">	
				<input type="submit" value="Apply">
			</form>
		</div>
	</section>
@stop
