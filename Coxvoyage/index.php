<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CoxVoyage</title>
</head>
<body>

    <section class="showcase ">
        <header>
            <h2 class="logo">Cox Voyage</h2>
            <div class="toggle "></div>
        </header>
       <video src="vid-2.mp4" muted loop autoplay></video> 

        <div class="overlay"></div>

        <div class="text">
            
            <h3> EXPERIENCE A NEW COX'S BAZAR WITH US
                
                </h3>
            <p>To Inspire Your Next Adventure. Explore exotic places through our amazing travel deals.
                 <br>
                 <br>


                You set the road, we’ll set your mind at ease</p>
            <a href="signup.php">Explore</a>
        </div>
    </section>

    <div class="menu">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Booking</a></li>
            <li><a href="#">Packages</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Reviews</a></li>
            <li><a href="#">Services</a></li>

        </ul>

    </div>
    <script>
        const menuToggle = document.querySelector('.toggle')
        const showcase   = document.querySelector('.showcase')

        menuToggle.addEventListener('click', () =>{
            menuToggle.classList.toggle('active')
            showcase.classList.toggle('active')
        })
    </script>
</body>
</html>