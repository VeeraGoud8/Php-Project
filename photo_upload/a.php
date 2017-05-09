  <?
  error_reporting(0);
  include "config.php";
  ?>
<?php
            if(isset($_POST["btnSubmit"]))
            {
                 //print_r($_FILES);
              if($_FILES["files"]["error"][0]==4)
              {
                echo "Please select the file to uplolad!";
              }
              else 
              {
                 foreach ($_FILES["files"]["name"] as $index=>$value) 
                 {
                    //echo "$key";
                    // echo "\n"; 
                    $type=$_FILES["files"]["type"][$index];
                    //print_r($type);
                    $allowedTypes=array("image/jpeg","image/png");



                    //print_r($allowedTypes);

                 //    if(in_array($type, $allowedTypes))
                 //    {

                 //        move_uploaded_file($_FILES["files"]["tmp_name"],"UploadFolder/".$_FILES["files"]["name"]);
                 //        echo "File uploaded successfully!!!";
                 //    }
                 //    else
                 //    {
                 //      echo "File format is incorrect!";
                 //    }
                 // }

                // foreach ($_FILES["files"]["size"] as $index=>$value) 
                //  {
                //      echo "{$index} => $value";
                //      echo "\n"; 
                //  }
                //  foreach ($_FILES["files"]["type"] as $index=>$value) 
                //  {
                //      echo "{$index} => $value";
                //      echo "\n"; 
                //  }



            }
            }        
?>