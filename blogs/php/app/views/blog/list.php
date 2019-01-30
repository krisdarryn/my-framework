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

            <div id="alrt-wrp">

            </div>

            <div id="pg-body" class="blog-list-pg-wrap">

                <div class="container">

                    <div class="row">

                        <div class="col-12 col-md-3 order-md-last">

                            <div id="blog-article-wrap">
                            
                                <div class="blog-article-header">
                                    <h3 class="blog-article-header-title">Articles</h3>
                                </div>            
                                
                                <div class="blog-article-body">
                                    
                                    <ul class="list-unstyled" id="blog-article-list">
                                        
                                        <li class="blog-article-item">
                                            <a href="blog/list?article=interior" class="btn btn-link" title="Nature">Nature</a>
                                        </li>
                                        <li class="blog-article-item">
                                            <a href="blog/list?article=interior" class="btn btn-link" title="Nature">Nature</a>
                                        </li>
                                        <li class="blog-article-item">
                                            <a href="blog/list?article=interior" class="btn btn-link" title="Nature">Nature</a>
                                        </li>
                                        <li class="blog-article-item">
                                            <a href="blog/list?article=interior" class="btn btn-link" title="Nature">Nature</a>
                                        </li>
                                        <li class="blog-article-item">
                                            <a href="blog/list?article=interior" class="btn btn-link" title="Nature">Nature</a>
                                        </li>
                                        <li class="blog-article-item">
                                            <a href="blog/list?article=interior" class="btn btn-link" title="Nature">Nature</a>
                                        </li>
                                        <li class="blog-article-item">
                                            <a href="blog/list?article=interior" class="btn btn-link" title="Nature">Nature</a>
                                        </li>
                                        <li class="blog-article-item">
                                            <a href="blog/list?article=interior" class="btn btn-link" title="Nature">Nature</a>
                                        </li>

                                    </ul>


                                </div>

                            </div>

                        </div>

                        <div class="col-12 col-md-9 order-md-first">
                        
                            <div id="blog-list-wrap">

                                <div id="blog-list-header">
                                    <h1 class="blog-list-header-title">My Blogs</h1>
                                </div>            
                                
                                <div id="blog-list-body">
                                    
                                    <div id="blog-list">
                                        
                                        <div class="blog-item odd">

                                            <div class="row">
                                                
                                                <div class="col-12 col-md-8">
                                                    <div class="blog-item-cover-img" style="background-image:url('https://upload.wikimedia.org/wikipedia/commons/3/36/Hopetoun_falls.jpg')"></div>
                                                </div>
                                                
                                                <div class="col-12 col-md-4 align-self-center">

                                                    <div class="blog-item-desc-wrap">
                                                        
                                                        <p class="blog-item-date">Posted 22 May 2018</p>

                                                        <h3 class="blog-item-title">What is Lorem Ipsum?</h3>

                                                        <p class="blog-item-desc">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur sed nibh vel placerat. Nulla egestas velit quis tempor tempus. Aenean ut pretium mauris, sed imperdiet tellus.
                                                        </p>

                                                    </div>

                                                    <div class="blog-item-option">
                                                        <a href="/blog/item/1" title="Read more">Read more</a>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="blog-item even">

                                            <div class="row">
                                                
                                                <div class="col-12 col-md-8 order-md-last">
                                                    <div class="blog-item-cover-img" style="background-image:url('https://upload.wikimedia.org/wikipedia/commons/3/36/Hopetoun_falls.jpg')"></div>
                                                </div>
                                                
                                                <div class="col-12 col-md-4 align-self-center order-md-first">

                                                    <div class="blog-item-desc-wrap">
                                                        
                                                        <p class="blog-item-date">Posted 22 May 2018</p>

                                                        <h3 class="blog-item-title">What is Lorem Ipsum?</h3>

                                                        <p class="blog-item-desc">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur sed nibh vel placerat. Nulla egestas velit quis tempor tempus. Aenean ut pretium mauris, sed imperdiet tellus.
                                                        </p>


                                                    </div>

                                                    <div class="blog-item-option">
                                                        <a href="/blog/item/1" title="Read more">Read more</a>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

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