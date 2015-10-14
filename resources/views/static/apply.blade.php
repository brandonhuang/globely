@extends('layouts.main')

@section('content')
	<section>
		<div class="content">
			<p>Thank you for your interest in joining the GLOBELY network. Please make sure you have read over our application procedure and tips on <b>How It Works</b> page before begin</p>
		</div>
	</section>

	<section>
		<div class="content">
			<p id="supplierOrDistributor">Are you applying to be a: <button class="link">Supplier</button><button class="link">Distributor</button></p>
		</div>
	</section>

	<section>
		<div class="content">
			<div class="labelNewline">
				<label for="green">Your Name:</label>
				<input id="gren" class="green" type="text" placeholder="Name">
			</div>
			<br>

			<div class="labelNewline">
				<label for="green">Your Position:</label>
				<input id="gren" class="green" type="text" placeholder="Position">
			</div>
			<br>

			<div class="labelNewline">
				<label for="green">Your Email:</label>
				<input id="gren" class="green" type="text" placeholder="example@gmail.com">
			</div>
			<br><br><br>

			<div class="labelNewline">
				<label for="green">Company Name:</label>
				<input id="gren" class="green" type="text" placeholder="Google Inc.">
			</div>
			<br>

			<div class="labelNewline">
				<label for="green">Company Website:</label>
				<input id="gren" class="green" type="text" placeholder="http://www.teslamotors.com">
			</div>
			<br>

			<div class="labelNewline">
				<label for="green">Company Mission:</label>
			</div>
				<div class="labelNewline">
				<input id="gren" class="green" type="missionText" placeholder="Your company's mission statment">
			</div>
			<br>

			<div class="labelNewline">
				<label for="green">Types of products:</label>
				<select>
					<option value="0">Maternal Supplies</option>
					<option value="1">Baby Products</option>
					<option value="2">Nutrition Supplements</option>
					<option value="3">.....</option>
				</select>
			</div>
			<br>

			<div class="labelNewline">
				<label for="green">Company Email:</label>
				<input id="gren" class="green" type="text" placeholder="company@gmail.com">
			</div>
			<br>

			<div class="labelNewline">
				<label for="green">Tax ID #:</label>
				<input id="gren" class="green" type="text" placeholder="1234567890">
			</div>
			<br><br><br>

			<div class="labelNewline">
				<label for="green">Upload</label>
			</div>
			<div class="labelNewline">
				<label for="green">1.Sellers Permit:</label>
				<input type="file" accept=".pdf">
			</div>
			<div class="labelNewline">
				<label for="green">2.Company Insurance Number:</label>
				<input type="file" accept=".pdf">
			</div>
			<br><br><br>

			<div class="labelNewline">
				<label for="green">Reference1</label>
				<label for="green">Reference2</label>
				<label for="green">Reference3</label>
			</div>

			<div class="labelNewline">
				<label for="green">Name:</label>
				<input id="gren" class="green" type="textR" placeholder="Name">
				<label for="green">Name:</label>
				<input id="gren" class="green" type="textR" placeholder="Name">
				<label for="green">Name:</label>
				<input id="gren" class="green" type="textR" placeholder="Name">
			</div>

			<div class="labelNewline">
				<label for="green">Email :</label>
				<input id="gren" class="green" type="textR" placeholder="">
				<label for="green">Email :</label>
				<input id="gren" class="green" type="textR" placeholder="">
				<label for="green">Email :</label>
				<input id="gren" class="green" type="textR" placeholder="">
			</div>

			<div class="labelNewline">
				<label for="green">Phone:</label>
				<input id="gren" class="green" type="textR" placeholder="">
				<label for="green">Phone:</label>
				<input id="gren" class="green" type="textR" placeholder="">
				<label for="green">Phone:</label>
				<input id="gren" class="green" type="textR" placeholder="">
			</div>
			<br><br><br>

			<div class="labelNewline">
				<label for="green">Why do you want to be a part of GLOBELY?</label>
			</div>
			<input id="gren" class="green" type="missionText" placeholder="">
			<br>

			<div class="labelNewline">
				<label for="green">What will you add to this network?</label>
			</div>
			<input id="gren" class="green" type="missionText" placeholder="">
			<br>

			<div class="labelNewline">
				<label for="green">How did you hear about us?</label>
			</div>
			<input id="gren" class="green" type="missionText" placeholder="">
			<br>
		</div>
	</section>

	<section>
		<div id="applyButton">
			<div class="content">
				<button class="teal">APPLY</button>
			</div>
		</div>
	</section>
@stop