<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="DataTemplate/css/Template.css">
     {{-- <link rel="stylesheet" href="DataTemplate/css/login.css">
     <link rel="stylesheet" href="DataTemplate/css/register.css"> --}}
     	{{-- <link rel="stylesheet" href="assets/demo.css"> --}}
	{{-- <link rel="stylesheet" href="assets/form-login.css"> --}}
    {{-- <link rel="stylesheet" href="assets/demo.css"> --}}
	<link rel="stylesheet" href="assets/form-register.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>ProBetTH</title>
</head>


<style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 50%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>
<body class="center">
<div class="opacity center" style="width: 80%;">
    <div class="header">
        <h1>ProBetTH</h1>
                <button id="myBtn" class="button button4">สมัครสมาชิก</button>
                <form class="form-login" method="post" action="/login">
                     {{ csrf_field() }}
                   
                    <input type="email" name="email">
                     <input type="password" name="password">
                    <button type="submit" >เข้าสู่ระบบ</button>
                  
                    
                </form>  
                
        
    </div>
            <ul>
                    <li><a href="/">หน้าหลัก</a></li>
                    <li><a href="#news">คาสิโน</a></li>
                    <li><a href="#contact">สล็อต</a></li>
                    <li><a href="#contact">เกมส์เทเบิ้ล</a></li>
                    <li><a href="#contact">เกมส์อื่นๆ</a></li>
                    <li><a href="#/promotion">โปรโมชั่น</a></li>
                    <li><a href="/admin/login">Admin</a></li>
                    {{-- <li style="float:right"><button id="myBtn" class="button button4">สมัครสมาชิก</button></li> --}}
                    {{-- <li style="float:right"><a href="/register">สมัครสมาชิก</a></li> --}}
                     @if(auth()->check())
                        <li style="float:right"><a href="/logout" class="button button3">ออกจากระบบ</a> </li>
                        <li style="float:right"><a href="#">{{ auth()->user()->fullname}}</a></li>
                        

                          

                        {{-- <li style="float:right"> <a href="#">{{ auth()->user()->fullname}}</a></li> --}}
                        {{-- @else
                            <li style="float:right"> <a href="/login">เข้าสู่ระบบ</a> </li> --}}

                    {{-- <li style="float:right" class="dropdown">
                            <a href="javascript:void(0)" class="dropbtn">{{ auth()->user()->fullname}}</a>
                                <div class="dropdown-content">
                                    <a href="/proflie">ข้อมูลส่วนตัว</a>
                                    <a href="/logout">ออกจากระบบ</a>
                                </div>
                    </li> --}}
                        @endif
                   
                        
                 
                    
                    {{-- <li style="float:right"><a href="/login">ล็อคอิน</a></li> --}}
                    {{-- <li style="float:right"><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button></li>
                    <li style="float:right"><button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Sign Up</button></li> --}}
                    
                 {{-- <li>{{ auth()->user()->fullname}}</li> --}}
                    
                    
                   
                    
            </ul>


            <div id="myModal" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                    <div class="modal-header">
                    <span class="close">&times;</span>
                    <h2>Modal Header</h2>
                    </div>
                    <div class="modal-body">

                                <div class="main-content">

        <!-- You only need this form and the form-register.css -->

        <form class="form-register" method="post" action="/addregister">

        {{ csrf_field() }}
            <div class="form-register-with-email">

                <div class="form-white-background">

                    <div class="form-title-row">
                        <h1>Create an account</h1>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Name</span>
                            <input type="text" name="fullname">
                            <p style="color:red">{{ $errors->first('fullname') }}</p>
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Email</span>
                            <input type="email" name="email">
                            <p style="color:red">{{ $errors->first('email') }}</p>
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Password</span>
                            <input type="password" name="password">
                            <p style="color:red">{{ $errors->first('password') }}</p>
                        </label>
                    </div>
                     <div class="form-row">
                        <label>
                            <span>RetypePassword</span>
                            <input type="password" name="retypepassword">
                            <p style="color:red">{{ $errors->first('retypepassword') }}</p>
                        </label>
                    </div>

                    <div class="form-row">
                        <label class="form-checkbox">
                            <input type="checkbox" name="checkbox" checked>
                            <span>I agree to the <a href="#">terms and conditions</a></span>
                        </label>
                    </div>

                    <div class="form-row">
                        <button type="submit">Register</button>
                    </div>

                </div>

                <a href="#" class="form-log-in-with-existing">Already have an account? Login here &rarr;</a>

            </div>

            <div class="form-sign-in-with-social">

                <div class="form-row form-title-row">
                    <span class="form-title">Sign in with</span>
                </div>

                <a href="#" class="form-google-button">Google</a>
                <a href="#" class="form-facebook-button">Facebook</a>
                <a href="#" class="form-twitter-button">Twitter</a>

            </div>

        </form>

    </div>


                    </div>
                    <div class="modal-footer">
                    <h3>Modal Footer</h3>
                    </div>
                </div>

            </div>


            
            @yield('content')
            
</div> 

    <div class="footer">
            <h1>FOOTER</h1>
    </div>
</body>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>



</html>