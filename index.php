<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  </head>
  <body style="text-align: center; padding-top: 2%;">

  <!-- make the movie picking field -->
  <form method="post">
  <label for="movie">Choose a Movie:</label>
  <select name="movie" id="movie">
      <?php
        $count = 0;
        $path = 'videos';
        $files = scandir($path);
        natcasesort($files);
        foreach($files as $file){
          if ($count > 1){
            echo "<option value=" . $file . ">" . $file ."</option>";
          }
          if ($count == 0){
            echo "<option value='NULL'></option>";

          }
          $count = $count +1;
        }
      ?>
</select>
  <br><br><br>
  <input type="submit" value="Change Movie" name="submit-btn">
</form>
  <!-- end the movie picking field -->

<!-- simple padding -->


  <!-- start of the video section -->
        <?php
          if (isset($_POST["submit-btn"])) {
              $movie = $_POST["movie"];
              echo "<h1>". $movie."</h1>";
              echo "
              <video width='80%' height='80%' id='video' poster='' controls>
              <source src='videos/" . $movie. "' type='video/mp4'>
              Your browser does not support the videos tag.
              </video>  
               ";
          } else{
            echo "<h1>Please select a movie<h1>";
          }
        ?>
  <!-- end of the video section -->

  </body>
</html>
