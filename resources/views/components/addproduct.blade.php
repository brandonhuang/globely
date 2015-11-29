<section class="form">
	<div class="card">
		<div class="card-header">
			<img src="/images/globely_logo.png" alt="Globely Icon">
		</div>
		<div class="card-content">
			<form method="POST" action="/products" enctype="multipart/form-data">
				{!! csrf_field() !!}
				<label for="name">Product Name</label>
				<input id="name" name="name" type="text" required>
				<label for="brand">Product Brand</label>
				<input id="brand" name="brand" type="text" required>
				<label for="price">Price</label>
				<input id="price" name="price" type="number" required>
				<label for="description">Description</label>
				<input id="description" name="description" type="text" required>
				<label for="rating">Rating</label>
				<input id="rating" name="rating" type="number" max="5" min="0" required>
				<label for="image">image</label>
				<input id="image" name="image" type="file" accept="image/png" required>
				<input class="teal" type="submit" value="Add Product">
			</form>
		</div>
	</div>
</section>
