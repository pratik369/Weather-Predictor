
<!doctype html>
<html>
<head>
    <title>Weather Forecast</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
    
    <style>
        html,body {
         
            height:100%;
            
        }
            
        .container {
                
            background-image:url("unsplash.jpg");
            width:100%;
            height:100%;
            background-size:cover;
            background-position:center;
            
        
        }
        
        .center{
        text-align:center;
        }
        
        .white {
         color:white;   
        }
        
        button {
        
        margin-bottom:20px;
        }
        
        .alert {
         
            margin-top:20px;
            display:none;
            
            
        }
        
    
    </style>
    
    
</head>

<body>

   
   <div class="container">
    
    
        <div class="row">
        
            <div class="col-md-6 col-md-offset-3 center">
            
            <h1 class="center"> Weather Predictor</h1>
            
            <p class="lead center"> Enter your City below to get a forecast weather.</p>
            
            <form >
                
                <div class="form-group">
                    
                     <input type="text" class="form-control" name="city" id="city" placeholder=" Eg. Mumbai, New York, London..."/>
                     
                     
                     
                </div>
                
                <button id="findmyweather" class="btn btn-success bth-lg">Find my Weather</button>
                
                
            </form>
            
            <div id="success" class="alert alert-success">Success!</div>
            <div id="fail" class="alert alert-danger">Failed! Could not find weather data for that city. Please try again.</div>
            <div id="entercity" class="alert alert-danger">Please Enter The City.</div>
            
            </div>
        
         
        
        </div>
    
    
    </div>

<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<script>
    
    
    $("#findmyweather").click(function(){
                    
        
        event.preventDefault();
        
        if($("#city").val()!="") {
        
        
        $.get("scrapper.php?city="+$("#city").val(),function(data){
        
            $(".alert").hide();
            
            
            if(data==""){
            
            
            $("#fail").fadeIn();
            }
            else {
              
            $("#success").html(data).fadeIn();
            }
            
        
        });
            
            
        }
        else {
        
        $("#entercity").fadeIn();
        }
    
    });
                              

    
</script>
    
     
</body>
</html>
