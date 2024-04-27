<?php
session_start();
require_once('app/conn_pdo.php');
?>
<meta charset="utf-8">
<?php 
$stmt_select = $db->prepare("SELECT * FROM $dataStart WHERE totala<>0");
$stmt_select->execute();
$numman = $stmt_select->rowCount();

?>


<?php
$sql1 = $db->query("select * from $dataStart where totala<>0");
$numman = mysql_num_rows($sql1);
while ($rs1 = $db->rows($sql1)) {
    if ($rs1[totala] != '0.00') { ?>
        <div class="plan-title">
            J<?= $rs1[id] ?> : <?= $rs1[totala]; ?>
        </div> <!-- /plan-title -->
<? }
    $numAll += $rs1[totala];
}
$totalAll = $numAll / $judNum;

?>


<?
if ($numman == 3) {
    echo number_format($totalAll, 2, '.', '');
}
?>