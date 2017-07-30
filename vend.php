<?php 
  if( !isset( $_SESSION ) ) {
    session_start();
  	}
  	
  include_once('php-functions.php'); 
  include_once('top-part.php');
  $server = $_SERVER['HTTP_HOST'];
  $onRmit = (strpos($server, 'rmit') !== FALSE);
  
  if (isset($_POST["add"])) {
  	$_SESSION['cart'][]=$_POST;
  }
  
  elseif (isset($_POST["remove"])) {
	foreach ($_SESSION['cart'] as $key => &$value) {
		if(in_array($_POST["remove"],$value)) {
			unset($_SESSION['cart'][$key]);
			}
		}
	}
?>

  	<title>Bob's Vending Machines</title>

	<?php include_once('mid-part.php'); ?>
		
		<h2>Vintage Chest Soda Vending Machines</h2>
		<section class='vend-section'>
			<form action='vend.php' method='post'>
				<?php
					$vendCounter = 0;
					foreach ($vends as $vendID => $vend) {
						if ($vendCounter %2 == 0) {
							echo "<article class='vend-articles'>";
						}
						$vendCounter ++;
						
						if(!empty($_SESSION['cart'])){
							$buttonFlag = buttonCheck($_SESSION['cart'], $vendID);
						}
						echo "<article class='vend-sub-articles'>";
						echo "<img src='images/vend/{$vend['img']}' alt='{$vend['title']}'>";
						echo "<h4>{$vend['title']}</h4>";
						echo "<p>{$vend['desc']}</p>";
						echo "<p><b>Product #$vendID</b></p><br>";
						
						if ($buttonFlag === true){
							echo "<p class='vend-button'>Price: \${$vend['price']}  
							<button type='submit' name='remove' value='$vendID'><span>Remove From Cart</span></button></p>";
						}
						else {
							echo "<p class='vend-button'>Price: \${$vend['price']}  
							<button type='submit' name='add' value='$vendID'><span>Add To Cart</span></button></p>";
						}
						echo "<div></div>";
						echo "</article>"; 
						
						if ($vendCounter %2 == 0) {
							echo "</article>";
						}
						
					}
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