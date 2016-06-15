<?php

    $curl =  curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_RETURNTRANSFER => 1,
      CURLOPT_URL => 'http://api.giphy.com/v1/gifs/search?q=funny+cat&api_key=dc6zaTOxFJmzC',
      CURLOPT_USERAGENT => 'Giphy Sample Request'
    ));

    $resp = curl_exec($curl);

    curl_close($curl);


 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles/my-style.css" charset="utf-8">
    <title>Weather Scraper</title>
  </head>
  <body>
    <div class="main-container">
      <div class="header-container">
        <h1 id="header_tag">Weather Scraper Project</h1>
        <p>
          Enter your city below to get a forecast of your city.
        </p>
      </div>
      <div class="form-container">
        <form class="city_search_form">
          <div class="form-group">
            <input id="city" class="form-control" type="text" name="city" placeholder="Enter city name...">
            <button id="find_weather" class="btn btn-success search_button" type="submit" name="submit">Find Weather</button>
          </div>
        </form>
      </div>
    </div>

    <!-- Latest compiled and minified Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function() {
        $("#find_weather").on('click', function(event) {
          event.preventDefault();
          var x = $('#city').val();
          console.log(x);
          if(x !== "") {
            $.ajax({
              type: 'GET',
              url: 'scraper.php',
              data: 'city='+x,
              success: function(data) {
                alert(data);
              }
            })
          } else {
            alert("Please enter a city!");
          }
        })
      })
    </script>
  </body>
</html>
