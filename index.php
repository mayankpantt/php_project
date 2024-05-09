<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css"> -->
    <style>
      *{
    /* margin:0;
    padding:0; */
    
    box-sizing:border-box;
    font-family:"poppins",sans-serif;
}
body{
    background-color: #c9d6ff;
    background:linear-gradient(to right,#e2e2e2,#c9d6ff);
    background-image: linear-gradient(90deg, rgb(168, 86, 201) 0%, rgb(168, 86, 201) 3%,rgb(140, 74, 173) 3%, rgb(140, 74, 173) 11%,rgb(112, 61, 145) 11%, rgb(112, 61, 145) 20%,rgb(85, 49, 118) 20%, rgb(85, 49, 118) 49%,rgb(57, 37, 90) 49%, rgb(57, 37, 90) 71%,rgb(29, 24, 62) 71%, rgb(29, 24, 62) 72%,rgb(1, 12, 34) 72%, rgb(1, 12, 34) 100%),linear-gradient(67.5deg, rgb(168, 86, 201) 0%, rgb(168, 86, 201) 3%,rgb(140, 74, 173) 3%, rgb(140, 74, 173) 11%,rgb(112, 61, 145) 11%, rgb(112, 61, 145) 20%,rgb(85, 49, 118) 20%, rgb(85, 49, 118) 49%,rgb(57, 37, 90) 49%, rgb(57, 37, 90) 71%,rgb(29, 24, 62) 71%, rgb(29, 24, 62) 72%,rgb(1, 12, 34) 72%, rgb(1, 12, 34) 100%),linear-gradient(112.5deg, rgb(168, 86, 201) 0%, rgb(168, 86, 201) 3%,rgb(140, 74, 173) 3%, rgb(140, 74, 173) 11%,rgb(112, 61, 145) 11%, rgb(112, 61, 145) 20%,rgb(85, 49, 118) 20%, rgb(85, 49, 118) 49%,rgb(57, 37, 90) 49%, rgb(57, 37, 90) 71%,rgb(29, 24, 62) 71%, rgb(29, 24, 62) 72%,rgb(1, 12, 34) 72%, rgb(1, 12, 34) 100%),linear-gradient(45deg, rgb(168, 86, 201) 0%, rgb(168, 86, 201) 3%,rgb(140, 74, 173) 3%, rgb(140, 74, 173) 11%,rgb(112, 61, 145) 11%, rgb(112, 61, 145) 20%,rgb(85, 49, 118) 20%, rgb(85, 49, 118) 49%,rgb(57, 37, 90) 49%, rgb(57, 37, 90) 71%,rgb(29, 24, 62) 71%, rgb(29, 24, 62) 72%,rgb(1, 12, 34) 72%, rgb(1, 12, 34) 100%),linear-gradient(90deg, rgb(95, 3, 74),rgb(35, 65, 96)); background-blend-mode:overlay,overlay,overlay,overlay,normal;
}
.container{
    background:rgba(255, 255, 255, 0.8);
    width:450px;
    padding:1.5rem;
    margin:50px auto;
    border-radius:10px;
    box-shadow:0 20px 35px rgba(0,0,1,0.9);
}
form{
    margin:0 2rem;
}
.form-title{
    font-size:1.5rem;
    font-weight:bold;
    text-align:center;
    padding:1.3rem;
    margin-bottom:0.4rem;
}
input{
    color:inherit;
    width:100%;
    background-color:transparent;
    border:none;
    border-bottom:1px solid #757575;
    padding-left:1.5rem;
    font-size:15px;
}
.input-group{
    padding:1% 0;
    position:relative;

}
.input-group i{
    position:absolute;
    color:black;
}
input:focus{
    background-color: transparent;
    outline:transparent;
    border-bottom:2px solid hsl(327,90%,28%);
}
input::placeholder{
    color:transparent;
}
label{
    color:#757575;
    position:relative;
    left:1.2em;
    top:-1.3em;
    cursor:auto;
    transition:0.3s ease all;
}
input:focus~label,input:not(:placeholder-shown)~label{
    top:-3em;
    color:hsl(327,90%,28%);
    font-size:15px;
}
.recover{
    text-align:right;
    font-size:1rem;
    margin-bottom:1rem;

}
.recover a{
    text-decoration:none;
    color:rgb(125,125,235);
}
.recover a:hover{
    color:blue;
    text-decoration:underline;
}
.btn{
    font-size:1.1rem;
    padding:8px 0;
    border-radius:5px;
    outline:none;
    border:none;
    width:100%;
    background:rgb(125,125,235);
    color:white;
    cursor:pointer;
    transition:0.9s;
}
.btn:hover{
    background:#07001f;
}
.or{
    font-size:1.1rem;
    margin-top:0.5rem;
    text-align:center;
}
.icons{
    text-align:center;
}
.icons i{
    color:rgb(125,125,235);
    padding:0.8rem 1.5rem;
    border-radius:10px;
    font-size:1.5rem;
    cursor:pointer;
    border:2px solid #dfe9f5;
    margin:0 15px;
    transition:1s;
}
.icons i:hover{
    background:#07001f;
    font-size:1.6rem;
    border:2px solid rgb(125,125,235);
}
.links{
    display:flex;
    justify-content:space-around;
    padding:0 4rem;
    margin-top:0.9rem;
    font-weight:bold;
}
button{
    color:rgb(125,125,235);
    border:none;
    background-color:transparent;
    font-size:1rem;
    font-weight:bold;
}
button:hover{
    text-decoration:underline;
    color:blue;
}

header {
    background-color: #333;
    color: white;
    padding: 20px;
    text-align: center;
}

nav {
  background-image: linear-gradient(45deg, rgba(254, 246, 210, 0.53) 0%, rgba(254, 246, 210, 0.53) 14.286%,rgba(221, 240, 216, 0.53) 14.286%, rgba(221, 240, 216, 0.53) 28.572%,rgba(188, 233, 223, 0.53) 28.572%, rgba(188, 233, 223, 0.53) 42.858%,rgba(156, 227, 229, 0.53) 42.858%, rgba(156, 227, 229, 0.53) 57.144%,rgba(123, 220, 235, 0.53) 57.144%, rgba(123, 220, 235, 0.53) 71.42999999999999%,rgba(90, 214, 242, 0.53) 71.43%, rgba(90, 214, 242, 0.53) 85.71600000000001%,rgba(57, 207, 248, 0.53) 85.716%, rgba(57, 207, 248, 0.53) 100.002%),linear-gradient(135deg, rgb(246, 99, 200) 0%, rgb(246, 99, 200) 12.5%,rgb(223, 98, 196) 12.5%, rgb(223, 98, 196) 25%,rgb(199, 97, 192) 25%, rgb(199, 97, 192) 37.5%,rgb(176, 96, 188) 37.5%, rgb(176, 96, 188) 50%,rgb(152, 95, 184) 50%, rgb(152, 95, 184) 62.5%,rgb(129, 94, 180) 62.5%, rgb(129, 94, 180) 75%,rgb(105, 93, 176) 75%, rgb(105, 93, 176) 87.5%,rgb(82, 92, 172) 87.5%, rgb(82, 92, 172) 100%);
  padding: 20px;
    margin-top: 20px;
}

nav ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav ul li a {
    color: white;
    text-decoration:solid;
}
    </style>
</head>
<body>
<header>
    <h1>DASHBOARD</h1>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <!-- <li><a href="home.php">About</a></li> -->
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
</header>
    <div class="container" id="signup" style="display:none;">
      <h1 class="form-title">Register</h1>
      <form method="post" action="register.php">
        <div class="input-group">
           <i class="fas fa-user"></i>
           <input type="text" name="fName" id="fName" placeholder="First Name" required>
           <label for="fname">First Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="lName" id="lName" placeholder="Last Name" required>
            <label for="lName">Last Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <label for="email">Email</label>
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <label for="password">Password</label>
        </div>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="useroradmin" name="useroradmin" id="useroradmin" placeholder="useroradmin" required>
            <label for="useroradmin">User/Admin</label>
        </div>
       <input type="submit" class="btn" value="Sign Up" name="signUp">
      </form>
      <!-- <p class="or">
        ----------or--------
      </p>
      <div class="icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-facebook"></i>
      </div> -->
      <div class="links">
        <p>Already Have Account ?</p>
        <button id="signInButton">Sign In</button>
      </div>
    </div>

    <div class="container" id="signIn">
        <h1 class="form-title">Sign In</h1>
        <form method="post" action="register.php">
          <div class="input-group">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" id="email" placeholder="Email" required>
              <label for="email">Email</label>
          </div>
          <div class="input-group">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" id="password" placeholder="Password" required>
              <label for="password">Password</label>
          </div>
          <!-- <p class="recover">
            <a href="#">Recover Password</a>
          </p> -->
         <input type="submit" class="btn" value="Sign In" name="signIn">
        </form>
        <!-- <p class="or">
          ----------or--------
        </p>
        <div class="icons">
          <i class="fab fa-google"></i>
          <i class="fab fa-facebook"></i>
        </div> -->
        <div class="links">
          <p>Don't have account yet?</p>
          <button id="signUpButton">Sign Up</button>
        </div>

      </div>
      <script src="script.js"></script>
</body>
</html>
