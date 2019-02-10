<html>
	<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Knowledge Add</title>
    <link rel="shortcut icon" href="Home.png" />
</head>
    <style type="text/css">
<!--
.style1 {font-weight: bold}
-->
    </style>
    <script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<head>
 
<?php
require_once 'head.php';
?>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
 
  <link rel="shortcut icon" href="jy.png" />

<style>
    body {
        margin: 0px;
         
    }

    #contento:-webkit-full-screen {
        width: 100%;
        height: 100%;
    }

    #contento:-moz-full-screen {
        width: 100%;
        height: 100%;
    }
</style>
<script type="text/javascript">
    function goFullscreen(id) {
        // Get the element that we want to take into fullscreen mode
        var element = document.getElementById(id);

        // These function will not exist in the browsers that don't support fullscreen mode yet,
        // so we'll have to check to see if they're available before calling them.

        if (element.mozRequestFullScreen) {
            // This is how to go into fullscren mode in Firefox
            // Note the "moz" prefix, which is short for Mozilla.
            element.mozRequestFullScreen();
        } else if (element.webkitRequestFullScreen) {
            // This is how to go into fullscreen mode in Chrome and Safari
            // Both of those browsers are based on the Webkit project, hence the same prefix.
            element.webkitRequestFullScreen();
        }
        // Hooray, now we're in fullscreen mode!
    }
</script>
<script type="text/javascript">
function check()
{
   var cat=document.getElementById('cat').value;
    if(cat == "")
        {
            alert("please fill category");
            document.formname.cat.focus();
        }
 else if(document.getElementById('sub').value=="")
        {
            alert("please fill sub_Category"); 
            document.formname.sub.focus();  
        }
   else if(document.getElementById('des').value=="")
        {
            alert("please fill notes/solutions"); 
            document.formname.des.focus();  
        }
    else if(document.getElementById('up').value=="")
        {
            alert("please upload your file"); 
            document.formname.up.focus();  
        }
    else if(document.getElementById('pr').value=="")
        {
            alert("please select sharing type");
            document.formname.sharing.focus();   
        }
    else{
        
        document.getElementById('formname').submit()
    }
    
}
 
function exitFullscreen(id) {
  if(document.exitFullscreen) {
    document.exitFullscreen();
  } else if(document.mozCancelFullScreen) {
    document.mozCancelFullScreen();
  } else if(document.webkitExitFullscreen) {
    document.webkitExitFullscreen();
  }
}
</script>
 </head>
<body id="contento" style="background-image: url(images/note.jpg);">
<br>
<a href="index.html"><h3> &nbsp;&nbsp;&nbsp;Home</h3></a><a href="search.php"><h3> &nbsp;&nbsp;&nbsp;Search</h3></a>   
 
					<div class="box-content center span5">
                        <fieldset>
                        <legend>Enter Your Notes
                        
						   
<form class="form-horizontal" id="formname" name="formname" method="post" action="upload.php"  enctype="multipart/form-data">


                         
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
								<label class="control-label" for="selectError3"><h3>Topic :</h3></label>
                               
								 
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                 <textarea name="topic" cols="100"></textarea>
                           
                          </div>

                          <div class="control-group warning">
								<label class="control-label" for="selectError3"><h3>Links_Refered:</h3></label>
                               
								 
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                 <textarea name="link" rows="1" cols="50"></textarea>
                           
                          </div>
                              

                              
                    <div class="control-group warning">
							  <label class="control-label" ><h3>Notes/Solutions:</h3></label>
							  <div class="controls">
							    <label>
							    <textarea name="des" id="des" cols="45" rows="5"></textarea>
							    </label>
							  </div>
					   </div>    
                
                <div class="control-group warning">
							  <label class="control-label" for="fileInput"><h3>Upload file</h3></label>
							  <div class="controls">
								 
								  <input name="up" id="up" type="file" />
							    
                                 
				  </div>
						</div>

                    <div class="control-group warning">
								<label class="control-label" for="selectError3"><h3>Privacy:</h3></label>
                               
								<div class="controls">
                                
                                  <select name="pr" id="pr" style="height: 30px; width: 200px; left: 250; top: 250;" onChange="javascript: dropdownlist(this.options[this.selectedIndex].value);">
                                   <option value="">---select---</option>
                                    <option value="public">Public</option>
                                    <option value="private">Private</option>
                                   
                                   </select>
                           </div>
                          </div>
                                        
                                        
                                  <div class="control-group warning">
                                    <p>
                                      <input name="b1" type="button" onclick="check()"  value="Register" style="height: 40px; width: 150px; left: 250; top: 250; background-color: #33FFFF; color:#FF0000;font-size:24px"/>
                                      <input name="b2" type="reset" value="Reset" style="height: 40px; width: 150px; left: 250; top: 250; background-color: #33FFFF; color:#FF0000;font-size:24px" / ></p>
                                      
                                      </div>
                            
                      

                      
               
     
						</form>   
</fieldset>
					</div>
			
                </body>
                </html>
                
             