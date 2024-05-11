

<html>
<head>
	<title>
		Form
	</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
	<div id = "message_data">
		<?php
			if(isset($_REQUEST['msg'])){

				if($_REQUEST['msg'] == 'Invalid Phone Number'){

					echo"Invalid Phone Number";

				}
				if($_REQUEST['msg'] == 'InValid Email'){

					echo"InValid Email";

				}
				if($_REQUEST['msg'] == '1'){
					echo "Data inserted Successfully!!";
				}
			}
		?>
	</div>
	<div style="text-align:center">
		<form action="form_submission.php" method="POST">
			<div class="mb-3">
		    <label for="full_name" class="form-label">Full Name</label>
		    <input type="text" class="form-control" id="full_name" name = "full_name" required>
		  </div>
		   <div class="mb-3">
		    <label for="phone" class="form-label">Phone Number</label>
		    <input type="number" class="form-control" id="phone" name="phone" required>
		  </div>
		  <div class="mb-3">
		    <label for="email" class="form-label">Email address</label>
		    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
		    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
		  </div>
		  <div class="mb-3">
		    <label for="subject" class="form-label">Subject</label>
		    <input type="text" class="form-control" id="subject" name="subject" required>
		  </div>
		  <div class="mb-3 form-check">
		    <label for="message" class="form-label">Message</label>
		   <textarea class="form-control" id="message" name="message" required></textarea>
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
	</div>
	
</body>
</html>