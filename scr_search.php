<?php
$s1 = 's1text';
$s2 = 's2text';
$s3 = 's3text';
$s4 = 's4text';
$s5 = 's5text';
$s6 = 's6text';
$s7 = 's7text';
$s8 = 's8text';
$s9 = 's9text';

$search = $_POST['search'];
//$search = 'Модельная стрижка';
switch ($search) {
	case 'Модельная стрижка':
		echo $s1;
		break;
	case 'Стрижка под 0':
		echo $s2;
		break;
	case 'Стрижка полубокс':
		echo $s3;
		break;
}
?>