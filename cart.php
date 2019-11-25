<?php
require_once("funx.php");
session_start();

/* take a request in session*/
$cart = null;
if (isset($_SESSION["cart"])){
    $cart = $_SESSION["cart"];
}else{
    $cart = [];
}
/* take order from request parameter*/
$id=-1;
if (isset($_REQUEST["id"])){
    $id=$_REQUEST["id"];
}
$mode="";
if(isset($_REQUEST["mode"])){
    $mode=$_REQUEST["mode"];
}

/* take the selected products*/
$carts=createCarts();
$carts=$carts[$id];
/* enlist in cart*/
$cart[]= $cart;
/* return to session in order to relist the list or products*/
$_SESSION["cart"]=$cart;

if ($mode=="clear"){
    unset($_SESSION);
    session_destroy();
    $cart=[];
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>カート</title>
	<link rel="stylesheet" href="../../assets/css/style.css" />
	<link rel="stylesheet" href="../../assets/css/shoppingcart.css" />
</head>

<body>
	<h1>カート</h1>
	<p><a href="result.php">商品一覧に戻る</a><a href="cart.php?mode=clear">カートを空にする</a></p>
	<table>
		<tr>
			<th>書籍名</th>
			<th>著者</th>
			<th>価格</th>
			<th>ISBN コード</th>
			<th></th>
		</tr>
		<?php for($i = 0;$i<count($cart);$i++){?>
		<tr>
			<td><?=$cart[$i]->getName()?></td>
			<td><?=$cart[$i]->getWriter()?></td>
			<td><?=$cart[$i]->getPrice()?>円</td>
			<td><?=$cart[$i]->getCode()?></td>
		</tr>
		<?php }?>
			</table>
</body>

</html>
