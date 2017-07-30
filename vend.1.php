<?php 
  if( !isset( $_SESSION ) ) {
    session_start();
  	}
  	
  include_once('php-functions.php'); 
  // Any POST or GET request processing code should go here
  include_once('top-part.php');
  $server = $_SERVER['HTTP_HOST'];
  $onRmit = (strpos($server, 'rmit') !== FALSE);
  
  if (isset($_POST["add"])) {
  	$_SESSION['cart'][]=$_POST;
  }
  elseif (isset($_POST["delete"])) {
	unset ($_SESSION['cart']);
  }
  elseif (isset($_POST["buttonchange"])) {
  	foreach ($_SESSION['cart'] as $items) {
  		foreach ($items as $subItems)
  		$cbutton .= "James is Great '$subItems'";
  		$rItem = $subItems;
  }}

  
?>

  	<title>Bob's Vending Machines</title>

	<?php include_once('mid-part.php'); ?>
		
		<h2>Vintage Chest Soda Vending Machines</h2>
		<section>
			<form action='vend.php' method='post'>
				<?php 
					foreach ($vends as $vendID => $vend) {
						echo "<article class='vend-articles'>";
						echo "<img src='\images\vend\{vend['img'}]' alt='{vend['title']}'>";
						echo "<h4>{$vend['title']}</h4>";
						echo "<p>{$vend['desc']}</p>";
						echo "<p><b>Product #$vendID</b></p>";
						if ($rItem === $vendID){
							echo "<p>${vend['price']} <button type='submit' name='delete' value='$vendID'>Remove From Cart</button></p>";
						}
						else {
							echo "<p>${vend['price']} <button type='submit' name='add' value='$vendID'>Add To Cart</button></p>";
						}
						//echo "<p>${vend['price']} <button type='submit' name='add' value='$vendID'>Add To Cart</button></p>";			
						echo "</article>"; }
					?>
					<button type='submit' name='delete'> delete</button>
					<button type='submit' name='buttonchange'>button change</button>
					<?php // create a dump of the $_SESSION array
					print_r($_SESSION);
					echo "<p>'$cbutton'</p>";

					?>
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