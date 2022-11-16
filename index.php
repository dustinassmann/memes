<?php
// api= https://meme-api.herokuapp.com/gimme
// read api json
$json = file_get_contents('https://meme-api.herokuapp.com/gimme');
// decode json
$data = json_decode($json, true);
// get image url
$image = $data['url'];
//refresh page after 10 seconds
header("Refresh: 20; url=index.php");
//countdown timer
//echo "<h5>Next meme in: <span id='countdown'>10</span> seconds</h5>";
?>
<html>
<style>
    body {
        text-align: center;
    }
    img {
        max-width: 100%;
        max-height: 100%;
    }

</style>
<head>
<title>Random Meme</title>
</head>
<body>

<img src="<?php echo $image; ?>" />

</body>

<script>
/*    var timeleft = 10;
    var downloadTimer = setInterval(function(){
    if(timeleft <= 0){
        clearInterval(downloadTimer);
    }
    document.getElementById("countdown").innerHTML = timeleft;
    timeleft -= 1;
    }, 1000);*/
</script>

</html>
