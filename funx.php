<?php
require_once "Item.php";
?>
<?php
/**
 * ���i�̔z��𐶐�����B
 * @return array Item�N���X�̃C���X�^���X��v�f�Ƃ���z��
 */
function createBooks():array {
	$books = array(
		new Book("Head First PHP & MySQL", "Lynn Beighley", 4650, "978-4873114446"),
		new Book("���[�^�J�t�J���R�[�g�J", "Dustin Boswell", 2600, "978-4873115658"), 
		new Book("Head First �e�J�T�J�C���n�K�^�[��", "Eric Freeman", 5060, "978-4873112497"),
		new Book("�G���L�M�^�[", "�����G�K", 2400, "978-4798015163")
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