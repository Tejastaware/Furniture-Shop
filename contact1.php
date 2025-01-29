<!DOCTYPE html>
<html>
<head>
<title>Contact - Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
      body {
	font-family: Arial;
	background-image: url('img/contact-bg.png');
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
	background-attachment: fixed;
}

.container {
	width: 950px;
	margin: 80px auto;
	color: white;
	line-height: 1.5;
}

.text-center {
	text-align: center;
}

.content {
	display: flex;
	margin-top: 40px;
}

.icon {
	background-color: white;
	border-radius: 30px;
	padding: 15px;
	vertical-align: top;
}

.contact-info {
	display: inline-block;
	padding: 4px 20px 0px 20px;
}

.address-line {
	margin-top: 40px;
}

.col-1 {
	width: 530px;
}

.col-2 {
	flex: 1 1 auto;
	background-color: white;
}

.form-container {
	color: #000;
	padding: 30px;
}

.contact-info-title {
	color: #01bdd4;
}

.form-row {
	padding-bottom: 30px;
}

.form-field {
	width: 100%;
	border: none;
	border-bottom: 1px solid #000;
}

.send-btn {
	border: 0px;
	padding: 12px 26px;
	background-color: #01bdd4;
	color: white;
}

@media all and (max-width: 1024px) {
	.container {
		width: auto;
		padding: 30px;
	}
	 .col-1 {
		width: 360px;
	} 
}

@media all and (max-width: 700px) {
	.content {
		display: block;
	}
	.col-2 {
		margin-top: 40px;
	} 
	.col-1{
	width:100%;
	}
}

@media all and (max-width: 500px) {
	.container {
		padding: 10px;
	}
}
</style>
</head>

<body>
	<div class="container">
		<div class="text-center">
			<h1>Contact Us</h1>
			<div>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
				eiusmod tempor incididunt ut labore <div>et dolore magra aliqua.
				Ut enim ad minim veniam.</div>
			</div>
		</div>
		<div class="content">
			<div class="col-1">
				<div class="address-line">
					<img alt="location" src="https://cdn-icons-png.flaticon.com/128/447/447031.png" class="icon"height="50px",width="50px">
					<div class="contact-info">
						<div class="contact-info-title">Address</div>
						<div>444 S. Cedros Ave</div>
						<div>Bhadakamkar Nagar, Phaltan</div>
						<div>415523</div>
					</div>
				</div>
				<div class="address-line">
					<img alt="location" src="https://cdn-icons-png.flaticon.com/128/483/483947.png" class="icon"height="50px",width="50px">
					<div class="contact-info">
						<div class="contact-info-title">Phone</div>
						<div>+91 942298***</div>
					</div>
				</div>
				<div class="address-line">
					<img alt="location" src="https://cdn-icons-png.flaticon.com/128/542/542689.png" class="icon" height="50px",width="50px">
					<div class="contact-info">
						<div class="contact-info-title">Email</div>
						<div>hometown@gmail.com</div>
					</div>
				</div>
			</div>
			<div class="col-2">
            <form action="submit_contact.php" method="POST">
					<div class="form-container">
						<h2>Send Message</h2>
						<div class="form-row">
              <label for="name">Name:</label>
							<div>
								<input type="text" id="name" name="name" required><br>
							</div>
						</div>
						<div class="form-row">
							<label for="email">Email:</label>
							<div>
								<input type="email" id="email" name="email" required><br>
							</div>
						</div>
						<div class="form-row">
							<label for="message">Message:</label>
							<div>
								<textarea id="message" name="message" rows="4" required></textarea><br>
							</div>
						</div>
                        <input type="submit" value="Submit">
					</div>
			</form>
			</div>
		</div>
	</div>

</body>
</html>
