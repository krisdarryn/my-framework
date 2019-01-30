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
                                    <h1 class="blog-item-dlt-title">What is Lorem Ipsum?</h1>
                                </div>

                                <div class="blog-item-dlt-body">
                                    
                                    <p class="blog-item-summary">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur sed nibh vel placerat. Nulla egestas velit quis tempor tempus. Aenean ut pretium mauris, sed imperdiet tellus. 
                                    </p>

                                    <p class="blog-item-date">Posted 22 May 2018</p>

                                    <div class="blog-item-desc">

                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur sed nibh vel placerat. Nulla egestas velit quis tempor tempus. Aenean ut pretium mauris, sed imperdiet tellus. Sed luctus leo neque, dignissim placerat est pretium eu. Ut ut mauris vel tortor porta viverra nec id purus. Maecenas id ultricies massa. Pellentesque facilisis eros ut odio varius, vitae sodales eros lobortis. </p>

                                        <p>Fusce eget nisi quam. Sed ut molestie ante. Maecenas accumsan orci et odio sodales sodales. Nunc et risus sagittis, finibus lacus eget, tempus magna. Proin leo mauris, elementum eget diam sed, pharetra mattis augue. Quisque volutpat nunc nec odio ultricies suscipit. In iaculis tellus vel libero vulputate consequat. Donec massa ligula, aliquet nec ante ac, pretium ullamcorper dolor. Suspendisse potenti. Vivamus sollicitudin dolor a lacus eleifend pretium. Vestibulum congue commodo venenatis. Morbi vulputate varius nisl, convallis dignissim turpis consequat ac. Quisque interdum hendrerit enim, ut tincidunt dui. Aenean at magna feugiat, tristique metus eu, vehicula sem. Etiam fringilla magna libero, sit amet volutpat elit feugiat et.</p>

                                        <p>Donec sit amet egestas justo. Morbi accumsan vestibulum nisl sit amet finibus. Proin feugiat dapibus lorem, sit amet efficitur lorem fringilla ut. Praesent hendrerit nibh at lectus mollis, at ullamcorper leo porta. Praesent aliquet tincidunt augue, et facilisis dui mattis et. Vivamus in odio aliquam turpis tempus pretium. Nam venenatis est in sollicitudin suscipit. Nullam sit amet lorem eget tortor mattis sagittis. Cras sollicitudin, risus quis pretium sodales, ipsum lorem facilisis lacus, eget sollicitudin risus sapien et quam. Integer condimentum aliquet purus, non congue nisi gravida in. Duis pulvinar semper tincidunt. Suspendisse porttitor commodo blandit. Curabitur cursus, lorem sed tristique semper, tellus arcu vestibulum tellus, ut tincidunt risus nulla ac metus. Proin et fermentum nisi. </p>
                                    </div>

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