<template>
<div class="ballebaazi_play">
    <div class="container">
        <div class="imageSection">
            <div class="header">
                <div class="head_l"> <img src="https://image.ballebaazi.com/emailer_images/ballebaazi--692.jpg" alt="logo" style="height: 65px;
    width: 65px;"> </div>
                <div class="head_r">
                    <h2> SportsBaazi Fantasy Cricket App </h2>
                    <h3>Best Sports Gaming Experience </h3>
                    <div class="developer">
                        <span class="tag is-rounded">Lowest Commission</span><span class="tag is-rounded">Multiple Fantasy Formats</span><span class="tag is-rounded">Trusted by 1 Crore+ Sports Fans</span>
                    </div>
                    <!--<div class="developer" style="margin-top:5px;"><span class="tag is-rounded">Predictor Polls</span><span class="tag is-rounded"> Predictor Leagues</span></div>-->
                </div>
            </div>
        </div>

        <!-- <PlayHeaderSlider :slides="slides" /> -->
        <div class="play_header">

            <Swiper :slides-per-view="3" :space-between="20" :grab-cursor="true" :loop="true" 
            :autoplay="{
        delay: 3000,
        disableOnInteraction: false,
      }"
            :breakpoints="{
                300: {
                    slidesPerView: 3,
                    spaceBetween: 20
                },
                991: {
                    slidesPerView: 4,
                    spaceBetween: 20
                }
            }"
            >
                <SwiperSlide>
                  
                    <div class="slider_item">
                         <span> 4.3<img src="../../assets/black_star.svg" style="width: 12px;" class="icon-format"></span>
                            <p style="margin-top:-7px;">5k Reviews</p>
                    </div>
                </SwiperSlide>
                <SwiperSlide>
                  
                    <div class="slider_item" > 
                        <span style="background-color: #000; height: 16px;width: 16px;border-radius: 1px;"> <img src="../../assets/download.png" style="width: 14px;"  class="icon-format"></span>
                        <p>35 MB</p>
                    </div>
                </SwiperSlide>
                <SwiperSlide>
                  
                    <div class="slider_item">
                        <span> <img src="../../assets/18plus.png" style="width: 20px;"class="icon-format"></span>
                        <p>Rated for 18+ </p>
                    </div>
                </SwiperSlide>
                <SwiperSlide>
                  
                    <div class="slider_item">
                        <span>
  <strong>10M+</strong></span>
                            <p>Downloads</p>
                    </div>
                </SwiperSlide>
                

               

            </Swiper>
            <!-- <div class="play_active slick-initialized slick-slider">
                <div class="slick-list draggable">
                    <div class="slick-track" style="opacity: 1; width: 1116px; transform: translate3d(0px, 0px, 0px);">
                        <div class="play_step slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="0" style="width: 279px;"> <span> 4.3<img src="../../assets/black_star.svg" width="12" class="icon-format"></span>
                            <p style="margin-top:-7px;">5k Reviews</p>
                        </div>
                        <div class="play_step slick-slide slick-active" data-slick-index="1" aria-hidden="false" tabindex="0" style="width: 279px;"> 
                            <span style="background-color: #000; height: 16px;width: 16px;border-radius: 1px;"> <img src="../../assets/download.png" width="14" class="icon-format"></span>
                            <p>35 MB</p>
                        </div>
                        <div class="play_step slick-slide slick-active" data-slick-index="2" aria-hidden="false" tabindex="0" style="width: 279px;"> 
                            <span> <img src="../../assets/18plus.png" width="20" class="icon-format"></span>
                            <p>Rated for 18+ </p>
                        </div>
                        <div class="play_step slick-slide slick-active" data-slick-index="3" aria-hidden="false" tabindex="0" style="width: 279px;"> <span>
  <strong>10M+</strong></span>
                            <p>Downloads</p>
                        </div>
                    </div>
                </div>

            </div> -->
        </div>
        <div class="footer_button" style="cursor:pointer;" id="gtm_install">INSTALL </div>
    </div>
    <div class="container">
        <div class="slider_area">
            <Swiper :slides-per-view="3" :space-between="30" :grab-cursor="true" :loop="true" 
            :autoplay="{
        delay: 3000,
        disableOnInteraction: false,
      }"
            :pagination="{ clickable: true }"
            :breakpoints="{
                300: {
                    slidesPerView: 1,
                    spaceBetween: 20
                },
                991: {
                    slidesPerView: 3,
                    spaceBetween: 20
                }
            }"
            >
                <SwiperSlide>
                  
                     <img src="https://image.ballebaazi.com/emailer_images/ballebaazi--913.jpg" class="icon-format"> 
                </SwiperSlide>
                <SwiperSlide>
                  
                    <img src="https://image.ballebaazi.com/emailer_images/ballebaazi--914.jpg" class="icon-format"> 
                </SwiperSlide>
                <SwiperSlide>
                  
                    <img src="https://image.ballebaazi.com/emailer_images/ballebaazi--915.jpg" class="icon-format"> 
                </SwiperSlide>

               

            </Swiper>
        </div>
        <div class="about_area">
            <h3>About this App</h3>
            <p>Iss Indian T20 Season, get the maxx value for your skills, only on SportsBaazi.com. </p>

            <hr style="margin:15px 0;">
            <p><strong class="d-flex"><img class="ratingStar-small" src="../../assets/black_star.svg"> Play Multiple Fantasy Formats </strong>
                Why play just Classic Fantasy elsewhere when you can also play Batting, Bowling and Innings Fantasy on SportsBaazi. WIN Max with your Fantasy Cricket skills.
            </p><br>
            <p><strong class="d-flex"><img class="ratingStar-small" src="../../assets/black_star.svg"> Low Buy-ins, Big Winnings</strong>
                Play a wide variety of leagues and get big winnings with small buy-ins, only on SportsBaazi.
            </p><br>
            <p><strong class="d-flex"><img class="ratingStar-small" src="../../assets/black_star.svg"> Usable Bonus </strong>
                Unlike other platforms, our bonus is actually usable. Join a league of your choice with a Flat 50% bonus.
            </p>

            <hr style="margin:15px 0;">

            <h3>What’s New</h3>

            <ul class="btn_bord">
                <li>Join Leagues with Flat 50% Bonus </li>
                <li>Join Mega Leagues at Low Buy-ins</li>
                <li>Personalized Support </li>
            </ul>

        </div>
        <hr>
        <div class="rating_download_box">
            <h3>Ratings</h3>
            <div class="maxw">
                <div class="w30">
                    <p class=" font3">4.5</p>
                    <div class="reviewsCount-flex">
                        <div class="ratings-dynamic">
                            <div class="empty-stars"></div>
                            <div class="full-stars" style="width:94%"></div>
                        </div>
                        <p class="reviews-count"><span>1,054</span></p>
                    </div>
                </div>
                <div class="w70">
                    <div class="flexBar"><span class="is-size-7">5</span> &nbsp;&nbsp;
                        <div class="progress">
                            <div class="progressWidth5 progressWidth"></div>
                        </div>
                    </div>
                    <div class="flexBar"><span class="is-size-7">4</span> &nbsp;&nbsp;
                        <div class="progress">
                            <div class="progressWidth4 progressWidth"></div>
                        </div>
                    </div>
                    <div class="flexBar"><span class="is-size-7">3</span> &nbsp;&nbsp;
                        <div class="progress">
                            <div class="progressWidth3 progressWidth"></div>
                        </div>
                    </div>
                    <div class="flexBar"><span class="is-size-7">2</span> &nbsp;&nbsp;
                        <div class="progress">
                            <div class="progressWidth2 progressWidth"></div>
                        </div>
                    </div>
                    <div class="flexBar"><span class="is-size-7">1</span> &nbsp;&nbsp;
                        <div class="progress">
                            <div class="progressWidth1 progressWidth"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="additional-stats">
                <div class="gameplay">
                    <p class="is-size-7 mar-8">Gameplay
                        <!-- -->
                    </p>
                    <p><span class="has-text-black size-14">4.8</span><span style="margin-left:2px"><img class="ratingStar-small" src="../../assets/black_star.svg"></span></p>
                </div>
                <div class="controls">
                    <p class="is-size-7 mar-8">Controls</p>
                    <p><span class="has-text-black size-14">4.9</span><span style="margin-left:2px"><img class="ratingStar-small" src="../../assets/black_star.svg"></span></p>
                </div>
                <div class="graphics">
                    <p class="is-size-7 mar-8">Graphics</p>
                    <p><span class="has-text-black size-14">4.8</span><span style="margin-left:2px"><img class="ratingStar-small" src="../../assets/black_star.svg"></span></p>
                </div>
            </div>
            <hr>
        </div>
        <div class="review_box">
            <h3>Reviews</h3>
            <ul>
                <ReviewItem v-for="review in reviews" :key="review.id" :review="review" />
            </ul>
            <!-- <ul>
                <li>
                    <div class="user_box">
                        <p class="initials is-size-7 green">S</p>
                        <div class="user_info">
                            <div class="user_name">Suraj Rishi </div>
                            <div class="stars is-size-7 has-text-grey">
                                <div class="ratings-dynamic">
                                    <div class="empty-stars"></div>
                                    <div class="full-stars" style="width: 100%;"></div>
                                </div>
                                1/02/ 2023
                            </div>
                            <div class="user_review has-text-grey">Itne saare fantasy formats kahin aur nahi milti. Leagues bi trah trah ki hai. Sab jit skate hain. </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="user_box">
                        <p class="initials is-size-7 grey">m</p>
                        <div class="user_info">
                            <div class="user_name">Mayank Bhan </div>
                            <div class="stars is-size-7 has-text-grey">
                                <div class="ratings-dynamic">
                                    <div class="empty-stars"></div>
                                    <div class="full-stars" style="width:100%"></div>
                                </div>
                                3/02/ 2023
                            </div>
                            <div class="user_review has-text-grey">Ankit bhaiya hamesha help karte hain. Mere hisab se offers bana dete hain.
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="user_box">
                        <p class="initials is-size-7 grey">g</p>
                        <div class="user_info">
                            <div class="user_name">Gopal Patel </div>
                            <div class="stars is-size-7 has-text-grey">
                                <div class="ratings-dynamic">
                                    <div class="empty-stars"></div>
                                    <div class="full-stars" style="width:80%"></div>
                                </div>
                                17/02/ 2023
                            </div>
                            <div class="user_review has-text-grey">Good ap to win extra. Commission also low.
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="user_box">
                        <p class="initials is-size-7 grey">m</p>
                        <div class="user_info">
                            <div class="user_name">Monu Raja </div>
                            <div class="stars is-size-7 has-text-grey">
                                <div class="ratings-dynamic">
                                    <div class="empty-stars"></div>
                                    <div class="full-stars" style="width:100%"></div>
                                </div>
                                1/02/2023
                            </div>
                            <div class="user_review has-text-grey"> Sabse badhiya app hai SportsBaazi. Har time koi na koi offer chalta rehta hai.
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="user_box">
                        <p class="initials is-size-7 green">p</p>
                        <div class="user_info">
                            <div class="user_name">Pinky Yadav </div>
                            <div class="stars is-size-7 has-text-grey">
                                <div class="ratings-dynamic">
                                    <div class="empty-stars"></div>
                                    <div class="full-stars" style="width:100%"></div>
                                </div>
                                5/02/ 2023
                            </div>
                            <div class="user_review has-text-grey"> SportsBaazi is a game-changer! Low competition and low commission makes it the best.
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="user_box">
                        <p class="initials is-size-7 green">s</p>
                        <div class="user_info">
                            <div class="user_name">Shyamal Singh </div>
                            <div class="stars is-size-7 has-text-grey">
                                <div class="ratings-dynamic">
                                    <div class="empty-stars"></div>
                                    <div class="full-stars" style="width:80%"></div>
                                </div>
                                18/02/ 2023
                            </div>
                            <div class="user_review has-text-grey"> Fantasy bahut apps par kheli lekin iss app se badhiya support kahi nahi mila. Best hai SportsBaazi. </div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="user_box">
                        <p class="initials is-size-7 grey">u</p>
                        <div class="user_info">
                            <div class="user_name">Utsav Khandelwal </div>
                            <div class="stars is-size-7 has-text-grey">
                                <div class="ratings-dynamic">
                                    <div class="empty-stars"></div>
                                    <div class="full-stars" style="width:60%"></div>
                                </div>
                                20/02/ 2023
                            </div>
                            <div class="user_review has-text-grey">Fantasy ke mega leagues meri favourite hai. Aur badi leagues le ke aao. </div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="user_box">
                        <p class="initials is-size-7 pink">a</p>
                        <div class="user_info">
                            <div class="user_name">Ankit Gupta </div>
                            <div class="stars is-size-7 has-text-grey">
                                <div class="ratings-dynamic">
                                    <div class="empty-stars"></div>
                                    <div class="full-stars" style="width:100%"></div>
                                </div>
                                16/02/ 2023
                            </div>
                            <div class="user_review has-text-grey">SportsBaazi par khel ke maine kaafi paise aur rewards jeete hain.
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="user_box">
                        <p class="initials is-size-7 green">v</p>
                        <div class="user_info">
                            <div class="user_name">Vikram Singh </div>
                            <div class="stars is-size-7 has-text-grey">
                                <div class="ratings-dynamic">
                                    <div class="empty-stars"></div>
                                    <div class="full-stars" style="width:80%"></div>
                                </div>
                                18/02/ 2023
                            </div>
                            <div class="user_review has-text-grey">SportsBaazi is a fantastic app for cricket lovers. Fantasy league is just amazing. Love to play here.
                            </div>
                        </div>
                    </div>
                </li>

            </ul> -->
        </div>
    </div>
</div>


<div v-if="isScrolled" class="install-button-bottom sticky-install-button sticky" style="
cursor:pointer;">
<a>
  <button class="weight-500">INSTALL</button>
</a>
</div>
</template>

<style scoped>

.slider_item::after {
    content: "|";
    position: absolute;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
    color: rgba(0, 0, 0, .2);
    font-size: 20px;

}

.slider_item span {
    font-size: .75rem !important;
    font-weight: bold;
    display: flex;
    align-items: center;
}

.slider_item p {
    font-size: .75rem !important;
    line-height: 27px;
    font-weight: 400;
    color: #676e7c;
    margin: 0px;
}


.swiper {
  width: 100%;
  height: 100%;
}

/* .swiper-slide {
  text-align: center;
  font-size: 18px;
  background: #fff;

  display: flex;
  justify-content: center;
  align-items: center;
} */

.swiper-slide img {
  display: block;
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.d-flex {
    display: flex;
}

.ballebaazi_play {
    padding-top: 2rem;
}

.ballebaazi_play .btn_bord span {
    margin-bottom: 15px;
}

ul.btn_bord {
    list-style-type: revert;
    padding-left: 15px;
}

.ballebaazi_play .footer_button {
    text-align: center;
    padding: 5px 10px;
    margin: 15px auto;
    margin-bottom: 0;
    cursor: pointer;
    font-size: .75rem;
    background-color: #39875f;
    border: 1px solid #39875f;
    border-radius: 4px;
    color: #fff;
    width: 100%;
    height: 35px;
    font-weight: 700;
    text-transform: uppercase;
    line-height: 23px;
}

.container {
    width: 100%;
    margin-right: auto;
    margin-left: auto;
}

.ballebaazi_play .header {
    margin-top: 0;
}

.slider_area .slick-list {
    height: auto;
}

ol,
ul {
    font-size: .75rem !important;
    font-weight: 400;
    color: #676e7c;
}

ol {
    list-style-type: decimal;
    padding-left: 15px;
}

@media (min-width: 1200px) {
    .container {
        max-width: 1143px;
    }
}

.ballebaazi_play .review_box ul {

    margin-bottom: 46px !important;
}

* {
    font-family: Gotham Rounded, sans-serif;
}

body {
    color: #4a4a4a;
    font-size: 1em;
    font-weight: 400;
    line-height: 1.5;
}



* {
    margin: 0;
    padding: 0;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    /* font-size: .7rem!important; */
}

img {
    max-width: 100%;
}

a:focus,
input:focus,
textarea:focus,
button:focus {
    text-decoration: none;
    outline: none;
}

a:focus,
a:hover {
    text-decoration: none;
}

i,
span {
    display: inline-block;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    font-weight: 500;
    color: #4a4a4a;
}

h1 {
    font-size: 48px;
}

h2 {
    font-size: 36px;
}

h3 {
    font-size: 18px;
}

h4 {
    font-size: 22px;
}

h5 {
    font-size: 18px;
}

h6 {
    font-size: 16px;
}

ul,
ol {
    margin: 0px;
    padding: 0px;
    list-style-type: none;
}

*:focus {
    outline: none;
}

p {
    font-size: .75rem !important;
    font-weight: 400;
    color: #676e7c;
    margin: 0px;
}

@media (max-width: 768px) {
    .ballebaazi_play {
        padding-inline: 20px;
    }
}

.ballebaazi_play .imageSection {
    display: flex;
    flex-direction: column;
    padding-bottom: 0 !important;
}

.ballebaazi_play .header {
    display: flex;
    margin-bottom: 20px;
}

.ballebaazi_play .header .head_l {
    /* width:65px; */
    margin-right: 35px;
}

.ballebaazi_play .header .head_r .developer {
    margin-bottom: 6px;
    color: #33691e;
    font-size: .815rem !important;
}

.ballebaazi_play .header .head_r h2 {
    font-size: 1.4rem !important;
}

.ballebaazi_play .header .head_r p {
    font-size: 20px;
}

.ballebaazi_play .header .head_r h3 {
    margin-bottom: 6px;
    color: #33691e;
    font-size: .815rem !important;
}

.ballebaazi_play .play_header {
    height: 50px;
    margin-top: 0;
}

.ballebaazi_play .play_step:before {
    content: "|";
    position: absolute;
    left: 88.66%;
    color: rgba(0, 0, 0, .2);
    font-size: 1.2rem;
    top: 50%;
    transform: translateY(-50%);
}

.slider_area {
    margin-top: 18px;
}

.ballebaazi_play .play_step:last-child:before {
    content: "";
}

.ballebaazi_play .footer_button a {
    background: #00875f;
    border-radius: 5px;
    color: #fff;
    display: block;
    text-align: center;
    padding: 5px 10px;
    margin: 15px auto;
}

.ballebaazi_play .footer_button a:hover {
    background: #037453;
}

.ballebaazi_play .footer_button a span {
    padding-right: 10px;
}

.ballebaazi_play .play_step p {
    font-size: .75rem !important;
    margin-top: -5px;
    line-height: 27px;
}

.ballebaazi_play .btn_bord {
    margin-top: 10px;
}

.ballebaazi_play .btn_bord span {
    border: 1px solid rgba(0, 0, 0, .2);
    border-radius: 20px;
    padding: .9rem;
    margin-right: 10px;
    font-size: .8rem;
    height: 2em;
    line-height: 0em;
}

.ballebaazi_play .btn_bord span:last-child {
    margin-right: 0;
}

.ballebaazi_play .slider_area img {
    width: 100%;
}

.ballebaazi_play .slider_area .slide_play {
    text-align: center;
    margin-right: 12px;
}

.play_step {
    text-align: left !important;
} 

.ballebaazi_play .play_step:last-child {
    border-right: none;
}

hr {
    margin: 0px;
    background: #f5f5f5;
    border-top: 2px solid #f5f5f5;
}

.ballebaazi_play .play_step span {
    font-size: .75rem !important;
    font-weight: bold;
}

.ballebaazi_play .about_area h3 {
    margin-bottom: 7px;
    margin-top: 0;
}

.ballebaazi_play .about_area {
    padding-top: 1rem;
    margin-bottom: 1rem;
    position: relative;
}

.ballebaazi_play .about_area:before {
    background: url(../images/arrow_r.png) no-repeat;
    width: 18px;
    height: 24px;
    position: absolute;
    content: '';
    right: 0px;
    background-size: 100%;
    top: 50px;
}

.ballebaazi_play .about_area p {
    text-align: left;
}

.ballebaazi_play .reviews_area .reviews_head {
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    flex-wrap: wrap;
    -webkit-justify-content: space-between;
    justify-content: space-between;
}

.ballebaazi_play .reviews_area .reviews_head .reviews_l {
    width: 60%
}

.ballebaazi_play .reviews_area .reviews_head .reviews_r {
    width: 60%
}

.ballebaazi_play .rating_download_box {

    margin-top: 1rem;
}

.ballebaazi_play .rating_box {
    display: grid;
    grid-template-columns: 1fr 1fr;
}

.ballebaazi_play .rating_title {
    font-size: 30px;
    font-weight: bold;
    font-style: normal;
    font-stretch: normal;
    line-height: normal;
    letter-spacing: normal;
    color: #116cc7;
}

.ballebaazi_play .user_info p {
    margin-bottom: 5px;
}

.ballebaazi_play .rating_number {
    font-size: 3.3rem !important;
    text-align: left;
}

.ballebaazi_play .rating_image {
    width: 88px;
    margin-bottom: 5px;
}

.ballebaazi_play .rating_graph_inner {
    width: 190px;
    margin-top: 55px;
}

.ballebaazi_play .rating_number_box {
    text-align: left;
    font-size: .7rem !important;
}

.ballebaazi_play .rating_number_box h3 {
    text-align: left;
}

.ballebaazi_play .download_box {
    text-align: right;
    padding-top: 30px;
    position: relative;
}

.ballebaazi_play .download_box:before {
    background: url(../images/arrow_r.png) no-repeat;
    width: 18px;
    height: 24px;
    position: absolute;
    content: '';
    right: 0px;
    background-size: 100%;
    top: 8px;
}

.ballebaazi_play .download_count {
    font-size: 48px;
    font-weight: 300;
    font-style: normal;
    font-stretch: normal;
    line-height: normal;
    letter-spacing: normal;
}

.ballebaazi_play .download_box span {
    font-size: 30px;
    font-weight: 300;
    font-style: normal;
    font-stretch: normal;
    line-height: normal;
    letter-spacing: normal;
}

.ballebaazi_play .review_box {
    margin-top: 15px;
    position: relative;
}

.ballebaazi_play .review_box:before {
    background: url(../images/arrow_r.png) no-repeat;
    width: 18px;
    height: 24px;
    position: absolute;
    content: '';
    right: 0px;
    background-size: 100%;
    top: 4px;
}

.ballebaazi_play .review_box h3 {
    font-size: 20px;
    margin-top: 0px;
    margin-bottom: 15px;
}

.ballebaazi_play .review_box ul {
    padding-left: 0px;
    list-style: none;
    margin: 0px;
}

.ballebaazi_play .review_box ul li {
    margin-bottom: 18px;
    border-bottom: 2px solid #f5f5f5;
    padding-bottom: 18px;
}

.ballebaazi_play .review_box ul li .stars {
    padding: 6px 0;
}

.is-size-7 {
    font-size: .75rem !important;
}

.has-text-grey {
    color: #7a7a7a !important;
}

.grey {
    background-color: #78929d;
}

.teal {
    background-color: #0098a7;
}

.blue {
    background-color: #5d6ac0;
}

.green {
    background-color: #1c4d40;
}

.teal {
    background-color: #0098a7;
}

.sticky-install-button {
    position: fixed;
    bottom: 0;
    width: 100%;
    height: 50px;
    background-color: #39875f;
    color: #fff;
    display: none;
    z-index: 1000;
}

.sticky {
    display: block;
}

.sticky-install-button>a {
    display: inline-block;
    width: 100%;
    height: 100%;
    text-align: center;
    display: flex;
    color: #fff !important;
    justify-content: center;
    align-items: center;
}

.sticky-install-button button {
    color: #fff;
    background: transparent;
    border: unset;
    border: none;
}

.weight-500 {
    font-weight: 500;
}

.ballebaazi_play .user_box {
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    flex-wrap: wrap;
    -webkit-justify-content: space-between;
    justify-content: space-between;
}

.ballebaazi_play .user_img {
    width: 4%;
}

.ballebaazi_play .user_info {
    width: 95%;
}

.ballebaazi_play .user_name {
    font-style: normal;
    font-stretch: normal;
    line-height: 1.3;
    letter-spacing: normal;
    margin-bottom: 0;
    font-size: .8em;
    font-weight: 400;
    text-transform: capitalize;
}

.ballebaazi_play .user_review {
    font-weight: 300;
    font-style: normal;
    font-stretch: normal;
    line-height: 20px;
    letter-spacing: normal;
    font-size: .75rem !important;
}

.ballebaazi_play .play_step {
    position: relative;
}

.ballebaazi_play .header .head_r .developer .tag:not(body) {
    align-items: center;
    background-color: #f5f5f5;
    border-radius: 4px;
    color: #4a4a4a;
    display: inline-flex;
    font-size: 12px !important;
    font-size: .75rem;
    height: 2em;
    justify-content: center;
    line-height: 1.5;
    padding-left: .75em;
    padding-right: .75em;
    white-space: nowrap;
    font-weight: 600;
}

.ballebaazi_play .header .head_r .developer .tag:not(body).is-rounded {
    border-radius: 290486px;
}

.ballebaazi_play .header .head_r .developer .tag {
    background-color: #fff !important;
    border: 1px solid #d0d0d0;
    font-size: .7rem !important;
}

.ballebaazi_play .header .head_r .developer .tag:not(:last-child) {
    margin-right: 3px;
}

.maxw {
    max-width: 90%;
    display: flex;
    align-items: flex-start;
    margin: 0 auto 0 1.5rem;
    padding: 1.2rem 0 1.4rem;
}

.w30 {
    display: flex;
    width: 30%;
    margin-right: 1.5rem;
    flex-direction: column;
    margin-top: -4px;
}

.font3 {
    font-size: 3.3rem !important;
    color: #000;
}

.reviewsCount-flex {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    margin-top: -15px;
}

.ratings-dynamic {
    position: relative;
    vertical-align: middle;
    display: inline-block;
    color: #eee;
    overflow: hidden;
}

.empty-stars:before,
.full-stars:before {
    content: "\2605\2605\2605\2605\2605";
    font-size: 11px;
}

.full-stars {
    position: absolute;
    left: 0;
    top: 0;
    white-space: nowrap;
    overflow: hidden;
    color: #39875f;
}

.empty-stars:before {
    -webkit-text-stroke: 0 rgba(0, 0, 0, .2);
}

.reviews-count {
    position: relative;
    font-size: .7rem !important;
    display: flex;
    width: 82px;
    justify-content: flex-start;
}

.w70 {
    display: inline-block;
    width: 70%;
    margin-top: 2%;
}

.flexBar {
    display: flex;
    align-items: center;
    margin-bottom: -6px;
}

.is-size-7 {
    font-size: .75rem !important;
}

.progress {
    -moz-appearance: none;
    appearance: none;
    -webkit-appearance: none;
    border: none;
    border-radius: 290486px;
    display: block;
    height: 1rem;
    overflow: hidden;
    padding: 0;
    width: 100%;
}

.maxw .flexBar .progress {
    height: 9px;
    background-color: hsla(0, 0%, 74.9%, .3);
    width: 80%;
}

.progressWidth {
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px;
}

.progressWidth5 {
    width: 90%;
}

.progressWidth4,
.progressWidth5 {
    height: 9px;
    background-color: #39875f;
}

.progressWidth4 {
    width: 75%;
}

.progressWidth3 {
    width: 10%;
    height: 9px;
    background-color: #39875f;
}

.initials {
    display: flex;
    height: 30px;
    width: 30px;
    color: #fff;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    box-shadow: 0 1px 2px #8d8d8d;
    margin-right: 14px;
    margin-bottom: 0 !important;
    text-transform: capitalize;
}

.pink {
    background-color: #c33f5c;
}

.additional-stats {
    display: flex;
    margin-bottom: 1rem;
    font-size: 1rem !important;
}

.additional-stats>div {
    flex: 1 1;
}

.gameplay {
    margin-right: 10px;
}

.controls,
.gameplay,
.graphics {
    display: flex;
    align-items: center;
}

.is-size-7 {
    font-size: .75rem !important;
}

.mar-8 {
    margin-right: 8px;
}

.ratingStar-small {
    max-width: 10px;
}

.modal-dialog {
    max-width: 320px;
    margin: auto;
}

.modal-backdrop {
    display: none;
}

.modal {
    position: fixed;
    top: 0;
    height: 100%;
    width: 100%;
    background: rgba(0, 0, 0, .6);
    display: flex;
    justify-content: center;
    align-items: center;
    text-transform: uppercase;
    font-weight: bold;
}

#free-gems-popup {
    height: 560px;
    width: 320px;
    background: #012b4b;
    color: #fff;
    font-family: Varela Round, sans-serif;
    display: flex;
    flex-direction: column;
    align-items: center
}

#free-gems-popup .timer {
    font-size: 36px;
    display: flex
}

#free-gems-popup .timer>div {
    display: flex;
    flex-direction: column;
    align-items: center
}

#free-gems-popup .timer .text {
    font-size: 10px;
    margin-top: -4px
}

#free-gems-popup .close {
    display: flex;
    flex-direction: row-reverse;
    padding: 8px 8px 0 0;
    width: 100%;
    color: #fff;
    opacity: inherit;
}

#free-gems-popup .close div {
    border: 0;
    border-radius: 50%;
    color: #525151;
    font-size: 20px;
    font-weight: 400;
    height: 20px;
    outline: none;
    padding-bottom: 3px;
    transition: transform .2s ease-in-out, background-color .2s ease-in-out;
    width: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer
}

@media only screen and (max-width: 767px) {
    .ballebaazi_play .header .head_r h2 {
        font-size: 24px;
        margin-bottom: 5px;
        font-weight: 700;
    }

    .ballebaazi_play .header .head_r h3 {
        font-size: 18px;
    }

    .ballebaazi_play .header .head_r p {
        font-size: 15px;
    }

    .ballebaazi_play .play_step p {
        font-size: 16px;
    }

    .ballebaazi_play .user_img {
        width: 15%;
    }

    .ballebaazi_play .user_info {
        width: 88%;
    }

    .ballebaazi_play .download_count {
        font-size: 20px;
    }

    .ballebaazi_play .download_box span {
        font-size: 20px;
    }

    .ballebaazi_play .rating_graph_inner {
        width: 140px;
        margin-top: 64px;
    }

    .ballebaazi_play .download_box {
        padding-top: 38px;
    }

    .slider_area .slick-list {
        height: auto !important;
    }

    .countdown {
        text-transform: uppercase;
        font-weight: bold;
    }

    .countdown span {
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
        font-size: 3rem;
        margin-left: 0.8rem;
    }

    .countdown span:first-of-type {
        margin-left: 0;
    }

    .countdown-circles {
        text-transform: uppercase;
        font-weight: bold;
    }

    .countdown-circles span {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.2);
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
    }

    .countdown-circles span:first-of-type {
        margin-left: 0;
    }

    /*
*
* ==================================================
* FOR DEMO PURPOSES
* ==================================================
*
*/
    body {
        min-height: 100vh;
    }

    .bg-gradient-1 {
        background: #7f7fd5;
        background: -webkit-linear-gradient(to right, #7f7fd5, #86a8e7, #91eae4);
        background: linear-gradient(to right, #7f7fd5, #86a8e7, #91eae4);
    }

    .bg-gradient-2 {
        background: #654ea3;
        background: -webkit-linear-gradient(to right, #654ea3, #eaafc8);
        background: linear-gradient(to right, #654ea3, #eaafc8);
    }

    .bg-gradient-3 {
        background: #ff416c;
        background: -webkit-linear-gradient(to right, #ff416c, #ff4b2b);
        background: linear-gradient(to right, #ff416c, #ff4b2b);
    }

    .bg-gradient-4 {
        background: #007991;
        background: -webkit-linear-gradient(to right, #007991, #78ffd6);
        background: linear-gradient(to right, #007991, #78ffd6);
    }

    .rounded {
        border-radius: 1rem !important;
    }

    .btn-demo {
        padding: 0.5rem 2rem !important;
        border-radius: 30rem !important;
        background: rgba(255, 255, 255, 0.3);
        color: #fff;
        text-transform: uppercase;
        font-weight: bold !important;
    }

    .btn-demo:hover,
    .btn-demo:focus {
        color: #fff;
        background: rgba(255, 255, 255, 0.5);
    }

}

@media only screen and (max-width: 479px) {
    .ballebaazi_play .header .head_r h3 {
        font-size: 14px;
    }

    .ballebaazi_play .play_step span {
        font-size: 20px;
    }

    .ballebaazi_play .play_step p {
        font-size: 14px;
    }

    .ballebaazi_play .rating_graph_inner {
        width: 98px;
        margin-top: 64px;
    }

    .ballebaazi_play .header .head_l {
        width: 68px;
    }

    .ballebaazi_play .header .head_r {
        width: 70%;
    }

}

@media only screen and (max-width: 411px) {
    .ballebaazi_play .user_info {
        width: 84%;
    }
}

@media only screen and (max-width: 320px) {

    .ballebaazi_play .btn_bord span {
        font-size: 0.7rem;
    }

    .ballebaazi_play .header .head_l {
        margin-right: 18px;
    }

    .ballebaazi_play .user_info {
        width: 83%;
    }
}
</style>

<script setup>
import { Swiper, SwiperSlide } from 'swiper/vue';
import 'swiper/css';
import 'swiper/css/pagination';
import { ref, onMounted, onBeforeUnmount } from 'vue';

import ReviewItem from '../components/ReviewItem.vue';

const props = defineProps({
  reviews: Array
});

const isScrolled = ref(false);

const handleScroll = () => {
    const sectionBottom = window.scrollY
    isScrolled.value = window.scrollY > 300; 
};


onMounted(() => {
  window.addEventListener('scroll', handleScroll);
});

onBeforeUnmount(() => {
  window.removeEventListener('scroll', handleScroll);
});


</script>
