<?php

include("weather.php");

?>

<!doctype html>

<html lang="en">
    
    <head>
        
        <meta charset="utf-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Weatherapp</title>
	    
	<link rel="icon" href="favicon.jpg" type="image/icon"> 

 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="weather.css">
	
        <script type="text/javascript" src="jquery.min.js"></script>
	<link href="jquery-ui/jquery-ui.css" rel="stylesheet">
       <script src="autocomplete.js"></script>
        
    </head>
    
    <body>
        
        <div class="container" id="middle">
            
            <p id="heading" class="display-3">What's the Weather?</p>
            
            <p id="label">Enter the name of the city:</p>
            
            <form>
                
                <div class="ui-widget">
    
                    <input type="text" name="input" class="form-control" id="fInput" placeholder="E.g: London, Chennai, Tokyo">
                    <input type="submit" id="myBtn">
      
                </div>
                
            </form>  
            
            <div id="message"><?php
            
                if ($_GET){
                    
                    if($content){
                    
                        echo '<div class="alert alert-info" role="alert"><p><b>'.$_GET["input"].'</b></p>'.$report.'</div>';
                        
                    } else {
                        
                        echo '<div class="alert alert-warning" role="alert">Sorry! We\'re still improving. We\'ll update the weather report for '.$_GET["input"].' soon.</div>';
                        
                    }
                    
                }    
            
            ?></div>
            
        </div>

        

  
        <script src="jquery-ui/jquery-ui.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        
        <script src="keyup.js"></script>
        
    </body>
    
</html>
