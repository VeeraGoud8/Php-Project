
<html>
    <head>
        <title>PHP upload file demo</title>
    </head>
    <body>
        <form action="a.php" method="post" enctype="multipart/form-data" name="formUploadFile">      
            <label>Multiple filese upload:</label>
            <!--<input type="file" name="file"/>-->    
            <input type="file" name="files[]" multiple/>
            <input type="submit" value="Upload File" name="btnSubmit"/>
        </form>        
    </body>
</html>