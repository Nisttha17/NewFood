<?php 
include ('header.php');
      include ('navbar.php');
      $page_title='About page';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FOOD BANK</title>
    <!-- Add Bootstrap CSS link -->
    <link
      rel="stylesheet"

href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
    <style>
         body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('https://onewayfoundation.online/assets/img/slider/home2/slider2.png'); /* Set your background image path */
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-color: rgba(0, 0, 0, 0);
            color: #fff;
         }
     /* Who we are image animation */
.mainImg {
  opacity: 100%;
}
.mainImg:hover {
 
 
}

.text-blk {
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 0px;
  margin-left: 0px;
  padding-top: 10px;
  padding-right: 10px;
  padding-bottom: 10px;
  padding-left: 10px;
  line-height: 25px;
  background-color: transparent;
}

.responsive-container-block.bigContainer {
  padding-top: 10px;
  padding-right: 30px;
  padding-bottom: 10px;
  padding-left: 30px;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  background-color: transparent;
}

.mainImg {
  color: black;
  width: 35%;
  height: auto;
  box-shadow: rgba(0, 0, 0, 0.05) 0px 5px 10px 7px;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  border-bottom-right-radius: 10px;
  border-bottom-left-radius: 10px;
  border: 3px solid grey;
  background-color: transparent;
}

.text-blk.headingText {
  font-size: 45px;
  font-weight: 700;
  line-height: 34px;
  color: black;
  padding-top: 0px;
  padding-right: 10px;
  padding-bottom: 0px;
  padding-left: 10px;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 10px;
  margin-left: 0px;
  background-color: transparent;
}

.allText {
  padding-top: 0px;
  padding-right: 0px;
  padding-bottom: 0px;
  padding-left: 0px;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 0px;
  margin-left: 40px;
  width: 40%;
  margin: 0 0 0 0;
  background-color: transparent;
}

.text-blk.subHeadingText {
  color: gray;
  font-size: 25px;
  line-height: 34px;
  padding-top: 0px;
  padding-right: 10px;
  padding-bottom: 0px;
  padding-left: 10px;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 15px;
  margin-left: 0px;
  background-color: transparent;
}

.text-blk.description {
  font-size: 25px;
  line-height: 34px;
  color: gray;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 50px;
  margin-left: 0px;
  padding-top: 0px;
  padding-right: 10px;
  padding-bottom: 0px;
  padding-left: 10px;
  background-color: transparent;
}

.explore {
  font-size: 20px;
  line-height: 28px;
  color: rgb(255, 255, 255);
  background-color: rgb(244, 152, 146);
  padding-top: 10px;
  padding-right: 50px;
  padding-bottom: 10px;
  padding-left: 50px;
  border-top-width: 0px;
  border-right-width: 0px;
  border-bottom-width: 0px;
  border-left-width: 0px;
  border-top-style: outset;
  border-right-style: outset;
  border-bottom-style: outset;
  border-left-style: outset;
  border-top-color: rgb(244, 152, 146);
  border-right-color: rgb(244, 152, 146);
  border-bottom-color: rgb(244, 152, 146);
  border-left-color: rgb(244, 152, 146);
  border-image-source: initial;
  border-image-slice: initial;
  border-image-width: initial;
  border-image-outset: initial;
  border-image-repeat: initial;
  cursor: pointer;
  background-color: transparent;
}

.explore:hover {
  background-image: initial;
  background-position-x: initial;
  background-position-y: initial;
  background-size: initial;
  background-repeat-x: initial;
  background-repeat-y: initial;
  background-attachment: initial;
  background-origin: initial;
  background-clip: initial;
  background-color: rgb(255, 235, 234);
  color: rgb(244, 152, 146);
  background-color: transparent;
}

.responsive-container-block.Container {
  margin-top: 80px;
  margin-right: auto;
  margin-bottom: 50px;
  margin-left: auto;
  justify-content: center;
  align-items: center;
  max-width: 1320px;
  padding-top: 10px;
  padding-right: 10px;
  padding-bottom: 10px;
  padding-left: 10px;
  background-color: transparent;
}

.responsive-container-block.Container.bottomContainer {
  margin-top: 100px;
  margin-right: 0px;
  margin-bottom: 50px;
  margin-left: 0px;
  flex-direction: row-reverse;
  margin: 100px auto 50px auto;
  background-color: transparent;
}

.allText.aboveText {
  margin: 0 0 0 40px;
}

.allText.bottomText {
  margin: 0 40px 0 0;
}

@media (max-width: 1024px) {
  .responsive-container-block.Container {
    max-width: 850px;
    background-color: transparent;
  }

  .mainImg {
    width: 55%;
    height: auto;
  }

  .text-blk.description {
    font-size: 20px;
  }

  .allText {
    width: 40%;
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 20px;
  }

  .responsive-container-block.bigContainer {
    padding-top: 10px;
    padding-right: 10px;
    padding-bottom: 10px;
    padding-left: 10px;
    background-color: transparent;
  }

  .text-blk.subHeadingText {
    font-size: 22px;
  }

  .responsive-container-block.Container.bottomContainer {
    margin: 80px auto 50px auto;
    background-color: transparent;
  }

  .responsive-container-block.Container {
    max-width: 830px;
    background-color: transparent;
  }

  .allText.aboveText {
    margin: 30px 0 0 40px;
  }

  .allText.bottomText {
    margin: 30px 40px 0 0;
  }
}

@media (max-width: 768px) {
  .mainImg {
    width: 90%;
  }

  .allText {
    width: 100%;
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding-top: 0px;
    padding-right: 0px;
    padding-bottom: 0px;
    padding-left: 0px;
  }

  .responsive-container-block.Container {
    flex-direction: column;
    height: auto;
    background-color: transparent;
  }

  .text-blk.headingText {
    text-align: center;
  }

  .text-blk.subHeadingText {
    text-align: center;
    font-size: 25px;
  }

  .text-blk.description {
    text-align: center;
    font-size: 25px;
  }

  .allText {
    margin-top: 40px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
  }

  .allText.aboveText {
    margin: 40px 0 0 0;
  }

  .responsive-container-block.Container {
    margin: 80px auto 50px auto;
    background-color: transparent;
  }

  .responsive-container-block.Container.bottomContainer {
    margin: 50px auto 50px auto;
    background-color: transparent;
  }

  .allText.bottomText {
    margin: 40px 0 0 0;
  }
}

@media (max-width: 500px) {
  .responsive-container-block.Container {
    padding-top: 10px;
    padding-right: 0px;
    padding-bottom: 10px;
    padding-left: 0px;
    width: 100%;
    max-width: 100%;
    background-color: transparent;
  }

  .mainImg {
    width: 100%;
  }

  .responsive-container-block.bigContainer {
    padding-top: 10px;
    padding-right: 25px;
    padding-bottom: 10px;
    padding-left: 25px;
    background-color: transparent;
  }

  .text-blk.subHeadingText {
    font-size: 25px;
    padding-top: 0px;
    padding-right: 0px;
    padding-bottom: 0px;
    padding-left: 0px;
  }

  .text-blk.description {
    font-size: 25px;
    padding-top: 0px;
    padding-right: 0px;
    padding-bottom: 0px;
    padding-left: 0px;
  }

  .allText {
    padding-top: 0px;
    padding-right: 0px;
    padding-bottom: 0px;
    padding-left: 0px;
    width: 100%;
  }
}

@import url("https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&amp;display=swap");

*,
*:before,
*:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

.wk-desk-1 {
  width: 8.333333%;
}

.wk-desk-2 {
  width: 16.666667%;
}

.wk-desk-3 {
  width: 25%;
}

.wk-desk-4 {
  width: 33.333333%;
}

.wk-desk-5 {
  width: 41.666667%;
}

.wk-desk-6 {
  width: 50%;
}

.wk-desk-7 {
  width: 58.333333%;
}

.wk-desk-8 {
  width: 66.666667%;
}

.wk-desk-9 {
  width: 75%;
}

.wk-desk-10 {
  width: 83.333333%;
}

.wk-desk-11 {
  width: 91.666667%;
}

.wk-desk-12 {
  width: 100%;
}

@media (max-width: 1024px) {
  .wk-ipadp-1 {
    width: 8.333333%;
  }

  .wk-ipadp-2 {
    width: 16.666667%;
  }

  .wk-ipadp-3 {
    width: 25%;
  }

  .wk-ipadp-4 {
    width: 33.333333%;
  }

  .wk-ipadp-5 {
    width: 41.666667%;
  }

  .wk-ipadp-6 {
    width: 50%;
  }

  .wk-ipadp-7 {
    width: 58.333333%;
  }

  .wk-ipadp-8 {
    width: 66.666667%;
  }

  .wk-ipadp-9 {
    width: 75%;
  }

  .wk-ipadp-10 {
    width: 83.333333%;
  }

  .wk-ipadp-11 {
    width: 91.666667%;
  }

  .wk-ipadp-12 {
    width: 100%;
  }
}

@media (max-width: 768px) {
  .wk-tab-1 {
    width: 8.333333%;
  }

  .wk-tab-2 {
    width: 16.666667%;
  }

  .wk-tab-3 {
    width: 25%;
  }

  .wk-tab-4 {
    width: 33.333333%;
  }

  .wk-tab-5 {
    width: 41.666667%;
  }

  .wk-tab-6 {
    width: 50%;
  }

  .wk-tab-7 {
    width: 58.333333%;
  }

  .wk-tab-8 {
    width: 66.666667%;
  }

  .wk-tab-9 {
    width: 75%;
  }

  .wk-tab-10 {
    width: 83.333333%;
  }

  .wk-tab-11 {
    width: 91.666667%;
  }

  .wk-tab-12 {
    width: 100%;
  }
}

@media (max-width: 500px) {
  .wk-mobile-1 {
    width: 8.333333%;
  }

  .wk-mobile-2 {
    width: 16.666667%;
  }

  .wk-mobile-3 {
    width: 25%;
  }

  .wk-mobile-4 {
    width: 33.333333%;
  }

  .wk-mobile-5 {
    width: 41.666667%;
  }

  .wk-mobile-6 {
    width: 50%;
  }

  .wk-mobile-7 {
    width: 58.333333%;
  }

  .wk-mobile-8 {
    width: 66.666667%;
  }

  .wk-mobile-9 {
    width: 75%;
  }

  .wk-mobile-10 {
    width: 83.333333%;
  }

  .wk-mobile-11 {
    width: 91.666667%;
  }

  .wk-mobile-12 {
    width: 100%;
  }
}

#missionheading {
  color: #ffffff;
}

#visionheading {
  color: #ffffff;
}

#teamhaeding {
  color: #ffffff;
}

/*Team card's CSS Starts from here */

.text-blk {
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 0px;
  margin-left: 0px;
  padding-top: 10px;
  padding-right: 10px;
  padding-bottom: 10px;
  padding-left: 10px;
  line-height: 25px;
}

.responsive-cell-block {
  min-height: 75px;
}

.responsive-container-block {
  min-height: 75px;
  height: fit-content;
  width: 100%;
  padding-top: 10px;
  padding-right: 10px;
  padding-bottom: 10px;
  padding-left: 10px;
  display: flex;
  flex-wrap: wrap;
  margin-top: 0px;
  margin-right: auto;
  margin-bottom: 0px;
  margin-left: auto;
  justify-content: flex-start;
  background-color: transparent;
}

.outer-container {
  padding-top: 10px;
  padding-right: 30px;
  padding-bottom: 10px;
  padding-left: 30px;
  background-color: transparent;
}

.inner-container {
  max-width: 1320px;
  padding-top: 10px;
  padding-right: 10px;
  padding-bottom: 10px;
  padding-left: 10px;
  margin-top: 50px;
  margin-right: auto;
  margin-bottom: 50px;
  margin-left: auto;
}

.heading-text {
  font-size: 48px;
  line-height: 50px;
  font-weight: 900;
  display: flex;
  flex-direction: column;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 15px;
  margin-left: 0px;
  padding-top: 0px;
  padding-right: 0px;
  padding-bottom: 0px;
  padding-left: 0px;
}

.sub-heading-text {
  line-height: 30px;
  color: rgb(122, 122, 122);
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 0px;
  margin-left: 0px;
  padding-top: 0px;
  padding-right: 0px;
  padding-bottom: 0px;
  padding-left: 0px;
}

.name {
  font-size: 18px;
  font-weight: 800;
  line-height: 24px;
  padding-top: 15px;
  padding-right: 10px;
  padding-bottom: 5px;
  padding-left: 0px;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 0px;
  margin-left: 0px;
}

.position {
  line-height: 24px;
  padding-top: 10px;
  padding-right: 10px;
  padding-bottom: 10px;
  padding-left: 0px;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 0px;
  margin-left: 0px;
}

.cardteam {
  display: block;
  flex-direction: column;
  align-items: center;
  padding-top: 10px;
  padding-right: 10px;
  padding-bottom: 10px;
  padding-left: 10px;
  background-color: transparent;
}

.card-img {
  width: 100%;
  height: 250px;
  margin-top: 0px;
  margin-right: auto;
  margin-bottom: 0px;
  margin-left: auto;
  max-width: 300px;
}

.card-container {
  display: inline-block;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 40px;
  margin-left: 0px;
  background-color: transparent;
}

.headings-container {
  padding-top: 0px;
  padding-right: 10px;
  padding-bottom: 0px;
  padding-left: 0px;
}

.team-members-container {
  display: flex;
  flex-wrap: wrap;
}

@media (max-width: 1024px) {
  .name {
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
    padding-top: 10px;
    padding-right: 10px;
    padding-bottom: 5px;
    padding-left: 0px;
  }

  .position {
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
    padding-top: 0px;
    padding-right: 10px;
    padding-bottom: 10px;
    padding-left: 0px;
  }

  .card-img {
    width: 100%;
    min-width: 100%;
    height: 250px;
    min-height: 230px;
    max-height: 230px;
  }
}

@media (max-width: 768px) {
  .position {
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
  }

  .name {
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
  }

  .heading-text {
    text-align: center;
    padding-top: 10px;
    padding-right: 0px;
    padding-bottom: 10px;
    padding-left: 0px;
  }

  .sub-heading-text {
    text-align: center;
    color: rgb(122, 122, 122);
    max-width: 500px;
    margin-top: 0px;
    margin-right: auto;
    margin-bottom: 0px;
    margin-left: auto;
  }

  .team-members-container {
    padding-top: 0px;
    padding-right: 0px;
    padding-bottom: 0px;
    padding-left: 0px;
    margin-top: 30px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
  }

  .cardteam {
    display: flex;
  }

  .card-img {
    max-width: 300px;
    min-width: 250px;
  }

  .headings-container {
    padding-top: 0px;
    padding-right: 0px;
    padding-bottom: 0px;
    padding-left: 0px;
  }

  .cardteam {
    padding-top: 0px;
    padding-right: 0px;
    padding-bottom: 0px;
    padding-left: 0px;
    background-color: transparent;
  }

  .heading-text {
    padding-top: 0px;
    padding-right: 0px;
    padding-bottom: 0px;
    padding-left: 0px;
  }

  .inner-container {
    padding-top: 0px;
    padding-right: 0px;
    padding-bottom: 0px;
    padding-left: 0px;
  }
}

@media (max-width: 500px) {
  .heading-text {
    text-align: left;
    line-height: 65px;
  }

  .sub-heading-text {
    color: rgb(122, 122, 122);
    text-align: left;
  }

  .name {
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
    padding-top: 10px;
    padding-right: 0px;
    padding-bottom: 5px;
    padding-left: 0px;
  }

  .position {
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
    padding-top: 0px;
    padding-right: 0px;
    padding-bottom: 10px;
    padding-left: 0px;
  }

  .inner-container {
    margin-top: 80px;
    margin-right: 0px;
    margin-bottom: 50px;
    margin-left: 0px;
    padding-top: 0px;
    padding-right: 0px;
    padding-bottom: 0px;
    padding-left: 0px;
  }

  .cardteam {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background: linear-gradient(to right, #b92b27, #1565c0);
  }

  .outer-container {
    padding-top: 10px;
    padding-right: 20px;
    padding-bottom: 10px;
    padding-left: 20px;
  }

  .card-img {
    width: 100%;
  }

  .heading-text {
    font-size: 40px;
    line-height: 45px;
  }

  .card-img {
    min-width: auto;
  }
}

@import url("https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&amp;display=swap");

*,
*:before,
*:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  margin: 0;
}

.wk-desk-1 {
  width: 8.333333%;
}

.wk-desk-2 {
  width: 16.666667%;
}

.wk-desk-3 {
  width: 25%;
}

.wk-desk-4 {
  width: 33.333333%;
}

.wk-desk-5 {
  width: 41.666667%;
}

.wk-desk-6 {
  width: 50%;
}

.wk-desk-7 {
  width: 58.333333%;
}

.wk-desk-8 {
  width: 66.666667%;
}

.wk-desk-9 {
  width: 75%;
}

.wk-desk-10 {
  width: 83.333333%;
}

.wk-desk-11 {
  width: 91.666667%;
}

.wk-desk-12 {
  width: 100%;
}

@media (max-width: 1024px) {
  .wk-ipadp-1 {
    width: 8.333333%;
  }

  .wk-ipadp-2 {
    width: 16.666667%;
  }

  .wk-ipadp-3 {
    width: 25%;
  }

  .wk-ipadp-4 {
    width: 33.333333%;
  }

  .wk-ipadp-5 {
    width: 41.666667%;
  }

  .wk-ipadp-6 {
    width: 50%;
  }

  .wk-ipadp-7 {
    width: 58.333333%;
  }

  .wk-ipadp-8 {
    width: 66.666667%;
  }

  .wk-ipadp-9 {
    width: 75%;
  }

  .wk-ipadp-10 {
    width: 83.333333%;
  }

  .wk-ipadp-11 {
    width: 91.666667%;
  }

  .wk-ipadp-12 {
    width: 100%;
  }
}

@media (max-width: 768px) {
  .wk-tab-1 {
    width: 8.333333%;
  }

  .wk-tab-2 {
    width: 16.666667%;
  }

  .wk-tab-3 {
    width: 25%;
  }

  .wk-tab-4 {
    width: 33.333333%;
  }

  .wk-tab-5 {
    width: 41.666667%;
  }

  .wk-tab-6 {
    width: 50%;
  }

  .wk-tab-7 {
    width: 58.333333%;
  }

  .wk-tab-8 {
    width: 66.666667%;
  }

  .wk-tab-9 {
    width: 75%;
  }

  .wk-tab-10 {
    width: 83.333333%;
  }

  .wk-tab-11 {
    width: 91.666667%;
  }

  .wk-tab-12 {
    width: 100%;
  }
}

@media (max-width: 500px) {
  .wk-mobile-1 {
    width: 8.333333%;
  }

  .wk-mobile-2 {
    width: 16.666667%;
  }

  .wk-mobile-3 {
    width: 25%;
  }

  .wk-mobile-4 {
    width: 33.333333%;
  }

  .wk-mobile-5 {
    width: 41.666667%;
  }

  .wk-mobile-6 {
    width: 50%;
  }

  .wk-mobile-7 {
    width: 58.333333%;
  }

  .wk-mobile-8 {
    width: 66.666667%;
  }

  .wk-mobile-9 {
    width: 75%;
  }

  .wk-mobile-10 {
    width: 83.333333%;
  }

  .wk-mobile-11 {
    width: 91.666667%;
  }

  .wk-mobile-12 {
    width: 100%;
  }
}

.card-img {
  width: 200px;
}
/* Add this CSS code to increase card size on hover */
.card:hover {
  transform: scale(1.1); /* You can adjust the scale factor as needed */
  transition: transform 0.2s ease-in-out; /* Add smooth transition for the scaling effect */
}
.text-blk.headingText{
  font-size: 50px;
  color: black;
  font-size: 45px;
  font-style: italic;
  opacity: 0;
  animation: fadeInLeft 0.8s ease-in forwards;
}

@keyframes fadeInLeft {
  0% {
    opacity: 0;
    transform: translateX(-30px);
  }
  100% {
    opacity: 1;
    transform: translateX(0px);
  }
}

@keyframes fadeInRight {
  0% {
    opacity: 0;
    transform: translateX(30px);
  }
  100% {
    opacity: 1;
    transform: translateX(0px);
  }
}

.counter {
  font-size: 36px;
  text-align: center;
  margin-top: 20px;
  color: #555;
  font-family: Arial, sans-serif;
}

.counter span {
  display: inline-block;
  vertical-align: middle;
  margin-right: 5px;
  color: #ff6f61; /* Change text color */
}

#count {
  font-size: 48px; /* Change counter font size */
  font-weight: bold;
  animation: pulse 1s ease-in-out infinite; /* Pulsating animation */
}

@keyframes pulse {
  0% {
    transform: scale(1);
  }
  50% {
    transform: scale(1.1);
  }
  100% {
    transform: scale(1);
  }
}

/* Your existing counter styles */

/* Styles for Get Involved section */
.get-involved {
  margin-top: 50px;
}

.get-involved h2 {
  font-size: 24px;
  color: #333;
  text-align: center;
  margin-bottom: 20px;
}

.get-involved-content {
  display: flex;
  justify-content: space-around;
  align-items: center;
  flex-wrap: wrap;
}

.get-involved-text {
  flex: 1;
  max-width: 400px;
}

.get-involved-images {
  flex: 1;
  display: flex;
  justify-content: space-around;
  align-items: center;
  margin-top: 20px;
}

.get-involved-images img {
  max-width: 200px;
  margin: 10px;
}
/* Your existing counter styles */

/* Styles for Get Involved section */
.get-involved {
  margin-top: 50px;
}

.get-involved h2 {
  font-size: 24px;
  color: #333;
  text-align: center;
  margin-bottom: 20px;
}

.get-involved-content {
  display: flex;
  justify-content: space-around;
  align-items: center;
  flex-wrap: wrap;
}

.get-involved-text {
  
}

.get-involved-text p {
 
  color: #444;
}

.get-involved-images {
  flex: 1;
  display: flex;
  justify-content: space-around;
  align-items: center;
  margin-top: 20px;
}

.get-involved-images img {
  max-width: 150px;
  margin: 10px;
  border-radius: 8px;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}
/* Your existing counter styles */

/* Styles for Get Involved section */
.get-involved {
  margin-top: 50px;
}

.get-involved h2 {
  font-size: 30px;
  
  text-align: center;
  margin-bottom: 20px;
  color: blue;
  text-decoration: underline;
  font-family:sans-serif;
  
}

.get-involved-content {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
}

.get-involved-images {
  display: flex;
  justify-content: space-around;
  align-items: center;
  margin-top: 20px;
}

.get-involved-images img {
  max-width: 200px;
  margin: 5px; /* Decreased space between images */
  border-radius: 8px;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}

.get-involved-text {
  max-width: 400px;
  margin-top: 20px;
  text-align: center;
}

.get-involved-text p {
  font-size: 18px;
  line-height: 1.6;
  color: #444;
}
#videos {
  text-align: center;
  padding: 50px 20px;
  margin: 0 20px;
  border-radius: 20px;
  background-color: #f2f2f2;
}

.video-container {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
  grid-gap: 20px;
  justify-content: center;
  align-items: center;
}

.video-container iframe {
  width: 100%;
  max-width: 560px;
  height: 315px;
  border-radius: 15px;
}

.Mypara{
  padding-left: 25px;
}
.counter{
  background-color: white;
}
.counter .trust{
  color: green;
}
.counter .graph{
  height: 60px;
}
.responsive-container-block.Container{
  background-color: rgba(0, 0, 0, 0.6);   /* <-- ONLY THIS LINE CHANGED (was: whitesmoke) */
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
/* @media screen and (min-width: 992px) {
    #viewport {
        overflow: hidden;
        position: fixed;
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
    }
    #js-scroll-content {
        position: absolute;
        overflow: hidden;
        width: 100%;
        top: 0;
        left: 0;
    }
}

@media (max-width: 991px) {
    #js-scroll-content {
        transform: unset !important;
    }
}

.main-banner {
    padding: 200px 0 300px;
    min-height: 100vh;
    position: relative;
}
.js-parallax-scene {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
.banner-img-wp {
    width: 100%;
    height: 100%;
    padding-left: 30px;
}
.banner-img {
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
    animation: biani 4.5s linear infinite alternate;
    box-shadow: 0 0px 20px rgba(36, 39, 37, 0.3);
}
@keyframes biani {
    0% {
        border-radius: 48% 52% 57% 43% / 34% 44% 56% 66%;
    }
    25% {
        border-radius: 62% 38% 64% 36% / 34% 55% 45% 66%;
    }
    50% {
        border-radius: 43% 57% 51% 49% / 33