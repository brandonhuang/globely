<form class="form-horizontal" role="form" method="POST" action="/products">
						{!! csrf_field() !!}

	<div class="form-group">
		<label class="col-md-4 control-label">Name</label>
		
		<div class="col-md-6">
			<input type="text" class="name" name="name">
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-4 control-label">Company</label>
		
		<div class="col-md-6">
			<input type="text" class="company" name="company">
		</div>
	</div>
	<!-- <div class="form-group">
		<label class="col-md-4 control-label">Category</label>
		<div class="col-md-6">
			<input type="text" class="password" name="category">
		</div>
	</div>	 -->

	<div class="form-group">
		<label class="col-md-4 control-label">Price</label>
		<div class="col-md-6">
			<input type="text" class="price" name="price">
		</div>
	</div>	

	<!-- <div class="form-group">
		<label class="col-md-4 control-label">Image</label>
		<div class="col-md-6">
			<input type="text" class="password" name="password">
		</div>
	</div> -->
	<div class="form-group">
		<label class="col-md-4 control-label">Brand</label>
		<div class="col-md-6">
			<input type="text" class="brand" name="brand">
		</div>
	</div>
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
		<label class="col-md-4 control-label">Image</label>
		<div class="col-md-6">
		<input type="file" name="file">
        <input type="submit">
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