<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>




<!-- <img class="star0 fadein-ele" style=" width: 500px !important;position: absolute;top: 82px;left: -444px;"
    src="<?php echo get_template_directory_uri();?>/assets/images/star0.png" alt="">

<img class="star2 fadein-ele" style="  width: 320px !important;position: absolute;top: -2px;left: 540px;"
    src="<?php echo get_template_directory_uri();?>/assets/images/star2.png" alt="">

<img class="star3 fadein-ele " style=" width: 300px !important;position: absolute;top: 120px;right: -163px;"
    src="<?php echo get_template_directory_uri();?>/assets/images/star3.png" alt="">

<img class="star4 fadein-ele" style="width: 170px !important;position: absolute;bottom: 51px;left: 600px;"
    src="<?php echo get_template_directory_uri();?>/assets/images/star4.png" alt=""> -->



</div>



<div class="row pt-5 pb-5 g-bg">

    <div class="container  position-relative">



        <div class="row align-items-center mobile-column-reverse">




            <div class="">





                <div class="row align-items-center mobile-column-reverse">


                    <div class="col-lg-8 col-md-12 col-sm-12 col-12  text-end content-txt">
                        <h1>關於Xylas</h1>
                        <div class="content-txt-div mt-4">
                            作為一位靈魂療癒師、《5D揚升科學：靈魂揚升的秘密》作者、揚升科學執行師及導師、星界能量導師、星際種子溯源咨詢師；Xylas是星際種子學院的創辦人。

                        </div>


                        <a href="<?php echo get_site_url();?>/about-us" class="know-more-btn">了解更多</a>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 col-12 ">
                        <img class="w-100 bosco-foto"
                            src="https://galacticstarseedacademy.com/wp-content/uploads/2023/09/Propic.png" alt="">

                    </div>

                </div>


            </div>


        </div>

    </div>
</div>




<div class="row pt-5 pb-5 w-bg">

    <div class="container text-center">
        <h1>聽聽別人對Xylas的評價：</h1>

        <div class="mx-auto mt-3">



            <video width="640" height="420" controls>
                <source src="http://64.227.13.14/starseed/wp-content/uploads/2023/10/file_example_MP4_480_1_5MG.mp4"
                    type="video/mp4">
                <!-- <source src="movie.ogg" type="video/ogg"> -->
                <!-- Your browser does not support the video tag. -->
            </video>


        </div>


    </div>



</div>


<!-- 
<div class="bottom-container-wrapper">
    <div class="container">

        <div class="row align-items-center position-relative h-100">


            <div class="col-lg-6 col-md-12 col-sm-12 col-12  position-relative key-bg">

                <div class="content-txt me-5 px-2">
                    <?php echo get_field('content_4');?>

                    <a href="<?php echo get_site_url();?>/key" class="know-more-btn">了解更多</a>

                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 position-relative bud-bg ">


                <div class="content-txt me-5 px-2">

                    <?php echo get_field('content_5');?>


                    <a href="<?php echo get_site_url()?>/product/多次元靈魂療癒/" class="know-more-btn">了解更多</a>


                </div>


            </div>


        </div>
    </div>
</div>
 -->

<?php


get_footer();