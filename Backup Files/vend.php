<?php 
  session_start();
  include_once('php-functions.php'); 
  // Any POST or GET request processing code should go here
  include_once('top-part.php');
  $server = $_SERVER['HTTP_HOST'];
  $onRmit = (strpos($server, 'rmit') !== FALSE);
?>

  	<title>Bob's Vending Machines</title>

	<?php include_once('mid-part.php'); ?>
		
		<h2>Vintage Chest Soda Vending Machines</h2>
		<section>
			<form method=post>
				<article class="vend-articles">
				    <img src='\images\vend\vend-001.jpg' alt='Ideal Model 55 Pepsi-Cola Slider Machine Late 40s Early 50s'>
				    <h4>Ideal Model 55 Pepsi-Cola Slider Machine Late 40s Early 50s</h4>
				    <p>Unusual Barqs Root Beer Ideal slider machine. Original Barqs blue and authentic graphics. Non-embossed.</p>
				    <p><b>Product #BRB</b></p>
				    <p>$4695 <button name='add' value='BRB'>Add to cart</button></p>
				    <div></div>
	    		</article>
			    		
			    <article class="vend-articles">
			      <img src='\images\vend\vend-002.jpg' alt='Glasco Model 50 Dr Pepper Slider Machine 40s/50s'>
			      <h4>Glasco Model 50 Dr Pepper Slider Machine 40s/50s</h4>
			      <p>Beautiful Dr Pepper Glasco Model 50 slider machine. Original Dr Pepper green and authentic vintage graphics. Non-embossed.</p>
			      <p><b>Product #DP55</b></p>
			      <p>$4700 <button name='add' value='DP55'>Add to cart</button></p>
			      <div></div>
			    </article>
			    
			    <article class="vend-articles">
			       	<img src='\images\vend\vend-003.jpg' alt='1950s Kelvinator Model 180 RC Nehi Self Serve Soda Machine'>
					<h4>1950s Kelvinator Model 180 RC Nehi Self Serve Soda Machine</h4>
	      			<p>Four Lid Royal Crown / NEHI Self Serve machine with new refrigeration unit. Beautiful example of the type machine used in soda shops, country stores, 
	      			mom and pop grocery stores, gas stations and just anywhere there was some kid or teenager
	      			traffic. Perfect size for the man cave, garage, game room or soda fountain.</p>
	      			<p><b>Product #RC483</b></p>
	      			<p>$4800 <button name='add' value='RC483'>Add to cart</button></p>
	      			<div></div>
	    		</article>
	    
	    		<article class="vend-articles">
	      			<img src='\images\vend\vend-004.jpg' alt='1937 Westinghouse Master Electric'>
				    <h4>1937 Westinghouse Master Electric</h4>
				    <p>Reconditioned (Warranty) cooling unit. New lids, hinges, handles, cap catcher, bottle opener, access door, thermostat, wiring, drain, lid seals, and Coca-Cola red acrylic enamel paint. Capacity 110 8 oz bottles but will hold most any size. Beautiful example. </p>
				    <p><b>Product #WME</b></p>
				    <p>$4805 <button name='add' value='WME'>Add to cart</button></p>
				    <div></div>
		    	</article>
		    </form>
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