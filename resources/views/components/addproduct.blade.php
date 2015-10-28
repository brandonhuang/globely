<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
						{!! csrf_field() !!}

						<div class="form-group">
							<label class="col-md-4 control-label">Name</label>
							
							<div class="col-md-6">
								<input type="text" class="email" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Price</label>
							<div class="col-md-6">
								<input type="text" class="password" name="password">
							</div>
						</div>						
</form>

<!--Category- dropdown of all categories
	Name- textfield
	Price- textfield
	image- upload image from local computer
	brand- textfield
	description- textbox
	price- $__textfield
	rating- star image, out of 5-->