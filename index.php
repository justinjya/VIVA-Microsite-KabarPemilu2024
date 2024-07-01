<?php 
  $title='Kabar Pemilu 2024';
  $page='Kabar Pemilu 2024';
  $nav='navpage';
  $login='no';
  require ('inc/base.php');

?>
<?php require ($_SERVER['VIVABASE'].'inc/sample.php')?>
<?php require ($_SERVER['VIVABASE'].'inc/meta.php')?>
<h1 class="hide"><?php echo $page; ?></h1>
<div class="rancak-container">
	<div class="width-max">
    <?php require ($_SERVER['VIVABASE'].'inc/nav.php') ?>
    <?php require ($_SERVER['VIVABASE'].'section/voting_section.php') ?>
    <?php require ($_SERVER['VIVABASE'].'section/suara_netizen.php') ?>
    <?php require ($_SERVER['VIVABASE'].'section/artikel_terpercaya.php') ?>
    <?php require ($_SERVER['VIVABASE'].'section/video_terkini.php') ?>
    <?php require ($_SERVER['VIVABASE'].'section/data_pemilu.php') ?>
	</div>
</div>
<?php require ($_SERVER['VIVABASE'].'inc/footer.php')?>
<?php require ($_SERVER['VIVABASE'].'inc/base-bottom.php')?>