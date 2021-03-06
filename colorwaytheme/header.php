/*=========================================*/
/*=========Green Color Scheme Style========*/
/*=========================================*/
a {
    text-decoration:none;
    color:#474280;
}
a:hover {
    color:#736db4;
}
/*=========================================*/
/*==========Start Home Page Style==========*/
/*=========================================*/

/*==========Menus Colors==========*/
#menu .ddsmoothmenu li li a.selected, #menu .ddsmoothmenu li li a:hover { /*CSS class that's dynamically added to the currently active menu items' LI A element*/
    color: #FFFFFF;
    background:#736db4;
}
#menu li.current-menu-item a, #menu li.current-menu-parent a, #menu li.current_page_parent a, #menu li a.selected, #menu li a:hover ,#menu li.current_page_item a {
    color:#fff;
    background:#474280;
}
#menu .ddsmoothmenu li li {
    background: #474280;
}
/*==========Slider Colors==========*/
.slide .slide-content.entry {
    background:url(../images/purple.png);
    border-right:8px solid #474280;
}
.flex-control-nav li a{
    background-image:url(../images/pagination-purple.png);
}
.slide .slide-content.entry h2 a {
    color:#000;
}
.slide-content p {
    color: #000;
}
/*==========Blockquote Colors==========*/
blockquote {
    background:url(../images/qoute-purple.png) no-repeat;
}
blockquote a {
    color:#474280;
}
.flex_testimonial .flex-control-nav li a:hover, .flex_testimonial .flex-control-nav li a.active{
    background: #736db4;    
}
/*==========Footer Colors==========*/
.footer-container {
    background: #736db4;
}
.footer-container h4 {
    background: url(../images/h4-border-bg-purple.png) repeat-x;
    background-position:0% 100%;
    color:#b3adeb;
}
.footer-container p {
    color:#b3adeb;
}
.footer-container .textwidget {
    color: #b3adeb;
}
.footer-container ul {
    list-style-image:url(../images/disc-img-purple.png);
}
.footer-container a {
    color:#b3adeb;
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
    background:#474280;
}
.footer #searchform {
    background:url(../images/search-bg-purple.png) no-repeat;
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
    background:url(images/grad_px.gif) top repeat-x #736DB4;
}
@media only screen and (min-width: 768px) and (max-width: 960px) {
    .footer #searchform {
        border:1px solid #8580bc !important;
        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        border-radius: 10px;
        background-color:#5e589e !important;
    }
}
@media only screen and ( max-width: 768px ) {
    .it_mobile_menu li a:hover, .it_mobile_menu > li.current_page_item > a {
        color: #736DB4 !important;
    }
}
