@extends('layouts.main')

@section('content')
	<section class="form">
		<div class="card">
			<div class="card-header">
				<img src="/images/globely_logo.png" alt="Globely Icon">
			</div>
			<div class="card-content">
				<form method="POST" action="/users/{{ $user->id }}" enctype="multipart/form-data">
					{{ method_field('PUT') }}
					{!! csrf_field() !!}
					<div class="radio-button">
						<input id="distributor" class="hidden" type="radio" name="user-type" value="distributor" {{ $distributor }} required>
						<label for="distributor" class="radio-label">Distributor</label>
						<input id="supplier" class="hidden" type="radio" name="user-type" value="supplier" {{ $supplier }} required>
						<label for="supplier" class="radio-label">Supplier</label>
					</div>
					<label for="email">Email</label>
					<input id="email" name="email" type="email" value="{{ $user->email }}" required>
					<label for="company-name">Company Name</label>
					<input id="company-name" name="company-name" type="text" value="{{ $user->company_name }}" required>
					<label for="company-name">Country</label>
					<input id="company-name" name="country" type="text" value="{{ $user->country }}" required>
					<label for="company-name">City</label>
					<input id="company-name" name="city" type="text" value="{{ $user->city }}" required>	
					<label for="website">Website</label>
					<input id="website" name="website" type="text" value="{{ $user->website }}" required>
					<label for="tax-id">Tax ID</label>
					<input id="tax-id" name="tax-id" type="text" value="{{ $user->tax_id }}" required>
					<label>Company Logo</label>
					<input id="image" name="image" type="file" accept="image/png" required>
					<input class="teal" type="submit" value="Apply">
				</form>
			</div>
		</div>
	</section>
@stop
