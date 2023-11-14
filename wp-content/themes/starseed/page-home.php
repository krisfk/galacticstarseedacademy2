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



<div class="w-bg">
    <div class="container container mt-4  text-center  pt-5 pb-5 ">



        <!-- <div class="text-center"><img
                src="https://galacticstarseedacademy.com/wp-content/uploads/2023/03/desktop-logo-300x300.png" alt="">
        </div> -->


        <div class="text-center">


            <img src="http://64.227.13.14/starseed/wp-content/uploads/2023/11/homepage-Banner-scaled.jpg" alt="">

            <h1 style="font-size: 2rem;">開啟靈性智慧的星際之旅</h1>
            <h1 style="font-size: 2rem;">正在尋找高階的靈性課程？</h1>
            <h1>星際綜合能量療法系列課程</h1>
            <h2>一個好評滿載、與別不同的靈性課程
            </h2>


            <!-- <div class="mx-auto mt-4">



                <video width="640" height="" controls>
                    <source src="http://64.227.13.14/starseed/wp-content/uploads/2023/10/file_example_MP4_480_1_5MG.mp4"
                        type="video/mp4">
                </video>


            </div> -->


            <!-- <div class="content-txt-div mt-4">



            </div> -->

            <a href="<?php echo get_site_url();?>/courses-workshops/" class="know-more-btn">立即了解更多</a>



        </div>

    </div>
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


                        <a href="<?php echo get_site_url();?>/about-us" class="know-more-btn about-xylas">了解更多</a>
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



            <video width="640" height="" controls>
                <source src="http://64.227.13.14/starseed/wp-content/uploads/2023/10/file_example_MP4_480_1_5MG.mp4"
                    type="video/mp4">
            </video>


        </div>


    </div>



</div>





<?php


get_footer();