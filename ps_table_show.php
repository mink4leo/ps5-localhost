<?php
require_once("app/conn_pdo.php");

error_reporting(0);

#---------------
#---------------
$dataa = 'thannam_champion_poomsae';
#---------------
#---------------

//==============MATCH judNum
$stmt_match = $db->prepare("SELECT * FROM thannam_match WHERE id = '$_SESSION[match]'");
$stmt_match->execute();
$resmatch = $stmt_match->fetch(PDO::FETCH_ASSOC);

// echo $resmatch['id'];

//===============START
$stmt_start = $db->prepare("SELECT * FROM $dataStart");
$stmt_start->execute();
$res = $stmt_start->fetch(PDO::FETCH_ASSOC);

$rs_select = $db->prepare("SELECT id,groupA FROM thannam_champion_poomsae WHERE id = '$res[lastID]'");
$rs_select->execute();
$rs = $rs_select->fetch();

if ($res['lastAGE'] <> 0) {
  if ($res['lastAGE'] == '1') {
    $psp = 'POOMSAE INDIVIDUAL';
    $ps = 1;
    $pscat = 2;
  }
  if ($res['lastAGE'] == '2') {
    $psp = 'POOMSAE  PAIR';
    $ps = 2;
    $pscat = 3;
    // $dataa = 'thannam_champion_poomse2';
  }
  if ($res['lastAGE'] == '3') {
    $psp = 'POOMSAE TEAM';
    $ps = 3;
    $pscat = 4;
    // $dataa = 'thannam_champion_poomse3';
  }

  //====================
  $stmt_select = $db->prepare("SELECT * FROM $dataStart WHERE totala <> 0");
  $stmt_select->execute();
  $numman = $stmt_select->rowCount();

  //=====================PLAYER
  $player_select = $db->prepare("SELECT * From $dataa where id='$res[lastID]'");
  $player_select->execute();
  $num_member = $player_select->rowCount();
  $row = $player_select->fetch(PDO::FETCH_ASSOC);

  //====================category
  $cat_group = $db->prepare("SELECT * from thannam_champion_groupteam  where id = '$row[catA]'");
  $cat_group->execute();
  $row_cat = $cat_group->fetch(PDO::FETCH_ASSOC);
}
?>
<style>
  .fontA {
    font-size: 18px;
    font-weight: bold;
  }

  .table {
    padding: 10px 20px 10px 20px;
    border-spacing: 7px;
    border-collapse: separate;
    /* border-collapse: separate; */
    width: 95%;
    color: #000;
    font-size: 60px;
    font-weight: bold;
    text-shadow: 0 1px 4px #f39ce7;

  }

  .table thead tr th,
  .table thead tr td,
  .table tbody tr th,
  .table tbody tr td {
    vertical-align: middle;
    border: none;
  }

  .table thead tr th:nth-last-child(1),
  .table thead tr td:nth-last-child(1),
  .table tbody tr th:nth-last-child(1),
  .table tbody tr td:nth-last-child(1) {
    text-align: center;
  }

  .table tbody td {
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    padding: 20px;
    /* margin-left: auto; */
  }

  .table tbody tr td {
    background: rgba(255, 255, 255, 0.6);
  }

  .table tbody tr td:nth-child(1) {
    /* border-radius: 5px ; */
    background-image: linear-gradient(135deg, #ABDCFF 10%, #0396FF 100%);
    text-align: center;
  }

  .table tbody tr td:nth-child(2) {
    font-size: 40px;
  }

  .table tbody tr td:nth-last-child(3) {
    /* border-radius: 0 5px; */
    /* background-image: linear-gradient(135deg, #FDEB71 10%, #F8D800 100%); */
    font-size: 30px;
  }

  .table tbody tr td:nth-last-child(2) {
    background-color: #8EC5FC;
    background-image: linear-gradient(62deg, #8EC5FC 0%, #dedbe0 100%);
  }

  .table tbody tr td:nth-last-child(1) {
    background-color: #a70609;
    background-image: linear-gradient(62deg, #a70609 0%, #e25a5d 100%);
    /* color: #FDEB71; */
  }

  .gold {
    border-radius: 5px;
    /* background: #FFCC00; */
  }

  .groupA {
    margin-left: 30px;
    width: 90%;
    display: flex;
    /* text-align: center; */
    /* justify-content: center; */

    margin-bottom: 30px;
    border: 2px solid #CCC;
    /* background-color: #0325d6; */
    background: rgb(2, 0, 36);
    background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(9, 9, 121, 1) 30%, rgba(8, 55, 157, 1) 100%);
    border-radius: 20px;
  }

  .gender {
    padding: 25px 20px 15px 20px;
    background-color: yellow;
    color: #000;
    font-size: 30px;
    font-weight: bold;
    margin-right: 30px;
    /* text-align: middle; */
    border-radius: 15px;

  }

  .cat1 {
    font-size: 60px;
    font-weight: bold;
    color: #CCC;
  }

  .cat2 {
    font-size: 40px;
    font-weight: bold;
    margin-bottom: 10px;
    color: #CCC;
  }

  .match {
    text-align: center;
    font-weight: bold;
    text-shadow: 0 1px 4px #f39ce7;
  }
</style>


<?php
$player_cat = $db->prepare("SELECT * FROM $dataa where catA = '$row[catA]' and sex = '$res[lastSex]'  and groupA = '$rs[groupA]'  order by totalA3 desc");
$player_cat->execute();
$numPlayer = $player_cat->rowCount();

$player_Medal = $db->prepare("SELECT * FROM $dataa where catA = '$row[catA]' and sex = '$res[lastSex]' and totalA3 > 0");
$player_Medal->execute();
$numMedal = $player_Medal->rowCount();
if ($res['lastSex'] == 'F') {
  $gender =  'FEMALE';
} else {
  $gender =  'MALE';
}
?>

<div class="groupA">
  <div class="gender"><?php echo $gender; ?></div>
  <div class="catAA">
    <div class="cat1"><?php echo strtoupper($row_cat['namegroup']); ?></div>
    <div class="cat2"><?php echo $psp; ?></div>
  </div>
</div>
<div class="match"><?php echo $resmatch['nameA'] ?></div>


<table class="table table-bordered">

  <tbody>
    <?php
    $a = 1;
    while ($a <= $numPlayer) {
      $rs_cat = $player_cat->fetch();
      // while ($rs_cat = $player_cat->fetch()) {
      $team_select = $db->prepare("SELECT * FROM thannam_champion_teamm WHERE id = '$rs_cat[idteam]'");
      $team_select->execute();
      $team = $team_select->fetch();

      if ($numPlayer == $numMedal) {
        if ($a == 1) {
          $totalG = 'GOLD';
          $bg = 'linear-gradient(to bottom right, red, yellow)';
        }
        if ($a == 2) {
          $totalG = 'SILVER';
          $bg = 'linear-gradient(to bottom right,#ccc, #a6969d, #fff)';
          // $bg = 'linear-gradient(to bottom right, #750b0b, #bb1111, #ccc, #fff)';
        }
        if ($a == 3 or $a == 4) {
          $totalG = 'BRONZE';
          // $bg = 'linear-gradient(to bottom right, #a6969d, #fff)';
          $bg = 'linear-gradient(to bottom right, #750b0b, #bb1111, #ccc, #fff)';
          // $bg = 'brown';
        }
      }

    ?>
      <tr>
        <td><?php echo $a; ?></td>
        <td>
          <?php
          echo $rs_cat['nameA'];
          if ($rs_cat['nameB'] <> "") {
            echo ', ';
            echo $rs_cat['nameB'];
          }
          if ($rs_cat['nameC'] <> "") {
            echo ', ';
            echo $rs_cat['nameC'];
          }
          ?>
        </td>
        <td class="text-left"><?php echo $team['nameA']; ?></td>

        <td class="text-center">
          <?php
          if ($rs_cat['totalA3'] <> "0.00") {
            echo $rs_cat['totalA3'];
          }
          ?>
        </td>

        <td class="text-center" style="background:<?= $bg; ?>">
          <?php echo $totalG ?>
        </td>
      </tr>
    <?php
      $a++;
    }
    ?>
  </tbody>
</table>