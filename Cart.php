<?php
session_start();

require_once("DBController.php");

$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
			$productByCode = $db_handle->runQuery("SELECT * FROM tblproduct WHERE code='" . $_GET["code"] . "'");
			$itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"], 'image'=>$productByCode[0]["image"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["code"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
        case "order":
		if(!empty($_SESSION["cart_item"])) {
                    //Cap nhat vao bang Invoice(InvoiceID, Date, UserName) 
                    $userid = $_SESSION["username"];
                    $invoiceArray =  $db_handle->runQuery("SELECT InvoiceID FROM `invoice` ORDER BY 1 DESC LIMIT 1");
                    $invoiceID = $invoiceArray[0]["InvoiceID"] + 1;
                    $db_handle->runUpdate("INSERT INTO `invoice` (`InvoiceID`,`userName`) VALUES ($invoiceID,'$userid')");
                    
                     //Cap nhat vao bang Detail(ID, InvoiceID, ProductID, quantity) 
                    foreach ($_SESSION["cart_item"] as $item){
                        $Product_id = $item["code"];
                        $Product_Quantity = $item["quantity"];
                         $db_handle->runUpdate("INSERT INTO `Detail` (`InvoiceID`,`ProductId`,`quantity`) VALUES ($invoiceID,'$Product_id',$Product_Quantity)");
                    }
                    ?>
                     <script type= "text/javascript">          
                         alert("Your order is placed.");
                     </script>
             <?php
		}
                else
                {
                     echo 'Cart is empty.';
                }
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>
<HTML>
<HEAD>
<TITLE>Welcome to Shopping mall</TITLE>
<link href="../CSS/style.css" type="text/css" rel="stylesheet" />
</HEAD>
<BODY>
<div id="shopping-cart">
<div class="txt-heading">Shopping Cart</div>

<a id="btnEmpty" href="Cart.php?action=empty">Empty Cart</a>
<a id="btnEmpty" href="Cart.php?action=order">Order</a>
<?php
if(isset($_SESSION["cart_item"])){
    $total_quantity = 0;
    $total_price = 0;
?>	
<table class="tbl-cart" cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th style="text-align:left;">Name</th>
<th style="text-align:left;">Code</th>
<th style="text-align:right;" width="5%">Quantity</th>
<th style="text-align:right;" width="10%">Unit Price</th>
<th style="text-align:right;" width="10%">Price</th>
<th style="text-align:center;" width="5%">Remove</th>
</tr>	
<?php		
    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["price"];
?>
        <tr>
		<td><img src="<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?></td>
		<td><?php echo $item["code"]; ?></td>
		<td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
		<td  style="text-align:right;"><?php echo "$ ".$item["price"]; ?></td>
		<td  style="text-align:right;"><?php echo "$ ". number_format($item_price,2); ?></td>
                <td style="text-align:center;"><a href="Cart.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item" /></a></td>
	</tr>
	<?php
      		$total_quantity += $item["quantity"];
			$total_price += ($item["price"]*$item["quantity"]);
		}
	?>

<tr>
    <td colspan="2" align="right">Total:</td>
    <td align="right"><?php echo $total_quantity; ?></td>
    <td align="right" colspan="2"><strong><?php number_format($total_price, 2); ?></strong></td>
    <td></td>
</tr>

<tr>
    <td colspan="2" align="right">User:</td>
    <td align="right"><?php echo $_SESSION["username"]; ?></td>
</tr>
</tbody>
</table>		
  <?php
} else {
?>
<div class="no-records">Your Cart is Empty</div>
<?php 
}
?>
</div>

    <div>
       
         <?php
            if(isset($_POST['Order']))
            {
                if(!empty($_SESSION["cart_item"])) {
                    //Cap nhat vao bang Invoice(InvoiceID, Date, UserName) 
                    $userid = $_SESSION["username"];
                    $invoiceArray =  $db_handle->runQuery("SELECT InvoiceID FROM `invoice` ORDER BY 1 DESC LIMIT 1");
                    $invoiceID = $invoiceArray[0]["InvoiceID"] + 1;
                    $db_handle->runUpdate("INSERT INTO `invoice` (`InvoiceID`,`userName`) "
                            . "VALUES ($invoiceID,'$userid')");
                    
                     //Cap nhat vao bang Detail(ID, InvoiceID, ProductID, quantity) 
                    foreach ($_SESSION["cart_item"] as $item){
                        $Product_id = $item["code"];
                        $Product_Quantity = $item["quantity"];
                         $db_handle->runUpdate("INSERT INTO `Detail` (`InvoiceID`,`ProductId`,`quantity`) "
                                 . "VALUES ($invoiceID,'$Product_id',$Product_Quantity)");
                    }
		}
                else
                {
                    echo 'Cart is empty.';
                }
            }
         ?>
                
    </div>
<div id="product-grid">
	<div class="txt-heading">Products</div>
	<?php
	$product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC LIMIT 4");
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
	?>
		<div class="product-item">
			<form method="post" action="Cart.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
                            <div class="product-image"><img src="<?php echo $product_array[$key]["image"]; ?>" width="250px" height="150px"></div>
			<div class="product-tile-footer">
			<div class="product-title"><?php echo $product_array[$key]["name"]; ?></div>
			<div class="product-price"><?php echo "".$product_array[$key]["price"]; ?></div>
			<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" />
                            <input type="submit" value="Add to Cart" class="btnAddAction" /></div>
			</div>
			</form>
		</div>
	<?php
		}
	}
	?>
</div>
    
</BODY>
</HTML>