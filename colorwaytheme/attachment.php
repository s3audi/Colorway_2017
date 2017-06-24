/*=========================================*/
/*=========Green Color Scheme Style========*/
/*=========================================*/
a {
    text-decoration:none;
    color:#a63400;
}
a:hover {
    color:#8a0a0b;
}
/*=========================================*/
/*==========Start Home Page Style==========*/
/*=========================================*/

/*==========Menus Colors==========*/
#menu .ddsmoothmenu li li a.selected, #menu .ddsmoothmenu li li a:hover { /*CSS class that's dynamically added to the currently active menu items' LI A element*/
    color: #FFFFFF;
    background:#a63400;
}
#menu li.current-menu-item a, #menu li.current-menu-parent a, #menu li.current_page_parent a, #menu li a.selected, #menu li a:hover ,#menu li.current_page_item a {
    color:#fff;
    background:#8a0a0b;
}
#menu .ddsmoothmenu li li {
    background: #8a0a0b;
}
/*==========Slider Colors==========*/
.slide .slide-content.entry {
    background:url(../images/purple.png);
    border-right:8px solid #a63400;
}
.flex-control-nav li a{
    background-image:url(../images/pagination-red.png);
}
.slide .slide-content.entry h2 a {
    color:#000;
}
.slide-content p {
    color: #000;
}
/*==========Blockquote Colors==========*/
blockquote {
    background:url(../images/qoute-red.png) no-repeat;
}
blockquote a {
    color:#a63400;
}
.flex_testimonial .flex-control-nav li a:hover, .flex_testimonial .flex-control-nav li a.active{
    background: #a63400;    
}
/*==========Footer Colors==========*/
.footer-container {
    background: #a63400;
}
.footer-container h4 {
    background: url(../images/h4-border-bg-red.png) repeat-x;
    background-position:0% 100%;
    color:#f19f79;
}
.footer-container p {
    color:#f19f79;
}
.footer-container .textwidget {
    color: #f19f79;
}
.footer-container ul {
    list-style-image:url(../images/disc-img-red.png);
}
.footer-container a {
    color:#f19f79;
}
.footer-navi .navigation ul li {
   background-position:100% 0%;
}
.footer-navi .navigation ul li a {
    color:#FFFFFF;
}
.footer-navi .navigation .right-navi p {
    color:#FFFFFF;
}
.footer-navi {
    background:#8a0a0b;
}
.footer #searchform label {
    color: #f2c47c;
}
.footer #searchform {
    background:url(../images/search-bg-red.png) no-repeat;
}

/*=========================================*/
/*==========Start Home Page Style==========*/
/*=========================================*/
.folio-page-info ul.paging li.first a {
    color:#FFFFFF;
}
.folio-page-info ul.paging li:hover {
}
ul.paging a.active, ul.paging a:hover, ul.paging a.current {
    color:#ffffff !important;
    border:1px solid #546F9E;
    background:url(images/grad_px.gif) top repeat-x #A63400;
}
@media only screen and (min-width: 768px) and (max-width: 960px) {
    .footer #searchform {
        border:1px solid #bf440f !important;
        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        border-radius: 10px;
        background-color:#872c05 !important;
    }
}
@media only screen and ( max-width: 768px ) {
    .it_mobile_menu li a:hover, .it_mobile_menu > li.current_page_item > a {
        color: #A63400 !important;
    }
}