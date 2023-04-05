<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>responsive personal portfolio website design tutorail</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- header section starts  -->

    <header>

        <div class="user">
            <img src="photo.png" alt="">
            <h3 class="name">Pooja yadav</h3>
            <p class="post">student btech (cse)</p>
        </div>

        <nav class="navbar">
            <ul>
                <li><a href="#home">home</a></li>
                <li><a href="#about">about</a></li>
                <li><a href="#education">education</a></li>
                <li><a href="#portfolio">projects</a></li>
                <li><a href="#contact">contact</a></li>
            </ul>
        </nav>

    </header>

    <!-- header section ends -->

    <div id="menu" class="fas fa-bars"></div>

    <!-- home section starts  -->

    <section class="home" id="home" style=" background:#8E99C1;">

        <h3>HI THERE !</h3>
        <h1>I'M <span>pooja yadav</span></h1>
        <p>I am computer science engineering undergraduate from goel institute of technology and management. i am a
            fictitious character who think before creating any products which help me to explore more and also reduce my
            time.
        </p>
        <a href="#about"><button class="btn">about me <i class="fas fa-user"></i></button></a>

    </section>

    <!-- home section ends -->

    <!-- about section starts  -->

    <section class="about" id="about" style=" background:#8E99C1;">


        <h1 class="heading"> <span>about</span> me </h1>
        <div class="home-about">
            <div class="image">
                <img src="port.png" alt="" style="width:60%; height:70%;">
            </div>

            <div class="content">
                <h3>who am i?</h3>
                <p>
                    hello,</br> 
                    my name is pooja yadav. </br>i live in lucknow. currently i am computer engineering undergraduate from goel institute of technology and management.
                    i completed my diploma from government polytechnic lucknow in information technology. also i completed my intermediate and high school form C. D. public
                    inter college.</br>i have also done training on full stack developement from prutor IITK </br>i am innovational person who have skills and imagination to create new things.
               </p>

            </div>
        </div>

        <div class="row">

            <div class="info">
                <h3> <span> name : </span> pooja yadav</h3>
                <h3> <span> age : </span> 23</h3>
                <h3> <span> qualification : </span> btech </h3>
                <h3> <span> post : </span> fresher </h3>
                <h3> <span> language : </span> hindi, english </h3>
                <a href="Pooja_Yadav_resume.pdf"><button class="btn"> download Resume <i class="fas fa-download"></i> </button></a>
            </div>

            <div class="counter">

                <div class="box">
                    <span>fresher</span>
                    <h3>years of experience</h3>
                </div>

                <div class="box">
                    <span>5</span>
                    <h3>porject completed</h3>
                </div>

                <div class="box">
                    <span>diploma holder</span>
                    <h3>information technology</h3>
                </div>

                <div class="box">
                    <span>trainee</span>
                    <h3>full-stack development (IITK @prutor)</h3>
                </div>

            </div>

        </div>

    </section>

    <!-- about section ends -->

    <!-- education section starts  -->

    <section class="education" id="education" style=" background:#8E99C1;">

        <h1 class="heading"> my <span>education</span> </h1>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>2020-2023</span>
                <h3>bacholar of technology (cse)</h3>
                <p>goel institute of technology and management</br>
                    8.05 SGPA</p>
            </div>

            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>2017-2020</span>
                <h3>diploma (information technology)</h3>
                <p>government polytechnic lucknow</br>
                    77.5%</p>
            </div>

            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>2015-2017</span>
                <h3>intermediate (PCM)</h3>
                <p>C. D. public inter college</br>
                    83.1%</p>
            </div>

            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>2013-2015</span>
                <h3>high school (science)</h3>
                <p>C. D. public inter college</br>
                    87.8%</p>
            </div>

            <!-- <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2020</span>
        <h3>front end development</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quos alias praesentium. Id autem provident laborum quae, distinctio eaque temporibus!</p>
    </div>

    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2021</span>
        <h3>front end development</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quos alias praesentium. Id autem provident laborum quae, distinctio eaque temporibus!</p>
    </div>-->

        </div>

    </section>

    <!-- education section ends -->

    <!-- portfolio section starts  -->

    <section class="portfolio" id="portfolio" style=" background:#8E99C1;">

        <h1 class="heading"> my <span>projects</span> </h1>

        <div class="box-container">

            <div class="box">
               <a href="https://github.com/10Poojayaadav/quiz_website.git"> <img src="quiz.jpg" alt=""></a>
            </div>

            <div class="box">
            <a href="https://github.com/10Poojayaadav/digital_clock_python.git"><img src="watch.jpg" alt=""></a>
            </div>

            <div class="box">
            <a href="https://github.com/10Poojayaadav/full-stack_website.git"> <img src="Travel.jpeg" alt=""></a>
            </div>

            <div class="box">
            <a href="https://github.com/10Poojayaadav/digital_clock_python.git"> <img src="portfolio.png" alt=""></a>
            </div>

            <div class="box">
                <img src="imgine4.jpeg" alt="">
            </div>

            <div class="box">
                <img src="imgine4.jpeg" alt="">
            </div>

        </div>

    </section>

    <!-- portfolio section ends -->

    <!-- contact section starts  -->

    <section class="contact" id="contact" style=" background:#8E99C1;">

        <h1 class="heading"> <span>contact</span> me </h1>

        <div class="row">

            <div class="content">

                <h3 class="title">contact info</h3>

                <div class="info">
                    <h3> <i class="fas fa-envelope"></i> poojadmyadav@gmail.com </h3>
                    <h3> <i class="fas fa-phone"></i> +91-9648242394</h3>

                    <h3> <i class="fas fa-map-marker-alt"></i> lucknow, india - 226028. </h3>
                </div>

            </div>

            <form action="">

                <input type="text" placeholder="name" class="box">
                <input type="email" placeholder="email" class="box">
                <input type="text" placeholder="project" class="box">
                <textarea name="" id="" cols="30" rows="10" class="box message" placeholder="message"></textarea>
                <button type="submit" class="btn"> send <i class="fas fa-paper-plane"></i> </button>

            </form>

        </div>

    </section>

    <!-- contact section ends --> 
    

    <!-- scroll top button  -->

    <a href="#home" class="top">
        <img src="images/scroll-top-img.png" alt="">
    </a>















    <!-- jquery cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>


</body>

</html>