<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account | AuTech</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>
<body>
       <div class="container">
          <div class="navbar">
              <div class="logo">
                  <a href="index.html"><img src="images/logo.png" width="125px"></a>
              </div>
              <nav>
               <ul id="MenuItems">
                    <li><a href="/">Home</a></li>
                    <li><a href="/products">Products</a></li>
                    <li><a href="/account">Account</a></li>
               </ul>
              </nav>
              <a href="/cart"><img src="images/cart.png" width="30px" height="30px"></a>
              <img src="images/menu.png" onclick="menutoggle()" class="menu-icon">
          </div>
          
          
       </div>
       
<div class="accout-page">
    <div class="container">
  
       <div class="row">
         
          <div class="col-2">
             <img src="images/banner2.jpg" width="100%">
          </div>
           <div class="col-2">
              <div class="form-container">
                 <div class="form-btn">
                     <span>Register</span>
                 </div>
                @if(session()->has('success'))
                    <p>{{session('success')}}</p>
                @endif
               <form id="RegForm" action="/register" method="POST">
                @csrf
                   <input type="text" placeholder="Username" name="name" id="name" class="@error('name') is-invalid @enderror" required value="{{old('name')}}">
                    @error('name')
                        <small class="inval-feed">{{$message}}</small>
                    @enderror
                   <input type="email" placeholder="Email" name="email" id="email" class="@error('email') is-invalid @enderror" required value="{{old('email')}}">
                    @error('email')
                        <small class="inval-feed">{{$message}}</small>
                    @enderror
                   <input type="password" placeholder="Password" name="password" id="password" class="@error('password') is-invalid @enderror" required> 
                    @error('password')
                        <small class="inval-feed">{{$message}}</small>
                    @enderror
                   <button type="submit" class="btn">Register</button>
               </form>
              </div>
           </div>
       </div>
</div>
</div>

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col1">
               <h3>Download Our App!</h3>
                <p>Available on iOS and Android devices</p>
                <div class="app-logo">
                    <img src="images/app-store.png">
                    <img src="images/play-store.png">
                </div>
            </div>
            <div class="footer-col2">
               <img src="images/logo.png">
                <p>Our purpose is to give you the best quality audio products with the best shopping experience</p>
            </div>
            <div class="footer-col3">
               <h3>Useful Links</h3>
                <ul>
                    <li><a href="https://shenzhenaudio.com" target="_blank">Shenzenaudio</a></li>
                    <li><a href="https://hifigo.com" target="_blank">Hifigo</a></li>
                    <li><a href="https://www.whathifi.com" target="_blank">What Hi-Fi?</a></li>
                    <li><a href="https://www.headphones.com" target="_blank">Headphones.com</a></li>
                </ul>
            </div>
            <div class="footer-col4">
               <h3>Follow Us!</h3>
                <ul>
                    <li><a href="https://www.instagram.com" target="_blank">Instagram</a></li>
                    <li><a href="https://twitter.com" target="_blank">Twitter</a></li>
                    <li><a href="https://www.youtube.com" target="_blank">Youtube</a></li>
                    <li><a href="https://www.facebook.com" target="_blank">Facebook</a></li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="copyright"><a href="index.html">Copyright 2022 - AuTech</a></p>
    </div>
</div>
</body>
</html>

