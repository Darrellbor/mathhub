<?php
	session_start();
	$link=isset($_GET['link']) ? trim($_GET['link']) : "";
	
	$valueA=isset($_SESSION['valueA']) ? trim($_SESSION['valueA']) : "";
	$valueB=isset($_SESSION['valueB']) ? trim($_SESSION['valueB']) : "";
	$valueC=isset($_SESSION['valueC']) ? trim($_SESSION['valueC']) : "";
	$valueD=isset($_SESSION['valueD']) ? trim($_SESSION['valueD']) : "";
	$valueE=isset($_SESSION['valueE']) ? trim($_SESSION['valueE']) : "";
	$valueF=isset($_SESSION['valueF']) ? trim($_SESSION['valueF']) : "";
	
	$valueA1=isset($_SESSION['valueA1']) ? trim($_SESSION['valueA1']) : "";
	$valueB1=isset($_SESSION['valueB1']) ? trim($_SESSION['valueB1']) : "";
	$valueC1=isset($_SESSION['valueC1']) ? trim($_SESSION['valueC1']) : "";
	$valueD1=isset($_SESSION['valueD1']) ? trim($_SESSION['valueD1']) : "";
	$valueE1=isset($_SESSION['valueE1']) ? trim($_SESSION['valueE1']) : "";
	$valueF1=isset($_SESSION['valueF1']) ? trim($_SESSION['valueF1']) : "";
	
	$valueA2=isset($_SESSION['valueA2']) ? trim($_SESSION['valueA2']) : "";
	$valueB2=isset($_SESSION['valueB2']) ? trim($_SESSION['valueB2']) : "";
	$valueC2=isset($_SESSION['valueC2']) ? trim($_SESSION['valueC2']) : "";
	$valueD2=isset($_SESSION['valueD2']) ? trim($_SESSION['valueD2']) : "";
	$valueE2=isset($_SESSION['valueE2']) ? trim($_SESSION['valueE2']) : "";
	$valueF2=isset($_SESSION['valueF2']) ? trim($_SESSION['valueF2']) : "";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Simultaneous Equation-Maths Hub</title>

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
    		<h1>Simultaneous Equation Solver | Maths Hub</h1>
    </div><br>
    <!--End header-->
    
    <!--Begin content-->
    	<div class="container">
         <form id="myform" method="post">
        	<div class="row">
                <div class="col-xs-4">
                	<div class="panel panel-info">
                      <!-- Default panel contents -->
                      <div class="panel-heading">Operators Orders</div>
                    
                      <!-- List group -->
                      	 <div class="list-group">
                            <a href="Javascript:void(0)" class="list-group-item <?php if($link=="1") { echo 'active'; } ?>" onClick="operators_select('1')">+ and +</a>
                            <a href="Javascript:void(0)" class="list-group-item <?php if($link=="2") { echo 'active'; } ?>" onClick="operators_select('2')">+ and -</a>
                            <a href="Javascript:void(0)" class="list-group-item <?php if($link=="3") { echo 'active'; } ?>" onClick="operators_select('3')">- and -</a>
                            <a href="index.php" class="list-group-item">Back To Home</a>
                      	</div>
                    </div>
                </div>
                  
                  <div id="solver_side" class="col-xs-1 col-xs-offset-1"></div>
                	<div class="col-xs-6">
                    	<div id="non_selected" class="text-center" style="margin-top:80px; color:#00005B;">
                        	<h1>No Operators Selected</h1>
                        </div>
                        
                        <div id="Num_1">
                        	<div class="well" style="border:2px solid red">
                            	<div class="row" aria-describedby="helpBlock">
                                	<div class="col-xs-3">
                                    	<div class="form-group">
                                            <div class="input-group">
                                                <input type="text" name="valueA" class="form-control" id="valueA" aria-describedby="first_x_addon" autocomplete="off" value="<?php echo $valueA; ?>">
                                                <span class="input-group-addon" id="first_x_addon">X</span>
                                            </div>
                                        </div><!--End form group-->
                                    </div><!--End col-xs-3-->
                                    
                                    <div class="col-xs-1">
                                    	<div class="text-capitalize text-center"><h5>+</h5></div>
                                    </div><!--End col-xs-1-->
                                    
                                    <div class="col-xs-3">
                                    	<div class="form-group">
                                            <div class="input-group">
                                                <input type="text" name="valueB" class="form-control" id="valueB" aria-describedby="first_y_addon" autocomplete="off" value="<?php echo $valueB; ?>">
                                                <span class="input-group-addon" id="first_y_addon">Y</span>
                                            </div>
                                        </div><!--End form group-->
                                    </div><!--End col-xs-3-->
                                    
                                    <div class="col-xs-1">
                                    	<div class="text-capitalize text-center"><h5>=</h5></div>
                                    </div><!--End col-xs-1-->
                                    
                                    <div class="col-xs-3">
                                    	<div class="form-group">
                                            <div class="input-group">
                                                <input type="text" name="valueC" class="form-control" id="valueC" autocomplete="off" value="<?php echo $valueC; ?>">
                                            </div>
                                        </div><!--End form group-->
                                    </div><!--End col-xs-3-->
                                </div><!--End row-->
                                
                                <span id="helpBlock" class=" text-center help-block">Enter all values for first equation.</span>
                            </div><!--End well-->
                            
                            
                            <div class="well" style="border:2px solid #00005B">
                            	<div class="row" aria-describedby="helpBlock2">
                                	<div class="col-xs-3">
                                    	<div class="form-group">
                                            <div class="input-group">
                                                <input type="text" name="valueD" class="form-control" id="valueD" aria-describedby="second_x_addon" autocomplete="off" value="<?php echo $valueD; ?>">
                                                <span class="input-group-addon" id="second_x_addon">X</span>
                                            </div>
                                        </div><!--End form group-->
                                    </div><!--End col-xs-3-->
                                    
                                    <div class="col-xs-1">
                                    	<div class="text-capitalize text-center"><h5>+</h5></div>
                                    </div><!--End col-xs-1-->
                                    
                                    <div class="col-xs-3">
                                    	<div class="form-group">
                                            <div class="input-group">
                                                <input type="text" name="valueE" class="form-control" id="valueE" aria-describedby="second_y_addon" autocomplete="off" value="<?php echo $valueE; ?>">
                                                <span class="input-group-addon" id="second_y_addon">Y</span>
                                            </div>
                                        </div><!--End form group-->
                                    </div><!--End col-xs-3-->
                                    
                                    <div class="col-xs-1">
                                    	<div class="text-capitalize text-center"><h5>=</h5></div>
                                    </div><!--End col-xs-1-->
                                    
                                    <div class="col-xs-3">
                                    	<div class="form-group">
                                            <div class="input-group">
                                                <input type="text" name="valueF" class="form-control" id="valueF" autocomplete="off" value="<?php echo $valueF; ?>">
                                            </div>
                                        </div><!--End form group-->
                                    </div><!--End col-xs-3-->
                                </div><!--End row-->
                                
                                <span id="helpBlock2" class=" text-center help-block">Enter all values for second equation.</span>
                            </div><!--End well-->
                            
                            <div align="center">
                            	<button type="button" class="btn btn-lg btn-info" onClick="solve_click()">Solve Equation</button>
                            </div>
                            
                            <hr style="border-bottom:solid #dadada 1px;">
                            
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
									
									document.getElementById("myform").action="reflect.php?link=<?php echo $link; ?>";
									document.getElementById("myform").submit();
								}
							</script>
                    
                    
                    		<?php
								if(isset($_SESSION['valueA'],$_SESSION['valueB'],$_SESSION['valueC'],$_SESSION['valueD'],$_SESSION['valueE'],$_SESSION['valueF']))
								{
									if($_SESSION['valueE']=="1")
									{
										?>
                                        	<div class="well" style="border:2px solid #5bc0de">
                                            	<h4>Your Solution</h4><hr style="border-bottom:solid #dadada 1px;">
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
                                                <?php
                                                    unset($_SESSION['valueA'],$_SESSION['valueB'],$_SESSION['valueC'],$_SESSION['valueD'],$_SESSION['valueE'],$_SESSION['valueF']);
												?>
                                                    </div>
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
                                        	<div class="well" style="border:2px solid #5bc0de">
                                            	<h4>Your Solution</h4><hr style="border-bottom:solid #dadada 1px;">
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
                                                    <?php
                                                        unset($_SESSION['valueA'],$_SESSION['valueB'],$_SESSION['valueC'],$_SESSION['valueD'],$_SESSION['valueE'],$_SESSION['valueF']);
													?>
                                                         </div>
                                        <?php
									}
								}
							?>
                        </div><!--End Num1-->
                        
                        <div id="Num_2">
                        	<div class="well" style="border:2px solid red">
                            	<div class="row" aria-describedby="helpBlock">
                                	<div class="col-xs-3">
                                    	<div class="form-group">
                                            <div class="input-group">
                                                <input type="text" name="valueA1" class="form-control" id="valueA1" aria-describedby="first_x_addon" autocomplete="off" value="<?php echo $valueA1; ?>">
                                                <span class="input-group-addon" id="first_x_addon">X</span>
                                            </div>
                                        </div><!--End form group-->
                                    </div><!--End col-xs-3-->
                                    
                                    <div class="col-xs-1">
                                    	<div class="text-capitalize text-center"><h5>+</h5></div>
                                    </div><!--End col-xs-1-->
                                    
                                    <div class="col-xs-3">
                                    	<div class="form-group">
                                            <div class="input-group">
                                                <input type="text" name="valueB1" class="form-control" id="valueB1" aria-describedby="first_y_addon" autocomplete="off" value="<?php echo $valueB1; ?>">
                                                <span class="input-group-addon" id="first_y_addon">Y</span>
                                            </div>
                                        </div><!--End form group-->
                                    </div><!--End col-xs-3-->
                                    
                                    <div class="col-xs-1">
                                    	<div class="text-capitalize text-center"><h5>=</h5></div>
                                    </div><!--End col-xs-1-->
                                    
                                    <div class="col-xs-3">
                                    	<div class="form-group">
                                            <div class="input-group">
                                                <input type="text" name="valueC1" class="form-control" id="valueC1" autocomplete="off" value="<?php echo $valueC1; ?>">
                                            </div>
                                        </div><!--End form group-->
                                    </div><!--End col-xs-3-->
                                </div><!--End row-->
                                
                                <span id="helpBlock" class=" text-center help-block">Enter all values for first equation.</span>
                            </div><!--End well-->
                            
                            
                            <div class="well" style="border:2px solid #00005B">
                            	<div class="row" aria-describedby="helpBlock2">
                                	<div class="col-xs-3">
                                    	<div class="form-group">
                                            <div class="input-group">
                                                <input type="text" name="valueD1" class="form-control" id="valueD1" aria-describedby="second_x_addon" autocomplete="off" value="<?php echo $valueD1; ?>">
                                                <span class="input-group-addon" id="second_x_addon">X</span>
                                            </div>
                                        </div><!--End form group-->
                                    </div><!--End col-xs-3-->
                                    
                                    <div class="col-xs-1">
                                    	<div class="text-capitalize text-center"><h5>-</h5></div>
                                    </div><!--End col-xs-1-->
                                    

                                    <div class="col-xs-3">
                                    	<div class="form-group">
                                            <div class="input-group">
                                                <input type="text" name="valueE1" class="form-control" id="valueE1" aria-describedby="second_y_addon" autocomplete="off" value="<?php echo $valueE1; ?>">
                                                <span class="input-group-addon" id="second_y_addon">Y</span>
                                            </div>
                                        </div><!--End form group-->
                                    </div><!--End col-xs-3-->
                                    
                                    <div class="col-xs-1">
                                    	<div class="text-capitalize text-center"><h5>=</h5></div>
                                    </div><!--End col-xs-1-->
                                    
                                    <div class="col-xs-3">
                                    	<div class="form-group">
                                            <div class="input-group">
                                                <input type="text" name="valueF1" class="form-control" id="valueF1" autocomplete="off" value="<?php echo $valueF1; ?>">
                                            </div>
                                        </div><!--End form group-->
                                    </div><!--End col-xs-3-->
                                </div><!--End row-->
                                
                                <span id="helpBlock2" class=" text-center help-block">Enter all values for second equation.</span>
                            </div><!--End well-->
                            
                            <div align="center">
                            	<button type="button" class="btn btn-lg btn-info" onClick="solve_click1()">Solve Equation</button>
                            </div>
                            
                            <hr style="border-bottom:solid #dadada 1px;">
                            
                            <script language="javascript">
								function solve_click1()
								{
									if(document.getElementById("valueA1").value=="" || isNaN(document.getElementById("valueA1").value))
									{
										alert("Please make your first X value is not empty and is numeric");
										document.getElementById("valueA1").focus();
										return null;
									}
									
									if(document.getElementById("valueB1").value=="" || isNaN(document.getElementById("valueB1").value))
									{
										alert("Please make your first Y value is not empty and is numeric");
										document.getElementById("valueB1").focus();
										return null;
									}
									
									if(document.getElementById("valueC1").value=="" || isNaN(document.getElementById("valueC1").value))
									{
										alert("Please make your first equated value is not empty and is numeric");
										document.getElementById("valueC1").focus();
										return null;
									}
									
									if(document.getElementById("valueD1").value=="" || isNaN(document.getElementById("valueD1").value))
									{
										alert("Please make your second X value is not empty and is numeric");
										document.getElementById("valueD1").focus();
										return null;
									}
									
									if(document.getElementById("valueE1").value=="" || isNaN(document.getElementById("valueE1").value))
									{
										alert("Please make your second Y value is not empty and is numeric");
										document.getElementById("valueE1").focus();
										return null;
									}
									
									if(document.getElementById("valueF1").value=="" || isNaN(document.getElementById("valueF1").value))
									{
										alert("Please make your second equated value is not empty and is numeric");
										document.getElementById("valueF1").focus();
										return null;
									}
									
									document.getElementById("myform").action="reflect.php?link=<?php echo $link; ?>";
									document.getElementById("myform").submit();
								}
							</script>
                            
                            <?php
								if(isset($_SESSION['valueA1'],$_SESSION['valueB1'],$_SESSION['valueC1'],$_SESSION['valueD1'],$_SESSION['valueE1'],$_SESSION['valueF1']))
								{
									if($_SESSION['valueD1']=="1")
									{
										?>
                                        	<div class="well" style="border:2px solid #5bc0de">
                                            	<h4>Your Solution</h4><hr style="border-bottom:solid #dadada 1px;">
                                                <?php if($_SESSION['valueA1']!="1") { echo $_SESSION['valueA1']; } ?>x + <?php if($_SESSION['valueB1']!="1") { echo $_SESSION['valueB1']; } ?>y = <?php echo $_SESSION['valueC1']; ?> <br>
												<?php if($_SESSION['valueD1']!="1") { echo $_SESSION['valueD1']; } ?>x - <?php if($_SESSION['valueE1']!="1") { echo $_SESSION['valueE1']; } ?>y = <?php echo $_SESSION['valueF1']; ?> <br><br>
                                                From equation II <br>
                                                <?php if($_SESSION['valueD1']!="1") { echo $_SESSION['valueD1']; } ?>x = <?php echo $_SESSION['valueF1']; ?> + <?php if($_SESSION['valueE1']!="1") { echo $_SESSION['valueE1']; } ?>y -----equation III<br><br>
                                                Put <?php if($_SESSION['valueD1']!="1") { echo $_SESSION['valueD1']; } ?>x = <?php echo $_SESSION['valueF1']; ?> + <?php if($_SESSION['valueE1']!="1") { echo $_SESSION['valueE1']; } ?>y in equation I<br>
                                                <?php if($_SESSION['valueA1']!="1") { echo $_SESSION['valueA1']; } ?>(<?php echo $_SESSION['valueF1']; ?> + <?php if($_SESSION['valueE1']!="1") { echo $_SESSION['valueE1']; } ?>y) + <?php if($_SESSION['valueB1']!="1") { echo $_SESSION['valueB1']; } ?>y = <?php echo $_SESSION['valueC1']; ?><br>
                                                <?php echo $_SESSION['valueA1'] * $_SESSION['valueF1']; ?> + <?php if($_SESSION['valueA1'] * $_SESSION['valueE1']!="1") { echo $_SESSION['valueA1'] * $_SESSION['valueE1']; } ?>y + <?php if($_SESSION['valueB1']!="1") { echo $_SESSION['valueB1']; } ?>y = <?php echo $_SESSION['valueC1']; ?><br>
                                                <?php if($_SESSION['valueA1'] * $_SESSION['valueE1']!="1") { echo $_SESSION['valueA1'] * $_SESSION['valueE1']; } ?>y + <?php if($_SESSION['valueB1']!="1") { echo $_SESSION['valueB1']; } ?>y = <?php echo $_SESSION['valueC1']; ?> - <?php echo $_SESSION['valueA1'] * $_SESSION['valueF1']; ?><br>
                                                <?php if($_SESSION['valueA1'] * ($_SESSION['valueE1'] + $_SESSION['valueB1'])!="1") { echo $_SESSION['valueA1'] * ($_SESSION['valueE1'] + $_SESSION['valueB1']); } ?>y = <?php echo $_SESSION['valueC1'] - ($_SESSION['valueA1'] * $_SESSION['valueF1']); ?><br>
                                                <?php if($_SESSION['valueA1'] * ($_SESSION['valueE1'] + $_SESSION['valueB1'])!="1") { echo $_SESSION['valueA1'] * ($_SESSION['valueE1'] + $_SESSION['valueB1']); } ?>y/<?php if($_SESSION['valueA1'] * ($_SESSION['valueE1'] + $_SESSION['valueB1'])!="1") { echo $_SESSION['valueA1'] * ($_SESSION['valueE1'] + $_SESSION['valueB1']); } ?> = <?php echo $_SESSION['valueC1'] - ($_SESSION['valueA1'] * $_SESSION['valueF1']); ?>/<?php if($_SESSION['valueA1'] * ($_SESSION['valueE1'] + $_SESSION['valueB1'])!="1") { echo $_SESSION['valueA1'] * ($_SESSION['valueE1'] + $_SESSION['valueB1']); } ?><br>
                                                 y = <?php echo ($_SESSION['valueC1'] - ($_SESSION['valueA1'] * $_SESSION['valueF1'])) / ($_SESSION['valueA1'] * ($_SESSION['valueE1'] + $_SESSION['valueB1'])); ?><br><br>
                                                 To find x put the value of y into equation III<br>
                                                 <?php if($_SESSION['valueD1']!="1") { echo $_SESSION['valueD1']; } ?>x = <?php echo $_SESSION['valueF1']; ?> + <?php if($_SESSION['valueE1']!="1") { echo $_SESSION['valueE1']; } ?>(<?php echo ($_SESSION['valueC1'] - ($_SESSION['valueA1'] * $_SESSION['valueF1'])) / ($_SESSION['valueA1'] * ($_SESSION['valueE1'] + $_SESSION['valueB1'])); ?>)<br>
                                                 <?php if($_SESSION['valueD1']!="1") { echo $_SESSION['valueD1']; } ?>x = <?php echo $_SESSION['valueF1'] + ( $_SESSION['valueE1'] * ($_SESSION['valueC1'] - ($_SESSION['valueA1'] * $_SESSION['valueF1'])) / ($_SESSION['valueA1'] * ($_SESSION['valueE1'] + $_SESSION['valueB1']))); ?><br>
												 <?php if($_SESSION['valueD1']!="1") { echo $_SESSION['valueD1']; } ?>x/<?php echo $_SESSION['valueD1']; ?> = <?php echo $_SESSION['valueF1'] + ( $_SESSION['valueE1'] * ($_SESSION['valueC1'] - ($_SESSION['valueA1'] * $_SESSION['valueF1'])) / ($_SESSION['valueA1'] * ($_SESSION['valueE1'] + $_SESSION['valueB1']))); ?>/<?php echo $_SESSION['valueD1']; ?><br>
                                                 x = <?php echo $_SESSION['valueF1'] + ( $_SESSION['valueE1'] * ($_SESSION['valueC1'] - ($_SESSION['valueA1'] * $_SESSION['valueF1'])) / ($_SESSION['valueA1'] * ($_SESSION['valueE1'] + $_SESSION['valueB1'])))/$_SESSION['valueD1']; ?><br>
                                                 <p align="center">Therefore. x = <?php echo $_SESSION['valueF1'] + ( $_SESSION['valueE1'] * ($_SESSION['valueC1'] - ($_SESSION['valueA1'] * $_SESSION['valueF1'])) / ($_SESSION['valueA1'] * ($_SESSION['valueE1'] + $_SESSION['valueB1'])))/$_SESSION['valueD1']; ?> and y = <?php echo ($_SESSION['valueC1'] - ($_SESSION['valueA1'] * $_SESSION['valueF1'])) / ($_SESSION['valueA1'] * ($_SESSION['valueE1'] + $_SESSION['valueB1'])); ?>
                                            </div>
                                         <?php
										 unset($_SESSION['valueA1'],$_SESSION['valueB1'],$_SESSION['valueC1'],$_SESSION['valueD1'],$_SESSION['valueE1'],$_SESSION['valueF1']);
									}
								}
							?>
                            
                            <?php
								if(isset($_SESSION['valueA1'],$_SESSION['valueB1'],$_SESSION['valueC1'],$_SESSION['valueD1'],$_SESSION['valueE1'],$_SESSION['valueF1']))
								{
									if($_SESSION['valueD1']!="1")
									{
										?>
                                        	<div class="well" style="border:2px solid #5bc0de">
                                            	<h4>Your Solution</h4><hr style="border-bottom:solid #dadada 1px;">
                                                <?php if($_SESSION['valueA1']!="1") { echo $_SESSION['valueA1']; } ?>x + <?php if($_SESSION['valueB1']!="1") { echo $_SESSION['valueB1']; } ?>y = <?php echo $_SESSION['valueC1']; ?> <br>
												<?php if($_SESSION['valueD1']!="1") { echo $_SESSION['valueD1']; } ?>x - <?php if($_SESSION['valueE1']!="1") { echo $_SESSION['valueE1']; } ?>y = <?php echo $_SESSION['valueF1']; ?> <br><br>
                                                From equation II <br>
                                                <?php if($_SESSION['valueD1']!="1") { echo $_SESSION['valueD1']; } ?>x = <?php echo $_SESSION['valueF1']; ?> + <?php if($_SESSION['valueE1']!="1") { echo $_SESSION['valueE1']; } ?>y -----equation III<br><br>
                                                Put <?php if($_SESSION['valueD1']!="1") { echo $_SESSION['valueD1']; } ?>x = <?php echo $_SESSION['valueF1']; ?> + <?php if($_SESSION['valueE1']!="1") { echo $_SESSION['valueE1']; } ?>y in equation I<br>
                                                <?php if($_SESSION['valueA1']!="1") { echo $_SESSION['valueA1']; } ?>(<?php echo $_SESSION['valueF1']; ?> + <?php if($_SESSION['valueE1']!="1") { echo $_SESSION['valueE1']; } ?>y/<?php if($_SESSION['valueD1']!="1") { echo $_SESSION['valueD1']; } ?>) + <?php if($_SESSION['valueB1']!="1") { echo $_SESSION['valueB1']; } ?>y = <?php echo $_SESSION['valueC1']; ?><br>
                                                <?php echo $_SESSION['valueA1']/$_SESSION['valueD1']; ?>(<?php echo $_SESSION['valueF1']; ?> + <?php if($_SESSION['valueE1']!="1") { echo $_SESSION['valueE1']; } ?>y) + <?php if($_SESSION['valueB1']!="1") { echo $_SESSION['valueB1']; } ?>y = <?php echo $_SESSION['valueC1']; ?><br>
                                                <?php echo ( $_SESSION['valueA1']/$_SESSION['valueD1']) * $_SESSION['valueF1']; ?> + <?php if(($_SESSION['valueA1']/$_SESSION['valueD1']) * $_SESSION['valueE1']!="1") { echo ($_SESSION['valueA1']/$_SESSION['valueD1']) * $_SESSION['valueE1']; } ?>y + <?php if($_SESSION['valueB1']!="1") { echo $_SESSION['valueB1']; } ?>y = <?php echo $_SESSION['valueC1']; ?> <br>
                                                <?php if(($_SESSION['valueA1']/$_SESSION['valueD1']) * $_SESSION['valueE1']!="1") { echo ($_SESSION['valueA1']/$_SESSION['valueD1']) * $_SESSION['valueE1']; } ?>y + <?php if($_SESSION['valueB1']!="1") { echo $_SESSION['valueB1']; } ?>y = <?php echo $_SESSION['valueC1']; ?> - <?php echo ( $_SESSION['valueA1']/$_SESSION['valueD1']) * $_SESSION['valueF1']; ?><br>
                                                <?php echo (($_SESSION['valueA1']/$_SESSION['valueD1']) * $_SESSION['valueE1']) + $_SESSION['valueB1']; ?>y = <?php echo $_SESSION['valueC1'] - (($_SESSION['valueA1']/$_SESSION['valueD1']) * $_SESSION['valueF1']); ?><br>
                                                <?php echo (($_SESSION['valueA1']/$_SESSION['valueD1']) * $_SESSION['valueE1']) + $_SESSION['valueB1']; ?>y/<?php echo (($_SESSION['valueA1']/$_SESSION['valueD1']) * $_SESSION['valueE1']) + $_SESSION['valueB1']; ?> = <?php echo $_SESSION['valueC1'] - (($_SESSION['valueA1']/$_SESSION['valueD1']) * $_SESSION['valueF1']); ?>/<?php echo (($_SESSION['valueA1']/$_SESSION['valueD1']) * $_SESSION['valueE1']) + $_SESSION['valueB1']; ?><br>
                                                y = <?php echo ($_SESSION['valueC1'] - (($_SESSION['valueA1']/$_SESSION['valueD1']) * $_SESSION['valueF1'])) / ((($_SESSION['valueA1']/$_SESSION['valueD1']) * $_SESSION['valueE1']) + $_SESSION['valueB1']); ?><br><br>
                                                To find x put the value of y into equation III<br>
                                                <?php if($_SESSION['valueD1']!="1") { echo $_SESSION['valueD1']; } ?>x = <?php echo $_SESSION['valueF1']; ?> + <?php if($_SESSION['valueE1']!="1") { echo $_SESSION['valueE1']; } ?>(<?php echo ($_SESSION['valueC1'] - (($_SESSION['valueA1']/$_SESSION['valueD1']) * $_SESSION['valueF1'])) / ((($_SESSION['valueA1']/$_SESSION['valueD1']) * $_SESSION['valueE1']) + $_SESSION['valueB1']); ?>)<br>
                                                <?php if($_SESSION['valueD1']!="1") { echo $_SESSION['valueD1']; } ?>x = <?php echo $_SESSION['valueF1']; ?> + <?php echo $_SESSION['valueE1'] * (($_SESSION['valueC1'] - (($_SESSION['valueA1']/$_SESSION['valueD1']) * $_SESSION['valueF1'])) / ((($_SESSION['valueA1']/$_SESSION['valueD1']) * $_SESSION['valueE1']) + $_SESSION['valueB1'])); ?><br>
                                                <?php if($_SESSION['valueD1']!="1") { echo $_SESSION['valueD1']; } ?>x = <?php echo $_SESSION['valueF1'] + ($_SESSION['valueE1'] * (($_SESSION['valueC1'] - (($_SESSION['valueA1']/$_SESSION['valueD1']) * $_SESSION['valueF1'])) / ((($_SESSION['valueA1']/$_SESSION['valueD1']) * $_SESSION['valueE1']) + $_SESSION['valueB1']))); ?><br>
                                                <?php if($_SESSION['valueD1']!="1") { echo $_SESSION['valueD1']; } ?>x/<?php if($_SESSION['valueD1']!="1") { echo $_SESSION['valueD1']; } ?> = <?php echo $_SESSION['valueF1'] + ($_SESSION['valueE1'] * (($_SESSION['valueC1'] - (($_SESSION['valueA1']/$_SESSION['valueD1']) * $_SESSION['valueF1'])) / ((($_SESSION['valueA1']/$_SESSION['valueD1']) * $_SESSION['valueE1']) + $_SESSION['valueB1']))); ?>/<?php if($_SESSION['valueD1']!="1") { echo $_SESSION['valueD1']; } ?><br>
                                                x = <?php echo ($_SESSION['valueF1'] + ($_SESSION['valueE1'] * (($_SESSION['valueC1'] - (($_SESSION['valueA1']/$_SESSION['valueD1']) * $_SESSION['valueF1'])) / ((($_SESSION['valueA1']/$_SESSION['valueD1']) * $_SESSION['valueE1']) + $_SESSION['valueB1'])))) / $_SESSION['valueD1']; ?><br>
                                                <p align="center">Therefore. x = <?php echo ($_SESSION['valueF1'] + ($_SESSION['valueE1'] * (($_SESSION['valueC1'] - (($_SESSION['valueA1']/$_SESSION['valueD1']) * $_SESSION['valueF1'])) / ((($_SESSION['valueA1']/$_SESSION['valueD1']) * $_SESSION['valueE1']) + $_SESSION['valueB1'])))) / $_SESSION['valueD1']; ?> and y = <?php echo ($_SESSION['valueC1'] - (($_SESSION['valueA1']/$_SESSION['valueD1']) * $_SESSION['valueF1'])) / ((($_SESSION['valueA1']/$_SESSION['valueD1']) * $_SESSION['valueE1']) + $_SESSION['valueB1']); ?>
                                            </div>
                                        <?php
										unset($_SESSION['valueA1'],$_SESSION['valueB1'],$_SESSION['valueC1'],$_SESSION['valueD1'],$_SESSION['valueE1'],$_SESSION['valueF1']);
									}
								}
							?>
                        </div><!--End Num2-->
                        
                        <div id="Num_3">
                        	<div class="well" style="border:2px solid red">
                            	<div class="row" aria-describedby="helpBlock">
                                	<div class="col-xs-3">
                                    	<div class="form-group">
                                            <div class="input-group">
                                                <input type="text" name="valueA2" class="form-control" id="valueA2" aria-describedby="first_x_addon" autocomplete="off" value="<?php echo $valueA2; ?>">
                                                <span class="input-group-addon" id="first_x_addon">X</span>
                                            </div>
                                        </div><!--End form group-->
                                    </div><!--End col-xs-3-->
                                    
                                    <div class="col-xs-1">
                                    	<div class="text-capitalize text-center"><h5>-</h5></div>
                                    </div><!--End col-xs-1-->
                                    
                                    <div class="col-xs-3">
                                    	<div class="form-group">
                                            <div class="input-group">
                                                <input type="text" name="valueB2" class="form-control" id="valueB2" aria-describedby="first_y_addon" autocomplete="off" value="<?php echo $valueB2; ?>">
                                                <span class="input-group-addon" id="first_y_addon">Y</span>
                                            </div>
                                        </div><!--End form group-->
                                    </div><!--End col-xs-3-->
                                    
                                    <div class="col-xs-1">
                                    	<div class="text-capitalize text-center"><h5>=</h5></div>
                                    </div><!--End col-xs-1-->
                                    
                                    <div class="col-xs-3">
                                    	<div class="form-group">
                                            <div class="input-group">
                                                <input type="text" name="valueC2" class="form-control" id="valueC2" autocomplete="off" value="<?php echo $valueC2; ?>">
                                            </div>
                                        </div><!--End form group-->
                                    </div><!--End col-xs-3-->
                                </div><!--End row-->
                                
                                <span id="helpBlock" class=" text-center help-block">Enter all values for first equation.</span>
                            </div><!--End well-->
                            
                            
                            <div class="well" style="border:2px solid #00005B">
                            	<div class="row" aria-describedby="helpBlock2">
                                	<div class="col-xs-3">
                                    	<div class="form-group">
                                            <div class="input-group">
                                                <input type="text" name="valueD2" class="form-control" id="valueD2" aria-describedby="second_x_addon" autocomplete="off" value="<?php echo $valueD2; ?>">
                                                <span class="input-group-addon" id="second_x_addon">X</span>
                                            </div>
                                        </div><!--End form group-->
                                    </div><!--End col-xs-3-->
                                    
                                    <div class="col-xs-1">
                                    	<div class="text-capitalize text-center"><h5>-</h5></div>
                                    </div><!--End col-xs-1-->
                                    

                                    <div class="col-xs-3">
                                    	<div class="form-group">
                                            <div class="input-group">
                                                <input type="text" name="valueE2" class="form-control" id="valueE2" aria-describedby="second_y_addon" autocomplete="off" value="<?php echo $valueE2; ?>">
                                                <span class="input-group-addon" id="second_y_addon">Y</span>
                                            </div>
                                        </div><!--End form group-->
                                    </div><!--End col-xs-3-->
                                    
                                    <div class="col-xs-1">
                                    	<div class="text-capitalize text-center"><h5>=</h5></div>
                                    </div><!--End col-xs-1-->
                                    
                                    <div class="col-xs-3">
                                    	<div class="form-group">
                                            <div class="input-group">
                                                <input type="text" name="valueF2" class="form-control" id="valueF2" autocomplete="off" value="<?php echo $valueF2; ?>">
                                            </div>
                                        </div><!--End form group-->
                                    </div><!--End col-xs-3-->
                                </div><!--End row-->
                                
                                <span id="helpBlock2" class=" text-center help-block">Enter all values for second equation.</span>
                            </div><!--End well-->
                            
                            <div align="center">
                            	<button type="button" class="btn btn-lg btn-info" onClick="solve_click2()">Solve Equation</button>
                            </div>
                            
                            <hr style="border-bottom:solid #dadada 1px;">
                            
                            <script language="javascript">
								function solve_click2()
								{
									if(document.getElementById("valueA2").value=="" || isNaN(document.getElementById("valueA2").value))
									{
										alert("Please make your first X value is not empty and is numeric");
										document.getElementById("valueA2").focus();
										return null;
									}
									
									if(document.getElementById("valueB2").value=="" || isNaN(document.getElementById("valueB2").value))
									{
										alert("Please make your first Y value is not empty and is numeric");
										document.getElementById("valueB2").focus();
										return null;
									}
									
									if(document.getElementById("valueC2").value=="" || isNaN(document.getElementById("valueC2").value))
									{
										alert("Please make your first equated value is not empty and is numeric");
										document.getElementById("valueC2").focus();
										return null;
									}
									
									if(document.getElementById("valueD2").value=="" || isNaN(document.getElementById("valueD2").value))
									{
										alert("Please make your second X value is not empty and is numeric");
										document.getElementById("valueD2").focus();
										return null;
									}
									
									if(document.getElementById("valueE2").value=="" || isNaN(document.getElementById("valueE2").value))
									{
										alert("Please make your second Y value is not empty and is numeric");
										document.getElementById("valueE2").focus();
										return null;
									}
									
									if(document.getElementById("valueF2").value=="" || isNaN(document.getElementById("valueF2").value))
									{
										alert("Please make your second equated value is not empty and is numeric");
										document.getElementById("valueF2").focus();
										return null;
									}
									
									document.getElementById("myform").action="reflect.php?link=<?php echo $link; ?>";
									document.getElementById("myform").submit();
								}
							</script>
                            
                            <?php
								if(isset($_SESSION['valueA2'],$_SESSION['valueB2'],$_SESSION['valueC2'],$_SESSION['valueD2'],$_SESSION['valueE2'],$_SESSION['valueF2']))
								{
									if($_SESSION['valueA2']=="1")
									{
										?>
                                        	<div class="well" style="border:2px solid #5bc0de">
                                            	<h4>Your Solution</h4><hr style="border-bottom:solid #dadada 1px;">
                                                <?php if($_SESSION['valueA2']!="1") { echo $_SESSION['valueA2']; } ?>x - <?php if($_SESSION['valueB2']!="1") { echo $_SESSION['valueB2']; } ?>y = <?php echo $_SESSION['valueC2']; ?> <br>
												<?php if($_SESSION['valueD2']!="1") { echo $_SESSION['valueD2']; } ?>x - <?php if($_SESSION['valueE2']!="1") { echo $_SESSION['valueE2']; } ?>y = <?php echo $_SESSION['valueF2']; ?> <br><br>
                                                From equation I <br>
                                                <?php if($_SESSION['valueA2']!="1") { echo $_SESSION['valueA2']; } ?>x = <?php echo $_SESSION['valueC2']; ?> + <?php if($_SESSION['valueB2']!="1") { echo $_SESSION['valueB2']; } ?>y -----equation III<br><br>
                                                put <?php if($_SESSION['valueA2']!="1") { echo $_SESSION['valueA2']; } ?>x = <?php echo $_SESSION['valueC2']; ?> + <?php if($_SESSION['valueB2']!="1") { echo $_SESSION['valueB2']; } ?>y in equation II<br>
                                                <?php if($_SESSION['valueD2']!="1") { echo $_SESSION['valueD2']; } ?>(<?php echo $_SESSION['valueC2']; ?> + <?php if($_SESSION['valueB2']!="1") { echo $_SESSION['valueB2']; } ?>y) - <?php if($_SESSION['valueE2']!="1") { echo $_SESSION['valueE2']; } ?>y = <?php echo $_SESSION['valueF2']; ?> <br>
                                                <?php echo $_SESSION['valueD2'] * $_SESSION['valueC2'] ?> + <?php if($_SESSION['valueD2'] * $_SESSION['valueB2']!="1") { echo $_SESSION['valueD2'] * $_SESSION['valueB2']; } ?>y - <?php if($_SESSION['valueE2']!="1") { echo $_SESSION['valueE2']; } ?>y = <?php echo $_SESSION['valueF2']; ?><br>
                                                <?php if($_SESSION['valueD2'] * $_SESSION['valueB2']!="1") { echo $_SESSION['valueD2'] * $_SESSION['valueB2']; } ?>y - <?php if($_SESSION['valueE2']!="1") { echo $_SESSION['valueE2']; } ?>y = <?php echo $_SESSION['valueF2']; ?> - <?php echo $_SESSION['valueD2'] * $_SESSION['valueC2'] ?><br>
                                                <?php if(($_SESSION['valueD2'] * $_SESSION['valueB2']) - $_SESSION['valueE2']!="1") { echo ($_SESSION['valueD2'] * $_SESSION['valueB2']) - $_SESSION['valueE2']; } ?>y = <?php echo $_SESSION['valueF2'] - ($_SESSION['valueD2'] * $_SESSION['valueC2']); ?><br>
                                                <?php if(($_SESSION['valueD2'] * $_SESSION['valueB2']) - $_SESSION['valueE2']!="1") { echo ($_SESSION['valueD2'] * $_SESSION['valueB2']) - $_SESSION['valueE2']; } ?>y/<?php echo ($_SESSION['valueD2'] * $_SESSION['valueB2']) - $_SESSION['valueE2']; ?> = <?php echo $_SESSION['valueF2'] - ($_SESSION['valueD2'] * $_SESSION['valueC2']); ?>/<?php echo ($_SESSION['valueD2'] * $_SESSION['valueB2']) - $_SESSION['valueE2']; ?><br>
                                                y = <?php echo ($_SESSION['valueF2'] - ($_SESSION['valueD2'] * $_SESSION['valueC2'])) / (($_SESSION['valueD2'] * $_SESSION['valueB2']) - $_SESSION['valueE2']); ?><br><br>
                                                To find x put the value of y into equation III<br>
                                                <?php if($_SESSION['valueA2']!="1") { echo $_SESSION['valueA2']; } ?>x = <?php echo $_SESSION['valueC2']; ?> + <?php if($_SESSION['valueB2']!="1") { echo $_SESSION['valueB2']; } ?>(<?php echo ($_SESSION['valueF2'] - ($_SESSION['valueD2'] * $_SESSION['valueC2'])) / (($_SESSION['valueD2'] * $_SESSION['valueB2']) - $_SESSION['valueE2']); ?>)<br>
                                                <?php if($_SESSION['valueA2']!="1") { echo $_SESSION['valueA2']; } ?>x = <?php echo $_SESSION['valueC2']; ?><?php echo + $_SESSION['valueB2'] * ($_SESSION['valueF2'] - ($_SESSION['valueD2'] * $_SESSION['valueC2'])) / (($_SESSION['valueD2'] * $_SESSION['valueB2']) - $_SESSION['valueE2']); ?><br>
                                                <?php if($_SESSION['valueA2']!="1") { echo $_SESSION['valueA2']; } ?>x = <?php echo $_SESSION['valueC2'] + $_SESSION['valueB2'] * ($_SESSION['valueF2'] - ($_SESSION['valueD2'] * $_SESSION['valueC2'])) / (($_SESSION['valueD2'] * $_SESSION['valueB2']) - $_SESSION['valueE2']); ?><br>
                                                <?php if($_SESSION['valueA2']!="1") { echo $_SESSION['valueA2']; } ?>x/<?php echo $_SESSION['valueA2']; ?> = <?php echo $_SESSION['valueC2'] + $_SESSION['valueB2'] * ($_SESSION['valueF2'] - ($_SESSION['valueD2'] * $_SESSION['valueC2'])) / (($_SESSION['valueD2'] * $_SESSION['valueB2']) - $_SESSION['valueE2']); ?>/<?php echo $_SESSION['valueA2']; ?><br>
                                                x = <?php echo ($_SESSION['valueC2'] + $_SESSION['valueB2'] * ($_SESSION['valueF2'] - ($_SESSION['valueD2'] * $_SESSION['valueC2'])) / (($_SESSION['valueD2'] * $_SESSION['valueB2']) - $_SESSION['valueE2'])) / $_SESSION['valueA2']; ?><br>
                                                <p align="center">Therefore. x = <?php echo ($_SESSION['valueC2'] + $_SESSION['valueB2'] * ($_SESSION['valueF2'] - ($_SESSION['valueD2'] * $_SESSION['valueC2'])) / (($_SESSION['valueD2'] * $_SESSION['valueB2']) - $_SESSION['valueE2'])) / $_SESSION['valueA2']; ?> and y = <?php echo ($_SESSION['valueF2'] - ($_SESSION['valueD2'] * $_SESSION['valueC2'])) / (($_SESSION['valueD2'] * $_SESSION['valueB2']) - $_SESSION['valueE2']); ?>
                                            </div>
                                        <?php
										unset($_SESSION['valueA2'],$_SESSION['valueB2'],$_SESSION['valueC2'],$_SESSION['valueD2'],$_SESSION['valueE2'],$_SESSION['valueF2']);
									}
								}
							?>
                            
                            <?php
								if(isset($_SESSION['valueA2'],$_SESSION['valueB2'],$_SESSION['valueC2'],$_SESSION['valueD2'],$_SESSION['valueE2'],$_SESSION['valueF2']))
								{
									if($_SESSION['valueA2']!="1")
									{
										?>
                                        	<div class="well" style="border:2px solid #5bc0de">
                                            	<h4>Your Solution</h4><hr style="border-bottom:solid #dadada 1px;">
                                                <?php if($_SESSION['valueA2']!="1") { echo $_SESSION['valueA2']; } ?>x - <?php if($_SESSION['valueB2']!="1") { echo $_SESSION['valueB2']; } ?>y = <?php echo $_SESSION['valueC2']; ?> <br>
												<?php if($_SESSION['valueD2']!="1") { echo $_SESSION['valueD2']; } ?>x - <?php if($_SESSION['valueE2']!="1") { echo $_SESSION['valueE2']; } ?>y = <?php echo $_SESSION['valueF2']; ?> <br><br>
                                                From equation I <br>
                                                <?php if($_SESSION['valueA2']!="1") { echo $_SESSION['valueA2']; } ?>x = <?php echo $_SESSION['valueC2']; ?> + <?php if($_SESSION['valueB2']!="1") { echo $_SESSION['valueB2']; } ?>y -----equation III<br><br>
                                                put <?php if($_SESSION['valueA2']!="1") { echo $_SESSION['valueA2']; } ?>x = <?php echo $_SESSION['valueC2']; ?> + <?php if($_SESSION['valueB2']!="1") { echo $_SESSION['valueB2']; } ?>y in equation II<br>
                                                <?php if($_SESSION['valueD2']!="1") { echo $_SESSION['valueD2']; } ?>(<?php echo $_SESSION['valueC2']; ?> + <?php if($_SESSION['valueB2']!="1") { echo $_SESSION['valueB2']; } ?>y/<?php echo $_SESSION['valueA2']; ?>) - <?php if($_SESSION['valueE2']!="1") { echo $_SESSION['valueE2']; } ?>y = <?php echo $_SESSION['valueF2']; ?> <br>
                                                <?php echo $_SESSION['valueD2'] / $_SESSION['valueA2']; ?>(<?php echo $_SESSION['valueC2']; ?> + <?php if($_SESSION['valueB2']!="1") { echo $_SESSION['valueB2']; } ?>y) - <?php if($_SESSION['valueE2']!="1") { echo $_SESSION['valueE2']; } ?>y = <?php echo $_SESSION['valueF2']; ?> <br>
                                                <?php echo ($_SESSION['valueD2'] / $_SESSION['valueA2']) * $_SESSION['valueC2']; ?> + <?php if(($_SESSION['valueD2'] / $_SESSION['valueA2']) * $_SESSION['valueB2']!="1") { echo ($_SESSION['valueD2'] / $_SESSION['valueA2']) * $_SESSION['valueB2']; } ?>y - <?php if($_SESSION['valueE2']!="1") { echo $_SESSION['valueE2']; } ?>y = <?php echo $_SESSION['valueF2']; ?> <br>
                                                <?php if(($_SESSION['valueD2'] / $_SESSION['valueA2']) * $_SESSION['valueB2']!="1") { echo ($_SESSION['valueD2'] / $_SESSION['valueA2']) * $_SESSION['valueB2']; } ?>y - <?php if($_SESSION['valueE2']!="1") { echo $_SESSION['valueE2']; } ?>y = <?php echo $_SESSION['valueF2']; ?> - <?php echo ($_SESSION['valueD2'] / $_SESSION['valueA2']) * $_SESSION['valueC2']; ?> <br>
                                                <?php if((($_SESSION['valueD2'] / $_SESSION['valueA2']) * $_SESSION['valueB2']) - $_SESSION['valueE2']!="1") { echo (($_SESSION['valueD2'] / $_SESSION['valueA2']) * $_SESSION['valueB2']) - $_SESSION['valueE2']; } ?>y = <?php echo $_SESSION['valueF2'] - (($_SESSION['valueD2'] / $_SESSION['valueA2']) * $_SESSION['valueC2']); ?><br>
                                                <?php if((($_SESSION['valueD2'] / $_SESSION['valueA2']) * $_SESSION['valueB2']) - $_SESSION['valueE2']!="1") { echo (($_SESSION['valueD2'] / $_SESSION['valueA2']) * $_SESSION['valueB2']) - $_SESSION['valueE2']; } ?>y/<?php echo (($_SESSION['valueD2'] / $_SESSION['valueA2']) * $_SESSION['valueB2']) - $_SESSION['valueE2']; ?> = <?php echo $_SESSION['valueF2'] - (($_SESSION['valueD2'] / $_SESSION['valueA2']) * $_SESSION['valueC2']); ?>/<?php echo (($_SESSION['valueD2'] / $_SESSION['valueA2']) * $_SESSION['valueB2']) - $_SESSION['valueE2']; ?><br> 
                                                y = <?php echo ($_SESSION['valueF2'] - (($_SESSION['valueD2'] / $_SESSION['valueA2']) * $_SESSION['valueC2'])) / ((($_SESSION['valueD2'] / $_SESSION['valueA2']) * $_SESSION['valueB2']) - $_SESSION['valueE2']); ?><br><br>
                                                To find x put the value of y into equation III<br>
                                                <?php if($_SESSION['valueA2']!="1") { echo $_SESSION['valueA2']; } ?>x = <?php echo $_SESSION['valueC2']; ?> + <?php if($_SESSION['valueB2']!="1") { echo $_SESSION['valueB2']; } ?>(<?php echo ($_SESSION['valueF2'] - (($_SESSION['valueD2'] / $_SESSION['valueA2']) * $_SESSION['valueC2'])) / ((($_SESSION['valueD2'] / $_SESSION['valueA2']) * $_SESSION['valueB2']) - $_SESSION['valueE2']); ?>)<br>
                                                <?php if($_SESSION['valueA2']!="1") { echo $_SESSION['valueA2']; } ?>x = <?php echo $_SESSION['valueC2']; ?><?php echo + $_SESSION['valueB2'] * ($_SESSION['valueF2'] - (($_SESSION['valueD2'] / $_SESSION['valueA2']) * $_SESSION['valueC2'])) / ((($_SESSION['valueD2'] / $_SESSION['valueA2']) * $_SESSION['valueB2']) - $_SESSION['valueE2']); ?><br>
                                                <?php if($_SESSION['valueA2']!="1") { echo $_SESSION['valueA2']; } ?>x = <?php echo $_SESSION['valueC2'] + $_SESSION['valueB2'] * ($_SESSION['valueF2'] - (($_SESSION['valueD2'] / $_SESSION['valueA2']) * $_SESSION['valueC2'])) / ((($_SESSION['valueD2'] / $_SESSION['valueA2']) * $_SESSION['valueB2']) - $_SESSION['valueE2']); ?><br>
                                                <?php if($_SESSION['valueA2']!="1") { echo $_SESSION['valueA2']; } ?>x/<?php echo $_SESSION['valueA2']; ?> = <?php echo $_SESSION['valueC2'] + $_SESSION['valueB2'] * ($_SESSION['valueF2'] - (($_SESSION['valueD2'] / $_SESSION['valueA2']) * $_SESSION['valueC2'])) / ((($_SESSION['valueD2'] / $_SESSION['valueA2']) * $_SESSION['valueB2']) - $_SESSION['valueE2']); ?>/<?php echo $_SESSION['valueA2']; ?><br>
                                                x = <?php echo ($_SESSION['valueC2'] + $_SESSION['valueB2'] * ($_SESSION['valueF2'] - (($_SESSION['valueD2'] / $_SESSION['valueA2']) * $_SESSION['valueC2'])) / ((($_SESSION['valueD2'] / $_SESSION['valueA2']) * $_SESSION['valueB2']) - $_SESSION['valueE2'])) / $_SESSION['valueA2']; ?><br>
                                                <p align="center">Therefore. x = <?php echo ($_SESSION['valueC2'] + $_SESSION['valueB2'] * ($_SESSION['valueF2'] - (($_SESSION['valueD2'] / $_SESSION['valueA2']) * $_SESSION['valueC2'])) / ((($_SESSION['valueD2'] / $_SESSION['valueA2']) * $_SESSION['valueB2']) - $_SESSION['valueE2'])) / $_SESSION['valueA2']; ?> and y = <?php echo ($_SESSION['valueF2'] - (($_SESSION['valueD2'] / $_SESSION['valueA2']) * $_SESSION['valueC2'])) / ((($_SESSION['valueD2'] / $_SESSION['valueA2']) * $_SESSION['valueB2']) - $_SESSION['valueE2']); ?>
                                            </div>
                                        <?php
										unset($_SESSION['valueA2'],$_SESSION['valueB2'],$_SESSION['valueC2'],$_SESSION['valueD2'],$_SESSION['valueE2'],$_SESSION['valueF2']);
									}
								}
							?>
                        </div><!--End Num3-->
                    </div><!--End col-xs-6-->
       		</div>
         </form>
        </div>
    <!--End content-->
    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.1.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
    <script language="javascript">
		<?php
			if($link=="0")
			{
				?>
					$(document).ready(
						function() 
						{
							$("#Num_1").hide();
							$("#Num_2").hide();
							$("#Num_3").hide();
						}
					);
				<?php
			}
		?>
		
		<?php
			if($link=="1")
			{
				?>
					$(document).ready(
						function() 
						{
							$("#Num_2").fadeOut();
							$("#Num_3").fadeOut();
							$("#non_selected").fadeOut();
							$("#Num_1").slideDown();
						}
					);
				<?php
			}
		?>
		
		<?php
			if($link=="2")
			{
				?>
					$(document).ready(
						function() 
						{
							$("#Num_2").slideDown();
							$("#Num_3").fadeOut();
							$("#non_selected").fadeOut();
							$("#Num_1").fadeOut();
						}
					);
				<?php
			}
		?>
		
		<?php
			if($link=="3")
			{
				?>
					$(document).ready(
						function() 
						{
							$("#Num_2").fadeOut();
							$("#Num_3").slideDown();
							$("#non_selected").fadeOut();
							$("#Num_1").fadeOut();
						}
					);
				<?php
			}
		?>
		
		function num_1_click()
		{
			$("#Num_2").fadeOut();
			$("#Num_3").fadeOut();
			$("#non_selected").fadeOut();
			$("#Num_1").slideDown();
		}
		
		function num_2_click()
		{
			$("#Num_2").slideDown();
			$("#Num_3").fadeOut();
			$("#non_selected").fadeOut();
			$("#Num_1").fadeOut();
		}
		
		function num_3_click()
		{
			$("#Num_2").fadeOut();
			$("#Num_3").slideDown();
			$("#non_selected").fadeOut();
			$("#Num_1").fadeOut();
		}
		
		function operators_select(Num)
		{
			document.getElementById("myform").action="simultaneous_equation.php?link="+Num;
			document.getElementById("myform").submit();
		}
	</script>
  </body>
</html>