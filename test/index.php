<?php include 'navbar.php';
?>

	
	<div class="jumbotron">
		<div class"container">
		<h1>Hello World!</h1>
		<p>This is our demo site, I hope you like it</p>
		<p>All code can be found on my GitHub account, and its free to use, modify and sell!</p>
		<p><a href="http://www.google.com" target="_blank" class="btn btn-primary btn-lg">Show me the code!</a></p>
		</div>
	</div>
	
	<div class="alt1">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h2 class="text-center">Past work</h2>
				<p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
				<a href="#" class="btn btn-default">Tell me more..</a>
			</div>
			<div class="col-md-4">
				<h2 class="text-center">Past work</h2>
				<p class="text-justify">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
				<a href="#" class="btn btn-default">Tell me more..</a>
			</div>
			<div class="col-md-4">
				<h2 class="text-center">Past work</h2>
				<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				<a href="#" class="btn btn-default">Tell me more..</a>
			</div>
		</div>
	</div>
	</div>
	
	<div class="container">
		<div class="row padding">
			<div class="col-md-6">
				<img src="../images\Image1.png" class="img-circle img-responsive" alt="Circular holding image"/>
			</div>
			<div class="col-md-6">
			<h2 class="text-center">Work 1</h2>
				<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
			</div>
		</div>
		<hr />
	
		<div class="row padding">
			<div class="col-md-6">
				<h2 class="text-center">Work 2</h2>
				<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
			</div>
			<div class="col-md-6">
				<img src="../images\Image2.png" class="img-circle img-responsive" alt="Circular holding image"/>
			</div>
		</div>
		<hr />
			
		<div class="row padding">
			<div class="col-md-6">
				<img src="../images\Image3.png" class="img-circle img-responsive" alt="Circular holding image"/>
			</div>
			<div class="col-md-6">
				<h2 class="text-center">Work 3</h2>
				<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
			</div>
		</div>
		<hr />
	</div>
	
	<div class="container">
		<form role="form" action="contact.php" method="post">
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="example@example.com"/>
			</div>
			<div class="form-group">
				<label for="name">Name:</label>
				<input type="text" class="form-control" id="name" name="name" placeholder="Enter your name here"/>
				
			</div>
			<div class="form-group">
				<label for="message">Message:</label>
				<textarea class="form-control" name="message" id="message" placeholder="Enter your message here"> </textarea>
			</div>
			<div class="form-group">
			<input type="checkbox" name="promo"value="yes"/> Send me promotional content
			
			<button type="submit" class="btn btn-default">Submit</button>
			</div>
		</form>
	</div>
	
	<div class="alt2">
		<div class="container">
		<footer>&copy; Shauna Drumm<br /><a href="#home">Back to top</a></footer>
		
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
	</body>
</html>






