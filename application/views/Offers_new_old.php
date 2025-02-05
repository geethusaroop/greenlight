<style>
@charset "utf-8";



/*======================
1.General Code
========================*/

html {
overflow-x: hidden;
}
button:focus,
*:focus {
outline: none;
}
body {
font-family: 'Libre Franklin', sans-serif;
margin: 0px;
padding: 0px;
font-size: 13px;
line-height: 1.8;
font-weight: 400;
color: #483B33000;
background: #ffffff;
transition: transform ease-in .4s;
overflow: hidden;
}
.offrs-wrp
{
  margin-bottom: 26px;
}
.accordion {
font-size: 1rem;
width: 30vw;
margin: 0 auto;
border-radius: 5px;
}

.accordion-header,
.accordion-body {
background: white;
}

.accordion-header {
padding: 1.5em 1.5em;
background: #3F51B5;
color: white;
cursor: pointer;
font-size: .7em;
letter-spacing: .1em;
transition: all .3s;
text-transform: uppercase;
}
/*.detail-slider  .swiper-slide {
  width: 100% !important;
}*/
/*.detail-slider .swiper-container-thumbs .swiper-slide
{
   width: 10% !important;
}*/
.swiper-slide .popup img{
  width: 100%;
}
.wrapper{
  max-width: 1090px;
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  margin: auto;
  justify-content: space-between;
      padding: 50px 0px;
}

.pack-green.wrapper .table{
  background: #fff;
  width: calc(33% - 20px);
  padding: 30px 30px;
  position: relative;
  box-shadow: 0 5px 10px rgba(0,0,0,0.1);
}

@media (max-width: 1020px){
  .pack-green.wrapper .table{
      width: calc(50% - 20px);
      margin-bottom: 40px;
  }
}

@media (max-width: 698px){
  .pack-green.wrapper .table{
      width: 100%;
  }
}

.pack-green.wrapper .table .price-section{
 display: flex;
 justify-content: center;
}

.pack-green.wrapper .price-section .price-area{
  height: 120px;
  width: 120px;
  background: #ffd861;
  border-radius: 50%;
  padding: 2px;
}
.star-rating {
  direction: rtl;
  display: inline-block;
  padding: 20px
}

.star-rating input[type=radio] {
  display: none
}

.star-rating label {
  color: #bbb;
  font-size: 18px;
  padding: 0;
  cursor: pointer;
  -webkit-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out
}

.star-rating label:hover,
.star-rating label:hover ~ label,
.star-rating input[type=radio]:checked ~ label {
  color: #f2b600
}
/* social_share */
.social_share {
  display: flex;
      margin-top: 20px;
}
.social_share li + li {
  margin-left: 8px;
}

.social_share a {
  display: inline-block;
    width: 38px;
  height: 38px;
  color: white;
  font-size: 24px;
  text-align: center;
  border-radius: 50%;
  opacity: 0.75;
  transition: opacity 0.15s linear;
}
.social_share a:hover {
  opacity: 1;
}

.social_share i {
 position: relative;
  top: 16%;
  transform: translateY(-50%);
  font-size: 19px;
}
.shre-hed
{
  margin-top: 20px;
}

.facebook {
  background: #3b5998;
}

.twitter {
  background: #55acee;
}

.googleplus {
  background: #dd4b39;
}

.linkedin {
  background: #0077b5;
}

.pinterest {
  background: #cb2027;
}


.pack-green.wrapper .price-section .price-area .inner-area{
  height: 100%;
  width: 100%;
  border-radius: 50%;
  border: 3px solid #fff;
  color: #fff;
  line-height: 117px;
  text-align: center;
  position: relative;
}

.pack-green.wrapper .price-area .inner-area .text{
  font-size: 25px;
  font-weight: 400;
  position: absolute;
   top: -33px;
  left: 22px;
}

.pack-green.wrapper .price-area .inner-area .price{
  font-size: 55px;
  font-weight: 500;
}

.pack-green.wrapper .table .package-name{
  width: 100%;
  height: 2px;
  background: #ffecb3;
  margin: 35px 0;
  position: relative;
}

.pack-green.wrapper .table .package-name::before{
  position: absolute;
  content: "Basic";
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background: #fff;
  font-size: 25px;
  padding: 0 10px;
  font-weight: bolder;
}

.pack-green.wrapper .table .features li{
  list-style: none;
  display: flex;
  justify-content: space-between;
  margin-bottom: 15px;
}

.pack-green.wrapper .features li .list-name{
  font-size: 17px;
  font-weight: 400;
}

.pack-green.wrapper .features li .icon{
  font-size: 15px;
}

.pack-green.wrapper .features li .icon.check{
  color: #2db94d;
}

.pack-green.wrapper .features li .icon.cross{
  color: #cd3241;
}

.pack-green.wrapper .table .btn{
  display: flex;
  justify-content: center;
  margin-top: 35px;
}

.pack-green.wrapper .table .btn button{
  width: 80%;
  height: 50px;
  font-weight: 700;
  color: #fff;
  font-size: 20px;
  border: none;
  outline: none;
  border-radius: 25px;
  cursor: pointer;
  transition: all 0.3s ease;
}

.pack-green.wrapper .basic .price-area,
.basic .inner-area{
  background: #ffd861;
}

.pack-green.wrapper .basic .btn button{
  background: #fff;
  color: #ffd861;
  border: 2px solid #ffd861;
}

.pack-green.wrapper .basic .btn button:hover{
  border-radius: 6px;
  background: #ffd861;
  color: #fff;
}

.pack-green.wrapper .Premium .price-area,
.Premium .inner-area{
  background: #a26bfa;
}

.pack-green.wrapper .Premium .btn button{
  background: #fff;
  color: #a26bfa;
  border: 2px solid #a26bfa;
}

.pack-green.wrapper .Premium .btn button:hover{
  border-radius: 6px;
  background: #a26bfa;
  color: #fff;
}

.pack-green.wrapper .Ultimate .price-area,
.Ultimate .inner-area{
  background: #43ef8b;
}

.pack-green.wrapper .Ultimate .btn button{
  background: #fff;
  color: #43ef8b;
  border: 2px solid #43ef8b;
}

.pack-green.wrapper .Ultimate .btn button:hover{
  border-radius: 6px;
  background: #43ef8b;
  color: #fff;
}

.pack-green.wrapper .basic .package-name{
  background: #ffecb3;
}

.pack-green.wrapper .Premium .package-name{
  background: #a26bfa;
}

.pack-green.wrapper .Ultimate .package-name{
  background: #43ef8b;
}

.pack-green.wrapper .basic .package-name::before{
  content: "Basic";
}

.pack-green.wrapper .Premium .package-name::before{
  content: "Premium";
}

.pack-green.wrapper .Ultimate .package-name::before{
  content: "Ultimate";
}

.pack-green.wrapper .basic ::selection,
.basic .price-area,
.basic .inner-area{
  background: #ffd861;
}

.pack-green.wrapper .Premium ::selection,
.Premium .price-area,
.Premium .inner-area{
  background: #a26bfa;
}

.pack-green.wrapper .Ultimate ::selection,
.Ultimate .price-area,
.Ultimate .inner-area{
  background: #43ef8b;
}



.close-btn
{
font-size: 23px;
  color: #689e4a;
  text-align: right;
  float: right;
  position: relative;
  right: 8px;
  top: 10px;
}
.accordion__item {
  border-bottom: 1px solid #3a4ba4;
}

.accordion__item .accordion__item {
border-bottom: 1px solid rgba(0, 0, 0, 0.08);
}

.accordion-header:hover {
background: #2D3D99;
position: relative;
z-index: 5;
}

.accordion-body {
background: #fcfcfc;
color: #353535;
display: none;
}

.accordion-body__contents {
padding: 1.5em 1.5em;
font-size: .85em;
}

.accordion__item.active:last-child .accordion-header {
border-radius: none;
}

.accordion:first-child > .accordion__item > .accordion-header {
border-bottom: 1px solid transparent;
}

.accordion__item > .accordion-header:after {
content: "\f3d0";
font-family: IonIcons;
font-size: 1.2em;
float: right;
position: relative;
top: -2px;
transition: .3s all;
transform: rotate(0deg);
}

.accordion__item.active > .accordion-header:after {
transform: rotate(-180deg);
}

.accordion__item.active .accordion-header {
background: #2D3D99;
}
.dropright
{
    width: 55%;
}
.dropright .dropdown-toggle::after
{
float: right;
position: relative;
top: 5px;
}
.dropright .dropdown-item
{
display: inline-flex;
}
/*.dropright .btn-primary:not(:disabled):not(.disabled).active, .btn-primary:not(:disabled):not(.disabled):active, .show > .btn-primary.dropdown-toggle
{
background-color: #689e4a !important;
  border-color: #b1de4e !important;
}*/
.select-cat-wrp
{
border: 1px solid gainsboro;
padding: 20px;
border-radius: 11px;
width: 80%;
margin: 0 auto;
}
.post-now-btn
{
width: 20%;
  background: #689e4a;
  color: white;
  padding: 10px 0px;
  margin-top: 10px;
  border-radius: 10px;
}
.site-heading h2 {
display: block;
font-weight: 700;
margin-bottom: 10px;
text-transform: uppercase;
}

.site-heading h2 span {
color: #ff5a6e;
}

.site-heading h4 {
display: inline-block;
padding-bottom: 20px;
position: relative;
text-transform: capitalize;
z-index: 1;
}

.site-heading h4::before {
background: #ff5a6e none repeat scroll 0 0;
bottom: 0;
content: "";
height: 2px;
left: 50%;
margin-left: -25px;
position: absolute;
width: 50px;
}

.site-heading h2 span {
color: #ff5a6e;
}

.site-heading {
margin-bottom: 60px;
overflow: hidden;
margin-top: -5px;
}

.team-area .single-item {
margin-bottom: 30px;
}

.team-area .item .thumb {
position: relative;
overflow: hidden;
z-index: 1;
}

.team-area .item .thumb::after {
background: #232323 none repeat scroll 0 0;
content: "";
height: 100%;
left: 0;
opacity: 0;
position: absolute;
top: 0;
transition: all 0.35s ease-in-out;
-webkit-transition: all 0.35s ease-in-out;
-moz-transition: all 0.35s ease-in-out;
-ms-transition: all 0.35s ease-in-out;
-o-transition: all 0.35s ease-in-out;
width: 100%;
}

.team-area .team-items .item:hover .thumb::after {
opacity: 0.7;
}

.team-area .item .thumb .overlay {
top: -100%;
left: 0;
padding: 20px;
position: absolute;
text-align: center;
-webkit-transition: all 0.35s ease-in-out;
-moz-transition: all 0.35s ease-in-out;
-ms-transition: all 0.35s ease-in-out;
-o-transition: all 0.35s ease-in-out;
transition: all 0.35s ease-in-out;
width: 100%;
z-index: 1;
}

.team-area .item:hover .thumb .overlay {
top: 50%;
transform: translate(-50%, -50%);
left: 50%;
}

.team-area .item .thumb .overlay p {
color: #ffffff;
}

.team-area .item .thumb .overlay h4 {
color: #ffffff;
display: inline-block;
position: relative;
text-transform: uppercase;
}

.team-area .item .thumb img {
-webkit-transition: all 0.35s ease-in-out;
-moz-transition: all 0.35s ease-in-out;
-ms-transition: all 0.35s ease-in-out;
-o-transition: all 0.35s ease-in-out;
transition: all 0.35s ease-in-out;
}

.team-area .item:hover .thumb img {
opacity: .6;
}

.team-area .item .thumb .social li {
display: inline-block;
}

.team-area .item .thumb .social li a {
-webkit-border-radius: 50%;
-moz-border-radius: 50%;
border-radius: 50%;
color: #ffffff;
display: inline-block;
height: 40px;
line-height: 40px;
margin: 0 2px;
text-align: center;
width: 40px;
}

.team-area .info {
background: #ffffff none repeat scroll 0 0;
-moz-box-shadow: 0 0 10px #cccccc;
-webkit-box-shadow: 0 0 10px #cccccc;
-o-box-shadow: 0 0 10px #cccccc;
box-shadow: 0 0 10px #cccccc;
padding: 40px 20px 20px;
position: relative;
text-align: center;
z-index: 9;
}

.team-area .info .message {
height: 50px;
line-height: 40px;
margin-left: -25px;
margin-top: -25px;
position: absolute;
text-align: center;
top: 0;
width: 50px;
}

.team-area .info .message a {
background: #fff none repeat scroll 0 0;
-webkit-border-radius: 50%;
-moz-border-radius: 50%;
border-radius: 50%;
-moz-box-shadow: 0 0 10px #cccccc;
-webkit-box-shadow: 0 0 10px #cccccc;
-o-box-shadow: 0 0 10px #cccccc;
box-shadow: 0 0 10px #cccccc;
box-sizing: border-box;
color: #ff5a6e;
display: inline-block;
font-size: 20px;
height: 50px;
line-height: 50px;
width: 50px;
    display: none;
}

.team-area .info .message a i {
font-weight: 500;
}

.team-area .info h4 {
font-weight: 600;
margin-bottom: 5px;
text-transform: capitalize;
}

.team-area .info span {
color: #689e4a;
font-family: "Poppins",sans-serif;
font-weight: 600;
text-transform: uppercase;
}

.team-area .social li.twitter a {
background-color: #00b6f1;
}

.team-area .social li.pinterest a {
background-color: #bd081c;
}

.team-area .social li.facebook a {
background-color: #3b5998;
}

.team-area .social li.google-plus a {
background-color: #df4a32;
}

.team-area .social li.vimeo a {
background-color: #1ab7ea;
}

.team-area .social li.instagram a {
background-color: #cd486b;
}
.img-thumbnail {
  opacity: 1;
  transition: opacity .25s ease-in-out;
  -moz-transition: opacity .25s ease-in-out;
  -webkit-transition: opacity .25s ease-in-out;
  cursor: pointer;
  width: 194px;
 height: 125px;
  object-fit: cover;
  margin: 0 auto;
  padding: 22px;
  display: flex;
  justify-content: center;
  border: 2px dashed #b1de4ea3;
  border-radius: 11PX;
}
.photo-ad-img
{
    height: 125px;
  margin-top: 15px;
  width: 100%;
  object-fit: cover;
  border: 2px solid gainsboro;
}
.upload-btn-img input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}
.upload-btn-img {
  position: relative;
  overflow: hidden;
  display: inline-table;
  width: 24%;
  margin: 2px;
  padding: 13px;
}
.dropright button
{
    text-align: left;
  width: 84%;
  background: #dcdcdc21;
  border: white;
  color: #000000;
  border-bottom: 2px solid #b1de4e;
  border-radius: inherit;
  padding: 14px 16px;
}
.dropright .btn-primary:not(:disabled):not(.disabled).active, .btn-primary:not(:disabled):not(.disabled):active, .show > .btn-primary.dropdown-toggle {
  color: #fff;
  background-color: #689e4a;
  border-color: #689e4a;
}
.dropright .btn-primary:hover {
  color: #689e4a;
  background-color: #ffffff;
  border-color: #689e4a;
}
.accordion__item .accordion__item .accordion-header {
background: #f1f1f1;
color: #353535;
}

@media screen and (max-width: 1000px) {

.accordion {
  width: 100%;
}
}
button {
background: transparent;
border: none;
padding: 0;
}
label {
line-height: normal;
}
.align-item-center {
display: flex;
justify-content: center;
align-items: center;
text-align: center;
flex-direction: column;
}
.p-relative {
position: relative;
}
.after-none:after,
.none {
display: none;
}
.custom-container {
padding-right: 8%;
padding-left: 8%;
}
select {
  display: none !important;
}
.search {
width: 100%;
position: relative;
display: flex;
}
.login-after .wrap {
  width: 67%;
  position: absolute;
  top: 50%;
  left: 75%;
  transform: translate(-50%, -50%);
  display: flex;
}
.login-after .wrap ul {
  display: flex;
  width: 99%;
  position: relative;
  left: 4%;
  margin-top: 6px;
}
.ser-help-centr
{
  padding: 30px;
}
.choos-cat-wrp
{
  border: 1px solid gainsboro;
  padding: 10px;
}
.choos-cat-wrp ul li{
padding: 10px;
border-bottom: 1px solid gainsboro;
}
.choos-cat-wrp ul li:last-child
{
  border-bottom: none;
}
.choos-cat-wrp h5
{
  padding: 5px;
}
.dis-none
{
  display: none;
}
.login-after .wrap ul li {
  padding: 0px 11px;
  color: #57933b;
}
.login-after .wrap ul li i {
  font-size: 24px;
}
.login-after .wrap ul li .usr-img
{
    width: 27px;
  object-fit: cover;
  border-radius: 50%;
  border: 2px solid #689e4a;
  height: 27px;
}
.notif .dropdown-menu.show
{
      top: 12px !important;
  left: -70px !important;
}
.user-drop .dropdown-menu.show
{
      top: 12px !important;
  left: -70px !important;
}
.login-after .dropdown-select
{
  position: relative;
  right: 27%;
}

.searchTerm {
   width: 100%;
  border: 1px solid #ebebeb;
  border-right: none;
  padding: 5px;
  height: 36px;
  border-radius: 5px 0 0 5px;
  outline: none;
  color: #9a9c9e;
}

.searchTerm:focus{
color: #00B4CC;
}

.searchButton {
width: 40px;
height: 36px;
    border: 1px solid #57933b;
  background: #57933b;
text-align: center;
color: #fff;
border-radius: 0 5px 5px 0;
cursor: pointer;
font-size: 20px;
}

/*Resize the wrap to see the search bar change!*/
.wrap{
  width: 37%;
  position: absolute;
  top: 50%;
  left: 60%;
  transform: translate(-50%, -50%);
}
.dropdown-select {
  background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.25) 0%, rgba(255, 255, 255, 0) 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#40FFFFFF', endColorstr='#00FFFFFF', GradientType=0);
  background-color: #fff;
  border-radius: 6px;
  border: solid 1px #eee;
  /*box-shadow: 0px 2px 5px 0px rgba(155, 155, 155, 0.5);*/
  box-sizing: border-box;
  cursor: pointer;
  display: block;
  float: left;
  font-size: 14px;
  font-weight: normal;
  height: 36px;
  line-height: 40px;
  outline: none;
  padding-left: 18px;
  padding-right: 30px;
  position: relative;
  text-align: left !important;
  transition: all 0.2s ease-in-out;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  white-space: nowrap;
  width: auto;

}

.dropdown-select:focus {
  background-color: #fff;
}

.dropdown-select:hover {
  background-color: #fff;
}

.dropdown-select:active,
.dropdown-select.open {
  background-color: #fff !important;
  border-color: #bbb;
  box-shadow: 0 1px 4px rgba(0, 0, 0, 0.05) inset;
}

.dropdown-select:after {
  height: 0;
  width: 0;
  border-left: 4px solid transparent;
  border-right: 4px solid transparent;
  border-top: 4px solid #777;
  -webkit-transform: origin(50% 20%);
  transform: origin(50% 20%);
  transition: all 0.125s ease-in-out;
  content: '';
  display: block;
  margin-top: -2px;
  pointer-events: none;
  position: absolute;
  right: 10px;
  top: 50%;
}

.dropdown-select.open:after {
  -webkit-transform: rotate(-180deg);
  transform: rotate(-180deg);
}

.dropdown-select.open .list {
  -webkit-transform: scale(1);
  transform: scale(1);
  opacity: 1;
  pointer-events: auto;
}

.dropdown-select.open .option {
  cursor: pointer;
}

.dropdown-select.wide {
  width: 100%;
}

.dropdown-select.wide .list {
  left: 0 !important;
  right: 0 !important;
}

.dropdown-select .list {
  box-sizing: border-box;
  transition: all 0.15s cubic-bezier(0.25, 0, 0.25, 1.75), opacity 0.1s linear;
  -webkit-transform: scale(0.75);
  transform: scale(0.75);
  -webkit-transform-origin: 50% 0;
  transform-origin: 50% 0;
  box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.09);
  background-color: #fff;
  border-radius: 6px;
  margin-top: 4px;
  padding: 3px 0;
  opacity: 0;
  overflow: hidden;
  pointer-events: none;
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 999;
  max-height: 250px;
  overflow: auto;
  border: 1px solid #ddd;
}

.dropdown-select .list:hover .option:not(:hover) {
  background-color: transparent !important;
}
.dropdown-select .dd-search{
overflow:hidden;
display:flex;
align-items:center;
justify-content:center;
margin:0.5rem;
}

.dropdown-select .dd-searchbox{
width:90%;
padding:0.5rem;
border:1px solid #999;
border-color:#999;
border-radius:4px;
outline:none;
}
.dropdown-select .dd-searchbox:focus{
border-color:#12CBC4;
}

.dropdown-select .list ul {
  padding: 0;
}

.dropdown-select .option {
  cursor: default;
  font-weight: 400;
  line-height: 40px;
  outline: none;
  padding-left: 18px;
  padding-right: 29px;
  text-align: left;
  transition: all 0.2s;
  list-style: none;
}

.dropdown-select .option:hover,
.dropdown-select .option:focus {
  background-color: #f6f6f6 !important;
}

.dropdown-select .option.selected {
  font-weight: 600;
  color: #57933b;
}

.dropdown-select .option.selected:focus {
  background: #f6f6f6;
}

.dropdown-select a {
  color: #aaa;
  text-decoration: none;
  transition: all 0.2s ease-in-out;
}

.dropdown-select a:hover {
  color: #666;
}
.main{

max-width:230px;
width:50%;

}
.main-navigation
{
width:57%;
}
.overlay {
position: absolute;
top: 0;
left: 0;
right: 0;
width: 100%;
height: 100%;
}
.overlay-3 {
position: absolute;
top: 0;
left: 0;
right: 0;
width: 100%;
height: 100%;
background: #483B33;
opacity: 0.5;
}
.overlay-bg {
background: rgb(133 110 63 / 70%);
opacity: 0.5;
}
.overlay-bg-dark {
background: #483B33000;
opacity: 0.5;
z-index: 2;
}
.overlay-2 {
position: absolute;
top: 0;
left: 0;
right: 0;
width: 100%;
}
.transform-center {
position: absolute;
top: 50%;
left: 0;
right: 0;
transform: translate(0%, -50%);
z-index: 1;
}
.image-fit {
width: 100%;
height: 100%;
object-fit: cover;
object-position: center;
}
[class^="flaticon-"]:before,
[class*=" flaticon-"]:before {
font-size: inherit;
margin: 0;
}
.swiper-button-next,
.swiper-button-prev {
box-shadow: 0 2px 14px 0px rgba(0, 0, 0, 0.1);
width: 30px;
height: 30px;
background: #fff;
border-radius: 50%;
top: 52%;
transform: translate(0%, -48%);
}
.swiper-button-next:after,
.swiper-button-prev:after {
font-size: 14px;
font-weight: 900;
color: #65a15a;
}
.swiper-button-next {
right: 10px;
}
.swiper-button-prev {
left: 10px;
}
.swiper-button-disabled {
display: none;
}
.back-btn button {
box-shadow: 0 2px 14px 0px rgba(0, 0, 0, 0.1);
width: 36px;
height: 36px;
background: #fff;
font-size: 16px;
font-weight: 900;
border-radius: 50%;
text-align: center;
display: flex;
align-items: center;
justify-content: center;
}
.u-line {
border-bottom: 1px solid rgba(67, 41, 163, .2);
}
.banner-adv {
position: relative;
height: 70px;
background: #65a15a;
width: 100%;
overflow: hidden;
}
.banner-adv .text {
text-align: center;
position: absolute;
top: 50%;
left: 15px;
right: 15px;
transform: translateY(-50%);
font-size: 18px;
font-weight: 700;
color: #fff;
text-decoration: underline;
}
.banner-adv2 .close-banner,
.banner-adv .close-banner {
cursor: pointer;
position: absolute;
right: 35px;
top: 50%;
transform: translateY(-50%);
width: 40px;
height: 40px;
display: block;
z-index: 9;
color: #fff;
}
.banner-adv2 .close-banner:before,
.banner-adv2 .close-banner:after,
.banner-adv .close-banner:before,
.banner-adv .close-banner:after {
border-bottom: 2px solid;
content: "";
position: absolute;
left: 12px;
top: 19px;
width: 15px;
}
.banner-adv2 .close-banner:before,
.banner-adv .close-banner:before {
transform: rotate(-45deg);
}
.banner-adv2 .close-banner:after,
.banner-adv .close-banner:after {
transform: rotate(45deg);
}
.banner-adv2 .close-banner {
display: none;
}
.banner-adv2 {
position: relative;
background: #fff;
width: 100%;
overflow: hidden;
}
.banner-adv2>img {
width: 100%;
height: 100%;
object-fit: cover;
object-position: center;
}
.banner-adv2 .text {
text-align: center;
position: absolute;
top: 50%;
left: 15px;
right: 15px;
transform: translateY(-50%);
font-size: 18px;
font-weight: 500;
color: #fff;
display: flex;
align-items: center;
justify-content: center;
z-index: 1;
}
.banner-adv2 .text img {
margin: 0 25px;
}
#scrollstyle-4::-webkit-scrollbar-track {
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
background-color: #F5F5F5;
}
#scrollstyle-4::-webkit-scrollbar {
width: 6px;
background-color: #F5F5F5;
}
#scrollstyle-4::-webkit-scrollbar-thumb {
background-color: #65a15a;
}
.main-box {
box-shadow: 0 0 0 1px rgba(67, 41, 163, .08), 0 1px 5px 0 rgba(67, 41, 163, .08);
border-radius: 3px;
background: #fff;
}
.section-header {
margin: 0 auto;
max-width: 660px;
padding-bottom: 30px;
text-align: center;
}
.section-header-left {
margin: 0;
text-align: left;
max-width: 100%;
padding-bottom: 30px;
}
.section-header-right {
margin: 0;
text-align: right;
max-width: 100%;
padding-bottom: 30px;
}
.section-header-style-2 .header-title,
.section-header-left .header-title,
.section-header-right .header-title,
.section-header .header-title {
font-size: 30px;
font-weight: 600;
}
.section-header-style-2 {
margin: 0 auto;
max-width: 660px;
padding-bottom: 40px;
text-align: center;
}
.section-header-style-2 .sub-title {
text-transform: uppercase;
font-size: 18px;
margin-bottom: 10px;
}
/*======================
1.1 Typography
========================*/

h1,
h2,
h3,
h4,
h5,
h6 {
margin: 0 0 20px;
font-family: 'Playfair Display', serif;
font-weight: 500;
color: #483B33000de;
}
h1 {
font-size: 3.5vw;
line-height: normal;
}
h2 {
font-size: 30px;
}
h3 {
font-size: 28px;
}
h4 {
font-size: 26px;
}
h5 {
font-size: 18px;
}
h6 {
font-size: 16px;
}
p {
font-size: 14px;
line-height: 1.8;
margin-bottom: 10px;
font-family: 'Libre Franklin', sans-serif;
}
a {
color: #65a15a;
text-decoration: none;
-webkit-transition: all .3s ease-in-out 0s;
-o-transition: all .3s ease-in-out 0s;
transition: all .3s ease-in-out 0s;
}
a:focus,
a:hover {
color: #65a15a;
text-decoration: none;
outline: 0;
}
dl,
ol,
ul {
margin-top: 0;
margin-bottom: 0;
padding: 0;
}
ul li,
ol li {
margin: 0px;
padding: 0px;
position: relative;
list-style: none;
}
blockquote {
background-color: #f4f4f4;
position: relative;
padding: 3rem;
margin: 2rem 0;
border: #4329a333 solid 1px;
}
blockquote p {
font-size: 32px;
line-height: 45px;
font-style: italic;
margin: 0;
word-break: break-word;
}
blockquote h6 {
color: #483B33;
font-weight: 400;
text-transform: uppercase;
font-size: 16px;
}
img {
max-width: 100%;
width: auto;
height: auto;
border-radius: 3px;
transition: 0.5s;
}
iframe {
border: none;
width: 100%;
}
table th,
table td {
border: 1px solid #ccc;
padding: 15px;
}
table {
border: 1px solid #ccc;
padding: 15px;
}
.fs-12 {
font-size: 12px;
}
.fs-14 {
font-size: 14px;
}
.fs-16 {
font-size: 16px;
}
.fs-18 {
font-size: 18px;
}
.fs-20 {
font-size: 20px;
}
.fs-40 {
font-size: 40px;
}
.fs-50 {
font-size: 50px;
}
.fs-60 {
font-size: 60px;
}
.fw-100 {
font-weight: 100;
}
.fw-400 {
font-weight: 400;
}
.fw-500 {
font-weight: 500;
}
.fw-600 {
font-weight: 600;
}
.fw-700 {
font-weight: 900;
}
.title {
display: flex;
justify-content: space-between;
align-items: center;
flex-wrap: wrap;
}
.title-2 {
display: flex;
align-items: baseline;
}
.title-2 small {
margin-left: 30px;
}
/*pagination*/

.custom-pagination {
padding-top: 40px;
display: flex;
align-items: center;
justify-content: center;
}
.custom-pagination .page-link {
padding: 10px 20px;
color: #65a15a;
}
.custom-pagination .page-item .page-link:hover,
.custom-pagination .page-item.active .page-link {
background: #65a15a;
color: #fff;
border-color: #65a15a;
}
/*======================
1.2 Space margins and padding
========================*/

.no-margin {
margin: 0;
}
.no-padding {
padding: 0;
}
.full-width {
width: 100%;
}
.full-height {
height: 100%;
}
.browse-cat.section-padding {
padding: 20px 0 !important;
}
.section-padding {
padding: 80px 0;
}
.section-padding-top {
padding-top: 80px;
}
.section-padding-bottom {
padding-bottom: 80px;
}
.padding-10 {
padding: 10px;
}
.padding-tb-10 {
padding: 10px 0;
}
.padding-15 {
padding: 15px;
}
.padding-20 {
padding: 20px;
}
.secnd-sec
{

  background: #689e4a;
  border-bottom: 5px solid #b1de4e;
}
.nav-pills .nav-link.active, .nav-pills .show > .nav-link {
  color: #fff;
  background-color: #57933b;
}
.imgupload{
color:#1E2832;
padding-top:40px;
font-size:7em;
}
#namefile{
color:black;
}

/*these two are set to not display at start*/
.imgupload.ok{
display:none;
color:green;
}
.imgupload.stop{
display:none;
color:red;
}


/*this sets the actual file input to overlay our button*/
#fileup{
opacity: 0;
-moz-opacity: 0;
filter: progid:DXImageTransform.Microsoft.Alpha(opacity=0);
  width: 200px;
  cursor: pointer;
  position: absolute;
  left: 29%;
  transform: translateX(-50%);
  bottom: 20px;
  height: 50px;
}
.btn-primary {
  color: #fff;
  background-color: #689e4a;
  border-color: #689e4a;
}

/*switch between input and not active input*/
#submitbtn{
padding:5px 50px;
display:none;
}
#fakebtn{
padding:5px 40px;
}


/*www.emilianocostanzo.com*/
#sign{
color:#1E2832;
position:fixed;
right:10px;
bottom:10px;
text-shadow:0px 0px 0px #1E2832;
transition:all.3s;
}
#sign:hover{
color:#1E2832;
text-shadow:0px 0px 5px #1E2832;
}
.prof-edit-img
{
width: 300px;
  height:auto;
}
.secnd-sec .navbar-expand-lg .navbar-nav .nav-link
{
color: white;
    font-weight: 600;
}
.edit-prf-plant-wrap
{
padding: 140px 40px;
}
.secnd-sec .nav-item
{
padding: 0px 3px;
}
.location-mob
{
display: none;
}
.flex-container {
  height: 35%;
  width: 92%;
  display: flex;
  justify-content: center;
  align-items: center;
}




/* Pop-up buttons end */
/* Pop-up second layer begin */

.pop-up-overlay {
 position: fixed;
  display:block;
  justify-content: center;
  align-items: center;
  color: #191919;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgb(255 255 255);
  transition: opacity 500ms;
  visibility: hidden;
  color: visible;
  opacity: 1;
  height: 120vh;
}

.pop-up-overlay:target {
  visibility: visible;
  opacity: 1;
}

.pop-up {
  text-align: center;
}

/*.pop-up p {
  margin: 5% 10% 0 10%;
}*/

.pop-up a {
  position: absolute;
  color: #73a84b;
  text-decoration: none;
  font-size: 200%;
  top: 3.5%;
  right: 5%;
}

/* Pop-up second layer end */
/* NavBar */
.sidenav {
max-width: 380px;
width: 85%;
overflow-x: hidden;
overflow-y: hidden;
height: 100%;
position: fixed;
z-index: 100;
top: 0;
left: 0;
background-color: white;
transform-origin: left center;
transform: translateX(-380px);
}

.sidenavHeader {
color: white;
font-weight: bold;
    background-color: rgb(42 115 0);
padding: 10px 0px 10px 30px;
font-size: 23px;
}

.sidenavContentHeader {
margin-top: 5px;
padding: 15px 0px 15px 25px;
font-size: 20px;
font-weight: bold;
}

.sidenavContent {
padding: 15px 0px 15px 25px;
}

.sidenavContent:hover {
background-color: #eaeded;
}

hr {
height: 1px;
border: 0;
color: gray;
background-color: gray;
margin: 15px auto 10px auto;
}

.sidenavRow {
display: flex;
width: 100%;
justify-content: space-between;
padding: 15px 25px 15px 25px;
}

.sidenavRow:hover {
background-color: #eaeded;
}

.sidenavRow:hover i {
color: #111111 !important;
}

#closeBtn {
display: none;
position: absolute;
top: 0;
left: 0;
margin-left: 390px;
color: white;
font-size: 50px;
cursor: pointer;
z-index: 75;
transform: translateY(-5px);
transition: visibility 0.5s;
}

/*a,
a:link,
a:visited,
a:hover,
a:active {
text-decoration: none;
color: black;
}*/

/* animation */
@keyframes collapse {
0% {
  z-index: 100;
  transform: translateX(0px);
}
100% {
  transform: translateX(-380px);
}
}

@keyframes expand {
0% {
  z-index: 100;
  transform: translateX(-380px);
}
100% {
  transform: translateX(0px);
}
}

@keyframes show {
0% {
  opacity: 0;
}
100% {
  opacity: 1;
}
}

@keyframes hide {
0% {
  opacity: 1;
}
100% {
  opacity: 0;
}
}

/* Overlay */
#overlay {
display: none;
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
z-index: 50;
background-color: rgba(0, 0, 0, 0.7);
}
.flt
{
display: flex;
justify-content: center;
margin: 0 auto;
}

/* Dropdown */
.sidenavContainer hr {
width: 85%;
}

.sidenavRowDropdown {
display: flex;
width: 100%;
justify-content: start;
align-items: center;
padding: 15px 25px 15px 25px;
cursor: pointer;
}

.sidenavRowDropdown:hover {
background-color: #eaeded;
}

.sidenavRowDropdown:hover i {
color: #111111 !important;
}

.sidenavContainer {
display: none;
height: 0px;
opacity: 0;
transform: scaleY(0);
transform-origin: center top;
}

@keyframes expandDropDown {
0% {
  transform: scaleY(0);
  opacity: 0;
}
100% {
  transform: scaleY(1);
  opacity: 1;
}
}

@keyframes collapseDropDown {
0% {
  transform: scaleY(1);
  opacity: 1;
}
100% {
  transform: scaleY(0);
  opacity: 0;
}
}

/* Container part */
#main-container {
position: absolute;
width: 100%;
height: 100%;
overflow-y: scroll;
}

@keyframes mainAway {
0% {
  transform: translateX(0px);
}
100% {
  transform: translateX(-380px);
}
}

@keyframes mainBack {
0% {
  transform: translateX(-380px);
}
100% {
  transform: translateX(0px);
}
}

#sub-container {
position: absolute;
width: 100%;
height: 100%;
overflow-y: scroll;
background-color: white;
transform: translateX(380px);
}

@keyframes subBack {
0% {
  transform: translateX(380px);
}
100% {
  transform: translateX(0px);
}
}

@keyframes subPush {
0% {
  transform: translateX(0px);
}
100% {
  transform: translateX(380px);
}
}

#mainMenu {
margin-top: 5px;
padding: 15px 0px 15px 25px;
font-weight: bold;
}

#mainMenu:hover {
background-color: #eaeded;
cursor: pointer;
}
.nav1
{
display: none;
}
.log1
{
display: none;
}
.log2
{
display: block;
}

.float{
position: fixed;
  width: 95px;
  height: 40px;
  bottom: 36px;
  right: 40px;
  background-color: #b1de4e;
  color: #FFF !important;
  border-radius: 58px;
  text-align: center;
  box-shadow: 2px 2px 3px #999;
  z-index: 99999999;
  background: linear-gradient(to right, #689e4a 0%, #b1de4e 100%);
}

.my-float{
margin-top:13px;
}
.secnd-sec .navbar
{
background: #689e4a;
     padding: 5px 0px;
}
.main-sec {
/*height: 53px;*/
clear: both;
width: 100%;
}
.mb-xl-20 {
margin-bottom: 20px;
}
.pb-xl-20 {
padding-bottom: 20px;
}
.mb-20 {
margin-bottom: 20px;
}
.mb-30 {
margin-bottom: 30px;
}
.mt-10 {
margin-top: 10px;
}
.mb-23 {
margin-bottom: 23px;
}
.mt-20 {
margin-top: 20px;
}
.mt-25 {
margin-top: 25px;
}
.mt-30 {
margin-top: 30px;
}
.center-block {
margin: 0 auto;
}
/*==================
1.3. Forms
====================*/

.form-control:focus {
color: #495057;
background-color: #fff;
border-color: #495057bd;
outline: 0;
box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0);
}
input[type=text]::placeholder {
color: #483B33000de;
font-size: 14px;
}
.form-control-submit {
border: 1px solid #8f8fa1;
border-radius: 4px;
padding: 10px 16px;
height: 100%;
font-size: 13px;
}
label.custom-checkbox input,
label.custom-radio input {
position: absolute;
opacity: 0;
cursor: pointer;
height: 0;
width: 0;
}
label.custom-checkbox,
label.custom-radio {
display: block;
position: relative;
padding-left: 25px;
margin-bottom: 10px;
cursor: pointer;
user-select: none;
line-height: normal;
font-size: 14px;
}
label.custom-checkbox:last-child,
label.custom-radio:last-child {
margin-bottom: 10px;
}
/* Create a custom checkbox */

label.custom-checkbox .checkmark,
label.custom-radio .radio {
position: absolute;
top: 0;
left: 0;
border: 1px solid #d4d4db;
width: 20px;
height: 20px;
background-color: #fff;
border-radius: 4px;
}
/* On mouse-over, add a grey background color */

label.custom-checkbox:hover input ~ .checkmark,
label.custom-radio input:checked ~ .radio {
background-color: #fff;
border: 1px solid #65a15a;
}
/* When the checkbox is checked, add a blue background */

label.custom-checkbox input:checked ~ .checkmark,
label.custom-radio input:checked ~ .radio {
background-color: #65a15a;
border: 1px solid #65a15a;
}
/* Create the checkmark/indicator (hidden when not checked) */

.checkmark:after,
.radio:after {
content: "";
position: absolute;
display: none;
}
/* Show the checkmark when checked */

label.custom-checkbox input:checked ~ .checkmark:after,
label.custom-radio input:checked ~ .radio:after{
display: block;
}
/* Style the checkmark/indicator */

label.custom-checkbox .checkmark:after {
left: 6px;
top: 4px;
width: 5px;
height: 9px;
border: solid #fff;
border-width: 0 2px 2px 0;
transform: rotate(45deg);
}
label.custom-radio .radio:after {
  left: 4px;
  top: 4px;
  width: 10px;
  height: 10px;
  border: 5px solid #fff;
  transform: rotate(90deg);
  display: block;
  border-radius: 4px;
}
/*==================
1.4. Buttons
====================*/

.btn-text {
font-size: 16px;
position: relative;
pointer-events: visible;
text-transform: uppercase;
}
.btn-text:before {
bottom: -4px;
left: 0;
width: 100%;
height: 2px;
content: '';
position: absolute;
background-color: #483B33;
}
.btn.btn-text-white:hover{
color: #ffffff;
}
.btn.btn-text-white:hover:before{
background-color: #ffffff;
}
.btn-text-white{
color: #65a15a;
}
.btn-text:hover {
color: #65a15a;
}
.btn-text-white::before,
.btn-text:hover:before {
background-color: #65a15a;
}
.btn-solid {
      font-family: 'Maven Pro', sans-serif;
  padding: 0.4375rem 1.875rem 0.4375rem;
  display: inline-block;
  font-size: 0.875rem;
  color: #57933b;
  letter-spacing: 0.5px;
  font-weight: 500;
  text-transform: uppercase;
  text-align: center;
  line-height: 1.75rem;
  position: relative;
  white-space: nowrap;
  z-index: 1;
  background: #ffffff;
  transition: all .5s ease;
  border-radius: 4px;
}
a.btn-solid:hover{
color: #ffffff;
}
.btn-big {
  padding: 0.6875rem 1.875rem 0.625rem;
  font-size: 1rem;
}
[class*="btn"].with-line {
  padding-right: 30px;
}
[class*="btn"].with-line span, .read-more {
  position: relative;
  padding-right: 25px;
  transition: all .5s ease;
}
[class*="btn"] span i, .read-more:after {
  position: absolute;
  right: 0;
  top: 2px;
  transition: all .5s ease;
}
.btn-big i {
  font-size: 0.9375rem;
}
[class*="btn"] i {
  font-size: 0.8125rem;
  display: inline-block;
  vertical-align: middle;
}
[class*="btn"].with-line:hover span,
.read-more:hover {
  padding-right: 0;
  padding-left: 25px;
}
[class*="btn"].with-line:hover span i,
.read-more:hover:after {
  right: calc(100% - 15px);
}
/* Exta buttons */
.btn-first {
display: inline-block;
text-align: center;
vertical-align: middle;
user-select: none;
background-color: transparent;
border: 1px solid transparent;
padding: 6px 16px 5px;
font-size: 13px;
line-height: 1.595;
border-radius: .25rem;
transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
}
.white-btn {
border-color: rgba(67, 41, 163, .2);
background: #fff;
}
.white-btn:hover,
.white-btn:focus {
border-color: #65a15a;
}
.green-btn {
color: #fff;
background-color: #28a745;
border-color: #28a745;
}
.green-btn:hover,
.green-btn:focus {
border-color: #65a15a;
background: #fff;
color: #65a15a;
}
.paypal-btn {
color: #fff;
background-color: #ffc439;
border-color: #ffc439;
}
.paypal-btn:hover,
.paypal-btn:focus {
border-color: #ffc439;
background: #ffc439;
color: #fff;
}
.category-btn {
display: inline-block;
text-align: center;
vertical-align: middle;
user-select: none;
background-color: #ffffff94;
border: 1px solid transparent;
padding: 8px 16px;
font-size: 16px;
line-height: 1.595;
border-radius: .25rem;
transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
color: #483B33;
font-weight: 600;
}
.category-btn:hover,
.category-btn:focus {
border-color: #65a15a;
background: #65a15a;
color: #fff;
}
.btn-second,
a.btn-second {
display: inline-block;
height: 50px;
min-width: 150px;
background: #65a15a;
color: #fff;
text-align: center;
line-height: 50px;
font-weight: 600;
border-radius: 4px;
z-index: 1;
position: relative;
overflow: hidden;
padding: 0 40px;
vertical-align: middle;
font-size: 16px;
}
a.btn-second:hover:before,
.btn-second:hover:before {
top: 0!important;
}
a.btn-second:hover:before,
.btn-second:hover:before {
content: "";
position: absolute;
left: 0;
top: -100%;
height: 100%;
width: 100%;
background: #483B33;
z-index: -1;
-webkit-transition: all .4s ease-in-out 0s;
-o-transition: all .4s ease-in-out 0s;
transition: all .4s ease-in-out 0s;
}
.btn-second img,
.btn-second-2 img {
float: left;
left: -8px;
position: relative;
width: 22px;
height: 22px;
}
.btn-submit {
color: #fff;
background: #57933b;
border-color:#57933b;
}
.btn-submit:hover,
.btn-submit:focus {
border-color: #65a15a;
background-color: #65a15a;
color: #fff;
}
.btn-facebook {
color: #fff;
background: #3b5998;
border-color: #3b5998;
}
.btn-facebook:hover,
.btn-facebook:focus {
border-color: #2d4373;
background: #2d4373;
color: #fff;
}
.btn-google {
color: #fff;
background: #4285f4;
border-color: #4285f4;
}
.btn-google:focus,
.btn-google:hover {
border-color: #1266f1;
background: #1266f1;
color: #fff;
}
span.circle-tag {
height: 36px;
width: 36px;
background: #fff;
border-radius: 50%;
font-size: 16px;
display: flex;
align-items: center;
justify-content: center;
cursor: pointer;
}
span.square-tag>img,
span.rectangle-tag>img,
span.circle-tag>img {
padding: 8px;
}
span.rectangle-tag {
height: 30px;
width: auto;
border-radius: 3px;
font-size: 12px;
margin-right: 0;
display: flex;
align-items: center;
justify-content: center;
cursor: pointer;
letter-spacing: 2px;
padding: 0 8px;
}
span.rectangle-tag+span.rectangle-tag {
margin: 0 2px;
}
span.square-tag {
height: 35px;
width: 40px;
background: transparent;
border-radius: 3px;
font-size: 16px;
margin-right: 0;
display: flex;
align-items: center;
justify-content: center;
cursor: pointer;
}
span.share-tag {
height: 36px;
width: 36px;
background: #fff;
border-radius: 50%;
font-size: 16px;
display: flex;
align-items: center;
justify-content: center;
cursor: pointer;
}
span.deal-tag {
border-radius: 3px;
padding: 4px 10px;
background-color: #fff;
box-shadow: 0 1px 5px 0 rgba(66, 41, 163, .08), 0 0 0 1px rgba(66, 41, 163, .08);
}
span.add-product {
border-radius: 50%;
width: 25px;
height: 25px;
border: 1px solid #65a15a;
background-color: #fff;
color: #65a15a;
box-shadow: 0 1px 5px 0 rgba(66, 41, 163, .08), 0 0 0 1px rgba(66, 41, 163, .08);
display: flex;
align-items: center;
justify-content: center;
cursor: pointer;
}
span.add-product i {
font-size: 12px;
}
span.type-tag {
padding: 3px 15px;
position: absolute;
bottom: 0;
border-radius: 5px 5px 0px 0px;
cursor: pointer;
}

/*==================
1.5. Section-Colors-&-Backgrounds
====================*/

.bg-light-white {
background-color: #f4f4f4;
}
.bg-light-theme {
background-color: #fbfbfc;
}
.bg-theme-primary {
background-color: #f8f7f5;
}
.bg-light-green {
background-color:#d8dbd7;
}
.bg-red {
background-color: #ff0000;
}
.bg-gradient-red {
background-image: linear-gradient(to right, #f20000, #a20000);
}
.bg-yellow {
background-color: #ffc000;
}
.bg-green {
background-color: #4aa110;
}
.bg-gradient-green {
background-image: linear-gradient(to bottom, #499a14, #476d2d);
}
.bg-gradient-orange {
background-image: linear-gradient(to bottom, #c55a11, #ed7d31);
}
.bg-black {
background-color: black;
}
/*Colors*/

.text-light-black {
color: #483B33000de;
}
.text-orange {
color: #fb6100;
}
.text-custom-white {
color: #ffffff;
}
.text-light-white {
color: #6b6b83;
}
.text-dark-red {
color: #a7f34f;
}
.text-dark-white {
color: #483B3300059;
}
.text-yellow {
color: #fcb71b;
}
.text-light-green {
color: #65a15a;
}
.text-success {
color: #13aa37;
}
/*======================
1.6 Modal & Popups
========================*/

#offer .modal-dialog {
max-width: 500px;
margin: 1.75rem auto;
}
.modal.show .modal-dialog {
-webkit-transform: none;
transform: none;
}
#offer.modal {
height: auto;
top: 50%;
left: 0%;
right: 0;
transform: translate(0%, -50%);
}
.offer-content {
text-align: center;
background-repeat: no-repeat;
width: 100%;
padding: 20px 10px 10px;
position: relative;
min-height: 100%;
background: linear-gradient(0deg, #6a1d89a8, #6a1d89a8), url('../img/offer.html');
background-size: cover;
}
#offer .modal-header .close {
position: absolute;
right: 0;
padding: 20px;
margin: 0;
}
.offer-content h2 {
text-transform: uppercase;
font-size: 50px;
}
.offer-content h2 small {
display: block;
font-size: 30px;
text-transform: lowercase;
}
#address-box .modal-content,
#search-box .modal-content {
min-height: 85vh;
background: #fbfbfc;
}
#address-box .modal-header,
#search-box .modal-header {
display: block;
box-shadow: 0 0 0 1px rgba(67, 41, 163, .08), 0 1px 5px 0 rgba(67, 41, 163, .08);
}
#address-box .modal-header .close,
#search-box .modal-header .close {
margin: 0;
display: block;
width: 100%;
text-align: left;
color: #65a15a;
opacity: 1;
padding: 0;
font-size: 35px;
font-weight: 200;
line-height: 1;
margin-bottom: 20px;
}
#address-box .modal-title,
#search-box .modal-title {
font-size: 20px;
}
#address-box .modal-body,
#search-box .modal-body {
padding: 1rem 0;
}
/*======================
2. Homepages
========================*/

/*Navigation*/
.secnd-sec .navbar-expand-lg .navbar-nav .nav-link:hover
{
color: black;
}
.searchButton:hover
{
background-color: black;
border:black;
}
.header {
position: relative;
left: 0;
z-index: 10;
display: flex;
width: 100%;
height: 70px;
transform: translateZ(0);
transition: all .2s ease;
/*box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.01), 0 1px 8px 0 rgba(0, 0, 0, 0.25);*/
background-color: #fff;
}
.header .navigation {
display: flex;
align-items: center;
justify-content: space-between;
    width: 100%;
}
.browse-cat
{
  background-color: #57933b;
  color: white;
      background-image: url(../img/grb.jpg);
}
.float
{
  display: none;
}
.custom-btn {
/*padding: 10px 25px;*/
font-family: "Roboto", sans-serif;
font-weight: 500;
background: transparent;
outline: none !important;
cursor: pointer;
transition: all 0.3s ease;
position: relative;
display: inline-block;
border-radius: 5px;
}
.btn-14 {

z-index: 1;

}
.btn-14:after {
position: absolute;
content: "";
width: 0;
height: 100%;
top: 0;
right: 0;
z-index: -1;
background: #000;
transition: all 0.3s ease;
border-radius: 5px;
}
.btn-14:hover {
color: #fff;
}
.btn-14:hover:after {
left: 0;
width: 100%;
}
.btn-14:active {
top: 2px;
}
.header .navigation .logo {
    z-index: 10;
  width: 14%;
  position: relative;
  bottom: 6px;
  margin-top: 10px;
}
.main-navigation>nav>.main-menu {
display: flex;
align-items: center;
}
.main-navigation>nav>.main-menu>.menu-item {
margin: 0 10px;
padding: 15px 0;
}
.main-navigation>nav>.main-menu>.menu-item>a {
font-weight: 100;
font-size: 14px;
padding: 0px 10px;
text-transform: uppercase;
}
.main-navigation>nav>.main-menu>.menu-item>a:after {
position: absolute;
left: 0;
right: 0;
margin: auto;
top: 2.5em;
bottom: 0;
width: 20%;
height: 2px;
background-color: #65a15a;
content: "";
z-index: 1;
opacity: 0;
transition: all 0.3s
}
.main-navigation>nav>.main-menu>.menu-item:hover>a,
.main-navigation>nav>.main-menu>.menu-item.active>a {
color: #65a15a;
}
.main-navigation>nav>.main-menu>.menu-item.active>a:after,
.main-navigation>nav>.main-menu>.menu-item:hover>a:after {
opacity: 1;
width: calc(100%);
}
.menu-item-has-children>a>.arrow:after {
display: inline-block;
margin-left: .55em;
content: "\e688";
font-family: 'Pe-icon-7-stroke';
font-weight: 900;
}
.menu-item-has-children>.sub-menu {
position: absolute;
top: 100%;
left: 0;
right: 0;
transform: translateY(-10px);
border-bottom: solid 2px #65a15a;
box-shadow: 0 2px 2px 1px rgba(0, 0, 0, .15);
background: #fff;
visibility: hidden;
opacity: 0;
transition: 0.3s;
width: 250px;
}
.menu-item-has-children:hover>.sub-menu {
border-top: 1px solid rgba(67, 41, 163, .2);
opacity: 1;
visibility: visible;
z-index: 999;
transform: translateY(0px);
transition: 0.3s;
}
.menu-item-has-children.nav-postion:hover>.sub-menu {
top: 0;
transform: translateY(-100%);
}
.menu-item-has-children>.sub-menu>li.menu-item {
padding: 0 10px;
}
.menu-item-has-children.nav-postion>.sub-menu>li.menu-item-has-children>.sub-menu {
top: inherit;
}
.menu-item-has-children>.sub-menu>li.menu-item>a {
display: block;
padding: 10px;
font-size: 15px;
font-weight: 100;
border-bottom: 1px solid rgba(67, 41, 163, .2);
transition: 0.5s;
white-space: nowrap;
color: #483B33000de;
}
.menu-item-has-children>.sub-menu>li.menu-item:last-child>a {
border: none;
}
.menu-item-has-children>.sub-menu>li.menu-item:hover>a {
padding-left: 25px;
transition: 0.5s;
color: #65a15a;
}
.menu-item-has-children>.sub-menu>li.menu-item-has-children>a>.arrow {
position: absolute;
right: 10px;
transform: rotate(-90deg);
}
.menu-item-has-children>.sub-menu>li.menu-item-has-children>a>.arrow:after {
display: inline-block;
margin-left: 0;
content: "\e688";
font-family: 'Pe-icon-7-stroke';
font-weight: 900;
}
.menu-item-has-children>.sub-menu>li.menu-item-has-children>.sub-menu {
left: 100%;
top: -3%;
}
.header .navigation .right-side-navigation ul {
display: flex;
align-items: center;
}
.header .navigation .right-side-navigation ul li {
margin-left: 20px;
}
.header .navigation .right-side-navigation ul li a {
font-size: 26px;
}
.header .navigation .right-side-navigation ul li.user-details>a {
display: flex;
align-items: center;
}
.header .navigation .right-side-navigation ul li.user-details span {
font-size: 12px;
margin-left: 10px;
    font-size: 12px;
  margin-left: 10px;
  background: #57933b;
  padding: 10px 17px;
  color: white;
  font-weight: 600;
  border-radius: 5px;
}
.main-hed
{
position: fixed;
top: 0px;
left: 0px;
z-index: 9;
width: 100%;
}
.carousel img
{
height:550px;
object-fit: cover;
}
.carousel
{
margin-top: 110px;
}
.header .navigation .right-side-navigation ul li .cart {
width: 18px;
height: 18px;
border-radius: 50%;
background: #65a15a;
color: #fff;
display: flex;
align-items: center;
justify-content: center;
font-size: 10px;
top: 8px;
position: absolute;
right: -8px;
}
.header .navigation .right-side-navigation .hamburger-menu {
display: none;
align-items: center;
cursor: pointer;
}
.header .navigation .right-side-navigation .hamburger-menu .menu-btn {
transition: 0.3s;
}
.header .navigation .right-side-navigation .hamburger-menu .menu-btn span {
background: #65a15a;
height: 2px;
width: 25px;
margin-bottom: 5px;
display: block;
transition: 0.3s;
}
.header .navigation .right-side-navigation .hamburger-menu .menu-btn span:last-child {
margin-bottom: 0;
}
.header .navigation .right-side-navigation .hamburger-menu .menu-btn.active {
position: relative;
top: -4px;
transition: 0.3s;
}
.header .navigation .right-side-navigation .hamburger-menu .menu-btn.active span:first-child {
transform: rotate(45deg);
transition: 0.3s;
position: relative;
top: 7.4px;
background-color: #65a15a;
}
.header .navigation .right-side-navigation .hamburger-menu .menu-btn.active span:nth-child(2) {
display: none;
}
.header .navigation .right-side-navigation .hamburger-menu .menu-btn.active span:last-child {
transform: rotate(-45deg);
transition: 0.3s;
background-color: #65a15a;
}
.video-banner {
  position: relative;
  background-color: black;
  width: 100%;
  height: 100%;
  overflow: hidden;
}
.video-banner video {
  position: absolute;
  top: 50%;
  left: 50%;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  z-index: 0;
  -ms-transform: translateX(-50%) translateY(-50%);
  -moz-transform: translateX(-50%) translateY(-50%);
  -webkit-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
}

.section-block{
max-width: 420px;
margin: 0 auto;
}


/* banner-3 */
.home-3-banner .banner-left {
  position: relative;
}
.home-3-banner .banner-left .video-icon {
  position: absolute;
  top: 50%;
  right: -25px;
  z-index: 3;
}
.home-3-banner .banner-left .video-icon i {
  color: #fff;
  background: #483B33000;
  border-radius: 50%;
  padding: 20px;
  width: 50px;
  height: 50px;
  line-height: 12px;
  text-align: center;
  -webkit-animation: animate2 3s linear infinite;
  animation: animate2 3s linear infinite;
}


/*Categories*/

.browse-cat .categories {
text-align: center;
display: block;
}
.browse-cat .categories span{
  transition: all .2s ease-in-out;
}
.browse-cat .categories:hover span{
color: #65a15a;

}
.browse-cat .categories div > img{
transition: all .2s ease-in-out;
}
.browse-cat .categories:hover div > img{
transform: scale(0.9);
}
.browse-cat .categories .icon {
margin: 0 auto;
text-align: center;
display: flex;
align-items: center;
justify-content: center;
border-radius: 50%;
  width: 83px;
  height: 83px;
}
.swiper-slide .swiper-slide-thumb
{
width: 10% !important;
}
.browse-cat .categories .icon2 {
width: 100%;
height: 100%;
}
.browse-cat .categories .icon i {
font-size: 45px;
}
.browse-cat .categories .icon img {
width: 88%;
  height: 88%;
object-fit: cover;
object-position: center;
border-radius: 50%;
}
.browse-cat .categories .cat-name {
padding: 5px 0;
display: block;
font-size: 13px;
color: white;
  font-weight: 600;
}
.browse-cat a
{
color: white !important;
}
.browse-cat-2 .categories .icon {
position: relative;
}
.browse-cat-2 .categories .icon img {
border-radius: 0;
}
.browse-cat-2 .categories .icon .product-addbtn {
position: absolute;
bottom: 10px;
right: 10px;
}
.browse-cat-2 .categories .icon .product-addbtn span i {
font-size: 12px;
}
/* Categories-2 */
.category-block {
  position: relative;
}
.list-adv2 .category-block {
  margin: 0 -15px 0px;
}
.adv-thumb-link {
  display: block;
  overflow: hidden;
  position: relative;
}
.fade-out-in .adv-thumb-link::before,
.fade-out-in .adv-thumb-link::after,
.fade-in-out .adv-thumb-link::before,
.fade-in-out .adv-thumb-link::after,
.overlay-image .adv-thumb-link::after {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  content: "";
  background: rgba(0, 0, 0, 0.1);
  opacity: 0;
  z-index: 1;
  transition: all 0.5s ease-out 0s;
  -webkit-transition: all 0.5s ease-out 0s;
}
.fade-out-in .adv-thumb-link::before,
.fade-out-in .adv-thumb-link::after,
.fade-in-out .adv-thumb-link::before,
.fade-in-out .adv-thumb-link::after,
.overlay-image .adv-thumb-link::after {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  content: "";
  background: rgba(0, 0, 0, 0.1);
  opacity: 0;
  z-index: 1;
  transition: all 0.5s ease-out 0s;
  -webkit-transition: all 0.5s ease-out 0s;
}
.adv-thumb-link > img {
  display: block;
  width: 100%;
  transition: all 0.5s ease-out 0s;
  -webkit-transition: all 0.5s ease-out 0s;
}
.item-adv2 .banner-info {
  top: auto;
  bottom: 60px;
  padding: 0 15px;
}
.banner-info {
  bottom: 0;
  left: 0;
  margin: auto;
  position: absolute;
  right: 0;
  top: 0;
  z-index: 9;
}
.font-italic {
  font-style: italic;
}
.title30 {
  font-size: 30px;
}
.item-adv2 .banner-info p {
  max-width: 270px;
  margin: 14px auto 22px;
}
.opaci {
  opacity: 0.8;
}
.fade-out-in:hover .adv-thumb-link::before {
  opacity: 1;
  top: 50%;
  bottom: 50%;
}
.fade-out-in:hover .adv-thumb-link::after {
  opacity: 1;
  left: 50%;
  right: 50%;
}
.white-block a.btn-text:hover{
color: #483B33000;
}
.white-block a.btn-text:hover::before{
background-color: #483B33000;
}
/*Recent Order*/

.product-box {
position: relative;
border-radius: 4px;
background: #fff;
box-shadow: 0 0 0 1px rgba(67, 41, 163, .08), 0 1px 5px 0 rgba(67, 41, 163, .08);
margin-bottom: 20px;
}
.product-box-3 {
position: relative;
border-radius: 4px;
background: #fff;
box-shadow: 0 0 0 1px rgba(67, 41, 163, .08), 0 1px 5px 0 rgba(67, 41, 163, .08);
}
.swiper-slide .testimonial-wrapper,
.swiper-slide .product-box-3,
.swiper-slide .product-box {
margin: 4px;
}
.product-box-3:hover,
.product-box:hover {
box-shadow: 0 0 0 1px rgba(182, 140, 47, 0.17), 0 1px 5px 0 rgba(182, 140, 47, 0.12);
}
.product-box-3 .product-img,
.product-box .product-img {
position: relative;
overflow: hidden;
}
.product-box-3 .product-caption,
.product-box .product-caption {
overflow: hidden;
text-overflow: ellipsis;
padding: 15px;
width: 100%;
}
.product-box .product-img a img{
object-fit: scale-down;
transform: scale(0.9);
transition-duration: .4s;
}
.product-box:hover .product-img a img {
  transform: scale(1);
}
.product-box .product-caption .title-box {
display: flex;
align-items: center;
justify-content: space-between;
margin-bottom: 5px;
}
.product-box .product-caption .product-title {
margin-bottom: 0px;
}
.product-box .product-caption p {
font-size: 12px;
}
.product-box .product-caption .product-btn {
margin-top: 10px;
}
.product-box .product-img .product-tags .custom-tag,
.product-box .product-img .product-tags {
display: flex;
align-items: center;
justify-content: start;
}
.product-box .product-img .product-tags>span:first-child {
position: absolute;
top: 10px;
right: 10px;
}
.product-box .product-caption .product-details {
display: flex;
flex-wrap: wrap;
align-items: center;
justify-content: space-between;
}
.product-box .product-caption .product-details span {
display: block;
line-height: normal;
}
.product-box .product-caption .product-footer {
margin-top: 10px;
display: flex;
align-items: center;
justify-content: flex-start;
}
.product-box .product-footer-2 {
display: flex;
align-items: center;
justify-content: space-between;
background: #fbfbfc;
padding: 12px 10px;
}
.product-box .product-rating i {
color: #ffa900;
}
.product-box .product-img .product-action {
position: absolute;
left: 0px;
right: 0;
display: -webkit-box;
display: -webkit-flex;
display: -ms-flexbox;
display: flex;
top: 50%;
-webkit-transform: translateY(-50%);
-ms-transform: translateY(-50%);
transform: translateY(-50%);
-webkit-box-pack: center;
-webkit-justify-content: center;
-ms-flex-pack: center;
justify-content: center;
z-index: 1;
}
.product-box .product-img .product-action i {
font-size: 20px;
border: 1px solid #fff;
padding: 15px;
}
.product-box .product-img .product-action i:hover {
border: 1px solid #fff;
background-color: #fff;
color: #483B33;
}
.product-box .product-img .product-action i {
color: red;
}
.product-box .product-img .product-action a {
margin: 0px 4px 0px 4px;
visibility: hidden;
transition: 0.3s;
}
.product-box .product-img:hover .product-action a {
visibility: visible;
transition: 0.3s;
}
.product-box .product-img .product-badge {
position: absolute;
color: #fff;
top: 0px;
left: 0px;
font-size: 15px;
z-index: 1;
}
.product-box .product-img .product-badge .badge {
background-color: red;
}
.product-box .product-money .text-price {
text-decoration: line-through;
color: gray;
}
.product-box {
-webkit-animation-name: zoomIn;
animation-name: zoomIn;
-webkit-animation-duration: 1s;
animation-duration: 1s;
}
/* Product badge */

.product-label {
background: #57933b;
border-radius: 5px;
color: #fff;
font-size: 12px;
font-weight: 400;
left: 10px;
line-height: 1;
min-width: 46px;
padding: 4px 12px;
position: absolute;
text-align: center;
text-transform: capitalize;
z-index: 3;
}
.product-label span {
display: block;
}
.product-label:nth-child(2) {
top: 40px;
}
.product-label:nth-child(1) {
top: 10px;
}
.product-label.discount {
background-color: #483B33;
}
.product-caption .product-category a {
font-size: 14px;
line-height: 1;
color: #777777;
text-transform: capitalize;
}
/* Cart-hover button */

.cart-hover {
bottom: 0;
left: 0;
right: 0;
position: absolute;
text-align: center;
opacity: 0;
visibility: hidden;
-webkit-transition: 0.4s;
-o-transition: 0.4s;
transition: 0.4s;
}
.product-box:hover .cart-hover {
bottom: 0px;
opacity: 1;
visibility: visible;
}
.btn-cart {
width: 100%;
display: inline-block;
border-radius: 0;
border-color: transparent;
text-transform: capitalize;
background: #65a15a;
color: #fff;
padding: 10px 15px;
}
.btn-cart:hover {
color: #483B33;
}
/* Button Group */

.button-group {
right: 15px;
top: 15px;
position: absolute;
}
.product-box:hover .button-group a {
opacity: 1;
visibility: visible;
-webkit-transform: scale(1);
-ms-transform: scale(1);
transform: scale(1);
}
.button-group a {
width: 38px;
height: 38px;
display: block;
font-size: 18px;
line-height: 42px;
color: #483B33000;
text-align: center;
border-radius: 50%;
margin-bottom: 10px;
background-color: #ece2d1;
-webkit-transform: scale(0.6);
-ms-transform: scale(0.6);
transform: scale(0.6);
-webkit-transition: 0.4s;
-o-transition: 0.4s;
transition: 0.4s;
opacity: 0;
visibility: hidden;
}
.button-group a:hover {
color: #65a15a;
}
/* Hot Details */

.banner-statistics {
position: relative;
overflow: hidden;
}
.banner-statistics img {
  -webkit-transition: 0.3s;
  transition: 0.3s;
}
.banner-statistics:hover img {
  transform: scale(1.1);
}
.banner-statistics::before {
  position: absolute;
  content: "";
  width: 100%;
  height: 100%;
   background: rgb(188 223 168 / 59%);
  top: 0;
  left: 0;
  -webkit-transition: 0.3s;
  transition: 0.3s;
  opacity: 0.8;
  pointer-events: none;
  z-index: 1;
}
.banner-statistics:hover .promo-lines::before,
.banner-statistics:hover .promo-lines::after {
  transform: scale(1);
  -webkit-transform: scale(1);
}
.banner-statistics .promo-lines:before {
  position: absolute;
  top: 20px;
  bottom: 20px;
  left: 10px;
  right: 10px;
  content: "";
  border-top: 1px solid rgb(99, 72, 50);
  border-bottom: 1px solid rgb(194, 153, 88);
  z-index: 1;
  transform: scaleX(0);
  -webkit-transform: scaleX(0);
  transition: all 0.5s ease-out 0s;
  -webkit-transition: all 0.5s ease-out 0s;
}
.banner-statistics .promo-lines:after {
  position: absolute;
  top: 10px;
  bottom: 10px;
  left: 20px;
  right: 20px;
  content: "";
  border-left: 1px solid rgb(194, 153, 88);
  border-right: 1px solid rgb(194, 153, 88);
  z-index: 1;
  transform: scaleY(0);
  -webkit-transform: scaleY(0);
  transition: all 0.5s ease-out 0s;
  -webkit-transition: all 0.5s ease-out 0s;
}
.banner-statistics:hover::before {
  opacity: 1;
  background: rgba(248, 247, 245, 0.28);
}
.banner-content {
left: 55px;
top: 50%;
position: absolute;
pointer-events: none;
-webkit-transform: translateY(-50%);
-ms-transform: translateY(-50%);
transform: translateY(-50%);
z-index: 2;
}
.banner-text1 {
font-size: 15px;
line-height: 1.1;
color: #000000;
text-transform: uppercase;
}
.banner-text2 {
-webkit-transition: 0.4s;
-o-transition: 0.4s;
transition: 0.4s;
}
.banner-text2 span {
display: block;
}


/*our-products*/

.our-product .product-box .product-clearfix .price-old {
font-size: 12px;
color: gray;
text-decoration: line-through;
}
.our-product .product-box .product-clearfix .price-new {
padding: 0 5px;
color: #65a15a;
font-size: 12px;
}
.our-product .product-box .product-links {
position: absolute;
top: 50%;
left: 0;
right: 0;
font-size: 30px;
transform: translateY(-50%);
visibility: hidden;
}
.product-cart {
align-items: center;
}
.our-product .product-box .product-button a {
border: 1px solid #65a15a;
font-size: 14px;
}
.our-product .product-box .product-button {
position: absolute;
left: 0;
right: 0;
bottom: 30px;
visibility: hidden;
transition: 0.1s;
}
.our-product .product-box:hover .product-button {
visibility: visible;
transition: 0.1s;
}
.our-product .product-box .product-links a i {
color: red;
}
.our-product .product-box:hover .product-links {
visibility: visible;
transition: 0.1s;
}
.our-product .product-box .product-badge-1 {
position: absolute;
color: #fff;
top: 12px;
right: 10px;
font-size: 15px;
z-index: 1;
border: 3px;
}
.our-product .product-box .product-badge-1 span {
background-color: #40e240;
}
/*Our products*/

/*featured-product*/

.featured-product {
position: relative;
border-radius: 4px;
background: #fff;
box-shadow: 0 0 0 1px rgba(67, 41, 163, .08), 0 1px 5px 0 rgba(67, 41, 163, .08);
margin: 3px;
}
.featured-product:hover {
box-shadow: 0 0 0 1px rgba(67, 41, 163, .2), 0 1px 5px 0 rgba(67, 41, 163, .2);
}
.featured-product .featured-product-details {
padding: 15px;
display: flex;
}
.featured-product .featured-product-details .pro-logo {
width: 64px;
height: 64px;
overflow: hidden;
flex-shrink: 0;
background-color: #fff;
box-shadow: 0 1px 5px 0 rgba(66, 41, 163, .08), 0 0 0 1px rgba(66, 41, 163, .08);
margin-right: 15px;
}
.featured-product .featured-product-details .pro-title {
max-width: 200px;
}
/*product-box-3*/

.product-box-3 .product-caption ul {
display: flex;
flex-wrap: wrap;
}
.product-box-3 .product-caption ul.food-type li {
padding: 0 7px;
position: relative;
margin-bottom: 10px;
}
.product-box-3 .product-caption ul.food-type li:after {
content: '';
background: #6b6b83;
width: 3px;
height: 3px;
display: block;
border-radius: 50%;
position: absolute;
top: 50%;
right: 0;
transform: translate(0px, -50%);
}
.product-box-3 .product-caption ul.food-type li:first-child {
padding-left: 0;
}
.product-box-3 .product-caption ul.food-type li:last-child:after {
display: none;
}
.product-box-3 .product-caption ul.food-description li {
background-color: #F6F6F6;
padding: 2px 8px;
margin-right: 8px;
}
/*Explore Collection*/

.ex-collection-box {
position: relative;
overflow: hidden;
cursor: pointer;
}
.ex-collection-box:hover img {
transform: scale(1.1);
transition: 0.5s;
}
.ex-collection .category-type a {
position: absolute;
bottom: 0;
margin-bottom: 15px;
margin-left: 21px;
z-index: 1;
}
.ex-collection .ex-content {
position: absolute;
top: 50%;
left: 0;
right: 0;
transform: translate(0%, -50%);
padding: 0 40px;
max-width: 750px;
margin: 0 auto;
word-wrap: break-word;
justify-content: space-between;
color: #fff;
}
.ex-collection .ex-content h4:after {
content: '';
position: absolute;
border-right: 1px solid #483B33;
}
.ex-collection .ex-content p {
font-size: 20px;
font-weight: 500;
}
.ex-collection .ex-content p span {
font-weight: 500;
}
.ex-collection .line {
position: absolute;
width: 55px;
height: 3px;
background: #fff;
top: 26px;
left: 40px;
}
.large-product-box {
position: absolute;
top: 0;
height: 100%;
bottom: 0;
overflow: hidden;
right: 15px;
left: 15px;
}
.large-product-box img {
height: 100%;
object-position: center;
object-fit: cover;
}
.large-product-box .category-type a {
left: 15px;
width: auto;
right: 15px;
margin-bottom: 35px;
}
/*Page Banner*/

.banner-1 {
height: 700px;
width: 100%;
}
.banner-1 img {
width: 100%;
height: 100%;
object-fit: cover;
object-position: center;
}
.banner-1 .content-wrapper {
box-shadow: 0 0 0 1px rgba(67, 41, 163, .08), 0 1px 5px 0 rgba(67, 41, 163, .08);
border-radius: 3px;
}
.banner-1 .content-wrapper .content-box .input-group {
margin: 0 -8px;
}
.banner-1 .content-wrapper .content-box .input-group-prepend {
height: 48px;
min-width: 44px;
flex-basis: 44px;
border: 1px solid #8f8fa1;
border-left: 0;
border-radius: 0px 4px 4px 0;
display: none;
}
.banner-1 .content-wrapper .content-box .input-group-prepend .input-group-text {
line-height: 1.5;
font-size: 20px;
background: transparent;
border: none;
}
.banner-1 .content-wrapper .content-box .input-group .input-group2 {
display: flex;
}
.banner-1 .content-wrapper .content-box .input-group .input-group2,
.banner-1 .content-wrapper .content-box .input-group-append {
padding: 0 8px;
}
.banner-1 .right-side-content h1 {
font-size: 60px;
line-height: 1.2;
}
/*Advertisement Slider*/

.advertisement-slider {
height: 100%;
}
.advertisement-slider .swiper-wrapper .swiper-slide .large-product-box {
position: relative;
top: 0;
right: 0;
left: 0;
}
.advertisement-slider .swiper-wrapper .swiper-slide .large-product-box .content-wrapper {
z-index: 1;
position: absolute;
bottom: 20px;
}
.advertisement-slider .swiper-wrapper .swiper-slide .large-product-box .tag-box {
position: absolute;
top: 20px;
z-index: 1;
}
.advertisement-banner {
background-image: url("../img/innerbanner.jpg");
background-position: center;
background-repeat: no-repeat;
background-attachment: fixed;
position: relative;
}
.advertisement-banner-1:before {
content: "";
position: absolute;
height: 100%;
width: 100%;
display: block;
top: 0;
left: 0;
background: linear-gradient(to right, rgb(87 147 59 / 84%) 20%, rgb(79 75 75 / 61%) 50%, rgba(250, 250, 250, 0.1) 80%, rgba(250, 250, 250, 0) 100%);
}
.advertisement-banner:before {
content: '';
position: absolute;
width: 100%;
height: 100%;
background-color: #483B33;
top: 0;
left: 0;
bottom: 0;
top: 0;
opacity: 0.5;
}
.advertisement-banner .advertisement-text {
text-align: center;
color: #fff;
}
.advertisement-banner p {
max-width: 650px;
margin: 0 auto;
}
.advertisement-banner-1 {
background-image: url("../img/innerbanner2.jpg");
background-position: top;
background-repeat: no-repeat;
background-attachment: scroll;
position: relative;
}
.advertisement-banner-1 .advertisement-text-1 {
color: #fff;
max-width: 550px;
}
.advertisement-banner-1 .advertisement-text-1 .sub-head {
font-size: 18px;
color: #ffffff;
}
.advertisement-banner-1 .ad-count {
display: flex;
justify-content: end;
}
.advertisement-banner-1 .advertisement-text-1 .heading {
font-size: 48px;
}

/*Blog Section*/

.our-blog .blog-box {
display: flex;
box-shadow: 0 0 0 1px rgba(67, 41, 163, .08), 0 1px 5px 0 rgba(67, 41, 163, .08);
border-radius: 3px;
background: #fff;
}
.our-blog .blog-box .post {
flex: 0 0 66.6666%;
max-width: 66.6666%;
}
.our-blog .blog-box .side-blog {
flex: 0 0 33.3334%;
max-width: 33.3334%;
}
.our-blog .blog-box .post .blog-img img,
.our-blog .blog-box .post .blog-img {
height: 100%;
}
.our-blog .blog-box .post .blog-img .blog-meta {
bottom: 20px;
position: absolute;
z-index: 1;
}
.our-blog .blog-box .side-blog .blog-list .side-post {
display: flex;
align-items: flex-start;
justify-content: space-between;
flex-wrap: nowrap;
}
.our-blog .blog-box .side-blog .blog-list .side-post .thumb-img {
position: relative;
overflow: hidden;
flex: 0 0 100px;
max-width: 100px;
}
.our-blog .blog-box .side-blog .blog-list .side-post .content-wrap {
flex: 0 0 calc(100% - 100px);
max-width: calc(100% - 100px);
}
/*shop Details*/

.detail-slider .gallery-top .swiper-slide .shop-type-tag {
position: absolute;
top: 20px;
right: 20px;
color: #fff;
background-color: #65a15a;
border-radius: .25rem;
}
.pro-review {
padding-left: 10px;
}
.pro-review span {
font-size: 14px;
line-height: 1;
color: #555555;
}
.shop-detail-contents .price .price-tag {
font-size: 25px;
font-weight: 800;
font-family: 'Libre Franklin', sans-serif;
}
.shop-detail-contents .price h6 span {
margin-left: 5px;
text-decoration: line-through;
vertical-align: middle;
font-size: 18px;
font-weight: 500;
}
.text-light-white {
color: gray;
}
.text-custom-red {
color: #65a15a;
}
.detail-slider .gallery-thumbs {
height: 20%;
box-sizing: border-box;
padding: 15px 0;
}
.type-tag {
color: #fff;
display: inline-block;
padding: 3px 14px;
font-size: 14px;
}
.type-tag:hover {
color: #fff;
}
.shop-detail-content-wrapper {
max-width: 435px;
}
.shop-detail-contents .quantity {
width: 380px;
display: flex;
align-items: center;
}
.shop-detail-contents .quantity input {
border-right: 0;
border-left: 0;
}
.product-qty-input {
width: 40%;
display: flex;
border: 1px solid #9494943b;
border-radius: 4px;
}
.form-control-custom {
height: 40px;
padding: 0.375rem 1.2rem;
border: 0px;
width: 100%;
background: none;
}
.shop-detail-contents .quantity button {
height: 40px;
border: 0px;
padding: 0 20px;
background: #fbfbfc;
color: #202021;
}
.shop-detail-contents .form-control-qty {
height: 40px;
padding: 0.9rem 0.5rem;
border-radius: 0;
border: 0px;
width: 50%;
background: none;
}
.shop-detail-contents .shop-bottom .shop-meta {
display: flex;
flex-wrap: wrap;
align-items: center;
}
.shop-detail-description-sec {
padding-top: 80px;
}
.shop-detail-description-sec .nav-tabs {
border: 0;
}
.shop-detail-description-sec .nav-tabs li {
margin-right: 5px;
}
.shop-detail-description-sec .nav-tabs li:last-child {
margin-right: 0px;
}
.shop-detail-description-sec .nav-tabs li a {
color: #fff;
display: block;
font-size: 16px;
line-height: 1;
text-transform: capitalize;
padding: 8px 10px;
border: 1px solid #65a15a;
border-bottom: none;
background-color: #65a15a;
}
.shop-detail-description-sec .nav-tabs li a:hover,
.shop-detail-description-sec .nav-tabs li a.active {
color: #555555;
background-color: #fff;
border-color: #ddd;
}
.shop-detail-description-sec .tabs .tab-content {
border: 1px solid #efefef;
padding: 20px;
background-color: #ffffff;
}
.shop-detail-description-sec .comment-box .children,
.shop-detail-description-sec .comment-box .comments {
padding: 0;
margin: 0;
list-style: none;
margin-bottom: 35px;
list-style: inherit;
}
.shop-detail-description-sec .comment-box .comments li.comment {
list-style: outside none none;
padding-left: 0;
margin-bottom: 20px;
}
.shop-detail-description-sec .comment-box .comments li article .comment-avatar {
width: 80px;
margin-right: 20px;
float: left;
overflow: hidden;
height: 80px;
border-radius: 50px;
}
.shop-detail-description-sec .comment-box .comments li article .comment-content .comment-meta {
display: flex;
align-items: center;
justify-content: space-between;
margin-bottom: 15px;
flex-wrap: wrap;
}
.shop-detail-description-sec .btn-first {
border: 1px solid #65a15a;
}
.shop-detail-description-sec .btn-first:hover {
border: 1px solid #65a15a;
}
.shop-detail-description-sec .post-date {
font-size: 16px;
color: gray;
}
.shop-detail-description-sec .comment-box .children {
padding-left: 95px;
}
.shop-detail-description-sec .comment-box .comments li article {
display: flex;
width: 100%;
position: relative;
margin-bottom: 20px;
}
/*footer*/

footer {
border-top: 1px solid rgba(67, 41, 163, .2);
}
footer .ft-logo-box {
display: flex;
align-items: center;
}
footer .ft-logo-box .ft-logo {
margin-right: 25px;
}
footer .ft-social-media {
display: block;
align-items: center;
height: 100%;
}
footer .ft-social-media ul {
display: flex;
flex-wrap: wrap;
justify-content: flex-start;
}
footer .ft-social-media ul li {
margin-left: 15px;
border: 1px solid #ada3a3;
transition: 0.3s;
}
footer .ft-social-media ul li a {
width: 40px;
height: 40px;
display: flex;
align-items: center;
justify-content: center;
color: #ada3a3;
transition: 0.3s;
text-decoration: none;
}
footer .ft-social-media ul li a i {
font-size: 18px;
}
footer .ft-social-media ul li:first-child {
margin-left: 0;
}
footer .subscribe_form button {
position: absolute;
right: 3px;
top: 3px;
z-index: 999;
}
.footer-links i {
font-size: 18px;
}
.copyright .medewithlove {
overflow: hidden;
}
.copyright .madewithlove a {
-webkit-transition: 0.3s;
transition: 0.3s;
}
.copyright .medewithlove a:hover i {
-webkit-transform: scale(1.2);
transform: scale(1.2);
}
.copyright .medewithlove a i {
color: red;
}
.hm-list.hm-instagram {
display: flex;
justify-content: space-between;
margin-bottom: 0;
}
.hm-list.hm-instagram li {
overflow: hidden;
}
.hm-list.hm-instagram li {
position: relative;
margin-right: 0;
}
.hm-list li {
display: inline-block;
margin-right: 15px;
}
.hm-list.hm-instagram li img {
-webkit-transition: 0.3s;
transition: 0.3s;
border-radius: 0px;
}
.hm-list.hm-instagram li:hover img {
-webkit-transform: scale(1.2);
transform: scale(1.2);
}
.hm-list .insta-icon {
position: absolute;
top: 60%;
left: 0;
right: 0;
bottom: 0;
transform: translateY(-50%);
font-size: 40px;
color: #65a15a;
line-height: 0;
text-align: center;
opacity: 0;
}
.instagram-slider .swiper-slide:hover .insta-icon {
opacity: 1;
}
.instagram-slider {
position: relative;
top: -1px;
}
footer .subscribe_form input {
padding: 10px 55px 10px 10px;
}
footer .ft-social-media ul li:hover {
border-color: #65a15a;
transform: translateY(-5px);
transition: 0.3s;
}
footer .ft-social-media ul li:hover a {
color: #65a15a;
transform: rotate(25deg);
transition: 0.3s;
}
footer .ft-logo-box {
padding-bottom: 80px;
}
footer .footer-links,
footer .footer-contact {
padding-top: 80px;
}
footer .footer-links ul,
footer .footer-contact ul {
margin-bottom: 10px;
}
footer .footer-contact li {
margin-bottom: 10px;
}
footer .footer-contact li a {
text-decoration: underline;
}
footer .footer-links ul li {
margin-bottom: 5px;
}
footer .footer-links .appimg {
margin-bottom: 10px;
}
footer .footer-links .contact-info li a {
display: flex;
align-items: center;
font-size: 12px;
}
footer .footer-links .contact-info li a span {
margin-right: 10px;
font-size: 22px;
}
/*footer-top*/

.footer-top .icon-box {
margin: 0 auto;
text-align: center;
max-width: 150px;
word-break: break-all;
}
.footer-top .icon-box span i {
font-size: 50px;
margin-bottom: 10px;
}
.footer-top .icon-box span {
display: block;
font-size: 12px;
}
/*copyright*/

.copyright {
padding: 20px 0;
}
.copyright .payment-logo {
display: flex;
align-items: center;
justify-content: flex-start;
}
.copyright .copyright-text {
display: flex;
align-items: center;
justify-content: flex-end;
height: 100%;
}
/*======================
3. Blog Grid
========================*/

.breadcrumb .breadcrumb-item {
margin: 0;
}
.breadcrumb {
margin: -20px;
background-color: #fff;
padding: 1.5rem 20px;
border-bottom: 1px solid #4329a333;
border-radius: 0;
margin-bottom: 20px;
}
.breadcrumb .breadcrumb-item a {
color: #131313;
font-weight: 600;
}
/*.shop-detail-image .gallery-top .swiper-slide
{
width: 100% !important;
}*/
.pad-term
{
padding: 30px;
}
.breadcrumb-item.active {
color: #65a15a;
}
.breadcrumb-area {
background-image: url("../img/innerbanner.jpg");
background-repeat: no-repeat;
background-position: center center;
background-size: cover;
min-height: 225px;
position: relative;
    margin-top: 123px;
}
.breadcrumb-area .breadcrumb-content {
position: absolute;
left: 50%;
top: 50%;
-webkit-transform: translate(-50%, -50%);
-ms-transform: translate(-50%, -50%);
transform: translate(-50%, -50%);
text-align: center;
}
.breadcrumb-area .breadcrumb-content > h2 {
font-weight: 700;
color: #483B33000;
text-transform: uppercase;
text-align: center;
font-size: 36px;
margin-bottom: 0;
padding-bottom: 20px;
}
.breadcrumb-area .breadcrumb-content ul > li:first-child {
padding-left: 0;
}
.breadcrumb-area .breadcrumb-content ul > li {
color: #483B33000;
display: inline-block;
padding-left: 20px;
position: relative;
}
.breadcrumb-area .breadcrumb-content ul > li:before {
content: "\f054";
font-family: 'Font Awesome 5 Free';
font-weight: 600;
position: absolute;
right: -15px;
top: 2px;
font-size: 10px;
color: #fff;
}
.breadcrumb-area .breadcrumb-content ul > li:last-child:before {
display: none;
content: none;
}
.breadcrumb-area .breadcrumb-content ul > li > a {
color: #fff;
}
.breadcrumb-area .breadcrumb-content ul > li {
color: #ffffff;
display: inline-block;
padding-left: 20px;
position: relative;
}
.breadcrumb-area .breadcrumb-content ul > li.active {
color: #65a15a;
}
.our-articles .blog-page-banner:before {
content: '';
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
background-image: linear-gradient(to top, rgba(0, 0, 0, .6), transparent);
}
.our-articles .blog-inner {
position: relative;
margin-top: -450px;
display: flex;
}
.side-shop .side-post,
.side-blog .side-post {
display: flex;
align-items: flex-start;
justify-content: space-between;
flex-wrap: nowrap;
}
.side-shop .content-wrap,
.side-blog .content-wrap {
flex: 0 0 calc(100% - 100px);
max-width: calc(100% - 100px);
}
.side-shop .thumb-img {
margin-right: 15px;
}
.side-shop .thumb-img,
.side-blog .thumb-img {
position: relative;
overflow: hidden;
flex: 0 0 100px;
max-width: 100px;
}
.side-bar .blog-tags a {
display: inline-block;
padding: 5px 10px;
border: #65a15a solid 1px;
margin: 0 5px 10px 0;
background: #fff;
font-weight: 500;
color: #65a15a;
}
.side-bar .blog-tags a:hover {
background: #65a15a;
color: #fff;
border: #65a15a solid 1px;
}
.side-bar .trending-blog-cat li {
display: flex;
position: relative;
}
.side-bar .trending-blog-cat li a {
display: flex;
align-items: center;
width: 100%;
position: relative;
text-transform: capitalize;
justify-content: space-between;
}
.side-bar .large-product-box {
position: relative;
height: auto;
padding-bottom: 0;
right: 0;
left: 0;
}
.side-bar .large-product-box .category-type a {
bottom: 0;
position: absolute;
margin-bottom: 15px;
}
.side-bar .main-padding {
padding: 15px;
}
.side-bar .inner-wrapper {
z-index: 1;
}
.side-bar .main-banner,
.side-bar .section-2 {
height: auto;
}
.side-bar .main-padding img {
width: 110px;
}
.side-bar .main-banner .footer-img {
max-width: 200px;
}
.side-bar .inner-wrapper .main-page .login-box {
display: block;
}
.our-articles .blog-services-wrapper {
box-sizing: border-box;
overflow: hidden;
border-radius: 10px;
}
.our-articles .blog-services-wrapper .post-meta {
display: flex;
align-items: center;
padding: 20px;
padding-bottom: 0;
}
.our-articles .blog-services-wrapper .author-meta {
margin-left: 20px;
}
.our-articles .post-img {
position: relative;
}
.our-articles .post-img .blog-meta-2 {
background-color: rgba(255, 255, 255, 0.83);
position: absolute;
top: 10px;
left: 10px;
padding: 10px;
text-align: center;
border-radius: 4px;
}
.our-articles .post-img .blog-meta-2 .blog-time_schedule .day {
width: 100%;
display: block;
font-size: 18px;
font-weight: 700;
color: #65a15a;
}
/*======================
4. Ex Deals
========================*/

.exclusive-deals .deals-heading {
padding: 15px 0;
}
.exclusive-deals .deals-image {
display: flex;
align-self: center;
align-items: center;
}
/*product-box-2*/

.product-box-2 {
display: flex;
}
.product-box-2 .product-img {
width: 120px;
height: 112px;
}
.product-box-2 .product-img img {
width: 100%;
height: 100%;
object-fit: cover;
object-position: center;
}
.local-deals .btn-first {
margin: 20px auto 40px;
}
/*======================
5. Restaurent
========================*/

.page-banner {
height: 270px;
}
.page-banner img {
width: 100%;
height: 100%;
object-fit: cover;
object-position: center;
}
.page-banner>.overlay-2>.container>.row {
padding-top: 10px;
}
.tag-share {
display: flex;
align-items: center;
justify-content: flex-end;
}
/*Restaurent Details*/

.heading .title {
margin-bottom: 5px;
}
.heading .sub-title span {
margin-left: 20px;
}
.restaurent-logo {
position: absolute;
top: -40%;
right: 15px;
box-shadow: 0 0 0 1px rgba(67, 41, 163, .08), 0 1px 5px 0 rgba(67, 41, 163, .08);
background: #fff;
width: 80px;
height: 80px;
}
.heading .head-rating .rating span.rate-data {
margin-left: 5px;
vertical-align: middle;
position: relative;
top: -1px;
}
.heading .head-rating,
.heading .head-rating .product-review {
display: flex;
align-items: center;
}
.heading .head-rating .product-review {
margin-left: 35px;
}
.heading .head-rating .product-review h6 {
margin-right: 25px;
}
.heading .head-rating .product-review h6 span {
font-weight: 400;
}
.restaurent-details-mob {
display: none;
text-align: center;
}
.restaurent-details-mob span {
display: block;
font-weight: 600;
}
/*Restaurent tabs*/

.restaurent-tabs.fix-tab {
position: fixed;
top: 60px;
left: 0;
right: 0;
background: #fff;
z-index: 2;
}
.restaurent-tabs .restaurent-menu {
display: flex;
align-items: center;
justify-content: space-between;
}
.restaurent-tabs .nav-pills .nav-link {
margin-right: 15px;
margin-bottom: 0;
padding: 10px 0;
border-bottom: 3px solid transparent;
border-radius: 0;
}
.restaurent-tabs .nav-pills .nav-link.active {
border-bottom: 3px solid #65a15a;
color: #483B33;
opacity: 1;
background-color: transparent;
}
.restaurent-tabs .restaurent-menu .add-wishlist img {
width: 20px;
cursor: pointer;
}
/*promocode*/

.promocodeimg {
height: 115px;
}
.promocodeimg img {
width: 100%;
height: 100%;
object-fit: cover;
object-position: center;
}
.promocode-text {
position: absolute;
top: 0;
display: flex;
right: 0;
align-items: center;
justify-content: space-between;
width: 100%;
height: 100%;
padding: 0 30px;
flex-wrap: wrap;
z-index: 1;
}
.promocode-text .promocode-text-content h5,
.promocode-text .promocode-text-content p {
word-break: break-all;
}
.promocode-btn a {
background: transparent;
border: 2px solid #fff;
color: #fff;
border-radius: 3px;
padding: 12px 15px;
font-size: 16px;
font-weight: 600;
}
/*Restaurent Address*/

.restaurent-address {
padding: 15px 0;
}
.restaurent-address .address-details .address,
.restaurent-address .address-details {
display: flex;
align-items: center;
justify-content: space-between;
flex-wrap: wrap;
}
.restaurent-address .address-details .address {
flex-basis: auto;
flex-grow: 0;
max-width: 100%;
}
.restaurent-address .address-details .address .delivery-address {
padding-right: 40px;
}
.restaurent-address .address-details .change-address {
display: flex;
flex-direction: column;
padding: 0 5px 0 15px;
text-align: right;
justify-content: center;
}
/*restaurent-ad*/

.restaurent-ad .ad-img {
height: 350px;
}
.restaurent-ad .ad-img img {
width: 100%;
height: 100%;
object-fit: cover;
object-position: center;
}
.restaurent-ad .ad-img .content-box {
padding: 0 60px;
}
/*Restaurent Meals*/

.restaurent-meals {
position: relative;
}
.restaurent-meals .restaurent-meal-head>.card {
padding: 0;
margin-bottom: 25px;
border: none;
background: transparent;
}
.restaurent-meals .restaurent-meal-head>.card>.card-header {
border: none;
padding: .75rem 0 0;
background: transparent;
}
.restaurent-meals .restaurent-meal-head>.card>.card-header>.section-header-left>h3>.card-link {
display: flex;
align-items: center;
align-self: center;
justify-content: space-between;
font-size: 25px;
cursor: pointer;
}
.restaurent-meals .restaurent-meal-head>.card>.card-header>.section-header-left>h3>.card-link:after {
content: '\f077';
font-family: 'Font Awesome 5 Free';
font-weight: 900;
}
.restaurent-meals .restaurent-meal-head>.card>.card-header>.section-header-left>h3>.card-link.collapsed:after {
content: '\f078';
}
.restaurent-meals .restaurent-meal-head>.card>.collapse>.card-body {
padding: 0;
}
.restaurent-product-list {
position: relative;
box-shadow: 0 0 0 1px rgba(67, 41, 163, .08), 0 1px 5px 0 rgba(67, 41, 163, .08);
border-radius: 3px;
cursor: pointer;
margin-bottom: 10px;
height: 95%;
}
.restaurent-product-list .restaurent-product-detail {
display: flex;
justify-content: space-between;
height: 100%;
}
.restaurent-product-list:hover {
box-shadow: 0 0 0 1px rgba(67, 41, 163, .2), 0 1px 5px 0 rgba(67, 41, 163, .2);
transition: 0.5s;
}
.restaurent-product-list .restaurent-product-detail .restaurent-product-left {
padding: 8px 12px;
width: 100%;
}
.restaurent-product-list .restaurent-product-detail .restaurent-product-left .restaurent-tags-price,
.restaurent-product-list .restaurent-product-detail .restaurent-product-left .restaurent-product-caption-box,
.restaurent-product-list .restaurent-product-detail .restaurent-product-left .restaurent-product-title-box {
display: flex;
justify-content: space-between;
width: 100%;
flex-wrap: wrap;
}
.restaurent-product-list .restaurent-product-detail .restaurent-product-left .restaurent-product-box .restaurent-product-label,
.restaurent-product-list .restaurent-product-detail .restaurent-product-left .restaurent-product-box {
display: flex;
justify-content: flex-start;
flex-wrap: wrap;
}
.restaurent-product-list .restaurent-product-detail .restaurent-product-left .restaurent-product-box .restaurent-product-title {
margin-right: 15px;
}
.restaurent-product-list .restaurent-product-detail .restaurent-product-left .restaurent-product-caption-box,
.restaurent-product-list .restaurent-product-detail .restaurent-product-left .restaurent-product-box .restaurent-product-label {
align-self: flex-start;
margin-bottom: 10px;
}
.restaurent-product-list .restaurent-product-detail span {
word-break: break-all;
}
.restaurent-product-list .restaurent-product-detail .restaurent-tags {
display: flex;
}
.restaurent-product-list .restaurent-product-detail .restaurent-product-left .restaurent-tags-price {
align-items: center;
}
.restaurent-product-list .restaurent-product-rating {
text-align: center;
padding: 0 10px;
padding-left: 0;
}
.restaurent-product-list .restaurent-product-rating .ratings {
display: flex;
}
.restaurent-product-list .restaurent-product-rating .rating-text p {
white-space: nowrap;
text-overflow: ellipsis;
overflow: hidden;
}
.restaurent-product-list .restaurent-product-img {
width: 150px;
flex-basis: 150px;
line-height: 0;
height: 100%;
}
.restaurent-product-list .restaurent-product-img img {
width: 100%;
height: 100%;
object-fit: cover;
object-position: center;
}
.restaurent-product-list .restaurent-product-detail .restaurent-product-left .restaurent-tags-price .circle-tag {
position: absolute;
top: 8px;
right: 12px;
}
.sidebar-card.card {
margin: 4px;
}
.sidebar-card .offer-content {
text-align: center;
background-repeat: no-repeat;
width: 100%;
padding: 20px 10px 10px;
position: relative;
min-height: 100%;
background: linear-gradient(0deg, #6a1d89a8, #6a1d89a8), url('../img/offer.html');
background-size: cover;
}
.sidebar-card .offer-content h2 {
text-transform: uppercase;
font-size: 50px;
}
.sidebar-card .offer-content h2 small {
display: block;
font-size: 30px;
text-transform: lowercase;
}
/*Restaurent About*/

.restaurent-about .about-restaurent {
margin-top: 10px;
}
.restaurent-about .about-restaurent li {
margin-bottom: 10px;
position: relative;
}
.restaurent-about .about-restaurent li i {
position: absolute;
left: 0;
top: 5px;
font-size: 16px;
}
.restaurent-about .about-restaurent li span {
position: relative;
left: 30px;
}
.restaurent-schdule .card,
.restaurent-schdule .card .card-header {
border: none;
border-radius: 0;
}
.restaurent-schdule .card .card-body {
padding: 20px 20px 10px 20px;
}
.restaurent-schdule .card .card-body .schedule-box {
display: flex;
align-items: center;
justify-content: space-between;
margin-bottom: 10px;
}
.restaurent-schdule .card .card-footer {
background: #fff;
}
.social-media {
display: flex;
align-items: center;
}
.social-media li {
width: 20%;
border: 1px solid #ccc;
border-radius: 0;
border-right: 0;
}
.social-media li:last-child {
border: 1px solid #ccc;
}
.social-media li a {
display: flex;
justify-content: center;
align-items: center;
padding: 15px 0;
}
.social-media li:hover {
background: #65a15a;
transition: 0.5s;
}
.social-media li:hover a {
color: #fff;
}
/*Restaurent Review*/

.restaurent-review ul {
display: flex;
margin: 0 -15px 20px;
}
.restaurent-review ul li {
padding: 0 15px;
max-width: 110px;
}
.restaurent-review .review-img {
max-width: 540px;
margin: 0 auto;
text-align: center;
padding: 30px;
padding-bottom: 0;
}
.restaurent-review .review-img img {
margin-bottom: 30px;
}
.review-box {
padding: 20px 0;
}
.review-box.comment-reply {
margin-left: 60px;
}
.review-box .review-user {
display: flex;
align-items: flex-start;
justify-content: space-between;
}
.review-box .ratings,
.review-box .review-user {
margin-bottom: 10px;
}
.review-box .food-order {
margin-bottom: 5px;
display: block;
}
.review-box .review-user .review-user-img {
display: flex;
align-items: center;
}
.review-box .review-user .review-user-img img {
margin-right: 12px;
}
.review-box .review-user .review-user-img .reviewer-name p {
margin-bottom: 5px;
line-height: normal;
}
.review-box .review-user .review-user-img .reviewer-name p small {
margin-left: 10px;
}
.review-box .review-user .review-user-img .reviewer-name span {
font-size: 12px;
vertical-align: middle;
margin-left: 3px;
}
.review-box .food {
display: flex;
flex-wrap: wrap;
margin: auto 0;
}
.review-box .food li {
max-width: 100%;
padding: 0;
}
.review-box .food li button.add-pro {
cursor: pointer;
margin-right: 10px;
color: #fff;
background-color: rgba(0, 0, 0, .05);
text-transform: capitalize;
padding: 3px 15px;
border: 1px solid #ccc;
border-radius: 3px;
position: relative;
padding-right: 35px;
font-weight: 500;
margin-bottom: 10px;
}
.review-box .food li button.add-pro span.close {
position: absolute;
right: 10px;
font-weight: 700;
font-size: 22px;
top: 50%;
transform: translate(0px, -50%);
text-align: right;
padding: 0;
color: #fff;
font-weight: bold;
opacity: 1;
}
.restaurent-popup .modal-content {
min-height: 85vh;
background: #fbfbfc;
overflow-y: auto;
}
.restaurent-popup .modal-header {
display: block;
box-shadow: 0 0 0 1px rgba(67, 41, 163, .08), 0 1px 5px 0 rgba(67, 41, 163, .08);
padding: 0;
height: 200px;
}
.restaurent-popup .modal-header img {
width: 100%;
height: 100%;
object-fit: cover;
object-position: center;
}
.restaurent-popup .close {
margin: 0;
display: block;
width: 100%;
text-align: left;
color: #65a15a;
opacity: 1;
padding: 0;
font-size: 35px;
font-weight: 200;
line-height: 1;
margin-bottom: 20px;
position: absolute;
padding: 20px;
}
.restaurent-popup .modal-title {
font-size: 20px;
}
.restaurent-popup .modal-body {
padding: 0;
height: 550px;
overflow: auto;
}
.product-quantity {
display: flex;
align-items: center;
}
.product-quantity span {
margin-right: 20px;
}
.product-quantity .quantity {
border: 1px solid #545470;
border-radius: 19px;
flex-grow: 0;
overflow: hidden;
position: relative;
height: 38px;
width: auto;
}
.product-quantity .quantity button {
padding: 0 15px;
}
.product-quantity .quantity button:focus {
outline: none;
}
.product-quantity .quantity input {
border: none;
width: 40px;
}
/*additional-product*/

.additional-product .card {
border-radius: 0;
border: none;
}
.additional-product .card .card-header {
border-radius: 0;
background: transparent;
padding: 10px;
}
.additional-product .card .card-header .card-link {
font-size: 18px;
display: flex;
align-items: center;
align-self: center;
justify-content: space-between;
cursor: pointer;
margin-bottom: 0;
}
.additional-product .card .card-header .card-link span {
display: block;
}
.additional-product .card .card-header .card-link:after {
content: '\f077';
font-family: 'Font Awesome 5 Free';
font-weight: 900;
font-size: 25px;
}
.additional-product .card .card-header .card-link.collapsed:after {
content: '\f078';
}
.additional-product .card .card-body button.add-pro {
cursor: pointer;
margin-right: 10px;
color: rgba(0, 0, 0, .87);
background: rgba(0, 0, 0, .05);
text-transform: capitalize;
padding: 3px 15px;
border: 1px solid #ccc;
border-radius: 3px;
position: relative;
padding-right: 35px;
font-weight: 500;
margin-bottom: 10px;
}
.additional-product .card .card-body button.add-pro:hover {
background: #ccc;
}
.additional-product .card .card-body button.add-pro span.close {
position: absolute;
right: 10px;
font-weight: 700;
font-size: 22px;
top: 50%;
transform: translate(0px, -50%);
text-align: right;
padding: 0;
color: #483B33;
font-weight: bold;
}
.restaurent-popup .modal-footer {
justify-content: space-between;
}
/*map-gallery-se*/

.map-gallery-sec .main-box #locmap {
width: 100%;
height: 100%;
position: relative;
display: block;
z-index: 0;
pointer-events: none;
border: none;
}
.map-gallery-sec .map-pl-0 {
padding-left: 0;
}
.map-gallery-sec .map-pr-0 {
padding-right: 0;
}
.map-gallery-sec .gallery-box .gallery-img {
display: flex;
overflow: hidden;
flex-wrap: wrap;
margin: -5px;
}
.map-gallery-sec .gallery-box .gallery-img li {
flex: 0 0 33.33%;
max-width: 33.33%;
padding: 5px;
}
.smoothscroll.active {
position: relative;
padding-top: 150px;
}
.smoothscroll.active#menu {
padding-top: 0;
}
/*video box*/

.video-box iframe {
width: 100%;
border: none;
height: 250px;
}
.video_wrapper {
width: 100%;
margin: 0 auto;
position: relative;
background-color: #483B33;
height: 250px;
}
.videoIframe {
position: absolute;
top: 0;
bottom: 0;
right: 0;
left: 0;
width: 100%;
height: 100%;
background-color: transparent;
border: none;
}
.videoPoster {
position: absolute;
top: 0px;
left: 0px;
width: 100%;
height: 100%;
background-image: url('../img/video-banner.html');
background-size: cover;
border: none;
background-position: center;
overflow: hidden;
opacity: 1;
transition: opacity 100ms, height 0s;
transition-delay: 0s, 0s;
}
.video_wrapper:hover .video-inner i {
color: #bc2634;
transition: 0.5s;
}
.videoPoster:hover {
cursor: pointer;
}
.videoPoster .video-inner {
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
text-align: center;
}
.videoPoster .video-inner i {
font-size: 70px;
color: #fff;
}
.videoWrapperActive .videoPoster {
opacity: 0;
height: 0;
transition-delay: 0s, 800ms;
}
.discount-box {
margin-top: -6px;
}
.discount-box .discount-price .right-side,
.discount-box .discount-price {
display: flex;
justify-content: space-between;
align-items: center;
}
.discount-box .discount-price .right-side .dis-text {
margin-right: 25px;
}
.discount-box .discount-price .right-side,
.discount-box .discount-price .left-side {
max-width: 50%;
flex-basis: 50%;
}
/*side bar cart*/

.sidebar .cart-detail-box {
width: 100%;
background: #fff;
position: relative;
box-shadow: 0 0 0 1px rgba(67, 41, 163, .08), 0 1px 5px 0 rgba(67, 41, 163, .08);
border-radius: 3px;
cursor: pointer;
}
.sidebar .cart-detail-box>.card {
border: none;
}
.sidebar .cart-detail-box>.card .card-header,
.sidebar .cart-detail-box>.card .card-footer {
background: #fff;
}
.sidebar .cart-detail-box>.card .card-body {
height: 350px;
overflow-y: auto;
}
.sidebar .cart-detail-box>.card>.modify-order>.total-amount,
.sidebar .cart-detail-box>.card .card-body .item-total .total-price,
.sidebar .cart-detail-box>.card .card-body .cat-product-box .cat-product {
display: flex;
align-items: flex-start;
justify-content: space-between;
padding: 15px;
border-bottom: 1px solid #ccc;
}
.sidebar .cart-detail-box>.card .card-body .cat-product-box .cat-product .cat-name a p {
margin-bottom: 0px;
}
.sidebar .cart-detail-box>.card .card-body .cat-product-box .cat-product .cat-name a p span {
margin-right: 10px;
}
.sidebar .cart-detail-box>.card .card-body .cat-product-box .cat-product .cat-name {
font-size: 10px;
white-space: nowrap;
text-overflow: ellipsis;
overflow: hidden;
}
.sidebar .cart-detail-box>.card>.modify-order>.total-amount {
background-color: #8f8fa1;
}
/*======================
6. Add Restaurent
========================*/

/*add restaurent*/

.register-restaurent-sec {
counter-reset: section;
}
#add-restaurent-tab .step-steps > li:after {
counter-increment: section;
content: counter(section);
position: absolute;
top: 16px;
font-size: 10px;
left: 0;
right: 0;
pointer-events: none;
font-weight: 600;
}
#add-restaurent-tab .step-steps > li.done:after,
#add-restaurent-tab .step-steps > li.active:after {
content: '\f00c';
font-family: 'Font Awesome 5 Free';
font-weight: 900;
color: #fff;
font-size: 7px;
top: 20px;
}
#add-restaurent-tab .step-footer .none {
display: none;
}
#add-restaurent-tab .step-footer {
align-items: center;
display: flex;
flex-wrap: wrap;
-webkit-box-pack: justify;
justify-content: space-between;
padding-top: 15px;
margin-bottom: 0px;
}
#add-restaurent-tab .step-footer #next-1 {
margin: 0px 0px 0px auto;
}
#add-restaurent-tab .steps-1 {
display: -webkit-box;
display: flex;
flex-wrap: wrap;
-webkit-box-pack: justify;
justify-content: space-between;
padding-left: 0;
}
.step-app > .steps-1 {
overflow: hidden;
margin: 0 auto;
}
#add-restaurent-tab .steps-1 > li {
flex: 0 0 25%;
max-width: 25%;
}
.step-app .steps-1 > li {
display: inline-block;
position: relative;
z-index: 1;
text-align: center;
}
#add-restaurent-tab .steps-1 > li:before {
background-color: #e3e3e3;
height: 12px;
left: 45%;
top: 19px;
width: 100%;
transition: all 0.3s;
margin-left: 4px;
}
#add-restaurent-tab .steps-1 > li:first-child:before {
border-radius: 10px 0 0 10px;
}
.step-app .steps-1 > li:before {
position: absolute;
content: "";
z-index: -1;
width: 100%;
height: 2px;
background-color: #C4CAD2;
top: 35px;
left: 85px;
}
.step-app .steps-1 > li > a,
.step-app .steps-1 > li > a > span {
display: block;
}
#add-restaurent-tab .steps-1 > li > a > .number {
width: 20px;
height: 20px;
background-color: #b6b6b6;
border: 0px solid;
transition: all 0.3s;
}
.step-app .steps-1 > li > a > .number {
border-radius: 50%;
color: #b6b6b6;
font-size: 18px;
font-weight: bold;
line-height: 50px;
margin: 10px auto;
position: relative;
z-index: 0;
top: 5px;
}
#add-restaurent-tab .steps-1 > li.active > a > .number,
#add-restaurent-tab .steps-1 > li.done > a > .number {
background-color: #003d00;
}
#add-restaurent-tab .steps-1 > li > a > .step-name {
font-weight: 600;
color: #65a15a;
font-size: 12px;
margin-top: 20px;
transition: all 0.3s;
}
#add-restaurent-tab .steps-1 > li:last-child:before {
width: 0;
}
#add-restaurent-tab .steps-1 > li.done:before {
background-color: #00a000;
}
#add-restaurent-tab .steps-2 {
margin: 20px 0;
}
#add-restaurent-tab .steps-2 > li {
display: block;
margin-bottom: 10px;
}
#add-restaurent-tab .steps-2 > li:before,
#add-restaurent-tab .steps-2 > li:after {
display: none;
}
#add-restaurent-tab .steps-2 > li > a.add-res-tab {
display: inline-block;
text-align: center;
vertical-align: middle;
user-select: none;
border: 1px solid transparent;
padding: 10px 16px;
font-size: 14px;
line-height: 1.595;
border-radius: .25rem;
transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
width: 100%;
border-color: rgba(67, 41, 163, .2);
background: #fff;
font-weight: 600;
}
#add-restaurent-tab .steps-2 > li.done a.add-res-tab,
#add-restaurent-tab .steps-2 > li.active a.add-res-tab {
color: #fff;
background: #65a15a;
border-color: #65a15a;
}
#add-restaurent-tab.step-app .step-content .step-tab-panel {
display: none;
}
#add-restaurent-tab.step-app .step-content .step-tab-panel.active {
display: block;
}
#add-restaurent-tab.step-app .step-content .step-tab-panel label sup {
top: 0;
color: #ff0000;
}
#add-restaurent-tab.step-app .step-content .step-tab-panel .form-group .form-group {
display: flex;
margin-bottom: 35px;
}
.package-box .package-caption {
border-radius: 0 0 3px 3px;
}
.package-box .package-caption .package-item-first {
display: flex;
align-items: center;
justify-content: space-between;
}
.package-box .package-caption>ul>li:before {
content: '';
position: absolute;
display: block;
width: 4px;
height: 4px;
border-radius: 50%;
background-color: #fff;
left: 0;
top: 50%;
margin-top: 4px;
}
.package-box .package-caption>ul>li {
display: flex;
flex-direction: row;
justify-content: space-between;
align-items: center;
width: 100%;
font-size: 12px;
margin-top: 10px;
padding-top: 10px;
border-top: 1px solid rgba(210, 201, 255, 0.1);
position: relative;
padding-left: 15px;
letter-spacing: 0.4px;
}
.package-box .package-caption>ul>li:first-child {
border: none;
}
.package-box .package-caption .package-btn {
margin-top: 20px;
}
.general-sec iframe {
border: none;
}
.payment-sec .card-header,
.payment-sec .card {
border: none;
border-radius: 0;
}
.payment-sec .card-header {
background: #fff;
padding-left: 0;
padding-top: 0;
}
.payment-sec .card-header .card-link.collapsed:before {
content: '+';
}
.payment-sec .card-header .card-link:before {
content: '-';
font-size: 18px;
line-height: normal;
position: relative;
top: 2px;
right: 0;
padding-right: 10px;
font-weight: 700;
}
.driver-tip-sec>.nav,
.payment-option-tab>.nav {
margin-bottom: 1rem;
}
.payment-option-tab>.nav>.nav-item {
flex: 0 0 20%;
max-width: 20%;
}
.driver-tip-sec>.nav>.nav-item>.nav-link,
.payment-option-tab>.nav>.nav-item>.nav-link {
padding: .5rem;
text-align: center;
border: 1px solid rgba(67, 41, 163, .2);
border-right: 0;
border-radius: 0;
white-space: nowrap;
text-overflow: ellipsis;
overflow: hidden;
}
.driver-tip-sec>.nav>.nav-item:last-child>.nav-link,
.payment-option-tab>.nav>.nav-item:last-child>.nav-link {
border: 1px solid rgba(67, 41, 163, .2);
}
.driver-tip-sec>.nav>.nav-item>.nav-link.active,
.payment-option-tab>.nav>.nav-item>.nav-link.active {
color: #fff;
background: #65a15a;
border-color: #65a15a;
}
.payment-option-tab .credit-card:before {
content: '';
position: absolute;
padding: 15px 25px;
font-size: 18px;
color: #6b6b83;
pointer-events: none;
background-image: url(../img/visa.jpg);
background-size: contain;
background-repeat: no-repeat;
top: 8px;
left: 8px;
}
.payment-option-tab .credit-card.card-front:before {
background-image: url(../img/card-front.jpg);
}
.payment-option-tab .credit-card.card-back:before {
background-image: url(../img/card-back.jpg);
}
.payment-option-tab .credit-card.gift-card:before {
background-image: url(../img/gift-box.png);
}
.payment-option-tab .credit-card.promocode:before {
background-image: url(../img/promo.jpg);
}
.payment-option-tab .credit-card.amex-card-front:before {
background-image: url(../img/amex-card-front.png);
}
.payment-option-tab .credit-card.amex-card-back:before {
background-image: url(../img/amex-card-back.png);
}
.payment-option-tab .credit-card input {
padding-left: 65px;
}
.driver-tip-sec>.nav>.nav-item {
flex: 0 0 50%;
max-width: 50%;
}
.driver-tip-sec .tip-percentage form {
display: flex;
flex-wrap: wrap;
}
.driver-tip-sec .tip-percentage input[type=radio]:checked + span {
background: #65a15a;
color: #fff;
}
.driver-tip-sec .tip-percentage label {
position: relative;
flex: 0 0 25%;
max-width: 25%;
z-index: 1;
cursor: pointer;
}
.driver-tip-sec .tip-percentage label span {
position: absolute;
left: 0;
right: 0;
top: 0;
padding: 13px .5rem;
z-index: -1;
text-align: center;
border: 1px solid rgba(67, 41, 163, .2);
border-right: 0;
border-radius: 0;
}
.driver-tip-sec .tip-percentage label input {
-webkit-appearance: none;
}
.driver-tip-sec .tip-percentage label:last-child span {
border: 1px solid rgba(67, 41, 163, .2);
}
.driver-tip-sec .custom-tip .input-group .input-group-prepend {
border: 1px solid #8f8fa1;
}
.driver-tip-sec .custom-tip .input-group .input-group-prepend span {
border-radius: 0;
}
.thankmsg-sec .msg-wrapper h1 {
font-size: 60px;
}
.thankmsg-sec .msg-wrapper .contact-details {
display: flex;
justify-content: center;
margin-bottom: 40px;
flex-wrap: wrap;
}
.thankmsg-sec .msg-wrapper .contact-details>li {
font-size: 16px;
margin: 0 25px;
}
.thankmsg-sec .msg-wrapper .contact-details>li>i {
padding-right: 15px;
}
/*======================
7. Add Restaurent
========================*/

/*======================
3. List View
========================*/

.most-popular .popular-item-slider .swiper-slide {
margin-bottom: 20px;
}
.sort-tag-filter,
.product-list-view,
.most-popular .popular-item-slider {
border-bottom: 1px solid rgba(67, 41, 163, .1);
}
.sort-tag-filter {
display: flex;
align-items: center;
justify-content: space-between;
}
.restaurent-tags span.tags {
cursor: pointer;
margin-right: 10px;
color: rgba(0, 0, 0, .87);
background: rgba(0, 0, 0, .05);
text-transform: capitalize;
padding: 3px 15px;
border: 1px solid #ccc;
border-radius: 3px;
position: relative;
padding-right: 35px;
font-weight: 500;
}
.restaurent-tags span.tags:hover {
color: #65a15a;
}
.restaurent-tags span.tags span.close {
position: absolute;
right: 10px;
font-weight: 700;
font-size: 14px;
top: 50%;
transform: translate(0px, -50%);
}
.sorting span {
margin-right: 10px;
}
.sorting select {
color: #483B3300059;
border: 2px solid #ccc;
padding: 3px 40px 3px 8px;
border-radius: 3px;
text-align: left;
font-weight: 600;
}
/*filter-sidebar*/

.filter-sidebar .title-2 small {
margin-left: 10px;
}
.filter-sidebar .title-2 small a {
text-decoration: underline;
}
.filter-sidebar .sidebar-tab>ul>li {
margin-right: 28px;
border-radius: 0;
}
.filter-sidebar .sidebar-tab>ul>li>a {
color: rgba(0, 0, 0, .55);
border-radius: 0;
border-bottom: 4px solid transparent;
font-weight: 700;
text-align: left;
padding-left: 0;
padding-right: 0;
}
.filter-sidebar .sidebar-tab>ul>li>a.active {
background: transparent;
color: #483B33;
border-bottom: 4px solid #65a15a;
}
.filter-sidebar .sidebar-tab .tab-content .siderbar-innertab>ul {
display: flex;
margin-bottom: 10px;
}
.filter-sidebar .sidebar-tab .tab-content .siderbar-innertab>ul>li {
width: 50%;
}
.filter-sidebar .sidebar-tab .tab-content .siderbar-innertab>ul>li>a {
flex: 1;
white-space: normal;
border: 1px solid transparent;
transition-property: z-index, background, border-color, color;
transition-timing-function: ease;
transition-duration: .1s;
border-color: rgba(67, 41, 163, .2);
color: #65a15a;
background-color: transparent;
border-radius: 4px;
text-align: center;
font-weight: 600;
padding: 4px 0;
}
.filter-sidebar .sidebar-tab .tab-content .siderbar-innertab>ul>li>a.disabled {
color: #ccc;
}
.filter-sidebar .sidebar-tab .tab-content .siderbar-innertab>ul>li>a.active {
border-color: #65a15a;
color: #fff;
background-color: #65a15a;
}
.filter-sidebar .sidebar-tab .tab-content .siderbar-innertab>ul>li:first-child>a {
border-radius: 4px 0 0 4px;
}
.filter-sidebar .sidebar-tab .tab-content .siderbar-innertab>ul>li:last-child>a {
border-radius: 0px 4px 4px 0px;
}
.filter-sidebar .sidebar-tab .tab-content p.delivery-type a:before {
content: '';
width: 2px;
height: 2px;
background: #483B33;
display: inline-flex;
margin: 0 8px;
vertical-align: middle;
}
.filter-sidebar .sidebar-tab .filters .card-header,
.filter-sidebar .sidebar-tab .filters .card {
border: none;
padding: .75rem 0;
background: #fff;
}
.filter-sidebar .sidebar-tab .filters .card {
padding: 0;
margin-bottom: 25px;
}
.filter-sidebar .sidebar-tab .filters .card .card-body {
padding: 0;
}
.filter-sidebar .sidebar-tab .filters .card-header a {
display: flex;
align-items: center;
align-self: center;
justify-content: space-between;
}
.filter-sidebar .sidebar-tab .filters .card-header a:after {
content: '\f077';
font-family: 'Font Awesome 5 Free';
font-weight: 900;
}
.filter-sidebar .sidebar-tab .filters .card-header a.collapsed:after {
content: '\f078';
}
.filters .rating {
display: flex;
align-items: center;
justify-content: space-between;
}
.filters .rating button {
border: 1px solid #ccc;
padding: 6px 10px;
font-size: 12px;
line-height: 19px;
white-space: nowrap;
width: 100%;
text-align: center;
display: block;
border-right: 0;
font-weight: 900;
}
.filters .rating button:hover {
background: #65a15a;
color: #fff;
border-color: #65a15a;
}
.filters .rating button:first-child {
border-radius: 3px 0 0 3px;
}
.filters .rating button:last-child {
border-radius: 0px 3px 3px 0px;
border-right: 1px solid #ccc;
}


/*testimonal layout*/

.swiper-slide .testimonial-wrapper {
margin-top: 0;
}
.video-box,
.testimonial-wrapper .testimonial-box {
position: relative;
box-shadow: 0 0 0 1px rgba(67, 41, 163, .08), 0 1px 5px 0 rgba(67, 41, 163, .08);
border-radius: 3px;
cursor: pointer;
}
.testimonial-wrapper .testimonial-box .testimonial-img .brand-logo {
position: absolute;
top: 50%;
left: 0;
right: 0;
box-shadow: 0 0 0 1px rgba(67, 41, 163, .08), 0 1px 5px 0 rgba(67, 41, 163, .08);
background: #fff;
width: 50px;
height: 50px;
transform: translate(15px, -50%);
}
.testimonial-wrapper .testimonial-box .testimonial-img .add-fav {
position: absolute;
right: 0;
box-shadow: 0 0 0 1px rgba(67, 41, 163, .08), 0 1px 5px 0 rgba(67, 41, 163, .08);
background: #fff;
width: 35px;
height: 30px;
transform: translate(-15px, 0%);
bottom: -15px;
border-radius: 5px 5px 0 0px;
display: flex;
align-items: center;
justify-content: center;
font-size: 18px;
}
.testimonial-wrapper .testimonial-box .testimonial-img .add-fav>img {
padding: 8px;
}
.testimonial-wrapper .testimonial-box .testimonial-user-box {
display: flex;
align-items: center;
margin-bottom: 10px;
}
.testimonial-wrapper .testimonial-box .testimonial-user-box img {
margin-right: 12px;
margin-bottom: 8px;
}
.testimonial-wrapper .testimonial-box .testimonial-user-box .testimonial-user-name p {
margin-bottom: 0px;
line-height: normal;
}
.testimonial-wrapper .testimonial-box .testimonial-user-box .testimonial-user-name span {
font-size: 11px;
margin-left: 3px;
}
/*list view*/

.product-list-view:first-child {
border-top: 1px solid rgba(67, 41, 163, .1)
}
.product-list-view {
padding: 15px;
cursor: pointer;
display: flex;
align-items: center;
justify-content: space-between;
width: 100%;
}
.product-list-view:hover {
background: rgba(0, 0, 0, 0.05);
transition: 0.5s;
}
.product-list-view .product-list-info {
width: 90px;
}
.product-list-view .product-right-col {
width: 95%;
}
.product-list-view .product-list-title h6 {
margin-bottom: 5px;
}
.product-list-view .product-list-info .product-list-img {
flex: 0 0 90px;
overflow: hidden;
height: 90px;
}
.product-list-view .product-list-bottom,
.product-list-view .product-list-details {
justify-content: space-between;
display: flex;
flex-wrap: wrap;
align-items: flex-start;
}
.product-list-view .product-list-details .product-list-title {
align-content: space-between;
padding-left: 20px;
max-width: 100%;
}
.product-list-view .product-list-details .product-detail-right-box {
display: flex;
justify-content: space-between;
width: 60%;
}
.product-list-view .product-list-details .product-detail-right-box .product-list-tags {
display: flex;
flex-wrap: wrap;
}
.product-list-view .product-right-col .product-list-bottom .mob-tags-label {
display: none;
}
.product-list-view .product-list-details .product-detail-right-box .product-list-label span {
margin: 0;
margin-bottom: 2px;
}
.product-list-view .product-list-details .product-detail-right-box .product-list-price .product-list-time {
display: none;
}
.product-list-view .product-list-details .product-list-price {
text-align: right;
}
.product-list-view .product-list-time,
.product-list-view .product-list-time ul {
display: flex;
align-items: center;
justify-content: flex-end;
}
.product-list-view .product-list-time ul li {
padding: 0 10px;
position: relative;
}
.product-list-view .product-list-time ul li:after {
content: '';
background: #6b6b83;
width: 3px;
height: 3px;
display: block;
border-radius: 50%;
position: absolute;
top: 50%;
right: 0;
transform: translate(0px, -50%);
}
.product-list-view .product-list-time ul li:last-child {
padding-right: 0;
}
.product-list-view .product-list-time ul li:last-child:after {
display: none;
}
.product-list-view .product-list-bottom .product-list-type {
padding-left: 20px;
}
.product-list-view .product-list-bottom .product-list-type span {
display: inline-block;
}
.product-list-view .product-list-time {
width: 27%;
justify-content: space-between;
}
.product-list-view .product-list-time>span {
margin-right: 20px;
}
/*=========================
8. Login & register
===========================*/

/*.user-page .login-sec {
position: absolute;
left: 0;
right: 0;
top: 62%;
transform: translate(0px, -50%);
}*/
.user-page .login-sec .login-box {
max-width: 420px;
width: auto;
margin: 0 auto;
margin-top: 100px;
box-shadow: 0 0 0 1px rgba(67, 41, 163, .08), 0 1px 5px 0 rgba(67, 41, 163, .08);
border-radius: 3px;
background: #fff;
padding: 30px;
box-shadow: 0 2px 8px rgb(0 0 0 / 16%);
border-radius: 12px;
}
.user-page .login-sec .login-box .checkbox-reset {
display: flex;
align-items: center;
justify-content: space-between;
}
.user-page .login-sec .login-box span.terms {
display: flex;
flex-wrap: wrap;
justify-content: center;
}
.user-page .login-sec .login-box span.terms a {
margin: 0 3px;
}
.user-page .login-sec .login-box .form-group .field-icon {
float: right;
margin-left: -25px;
margin-top: -28px;
position: relative;
z-index: 2;
right: 18px;
cursor: pointer;
}
/*=========================
9. Checkout
===========================*/

.recipt-sec,
.tracking-sec {
display: flex;
box-shadow: 0 0 0 1px rgba(67, 41, 163, .08), 0 1px 5px 0 rgba(67, 41, 163, .08);
border-radius: 3px;
background: #fff;
margin-bottom: 20px;
}
.recipt-sec {
display: block;
margin-bottom: 0;
}
.tracking-sec .tracking-map,
.tracking-sec .tracking-details {
flex: 0 0 50%;
max-width: 50%;
}
#add-listing-tab1 .step-steps,
#add-listing-tab .step-steps {
display: -webkit-box;
display: flex;
flex-wrap: wrap;
-webkit-box-pack: justify;
justify-content: space-between;
padding-left: 0;
}
.step-app > .step-steps {
overflow: hidden;
margin: 0 auto;
}
#add-listing-tab1 .step-steps > li,
#add-listing-tab .step-steps > li {
flex: 0 0 25%;
max-width: 25%;
}
.step-app > .step-steps > li {
display: inline-block;
position: relative;
z-index: 1;
text-align: center;
}
#add-listing-tab1 .step-steps > li:before,
#add-listing-tab .step-steps > li:before {
background-color: #e3e3e3;
height: 12px;
left: 45%;
top: 19px;
width: 100%;
transition: all 0.3s;
margin-left: 4px;
}
#add-listing-tab1 .step-steps > li:first-child:before,
#add-listing-tab .step-steps > li:first-child:before {
border-radius: 10px 0 0 10px;
}
.step-app > .step-steps > li:before {
position: absolute;
content: "";
z-index: -1;
width: 100%;
height: 2px;
background-color: #C4CAD2;
top: 35px;
left: 85px;
}
.step-app > .step-steps > li > a,
.step-app > .step-steps > li > a > span {
display: block;
}
#add-listing-tab1 .step-steps > li > a > .number,
#add-listing-tab .step-steps > li > a > .number {
width: 12px;
height: 12px;
background-color: #b6b6b6;
border: 0px solid;
transition: all 0.3s;
}
.step-app > .step-steps > li > a > .number {
border-radius: 50%;
color: #b6b6b6;
font-size: 18px;
font-weight: bold;
line-height: 50px;
margin: 10px auto;
position: relative;
z-index: 0;
top: 9px;
}
#add-listing-tab1 .step-steps > li.active > a > .number,
#add-listing-tab1 .step-steps > li.done > a > .number,
#add-listing-tab .step-steps > li.active > a > .number,
#add-listing-tab .step-steps > li.done > a > .number {
background-color: #003d00;
}
#add-listing-tab1 .step-steps > li > a > .step-name,
#add-listing-tab .step-steps > li > a > .step-name {
font-weight: 600;
color: #65a15a;
font-size: 12px;
margin-top: 20px;
transition: all 0.3s;
white-space: normal;
}
#add-listing-tab1 .step-steps > li:last-child:before,
#add-listing-tab .step-steps > li:last-child:before {
width: 0;
}
#add-listing-tab1 .step-steps > li.done:before,
#add-listing-tab .step-steps > li.done:before {
background-color: #00a000;
}
.tracking-sec .tracking-map #pickupmap {
height: 300px;
width: 100%;
}
.tracking-sec .tracking-details .fullpageview {
position: absolute;
bottom: 20px;
}
.md-modal {
margin: auto;
position: fixed;
top: 0px;
left: 0;
right: 0;
width: 100%;
min-width: 320px;
height: 100%;
z-index: 2000;
visibility: hidden;
backface-visibility: hidden;
}
.md-show {
visibility: visible;
}
.md-overlay {
position: fixed;
width: 100%;
height: 100%;
visibility: hidden;
top: 0;
left: 0;
z-index: 1000;
opacity: 0;
background: #fff;
transition: all 0.3s;
}
.md-show ~ .md-overlay {
opacity: 1;
visibility: visible;
}
.md-effect-12 .md-content {
transform: scale(0.8);
opacity: 0;
transition: all 0.3s;
height: 100%;
}
.md-show.md-effect-12 ~ .md-overlay {
background-color: #fff;
}
.md-show.md-effect-12 .md-content {
transform: scale(1);
opacity: 1;
}
.md-modal .md-content #pickupmap2 {
width: 100%;
height: 100%;
z-index: 9999;
}
.md-modal .md-content .modal-sidebar #add-listing-tab1 .step-steps > li:after {
content: "";
font-family: 'Font Awesome 5 Free';
font-weight: 900;
color: #00a000;
font-size: 14px;
-webkit-font-smoothing: antialiased;
display: inline-block;
font-style: normal;
font-variant: normal;
text-rendering: auto;
line-height: 1;
position: absolute;
top: 0;
}
.md-modal .md-content .modal-sidebar #add-listing-tab1 .step-steps > li.order-note:after {
content: "\f328";
}
.md-modal .md-content .modal-sidebar #add-listing-tab1 .step-steps > li.make-order:after {
content: "\f447";
}
.md-modal .md-content .modal-sidebar #add-listing-tab1 .step-steps > li.bike:after {
content: "\f21c";
}
.md-modal .md-content .modal-sidebar #add-listing-tab1 .step-steps > li.home-delivery:after {
content: "\f015";
}
.md-modal .md-content .modal-sidebar .arrow {
position: absolute;
right: 50px;
}
.md-modal .md-content .modal-sidebar .rating-box .ratings span {
cursor: pointer;
}
.md-modal .md-content .modal-sidebar .rating-box .ratings span:hover i {
color: #65a15a;
}
.recipt-sec .recipt-name.title {
align-items: center;
padding-bottom: 20px;
}
.countdown-box {
display: flex;
}
.countdown-box .time-box {
text-align: center;
margin-right: 20px;
display: flex;
flex-direction: column;
color: #65a15a;
align-items: center;
justify-content: center;
background: #ffffff;
width: 100px;
height: 100px;
border-radius: 3px;
font-size: 28px;
font-weight: 600;
box-shadow: 0 0 0 1px rgba(67, 41, 163, .08), 0 1px 5px 0 rgba(67, 41, 163, .08);
}
.countdown-box .time-box span {
line-height: 1;
}
.countdown-box .time-box span h6 {
margin-top: 5px;
color: #483B33000;
}
.home-2 .countdown-box .time-box:last-child {
margin-right: 0;
}
.recipt-sec .recipt-name span {
display: block;
}
.checkout-product {
display: flex;
justify-content: space-between;
align-items: flex-start;
margin-bottom: 20px;
}
.checkout-product .img-name-value {
display: flex;
align-items: flex-start;
}
.checkout-product .img-name-value .product-value {
margin: 0 30px;
}
.payment-method .method-type {
display: flex;
align-items: center;
}
.payment-method .method-type i {
font-size: 40px;
margin-right: 15px;
}
.price-table .item {
display: flex;
align-items: center;
justify-content: space-between;
}
.checkout-page .help-btn {
margin: 0px 0;
}
.checkout-page .d-flex {
align-items: center;
justify-content: center;
}
/*=========================
10. Final Order
===========================*/

.final-order .title2 span {
margin-left: 140px;
}
.final-order .advertisement-img,
.final-order .advertisement-img img {
height: 100%;
}
/*=========================
11. Geo Locator
===========================*/

.inner-wrapper {
height: inherit;
position: relative;
}
.log-bdy
{
    background-image: url(../img/log-bg.jpg);

  background-repeat: no-repeat;
  width: 100%;
  height: 100%;
  background-size: contain;
}
.main-padding {
padding: 64px 100px;
}
.section-2,
.main-banner {
height: auto;
}
.main-banner .main-img {
width: 100%;
height: 100%;
object-fit: cover;
object-position: center;
}
.main-banner .footer-img {
position: absolute;
bottom: 0;
max-width: 340px;
right: 0;
}
.inner-wrapper .main-page .top-nav {
position: absolute;
top: 64px;
display: flex;
right: 70px;
}
.inner-wrapper .main-page .top-nav h5 {
margin-right: 30px;
}
.inner-wrapper .main-page .login-box {
height: 100%;
display: flex;
align-items: center;
}
.inner-wrapper .main-page .login-box .input-group-prepend {
height: 47px;
min-width: 44px;
flex-basis: 44px;
border: 1px solid #8f8fa1;
border-left: 0;
border-radius: 0px 4px 4px 0;
display: none;
}
.inner-wrapper .main-page .login-box .input-group-prepend .input-group-text {
line-height: 1.5;
font-size: 20px;
background: transparent;
border: none;
}
.inner-wrapper .main-page .login-box .input-group .input-group2 {
display: flex;
}
.inner-wrapper .main-page .login-box .input-group {
margin: 0 -4px
}
.inner-wrapper .main-page .login-box .input-group .input-group2,
.inner-wrapper .main-page .login-box .input-group-append {
padding: 0 8px;
}
.inner-wrapper .main-page .login-box .input-group-append button {
white-space: normal;
}
/*=========================
12. About Us
===========================*/

/*slider*/

.about-us-slider .slide-item {
height: 700px;
}
.about-us-slider .slide-item img {
width: 100%;
height: 100%;
object-fit: cover;
object-position: center;
}
.about-us-slider .slide-item .right-side-content h1 {
font-size: 60px;
line-height: 1.2;
text-transform: capitalize;
}
.about-us-slider .slide-item .right-side-content {
transition: all 1s linear;
transition-delay: 1s;
max-width: 580px;
margin: 0 auto;
}

/*aboutus*/

.aboutus .history-title {
margin-top: -7px;
}
.aboutus .history-title>a {
margin-top: 20px;
}
/*how it works*/

.how-it-works .how-it-works-box {
text-align: center;
padding: 20px 0px;
cursor: pointer;
}
.how-it-works .how-it-works-box.arrow-1:after {
content: '';
width: 100%;
background: url(../img/arrow-2.svg) no-repeat;
position: absolute;
right: 0;
z-index: 1;
background-size: contain;
background-position: right;
height: 70px;
top: -35px;
transform: rotate(50deg);
left: 65px;
}
.how-it-works .how-it-works-box.arrow-2:after {
content: '';
width: 100%;
background: url(../img/arrow-3.svg) no-repeat;
position: absolute;
right: 0;
z-index: 1;
background-size: contain;
background-position: right;
height: 70px;
top: -20px;
transform: rotate(35deg);
left: 50px;
}
.how-it-works .how-it-works-box .how-it-works-box-inner {
max-width: 250px;
margin: 0 auto;
}
.how-it-works .how-it-works-box .how-it-works-box-inner h6,
.how-it-works .how-it-works-box .how-it-works-box-inner .icon-box {
margin-bottom: 15px;
}
.how-it-works .how-it-works-box .how-it-works-box-inner .icon-box {
display: flex;
align-items: center;
justify-content: center;
width: 120px;
height: 120px;
border-radius: 50%;
background-color: #65a15a;
margin: 0 auto 15px;
position: relative;
}
.how-it-works .how-it-works-box .how-it-works-box-inner .icon-box img {
padding: 30px;
}
.how-it-works .how-it-works-box .how-it-works-box-inner .icon-box .number-box {
position: absolute;
top: 0;
left: 10px;
background: #fff;
border-radius: 50%;
width: 30px;
height: 30px;
display: flex;
align-items: center;
justify-content: center;
box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
font-size: 12px;
}
/*feedback-area-two*/

.feedback-area-two {
text-align: center;
position: relative;
z-index: 1;
opacity: 0.9;
}
.feedback-area-two .feedback-item-two {
max-width: 800px;
margin: 15px auto 0;
}
.feedback-area-two .feedback-item-two img {
width: 80px;
height: 80px;
margin: auto;
border-radius: 50%;
border: 4px solid #ffffff;
margin-bottom: 17px;
}
.feedback-area-two .feedback-item-two p {
font-style: italic;
margin-bottom: 15px;
}
.feedback-area-two .feedback-item-two span {
line-height: 1;
display: block;
margin-top: 9px;
}
/* fixes */

.side-bar .trending-blog-cat li:last-child {
margin-bottom: 0;
padding-bottom: 0;
border-bottom: 0px;
}
.blog-meta-author {
display: flex;
justify-content: space-between;
align-items: center;
margin-bottom: 20px;
}
.btn-second-2 {
display: inline-block;
text-align: center;
vertical-align: middle;
user-select: none;
border: 1px solid;
padding: 7px 15px 8px;
font-size: 14px;
line-height: 1.51741;
border-radius: 4px;
transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
vertical-align: middle;
white-space: nowrap;
font-weight: 500;
position: relative;
}

.delivery-slider .irs--flat.irs-with-grid {
  width: 95%;
  margin: 0 auto;
}

.delivery-slider .irs--flat .irs-line,
.delivery-slider .irs--flat .irs-bar {
  height: 2px;
  top: 30px;
  cursor: pointer;
}
.delivery-slider .irs--flat .irs-handle {
  width: 0;
}
.delivery-slider .irs--flat .irs-handle>i:first-child {
  top: 50%;
  width: 15px;
  height: 15px;
  background-color: #65a15a;
  border-radius: 50%;
  transform: translate(0px, -50%);
  cursor: pointer;
}
.delivery-slider .irs--flat .irs-bar {
  background-color: #65a15a;
}
.delivery-slider .irs--flat .irs-from:before,
.delivery-slider .irs--flat .irs-to:before, .irs--flat .irs-single:before {
  position: absolute;
  display: block;
  content: "";
  bottom: -6px;
  left: 50%;
  width: 0;
  height: 0;
  margin-left: -3px;
  overflow: hidden;
  border: 3px solid transparent;
  border-top-color: #65a15a;
}
.delivery-slider .irs--flat .irs-from,
.delivery-slider .irs--flat .irs-to,
.delivery-slider .irs--flat .irs-single {
  color: white;
  font-size: 10px;
  line-height: 1.333;
  text-shadow: none;
  padding: 1px 5px;
  background-color: #65a15a;
  border-radius: 4px;
}
/* Subscribe */
#subscribe-form {
  float: none;
  margin: 0 25%;
}
.block_newsletter form {
  position: relative;
}
.subscribe-content {
  background-color: #ffffff;
  height: 70px;
  width: 100%;
  position: relative;
  border-radius: 999px;
}
#subscribe-input {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: 0 none;
  float: left;
  height: 100%;
  padding: 0 0 0 30px;
  width: 100%;
  border: 1px #eae8f5 solid;
  border-right: none;
  box-shadow: none;
  border-radius: 999px;
  font-size: 16px;
  margin: 0px;
}
.block_newsletter form input[type=text] {
  border: none;
  padding: 10px;
  min-width: 255px;
}
.block_newsletter form input[type=text] {
  padding: 12px;
  width: 100%;
}
.block_newsletter form input {
  height: 50px;
  padding: 12px 30px;
  border: 1px solid #fff;
  outline: 0;
  font-weight: 400;
}
.subscribe-content button.button {
  overflow: visible;
  width: auto;
  border: 0;
  padding: 0;
  margin: 0;
  background: transparent;
  cursor: pointer;
  position: absolute;
  right: 0;
  top: 0;
  /* border-radius: 0px 999px; */
}
.subscribe-content button.button span {
  background: #65a15a;
  border-left: 1px solid #eae8f5;
  color: #151515;
  font-size: 18px;
  height: 70px;
  line-height: 70px;
  text-transform: uppercase;
  transition: all 0.3s ease-in;
  display: inline-block;
  padding: 0px 25px;
  /* border-radius: 2px; */
  font-weight: 500;
  letter-spacing: 0.5px;
  font-family: 'Ubuntu', sans-serif;
  border-radius: 0px 999px 999px 0px;
}

.subscribe-content button.button:hover span{
background-color: #483B33000;
color: #ffffff;
}
/* 404 */
.page-404{
background-color: #65a15a;
}
#page-404 section {
  display: flex;
  justify-content: center;
  height: 100vh;
  text-align: center;
  align-items: center;
  width: 100%;
}
#page-404 .caption h5 {
  margin: 50px 0;
  font-weight: 400;
}
.coming-soon .content-wrapper h1 a,
#page-404 .caption h5 a {
  text-decoration: underline;
  text-underline-position: under;
}
/* Compare */
.compare-table .table tbody tr td.first-column {
  min-width: 175px;
  font-size: 15px;
  font-weight: 500;
  color: #483B33;
  margin: 0;
}
.compare-table .table tbody tr td {
  text-align: center;
  padding: 20px 20px;
  vertical-align: middle;
  border-color: #ccc;
}
.compare-table .table tbody tr td.product-image-title {
  min-width: 310px;
  vertical-align: bottom;
}
.compare-table .table tbody tr td {
  text-align: center;
  padding: 20px 20px;
  vertical-align: middle;
  border-color: #ccc;
}
.compare-table .table tbody tr td.product-image-title .image {
  clear: both;
  width: 100%;
  margin-bottom: 15px;
  display: block;
}
.compare-table .table tbody tr td.product-image-title .category {
  float: left;
  clear: both;
  color: #65a15a;
  text-transform: capitalize;
  letter-spacing: 0.5px;
}
.compare-table .table tbody tr td.product-image-title .title {
  float: left;
  clear: both;
  font-size: 16px;
  color: #483B33;
  font-weight: 500;
  text-transform: capitalize;
}
.compare-table .table tbody tr td.pro-price,
.compare-table .table tbody tr td.pro-color,
.compare-table .table tbody tr td.pro-stock {
  font-size: 14px;
  font-weight: 400;
}
.compare-table .table tbody tr td.pro-ratting i {
  color: #65a15a;
}
.compare-table .table tbody tr td.pro-remove button {
  border: none;
  background-color: transparent;
  padding: 0;
  cursor: pointer;
  -webkit-transition: 0.4s;
  -o-transition: 0.4s;
  transition: 0.4s;
}
.pro-remove button i,
.pro-remove a i{
font-size: 26px;
}

.pro-remove a:hover i,
.pro-remove button:hover i{
color: red;
}

/* Shop-Tabs */
.shop-tabs.nav-pills .nav-link{
color: #483B33;
background-color: transparent;
}


.shop-tabs.nav-pills .nav-link.active,
.shop-tabs.nav-pills .show > .nav-link {
  color: #65a15a;
  background-color: transparent;
  border-bottom: 1px solid #65a15a;
  border-radius: 0px;
}

.blog-link-wrap .btn-text{
  font-size: 14px;
  text-transform: capitalize;
  color: #65a15a;
}
.blog-link-wrap .btn-text::before{
  background-color: #65a15a;
}

/* Wishlist */
.cart-table .table {
  margin: 0;
  white-space: nowrap;
}
.cart-table .table thead {
  background-color: #65a15a;
}
.cart-table .table tr .pro-thumbnail,
.cart-table .table tr .pro-price,
.cart-table .table tr .pro-quantity,
.cart-table .table tr .pro-subtotal,
.cart-table .table tr .pro-remove {
  width: 140px;
}
.cart-table .table thead tr th {
  border-color: #65a15a;
  border-bottom: 0 solid transparent;
  color: #fff;
  font-size: 14px;
  font-weight: 700;
  padding: 15px 20px;
  text-align: center;
  text-transform: capitalize;
}
.cart-table .table tbody tr td {
  border-color: #ccc;
  text-align: center;
  padding: 10px 20px;
  vertical-align: middle;
  font-weight: 500;
  color: #483B33;
}
.cart-table .table tbody tr td a {
  color: #483B33;
  font-weight: 400;
  text-transform: capitalize;
}
.product-img a img{
overflow: hidden;
}
</style>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="keywords" content="#">
	<meta name="description" content="#">
	<title>Greenlight | </title>
	<!-- Fav and touch icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="#">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="#">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="#">
	<link rel="apple-touch-icon-precomposed" href="#">
	<link rel="shortcut icon" href="#">
	<!-- Bootstrap -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<!-- Fontawesome -->
	<link href="assets/css/font-awesome.css" rel="stylesheet">
	<!-- Flaticons -->
	<link href="assets/css/font/flaticon.css" rel="stylesheet">
	<!-- Pe-icons -->
	<link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet">
	<!-- Swiper Slider -->
	<link href="assets/css/swiper.min.css" rel="stylesheet">
	<!-- Range Slider -->
	<link href="assets/css/ion.rangeSlider.min.css" rel="stylesheet">
	<!-- magnific popup -->
	<link href="assets/css/magnific-popup.css" rel="stylesheet">
	<!-- Nice Select -->
	<link href="assets/css/nice-select.css" rel="stylesheet">
	<!-- Custom Stylesheet -->
	<link href="assets/css/style.css" rel="stylesheet">
	<link href="assets/css/responsive.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,500,600,700&amp;display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Libre+Franklin:400,500,600,700&amp;display=swap" rel="stylesheet">

</head>

<body>
	<!-- Navigation -->
  <div class="main-hed">
	<header class="header">
		<div class="container-fluid custom-container login-after">
			<div class="row">
				<div class="col-12">
					<div class="navigation">
						<div class="logo">
							<a href="index.html">
								<img src="assets/img/logo.png" class="image-fit" alt="logo">
							</a>
						</div>
             <ul class="dis-none">
        <li><i class="far fa-comment"></i></li>
             <li class="nav-item dropdown notif"> <a lass="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-bell"></i></a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>


          </li>
              <li class="nav-item dropdown user-drop">   <a lass="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img src="assets/img/usr.png" class="img-fluid usr-img" style=""> </a>
 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Anu Mol S</a>
          <a class="dropdown-item" href="#">View & Edit Profile</a>
          <a class="dropdown-item" href="#">Help</a>
          <a class="dropdown-item" href="#">Settings</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Logout</a>
        </div>

       </li>
</ul>
						<div class="location-mob">
						<a  class="pop-up-button" href="#pop-up-one"><i class="fas fa-map-marker-alt"></i> &nbsp;Location</a>
					</div>
						<div class="main-navigation">
				<nav class="main ser-home">
							<select name="">
      <option value="1">Location</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
      <option value="4">Four</option>
  </select>
							</nav>
<div class="wrap dis-wrp">
   <div class="search">
      <input type="text" class="searchTerm" placeholder="What are you looking for?">
      <button type="submit" class="searchButton">
        <i class="fa fa-search"></i>
     </button>
   </div>
   <ul>

        <li> <a href="#">           <i class="far fa-comment"></i></a></li>
          <li class="nav-item dropdown notif"> <a lass="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-bell"></i></a>
 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>


          </li>
        <li class="nav-item dropdown user-drop">   <a lass="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img src="assets/img/usr.png" class="img-fluid usr-img" style=""> </a>
 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Anu Mol S</a>
          <a class="dropdown-item" href="#">View & Edit Profile</a>
          <a class="dropdown-item" href="#">Help</a>
          <a class="dropdown-item" href="#">Settings</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Logout</a>
        </div>

       </li>
</ul>
</div>
<ul class="log1">
								<li class="hamburger-menu">
									<a href="#" class="menu-btn"> <span></span>
										<span></span>
										<span></span>
									</a>
								</li>
					<!-- 			<li class="user-details log-reg-btn">
									<a href="login.html">  <span>Login / Register</span>
									</a>
								</li> -->
						<!-- 		<li class="user-details">
									<a href="#">  <span>Sell</span>
									</a>
								</li> -->

							</ul>
  <ul class="navbar-nav mr-auto nav1">
    	   <li class="nav-item active">
        <a class="nav-link " onclick="openNav()"
      style="


        cursor: pointer;
        display: inline-block;
      " href="#"><i class="fas fa-bars"></i> All <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Seeds <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Plants</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Pots
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Pots & Planters</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Plant Care</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Tools & Accessories</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">DIY Pest Control</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Kits</a>
      </li>
 <li class="nav-item">
        <a class="nav-link" href="#">Offers</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">Plant Subscription</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">Green Gifting</a>
      </li>



    </ul>

						</div>
						<div class="right-side-navigation">
							<ul >
								<li class="hamburger-menu">
									<a href="#" class="menu-btn"> <span></span>
										<span></span>
										<span></span>
									</a>
								</li>
						<!-- 		<li class="user-details log2">
									<a href="login.html">  <span class="custom-btn btn-14">Login / Register</span>
									</a>
								</li> -->
          <!--       <li><i class="far fa-comment"></i></li>
                 <li><i class="far fa-bell"></i></li> -->

								<li class="user-details log2 ">
									<a href="#" >  <span class="custom-btn btn-14">Sell</span>
									</a>
								</li>

							</ul>
              <ul></ul>
						</div>
					</div>
				</div>
			</div>
		</div>

<div id="pop-up-one" class="pop-up-overlay">
  <div class="pop-up">
    <h1></h1>
    <a class="close" href="#">&times;</a>
    <div class="ser-loc">
   <select name="">
      <option value="1">Location</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
      <option value="4">Four</option>
  </select>
</div>
  </div>
</div>
	</header>
	<section class="secnd-sec">
	<div class="wrap">
   <div class="search">
      <input type="text" class="searchTerm" placeholder="What are you looking for?">
      <button type="submit" class="searchButton ">
        <i class="fa fa-search"></i>
     </button>
   <a href="#" class="sell-mob-btn">  <span >Sell</span></a>
   </div>

</div>

	<nav class="navbar navbar-expand-lg  container">

  <button class="navbar-toggler n2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><i class="fas fa-bars" style="color:white; font-size:28px;"></i></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto nav2">
    	   <li class="nav-item active">
        <a class="nav-link " onclick="openNav()"
      style="


        cursor: pointer;
        display: inline-block;
      " href="#"><i class="fas fa-bars"></i> All <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Seeds <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Plants</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Pots
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Pots & Planters</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Plant Care</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Tools & Accessories</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">DIY Pest Control</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Kits</a>
      </li>
 <li class="nav-item">
        <a class="nav-link" href="#">Offers</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">Plant Subscription</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">Green Gifting</a>
      </li>



    </ul>

  </div>
</nav>
</section>
</div>

<div id="overlay" onclick="closeNav()"></div>

    <div id="closeBtn" onclick="closeNav()">&times;</div>
    <div class="sidenav" id="mySidenav">
      <div class="sidenavHeader">
        <i class="fas fa-user-circle"></i> Hello, Sign In
      </div>
      <!--Below SideNavHeader-->
      <div id="main-container">
        <div class="sidenavContentHeader">Trending</div>
        <a href="#"><div class="sidenavContent">Best Sellers</div></a>
        <a href="#"><div class="sidenavContent">New Releases</div></a>
        <a href="#"><div class="sidenavContent">Movers and Shakers</div></a>
        <hr />
        <div class="sidenavContentHeader">Digital Content And Devices</div>
        <a href="#" onclick="openPrimeVideo()"
          ><div class="sidenavRow">
            <div>Prime Video</div>
            <i class="fas fa-chevron-right" style="color: #8e9090"></i></div
        ></a>
        <a href="#" onclick="openAmazonMusic()"
          ><div class="sidenavRow">
            <div>Amazon Music</div>
            <i class="fas fa-chevron-right" style="color: #8e9090"></i></div
        ></a>
        <a href="#"
          ><div class="sidenavRow">
            <div>Apps for Android</div>
            <i class="fas fa-chevron-right" style="color: #8e9090"></i></div
        ></a>
        <a href="#"
          ><div class="sidenavRow">
            <div>Echo, Alexa & Smart Home</div>
            <i class="fas fa-chevron-right" style="color: #8e9090"></i></div
        ></a>
        <a href="#"
          ><div class="sidenavRow">
            <div>Fire TV</div>
            <i class="fas fa-chevron-right" style="color: #8e9090"></i></div
        ></a>
        <a href="#"
          ><div class="sidenavRow">
            <div>Fire Tablets</div>
            <i class="fas fa-chevron-right" style="color: #8e9090"></i></div
        ></a>
        <a href="#"
          ><div class="sidenavRow">
            <div>Kindle E-readers & Books</div>
            <i class="fas fa-chevron-right" style="color: #8e9090"></i></div
        ></a>
        <a href="#"
          ><div class="sidenavRow">
            <div>Audible Audiobooks</div>
            <i class="fas fa-chevron-right" style="color: #8e9090"></i></div
        ></a>
        <hr />
        <div class="sidenavContentHeader">Shop By Department</div>
        <a href="#"
          ><div class="sidenavRow">
            <div>Amazon Fresh</div>
            <i class="fas fa-chevron-right" style="color: #8e9090"></i></div
        ></a>
        <a href="#">
          <div class="sidenavRow">
            <div>Books</div>
            <i class="fas fa-chevron-right" style="color: #8e9090"></i>
          </div>
        </a>
        <a href="#">
          <div class="sidenavRow">
            <div>Films, TV, Music & Games</div>
            <i class="fas fa-chevron-right" style="color: #8e9090"></i>
          </div>
        </a>
        <a href="#">
          <div class="sidenavRow">
            <div>Electronics & Computers</div>
            <i class="fas fa-chevron-right" style="color: #8e9090"></i>
          </div>
        </a>
        <div class="sidenavContainer" id="firstContainer">
          <hr />
          <a href="#">
            <div class="sidenavRow">
              <div>Home, Garden, Pets & DIY</div>
              <i class="fas fa-chevron-right" style="color: #8e9090"></i>
            </div>
          </a>
          <a href="#">
            <div class="sidenavRow">
              <div>Toys, Children & Baby</div>
              <i class="fas fa-chevron-right" style="color: #8e9090"></i>
            </div>
          </a>
          <a href="#">
            <div class="sidenavRow">
              <div>Clothes, Shoes, Jewellery & Accessories</div>
              <i class="fas fa-chevron-right" style="color: #8e9090"></i>
            </div>
          </a>
          <a href="#">
            <div class="sidenavRow">
              <div>Sports & Outdoors</div>
              <i class="fas fa-chevron-right" style="color: #8e9090"></i>
            </div>
          </a>
          <a href="#">
            <div class="sidenavRow">
              <div>Food & Grocery</div>
              <i class="fas fa-chevron-right" style="color: #8e9090"></i>
            </div>
          </a>
          <a href="#">
            <div class="sidenavRow">
              <div>Health & Beauty</div>
              <i class="fas fa-chevron-right" style="color: #8e9090"></i>
            </div>
          </a>
          <a href="#">
            <div class="sidenavRow">
              <div>Car & Motorbike</div>
              <i class="fas fa-chevron-right" style="color: #8e9090"></i>
            </div>
          </a>
          <a href="#">
            <div class="sidenavRow">
              <div>Business, Industry & Science</div>
              <i class="fas fa-chevron-right" style="color: #8e9090"></i>
            </div>
          </a>
        </div>
        <div
          class="sidenavRowDropdown"
          id="firstDropDown"
          onclick="firstDropDown()"
        >
          <div>See All</div>
          <i
            class="fas fa-chevron-down"
            style="color: #8e9090; margin-left: 10px"
          >
          </i>
        </div>
        <hr />
        <div class="sidenavContentHeader">Programs & Features</div>
        <a href="#">
          <div class="sidenavRow">
            <div>Gift Cards & Top Up</div>
            <i class="fas fa-chevron-right" style="color: #8e9090"></i>
          </div>
        </a>
        <a href="#">
          <div class="sidenavRow">
            <div>Find a Gift</div>
            <i class="fas fa-chevron-right" style="color: #8e9090"></i>
          </div>
        </a>
        <a href="#">
          <div class="sidenavRow">
            <div>Handmade</div>
            <i class="fas fa-chevron-right" style="color: #8e9090"></i>
          </div>
        </a>
        <a href="#">
          <div class="sidenavRow">
            <div>Amazon Launchpad</div>
            <i class="fas fa-chevron-right" style="color: #8e9090"></i>
          </div>
        </a>
        <!--Beginning of second sidenavContainer-->
        <div class="sidenavContainer" id="secondContainer">
          <hr />
          <a href="#">
            <div class="sidenavContent">Made In Italy</div>
          </a>
          <a href="#">
            <div class="sidenavRow">
              <div>Home Services</div>
              <i class="fas fa-chevron-right" style="color: #8e9090"></i>
            </div>
          </a>
          <a href="#">
            <div class="sidenavContent">Prime Wardrobe</div>
          </a>
          <a href="#">
            <div class="sidenavRow">
              <div>Amazon Business</div>
              <i class="fas fa-chevron-right" style="color: #8e9090"></i>
            </div>
          </a>
          <a href="#">
            <div class="sidenavContent">Amazon Second Chance</div>
          </a>
        </div>
        <div
          class="sidenavRowDropdown"
          id="secondDropDown"
          onclick="secondDropDown()"
        >
          <div>See All</div>
          <i
            class="fas fa-chevron-down"
            style="color: #8e9090; margin-left: 10px"
          >
          </i>
        </div>
        <hr />
        <div class="sidenavContentHeader">Help & Settings</div>
        <a href="#"><div class="sidenavContent">Your Account</div></a>
        <a href="#"><div class="sidenavContent">Currency Settings</div></a>
        <a href="#"><div class="sidenavContent">Customer Service</div></a>
        <a href="#"><div class="sidenavContent">Sign In</div></a>
        <div style="height: 50px"></div>
      </div>
      <!--End of first container-->

      <div id="sub-container">
        <div id="mainMenu">
          <i class="fas fa-chevron-left" style="color: #8e9090"></i> MAIN MENU
        </div>
        <hr />
        <div id="sub-container-content">
          <!-- <div class="sidenavContentHeader">Prime Video</div>
          <a href="#"><div class="sidenavContent">All Videos</div></a> -->
        </div>
      </div>
    </div>

    <!--Not Sidenav-->
    <div>

	<div class="main-sec"></div>


<div class="breadcrumb-area">
    <div class="overlay overlay-bg"></div>
    <div class="container-fluid">
      <div class="breadcrumb-content">
        <h2 class="text-white"></h2>
        <ul>
          <li><a href="index.html">Home</a>
          </li>
          <li class="active">Offers</li>
        </ul>
      </div>
    </div>
  </div>
  <!-- breadcrumb -->


<!--product Start-->

























  <section class="section-padding our-product bg-light-theme">
    <div class="container-fluid custom-container">
      <div class="row">
        <div class="offrs-wrp">
<h4>Flat 20% OFF on all plants</h4>
<p>
We often don't think to buy plant online. But what if we tell you that you can now order the most beautiful plants right from home? Ugaoo presents a broad range of Live Plants that can be bought online in India. Our online nursery collection includes Annual Flowers, Aromatic and Aquatic Plants, Cactii, Bonsai, Ferns, Indoor and Outdoor Plants, Landscape Plants, Bamboo, etc.</p>
</div>
        <div class="col-xl-12 col-lg-12" >
          <div class="full-width">
            <div class="row">
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="product-box mb-md-20">
                  <div class="product-img">
                    <a href="#">
                      <img src="assets/img/shop/product1.jpg" class="img-fluid full-width" alt="product-img">
                    </a>
                    <div class="product-badge">
                      <div class="product-label new"> <span>New</span>
                      </div>
                      <div class="product-label discount"> <span>15%</span>
                      </div>
                    </div>
                    <div class="button-group"> <a href="wishlist.html" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist" tabindex="-1"><i class="pe-7s-like"></i></a>
                      <a href="compare.html" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to Compare" tabindex="-1"><i class="pe-7s-refresh-2"></i></a><a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><i class="pe-7s-search"></i></span></a>
                    </div>

                  </div>
                  <div class="product-caption text-center"> <span class="product-category"><a href="#">Plants</a></span>
                    <h6 class="product-title fw-500 mt-10"><a href="shop-details.html" class="text-light-black">Inspiration Plant</a></h6>
                    <div class="product-money mt-10"> <span class="text-dark-red fw-500">$90.00</span>
                      <span class="text-price">$250.00</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="product-box mb-md-20">
                  <div class="product-img">
                    <a href="#">
                      <img src="assets/img/shop/product2.jpg" class="img-fluid full-width" alt="product-img">
                    </a>
                    <div class="product-badge">
                      <div class="product-label new"> <span>New</span>
                      </div>
                      <div class="product-label discount"> <span>15%</span>
                      </div>
                    </div>
                    <div class="button-group"> <a href="wishlist.html" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist" tabindex="-1"><i class="pe-7s-like"></i></a>
                      <a href="compare.html" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to Compare" tabindex="-1"><i class="pe-7s-refresh-2"></i></a><a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><i class="pe-7s-search"></i></span></a>
                    </div>

                  </div>
                  <div class="product-caption text-center"> <span class="product-category"><a href="#">Hanging</a></span>
                    <h6 class="product-title fw-500 mt-10"><a href="shop-details.html" class="text-light-black">Hanging Indoor Plant</a></h6>
                    <div class="product-money mt-10"> <span class="text-dark-red fw-500">$90.00</span>
                      <span class="text-price">$250.00</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="product-box mb-md-20">
                  <div class="product-img">
                    <a href="#">
                      <img src="assets/img/shop/product6.jpg" class="img-fluid full-width" alt="product-img">
                    </a>
                    <div class="product-badge">
                      <div class="product-label new"> <span>New</span>
                      </div>
                      <div class="product-label discount"> <span>15%</span>
                      </div>
                    </div>
                    <div class="button-group"> <a href="wishlist.html" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist" tabindex="-1"><i class="pe-7s-like"></i></a>
                      <a href="compare.html" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to Compare" tabindex="-1"><i class="pe-7s-refresh-2"></i></a><a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><i class="pe-7s-search"></i></span></a>
                    </div>

                  </div>
                  <div class="product-caption text-center"> <span class="product-category"><a href="#">Plants</a></span>
                    <h6 class="product-title fw-500 mt-10"><a href="shop-details.html" class="text-light-black">Grow Orchid</a></h6>
                    <div class="product-money mt-10"> <span class="text-dark-red fw-500">$90.00</span>
                      <span class="text-price">$250.00</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="product-box mb-md-20">
                  <div class="product-img">
                    <a href="#">
                      <img src="assets/img/shop/product3.jpg" class="img-fluid full-width" alt="product-img">
                    </a>
                    <div class="product-badge">
                      <div class="product-label new"> <span>New</span>
                      </div>
                    </div>
                    <div class="button-group"> <a href="wishlist.html" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist" tabindex="-1"><i class="pe-7s-like"></i></a>
                      <a href="compare.html" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to Compare" tabindex="-1"><i class="pe-7s-refresh-2"></i></a><a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><i class="pe-7s-search"></i></span></a>
                    </div>

                  </div>
                  <div class="product-caption text-center"> <span class="product-category"><a href="#">Plants</a></span>
                    <h6 class="product-title fw-500 mt-10"><a href="shop-details.html" class="text-light-black">Grow Orchid</a></h6>
                    <div class="product-money mt-10"> <span class="text-dark-red fw-500">$90.00</span>
                      <span class="text-price">$250.00</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="product-box mb-md-20">
                  <div class="product-img">
                    <a href="#">
                      <img src="assets/img/shop/product5.jpg" class="img-fluid full-width" alt="product-img">
                    </a>
                    <div class="product-badge">
                      <div class="product-label new"> <span>New</span>
                      </div>
                      <div class="product-label discount"> <span>15%</span>
                      </div>
                    </div>
                    <div class="button-group"> <a href="wishlist.html" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist" tabindex="-1"><i class="pe-7s-like"></i></a>
                      <a href="compare.html" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to Compare" tabindex="-1"><i class="pe-7s-refresh-2"></i></a><a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><i class="pe-7s-search"></i></span></a>
                    </div>

                  </div>
                  <div class="product-caption text-center"> <span class="product-category"><a href="#">Inner</a></span>
                    <h6 class="product-title fw-500 mt-10"><a href="shop-details.html" class="text-light-black">Growth Plant</a></h6>
                    <div class="product-money mt-10"> <span class="text-dark-red fw-500">$90.00</span>
                      <span class="text-price">$250.00</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="product-box mb-md-20">
                  <div class="product-img">
                    <a href="#">
                      <img src="assets/img/shop/product4.jpg" class="img-fluid full-width" alt="product-img">
                    </a>
                    <div class="product-badge">
                      <div class="product-label new"> <span>New</span>
                      </div>
                    </div>
                    <div class="button-group"> <a href="wishlist.html" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist" tabindex="-1"><i class="pe-7s-like"></i></a>
                      <a href="compare.html" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to Compare" tabindex="-1"><i class="pe-7s-refresh-2"></i></a><a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><i class="pe-7s-search"></i></span></a>
                    </div>

                  </div>
                  <div class="product-caption text-center"> <span class="product-category"><a href="#">Plants</a></span>
                    <h6 class="product-title fw-500 mt-10"><a href="shop-details.html" class="text-light-black">Grow Orchid</a></h6>
                    <div class="product-money mt-10"> <span class="text-dark-red fw-500">$90.00</span>
                      <span class="text-price">$250.00</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="product-box mb-md-20">
                  <div class="product-img">
                    <a href="#">
                      <img src="assets/img/shop/product6.jpg" class="img-fluid full-width" alt="product-img">
                    </a>
                    <div class="product-badge">
                      <div class="product-label new"> <span>New</span>
                      </div>
                    </div>
                    <div class="button-group"> <a href="wishlist.html" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist" tabindex="-1"><i class="pe-7s-like"></i></a>
                      <a href="compare.html" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to Compare" tabindex="-1"><i class="pe-7s-refresh-2"></i></a><a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><i class="pe-7s-search"></i></span></a>
                    </div>

                  </div>
                  <div class="product-caption text-center"> <span class="product-category"><a href="#">Hanging</a></span>
                    <h6 class="product-title fw-500 mt-10"><a href="shop-details.html" class="text-light-black">Indoor Plant</a></h6>
                    <div class="product-money mt-10"> <span class="text-dark-red fw-500">$90.00</span>
                      <span class="text-price">$250.00</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="product-box mb-md-20">
                  <div class="product-img">
                    <a href="#">
                      <img src="assets/img/shop/product7.jpg" class="img-fluid full-width" alt="product-img">
                    </a>
                    <div class="product-badge">
                      <div class="product-label new"> <span>New</span>
                      </div>
                      <div class="product-label discount"> <span>15%</span>
                      </div>
                    </div>
                    <div class="button-group"> <a href="wishlist.html" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist" tabindex="-1"><i class="pe-7s-like"></i></a>
                      <a href="compare.html" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to Compare" tabindex="-1"><i class="pe-7s-refresh-2"></i></a><a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><i class="pe-7s-search"></i></span></a>
                    </div>

                  </div>
                  <div class="product-caption text-center"> <span class="product-category"><a href="#">Plants</a></span>
                    <h6 class="product-title fw-500 mt-10"><a href="shop-details.html" class="text-light-black">Inspiration Plant</a></h6>
                    <div class="product-money mt-10"> <span class="text-dark-red fw-500">$90.00</span>
                      <span class="text-price">$250.00</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="product-box mb-md-20">
                  <div class="product-img">
                    <a href="#">
                      <img src="assets/img/shop/product8.jpg" class="img-fluid full-width" alt="product-img">
                    </a>
                    <div class="product-badge">
                      <div class="product-label new"> <span>New</span>
                      </div>
                      <div class="product-label discount"> <span>15%</span>
                      </div>
                    </div>
                    <div class="button-group"> <a href="wishlist.html" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist" tabindex="-1"><i class="pe-7s-like"></i></a>
                      <a href="compare.html" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to Compare" tabindex="-1"><i class="pe-7s-refresh-2"></i></a><a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><i class="pe-7s-search"></i></span></a>
                    </div>

                  </div>
                  <div class="product-caption text-center"> <span class="product-category"><a href="#">Plants</a></span>
                    <h6 class="product-title fw-500 mt-10"><a href="shop-details.html" class="text-light-black">Inner Plants</a></h6>
                    <div class="product-money mt-10"> <span class="text-dark-red fw-500">$90.00</span>
                      <span class="text-price">$250.00</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="product-box mb-md-20">
                  <div class="product-img">
                    <a href="#">
                      <img src="assets/img/shop/product9.jpg" class="img-fluid full-width" alt="product-img">
                    </a>
                    <div class="product-badge">
                      <div class="product-label new"> <span>New</span>
                      </div>
                    </div>
                    <div class="button-group"> <a href="wishlist.html" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist" tabindex="-1"><i class="pe-7s-like"></i></a>
                      <a href="compare.html" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to Compare" tabindex="-1"><i class="pe-7s-refresh-2"></i></a><a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><i class="pe-7s-search"></i></span></a>
                    </div>

                  </div>
                  <div class="product-caption text-center"> <span class="product-category"><a href="#">Plants</a></span>
                    <h6 class="product-title fw-500 mt-10"><a href="shop-details.html" class="text-light-black">Corn Plant</a></h6>
                    <div class="product-money mt-10"> <span class="text-dark-red fw-500">$90.00</span>
                      <span class="text-price">$250.00</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="product-box mb-md-20">
                  <div class="product-img">
                    <a href="#">
                      <img src="assets/img/shop/product10.jpg" class="img-fluid full-width" alt="product-img">
                    </a>
                    <div class="product-badge">
                      <div class="product-label new"> <span>New</span>
                      </div>
                    </div>
                    <div class="button-group"> <a href="wishlist.html" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist" tabindex="-1"><i class="pe-7s-like"></i></a>
                      <a href="compare.html" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to Compare" tabindex="-1"><i class="pe-7s-refresh-2"></i></a><a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><i class="pe-7s-search"></i></span></a>
                    </div>

                  </div>
                  <div class="product-caption text-center"> <span class="product-category"><a href="#">Inner</a></span>
                    <h6 class="product-title fw-500 mt-10"><a href="shop-details.html" class="text-light-black">Cactus Plant</a></h6>
                    <div class="product-money mt-10"> <span class="text-dark-red fw-500">$90.00</span>
                      <span class="text-price">$250.00</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="product-box mb-md-20">
                  <div class="product-img">
                    <a href="#">
                      <img src="assets/img/shop/product11.jpg" class="img-fluid full-width" alt="product-img">
                    </a>
                    <div class="product-badge">
                      <div class="product-label new"> <span>New</span>
                      </div>
                    </div>
                    <div class="button-group"> <a href="wishlist.html" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist" tabindex="-1"><i class="pe-7s-like"></i></a>
                      <a href="compare.html" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to Compare" tabindex="-1"><i class="pe-7s-refresh-2"></i></a><a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><i class="pe-7s-search"></i></span></a>
                    </div>

                  </div>
                  <div class="product-caption text-center"> <span class="product-category"><a href="#">Hanging</a></span>
                    <h6 class="product-title fw-500 mt-10"><a href="shop-details.html" class="text-light-black">Hanging Indoor Plant</a></h6>
                    <div class="product-money mt-10"> <span class="text-dark-red fw-500">$90.00</span>
                      <span class="text-price">$250.00</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="product-box mb-md-20">
                  <div class="product-img">
                    <a href="#">
                      <img src="assets/img/shop/product1.jpg" class="img-fluid full-width" alt="product-img">
                    </a>
                    <div class="product-badge">
                      <div class="product-label new"> <span>New</span>
                      </div>
                    </div>
                    <div class="button-group"> <a href="wishlist.html" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist" tabindex="-1"><i class="pe-7s-like"></i></a>
                      <a href="compare.html" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to Compare" tabindex="-1"><i class="pe-7s-refresh-2"></i></a><a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><i class="pe-7s-search"></i></span></a>
                    </div>

                  </div>
                  <div class="product-caption text-center"> <span class="product-category"><a href="#">Plants</a></span>
                    <h6 class="product-title fw-500 mt-10"><a href="shop-details.html" class="text-light-black">Inspiration Plant</a></h6>
                    <div class="product-money mt-10"> <span class="text-dark-red fw-500">$90.00</span>
                      <span class="text-price">$250.00</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="product-box mb-md-20">
                  <div class="product-img">
                    <a href="#">
                      <img src="assets/img/shop/product3.jpg" class="img-fluid full-width" alt="product-img">
                    </a>
                    <div class="product-badge">
                      <div class="product-label new"> <span>New</span>
                      </div>
                      <div class="product-label discount"> <span>15%</span>
                      </div>
                    </div>
                    <div class="button-group"> <a href="wishlist.html" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist" tabindex="-1"><i class="pe-7s-like"></i></a>
                      <a href="compare.html" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to Compare" tabindex="-1"><i class="pe-7s-refresh-2"></i></a><a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><i class="pe-7s-search"></i></span></a>
                    </div>

                  </div>
                  <div class="product-caption text-center"> <span class="product-category"><a href="#">Palm</a></span>
                    <h6 class="product-title fw-500 mt-10"><a href="shop-details.html" class="text-light-black">Grow Orchid</a></h6>
                    <div class="product-money mt-10"> <span class="text-dark-red fw-500">$90.00</span>
                      <span class="text-price">$250.00</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="product-box mb-md-20">
                  <div class="product-img">
                    <a href="#">
                      <img src="assets/img/shop/product5.jpg" class="img-fluid full-width" alt="product-img">
                    </a>
                    <div class="product-badge">
                      <div class="product-label new"> <span>New</span>
                      </div>
                    </div>
                    <div class="button-group"> <a href="wishlist.html" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist" tabindex="-1"><i class="pe-7s-like"></i></a>
                      <a href="compare.html" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to Compare" tabindex="-1"><i class="pe-7s-refresh-2"></i></a><a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><i class="pe-7s-search"></i></span></a>
                    </div>

                  </div>
                  <div class="product-caption text-center"> <span class="product-category"><a href="#">Plants</a></span>
                    <h6 class="product-title fw-500 mt-10"><a href="shop-details.html" class="text-light-black">Grow Orchid</a></h6>
                    <div class="product-money mt-10"> <span class="text-dark-red fw-500">$90.00</span>
                      <span class="text-price">$250.00</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="product-box mb-md-20">
                  <div class="product-img">
                    <a href="#">
                      <img src="assets/img/shop/product6.jpg" class="img-fluid full-width" alt="product-img">
                    </a>
                    <div class="product-badge">
                      <div class="product-label new"> <span>New</span>
                      </div>
                    </div>
                    <div class="button-group"> <a href="wishlist.html" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist" tabindex="-1"><i class="pe-7s-like"></i></a>
                      <a href="compare.html" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to Compare" tabindex="-1"><i class="pe-7s-refresh-2"></i></a><a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><i class="pe-7s-search"></i></span></a>
                    </div>

                  </div>
                  <div class="product-caption text-center"> <span class="product-category"><a href="#">Inner</a></span>
                    <h6 class="product-title fw-500 mt-10"><a href="shop-details.html" class="text-light-black">Growth Plant</a></h6>
                    <div class="product-money mt-10"> <span class="text-dark-red fw-500">$90.00</span>
                      <span class="text-price">$250.00</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="custom-pagination align-item-center">
            <nav aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous"> <span aria-hidden="true">«</span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next"> <span aria-hidden="true">»</span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Product-end-->













	<!-- footer -->
	<footer class="section-padding bg-light-theme pt-0 u-line bg-black">

		<div class="container-fluid custom-container">
			<div class="row">
				<div class="col-xl col-lg-4 col-md-4 col-sm-6">
					<div class="footer-contact">
						<h6 class="text-custom-white">About Us</h6>
						<div class="logo mb-xl-20">

						</div>
						<p class="text-light-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
					</div>
				</div>
				<div class="col-xl col-lg-4 col-md-4 col-sm-6">
					<div class="footer-links">
						<h6 class="text-custom-white">Get to Know Us</h6>
						<ul>
							<li><a href="about.html" class="text-light-white fw-600">About Us</a>
							</li>
							<li><a href="blog-left.html" class="text-light-white fw-600">Blog</a>
							</li>
							<li><a href="#" class="text-light-white fw-600">Socialize</a>
							</li>
							<li><a href="index.html" class="text-light-white fw-600">Ecom</a>
							</li>
							<li><a href="#" class="text-light-white fw-600">Perks</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-xl col-lg-4 col-md-4 col-sm-6">
					<div class="footer-links">
						<h6 class="text-custom-white">Let Us Help You</h6>
						<ul>
							<li><a href="#" class="text-light-white fw-600">Account Details</a>
							</li>
							<li><a href="order-details.html" class="text-light-white fw-600">Order History</a>
							</li>
							<li><a href="#" class="text-light-white fw-600">Find Product</a>
							</li>
							<li><a href="login.html" class="text-light-white fw-600">Login</a>
							</li>
							<li><a href="#" class="text-light-white fw-600">Track order</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-xl col-lg-4 col-md-4 col-sm-6">
					<div class="footer-links">
						<h6 class="text-custom-white">Get to Know Us</h6>
						<ul>
							<li><a href="about.html" class="text-light-white fw-600">About Us</a>
							</li>
							<li><a href="blog-details.html" class="text-light-white fw-600">Blog</a>
							</li>
							<li><a href="#" class="text-light-white fw-600">Socialize</a>
							</li>
							<li><a href="index.html" class="text-light-white fw-600">Ecom</a>
							</li>
							<li><a href="#" class="text-light-white fw-600">Perks</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-xl col-lg-4 col-md-4 col-sm-6">
					<div class="footer-links">
						<h6 class="text-custom-white">Contact info</h6>
						<ul class="contact-info">
							<!-- <li>
								<a href="#" class="text-light-white"> <span><i class="pe-7s-timer"></i></span>
									Monday - Friday: 9:00 AM - 06:00 PM</a>
							</li> -->
							<li>
								<a href="#" class="text-light-white"> <span><i class="pe-7s-mail"></i></span>
									info@example.com</a>
							</li>
							<li>
								<a href="#" class="text-light-white"> <span><i class="pe-7s-call"></i></span>
									(+123) 123 456 7890</a>
							</li>
							<li>
								<a href="#" class="text-light-white"> <span><i class="pe-7s-map-marker"></i></span>
									(+123) 123 456 7890</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<div class="copyright bg-black">
		<div class="container-fluid custom-container">
			<div class="row">
				<div class="col-lg-4">

				</div>

				<div class="col-lg-4">
					<div class="copyright-text"> <span class="text-light-white">© <a href="#" class="text-light-white">Wahylab solution</a> - 2021 | All Right Reserved</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- footer -->
	<div class="modal" id="quick_view">
		<div class="modal-dialog modal-lg modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal">×</button>
					<!-- product details inner end -->
					<div class="product-details-inner">
						<div class="row">
							<div class="col-lg-5 align-self-center">
								<div class="shop-detail-image">
									<div class="detail-slider">
										<div class="swiper-container">
											<div class="swiper-wrapper">
												<div class="swiper-slide">
													<a href="#" class="popup">
														<img src="assets/img/shop/maindetail.jpg" class="img-fluid full-width" alt="slider">
													</a>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="shop-detail-contents mb-md-40 mt-md-40">
									<div class="shop-detail-content-wrapper">
										<h3 class="text-custom-black">Best Health & Inspiration Plant</h3>
									</div>
									<div class="ratings d-flex mb-xl-20"> <span class="text-yellow"><i class="fas fa-star"></i></span>
										<span class="text-yellow"><i class="fas fa-star"></i></span>
										<span class="text-yellow"><i class="fas fa-star"></i></span>
										<span class="text-dark-white"><i class="fas fa-star"></i></span>
										<span class="text-dark-white"><i class="fas fa-star"></i></span>
										<div class="pro-review"> <span>1 Reviews</span>
										</div>
									</div>
									<div class="price">
										<h4 class="text-custom-red price-tag">$45 <span class="text-light-white fw-400 fs-14">$50</span></h4>
									</div>
									<div class="product-full-des mb-20">
										<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
									</div>
									<div class="availibity mt-20">
										<h6 class="text-custom-black fw-600">Avability: <span class="text-success ml-2">In Stock</span></h6>
									</div>
									<div class="quantity mb-xl-20">
										<h6 class="text-custom-black mb-0 mr-2 fw-600">Qty:</h6>
										<div class="product-qty-input">
											<button class="minus-btn" type="button" name="button"> <i class="fas fa-minus"></i>
											</button>
											<input type="text" class="form-control form-control-qty text-center" name="name" value="1">
											<button class="plus-btn" type="button" name="button"> <i class="fas fa-plus"></i>
											</button>
										</div>
									</div>
									<div class="shop-bottom">
										<div class="shop-meta mt-20">
											<h6 class="text-custom-black mb-0 fw-600">Categories:</h6>
											<ul class="list-inline ml-2">
												<li class="list-inline-item"><a href="#">Health</a>
												</li>
												<li class="list-inline-item"><a href="#">Inner Plant</a>
												</li>
												<li class="list-inline-item"><a href="#">Deal</a>
												</li>
											</ul>
										</div>
										<div class="shop-meta mt-20">
											<h6 class="text-custom-black mb-0 fw-600">Tags:</h6>
											<ul class="list-inline ml-2">
												<li class="list-inline-item"><a href="#">Palm Plant</a>
												</li>
												<li class="list-inline-item"><a href="#">Inner Plant</a>
												</li>
												<li class="list-inline-item"><a href="#">New Arrivel</a>
												</li>
											</ul>
										</div>

									</div>
								</div>
							</div>
						</div>
					</div> <!-- product details inner end -->
				</div>
			</div>
		</div>
	</div>
	<!-- Place all Scripts Here -->
	<!-- jQuery -->
	<script src="assets/js/jquery.min.js"></script>
	<!-- Popper -->
	<script src="assets/js/popper.min.js"></script>
	<!-- Bootstrap -->
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- Range Slider -->
	<script src="assets/js/ion.rangeSlider.min.js"></script>
	<!-- Swiper Slider -->
	<script src="assets/js/swiper.min.js"></script>
	<!-- Nice Select -->
	<script src="assets/js/jquery.nice-select.min.js"></script>
	<!-- magnific popup -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- Maps -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnd9JwZvXty-1gHZihMoFhJtCXmHfeRQg"></script>
	<!-- sticky sidebar -->
	<script src="assets/js/sticksy.js"></script>
	<!-- Planteco Js -->
	<script src="assets/js/main.js"></script>
	<!-- /Place all Scripts Here -->
	<script>
		function create_custom_dropdowns() {
    $('select').each(function (i, select) {
        if (!$(this).next().hasClass('dropdown-select')) {
            $(this).after('<div class="dropdown-select wide ' + ($(this).attr('class') || '') + '" tabindex="0"><span class="current"></span><div class="list"><ul></ul></div></div>');
            var dropdown = $(this).next();
            var options = $(select).find('option');
            var selected = $(this).find('option:selected');
            dropdown.find('.current').html(selected.data('display-text') || selected.text());
            options.each(function (j, o) {
                var display = $(o).data('display-text') || '';
                dropdown.find('ul').append('<li class="option ' + ($(o).is(':selected') ? 'selected' : '') + '" data-value="' + $(o).val() + '" data-display-text="' + display + '">' + $(o).text() + '</li>');
            });
        }
    });

    $('.dropdown-select ul').before('<div class="dd-search"><input id="txtSearchValue" autocomplete="off" onkeyup="filter()" class="dd-searchbox" type="text"></div>');
}

// Event listeners

// Open/close
$(document).on('click', '.dropdown-select', function (event) {
    if($(event.target).hasClass('dd-searchbox')){
        return;
    }
    $('.dropdown-select').not($(this)).removeClass('open');
    $(this).toggleClass('open');
    if ($(this).hasClass('open')) {
        $(this).find('.option').attr('tabindex', 0);
        $(this).find('.selected').focus();
    } else {
        $(this).find('.option').removeAttr('tabindex');
        $(this).focus();
    }
});

// Close when clicking outside
$(document).on('click', function (event) {
    if ($(event.target).closest('.dropdown-select').length === 0) {
        $('.dropdown-select').removeClass('open');
        $('.dropdown-select .option').removeAttr('tabindex');
    }
    event.stopPropagation();
});

function filter(){
    var valThis = $('#txtSearchValue').val();
    $('.dropdown-select ul > li').each(function(){
     var text = $(this).text();
        (text.toLowerCase().indexOf(valThis.toLowerCase()) > -1) ? $(this).show() : $(this).hide();
   });
};
// Search

// Option click
$(document).on('click', '.dropdown-select .option', function (event) {
    $(this).closest('.list').find('.selected').removeClass('selected');
    $(this).addClass('selected');
    var text = $(this).data('display-text') || $(this).text();
    $(this).closest('.dropdown-select').find('.current').text(text);
    $(this).closest('.dropdown-select').prev('select').val($(this).data('value')).trigger('change');
});

// Keyboard events
$(document).on('keydown', '.dropdown-select', function (event) {
    var focused_option = $($(this).find('.list .option:focus')[0] || $(this).find('.list .option.selected')[0]);
    // Space or Enter
    //if (event.keyCode == 32 || event.keyCode == 13) {
    if (event.keyCode == 13) {
        if ($(this).hasClass('open')) {
            focused_option.trigger('click');
        } else {
            $(this).trigger('click');
        }
        return false;
        // Down
    } else if (event.keyCode == 40) {
        if (!$(this).hasClass('open')) {
            $(this).trigger('click');
        } else {
            focused_option.next().focus();
        }
        return false;
        // Up
    } else if (event.keyCode == 38) {
        if (!$(this).hasClass('open')) {
            $(this).trigger('click');
        } else {
            var focused_option = $($(this).find('.list .option:focus')[0] || $(this).find('.list .option.selected')[0]);
            focused_option.prev().focus();
        }
        return false;
        // Esc
    } else if (event.keyCode == 27) {
        if ($(this).hasClass('open')) {
            $(this).trigger('click');
        }
        return false;
    }
});

$(document).ready(function () {
    create_custom_dropdowns();
});


function openNav() {
    document.getElementById("mySidenav").style.animation = "expand 0.3s forwards";
    //closeBtn
    document.getElementById("closeBtn").style.display = "block";
    document.getElementById("closeBtn").style.animation = "show 0.3s";
    //Overlay
    document.getElementById("overlay").style.display = "block";
    document.getElementById("overlay").style.animation = "show 0.3s";

}

function closeNav() {
    document.getElementById("mySidenav").style.animation = "collapse 0.3s forwards";
    //closeBtn
    document.getElementById("closeBtn").style.animation = "hide 0.3s";
    //Overlay
    document.getElementById("overlay").style.animation = "hide 0.3s";

    setTimeout(() => {
        document.getElementById("closeBtn").style.display = "none";
        document.getElementById("overlay").style.display = "none";
        //Reset Menus
        document.getElementById("main-container").style.animation = "";
        document.getElementById("main-container").style.transform = "translateX(0px)";
        document.getElementById("sub-container").style.animation = "";
        document.getElementById("sub-container").style.transform = "translateX(380px)";
    }, 300)
}

let firstDropdownOpen = false;

function firstDropDown() {
    firstDropdownOpen = !firstDropdownOpen;
    if(firstDropdownOpen) {
        document.querySelector("#firstDropDown i").setAttribute("class", "fas fa-chevron-up");
        document.querySelector("#firstDropDown div").innerHTML = "See Less";
        //Handle Container
        document.getElementById("firstContainer").style.display = "block";
        document.getElementById("firstContainer").style.animation = "expandDropDown 0.3s forwards";
        document.getElementById("firstContainer").style.transition = "height 0.3s";
        document.getElementById("firstContainer").style.height = "410px";
    }else{
        document.querySelector("#firstDropDown i").setAttribute("class", "fas fa-chevron-down");
        document.querySelector("#firstDropDown div").innerHTML = "See More";
        //Handle Container
        document.getElementById("firstContainer").style.animation = "collapseDropDown 0.2s forwards";
        document.getElementById("firstContainer").style.transition = "height 0.2s";
        document.getElementById("firstContainer").style.height = "0px";
        setTimeout(() => {
            document.getElementById("firstContainer").style.display = "none";
        }, 200)

    }
}

let secondDropDownOpen = false;

function secondDropDown() {
    secondDropDownOpen = !secondDropDownOpen;

    if(secondDropDownOpen) {
        document.querySelector("#secondDropDown i").setAttribute("class", "fas fa-chevron-up");
        document.querySelector("#secondDropDown div").innerHTML = "See Less";
        //Handle Container
        document.getElementById("secondContainer").style.display = "block";
        document.getElementById("secondContainer").style.animation = "expandDropDown 0.3s forwards";
        document.getElementById("secondContainer").style.transition = "height 0.3s";
        document.getElementById("secondContainer").style.height = "260px";
    }else{
        document.querySelector("#secondDropDown i").setAttribute("class", "fas fa-chevron-down");
        document.querySelector("#secondDropDown div").innerHTML = "See More";
        //Handle Container
        document.getElementById("secondContainer").style.animation = "collapseDropDown 0.2s forwards";
        document.getElementById("secondContainer").style.transition = "height 0.2s";
        document.getElementById("secondContainer").style.height = "0px";
        setTimeout(() => {
            document.getElementById("secondContainer").style.display = "none";
        }, 200)

    }
}

document.querySelectorAll(".sidenavRow").forEach(row => {
    row.addEventListener("click", () => {
        document.getElementById("main-container").style.animation = "mainAway 0.3s forwards";
        document.getElementById("sub-container").style.animation = "subBack 0.3s forwards";
    });
});

document.getElementById("mainMenu").addEventListener("click", () => {
    document.getElementById("main-container").style.animation = "mainBack 0.3s forwards";
    document.getElementById("sub-container").style.animation = "subPush 0.3s forwards";
})

//subNavContent

function openPrimeVideo() {
    document.getElementById("sub-container-content").innerHTML = `<div class="sidenavContentHeader">Prime Video</div>
    <a href="#"><div class="sidenavContent">All Videos</div></a>`;
}

function openAmazonMusic() {
    document.getElementById("sub-container-content").innerHTML = `<div class="sidenavContentHeader">Amazon Music</div>
    <a href="#"><div class="sidenavContent">All Music</div></a>`;
}



 $(document).ready(function(){
    if($("body").height() < $(window).innerHeight()) {
                    $('#footer').css('position','fixed');
                    $('#footer').css('bottom',0);
    }
 });



 $('#fileup').change(function(){
//here we take the file extension and set an array of valid extensions
    var res=$('#fileup').val();
    var arr = res.split("\\");
    var filename=arr.slice(-1)[0];
    filextension=filename.split(".");
    filext="."+filextension.slice(-1)[0];
    valid=[".jpg",".png",".jpeg",".bmp"];
//if file is not valid we show the error icon, the red alert, and hide the submit button
    if (valid.indexOf(filext.toLowerCase())==-1){
        $( ".imgupload" ).hide("slow");
        $( ".imgupload.ok" ).hide("slow");
        $( ".imgupload.stop" ).show("slow");

        $('#namefile').css({"color":"red","font-weight":700});
        $('#namefile').html("File "+filename+" is not  pic!");

        $( "#submitbtn" ).hide();
        $( "#fakebtn" ).show();
    }else{
        //if file is valid we show the green alert and show the valid submit
        $( ".imgupload" ).hide("slow");
        $( ".imgupload.stop" ).hide("slow");
        $( ".imgupload.ok" ).show("slow");

        $('#namefile').css({"color":"green","font-weight":700});
        $('#namefile').html(filename);

        $( "#submitbtn" ).show();
        $( "#fakebtn" ).hide();
    }
});


	</script>

</body>

</html>
