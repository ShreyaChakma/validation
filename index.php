<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>validation</title>
</head>
<body>
      <form action="result.php" method="post" enctype="multipart/form-data">
         <label for = "name">Name </label><br>
         <input type="text" name= "name">
         <br><br>
         <label for = "email">Email</label><br>
         <input type= "text" name = "email">
         <br><br>
         <label for = "address">Address</label><br>
         <input type= "text" name = "address">
         <br><br>
         <label for = "profile_picture">Profile picture</label><br>
         <input type = "file" name = "profile_picture">
         <br><br>
         <button type= "submit">Submit</button>      
      </form>
</body>
</html>