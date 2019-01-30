<!doctype html>

<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/assets/libraries/styles/bootstrap-4.2.1-dist/css/bootstrap.min.css">

        <link rel="stylesheet" href="/assets/styles/styles.css">

        <title><?php echo $pageTitle; ?></title>
    </head>
    <body>
        
        <div id="pg-wrap">
            
            <?php 
                // Load main nav
                require __DIR__ . '/../common/main-nav.php'; 
            ?>

            <div id="pg-body" class="blog-item-pg-wrap">

                <div class="blog-item-dlt-image-wrp">
                    <div class="blog-item-dlt-image" style="background-image:url('https://upload.wikimedia.org/wikipedia/commons/3/36/Hopetoun_falls.jpg')"></div>
                </div>

                <div class="container">
                    
                    <div class="row">
                        
                        <div class="col">
                            

                            <div class="blog-item-dlt-wrap">

                                <div class="blog-item-dlt-header">
                                    <h1 class="blog-item-dlt-title">A lesson in photography at The Murray Hotel</h1>
                                </div>

                                <div class="blog-item-dlt-body">
                                    
                                    <p class="blog-item-summary">
                                        The Certificate in Interior Design (Commercial) students were very excited to be invited to discover the interior of the newly renovated Murray Building. The purpose of the visit was to learn how to take photos of architectural and interior spaces. 
                                    </p>

                                    <p class="blog-item-date">Posted 22 May 2018</p>

                                    <p class="blog-item-desc">
                                        This historic landmark, originally a government building located in the heart of Hong Kong, was built in 1969 and has been remodelled into a luxury hotel. The original architect of the building, Ron Phillips, recompensed with numerous awards for his energy efficient design, had been invited to participate in the restoration of this hotel by Foster + Partners. 
                                    </p>

                                </div>

                            </div>


                        </div>
                    
                    </div>

                </div>

                <div class="container-fluid">

                    <div class="row">
                    
                        <div class="col-12 blog-item-carousel-wrap">

                            <div id="blog-item-carousel" class="carousel slide blog-item-carousel-item" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="blog-item-dlt-image blog-item-carosel-image" style="background-image:url('https://upload.wikimedia.org/wikipedia/commons/3/36/Hopetoun_falls.jpg')"></div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="blog-item-dlt-image blog-item-carosel-image" style="background-image:url('https://upload.wikimedia.org/wikipedia/commons/3/36/Hopetoun_falls.jpg')"></div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="blog-item-dlt-image blog-item-carosel-image" style="background-image:url('https://upload.wikimedia.org/wikipedia/commons/3/36/Hopetoun_falls.jpg')"></div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#blog-item-carousel" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#blog-item-carousel" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                                </div>

                        </div>

                    </div>
                
                </div>

            </div>

        </div>

        <script src="/assets/libraries/scripts/jquery-3.3.1.slim.min.js"></script>
        <script src="/assets/libraries/styles/bootstrap-4.2.1-dist/js/bootstrap.min.js"></script>

    </body>
</html>