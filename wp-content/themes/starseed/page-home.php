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






<div class="row align-items-center mt-0 mobile-column-reverse">

    <div class="col-lg-12 col-md-12 col-sm-12 col-12 txt-top content-txt  w-bg  pt-4 pb-5">


        <div class="text-center"><img
                src="https://galacticstarseedacademy.com/wp-content/uploads/2023/03/desktop-logo-300x300.png" alt="">
        </div>

        <?php //echo get_field('content_1');?>

        <div class="text-center">


            <h1>正在尋找高階的靈性課程？</h1>
            <div class="content-txt-div mt-4">
                星際綜合能量療法 <br>
                一個絕對不會讓你後悔的靈性課程


            </div>

            <a href="<?php echo get_site_url();?>/key" class="know-more-btn">立即了解更多</a>


        </div>



        <!-- 正在尋找高階的靈性課程？
星際綜合能量療法
一個絕對不會讓你後悔的靈性課程
立即了解更多 -->


    </div>
</div>

<div class="row pt-5 pb-5 g-bg">

    <div class="container text-center">
        <h1>成為會員</h1>

        <div class="content-txt-div mt-4">
            用最低成本，學習最高階的靈性技術



        </div>
        <a href="<?php echo get_site_url();?>/key" class="know-more-btn">立即了解更多</a>


    </div>



</div>

<div class="container mt-5 mb-5 position-relative">




    <div class="row align-items-center mobile-column-reverse">


        <div class="middle-container mx-auto">fdfsfs</div>

        <!-- <div class="col-lg-8 col-md-12 col-sm-12 col-12  text-end content-txt">

          
            <a href="<?php echo get_site_url();?>/about-us" class="know-more-btn">了解更多</a>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 col-12 ">
            <img class="w-100 bosco-foto"
                src="https://galacticstarseedacademy.com/wp-content/uploads/2023/09/Propic.png" alt="">

        </div> -->

    </div>


</div>


<div class="bottom-container-wrapper">
    <div class="container">

        <div class="row align-items-center position-relative h-100">


            <div class="col-lg-6 col-md-12 col-sm-12 col-12  position-relative key-bg">

                <div class="content-txt me-5 px-2">
                    <?php echo get_field('content_4');?>

                    <!-- <h1>揚升之鑰</h1>
                    <div>
                        揚升之鑰是一個讓希望進一步開發靈性潛能的人長期學習和在靈性上成長的平台。在這個平台上，你將會吸收到大量在書局和網上無法找到的資訊，以及連結來自星際和宇宙間的高頻能量，讓來自宇宙本源的能量填滿你生命的每一個部分。
                    </div> -->
                    <a href="<?php echo get_site_url();?>/key" class="know-more-btn">了解更多</a>

                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 position-relative bud-bg ">


                <div class="content-txt me-5 px-2">
                    <!-- <h1>多次元靈魂療癒</h1>
                    <div>
                        多次元靈魂療癒是一種釋放生理、情緒、心智和靈性上的能量堵塞的療癒過程。在這個療癒過程中，Bosco會進入非物質維度找出你希望處理的事項的成因。
                    </div> -->
                    <?php echo get_field('content_5');?>


                    <a href="<?php echo get_site_url()?>/product/多次元靈魂療癒/" class="know-more-btn">了解更多</a>


                </div>


            </div>


        </div>
    </div>
</div>


<?php


get_footer();