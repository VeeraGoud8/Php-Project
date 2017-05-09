  <?
  include "config.php";
  ?>
<?php
            if(isset($_POST["btnSubmit"]))
            {
                // print_r($_FILES);
                // print_r($_FILES["files"]["error"]);
                if($_FILES["files"]["error"][0] == 4)
                {
                    echo "Please, Select the file to upload!!!";
                }
                else
                {
                    $type=$_FILES["files"]["type"];
                    //print_r($type);
                    $allowedTypes=array("image/jpeg","image/png");
                    //print_r($allowedTypes);

                    if(in_array($type, $allowedTypes))
                    {

                        move_uploaded_file($_FILES["files"]["tmp_name"],"UploadFolder/".$_FILES["files"]["name"]);
                        echo "File uploaded successfully!!!";
                    }
                    else
                    {
                      echo "File format is incorrect!";
                    }
                }

                //print_r($_FILES);

            }

        ?>