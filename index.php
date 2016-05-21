<?php
// Set this to a URL that's accessible
// remotely but belongs to something
// served from your house
$uriToCheck = "https://somewebsiteatmyhouse.dyndns.org";

$house = false;
try {
        $x = file_get_contents($uriToCheck);
        // house is probably ok
        $house = true;
} catch(Exception $ex){
        // house is burning
}

// Double check because I am dumb 
// and don't quite know how PHP works
if ($x == "") { $house = false; }
?>

<html>
  <head>
    <style type="text/css">
      body {
        background-color: <?=$house ? '#33FF33' : '#FF3333'?>;
      }

      .result {
        width: 400px;
        height: 400px;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
        font-family: 'Segoe UI', 'myriad', sans-serif;
        font-size: 4em;
      }
    </style>
  </head>
  <body>
    <div class="result">
        <?=$house ? 'House is alive' : 'House is burning'?>
    </div>
  </body>
</html>
