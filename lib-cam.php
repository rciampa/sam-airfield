<!doctype html>

<html lang="en-US">
<head>
    <meta charset="UTF-8" />
    <meta name="author" content="Richard Ciampa" />
    
    <title>SAM: Camera One</title>

    <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="jquery-ui.custom/jquery-ui.js"></script>

    <link rel="stylesheet" href="jquery-ui.custom/jquery-ui.css">
    <link rel="stylesheet" href="jquery-ui.custom/jquery-ui.theme.css">
    <link rel="stylesheet" href="jquery-ui.custom/jquery-ui.structure.min.css">

    <link rel="icon" type="image/png" href="./favicon/sam-shortcut.png" />
    <link rel="shortcut icon" type="image/x-icon" href="/favicon/favicon.ico">
    
     <script>
      $(function() {
      $( "#tabs" ).tabs();
      });
    </script>


</head>
<body>

<div style="width:800px;margin:0px auto 0px auto;">
<div id="tabs">

  <ul>

    <li><a href="#tabs-1">Snapshot Images</a></li>

    <li><a href="#tabs-2">Video Clips</a></li>

    <li><a href="#tabs-3">Desktop & Mobile Downloads</a></li>

  </ul>

  <div id="tabs-1">
        <?php
        //Get a reference to the directory, include all the files with *.
        $dirSnap = "./ipcam/FI9805P_C4D6553ED54C/snap/*";
        echo "<h3>Daily Field Snapshots</h3>";
        //Loop through the file list and embed html for output.
        foreach (glob($dirSnap) as $file) {
            //Create the hyperlink to the full size image
            echo "<a href='$file' target='_blank' title='Click to view full size image'>";
            //Nest the image inside the hyperlink
            echo "<img src='$file' alt='$file' height='75' width='100'/>";
            //Close the hyperlink image
            echo "</a>";
        }
        echo "<br>";
       ?>
        <br>
  </div>

  <div id="tabs-2">
       <?php
        $dirRecord = "./ipcam/FI9805P_C4D6553ED54C/record/*";
        echo "<h3>Daily Field Video</h3>";
        foreach (glob($dirRecord) as $vFile) {
            $linkStr = substr($vFile, 36);
            $filesize = (filesize($vFile) * .0009765625) * .0009765625; // bytes to MB
            $filesize = round($filesize, 2);
            echo "<a href='$vFile' target='_blank'> $linkStr ($filesize MB)</a>";
            echo "<br>";
        }
        ?>
      <br>
  </div>

  <div id="tabs-3">
    <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
    
<p>    <a href="https://play.google.com/store/apps/details?id=org.videolan.vlc">
            <img src="http://www.videolan.org/images/get_it_on_play_logo_large.png" border="0">
        </a>
        
        <a href="http://www.amazon.com/VLC-Mobile-Team-for-Fire/dp/B00U65KQMQ">
            <img src="http://www.videolan.org/images/badges/Amazon-apps-black.png" height="60px">
        </a>
        
        <br>
        
        <a href="https://itunes.apple.com/app/apple-store/id650377962?pt=454758&amp;ct=vodownloadpage&amp;mt=8">
            <img src="http://www.videolan.org/images/appstoredownload-en.png" border="0">
        </a></p>
</div>
</div>
</body>
</html>

