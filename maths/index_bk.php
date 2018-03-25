<?php
	session_start();
	$page_title="Simultaneous Equation Solver";
	
	$valueA=isset($_SESSION['valueA']) ? trim($_SESSION['valueA']) : "";
	$valueB=isset($_SESSION['valueB']) ? trim($_SESSION['valueB']) : "";
	$valueC=isset($_SESSION['valueC']) ? trim($_SESSION['valueC']) : "";
	$valueD=isset($_SESSION['valueD']) ? trim($_SESSION['valueD']) : "";
	$valueE=isset($_SESSION['valueE']) ? trim($_SESSION['valueE']) : "";
	$valueF=isset($_SESSION['valueF']) ? trim($_SESSION['valueF']) : "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $page_title; ?> | Math-D</title>

    <!-- Bootstrap -->
    <link href="bootsrap/bootstrap.min.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="bootsrap/html5shiv.min.js"></script>
      <script src="bootsrap/respond.min.js"></script>
    <![endif]-->
<link href="styles/maths_styles.css" rel="stylesheet" type="text/css">
  </head>
  <body>

  <!--Begin header-->
	<div id="header" class="text-center" style="padding-top:35px; background:url(images/maths_bac_img.jpg)no-repeat; min-height:200px; color:#00004F;">
    		<h1>Math-D | Simultaneous Equation Solver</h1>
    </div><br>
    <!--End header-->
    
    
    <!--Begin contents-->
    	<div class="container">
            <form id="myform" method="post">
               <div class="row">
                    <div class="col-md-4">
                        <div class="well" style="border:2px solid red">
                            <div class="text-center"><h4>Enter first values</h4></div>
                            <div class="form-group">
                            	<div class="input-group">
                                	<input type="text" name="valueA" class="form-control" id="valueA" aria-describedby="first_x_addon" autocomplete="off" value="<?php echo $valueA; ?>">
                                    <span class="input-group-addon" id="first_x_addon">
                                    	X
                                    </span>
                                </div>
                            </div><!--End form group-->
                            
                            <div class="text-capitalize text-center"><h5>+</h5></div>
                            
                            <div class="form-group">
                                <div class="input-group">
                                	<input type="text" name="valueB" class="form-control" id="valueB" aria-describedby="first_y_addon" autocomplete="off" value="<?php echo $valueB; ?>">
                                    <span class="input-group-addon" id="first_y_addon">
                                    	Y
                                    </span>
                                </div>
                            </div><!--End form group-->
                            
                            <div class="text-capitalize text-center"><h5>=</h5></div>
                            
                            <div class="form-group">
                                <input type="text" name="valueC" class="form-control" id="valueC" autocomplete="off" value="<?php echo $valueC; ?>">
                            </div><!--End form group-->
                        </div><!--End well-->
                    </div><!--End col-md-4-->
                    
                    <div class="col-md-4" style="margin-top:100px;">
                        <p align="center"><button type="button" class="btn btn-lg btn-primary" onClick="solve_click()">Solve Equation</button></p><br><br><br><br>
                    </div><!--End col-md-4-->
                    
                    <div class="col-md-4">
                        <div class="well" style="border:2px solid blue">
                            <div class="text-center"><h4>Enter Second values</h4></div>
                            <div class="form-group">
                                <div class="input-group">
                                	<input type="text" name="valueD" class="form-control" id="valueD" aria-describedby="sec_x_addon" autocomplete="off" value="<?php echo $valueD; ?>">
                                    <span class="input-group-addon" id="sec_x_addon">
                                    	X
                                    </span>
                                </div>
                            </div><!--End form group-->
                            
                            <div class="text-capitalize text-center"><h5>+</h5></div>
                            
                            <div class="form-group">
                                <div class="input-group">
                                	<input type="text" name="valueE" class="form-control" id="valueE" aria-describedby="sec_y_addon" autocomplete="off" value="<?php echo $valueE; ?>">
                                    <span class="input-group-addon" id="sec_y_addon">
                                    	Y
                                    </span>
                                </div>
                            </div><!--End form group-->
                            
                            <div class="text-capitalize text-center"><h5>=</h5></div>
                            
                            <div class="form-group">
                                <input type="text" name="valueF" class="form-control" id="valueF" autocomplete="off" value="<?php echo $valueF; ?>">
                            </div><!--End form group-->
                        </div><!--End well-->
                    </div><!--End col-md-4-->
                    
                    <script language="javascript">
						function solve_click()
						{
							if(document.getElementById("valueA").value=="" || isNaN(document.getElementById("valueA").value))
							{
								alert("Please make your first X value is not empty and is numeric");
								document.getElementById("valueA").focus();
								return null;
							}
							
							if(document.getElementById("valueB").value=="" || isNaN(document.getElementById("valueB").value))
							{
								alert("Please make your first Y value is not empty and is numeric");
								document.getElementById("valueB").focus();
								return null;
							}
							
							if(document.getElementById("valueC").value=="" || isNaN(document.getElementById("valueC").value))
							{
								alert("Please make your first equated value is not empty and is numeric");
								document.getElementById("valueC").focus();
								return null;
							}
							
							if(document.getElementById("valueD").value=="" || isNaN(document.getElementById("valueD").value))
							{
								alert("Please make your second X value is not empty and is numeric");
								document.getElementById("valueD").focus();
								return null;
							}
							
							if(document.getElementById("valueE").value=="" || isNaN(document.getElementById("valueE").value))
							{
								alert("Please make your second Y value is not empty and is numeric");
								document.getElementById("valueE").focus();
								return null;
							}
							
							if(document.getElementById("valueF").value=="" || isNaN(document.getElementById("valueF").value))
							{
								alert("Please make your second equated value is not empty and is numeric");
								document.getElementById("valueF").focus();
								return null;
							}
							
							document.getElementById("myform").action="simul_equ_solver.php";
							document.getElementById("myform").submit();
						}
					</script>
                </div><!--End row-->
                
                
                <?php
					if(isset($_SESSION['valueA'],$_SESSION['valueB'],$_SESSION['valueC'],$_SESSION['valueD'],$_SESSION['valueE'],$_SESSION['valueF']))
					{
						if($_SESSION['valueE']=="1")
						{
							?>
                        	<br>
                            <div class="row">
                                <div class="col-md-4 col-xs-offset-4">
                                  <label id="sol_well">Your Solution</label>
                                    <div class="well" id="sol_well" style="border:2px solid green">
                                        <?php if($_SESSION['valueA']!="1") { echo $_SESSION['valueA']; } ?>x + <?php if($_SESSION['valueB']!="1") { echo $_SESSION['valueB']; } ?>y = <?php echo $_SESSION['valueC']; ?> <br>
                                        <?php if($_SESSION['valueD']!="1") { echo $_SESSION['valueD']; } ?>x + <?php if($_SESSION['valueE']!="1") { echo $_SESSION['valueE']; } ?>y = <?php echo $_SESSION['valueF']; ?> <br><br>
                                        From equation II <br>
                                        <?php if($_SESSION['valueE']!="1") { echo $_SESSION['valueE']; } ?>y = <?php echo $_SESSION['valueF']; ?> - <?php if($_SESSION['valueD']!="1") { echo $_SESSION['valueD']; } ?>x -----equation III<br><br>
                                        Put <?php if($_SESSION['valueE']!="1") { echo $_SESSION['valueE']; } ?>y = <?php echo $_SESSION['valueF']; ?> - <?php if($_SESSION['valueD']!="1") { echo $_SESSION['valueD']; } ?>x in equation I<br>
                                        <?php if($_SESSION['valueA']!="1") { echo $_SESSION['valueA']; } ?>x + <?php if($_SESSION['valueB']!="1") { echo $_SESSION['valueB']; } ?>(<?php echo $_SESSION['valueF']; ?> - <?php if($_SESSION['valueD']!="1") { echo $_SESSION['valueD']; } ?>x) = <?php echo $_SESSION['valueC']; ?><br>
                                        <?php if($_SESSION['valueA']!="1") { echo $_SESSION['valueA']; } ?>x + <?php echo $_SESSION['valueB'] * $_SESSION['valueF']; ?> - <?php if($_SESSION['valueB'] * $_SESSION['valueD']!="1") { echo $_SESSION['valueB'] * $_SESSION['valueD']; } ?>x = <?php echo $_SESSION['valueC']; ?><br>
                                        <?php if($_SESSION['valueA']!="1") { echo $_SESSION['valueA']; } ?>x - <?php if($_SESSION['valueB'] * $_SESSION['valueD']!="1") { echo $_SESSION['valueB'] * $_SESSION['valueD']; } ?>x = <?php echo $_SESSION['valueC']; ?> - <?php echo $_SESSION['valueB'] * $_SESSION['valueF']; ?><br>
                                        <?php if($_SESSION['valueA'] - ($_SESSION['valueB'] * $_SESSION['valueD'])!="1") { echo $_SESSION['valueA'] - ($_SESSION['valueB'] * $_SESSION['valueD']); } ?>x = <?php echo $_SESSION['valueC'] - ($_SESSION['valueB'] * $_SESSION['valueF']); ?><br>
                                        <?php if($_SESSION['valueA'] - ($_SESSION['valueB'] * $_SESSION['valueD'])!="1") { echo $_SESSION['valueA'] - ($_SESSION['valueB'] * $_SESSION['valueD']); } ?>x/<?php  echo $_SESSION['valueA'] - ($_SESSION['valueB'] * $_SESSION['valueD']);  ?> = <?php echo $_SESSION['valueC'] - ($_SESSION['valueB'] * $_SESSION['valueF']); ?>/<?php  echo $_SESSION['valueA'] - ($_SESSION['valueB'] * $_SESSION['valueD']); ?><br>
                                        x = <?php echo ($_SESSION['valueC'] - ($_SESSION['valueB'] * $_SESSION['valueF'])) / ($_SESSION['valueA'] - ($_SESSION['valueB'] * $_SESSION['valueD'])); ?><br><br>
                                        To find y put the value of x into equation III<br>
                                        <?php if($_SESSION['valueE']!="1") { echo $_SESSION['valueE']; } ?>y = <?php echo $_SESSION['valueF']; ?> - <?php if($_SESSION['valueD']!="1") { echo $_SESSION['valueD']; } ?>(<?php echo ($_SESSION['valueC'] - ($_SESSION['valueB'] * $_SESSION['valueF'])) / ($_SESSION['valueA'] - ($_SESSION['valueB'] * $_SESSION['valueD'])); ?>)<br>
                                        <?php if($_SESSION['valueE']!="1") { echo $_SESSION['valueE']; } ?>y = <?php echo $_SESSION['valueF'] - ( $_SESSION['valueD'] * ($_SESSION['valueC'] - ($_SESSION['valueB'] * $_SESSION['valueF'])) / ($_SESSION['valueA'] - ($_SESSION['valueB'] * $_SESSION['valueD']))); ?><br>
                                        <?php if($_SESSION['valueE']!="1") { echo $_SESSION['valueE']; } ?>y/<?php echo $_SESSION['valueE']; ?> = <?php echo ($_SESSION['valueF'] - ( $_SESSION['valueD'] * ($_SESSION['valueC'] - ($_SESSION['valueB'] * $_SESSION['valueF'])) / ($_SESSION['valueA'] - ($_SESSION['valueB'] * $_SESSION['valueD'])))); ?>/<?php echo $_SESSION['valueE']; ?><br>
                                        y = <?php echo ($_SESSION['valueF'] - ( $_SESSION['valueD'] * ($_SESSION['valueC'] - ($_SESSION['valueB'] * $_SESSION['valueF'])) / ($_SESSION['valueA'] - ($_SESSION['valueB'] * $_SESSION['valueD']))) / $_SESSION['valueE']); ?>
                                        <p align="center">Therefore. x = <?php echo ($_SESSION['valueC'] - ($_SESSION['valueB'] * $_SESSION['valueF'])) / ($_SESSION['valueA'] - ($_SESSION['valueB'] * $_SESSION['valueD'])); ?> and y= <?php echo ($_SESSION['valueF'] - ( $_SESSION['valueD'] * ($_SESSION['valueC'] - ($_SESSION['valueB'] * $_SESSION['valueF'])) / ($_SESSION['valueA'] - ($_SESSION['valueB'] * $_SESSION['valueD']))) / $_SESSION['valueE']); ?></p>
                                        x = <?php echo $_SESSION['x']; ?> y = <?php echo $_SESSION['y']; ?>
                                        <?php
											unset($_SESSION['valueA'],$_SESSION['valueB'],$_SESSION['valueC'],$_SESSION['valueD'],$_SESSION['valueE'],$_SESSION['valueF']);
										?>
                                    </div><!--End well-->
                                </div><!--End col-md-4 col-xs-offset-3-->
                            </div><!--End row-->
                        <?php
						}
					}
				?>
                
                <?php
					if(isset($_SESSION['valueA'],$_SESSION['valueB'],$_SESSION['valueC'],$_SESSION['valueD'],$_SESSION['valueE'],$_SESSION['valueF']))
					{
						if($_SESSION['valueE']!="1")
						{
							?>
                        	<br>
                            <div class="row">
                                <div class="col-md-4 col-xs-offset-4">
                                  <label id="sol_well">Your Solution</label>
                                    <div class="well" id="sol_well" style="border:2px solid green">
                                        <?php if($_SESSION['valueA']!="1") { echo $_SESSION['valueA']; } ?>x + <?php if($_SESSION['valueB']!="1") { echo $_SESSION['valueB']; } ?>y = <?php echo $_SESSION['valueC']; ?> <br>
                                        <?php if($_SESSION['valueD']!="1") { echo $_SESSION['valueD']; } ?>x + <?php if($_SESSION['valueE']!="1") { echo $_SESSION['valueE']; } ?>y = <?php echo $_SESSION['valueF']; ?> <br><br>
                                        From equation II <br>
                                        <?php if($_SESSION['valueE']!="1") { echo $_SESSION['valueE']; } ?>y = <?php echo $_SESSION['valueF']; ?> - <?php if($_SESSION['valueD']!="1") { echo $_SESSION['valueD']; } ?>x -----equation III<br><br>
                                        Put <?php if($_SESSION['valueE']!="1") { echo $_SESSION['valueE']; } ?>y = <?php echo $_SESSION['valueF']; ?> - <?php if($_SESSION['valueD']!="1") { echo $_SESSION['valueD']; } ?>x in equation I<br>
                                        <?php if($_SESSION['valueA']!="1") { echo $_SESSION['valueA']; } ?>x + <?php if($_SESSION['valueB']!="1") { echo $_SESSION['valueB']; } ?>(<?php echo $_SESSION['valueF']; ?> - <?php if($_SESSION['valueD']!="1") { echo $_SESSION['valueD']; } ?>x/<?php echo $_SESSION['valueE']; ?>) = <?php echo $_SESSION['valueC']; ?><br>
                                        <?php if($_SESSION['valueA']!="1") { echo $_SESSION['valueA']; } ?>x + <?php if($_SESSION['valueB'] / $_SESSION['valueE']!="1") { echo $_SESSION['valueB'] / $_SESSION['valueE']; } ?>(<?php echo $_SESSION['valueF']; ?> - <?php if($_SESSION['valueD']!="1") { echo $_SESSION['valueD']; } ?>x) = <?php echo $_SESSION['valueC']; ?><br>
                                        <?php if($_SESSION['valueA']!="1") { echo $_SESSION['valueA']; } ?>x + <?php echo ($_SESSION['valueB'] / $_SESSION['valueE']) * $_SESSION['valueF']; ?> - <?php if(($_SESSION['valueB'] / $_SESSION['valueE']) * $_SESSION['valueD']!="1") { echo ($_SESSION['valueB'] / $_SESSION['valueE']) * $_SESSION['valueD']; } ?>x = <?php echo $_SESSION['valueC']; ?><br>
                                        <?php if($_SESSION['valueA']!="1") { echo $_SESSION['valueA']; } ?>x - <?php if(($_SESSION['valueB'] / $_SESSION['valueE']) * $_SESSION['valueD']!="1") { echo ($_SESSION['valueB'] / $_SESSION['valueE']) * $_SESSION['valueD']; } ?>x = <?php echo $_SESSION['valueC']; ?> - <?php echo ($_SESSION['valueB'] / $_SESSION['valueE']) * $_SESSION['valueF']; ?><br>
                                        <?php if($_SESSION['valueA'] - (($_SESSION['valueB'] / $_SESSION['valueE']) * $_SESSION['valueD'])!="1") { echo $_SESSION['valueA'] - (($_SESSION['valueB'] / $_SESSION['valueE']) * $_SESSION['valueD']); } ?>x = <?php echo $_SESSION['valueC'] - (($_SESSION['valueB'] / $_SESSION['valueE']) * $_SESSION['valueF']); ?><br>
                                        <?php if($_SESSION['valueA'] - (($_SESSION['valueB'] / $_SESSION['valueE']) * $_SESSION['valueD'])!="1") { echo $_SESSION['valueA'] - (($_SESSION['valueB'] / $_SESSION['valueE']) * $_SESSION['valueD']); } ?>x/<?php  echo $_SESSION['valueA'] - (($_SESSION['valueB'] / $_SESSION['valueE']) * $_SESSION['valueD']);  ?> = <?php echo $_SESSION['valueC'] - (($_SESSION['valueB'] / $_SESSION['valueE']) * $_SESSION['valueF']); ?>/<?php  echo $_SESSION['valueA'] - (($_SESSION['valueB'] / $_SESSION['valueE']) * $_SESSION['valueD']); ?><br>
                                        x = <?php echo ($_SESSION['valueC'] - (($_SESSION['valueB'] / $_SESSION['valueE']) * $_SESSION['valueF'])) / ($_SESSION['valueA'] - (($_SESSION['valueB'] / $_SESSION['valueE']) * $_SESSION['valueD'])); ?><br><br>
                                        To find y put the value of x into equation III<br>
                                        <?php if($_SESSION['valueE']!="1") { echo $_SESSION['valueE']; } ?>y = <?php echo $_SESSION['valueF']; ?> - <?php if($_SESSION['valueD']!="1") { echo $_SESSION['valueD']; } ?>(<?php echo ($_SESSION['valueC'] - (($_SESSION['valueB'] / $_SESSION['valueE']) * $_SESSION['valueF'])) / ($_SESSION['valueA'] - (($_SESSION['valueB'] / $_SESSION['valueE']) * $_SESSION['valueD'])); ?>)<br>
                                        <?php if($_SESSION['valueE']!="1") { echo $_SESSION['valueE']; } ?>y = <?php echo $_SESSION['valueF'] - ( $_SESSION['valueD'] * ($_SESSION['valueC'] - (($_SESSION['valueB'] / $_SESSION['valueE']) * $_SESSION['valueF'])) / ($_SESSION['valueA'] - (($_SESSION['valueB'] / $_SESSION['valueE']) * $_SESSION['valueD']))); ?><br>
                                        <?php if($_SESSION['valueE']!="1") { echo $_SESSION['valueE']; } ?>y/<?php echo $_SESSION['valueE']; ?> = <?php echo ($_SESSION['valueF'] - ( $_SESSION['valueD'] * ($_SESSION['valueC'] - (($_SESSION['valueB'] / $_SESSION['valueE']) * $_SESSION['valueF'])) / ($_SESSION['valueA'] - (($_SESSION['valueB'] / $_SESSION['valueE']) * $_SESSION['valueD'])))); ?>/<?php echo $_SESSION['valueE']; ?><br>
                                        y = <?php echo ($_SESSION['valueF'] - ( $_SESSION['valueD'] * ($_SESSION['valueC'] - (($_SESSION['valueB'] / $_SESSION['valueE']) * $_SESSION['valueF'])) / ($_SESSION['valueA'] - (($_SESSION['valueB'] / $_SESSION['valueE']) * $_SESSION['valueD'])))) / $_SESSION['valueE']; ?>
                                        <p align="center">Therefore. x = <?php echo ($_SESSION['valueC'] - (($_SESSION['valueB'] / $_SESSION['valueE']) * $_SESSION['valueF'])) / ($_SESSION['valueA'] - (($_SESSION['valueB'] / $_SESSION['valueE']) * $_SESSION['valueD'])); ?> and y= <?php echo ($_SESSION['valueF'] - ( $_SESSION['valueD'] * ($_SESSION['valueC'] - (($_SESSION['valueB'] / $_SESSION['valueE']) * $_SESSION['valueF'])) / ($_SESSION['valueA'] - (($_SESSION['valueB'] / $_SESSION['valueE']) * $_SESSION['valueD'])))) / $_SESSION['valueE']; ?></p>
                                        x = <?php echo $_SESSION['x']; ?> y = <?php echo $_SESSION['y']; ?>
                                        <?php
											unset($_SESSION['valueA'],$_SESSION['valueB'],$_SESSION['valueC'],$_SESSION['valueD'],$_SESSION['valueE'],$_SESSION['valueF']);
										?>
                                    </div><!--End well-->
                                </div><!--End col-md-4 col-xs-offset-3-->
                            </div><!--End row-->
                        <?php
						}
					}
				?>
            </form>
        </div><!--End container-->
    <!--End contents-->
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="scripts/jquery-2.1.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootsrap/bootstrap.min.js"></script>
  </body>
</html>