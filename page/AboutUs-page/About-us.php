<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>



    <!-- bootstarp start -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- bootstrap end -->

    <link rel="stylesheet" href="style.css">

    <!-- online fonts start -->
    <link href="https://db.onlinewebfonts.com/c/1f182a2cd2b60d5a6ac9667a629fbaae?family=PF+Din+Stencil+W01+Bold" rel="stylesheet">
    <!-- online fonts end -->

    <!-- Goolge fonts start -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Riot&display=swap" rel="stylesheet">
    <!-- Goolge fonts end -->

    <!-- AOS  start-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- AOS  end-->



</head>

<body>

    <div class="home">

        <!-- Navbar start -->
        <?php
        include '../../components/navbar/navbar.php';
        ?>
        <!-- Navbar end -->

        <!-- moving images start -->





        <!-- moving images end -->

        <!-- About-us-page-start -->
        <div class="about-us container">

            <div class="gallary-info">
                <div class="gallary-tittle">
                    <div class="">Hardy Ati</div>
                </div>
                <p data-aos="fade-up" data-aos-duration="2000">
                Hardy, located in the Ampara District of Sri Lanka, is renowned for its educational institution, the Hardy Advanced Technological Institute. Named after Prof. Hardy, a visionary British engineer, the institute is a key center for technical and vocational education in the region, offering a range of courses in engineering, technology, and business. Nestled in the picturesque eastern part of the island, Hardy is surrounded by lush greenery and agricultural landscapes, reflecting the district's agrarian roots. The area is also notable for its cultural diversity, with a harmonious blend of Sinhalese, Tamil, and Muslim communities, contributing to a rich tapestry of traditions and local customs. This educational hub not only plays a pivotal role in the local economy but also in fostering social cohesion and regional development through its contributions to education and skill development.

                </p>
            </div>

            

        </div>
        <!-- About-us-page-end -->




    </div>

    <!-- AOS script start -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- AOS script end-->

</body>

</html>