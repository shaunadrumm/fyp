<?php include 'navbar.php';
?>

	
	<div class="jumbotron" id="homejumbo">
		<div class"container">
		<h1>Welcome to Plan My Event!</h1></br>
		<p>A booking site for all venues in Ireland!</p>
		<p>Search below to book directly through the site in minutes!</p>
		
		</div>
	</div>
	

	
	<div class="container">
		<div class="row padding">
			<div class="col-md-6">
				<img src="../images\lagoona.jpg" class="img-circle img-responsive" alt="Circular holding image"/>
			</div>
			<div class="col-md-6">
			<h2 class="text-center">Pubs</h2>
			<h3 class="text-center">Lagoona</h3>
				<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
			</div>
		</div>
		<hr />
	
		<div class="row padding">
			<div class="col-md-6">
				<h2 class="text-center">Hotels</h2>
				<h3 class="text-center">Clayton</h3>
				<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
			</div>
			<div class="col-md-6">
				<img src="../images\clayton.jpg" class="img-circle img-responsive" alt="Circular holding image"/>
			</div>
		</div>
		<hr />
			
		<div class="row padding">
			<div class="col-md-6">
				<img src="../images\coppers.jpg" class="img-circle img-responsive" alt="Circular holding image"/>
			</div>
			<div class="col-md-6">
				<h2 class="text-center">Nightclubs</h2>
				<h3 class="text-center">Copper Face Jacks</h3>
				<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
			</div>
		</div>
		<hr />
	</div>	
	
	<div class="container">
	<h1> Have a Question? Just Ask... </h1>
		<form role="form" action="contact.php" method="post">
			<div class="form-group">
				<label for="email">Your Email:</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="example@example.com"/>
			</div>
			<div class="form-group">
				<label for="name">Your Name:</label>
				<input type="text" class="form-control" id="name" name="name" placeholder="Enter your name here"/>
				
			</div>
			<div class="form-group">
				<label for="message">Your Query:</label>
				<textarea class="form-control" name="message" id="message" placeholder="Enter your message here"> </textarea>
			</div>
			<div class="form-group">
			<input type="checkbox" name="promo"value="yes"/> Send me promotional content
			
			<button type="submit" class="btn btn-default">Send!</button>
			</div>
		</form>
	</div>
	
	<div class="alt2" id="bottomblock">
		<div class="container">
		<footer>&copy; planmyevent.eu<br /><a href="#home">Back to top</a></footer>
		
	</div>
		
	
	<script   src="http://code.jquery.com/jquery-3.1.1.js"   integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="   crossorigin="anonymous"></script> <!-- Needed for Javascript-->
	<script   src="js/bootstrap.js"></script>  <!--Pulls in all bootstrap JS--> 
	<script>
	$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
	</script>
	</div>
	</body>
</html>






