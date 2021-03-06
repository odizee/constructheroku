<?php
$fname="";
$mobile="";
if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $conn=new mysqli("mysql://b651c4aa83ecdb:8cd26457@us-cdbr-east-02.cleardb.com/heroku_a87c9ec0740c51e?reconnect=true","root", "", "register");
    $cmd="INSERT into reg value('$email');";
    if(mysqli_query($conn, $cmd))
    {
        echo "Successful";
    }
    else
    {
    echo "Not Save";    
    }
}
      
    
?>

<!DOCTYPE html>
<html lang="en">
<!-------------------------------------All Head Components Goes Here------------------------------------->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome icons (free version)-->
    <script src="./assets/font awsome/js/all.js"></script>
    <!-- Google fonts -->
    <!-- Bootstrap -->
    <link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Core theme CSS-->
    <link href="css/styles.css" rel="stylesheet" />
    <title> Construction </title>
</head>
<!-------------------------------------END OF Head Components------------------------------------->

<!-------------------------------------All Body Components Goes Here------------------------------------->
<body class="wrapper__page">
    <div class="loader_bg">
    <div class="loader"></div>
        
    </div>

    <div class="container-fluid container">
        
<!-------------------------------------NAVBAR COMPONENTS GOSE HERE------------------------------------->
    <header>
        <nav class="">
            <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-custom navbar-fixed-top">
            
                <a class="navbar-brand" href="#">
                    <span style='color: #000000'>iCON</span>
                    <span class="struct" style='color: #FCC139'>STRUCT</span>
                </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
                    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-lg-auto">
            <li class="nav-item active">
            <a class="nav-link" href="#">HOME</a>
            </li>
            <li class="nav-item active">
            <a class="nav-link" href="#services">SERVICES</a>
            </li>
            <li class="nav-item active">
            <a class="nav-link" href="#blog">BLOG</a>
            </li>
            <li class="nav-item active">
            <a class="nav-link" href="#">CONTACT US</a>
            </li>
                
            </ul>
                <form class="form-inline d-flex justify-content-center md-form form-sm">
                    <input class="form-control form-control-sm mr-3 w-75 nav-search" type="text" placeholder="Search"
                           aria-label="Search"> <div class="search"><i class="fas fa-search" aria-hidden="true"></i></div>
                </form>
            </div>
            </nav>
        </nav>
    </header>
    </div>
<!-------------------------------------END OF NAVBAR COMPONENTS------------------------------------->

    
    
<!-------------------------------------BANNER COMPONENTS GOSE HERE------------------------------------->

    <div class="banner">
        <div class="message container-fluid container">
            <h1 class="msg-h1">WE ARE iCONSTRUCT</h1>
            
            <hr class="hr-top" />
            
            <p class="msg-p">We set the pace for others to follow in the construction business, if we can think it, we can make it!</p>
            <button type="button" class="btn btn-outline-secondary head-btn">LEARN MORE</button>
            
        </div>
    </div>
    
<!-------------------------------------END OF BANNER COMPONENTS------------------------------------->
    
<!-------------------------------------JUMBOTRON COMPONENTS GOSE HERE------------------------------------->

    <div class="container-fluid">
    <div class="row jumbotron expert">
        <div class="container jumbo-txt">
            <p>WE ARE EXPERTS, WE ARE AWESOME, WE ARE GOOD AT WHAT WE DO</p>
        </div>
    </div>
    </div>
<!-------------------------------------END OF JUMBOTRON COMPONENTS------------------------------------->


<!-------------------------------------CARD SECTION------------------------------------->

        <div class="container-fluid container padding"> 
        <div class="row padding">
            <div class="col-sm-12 col-md-4 card-1">
                <div class="card border-0">
                    <img class="card-img-top img-card" src="assets/Images/Rectangle%209.png">
                    <div class="card-body-1">
                        <h5 class="card-title">BEST HOUSE</h5>
                        <p class="card-text">Our job is not just to make what you have in mind become a reality but also to help you achieve the dream...</p>
                        <a class="nav-link-card" href="#">READ MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 card-1">
                <div class="card border-0">
                    <img class="card-img-top img-card" src="assets/Images/Rectangle%2010.png">
                    <div class="card-body-1">
                        <h5 class="card-title">MODERN DESIGN</h5>
                        <p class="card-text">Our job is not just to make what you have in mind become a reality but also to help you achieve the dream...</p>
                        <a class="nav-link-card" href="#">READ MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 card-1">
                <div class="card border-0">
                    <img class="card-img-top img-card" src="assets/Images/Rectangle%2011.png">
                    <div class="card-body-1">
                        <h5 class="card-title">TEAM WORK</h5>
                        <p class="card-text">Our job is not just to make what you have in mind become a reality but also to help you achieve the dream...</p>
                        <a class="nav-link-card" href="#">READ MORE</a>
                    </div>
                </div>
            </div>    
        </div>
        </div>
    
<!-------------------------------------END CARD SECTION------------------------------------->

    
<!-------------------------------------RECENT PROJECTS------------------------------------->
    
        <div class="banner1">
            <div class="container bn1">
                <div class="h3-rp">
                    <h3 class="h3-rp">RECENT PROJECTS</h3>

                    <hr class="hr-top hr-rp"/>
                </div>  
                <!-- ICON -->
                <div class="caret">
                <div class="car-div-1"> 
                <img src="assets/Images/Vector.svg" class="car-left">
                </div>
                <div class="car-div-2">
                <img src="assets/Images/Vector-right.svg" class="car-right">
                </div>
                </div>
                <div >
                <div class="container-fluid container padding container-fluid col-12 d-flex flex-row con-rp">
                    <div class="col-4">
                        <img src="assets/Images/Rectangle%2013.png" class="img-fluid img-rp" alt="Responsive image">
                    </div>
                    <div class="col-4">
                        <img src="assets/Images/Rectangle%2014.png" class="img-fluid img-rp" alt="Responsive image">
                    </div>
                    <div class="col-4">
                        <img src="assets/Images/Rectangle%2015.png" class="img-fluid img-rp" alt="Responsive image">
                    </div>
                </div>
                </div>
            </div>
        </div>    
    
<!-------------------------------------END RECENT PROJECTS------------------------------------->

    
<!-------------------------------------BLOG POST------------------------------------->

    <div class="container-fluid container-blog" id="blog">
    <div class="row jumbotron">
        <div class="container">
        <div>
            <h3 class="h3-bl">BLOG POST</h3>

            <hr class="hr-top"/>
        </div>
        <div class="caret caret-blog">
                <div class="car-div-1"> 
                <img src="assets/Images/Vector.svg" class="car-left">
                </div>
                <div class="car-div-2">
                <img src="assets/Images/Vector-right.svg" class="car-right">
                </div>
        </div>
        <div class="container-fluid col-12  d-flex flex-row blog-con">
            <div class="col-md-4 blog-split">
                <img src="assets/Images/Rectangle%2019.png" class="img-fluid blog-img-1" alt="Responsive image">
                <img src="assets/Images/Rectangle%2021.png" class="img-fluid blog-img-2" alt="Responsive image">
            </div>
            <div class="col-4 img2">
                <img src="assets/Images/Rectangle%2020.png" class="img-fluid" alt="Responsive image">
            </div>
            <div class="container-fluid col-4  p-con">
                <div class="container-fluid b-txt">
                <h3 class="">CONSTRUCTION</h3>
                <P>We have a lot to say but we believe that actions speak a lot better than words. Our customers....</P>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
<!-------------------------------------BLOG POST------------------------------------->

    
    
<!-------------------------------------OUR SERVICES------------------------------------->

    <div class="container-fluid container ser-con padding" id="services">
        <div class="ser-cont">
        <div>
            <h3 class="h3-bl">OUR SERVICES</h3>

            <hr class="hr-top" />
        </div>
        <div class="row padding">
            <div class="col-md-4">
                <div class="card card-ser">
                    <div class="card-body card-b">
                        <img class="card-img-top ser-img" src="assets/Images/Vector1.svg">
                        <hr class="hr-ser">
                        <h5 class="card-title car-t">DELIVERY TRUCK</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-ser">
                    <div class="card-body card-b">
                        <img class="card-img-top ser-img" src="assets/Images/Vector2.svg">
                        <hr class="hr-ser">
                        <h5 class="card-title car-t">BULLDOZER</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-ser">
                    <div class="card-body card-b">
                        <img class="card-img-top ser-img" src="assets/Images/Group.svg">
                        <hr class="hr-ser">
                        <h5 class="card-title car-t">EXCAVATOR</h5>
                    </div>
                </div>
            </div>    
        </div>
        </div>
        </div>
<!-------------------------------------OUR SERVICES------------------------------------->

    
<!-------------------------------------TESTIMONIALS------------------------------------->

        
        
        <div id="slides" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#slides" data-slide-to="0" class="active"></li>
                <li data-target="#slides" data-slide-to="1"></li>
                <li data-target="#slides" data-slide-to="2"></li>

            </ul> 
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/Images/Rectangle%2057.png">
            <div class="black-overlay"></div>
            <div class="carousel-caption">
                    <h2 class="display-2">TESTIMONIALS</h2>
                    <p class="p-p">iConstruct have been leading the construction industry for quiet sometime now and when they handled my new scrscraper, the job was nothing short of amazing.</p>
                    <img class="card-img-top" src="assets/Images/Ellipse%201.png" style="height: 10%; width: 10%;">
                    <p class="p-j">Janet Jackson</p>
                    <p class="p-c">CEO Empire Studios</p>
                    
            </div>
        </div>
            <div class="carousel-item">
            <img src="assets/Images/Rectangle%2057.png">
            <div class="carousel-caption">
                    <h2 class="display-2">TESTIMONIALS</h2>
                    <p class="p-p">iConstruct have been leading the construction industry for quiet sometime now and when they handled my new scrscraper, the job was nothing short of amazing.</p>
                    <img class="card-img-top" src="assets/Images/Ellipse%201.png" style="height: 10%; width: 10%;">
                    <p class="p-j">Janet Jackson</p>
                    <p class="p-c">CEO Empire Studios</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="assets/Images/Rectangle%2057.png">
            <div class="carousel-caption">
                    <h2 class="display-2">TESTIMONIALS</h2>
                    <p class="p-p">iConstruct have been leading the construction industry for quiet sometime now and when they handled my new scrscraper, the job was nothing short of amazing.</p>
                    <img class="card-img-top" src="assets/Images/Ellipse%201.png" style="height: 10%; width: 10%;">
                    <p class="p-j">Janet Jackson</p>
                    <p class="p-c">CEO Empire Studios</p>
            </div>
            </div>
            </div>
            </div>
        
<!-------------------------------------TESTIMONIALS------------------------------------->

            
<!-------------------------------------RECENT NEWS------------------------------------->

        <div class="container-fluid container-blog">
        <div class="row jumbotron jumbo-news">
        
        <div class="container news-head">
            <h3 class="h3-bl">RECENT NEWS</h3>

            <hr class="hr-top" />
        </div>
            <div class="caret caret-ser">
                <div class="car-div-1"> 
                <img src="assets/Images/Vector.svg" class="car-left">
                </div>
                <div class="car-div-2">
                <img src="assets/Images/Vector-right.svg" class="car-right">
                </div>
            </div>
            <div class="container-fluid container padding"> 
        <div class="row padding">
            <div class="col-md-4 card-1">
                <div class="card card-news border-0">
                    <img class="card-img-top img-card" src="assets/Images/Rectangle%2024.png">
                    <div class="card-body-1 card-col">
                        <h5 class="card-title card-title-news">BEST HOUSE</h5>
                        <p class="card-text">Our job is not just to make what you have in mind become a reality but also to help you achieve the dream...</p>
                        <a class="nav-link-card" href="#">READ MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 card-1">
                <div class="card card-news border-0">
                    <img class="card-img-top img-card" src="assets/Images/Rectangle%2025.png">
                    <div class="card-body-1 card-col">
                        <h5 class="card-title card-title-news ">MODERN DESIGN</h5>
                        <p class="card-text">Our job is not just to make what you have in mind become a reality but also to help you achieve the dream...</p>
                        <a class="nav-link-card" href="#">READ MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 card-1">
                <div class="card card-news border-0">
                    <img class="card-img-top img-card" src="assets/Images/Rectangle%2026.png">
                    <div class="card-body-1 card-col">
                        <h5 class="card-title card-title-news">TEAM WORK</h5>
                        <p class="card-text">Our job is not just to make what you have in mind become a reality but also to help you achieve the dream...</p>
                        <a class="nav-link-card" href="#">READ MORE</a>
                    </div>
                </div>
            </div>    
        </div>
        </div>
        </div>
        </div>
<!-------------------------------------RECENT NEWS------------------------------------->


<!-------------------------------------OUR PARTNERS------------------------------------->

        <div class="container-fluid container padding">
            <div class="container pts">
            <div>
                <h3 class="h3-bl">OUR PARTNERS</h3>

                <hr class="hr-top" />
            </div>
            
            <div class="container-fluid col-12 d-flex flex-row part-hd">
            
                <img src="assets/Images/envato-pty-ltd-vector-logo.png" class="img-fluid prt-img-1" alt="Responsive image">
                <img src="assets/Images/waltdisneylogo.png" class="img-fluid prt-img-2" alt="Responsive image">
                <img src="assets/Images/Coca_Cola%201.png" class="img-fluid prt-img-3" alt="Responsive image">
                <img src="assets/Images/wordpress-logo%201.png" class="img-fluid prt-img-4" alt="Responsive image">
            
            </div>
            </div>
        </div>
<!-------------------------------------OUR PARTNERS------------------------------------->

    
<!-------------------------------------FOOTER------------------------------------->

    <footer>
    <div class="container-fluid padding foot-con">
    <div class="container d-flex flex-row ">
    <div class="row text-center text-xs-center text-sm-left text-md-left">
		<div class="col-md-3 foot-col">
            <h4>iCONSTRUCT</h4>
            <p>We set the pace for others to follow in the construction.</p> 
            <p>Business, if we can think it, we can make it!</p>
        </div>		
        <div class="col-md-3 foot-col">
            <h4>iCONSTRUCT</h4>
            <p>No 111 Federal Housing Estate Victoria Island</p> 
            <p>+2347055566674</p>
            <p>+iconstruct@gmail.com</p>
        </div>
        
        <div class="col-md-3 foot-col foot-img">
            <h4>RECENT PROJECTS</h4>
            <div class="row">
                <div class="col-md-3">
                    <img src="assets/Images/Rectangle%2036.png">  
                </div>
                <div class="col-md-3">
                    <img src="assets/Images/Rectangle%2037.png">        
                </div>
                <div class="col-md-3">
                    <img src="assets/Images/Rectangle%2038.png">        
                </div>
                <div class="col-md-3">
                    <img src="assets/Images/Rectangle%2042.png">        
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <img src="assets/Images/Rectangle%2041.png" class="f-img-5">        
                </div>
                <div class="col-md-3">
                    <img src="assets/Images/Rectangle%2040.png">        
                </div>
                <div class="col-md-3">
                    <img src="assets/Images/Rectangle%2039.png">        
                </div>
                <div class="col-md-3">
                    <img src="assets/Images/Rectangle%2043.png">        
                </div>
            </div>
        </div>
        <div class="col-md-3 foot-col sub">
            <h4>SUBSCRIBE</h4>
<!--
            <form class="form" method="post" action="mysql://b651c4aa83ecdb:8cd26457@us-cdbr-east-02.cleardb.com/heroku_a87c9ec0740c51e?reconnect=true">
			<label for="email" type="email" name="email"></label>
			<input class="form-control" name="email" type="text">
			<input type="submit" value="SUBSCRIBE" class="btn btn-default btn-foot">
            	</form>
-->
            <form class="form" method="post">
			<input class="form-control" placeholder="Email" type="text" name="email">
            <input value="SUBSCRIBE" class="btn btn-default btn-foot" type="submit" name="submit"><br>
        </form>
        </div>		
        <div class="col-12 copy">
            <p>Copyright of iConstruct Nig Ltd</p>
        </div>
    </div>
    </div>
    </div>
    </footer>    
<!-------------------------------------FOOTER------------------------------------->


<!-----------------------------Bootstrap JS Links------------------------------->
    <script src="./assets/jquery//jquery-3.5.1.min.js"></script>
    <script src="./assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="./assets/popper/popper.min.js"></script>
    <!-- Javascript Link -->
    <script src="./js/app-copy.js"></script>
<!-----------------------------Bootstrap JS Links------------------------------->
    
</body>
<!-------------------------------------End of Body Components Goes Here------------------------------------->
</html>
