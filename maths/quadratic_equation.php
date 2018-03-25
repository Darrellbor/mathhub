<?php
	session_start();
	
	$valueA=isset($_SESSION['valueA']) ? trim($_SESSION['valueA']) : "";
	$valueB=isset($_SESSION['valueB']) ? trim($_SESSION['valueB']) : "";
	$valueC=isset($_SESSION['valueC']) ? trim($_SESSION['valueC']) : "";

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Quadratic Equation-Maths Hub</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/maths_styles.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

	<!--Begin header-->
	<div id="header" class="text-center" style="padding-top:35px; background:url(images/maths_bac_img.jpg)no-repeat; min-height:200px; color:#00005B;">
    		<h1>Quadratic Equation Solver | Maths Hub</h1>
    </div><br>
    <!--End header-->
    
    <!--Begin content-->
    	<div class="container text-center" style="color:#00005B;">
        	<h2>ax<sup>2</sup> + bx + c = 0</h2>
            <form method="post" id="myform" action="quad_reflect.php">
            	<div class="well">
                    <div class="row" align="center">
                        <div class="col-xs-3">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" name="valueA" class="form-control" id="valueA" aria-describedby="first_x_addon" autocomplete="off" value="<?php echo $valueA; ?>">
                                        <span class="input-group-addon" id="first_x_addon">X<sup>2</sup></span>
                                </div><!--End input group-->
                            </div><!--End form group-->
                        </div><!--End col-xs-3-->
                        
                        <div class="col-xs-1">
                        	<div class="text-capitalize text-center"><h4>+</h4></div>
                        </div><!--End col-xs-1-->
                        
                        <div class="col-xs-3">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" name="valueB" class="form-control" id="valueB" aria-describedby="second_x_addon" autocomplete="off" value="<?php echo $valueB; ?>">
                                        <span class="input-group-addon" id="second_x_addon">X</span>
                                </div><!--End input group-->
                            </div><!--End form group-->
                        </div><!--End col-xs-3-->
                        
                        <div class="col-xs-1">
                        	<div class="text-capitalize text-center"><h4>+</h4></div>
                        </div><!--End col-xs-1-->
                        
                        <div class="col-xs-3">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" name="valueC" class="form-control" id="valueC" autocomplete="off" value="<?php echo $valueC; ?>">
                                </div><!--End input group-->
                            </div><!--End form group-->
                        </div><!--End col-xs-3-->
                        
                        <div align="left" class="col-xs-1">
                        	<div align="left" class="text-capitalize text-center text-left"><h4>= 0</h4></div>
                        </div><!--End col-xs-1-->
                        
                    </div><!--End row--><br>
                    </div><!--End well-->
                    
                    <hr style="border-bottom:solid #dadada 1px;">
                    
                    <div class="row">
                    	<div class="col-xs-6">
                        	<div align="center">
                                <button type="button" class="btn btn-lg btn-info" onClick="solve_click()">Solve Equation</button>
                            </div>
                        </div>
                        
                        <div class="col-xs-6">
                        	<div align="center">
                                <a href="index.php" class="btn btn-lg btn-info">Back To Home</a>
                            </div>
                        </div>
                    .</div>
            </form>
            				<script>
            					function solve_click()
								{
									if(document.getElementById("valueA").value=="" || isNaN(document.getElementById("valueA").value))
									{
										alert("Please make your A value is not empty and is numeric");
										document.getElementById("valueA").focus();
										return null;
									}
									
									if(document.getElementById("valueB").value=="" || isNaN(document.getElementById("valueB").value))
									{
										alert("Please make your B value is not empty and is numeric");
										document.getElementById("valueB").focus();
										return null;
									}
									
									if(document.getElementById("valueC").value=="" || isNaN(document.getElementById("valueC").value))
									{
										alert("Please make your C value is not empty and is numeric");
										document.getElementById("valueC").focus();
										return null;
									}
									document.getElementById("myform").submit();
								}
							</script>
                            
                 <?php
				 	if(isset($_SESSION['valueA'],$_SESSION['valueB'],$_SESSION['valueC']))
					{
						?>
                        	<br><div class="well" style="border:2px solid #5bc0de">
                            	<h2>Your Solution</h2><hr style="border-bottom:solid #dadada 1px;">
                                <div class="text-center" style="font-size:18px">
                                	<h3>Using Formula Method</h3><br>
                                    
                                    <div class="row">
                                    	<div class="col-xs-5 col-xs-offset-1" align="right">
                                        	x<sub>1,2</sub> = 
                                        </div>
                                        
                                        <div class="col-xs-6 col-xs-offset-0" align="left">
                                        	<table align="left" style="font-family:verdana;">
                                              <tr>
                                                <td>&minus;b &plusmn; 
                                                &radic;<span style="text-decoration:overline"> &nbsp;
                                                b<span style="font-size: 15px;vertical-align:+15%;">2</span> &minus; 
                                                4ac&nbsp;</span></td>
                                              </tr>
                                              <tr>
                                                <td style="text-align:center;">
                                                <span style="text-decoration:overline;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                2a &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span>
                                                </td>
                                              </tr>
                                            </table>
                                        </div>
                                    </div><!--End row-->
                                    
                                    <hr style="border-bottom:solid #dadada 1px;"><br>
                                    <?php echo $_SESSION['valueA']; ?>x<sup>2</sup> + (<?php echo $_SESSION['valueB']; ?>)x + (<?php echo $_SESSION['valueC']; ?>) = 0<br><br>
                                    a = <?php echo $_SESSION['valueA']; ?>, b = <?php echo $_SESSION['valueB']; ?> & c = <?php echo $_SESSION['valueC']; ?><br><br>
                                    <table align="center" style="font-family:verdana;">
                                      <tr>
                                        <td>&minus;(<?php echo $_SESSION['valueB']; ?>) &plusmn; 
                                        &radic;<span style="text-decoration:overline"> 
                                        (<?php echo $_SESSION['valueB']; ?>)<span style="font-size: 15px;vertical-align:+15%;">2</span> &minus; 
                                        4(<?php echo $_SESSION['valueA']; ?>)(<?php echo $_SESSION['valueC']; ?>)&nbsp;</span></td>
                                      </tr>
                                      <tr>
                                        <td style="text-align:center;">
                                        <span style="text-decoration:overline;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        2(<?php echo $_SESSION['valueA']; ?>) &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span>
                                        </td>
                                      </tr>
                                    </table><br><br>
                                    
                                    <table align="center" style="font-family:verdana;">
                                      <tr>
                                        <td><?php echo -1 * $_SESSION['valueB']; ?> &plusmn; 
                                        &radic;<span style="text-decoration:overline">
                                        <?php echo $_SESSION['valueB'] * $_SESSION['valueB']; ?> +
                                        (<?php echo -4 * $_SESSION['valueA'] * $_SESSION['valueC']; ?>)&nbsp;</span></td>
                                      </tr>
                                      <tr>
                                        <td style="text-align:center;">
                                        <span style="text-decoration:overline;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        <?php echo 2 * $_SESSION['valueA']; ?> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span>
                                        </td>
                                      </tr>
                                    </table><br><br>
                                    
                                    <table align="center" style="font-family:verdana;">
                                      <tr>
                                        <td><?php echo -1 * $_SESSION['valueB']; ?> &plusmn; 
                                        &radic;<span style="text-decoration:overline">
                                        <?php echo ($_SESSION['valueB'] * $_SESSION['valueB']) + (-4 * $_SESSION['valueA'] * $_SESSION['valueC']); ?>
                                        &nbsp;</span></td>
                                      </tr>
                                      <tr>
                                        <td style="text-align:center;">
                                        <span style="text-decoration:overline;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        <?php echo 2 * $_SESSION['valueA']; ?> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span>
                                        </td>
                                      </tr>
                                    </table><br><br>
                                    
                                    <table align="center" style="font-family:verdana;">
                                      <tr>
                                        <td><?php echo -1 * $_SESSION['valueB']; ?> &plusmn;
                                        <?php echo sqrt(($_SESSION['valueB'] * $_SESSION['valueB']) + (-4 * $_SESSION['valueA'] * $_SESSION['valueC'])); ?>
                                        &nbsp;</span></td>
                                      </tr>
                                      <tr>
                                        <td style="text-align:center;">
                                        <span style="text-decoration:overline;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        <?php echo 2 * $_SESSION['valueA']; ?> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span>
                                        </td>
                                      </tr>
                                    </table><br><br>
                                    
                                    <div class="row">
                                    	<div class="col-xs-6">
                                        	<div class="row">
                                            	<div class="col-xs-6" align="right">
                                                	x<sub>1</sub> = 
                                                </div>
                                                
                                                <div class="col-xs-6">
                                                	 <table align="left" style="font-family:verdana;">
                                                      <tr>
                                                        <td><?php echo -1 * $_SESSION['valueB']; ?> +
                                                        <?php echo sqrt(($_SESSION['valueB'] * $_SESSION['valueB']) + (-4 * $_SESSION['valueA'] * $_SESSION['valueC'])); ?>
                                                        &nbsp;</span></td>
                                                      </tr>
                                                      <tr>
                                                        <td style="text-align:center;">
                                                        <span style="text-decoration:overline;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                        <?php echo 2 * $_SESSION['valueA']; ?> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span>
                                                        </td>
                                                      </tr>
                                                    </table><br><br>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-xs-6">
                                        	<div class="row">
                                            	<div class="col-xs-6" align="right">
                                                	x<sub>2</sub> = 
                                                </div>
                                                
                                                <div class="col-xs-6">
                                                	 <table align="left" style="font-family:verdana;">
                                                      <tr>
                                                        <td><?php echo -1 * $_SESSION['valueB']; ?> -
                                                        <?php echo sqrt(($_SESSION['valueB'] * $_SESSION['valueB']) + (-4 * $_SESSION['valueA'] * $_SESSION['valueC'])); ?>
                                                        &nbsp;</span></td>
                                                      </tr>
                                                      <tr>
                                                        <td style="text-align:center;">
                                                        <span style="text-decoration:overline;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                        <?php echo 2 * $_SESSION['valueA']; ?> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span>
                                                        </td>
                                                      </tr>
                                                    </table><br><br>
                                                </div>
                                        </div>
                                    </div><!--End row--><br><br><br>
                                    
                                    <div class="row">
                                    	<div class="col-xs-6">
                                        	<div class="row">
                                            	<div class="col-xs-6" align="right">
                                                	x<sub>1</sub> = 
                                                </div>
                                                
                                                <div class="col-xs-6">
                                                	 <table align="left" style="font-family:verdana;">
                                                      <tr>
                                                        <td><?php echo (-1 * $_SESSION['valueB']) + (sqrt(($_SESSION['valueB'] * $_SESSION['valueB']) + (-4 * $_SESSION['valueA'] * $_SESSION['valueC']))); ?> 
                                                        &nbsp;</span></td>
                                                      </tr>
                                                      <tr>
                                                        <td style="text-align:center;">
                                                        <span style="text-decoration:overline;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                        <?php echo 2 * $_SESSION['valueA']; ?> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span>
                                                        </td>
                                                      </tr>
                                                    </table>
                                                </div>
                                             </div>
                                        </div><!--End col-xs-6-->
                                        
                                        <div class="col-xs-6">
                                        	<div class="row">
                                            	<div class="col-xs-6" align="right">
                                                	x<sub>2</sub> = 
                                                </div>
                                                
                                                <div class="col-xs-6">
                                                	 <table align="left" style="font-family:verdana;">
                                                      <tr>
                                                        <td><?php echo (-1 * $_SESSION['valueB']) - (sqrt(($_SESSION['valueB'] * $_SESSION['valueB']) + (-4 * $_SESSION['valueA'] * $_SESSION['valueC']))); ?> 
                                                        &nbsp;</span></td>
                                                      </tr>
                                                      <tr>
                                                        <td style="text-align:center;">
                                                        <span style="text-decoration:overline;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                        <?php echo 2 * $_SESSION['valueA']; ?> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span>
                                                        </td>
                                                      </tr>
                                                    </table>
                                                </div>
                                        </div><!--End col-xs-6-->
                                    </div><!--End row--><br><br><br>
                                    
                                    <div class="row">
                                    	<div class="col-xs-6">
                                        	x<sub>1</sub> = <?php echo ((-1 * $_SESSION['valueB']) + (sqrt(($_SESSION['valueB'] * $_SESSION['valueB']) + (-4 * $_SESSION['valueA'] * $_SESSION['valueC'])))) / (2 * $_SESSION['valueA']); ?>
                                        </div><!--End col-xs-6-->
                                        
                                        <div class="col-xs-6">
                                        	x<sub>2</sub> = <?php echo ((-1 * $_SESSION['valueB']) - (sqrt(($_SESSION['valueB'] * $_SESSION['valueB']) + (-4 * $_SESSION['valueA'] * $_SESSION['valueC'])))) / (2 * $_SESSION['valueA']); ?>
                                        </div><!--End col-xs-6-->
                                    </div><!--End row-->
                                </div>
                            </div>
                            </div>
                        <?php
						unset($_SESSION['valueA'],$_SESSION['valueB'],$_SESSION['valueC']);
					}
				 ?>
                 
        </div><!--End container-->
        </div>
    <!--End content-->
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.1.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
  </body>
</html>