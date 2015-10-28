<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
						{!! csrf_field() !!}

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail Address</label>
							
							<div class="col-md-6">
								<input type="text" class="email" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Password</label>
							<div class="col-md-6">
								<input type="text" class="password" name="password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember"> Remember Me
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<!--<button type="submit" class="btn btn-primary">Login</button>-->
								<input type="submit" value="Login">
								<a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
							</div>
						</div>
					</form>