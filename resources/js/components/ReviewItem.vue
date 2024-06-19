<template>
    <li>
      <div class="user_box">
        <p class="initials is-size-7" :class="randomColorClass">{{ initials }}</p>
        <div class="user_info">
          <div class="user_name">{{ review.name }}</div>
          <div class="stars is-size-7 has-text-grey">
            <div class="ratings-dynamic">
              <div class="empty-stars"></div>
              <div class="full-stars" :style="{ width: ratingWidth }"></div>
            </div>
            {{ formattedDate }}
          </div>
          <div class="user_review has-text-grey">{{ review.review }}</div>
        </div>
      </div>
    </li>
  </template>
  
  <script>
  export default {
    props: {
      review: {
        type: Object,
        required: true
      }
    },
    computed: {
      initials() {
        return this.review.name.charAt(0);
      },
      ratingWidth() {
        return `${(this.review.rating / 5) * 100}%`;
      },
      formattedDate() {
        const date = new Date(this.review.review_date);
        return date.toLocaleDateString();
      },
      randomColorClass() {
        const colors = ['green', 'blue', 'teal', 'grey'];
        return colors[Math.floor(Math.random() * colors.length)];
      }
    }
  };
  </script>

<style scoped>

.full-stars {
    position: absolute;
    left: 0;
    top: 0;
    white-space: nowrap;
    overflow: hidden;
    color: #39875f;
}

.has-text-grey {
    color: #7a7a7a !important;
}

.stars {
    padding: 6px 0;
}

.ratings-dynamic {
    position: relative;
    vertical-align: middle;
    display: inline-block;
    color: #eee;
    overflow: hidden;
}

.is-size-7 {
    font-size: .75rem !important;
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



.empty-stars:before,
.full-stars:before {
    content: "\2605\2605\2605\2605\2605";
    font-size: 11px;
}

.empty-stars:before {
    -webkit-text-stroke: 0 rgba(0, 0, 0, .2);
}

.user_info {
    width: 95%;
}

.user_review {
    font-weight: 300;
    font-style: normal;
    font-stretch: normal;
    line-height: 20px;
    letter-spacing: normal;
    font-size: .75rem !important;
}


.user_name {
    font-style: normal;
    font-stretch: normal;
    line-height: 1.3;
    letter-spacing: normal;
    margin-bottom: 0;
    font-size: .8em;
    font-weight: 400;
    text-transform: capitalize;
}

.user_box {
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    flex-wrap: wrap;
    -webkit-justify-content: space-between;
    justify-content: space-between;
}

.user_img {
    width: 4%;
}


@media only screen and (max-width: 767px) {
    

   .user_img {
        width: 15%;
    }

    .user_info {
        width: 88%;
    }

    

}



@media only screen and (max-width: 411px) {
   .user_info {
        width: 84%;
    }
}

@media only screen and (max-width: 320px) {

    .user_info {
        width: 83%;
    }
}
</style>
 