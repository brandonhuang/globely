<section class="form">
	<div class="card">
		<div class="card-header">
			<img src="/images/globely_logo.png" alt="Globely Icon">
		</div>
		<div class="card-content">
			<form method="POST" action="/products">
				{!! csrf_field() !!}
				<label for="name">Product Name</label>
				<input id="name" name="name" type="text" required>
				<label for="brand">Product Brand</label>
				<input id="brand" name="brand" type="text" required>
				<label for="company">Company</label>
				<input id="company" name="company" type="text" required>
				<label for="price">Price</label>
				<input id="price" name="price" type="number" required>
				<label for="description">Description</label>
				<input id="description" name="description" type="text" required>
				<label for="rating">Rating</label>
				<input id="rating" name="rating" type="number" max="5" min="0" required>
				<input class="teal" type="submit" value="Add Product">
			</form>
		</div>
	</div>
</section>


<form class="form-horizontal" role="form" method="POST" action="/products">
						{!! csrf_field() !!}
	<div class="form-group">
		<label class="col-md-4 control-label">Description</label>
		<div class="col-md-6">
			<input type="text" class="description" name="description">
		</div>
	</div>		
	<div class="form-group">
		<label class="col-md-4 control-label">Rating</label>
		<div class="col-md-6">
			<input type="text" class="rating" name="rating">
		</div>
	</div>		
	<div class="form-group">
		<div class="col-md-6 col-md-offset-4">
			<input type="submit" value="Add Product">
		</div>
	</div>
</form>

<!--Category- dropdown of all categories
	Name- textfield
	Price- textfield
	image- upload image from local computer
	brand- textfield
	description- textbox
	rating- star image, out of 5-->
