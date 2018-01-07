<?php
include "../Model/Cart_Model.php";
include "../config/DB.php";
$duongda_cart=new Cart_Model();
$duongda_cart->get_Cart();
?>
<?php include "header.php" ?>
<div class="clearfix"></div>
<div class="container">
    <div id="shopping-cart">
        <div class="txt-heading">Shopping Cart <a id="btnEmpty" href="cart.php?action=empty">Empty Cart</a></div>
        <?php
        if(isset($_SESSION["cart_item"])){
            $item_total = 0;
            ?>	
            <table cellpadding="10" cellspacing="1">
                <tbody>
                    <tr>
                        <th style="text-align:left;"><strong>Name</strong></th>
                        <!-- <th style="text-align:left;"><strong>ID</strong></th> -->
                        <th style="text-align:right;"><strong>Quantity</strong></th>
                        <th style="text-align:right;"><strong>Price</strong></th>
                        <th style="text-align:center;"><strong>Action</strong></th>
                    </tr>	
                    <?php		
                    foreach ($_SESSION["cart_item"] as $item){
                     ?>
                     <tr>
                       <td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><strong><?php echo $item["name"]; ?></strong></td>
                       <!-- <td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><?php echo $item["ID"]; ?></td> -->
                       <td style="text-align:right;border-bottom:#F0F0F0 1px solid;"><?php echo $item["quantity"]; ?></td>
                       <td style="text-align:right;border-bottom:#F0F0F0 1px solid;"><?php echo $item["price"]; ?></td>
                       <td style="text-align:center;border-bottom:#F0F0F0 1px solid;"><a href="cart.php?action=remove&ID=<?php echo $item["name"]; ?>" class="btnRemoveAction">Remove Item</a></td>
                   </tr>
                   <?php
                   $item_total += ($item["price"]*$item["quantity"]);
               }
               ?>

               <tr>
                <td colspan="5" align=right><strong>Total:</strong> <?php echo $item_total; ?></td>
            </tr>
        </tbody>
    </table>		
    <?php
}
?>
</div>
<form method="post" action="cart.php?action=checkout">
    <div class="checkout" >
        <input type="submit" class="button" value="Thanh Toán"></a>
    </div>
</div>
</form>
</div>

<?php include "footer.php" ?>