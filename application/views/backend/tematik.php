<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from previews.customer.envatousercontent.com/files/265378886/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Aug 2020 01:45:51 GMT -->
<head>
    <meta charset="UTF-8">  
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Al-Qur'an Tematik Almazaya Islamic School</title>

    <title>WowBook, a flipbook jQuery plugin Preview - CodeCanyon</title>
    <script>
        // Break out iframe on iOS cause safari expand iframe to fit the content, thus making
        // the lightbox bigger than the browser window.
        // We need to check for MSStream because Microsoft injected the word iPhone in IE11's userAgent therefore we need to exclude it.
        var iOS = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
        if (iOS && top.location!= self.location) {
            top.location = self.location.href;
        }
    </script>


    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?php base_url()?>assets/tematik/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php base_url()?>assets/tematik/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php base_url()?>assets/tematik/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?php base_url()?>assets/tematik/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?php base_url()?>assets/tematik/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="<?php base_url()?>assets/tematik/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?php base_url()?>assets/tematik/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?php base_url()?>assets/tematik/css/style.css" type="text/css">

<!-- sudah -->
    <!-- Plugin CSS -->
    <link rel="stylesheet" href="<?php base_url()?>assets/tematik/css/animate.min.css" type="text/css">
    <link rel="stylesheet" href="<?php base_url()?>assets/tematik/css/creative.css" type="text/css">
<!-- habis sudah -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>    

    <!-- Header Section Begin -->
    <header class="header" style="min-height: 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="header__cart">
                        <ul>
                            <li><img src="<?php base_url()?>assets/tematik/img/logo1.png" alt="" style="height: 50px;"></li>
                            <li><h4>Al-Qur'an Tematik Almazaya Islamic School</h4></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero" style="padding: 0 0 50px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                        <div class="hero__search__form" style="width:100%">
                            <form action="<?php echo site_url('welcome/search_result') ?>" method="POST"  role="form">
                                <input id="search" name="search" type="text" placeholder="Search here...">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">            
            <div class="row">                
                <div class="categories__slider owl-carousel">
                    <?php foreach($file as $row) { ?>
                    <div class="col-lg-3">
                        <a id="book2-trigger<?=$row['id_tematik']?>">
                            <img src="<?=base_url('uploads/tematik/image/'.$row["image"])?>" alt="">
                        </a>                       
    
                    </div>
                    <?php } ?>
                </div>                
            </div>            
        </div>
    </section>

<div style='display: none'><div id='book2'></div></div>
    <!-- Categories Section End -->
    <style>
        .hidden-FIXME{
            display: none;
        }
        #portfolio {
            display: none;
        }
        /*header { display: none; }*/
        #contact { display: none; }
        #about {
            display: none;
        }

        .navbar-header {
            width: 100% !important;
        }
        .navbar-brand {
            padding-right: 0;
            font-size: 14px !important;
        }
        #nav-buy-now {
            color: black;
            float: right;
            font-size: 14px;
            font-weight: 700;
            margin-right: -10px;
        }
        @media (min-width: 768px) {
            #nav-buy-now {
                margin-right: 0px;
            }
        }
        #bs-example-navbar-collapse-1 {
            display: none;
        }

        .wowbook {
            font-family: "Open Sans","Helvetica Neue",Arial,sans-serif;
        }
        .wowbook-page-content {
            padding: 1.5em;
        }
        .wowbook ul {
            padding-left: 1em;
        }
        .book-thumb {
            height: 150px;
            box-shadow: 0 0 3px rgba(0, 0, 0, 0.5)
        }
        
        <?php foreach($file as $row2) { ?>

        #book1-trigger, #book2-trigger<?=$row2['id_tematik']?>, #book3-trigger {
            cursor: pointer;
        }
        #book1-trigger:hover, #book2-trigger<?=$row2['id_tematik']?>:hover, #book3-trigger:hover {
            background: #f8f8f8;
        }

        <?php } ?>

        .wowbook-lightbox > .wowbook-close {
            background: transparent !important;
            border: none !important;
            color: #222 !important;
            font-size: 2.5em;
        }
        .wowbook-lightbox > .wowbook-close:hover {
            background: #444 !important;
            color: white !important;
            border-radius: 3px;
        }


        .lightbox-images1 .wowbook-book-container {
            background: #6d6b92; /* Old browsers */
            background: -moz-radial-gradient(center, ellipse cover, #ffffff 0%, #6d6b92 100%); /* FF3.6-15 */
            background: -webkit-radial-gradient(center, ellipse cover, #ffffff 0%,#6d6b92 100%); /* Chrome10-25,Safari5.1-6 */
            background: radial-gradient(ellipse at center, #ffffff 0%,#6d6b92 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        }
        .lightbox-images1 > .wowbook-close,
        .lightbox-images2 > .wowbook-close {
            color: #ccc !important;
        }
        .lightbox-images2 .wowbook-book-container {
            background: #1E2831; /* Old browsers */
            background: -moz-radial-gradient(center, ellipse cover, #ffffff 0%, #1E2831 100%); /* FF3.6-15 */
            background: -webkit-radial-gradient(center, ellipse cover, #ffffff 0%,#1E2831 100%); /* Chrome10-25,Safari5.1-6 */
            background: radial-gradient(ellipse at center, #ffffff 0%,#1E2831 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        }



        .lightbox-pdf  .wowbook-book-container {
            background: #e5e5e5 url(https://previews.customer.envatousercontent.com/files/265378886/img/bg-lightbox-pdf.png); /* Old browsers */
            background: #e5e5e5 -moz-radial-gradient(center, ellipse cover, #ffffff 20%, #bbbbbb 100%); /* FF3.6-15 */
            background: #e5e5e5 -webkit-radial-gradient(center, ellipse cover, #ffffff 20%,#bbbbbb 100%); /* Chrome10-25,Safari5.1-6 */
            background: #e5e5e5 radial-gradient(ellipse at center, #ffffff 20%,#bbbbbb 100%); /* W3C, IE10+, FF16+, Chrome26+,Opera12+, Safari7+*/
        }


        .lightbox-html  .wowbook-book-container {
            background: url(wood.jpg);
        }
        .lightbox-html .wowbook-toolbar {
            margin-top: 1em; /* FIXME */
            box-sizing: content-box !important;
        }

        .lightbox-html .wowbook-controls {
            border-radius: 6px;
            width: auto;
        }

        .lightbox-html.wowbook-mobile .wowbook-toolbar {
            margin: 0;
        }

        .lightbox-html.wowbook-mobile .wowbook-controls {
            border-radius: 0;
            width: 100%;
        }


/*      .lightbox-html .wowbook-controls {
            border-radius: 6px;
            width: auto;
            background: none;
            color: rgba(60, 20, 20, 0.8);
            text-shadow: 0 1px 0 #fff;
            box-shadow: none;
        }
        .lightbox-html .wowbook-control:hover {
            background: none;
            color: white;
            text-shadow: 0 1px 0 #fff, 0 0px 5px rgba(60, 20, 20, 1);
            text-shadow: 0 1px 0 #fff, 0 0px 3px #fff;
        }
*/
        hr {
            max-width: 450px;
        }
    </style>

    <!-- jQuery -->
    <script src="<?php base_url()?>assets/tematik/js/jquery.js"></script>
    <script>
        imageBook = ["1", "8"][ Math.floor(Math.random()*2)];
        imageBookPath = "./img/magazine_template_0"+imageBook;
        $("#book1-trigger .book-thumb").attr("src", imageBookPath+"/image_000.jpg")
    </script>

    <!-- Bootstrap Core JavaScript -->
    <!-- <script src="<?php base_url()?>assets/js/jquery-3.3.1.min.js"></script> -->
    <script src="<?php base_url()?>assets/js/bootstrap.min2.js"></script>
    <script src="<?php base_url()?>assets/js/jquery.nice-select.min.js"></script>
    <script src="<?php base_url()?>assets/js/jquery-ui.min.js"></script>
    <script src="<?php base_url()?>assets/js/jquery.slicknav.js"></script>
    <script src="<?php base_url()?>assets/js/mixitup.min.js"></script>
    <script src="<?php base_url()?>assets/js/owl.carousel.min.js"></script>
    <script src="<?php base_url()?>assets/js/main.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php base_url()?>assets/js/jquery.easing.min.js"></script>
    <script src="<?php base_url()?>assets/js/jquery.fittext.js"></script>
    <script src="<?php base_url()?>assets/js/wow.min.js"></script>
    <script src="<?php base_url()?>assets/js/creative.js"></script>

    <link rel="stylesheet" href="<?php base_url()?>assets/css/wow_book.css" type="text/css">
    <style>
        .wowbook-right .wowbook-gutter-shadow {
            background-image: url("page_right_background.png");
            background-position: 0 0;
            width: 75px;
        }
        .wowbook-left .wowbook-gutter-shadow {
            background-image: url("page_left_background.png");
            opacity: 0.5;
            width: 60px;
        }
        .wowbook-control-currentPage {
            font-family: "Segoe UI",Helvetica,Arial,sans-serif;
        }
    </style>

    <script src="<?php base_url()?>assets/tematik/js/pdf.combined.min.js"></script>
    <script src="<?php base_url()?>assets/tematik/js/wow_book.min.js"></script>
    <script type="text/javascript">
        <?php foreach($file as $row3) { ?>

        $(function(){

            function fullscreenErrorHandler(){
                if (self!=top) return "The frame is blocking full screen mode. Click on 'remove frame' button above and try to go full screen again."
            }

            // imageBook = ["1", "8"][ Math.floor(Math.random()*2)];
            // imageBookPath = "./img/magazine_template_0"+imageBook+"/";
            // $("#book1-trigger .book-thumb").attr("src", imageBookPath+"image_000.jpg")

            var optionsBook1 = {
                 height   : 1056
                ,width    : 816*2
                // ,maxWidth : 800
                // ,maxHeight : 800
                ,pageCount : 40
                ,images : imageBookPath+"/image_{{xxx}}.jpg"

                ,lightbox : "#book1-trigger"
                ,lightboxClass : "lightbox-images"+( imageBook=="1" ? "1" : "2" )
                ,centeredWhenClosed : true
                ,hardcovers : true
                ,style: "wowbook-cs-white"
                ,toolbar : "lastLeft, left, currentPage, right, lastRight, zoomin, zoomout, slideshow, flipsound, fullscreen, thumbnails"
                ,thumbnailsPosition : 'bottom'
                ,thumbnailScale: 0.12
                ,thumbnailsSprite: imageBookPath+"/thumbnails_sprite_0.12.jpg"
                ,perspective: 4000
                ,responsiveHandleWidth: 50

                ,onFullscreenError: fullscreenErrorHandler
            };

            var optionsBook2 = {
                 height   : 1024
                ,width    : 725*2
                // ,maxWidth : 800
                // ,maxHeight : 400
                ,pageNumbers: false

                ,pdf: "<?=base_url('uploads/tematik/pdf/'.$row3["file_name"])?>"
                ,pdfFind: true
                ,pdfTextSelectable: true

                ,lightbox : "#book2-trigger<?=$row3['id_tematik']?>"
                ,lightboxClass : "lightbox-pdf"
                ,centeredWhenClosed : true
                ,hardcovers : true
                ,curl: false
                ,toolbar: "lastLeft, left, currentPage, right, lastRight, find, toc, zoomin, zoomout, download, flipsound, fullscreen, thumbnails"
                ,thumbnailsPosition : 'bottom'
                ,responsiveHandleWidth : 50
                ,onFullscreenError: fullscreenErrorHandler
            };

            var optionsBook3 = {
                 height   : 600
                ,width    : 880
                ,maxWidth : 880
                // ,maxHeight : 800
                ,lightbox : "#book3-trigger"
                ,lightboxClass : "lightbox-html"
                ,lightboxBackground : "url(wood.jpg)"
                ,centeredWhenClosed : true
                ,hardcovers : true
                ,toolbar : "lastLeft, left, right, lastRight, zoomin, zoomout, slideshow, flipsound, fullscreen, thumbnails"
                ,toolbarPosition: 'top'
                ,thumbnailsPosition : 'bottom'
                ,responsiveHandleWidth : 50

                ,onFullscreenError: fullscreenErrorHandler
            };

            var books = {
                "#book1" : optionsBook1,
                "#book2" : optionsBook2,
                "#book3" : optionsBook3
            };
            $("#book1-trigger, #book2-trigger<?=$row3['id_tematik']?>, #book3-trigger").on("click",function(){
                buildBook( "#"+this.id.replace("-trigger<?=$row3['id_tematik']?>", "") );
            })

            function buildBook( elem ){
                var book=$.wowBook(elem);
                if (!book) {
                    $(elem).wowBook( books[elem] );
                    book=$.wowBook(elem);
                }
                // book.opts.onHideLightbox = function(){
                //     setTimeout( function(){ book.destroy(); }, 1000);
                // }
                book.showLightbox();
            }


        });
        
        <?php } ?>

    </script>
</body>


</html>
