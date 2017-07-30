<?php 
  session_start();
  include_once('php-functions.php'); 
  // Any POST or GET request processing code should go here
  include_once('top-part.php');
  $server = $_SERVER['HTTP_HOST'];
  $onRmit = (strpos($server, 'rmit') !== FALSE);
?>

  <title>Bob's Garage</title>
  
<?php include_once('mid-part.php'); ?>

	<h2>Welcome To Bob's Garage!</h2>
	
	
	<section>
		<article>
			<h2>Vintage Gas Pumps and Vending Machines</h2>
			<p>Every product from Bob's Garage is built by hand using old world craftsmanship
			and materials made in the USA. Your Bob's Garage vintage antique or collectible is
			a one-of-kind piece of Americana that will be the center of attention and appreciate
			in value year after year. Item's actual appearance may differ slightly from picture
			due to changes in materials or parts availability. Call Bob if this is an issue.</p>
		</article>
		<article>
			<h2>It's Worth The Wait!</h2>
			<p>Bob's enthusiasm for the charm of the 50's has grown into a multi-faceted opportunity
				to share that golden age. Since 1971 he has been restoring antiques, antique automobiles 
				and automobilia and in 1990 narrowed his focus to gas pumps, automobilia and vending machines.
				Academically trained with degrees in fine art and studio art, Bob painstakingly restores 
				each piece with strict attention to detail, accuracy and quality materials.  The workmanship 
				in Bob's Garage shows that commitment to the past and every product is assured to be the 
				finest of its type.  Single items to full theme decor.</p>
		</article>

		<article>
			<h2>As Seen On The History Channel!</h2>
			<img src="images/H-ARP.gif" alt="History Channel Logo" height="94" width="400"/>
			<p> Bob's Garage was featured on the history channel. Link to youtube is below!</p>
		</article>
	</section>
	<aside>
		<img src="images/group.png" alt="Group Photo" />
	</aside>
	
<?php 
include_once('end-part.php');
// determines which debug tool to include depending on local or rmit hosted.
if ($onRmit) {
 include_once("/home/eh1/e54061/public_html/wp/debug.php");
 } else {
 include_once('debug-lite.php');
}

?>
