
	<meta charset="utf-8">
	<title>Isd knowledge</title>
    <link rel="shortcut icon" href="Home.png" />
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<style type="text/css">
<!--
body,td,th {
	color: #FF0000;
}
.style1 {color: #FF0000}
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<head>

<title>Current</title>
<link rel="shortcut icon" href="Home.png" />

<?php
	require_once 'head.php';
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>

</head>
<body id="contento" style="background-image:url('images/note.jpg')" >
<br>
<a href="index.html"><h3> &nbsp;&nbsp;&nbsp;Home</h3></a><a href="search.php"><h3> &nbsp;&nbsp;&nbsp;Search</h3></a>   
 
					<div class="box-content center span5">
                        <fieldset>
                        <legend>Public Space
                        <br>
                            
                        
						   
<form class="form-horizontal" id="formname" name="formname" method="post" action="public.php"  enctype="multipart/form-data">


                         
                         <div class="control-group warning">
								<label class="control-label" for="selectError3"><h3>Category :</h3></label>
                               
								<div class="controls">
                                
                                  <select name="cat" id="cat" style="height: 30px; width: 200px; left: 250; top: 250;" onChange="javascript: dropdownlist(this.options[this.selectedIndex].value);">
                                   <option value="">---select---</option>
                                   <option value="common">Common</option>
                                    <option value="c">C</option>
                                    <option value="c++">C++</option>
                                    <option value="java">JAVA</option>
                                    <option value="python">Python</option>
                                    <option value="php">PHP</option>
                                    <option value="others">Others</option>
                                   </select>
                           </div>
                          </div>
                              <div class="control-group warning">
								<label class="control-label" for="selectError3"><h3>Sub_Category:</h3></label>
                               
								<div class="controls">
                                
                                  <select name="sub" id="sub" style="height: 30px; width: 200px; left: 250; top: 250;" onChange="javascript: dropdownlist(this.options[this.selectedIndex].value);">
                                   <option value="">---select---</option>
                                    <option value="program structure">Program Structure</option>
                                    <option value="variable declaration">Variable Declaration</option>
                                    <option value="looping structures">Looping structures</option>
                                    <option value="control structures">Control structures</option>
                                    <option value="syntax">Syntax</option>
                                    <option value="common">Common</option>
                                    <option value="others">Others</option>
                                   </select>
                           </div>
                          </div>
                          
                          

                         
                                        
                                        
                                  <div class="control-group warning">
                                    <p>
                                      <input name="b1" type="submit"  value="Search" style="height: 40px; width: 150px; left: 250; top: 250; background-color: #33FFFF; color:#FF0000;font-size:24px"/>
                                      
                                      
                                      </div>
                            
                      

                      
               
                          
                         
						</form>   
</fieldset>
					</div>

</fieldset>
</body>
