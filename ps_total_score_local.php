<?php
session_start();
require_once('app/conn_pdo.php');

error_reporting(0);


//==========JudeNum
$stmt_jude = $db->prepare("SELECT * FROM thannam_match where id = '" . $_SESSION['match'] . "'");
$stmt_jude->execute();
$res_jude = $stmt_jude->fetch(PDO::FETCH_ASSOC);
//=========Update JudNum
if (isset($_REQUEST['jnumUpdate'])) {
    $jnum = $_REQUEST['jnum'];
    $jid = $_REQUEST['jid'];
    $update_stmt = $db->prepare("UPDATE thannam_match SET judNum = '$jnum' WHERE id = '$jid'");
    $update_stmt->execute();
    header("location:ps_manage.php?action=success");
}

if (isset($_GET['teamA'])) {
    $insert_best = $db->prepare("INSERT INTO thannam_champion_poomsae_best (match1, nameA, teamA, catA, sexA) VALUES ('$_GET[match]', '$_GET[nameA]', '$_GET[teamA]', '$_GET[catA]', '$_GET[sex]')");
    $insert_best->execute();
    // header("location: ?match=$_GET[match]");
?>
    <script language="javascript">
        window.close();
    </script>
<?php
}
