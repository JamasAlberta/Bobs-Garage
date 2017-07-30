<?php 
  session_start();
  include_once('php-functions.php'); 
  // Any POST or GET request processing code should go here
  include_once('top-part.php');
  $server = $_SERVER['HTTP_HOST'];
  $onRmit = (strpos($server, 'rmit') !== FALSE);
?>

  <title>Bob's Shopping Cart</title>

<?php include_once('mid-part.php'); ?>

		<h2>Shopping Cart</h2>
		<section>
			<article>
				<form method="post" target='_blank' action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php" onsubmit="return formValidate();">
					<fieldset>
						<legend>Register Your Details To Order!</legend>
				
						<br><label for="name">Full Name: </label><br>
						<input type="text" pattern="Gerard (')t Hooft|Catherine Zeta-Jones|Robert Downey Jr(.)" id="name" oninput="inputFilter()" name="name" placeholder="John Smith..."/>
						
						<br><label for="email">Email: </label><br>
						<input type="email" id="email" name="email" placeholder="JohnSmith@email.com"/>
						
						<br><label for="phone">Phone: </label><br>
						
						<span id="phoneSpan">
							<input type="tel" pattern="\+?\d{0,2}\s?(-)?\(?\d{3}\)?\s?(-)?\d{3}\s?(-)?\d{4}\s?(-)?x?\s?(-)?\d{0,5}" id="phone" onblur="updatePhone()" name="phone" placeholder="07 3456 1234"/>
							<img src='images/nanp.png'></img>
						</span>
				
						<br><label for="address">Address: </label><br>
						<textarea id="address" rows="4" cols="40" name="address" placeholder="Please enter your full address here..."></textarea>
						<span id='addressError'></span>
						
						<br><label for="remember">Remember Me! </label><br>
						<input id="remember" onclick="rememberMe();" type="checkbox"/>
						<br><input type="submit" value="Submit" />
					</fieldset>
				</form>
			</article>
		
			<article>
				<h3><em>Shipping Information</em></h3>
				<p>Shipping estimates will be figured and added at time of shipment.
				Many of our products are "made to order", that is... 
				we build it when we take the order so that may delay your delivery.
				Some items are special order ... so that may delay your delivery...
				the point is ... we don't usually ship the same day and in some cases, 
				it may take a few days to get your order out. So thanks for your patience and we appreciate your business.</p>
			
				<h3><em>Important Notes</em></h3>
				<p>Please take the time to read <a href="#">Bob's Garage Terms & Conditions</a>
				statement before placing an order. We aim to keep all of our customers informed
				during the purchase process and to make each order a satisfied transaction.</p>
			</article>
		</section>

		
<?php 
include_once('end-part.php');
// determines which debug tool to include depending on local or rmit hosted.
if ($onRmit) {
 include_once("/home/eh1/e54061/public_html/wp/debug.php");
 } else {
 include_once('debug-lite.php');
}

?>
