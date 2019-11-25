<?php
require_once "Item.php";
?>
<?php
/**
 * 商品の配列を生成する。
 * @return array Itemクラスのインスタンスを要素とする配列
 */
function createBooks():array {
	$books = array(
		new Book("Head First PHP & MySQL", "Lynn Beighley", 4650, "978-4873114446"),
		new Book("リータ゛フ゛ルコート゛", "Dustin Boswell", 2600, "978-4873115658"), 
		new Book("Head First テ゛サ゛インハ゜ターン", "Eric Freeman", 5060, "978-4873112497"),
		new Book("エレキギター", "下岡秀幸", 2400, "978-4798015163")
	);
	return $books;
}

function createDvds():array {
	$dvds = array(
		new Dvd("The Net", 500, 114),
		new Dvd("Star Wars: Force Awakens", 2800, 150), 
		new Dvd("Outbreak", 900, 129)
	);
	return $dvds;
}
?>