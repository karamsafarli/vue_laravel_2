<template>
    <div class="play_header">
      <div class="play_active slider">
        <div class="play_step" v-for="(slide, index) in slides" :key="index">
          <span v-html="slide.content"></span>
          <p :style="slide.style">{{ slide.text }}</p>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  import { onMounted } from 'vue';
  
  export default {
    props: {
      slides: {
        type: Array,
        required: true
      }
    },
    setup() {
      onMounted(() => {
        $('.slider').slick({
          dots: false,
          infinite: true,
          autoplay: true,
          autoplaySpeed: 3000,
          arrows: false,
          speed: 500,
          slidesToShow: 4,
          slidesToScroll: 1
        });
      });
    }
  };
  </script>
  
  <style>
  .play_header {
    margin: auto;
  }
  
  .play_step {
    width: 279px;
    text-align: center;
  }
  
  .slider .slick-prev:before, .slider .slick-next:before {
    color: black;
  }
  </style>
  