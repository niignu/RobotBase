<!DOCTYPE html>
<html lang="pl">
    
<head>
  <meta charset="utf-8">
  <title>Controller</title>
  <meta name="author" content="">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" href="img/favicon.png">
  <link   rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="lib/bootstrap.min.css"/>
    <script src="lib/jquery.min.js"></script>

  <style>
      body {
        height: 100vh;
        background:  black;
      }

    #header-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 12vh;
        font-family: 'Raleway', sans-serif;
        border-radius: 0 0 18px 18px;
        color: rgba(255, 255, 255, 0.945);
        background-color: #000 !important;
        background-color: #222324e1 !important;
    }
        .p{
      color: white;
    }
    .range-wrap{    
      width: 100%;
      height: auto;
      position: relative;
      margin: 0 auto 3rem;
      flex-wrap: wrap;
    }
    .bubble {
  background: #2e6da4;
  color: white;
  padding: 3px 9px;
  position: absolute;
  border-radius: 4px;
  left: 50%;
  transform: translateX(-50%);
}
.bubble::after {
  content: "";
  position: absolute;
  width: 2px;
  height: 4px;
  background: #2e6da4;
  top: -3px;
  left: 50%;
}
    .window-center {
        position: relative; 
        
        height: 97%; 
        width: 60%; 
        margin-left: 20%; 
        margin-right: 20%;
        
        padding: 0px;
        border: solid #292b2c 1px; 
        border-radius: 15px; 
        box-shadow: 0 9px #999;
        overflow: hidden !important;
    }
    .range-custom{
        background-color: #292b2c
    }

    .btn-custom {
        cursor: pointer;
        outline: none;
        border-radius: 15px;
        box-shadow: 0 9px #999;
    }

    .btn-custom:hover {background-color: #292b2c}

    .btn-custom:active {
        background-color: #292b2c;
        box-shadow: 0 5px #666;
        transform: translateY(4px);
        box-shadow: 0 9px #999 !important;
    }

    .cell {
        display: flex; 
        align-items: center; 
        justify-content: center;
    }

    @keyframes gradient {
        0% {
            background-position: 0% 60%;
        }
        50% {
            background-position: 100% 50%;
        }
        100% {
            background-position: 0% 60%;
        }
    }

 

  </style>
</head>

<body>
    <form action="bc.php" method="post" target="bc.php">
    <div id="header-container">
        <h2>Controller</h2>
    </div>
    
    <div class="container" style="background: #d4d7de; height: 80vh;">
        
              <div class="row" >
            <div class="col" style="height: 10vh; margin: auto;">
            </div>
                    
            <div class="w-100" style="background-color: #d4d7de; height: 100%;"></div>

           
            <div class="col" style= "height: 25vh;">
               
                <div class="row" style="width: 100%; height: 200%; margin: 0 auto; position: relative;">
                   >
                    <div class="col-8" style="height: 12%;"></div>
                   
                     
                        <div class='row' style="width: 50%; height: 100%; margin: 0 auto; position: relative;">
                            
                          
                            <div class='col-xs-12 col-md-4 col-sm-2 cell switchIcon'>

                            </div>
                            
                           
                            <div class='col-xs-12 col-md-4 col-sm-2 cell'>
                                <button class="btn btn-outline-dark btn-custom" title="Przod" name="forward" value="F">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31" height="35" fill="currentColor" class="bi bi-caret-up-fill" viewBox="0 0 16 16">
                                        <path d="M7.247 4.86l-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"/>
                                    </svg>
                                </button>
                            </div>
                            
                           
                            <div class='col-xs-12 col-md-4 col-sm-2 cell switchIcon'>
                            </div>
                            
                          
                            <div class='col-xs-12 col-md-4 col-sm-2 cell'>
                                <button class="btn btn-outline-dark btn-custom" title="Lewo" name="left" value="L">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31" height="35" fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                                        <path d="M3.86 8.753l5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z"/>
                                        </svg>
                                </button>  
                            </div>
                            
                         
                            <div class='col-xs-12 col-md-4 col-sm-2 cell'>
                                <button class="btn btn-outline-dark btn-custom" title="Stop" name="start" value="S">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31" height="35" fill="currentColor" class="bi bi-stop-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.5 5A1.5 1.5 0 0 0 5 6.5v3A1.5 1.5 0 0 0 6.5 11h3A1.5 1.5 0 0 0 11 9.5v-3A1.5 1.5 0 0 0 9.5 5h-3z"/>
                                        </svg>
                                </button>   
                            </div>
                            
                           
                            <div class='col-xs-12 col-md-4 col-sm-2 cell'>
                                <button class="btn btn-outline-dark btn-custom" title="Prawo" name="right" value="R">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31" height="35" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                        <path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                                        </svg>
                                </button> 
                            </div>
                            
                            <div class='col-xs-12 col-md-4 col-sm-2'></div>
                            <div class='col-xs-12 col-md-4 col-sm-2 cell'>
                                <button class="btn btn-outline-dark btn-custom" name="back" value="B">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31" height="35" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                        <path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                                        </svg>
                                </button> 
                            </div>
                            
                        
                            <div class='col-xs-12 col-md-4 col-sm-2 gray'></div>

                        </div>           
                    </div> 
                </div>  
            </div>  
        </div> 
    </form>
        
    <!-- Credits -->
    <div class="container">
        <div class="row">
            <div class="col" id="header-container" style="background-color: rgb(15, 1, 1); color: white; height: 5vh; align-items: center; margin: auto;">
                <div class="col" style="text-align: center;">---</div>
            </div>
        </div>
    </div>

    <script>
        $('.switchIcon').click(function() {
            event.preventDefault();
            $('#svgLightOn1').toggle();
            $('#svgLightOn2').toggle();
        });

        $('.switchIcon').click(function() {
            event.preventDefault();
            $('#svgLightOff1').toggle();
            $('#svgLightOff2').toggle();
        });

    </script>
</body>
</html>