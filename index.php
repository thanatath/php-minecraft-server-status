<?php
	require 'mcstatslib/MinecraftQuery.php';
	require 'mcstatslib/MinecraftQueryException.php';
	require('config.php');
	use xPaw\MinecraftQuery;
	use xPaw\MinecraftQueryException;
	
	$Query = new MinecraftQuery( );
	
		$Query->Connect( $_serverip, $_serverport );
		//print_r($Query); view all parameter
 		$info = $Query->GetInfo( );
		$pl = $Query->GetPlayers( );
		$mplayer = $info['MaxPlayers'];

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	<link href="https://fonts.googleapis.com/css?family=Itim" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Minecraft Status</title>
	<style>
	*{font-family: 'Itim', cursive;}
	</style>
  </head>
  <body>
    
	
	<div class="container">
  <div class="row">
    <div class="col-sm-12">
      
	  <table class="table table-bordered table-dark">
	  <thead>
	  <th>HostName :  <?PHP echo $info["HostName"];?> </th>
	  </thead>
	  <thead>
	  <th>IP:  <?PHP echo $info["HostIp"]." : ".$info["HostPort"];?> </th>
	  </thead>
	  <thead>
	  <th>เวอร์ชั่นเซิฟเวอร์ :  <?PHP echo $info["Version"];?> </th>
	  </thead>
	  <thead>
	  <th>จำนวนผู้เล่นในเซิฟเวอร์ :  <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: <?PHP echo $info["Players"]*100/$mplayer; ?>%" aria-valuenow="<?PHP echo count($pl); ?>" aria-valuemin="0" aria-valuemax="30"><?PHP echo count($pl); ?></div></div>  
	  </th>
	  </thead>
	  <thead>
	  <th>ผู้เล่นในเซิฟเวอร์ :   <?PHP for($i = 0;$i<=(count($pl)-1);$i++){echo "<font color='red'>".$pl[$i]."</font>";if($i==count($pl)-1){}else{echo " , ";}}  ?> </th>
	  </thead>
  </table>
	  
    </div>
  </div>
</div>
	
	
	

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>	  
