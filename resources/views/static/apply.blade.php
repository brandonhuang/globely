@extends('layouts.main')

@section('javascript')
	<script src="/js/image_preview.js"></script>
@stop

@section('title', 'Apply - Globely')

@section('content')
	<section class="form">
		<div class="card">
			<div class="card-header">
				<img src="/images/globely_logo.png" alt="Globely Icon">
			</div>
			<div class="card-content">
				<form method="POST" action="/users" enctype="multipart/form-data">
					{!! csrf_field() !!}
					<div class="radio-button">
						<input id="distributor" class="hidden" type="radio" name="user-type" value="distributor" {{ $distributor }} required>
						<label for="distributor" class="radio-label">Distributor</label>
						<input id="supplier" class="hidden" type="radio" name="user-type" value="supplier" {{ $supplier }} required>
						<label for="supplier" class="radio-label">Supplier</label>
					</div>
					<label for="email">Email</label>
					<input id="email" name="email" type="email" required>
					<label for="password">Password</label>
					<input id="password" name="password" type="password" required>	
					<label for="company-name">Company Name</label>
					<input id="company-name" name="company-name" type="text" required>
					<label for="company-name">Country</label>
					<input id="company-name" name="country" type="text" required>
					<label for="company-name">City</label>
					<input id="company-name" name="city" type="text" required>	
					<label for="website">Website</label>
					<input id="website" name="website" type="text" required>
					<label for="tax-id">Tax ID</label>
					<input id="tax-id" name="tax-id" type="text" required>
					<label>Company Logo</label>
					<img id="preview" />
					<input id="image" name="image" type="file" accept="image/png">
					<input class="teal" type="submit" value="Apply">
				</form>
			</div>
		</div>
	</section>
@stop
