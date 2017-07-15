<!-- form Sign up -->
			<div class="row baris">
				<div class="col-md-7"></div>
				<div class="col-md-4 bg-form">
				<div class="bg_judul">
					<h5 class="judul">SIGN UP</h5>
				</div>
					<form name="form1" method="post" action="index.php?register2=success">
						  <div class="form-group formulir">
						  <input type="name" class="form-control isian" id="exampleInputName"  name="name" placeholder="Enter your full name">
						  </div>

						  <div class="form-group formulir">
						  <input type="username" class="form-control isian" id="exampleInputName userName"  name="userName" placeholder="userName">
						  </div>

						  <div class="form-group formulir">
						    <input type="email" class="form-control isian" id="exampleInputEmail1 email" aria-describedby="emailHelp" placeholder="Enter email" name="email">

						    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						  </div>
						  <div class="form-group formulir">
						   
						    <input type="password" class="form-control isian" id="exampleInputEmail1 password" aria-describedby="emailHelp" placeholder="Password" name="password">
						    
						  </div>
						  <div class="form-group formulir">
						   
						    <input type="password" class="form-control isian" id="c_password" aria-describedby="emailHelp" placeholder="Confirm password" name="c_pasword">
						    
						  </div>
					</form>
					<button type="submit" class="btn btn-primary tombol_kirim ">Submit</button>
				</div>
				<div class="col-md-1"></div>
				
			</div><!-- akhir login form -->
			<?php mysql_close($connect) ?>
