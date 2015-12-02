<section class="form">
	<div class="card">
		<div class="card-header">
			<img src="/images/globely_logo.png" alt="Globely Icon">
		</div>

		<div class="card-content">
			<form method="POST" action="/products/{{ $product->id }}" enctype="multipart/form-data">
				{{ method_field('PUT') }}
				{!! csrf_field() !!}
				<label for="name">Product Name</label>
				<input id="name" name="name" type="text" required value= {{ $product->name }}>
				<label for="brand">Product Brand</label>
				<input id="brand" name="brand" type="text" required value= {{ $product->brand }}>
				<label for="price">Price</label>
				<input id="price" name="price" type="number" required value= {{ $product->price }}>
				<label for="description">Description</label>
				<input id="description" name="description" type="text" required value= {{ $product->description }}>
				<label for="rating">Rating</label>
				<input id="rating" name="rating" type="number" max="5" min="0" required value= {{ $product->rating }}>
				<label for="image">image</label>
				<input id="image" name="image" type="file" accept="image/png" required>
				<input class="teal" type="submit" value="Update Product">
			</form>
		</div>
	</div>
</section>