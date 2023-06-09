<!DOCTYPE html>
<html>
<head>
  <title>Two-Letter Domain Gallery</title>
  <style>
    .destination {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }

    .destination-item {
      margin: 10px;
    }
  </style>
</head>
<body>
  <h1>Two-Letter Domain Gallery</h1>

  <div class="destination" id="domainDestination">
    <?php
    // Array of two-letter domain names
    $domains = file("keywords.txt", FILE_IGNORE_NEW_LINES) ;

    // Generate screenshot URLs for each domain and display them in the gallery
    foreach ($domains as $domain) {
       $screenshotUrl = " https://s0.wordpress.com/mshots/v1/{$domain}";
  // Modify the URL based on the path where the screenshots are saved

      echo '<div class="destination-item">';
      echo '<img src="' . $screenshotUrl . '" alt="' . $domain . '">';         
      echo '</div>';
    }
    ?>
  </div>
</body>
</html>
