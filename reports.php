<!DOCTYPE html>
<html>
<head>
  <title>Hotel</title>
</head>
<body>
  <style>
.avatar {
  border-radius: 50%;
  width: 300px;
  height:auto;
}
.img-container {
        text-align: center;
  }
</style>
<div class="container" style="width: 50%; padding-top: 100px; ">
<div class="img-container"> <!-- Block parent element -->
    <img class ="avatar" src="img/me.jpg" alt="Avatar">
  </div>
  <form action="">
    <div class="form-group">
      <label for="email">Name:</label>
       <input type="text" id="username" value="admin" class="form-control" name="name" readonly="readonly"/>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd"value="qwerty">
    </div>
  </form>
</div>
</body>
</html>