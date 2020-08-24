<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin panel home</title>
    <link rel="stylesheet" type="text/css" href="css/admin-css/home-admin.css">
</head>
<body> 
    <div class="container-fluid">
      <div class="sidebar">
          <a class="active" href="#content">Home</a>
          <a href="#news">Landing page</a>
          <a href="#contact">IT training Page</a>
          <a href="#about">IT solution page</a>
          <a href="#crm">CRM</a>
          <a href="logout">Log out</a>
          
      </div>

     <p style="text-align:center;">
    Welcome {{session('data')['username']}}

     </p>
    </div>
   
        
    
      
</body>
</html>