<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4766526c83.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="utils.css">
    <link rel="stylesheet" media="screen and (max-width: 1170px)" href="mobile.css">
    <title>bluelearn | Simplifying the World</title>
</head>
<body>
    
    <nav class="navigation">
        <div class="icon">
            <p> <span>blue</span>learn</p>
        </div>
        <div class="menu">
            <ul>
                <li>Home</li>
                <li>Our Clients</li>
                <li>Our Services</li>
                <li> <a href="signuppage.php">Sign Up</a></li>
                <li>Contact</li>
            </ul>
        </div>
    </nav>


    <!-- MAIN BODY STARTS HERE -->

    <section class="mainbody flex">
        <div class="flex content">
            <h2 class="headline">India's most active student community with <span>80,000+</span> members.</h2>
            <p>Learn from experts and network through events, join clubs and learn real life skills, hang out on our discord server to make new friends and have fun!</p>

            <div class="flex buttons">
                <button class="btn">Join Whatsapp <i class="fa-brands fa-whatsapp"></i></button>
                <button class="btn">Join Discord <i class="fa-brands fa-discord"></i></button>
            </div>

        </div>
        <div class="contentimage">
            <img src="content.gif" alt="">
        </div>
    </section>



    <!-- COMMUNITY MEMBERS SECTION STARTS HERE  -->

    <section class="communitymembers flex padding-topbottom">
        <h2 class="textcenter padding-topbottom">Our Community Members</h2>
        <div class="iconpack flex">
            <i class="icons fa-brands fa-microsoft"></i>
            <i class="icons fa-brands fa-amazon"></i>
            <i class="icons appleicon fa-brands fa-apple"></i>
            <i class="icons fa-brands fa-discord"></i>
            <i class="icons fa-brands fa-facebook"></i>
            <i class="icons fa-brands fa-linkedin"></i>
        </div>
    </section>

    <section class="our-services flex  padding-topbottom">
        <div class="service1">
            <img src="Service1.png" alt="">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa expedita nobis blanditiis porro alias sequi explicabo, dolor beatae molestiae voluptas!</p>
        </div>
        <div class="service1 service2">
            <img src="Service5.png" alt="">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa expedita nobis blanditiis porro alias sequi explicabo, dolor beatae molestiae voluptas!</p>
        </div>
        <div class="service1">
            <img src="Service3.png" alt="">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa expedita nobis blanditiis porro alias sequi explicabo, dolor beatae molestiae voluptas!</p>
        </div>
    </section>

    <!-- THUMBNAIL DESIGNS HERE -->

    <section class="thumbnails  padding-topbottom">
    <h2 class="textcenter padding-topbottom">Thumbnail Designs</h2>
        <div class="designs">
            <img src="img/Thumbnail10.png" alt="">
            <img src="img/Thumbnail2.png" alt="">
            <img src="img/Thumbnail3.png" alt="">
            <img src="img/Thumbnail4.png" alt="">
            <img src="img/Thumbnail5.png" alt="">
        </div>
        <div class="designs">
            <img src="img/Thumbnail9.png" alt="">
            <img src="img/Thumbnail1.png" alt="">
            <img src="img/Thumbnail6.png" alt="">
            <img src="img/Thumbnail7.png" alt="">
            <img src="img/Thumbnail8.png" alt="">
        </div>
    </section>

    <!-- MANAGEMENT SECTION STARTS HERE! -->
    
    <section class="our-mgmt flex flex-column padding-topbottom">
        <div>
            <h2 class="textcenter padding-topbottom">Youtube Channel Management</h2>
        </div>
        <div class="channelMgmt">
            <div class="service1">
                <img src="img/ChannelMgmt2.png" alt="">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa expedita nobis blanditiis porro alias sequi explicabo, dolor beatae molestiae voluptas!</p>
            </div>
            <div class="service1 service2">
                <img src="img/ChannelMgmt1.png" alt="">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa expedita nobis blanditiis porro alias sequi explicabo, dolor beatae molestiae voluptas!</p>
            </div>
            <div class="service1 service2">
                <img src="img/ChannelMgmt3.png" alt="">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa expedita nobis blanditiis porro alias sequi explicabo, dolor beatae molestiae voluptas!</p>
            </div>
        </div>
    </section>


    <!-- WORDPRESS MANAGEMENT SECTION STARTS HERE! -->
    
    <section class="our-mgmt wordpressMgmt flex flex-column padding-topbottom">
        <div>
            <h2 class="textcenter padding-topbottom">Wordpress Blog Management</h2>
        </div>
        <div class="channelMgmt">
            <div class="service1">
                <img src="Service5.png" alt="">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa expedita nobis blanditiis porro alias sequi explicabo, dolor beatae molestiae voluptas!</p>
            </div>
        </div>
    </section>


    <footer class="textcenter">
        <p>Made with 🧡 by     <span>PRIYANSHU SHARMA</span></p>
    </footer>

    <!-- PHP CODING STARTS HERE -->

    <?php
        $db_host = "localhost";
        $db_user = "root";
        $db_pwd = "";
        $db_name = "form_db";
        $db_port = 3306;

        $conn = new mysqli($db_host, $db_user, $db_pwd, $db_name, $db_port);

        if(isset($_POST['sb'])){
            $name = $_POST['name'];
            $age = $_POST['age'];
            $query = "INSERT INTO table2(name, age) VALUES ('$name', '$age')";
            $run = mysqli_query($conn, $query);
        }
    ?>

</body>


</html>