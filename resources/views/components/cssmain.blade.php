<style>
:root{
	--color1: #005B94;
	--color2: #008FB3;
	--cdark: #003863;
	--cdefault: #212121;
	--cblack: #000000;
	--cwhite: #ffffff;
	--cgrey1: #e2e2e2;
	--cgrey2: #dbdbdb;
	--cgrey3: #bdbdbd;
	--cgrey4: #919191;
	--brdgrey: #bdbdbd;
	--bggrey: #e7e7e7;
	--gold: #feaa00;
	--yellow: #ffc600;
	--blue: #0063c7;
	--pink: #d40072;
	--cyan: #00a4a6;
	--viola: #ac00d0;
	--orange: #ff5a00;
	--green: #16b900;
}
html {margin: 0;padding: 0;width:100%!important;}
body{background-color:#fff; color:#313131; overflow-x:hidden !important;font-size:16px !important;margin:0;padding:0;font-family:Arial !important;}
h1, h2, h3, h4{margin:0;padding:0;line-height:1.2;font-weight:bold;}
p{font-size:100%;line-height:1.2;margin:0;padding:0;}
a{text-decoration:none; color:var(--color1);}
a:hover{color:var(--color2); text-decoration:none !important;}
a:focus{outline:none; text-decoration:none !important ;color:var(--color2) !important;}
.difle-c{display:flex !important;justify-content: center;align-items: center;}
.difle-l{display:flex !important;justify-content: left;align-items: center;}
.difle-r{display:flex !important;justify-content:right;align-items: center;}
.mlr-page{margin-left:4%;margin-right:4%;}
.mlr-pagefull{margin-left:0;margin-right:0;}
.mlr-min5{margin-left:-5px;margin-right:-5px;}
.mlr-min10{margin-left:-10px;margin-right:-10px;}
.mlr-min15{margin-left:-15px;margin-right:-15px;}
.mlr-min20{margin-left:-20px;margin-right:-20px;}
.mlr-min25{margin-left:-25px;margin-right:-25px;}
.m5{margin:5px;}
.m10{margin:10px;}
.m15{margin:15px;}
.m20{margin:20px;}
.m25{margin:25px;}
.m30{margin:30px;}
.mt5{margin-top:5px!important;}
.mt10{margin-top:10px!important;}
.mt15{margin-top:15px!important;}
.mt20{margin-top:20px!important;}
.mt25{margin-top:25px!important;}
.mt30{margin-top:30px!important;}
.mt40{margin-top:40px!important;}
.mt50{margin-top:50px!important;}
.mb5{margin-bottom:5px!important;}
.mb10{margin-bottom:10px!important;}
.mb15{margin-bottom:15px!important;}
.mb20{margin-bottom:20px!important;}
.mb25{margin-bottom:25px!important;}
.mb30{margin-bottom:30px!important;}
.mb30{margin-bottom:30px!important;}
.plr-5{padding-left:5px;padding-right:5px;}
.plr-10{padding-left:10px;padding-right:10px;}
.plr-15{padding-left:15px;padding-right:15px;}
.plr-20{padding-left:20px;padding-right:20px;}
.plr-25{padding-left:25px;padding-right:25px;}
.p5{padding:5px;}
.p10{padding:10px;}
.p15{padding:15px;}
.p20{padding:20px;}
.p25{padding:25px;}
.p30{padding:30px;}
.pt5{padding-top:5px!important;}
.pt10{padding-top:10px!important;}
.pt15{padding-top:15px!important;}
.pt20{padding-top:20px!important;}
.pt25{padding-top:25px!important;}
.pt30{padding-top:30px!important;}
.pt40{padding-top:40px!important;}
.pb5{padding-bottom:5px!important;}
.pb10{padding-bottom:10px!important;}
.pb15{padding-bottom:15px!important;}
.pb20{padding-bottom:20px!important;}
.pb25{padding-bottom:25px!important;}
.pb30{padding-bottom:30px!important;}
.mobile-view{display:none!important;}
.printonly{display:none;}
.relative{position:relative;}
.relhid, .rel-hid{position:relative;overflow:hidden;}
.forhidden{overflow:hidden;}
.brdgrey-1{border:var(--brdgrey) 1px solid;}
.nowrap{white-space:nowrap;}
.textwrap td{text-wrap: wrap!important;}
.displaygrid {display:grid;box-sizing: border-box;}
.aligntop{align-self: start;}
.alignbottom{align-self: end;}
.brd-radius5{border-radius:5px;}
.brd-radius7{border-radius:7px;}
.brd-radius10{border-radius:10px;}
.to-center{text-align:center!important;}
.to-left{text-align:left!important;}
.to-right{text-align:right!important;}
.trans-def{transition:all 0.2s linear 0.1s;-webkit-transition:all 0.1s linear 0.1s;-moz-transition:all 0.1s linear 0.1s;-o-transition:all 0.1s linear 0.1s}
.trans-h{-webkit-transition:height .10s cubic-bezier(0,0,.58,1);-moz-transition:height .10s cubic-bezier(0,0,.58,1);-o-transition:height .10s cubic-bezier(0,0,.58,1);-ms-transition:height .10s cubic-bezier(0,0,.58,1);transition:all .55s cubic-bezier(.645,.045,.355,1) 0s;}
.btn.custombtn{display:inline-block;padding:0 10px;font-size:95%!important;font-weight:400;line-height:1.1;text-align:center;border:none!important;color:var(--cwhite)}
.btn.custombtn:focus,.btn.custombtn:active:focus,.btn.custombtn.active:focus,.btn.custombtn.focus,.btn.custombtn:active.focus,.btn.custombtn.active.focus{outline:none!important;outline-offset:0!important}
.btn.custombtn:hover,.btn.custombtn:focus,.btn.custombtn.focus{color:var(--cwhite)}
.btn.custombtn:active,.btn.custombtn.active{background-image:none;outline:0;-webkit-box-shadow:none;box-shadow:none}
.btnblock{width:100%;}
.btn-medium{height:34px;}
.btn-small{height:30px;}
.btn-big{height:40px;padding:0 15px;}
.btn-big p, .btn-medium p, .btn-small p{font-size:100%;margin:0;padding:0;line-height:1.1;color:var(--cwhite)!important;}
.btn-medium p, .btn-small p{font-size:95%;}
.btn-small{font-size:90%;margin:0;padding:0;line-height:1;}
.btradius-small{border-radius:30px;margin:0 2px;margin-top:-3px!important;}
.btn-big svg{width:auto;height:24px;fill:var(--cwhite);}
.btn-small svg, .btn-medium svg{width:auto;height:22px;fill:var(--cwhite);}
.btn-medium svg{height:24px;}
.btn a, .btn a:focus, .btn a.active, .btn:focus, .btn.active{color:var(--cwhite)!important;}
.label-custom{padding:0 10px;line-height:1;margin:-3px 3px 0!important;height:30px;font-size:90%!important;color:#fff;border-radius:30px;font-weight:normal;}
.select2-selection__rendered, .select2-selection__arrow{height:34px!important;line-height:34px!important;}
.form-control.formcustom, .formdesa .form-control, .select2-selection.select2-selection--single{height:34px!important;padding:0 10px!important;font-size:95%!important;line-height:1.1!important;color:var(--cdefault)!important;background-color:#fff;border:1px solid var(--brdgrey)!important;border-radius:5px;outline:0!important;-webkit-box-shadow:none!important;box-shadow:none!important}
.form-control.formcustom:focus{border-color:var(--brdgrey)!important;outline:0;-webkit-box-shadow:none!important;box-shadow:none!important}
.form-control.formcustom::-moz-placeholder,.form-control.formcustom:-ms-input-placeholder,.form-control.formcustom::-webkit-input-placeholder{color:var(--cdefault)!important}
.pagingrow svg{height:24px;width:auto;fill:var(--cgrey4);margin:3px 0 0;}
.page-link{padding:0 5px !important;}
.pagination{margin:0 auto!important;}
.pagination>li>a,.pagination>li>span{padding:0 8px;margin-left:-1px;line-height:1.1;color:var(--color1);height:30px;font-size:95%;background-color:var(--cwhite);border:1px solid var(--brdgrey)!important;display:flex!important;justify-content:center;align-items:center}
.pagination>li:last-child>a,.pagination>li:last-child>span{border-top-right-radius:4px;border-bottom-right-radius:4px}
.pagination>li>a:hover,.pagination>li>span:hover,.pagination>li>a:focus,.pagination>li>span:focus{z-index:2;color:var(--color1);background-color:var(--bggrey);border-color:var(--brdgrey)!important}
.pagination>.active>a,.pagination>.active>span,.pagination>.active>a:hover,.pagination>.active>span:hover,.pagination>.active>a:focus,.pagination>.active>span:focus{background-color:var(--color1);border-color:var(--color1);color:var(--cwhite)!important;}
.pagination>.disabled>span,.pagination>.disabled>span:hover,.pagination>.disabled>span:focus,.pagination>.disabled>a,.pagination>.disabled>a:hover,.pagination>.disabled>a:focus{color:var(--cdefault);border-color:var(--brdgrey)!important}

.cwhite{color:var(--cwhite);}
.bggradient{background:linear-gradient(to right, var(--color1), var(--color2));}
.bgpink, .bgpink a{background:var(--pink);color:var(--cwhite)!important;}
.bgcyan, .bgcyan a{background:var(--cyan);color:var(--cwhite)!important;}
.bgviola, .bgviola a{background:var(--viola);color:var(--cwhite)!important;}
.bgorange, .bgorange a{background:var(--orange);color:var(--cwhite)!important;}
.bgblue, .bgblue a{background:var(--blue);color:var(--cwhite)!important;}
.bggreen, .bggreen a{background:var(--green);color:var(--cwhite)!important;}

.cbp-section:before,.cbp-section:after{content:" ";display:table}
.cbp-section:after{clear:both}
.cbp-so{width:100%;margin:0;-webkit-transition:-webkit-transform 0.5s,opacity 0.5s;-moz-transition:-moz-transform 0.5s,opacity 0.5s;transition:transform 0.5s,opacity 0.5s}
.cbp-so:before,.cbp-so:after{content:" ";display:table}
.cbp-so-init .cbp-so{opacity:0}
.cbp-so-init .cbp-so-top{-webkit-transform:translateY(80px);-moz-transform:translateY(80px);transform:translateY(80px)}
.cbp-section.cbp-so-animate .cbp-so-top{-webkit-transform:translateY(0);-moz-transform:translateY(0);transform:translateY(0);opacity:1}
.cbp-so-init .cbp-so-bottom{-webkit-transform:translateY(-80px);-moz-transform:translateY(-80px);transform:translateY(80px)}
.cbp-section.cbp-so-animate .cbp-so-bottom{-webkit-transform:translateY(0);-moz-transform:translateY(0);transform:translateY(0);opacity:1}
.cbp-so-init .cbp-so-left{-webkit-transform:translateX(-80px);-moz-transform:translateX(-80px);transform:translateX(-80px)}
.cbp-section.cbp-so-animate .cbp-so-left{-webkit-transform:translateX(0);-moz-transform:translateX(0);transform:translateX(0);opacity:1}
.cbp-so-init .cbp-so-right{-webkit-transform:translateX(80px);-moz-transform:translateX(80px);transform:translateX(80px)}
.cbp-section.cbp-so-animate .cbp-so-right{-webkit-transform:translateX(0);-moz-transform:translateX(0);transform:translateX(0);opacity:1}

.fancybox-show-nav .fancybox-navigation .fancybox-button, .fancybox-infobar{display:none;}
.fancybox-button.fancybox-button--zoom, .fancybox-button.fancybox-button--play, .fancybox-button.fancybox-button--thumbs{display:none!important;}

.imagefull img, .video-view{display:block;width:100%;height:100%;position: absolute;top: 50%;left: 50%;margin:0 auto;object-fit: cover;-webkit-transform: translate3d(-50%, -50%, 0);-moz-transform: translate3d(-50%, -50%, 0);-ms-transform: translate3d(-50%, -50%, 0);-o-transform: translate3d(-50%, -50%, 0);transform: translate3d(-50%, -50%, 0);}
.image-news, .image-gal, .image-camat, .image-aparatur, .image-gal-item, .imagepotensi, .image-lampiran, .image-usersikema, .image-feed, .image-aparaturpage{width: 100%;display: block;position: relative;overflow:hidden;background-size:cover;background-repeat:no-repeat;background-position:center;}
.image-gal{height:25vh;background:var(--cgrey1);}
.galhome-image .image-gal{height:35vh;border-radius:10px 10px 0 0;}
.image-gal-item{height:40vh;background:var(--cgrey1);}
.image-camat{height:45vh;border-radius:7px;}
.image-aparatur{height:calc(39vh + 7px);border-radius:7px;}
.image-aparaturpage{height:48vh;border-radius:7px;}
.imagepotensi{height:32vh;border-radius:10px;cursor:pointer;}
.potensi-home .imagepotensi{height:15vh;border-radius:5px;}
.image-lampiran{height:20vh;}
.image-feed:after{content:"";position:absolute;left:0;top:0;right:0;bottom:0;border-radius:5px;border:var(--cwhite) 2px solid;opacity:0.4;}
.image-feed{height:16vh;}
.image-usersikema{height:25vh;border-radius:50%;border:var(--brdgrey) 1px solid;background:var(--cgrey1);}
.list-sikema-left .image-usersikema{height:20vh;}
.list-sikema-left p{line-height:1.1;}
.box-camat{border:var(--brdgrey) 1px solid;padding:5px;background:var(--cgrey1);}
.boxshadow{box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);-webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);-moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);}
.module-col .headmodule{position:relative;overflow:hidden;padding:0 10px;border-bottom:var(--brdgrey) 1px solid;height:44px}
.headmodule h1, .module-item h1, .head-gambaran h1{position:relative;font-size:140%;font-weight:bold;padding:0;line-height:1;margin:0;letter-spacing:-0.5px;text-transform:uppercase;}
.module-col .headmodule h1, .module-col .module-item h1{font-size:140%;}
.headmodule p{font-size:100%;font-weight:normal;padding:0;line-height:1;margin:3px 0 0;letter-spacing:-0.5px;color:var(--cblack);opacity:0.7;}
.headmodule-icon{width:34px;height:34px;border-radius:4px;margin:0 10px 0 0;background:var(--color1);}
.headmodule-icon svg{width:24px;height:auto;line-height:1;fill:var(--cwhite);opacity:0.8;}
.module-col .headmodule-icon{width:32px;height:32px;}
.box-module{position:relative;z-index:3;}
.head-gambaran{position:relative;overflow:hidden;padding:0 10px;border-bottom:var(--brdgrey) 1px solid;height:44px}
.module-scroll{position:absolute;left:0;top:calc(6vh + 7px);right:0;bottom:0;z-index:5;}
.module-scroll-inner{position:relative;overflow:hidden;height:100%;}
.scrollbar{height:100%;width: 100%;overflow-y: scroll;}
#style-3::-webkit-scrollbar-track{background-color:transparent;}
#style-3::-webkit-scrollbar{width: 8px;background-color:transparent;}
#style-3::-webkit-scrollbar-thumb{background-color:rgba(0,0,0,0.15);border-radius:8px;}
.feedhome #style-3::-webkit-scrollbar{width:0;}
.feedhome #style-3::-webkit-scrollbar-thumb{background-color:transparent;border-radius:0;}
@-moz-document url-prefix() { #style-3 {scrollbar-width: thin;} }
.mlr-min3{margin-left:-3px;margin-right:-3px;}
.column-2{position:relative;width:calc(50% - 30px);margin:15px 15px 0;}
.column-2b{position:relative;width:calc(50% - 20px);margin:20px 10px 0;}
.column-3{position:relative;width:calc(33.33333333% - 20px);margin:10px 10px 0;}
.headtop{background: linear-gradient(to right, var(--cgrey1), var(--cwhite), var(--cgrey1));-webkit-box-shadow: 0px 4px 5px 0px rgba(0,0,0,0.3);-moz-box-shadow: 0px 4px 5px 0px rgba(0,0,0,0.3);box-shadow: 0px 4px 5px 0px rgba(0,0,0,0.3);}
.headtop-left img{width:auto;height:6vh;margin:0 10px 0 0;}
.headtop-left h1, .headtop-left h2{font-size:85%;padding:0;margin:0;line-height:1;font-weight:bold;letter-spacing:-0.3px;}
.headtop-left h2{color:var(--cdefault);}
.headtop-left h1{font-size:120%;margin:1px 0 0;}
.gradient-text {background: linear-gradient(to right, var(--color1), var(--color2));-webkit-background-clip: text;background-clip: text;color: transparent;}
.gradient-text2 {background: linear-gradient(to right, var(--color1), var(--color2), var(--color1));-webkit-background-clip: text;background-clip: text;color: transparent;}
.headtop-right{float:right;margin:0 0 0 auto;}
#thistime, #thisdate{font-size:95%;margin:0;padding:0;line-height:1;font-weight:normal;}
.weather-item img{width:auto;height:5vh;margin:0 0 0 5px;}
.btpop, .top-btright{width:0;overflow:hidden;background: linear-gradient(to right, var(--color1), var(--color2));border-radius:5px;margin:0 0 0 10px;cursor:pointer;}
.top-btright{width:5vh;height:5vh;}
.ifscroll .btpop{width:5vh!important;height:5vh;}
.btpop svg, .top-btright svg{width:4vh;height:auto;line-height:1;fill:var(--cwhite);}
.top-btright svg{width:3.5vh;}
.panelmenu{position:fixed;top:0;right:0;width:100%;height:0;overflow:hidden;z-index:3000;transition:0.5s;-webkit-transition:0.5s;-moz-transition:0.5s;-o-transition:0.5s;background:rgba(0,0,0,0.7);}
.panelmenu-inner{position:absolute;right:10px;top:10px;bottom:10px;width:25%;overflow:hidden;background:var(--cwhite);}
.panelmenu-box{position:absolute;left:0;top:7vh;bottom:0;right:0;overflow:hidden;}
.panelmenu-head{position:absolute;left:0;top:0;bottom:0;right:0;background: linear-gradient(to right, var(--color1), var(--color2));height:7vh;cursor:pointer;}
.panelmenu-head svg{height:5vh;width:auto;margin:0;line-height:1;fill:var(--cwhite);}
.caret{border-top:8px solid;border-right:6px solid transparent;border-left:6px solid transparent;opacity:0.5;}
.panelmenu .caret{position:absolute;opacity:.4;right:10px;top:14px;border-top:8px solid;border-right:6px solid transparent;border-left:6px solid transparent;}
.aparaturpage-col{position:relative;width:calc(25% - 20px);margin:15px 10px 0;border:var(--brdgrey) 1px solid;}
.aparaturpage-box{padding:7px;}
.aparaturpage-box h3{font-size:100%;padding:0;margin:10px 0 5px;line-height:1;font-weight:bold;letter-spacing:-0.3px;}
.menuweb{border-top:var(--cgrey3) 3px solid;}
.menuweb .nav.navbar-nav{background: linear-gradient(to right, var(--cblack), var(--color1), var(--color1), var(--cblack)) !important;width:100%;padding:10px 4%!important;margin:0!important;line-height:1.1!important;-webkit-transition:height .10s cubic-bezier(0,0,.58,1);-moz-transition:height .10s cubic-bezier(0,0,.58,1);-o-transition:height .10s cubic-bezier(0,0,.58,1);-ms-transition:height .10s cubic-bezier(0,0,.58,1);transition:all .55s cubic-bezier(.645,.045,.355,1) 0s;}
.menuweb li{background:transparent !important;font-size:100%!important;padding:0!important;margin:0!important;line-height:1.1!important;}
.menuweb li a{background:transparent !important;padding:4px 0!important;margin:0 20px 0 0!important;line-height:1.1!important;color:var(--cgrey1);text-shadow:1px 1px 2px #000;-webkit-text-stroke:1px transparent;border-bottom:transparent 1px solid;}
.menuweb li a:hover{border-bottom:var(--yellow) 1px solid;color:var(--cwhite)!important;}
.menuweb li a:focus, .menuweb li a.active{color:var(--cwhite)!important;}
.menuweb .dropdown-menu{background:var(--cblack);display:none;margin:0!important;z-index:1000;left:0!important;top:100%;border-radius:5px!important;padding:5px 0!important;box-shadow:none!important;}
.menuweb .dropdown-menu li{font-size:100%!important;}
.menuweb .dropdown-menu{background:var(--cblack)!important;margin:0!important;z-index:1900;border-radius:5px;}
.menuweb .dropdown-menu li{font-size:100%!important;padding:0!important;margin:0!important;}
.menuweb .dropdown-menu li a{margin:0 5px!important;padding:8px 10px!important;color:var(--cgrey1)!important;}
.menuweb .dropdown-menu li a:hover{background:var(--bgdark)!important;color:var(--cwhite)!important;}
.menuweb .dropdown-menu:nth-child(2) .dropdown-menu{margin-left:0!important;height:0!important;overflow:hidden!important;border-top:none!important;padding:0!important;opacity:0!important;border-radius:0!important;top:-6px!important;left:100%!important;}
.menuweb .dropdown-menu:nth-child(2) .dropdown-menu li a{margin:0!important;}
.menuweb .dropdown-menu:nth-child(2) li:hover .dropdown-menu, .menuweb .dropdown-menu:nth-child(2):focus .dropdown-menu, .menuweb .dropdown-menu:nth-child(2).active .dropdown-menu{height:auto!important;overflow:hidden!important;opacity:1!important;padding:5px!important;display:block!important;}
.menuweb .dropdown-menu:nth-child(2) .dropdown-menu ul.dropdown-menu{opacity:1!important;top:100%!important;left:0!important;position:relative!important;padding:0!important;}
.menuweb .dropdown-menu:nth-child(2) .dropdown-menu ul.dropdown-menu li a{position:relative;padding:0!important;margin:0 0 0 10px!important;padding:5px 10px 5px 13px!important;}
.menuweb .dropdown-menu:nth-child(2) .dropdown-menu ul.dropdown-menu li a:hover{background:transparent!important;}
.menuweb .dropdown-menu:nth-child(2) .dropdown-menu ul.dropdown-menu li a:after{content:"";position:absolute;left:0;top:10px;width:8px;height:8px;background:#919191;border-radius:8px;}
.corner-left{float:left;}
.corner-right{float:right;}
.corner-left svg, .corner-right svg{width:15px;height:15px;margin:0;padding:0;line-height:1;display:block;}
.corner-left svg{fill:var(--cblack);}
.corner-right svg{fill:var(--cblack);}
.dropdown:hover > .dropdown-menu {display: block;margin-top: 0;}
.dropdown-submenu:hover > .dropdown-menu {display: block;top: 0;left: 100%;}
.maintop-right{background:var(--color1);}

.my-slider-container{position:relative;width:100%;height:70vh;overflow:hidden;}    
.my-slide{transition:opacity 1.5s ease-in-out;}
.imageslide img{width:100%; height:70vh; object-fit:cover;}
.my-titleslide{position:absolute;bottom:0;left:0;right:0;padding:30px 20% 20px 20px;background:linear-gradient(to top, rgba(0,0,0,0.85), transparent);}    
.my-titleslide h2, .my-titleslide p{font-size:240%;margin:0;padding:0;line-height:1.1;font-weight:bold;color:var(--yellow)}
.my-titleslide p{font-size:100%;font-weight:normal;color:var(--cwhite);}

.hometop-right-top{margin:30px 30px 0 10px;padding:5px 35px;}
.hometop-right-bottom{margin:20px 30px 30px 10px;}
.hometop-right-top p{font-size:100%;margin:0;padding:0;line-height:1.1;color:var(--cwhite);opacity:0.85;}
.hometop-right-top h2{font-size:120%;margin:5px 0;padding:0;line-height:1;color:var(--yellow);}
.quote-left{position:absolute;left:0;top:0;width:30px;height:30px;}
.quote-right{position:absolute;right:0;bottom:0;width:30px;height:30px;}
.quote-left svg, .quote-right svg{width:30px;height:30px;fill:var(--cwhite);opacity:0.35;}
.icon-item{position:relative;width:calc(33.33333333% - 10px);margin:10px 5px 0;overflow:hidden;cursor:pointer;border-radius:10px;}
.icon-item-inner{position:relative;border-radius:10px;padding:10px 0;background: linear-gradient(to top, rgba(0,0,0,0.25), transparent);overflow:hidden;cursor:pointer;}
.sidebar-section .icon-item-inner{padding:20px 0;background: linear-gradient(to top, var(--color1), var(--cgrey1));}
.icon-item:before{content:"";position:absolute;left:-10px;right:-10px;bottom:50%;height:100%;border-radius:0 0 50% 50%;opacity:0.6;background: linear-gradient(to top, var(--cwhite), transparent 70%);}
.icon-item:after{content:"";position:absolute;left:0;right:0;bottom:0;top:0;border-radius:10px;border:var(--cwhite) 1px solid;opacity:0.65;z-index:2;}
.icon-item p{position:relative;z-index:3;font-size:85%;margin:3px;padding:0;line-height:1;color:var(--cwhite);letter-spacing:-0.3px;opacity:0.7;}
.icon-item img{position:relative;z-index:3;width:auto;height:5.5vh;margin:0 auto 10px;}
.icon-item svg{width:auto;height:5vh;margin:0 auto 10px;fill:var(--cblack);opacity:0.4;}
.icon-item:hover{background:rgba(0,0,0,0.45);}
.icon-item:hover svg{fill:var(--cwhite);opacity:0.7;}
.icon-item:hover p{opacity:1;}
.icon-item:hover:after{opacity:1;}

.newscol{margin:20px 10px 0;background: linear-gradient(to top, var(--cgrey1), var(--cwhite), var(--cwhite), var(--cwhite));}
.image-news{height:26vh;}
.news-image{border-radius:10px 10px 0 0;}
.title-item h2{font-size:110%;margin:0 5px 0 0;padding:0;line-height:1.1;font-weight:bold;color:var(--cblack);}
.title-item p{font-size:95%;margin:0 5px 0 0;padding:0;line-height:1.1;font-weight:normal;}
.title-item span{font-size:95%;margin:0;padding:0;line-height:1.7;font-weight:bold;color: var(--color1);}
.news-date{padding:7px 15px;border-radius:0 0 10px 10px;background: linear-gradient(to right, var(--color1), var(--color2));line-height:1;font-size:95%;color:var(--cwhite);margin-top:-1px;}
.info-item{font-size:95%;margin:0;padding:0;line-height:1;font-weight:bold;}
.info-item-icon svg{width:22px;height:auto;fill:var(--cblack);margin:0 5px 0 0;opacity:0.5;line-height:1;}
.more-item{height:28px;background:var(--cwhite);padding:0 12px;font-size:95%;font-weight:bold;margin:0;line-height:1;border-radius:28px;font-weight:normal;color:var(--cblack);}
.newscol:hover .more-item{background: linear-gradient(to right, var(--color1), var(--color2));color:var(--cwhite);}
.newscol:hover{background:var(--cwhite);}
.newscol:hover .news-date{background:var(--cdark);}
.newscol:hover .title-item h2{color:var(--cdark);}

.beritadesa .newscol{margin:15px 10px 0;}
.beritadesa .newscol .aligntop{display: flex;flex-flow: row wrap;justify-content: space-between center;}
.beritadesa .newscol .aligntop.p10{padding:10px;}
.beritadesa .news-image{position:relative;width:33%;border-radius:7px;}
.beritadesa .news-title{position:relative;width:67%;}
.beritadesa .image-news{height:27vh;min-height:27vh;max-height:27vh;border-radius:7px;}
.beritadesa .news-image{border-radius:7px;overflow:hidden;}
.beritadesa .title-item h2{font-size:100%;margin:0 5px 0 10px;}
.beritadesa .info-item{font-size:95%;margin:-2px 0 0 10px!important;font-weight:normal;color:var(--cdefault)}
.beritadesa .info-item-icon svg{width:20px;}
.beritadesa .title-item p{margin:0 5px 0 10px;color:var(--cdefault);}
.beritadesa .alignbottom.difle-c{display:none!important;}
.beritadesa .info-item-icon svg{opacity:0.4;}
.td-utama1{min-width:150px!important;}
.td-utama2{min-width:100px!important;}
.col-desa{position:relative;width:calc(30% - 20px);margin:10px 10px 0;}
.col-gambaran{position:relative;width:calc(30% - 20px);margin:10px 10px 0;}
.col-wilayah{position:relative;width:calc(40% - 20px);margin:10px 10px 0;}
.table-gambaran td, .table-doc td{font-size:100%!important;margin:0!important;padding:5px 0 7px!important;line-height:1!important;font-weight:normal;color:var(--cdefault)!important;vertical-align:top;}
.table-doc td{padding:15px 10px!important;}
.table-doc th{font-size:100%!important;margin:0!important;padding:15px 10px!important;line-height:1!important;font-weight:bold;color:var(--cdefault)!important;vertical-align:middle!important;}
.module-col-right{position:relative;width:calc(100% - 20px);margin:20px 10px 0;}
.module-col{position:relative;width:calc(30% - 20px);margin:20px 10px 0;}
.module-scroll-pd{padding:10px 10px;}
.potensi-home .module-scroll-pd{padding:5px 10px 10px;}
.events-row{border-top:var(--brdgrey) 1px solid;padding:10px 0 0;margin:10px 10px 0;} 
.events-row:nth-child(1){border:none;margin:0 10px 0;}
.table-small td{font-size:95%!important;margin:0!important;padding:0!important;line-height:1!important;font-weight:normal;color:var(--cdefault)!important;vertical-align:top;}
.events-row h2{position:relative;display:block;font-size:100%;margin:0 0 3px;padding:0;line-height:1.1;font-weight:bold;color:var(--cdefault);}
.events-row p{display:block;font-size:95%;margin:0;padding:0;line-height:1.1;font-weight:normal;color:var(--cdefault);}
.events-row:hover h2{color:var(--color1);}
.eventhome ul, .eventhome li{list-style:none;margin:0;padding:0;}
.eventhome li{margin:0 10px;}
.event-icon{position:relative;width:6vh;height:6vh;border-radius:50%;background:var(--color2);}
.event-icon svg{width:3.5vh;height:auto;fill:var(--cwhite)!important;}
.event-data{position:relative;width:calc(100% - 7vh);margin:0 0 0 1vh;}
.module-box{position:relative;overflow:hidden;height:auto;height:35vh;margin:10px;}
.module-item{height:calc(15vh + 22px);background: linear-gradient(to right, var(--cwhite), var(--cgrey1));}
.module-item-icon{height:15vh;width:15vh;margin:0 0 0 10px;border:var(--cwhite) 1px solid;background: linear-gradient(to top, var(--color1), var(--color2));}
.module-side .module-item-icon{height:9vh;width:9vh;margin:0 0 0 7px;}
.module-side .module-item{height:calc(9vh + 14px);}
.module-item p{display:block;font-size:100%;margin:10px 0 0 10px;padding:0;line-height:1.1;color:var(--cdefault);}
.module-item h1{margin:0 0 0 10px;}
.module-item svg{width:8vh;height:auto;line-height:1;fill:rgba(255,255,255,0.6);stroke: rgba(0,0,0,0.2);stroke-width:1;stroke-linejoin: round;}
.module-side .module-item svg{width:5vh;}
.module-side .module-item h1{font-size:100%;}
.module-side .module-item p{font-size:100%;margin:5px 0 0 10px;}

.graph1, .graph2, .graph3, .graph4{position:absolute;right:-10px;top:-1px;bottom:-1px;z-index:10;}
.graph2, .graph3{z-index:11;}
.graph1 svg, .graph2 svg, .graph3 svg, .graph4 svg{width:auto;height:calc(70vh + 2px);}
.graph1 svg{fill:var(--color1);}
.graph2 svg{fill:var(--cdark);}
.graph3 svg{fill:var(--cwhite);}

.mobile-menu{margin:15px 15px 30px;}
.mobile-menu a{color:#000;margin:0;padding:0;font-weight:bold;display:block;}
.mobile-menu li a{color:#000;margin:0 0!important;padding:10px 10px!important;line-height:1.1!important;}
.mobile-menu ul{margin:0 0;padding:0;list-style:none;color:#000;}
.mobile-menu li ul{margin:0 0;padding:5px 0;color:#000;}
.mobile-menu li{font-size:16px !important;margin:5px 0;padding:0!important;line-height:1.2!important;background:var(--cwhite);list-style:none;color:#000;border-radius:4px;border:var(--brdgrey) 1px solid;min-width:100%!important;}
.mobile-menu li.active, .mobile-menu li:focus, .mobile-menu li a.active, .mobile-menu li a:focus{color:#000;background:var(--cwhite)!important;color:var(--c1)!important;}
.mobile-menu li ul li{margin:0;padding:0 0;line-height:1.2;color:#000;}
.mobile-menu-inner .navbar-nav{position:relative;overflow:hidden;width:100%;}
.mobile-menu .dropdown-menu{font-size:16px !important;position:relative;float:none;background:transparent !important;padding:5px 0 10px!important;border-radius:0 !important;box-shadow:none!important;border:none!important;-webkit-box-shadow:none!important;outline:none!important;}
.mobile-menu .dropdown-menu:nth-child(2) .dropdown-menu{background:transparent !important;border-radius:0 !important;box-shadow:none!important;border:none!important;-webkit-box-shadow:none!important;outline:none!important;}
.mobile-menu .dropdown-menu:nth-child(2) .dropdown-menu li{margin-left:15px !important;}
.mobile-menu .dropdown-menu li{background:transparent!important;border-radius:0!important;-webkit-box-shadow:0!important;-moz-box-shadow:none!important;box-shadow:none!important;border:none!important;}
.mobile-menu .dropdown-menu li, .mobile-menu .dropdown-menu li a, .mobile-menu .dropdown-menu a, .mobile-menu .dropdown-menu ul li{margin:0!important;padding:0 0!important;line-height:1.1!important;}
.mobile-menu .dropdown-menu li a{padding:4px 35px!important;}

.send-sikema{padding:20px 20px 20px 120px;}
.btsend-sikema{position:relative;overflow:hidden;height:40px;padding:0 15px;background:rgba(0,0,0,0.1);border-radius:7px;border:rgba(255,255,255,0.6) 1px solid;font-size:100%;margin:0;line-height:1;color:var(--cwhite);}
.btsend-sikema:hover{background:rgba(0,0,0,0.3)!important;}
.btsend-sikema svg{width:auto;height:24px;fill:var(--cwhite);float:right;margin:0 0 0 auto;}
.sikema-label{position:relative;font-size:100%;padding:0 0 0 15px;line-height:1.1;color:var(--cwhite);margin:0 0 5px;}
.sikema-label:after{content:"";position:absolute;left:0;top:4px;width:10px;height:10px;border-radius:50%;background:var(--cwhite);opacity:0.7;}
.lacak-sikema{margin:0 20px 20px 120px;}
.form-sikema .form-control{height:40px;line-height:1.1;background:rgba(0,0,0,0.1);padding:0 10px!important;border-radius:7px!important;border:rgba(255,255,255,0.6) 1px solid;color:var(--cwhite)!important;font-size:95%!important;}
.btsikema{height:40px!important;margin:0 0 0 5px!important;border-radius:7px!important;border:rgba(255,255,255,0.6) 1px solid!important;background:rgba(0,0,0,0.1)!important;line-height:1;}
.btsikema svg{width:auto;height:24px;fill:var(--cwhite);}
.btsikema:hover{background:rgba(0,0,0,0.3)!important;}
.form-sikema .form-control::-moz-placeholder,.form-sikema .form-control:-ms-input-placeholder,.form-sikema .form-control::-webkit-input-placeholder{color:var(--cwhite)!important}
.form-sikema input::placeholder{color:var(--cwhite)!important;opacity:0.6;font-size:95%!important;}
.sikema-isian{margin:0 10%;}
.formsikema-left{position:relative;width:calc(25% - 10px);margin:0 5px;font-weight:bold;}
.formsikema-right{position:relative;width:calc(75% - 10px);margin:0 5px;}
.sikema-isian .form-group{margin:10px 0 0!important;padding:0!important;}

.sikema-left svg{display:block;width:100%;height:auto;margin:0;line-height:1;fill:var(--cgrey2);stroke: rgba(0,0,0,0.5);stroke-width:30px;stroke-linejoin: round;}
.sikema-left h2{position:relative;z-index:5;font-size:120%;margin:0 0 25px;padding:0;line-height:1;font-weight:bold;letter-spacing:-0.5px;text-transform:uppercase;}
.sikema-left p{font-size:100%;margin:0;padding:0;line-height:1.1;font-weight:normal;letter-spacing:-0.3px;}
.sikema-center{margin:0 5px;background: linear-gradient(to right, var(--color2), var(--color1));border-radius:10px;}
.monitor-vec{position:absolute;right:-120px;bottom:-15px;width:65%;z-index:3;}
.monitor-vec img{display:block;width:100%;height:auto;}
.nav-tabs{border:none!important;}
.nav-tabs li{width:50%;border:none!important;}
.nav-tabs>li>a{display:block;width:100%;margin:0;padding:0!important;line-height:1.1;font-weight:bold;font-size:100%;color:var(--cdefault)!important;height:35px;text-align:center;border-bottom:var(--brdgrey) 1px solid!important;color:var(--cdefault)!important;}
.nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover{border-bottom:transparent 1px solid!important;background:transparent!important;color:var(--cdark)!important;}
.sikema-right .tab-content{position:absolute;left:0;top:35px;right:0;bottom:0;margin:10px;}
.tabbox{position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;}
.sikema-item-text p{font-size:95%;margin:0;padding:2px 0 0;line-height:1;color:var(--cdefault);}
.sikema-item:hover .sikema-item-text p{color:var(--color1);}
.sikema-item-icon{position:relative;width:25px;}
.sikema-item-icon svg{width:25px;height:auto;opacity:0.5;}
.sikema-item-text{position:relative;width:calc(100% - 30px);margin:0 0 0 5px;}
.sikema-more{height:30px;border-radius:30px;line-height:1.1;font-size:95%;margin:10px 0 0;padding:0 10px;border:var(--brdgrey) 1px solid;color:var(--cdark);}
.sikema-more:hover{background:var(--color1);color:var(--cwhite);}
.data-empty{font-size:95%;margin:0 10%;padding:0;line-height:1;color:var(--cdefault);line-height:1;}
.data-empty svg{width:10vh;height:auto;margin:3px 5px 0 0;fill:var(--brdgrey);}
.module-box .data-empty svg{width:auto;height:7.5vh;fill:var(--cblack);opacity:0.3;}

.tabs-data .nav-tabs{border-bottom:var(--brdgrey) 1px solid!important;}
.tabs-data .nav-tabs li{border:none!important;border-bottom:transparent 1px solid!important;padding:0 3px!important;margin:0 0 -1px!important;line-height:1!important;height:auto!important;}
.tabs-data .nav-tabs>li>a{padding:0!important;margin:0!important;line-height:1!important;height:46px!important;border:none!important;}
.tabs-data .nav-tabs>li.active, .tabs-data .nav-tabs>li:focus{border:var(--brdgrey) 1px solid!important;border-bottom:var(--cwhite) 1px solid!important;border-radius:5px 5px 0 0;}
.tabs-pendidikan .nav-tabs li{width:33.33333333%;}
.tabs-penduduk .nav-tabs li{width:20%;}
.tabs-kesehatan .nav-tabs li{width:25%;}
.sinergimain{display: grid;grid-template-columns: repeat(auto-fit, minmax(calc(20% - 20px), 1fr));grid-gap: 10px;}
.sinergi-inner{padding:40px 0 20px;background:linear-gradient(to right, var(--cgrey1), var(--cwhite), var(--cgrey1));}
.headbox{margin:0 0 -30px;z-index:5;}
.headbox h1{color:var(--cwhite);font-weight:bold;}
.headbox .headmodule{background:linear-gradient(to right, var(--color1), var(--color2));position:relative;padding:0 15px;height:40px;margin:0;border-radius:0 0 5px 5px;}
.headbox .headmodule:before{content:"";position:absolute;left:-10px;top:0;border-right:var(--cblack) 10px solid;border-top:transparent 10px solid;}
.headbox .headmodule:after{content:"";position:absolute;right:-10px;top:0;border-left:var(--cblack) 10px solid;border-top:transparent 10px solid;}
.desk-module{display:block;font-size:100%;margin:0 auto 10px;padding:0;line-height:1.1;font-weight:normal;color:var(--cblack);}

.marquee-wrapper{overflow: hidden;width: 100%;background:transparent!important;border:none!important;}
.marquee-inner{display: flex;background:transparent!important;border:none!important;}
.marquee-inner .ratio{flex-shrink: 0;margin: 10px 10px 0;width:clamp(15%, 15%, 15%);overflow: hidden;border-radius:7px;background:var(--cwhite);box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.3);-webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.3);-moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.3);position:relative;border:var(--brdgrey) 1px solid;text-align:center;padding:15px 0;}
.marquee-inner img{width:auto;height:10vh;margin:0 auto;}
.marquee-inner p{display:block;font-size:95%;margin:10px 10px 0;padding:0;line-height:1.1;font-weight:normal;color:var(--cblack);}

.pagetop{background:var(--color1);padding:5vh 0;}
.pagetop svg{width:30px;height:auto;fill:var(--yellow);line-height:1;margin:0 5px 0 0;}
.pagetop h1{font-size:100%;padding:0;margin:0;line-height:1;font-weight:bold;text-transform:uppercase;color:var(--cwhite);}
.page-content{padding-top:30px;}
.leftcol-inner{margin:0 30px 0 0;}
.title-content, .title-sikema{font-size:200%;padding:0;margin:0 0 10px;line-height:1.1;font-weight:bold;letter-spacing:-1px;}
.content-style .info-item{font-size:100%;font-weight:normal;margin:0 15px 0 0;}
.content-style .info-item-icon svg{width:auto;height:24px;}
.content-image{border:var(--brdgrey) 1px solid;border-radius:10px;padding:5px;margin:20px 0 0;}
.content-image img{display:block;width:100%;height:auto;line-height:1;margin:0 0;border-radius:10px;}
.comment-row{border-top:var(--brdgrey) 1px dotted;margin:10px 0 0;padding:10px 0 0;}
.comment-icon{position:relative;width:40px;}
.comment-icon svg{width:40px;height:auto;line-height:1;opacity:0.2;margin-top:-2px;}
.comment-user{position:relative;width:calc(100% - 45px);margin:0 0 0 5px;}
.comment-user h3, .reply-row h3{font-size:100%;padding:0;margin:0;line-height:1.1;font-weight:bold;}
.comment-user p, .comment-detail p, .reply-row p, .reply-isi p{font-size:100%;padding:0;margin:0;line-height:1.1;}
.comment-detail{margin:5px 0 0 45px;}
.btsmall-custom, .btsmall-custom:focus{height:24px;!importantmargin:0!important;padding:0 15px!important;line-height:1!important;font-size:80%!important;border-radius:24px!important;background:var(--cgrey1)!important;border:var(--brdgrey) 1px solid!important;box-shadow:none!important;outline:none!important;color:var(--cblack)!important;}
.reply-row{margin:10px 0 0 45px;}
.reply-top{border-left:var(--brdgrey) 2px solid;padding:0 0 0 5px;}
.reply-isi{margin:5px 0 0 7px;}
.comment-content .nav-tabs li, .comment-content .nav-tabs li a{border:none!important;background:transparent!important;padding:0!important;margin:0!important;height:auto!important;}
.comment-content .nav-tabs li{opacity:0.6;}
.comment-content .nav-tabs li:hover, .comment-content .nav-tabs li:focus, .comment-content .nav-tabs li.active{opacity:1;}
.list-comment, .send-comment{height:40px;margin:0;line-height:1;font-weight:bold;}
.list-comment{color:var(--color1);text-transform:uppercase;font-size:120%;}
.send-comment2{color:var(--cwhite);height:34px;padding:0 15px;border-radius:34px;background:linear-gradient(to right, var(--color1), var(--color2));font-size:90%;}
.list-comment svg{width:auto;height:40px;line-height:1;margin:2px 5px 0 0!important;fill:var(--color2)!important;opacity:1!important;}
.headmodal{padding:0 15px;line-height:1;margin:0;height:46px;border-bottom:var(--brdgrey) 1px solid;}
.headmodal h1{font-size:100%;padding:0;margin:0;line-height:1.1;font-weight:bold;text-transform:uppercase;}
.close-modal{width:30px;height:30px;float:right;margin:0 0 0 auto;background:var(--color1);cursor:pointer;border-radius:50%;}
.close-modal svg{width:22px;height:auto;line-height:1;fill:var(--cwhite);}
.commentlabel{position:relative;width:calc(15% - 10px);margin:0 5px;}
.commentdata{position:relative;width:calc(85% - 10px);margin:0 5px;}

.statis-content{min-height:40vh;margin:0 5%;}
.statis-inner{z-index:2;}
.title-statis h1{position:relative;font-size:200%;font-weight:bold;padding:0;line-height:1.1;margin:0;letter-spacing:-0.5px;}
.statis-bg{position:absolute;left:0;right:0;top:-20px;padding:0;margin:0;line-height:1;font-size:450%;letter-spacing:-2px;font-weight:800;color:var(--cgrey1);opacity:0.85;}
.statis-bg:before, .statis-bg:after{content:"";position:absolute;top:0;bottom:0;width:15%;z-index:3;}
.statis-bg:before{left:-1px;background:linear-gradient(to right, var(--cwhite), transparent);}
.statis-bg:after{right:-1px;background:linear-gradient(to right, transparent, var(--cwhite));}
.geoform{margin:0 30%;}
.mapgeo{border:none;margin:0!important;height:75vh;border-radius:10px;}
.compass{position:relative;margin:15px 0;}
.wilayahhome .compass{margin:5px 0;}
.compass1{position:relative;}
.compass2{position:absolute;left:0;right:0;top:0;z-index:2;}
.compass1 svg, .compass2 svg{width:30%;height:auto;display:block;line-height:1;padding:0;margin:0 auto;}
.wilayahhome .compass1 svg, .wilayahhome .compass2 svg{width:20%;}
.compass1 svg{fill:var(--cgrey3);}
.compass2 svg{fill:var(--color2);}
.geo-desa li{padding:5px 0!important;}
.batas-left, .batas-right{position:absolute;top:50%;width:auto;-webkit-transform: translate3d(0, -50%, 0);-moz-transform: translate3d(0, -50%, 0);-ms-transform: translate3d(0, -50%, 0);-o-transform: translate3d(0, -50%, 0);transform: translate3d(0, -50%, 0);}
.batas-left{right:65%;float:right;}
.batas-right{left:65%;float:left;}
.wilayahhome .batas-left{right:60%;float:right;}
.wilayahhome .batas-right{left:60%;float:left;}
.barat{margin:0 15px 0 auto;}
.timur{margin:0 auto 0 15px;}
.wilayahhome .barat{margin:0 5px 0 auto;}
.wilayahhome .timur{margin:0 auto 0 5px;}
.batas-wilayah h3, .batas-wilayah p{font-size:100%;margin:0;padding:0;line-height:1.1;font-weight:bold;}
.batas-wilayah p{font-size:95%;font-weight:normal;}
.wilayahhome .batas-wilayah h3{font-size:95%;}
.wilayahhome .batas-wilayah p{font-size:90%;}
.wilayahhome .batas-top.mt30{margin-top:10px!important;}

.content-isi, .content-isi h1,.content-isi h2,.content-isi h3,.content-isi h4,.content-isi h5,.content-isi h6,.content-isi p {line-height:1.5;display:block;}
.content-isi h1,.content-isi h2,.content-isi h3,.content-isi h4,.content-isi h5,.content-isi h6,.content-isi p{margin:0 0 15px;}
.content-isi ul{margin:0 0 10px 40px;line-height:1.4;padding:0;}
.content-isi li{margin:0 0 10px 0;line-height:1.4;padding:0;}
.content-isi .box-tools{display:none;}
.content-isi .table, .content-isi table{width:100% !important;}
.content-isi .box-header{display:flex !important;justify-content: center;align-items: center;}
.content-isi .box-header h3{font-size:120%;padding:0 0 5px;margin:0 auto 5px;text-align:center;border-bottom:var(--brdgrey) 1px solid;}
.content-isi .box{padding:0 0 10px !important;}
.content-isi hr {margin-top: 5px !important;margin-bottom: 5px !important;border:none !important;}
.content-isi .progress-group{font-size:90% !important;}
.content-isi .progress-bar{background-color:var(--colorsoft3) !important;}
.content-isi .progress-bar-striped {background-color: var(--bggrey2) !important;}
.content-isi .progress {height: 15px !important;border-radius:15px !important;}
.content-isi .progress-bar {line-height: 15px !important;border-radius:15px !important;}
.content-isi img{margin:0 auto !important;min-width:50% !important;max-width:100% !important;text-align:center;}

.form2{position:relative;width:calc(50% - 30px);margin:0 15px;}
.form3{position:relative;width:calc(33.33333333% - 20px);margin:0 10px;}
.form-twin{margin:0 20%;}
.form-twin label, .form-three label{line-height:1;padding:0;margin:0 10px 0 0;}
.colpddk{position:relative;width:calc(25% - 10px);margin:0 5px;background: linear-gradient(to right, var(--cwhite), var(--cgrey1));border-radius:14vh;}
.gender-box{position:relative;width:14vh;height:14vh;margin:0;}
.gender{position:relative;width:14vh;height:14vh;margin:0;border-radius:50%;overflow:hidden;animation: rotate-animation 10s infinite linear;}
.gender:before{content:"";position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:100%;height:100%;border-radius:50%;}
.pddk-total .gender:before{background-image: conic-gradient(var(--green) 50%, var(--cgrey2) 0);}
.pddk-man .gender:before{background-image: conic-gradient(var(--blue) 50%, var(--cgrey2) 0);}
.pddk-woman .gender:before{background-image: conic-gradient(var(--pink) 50%, var(--cgrey2) 0);}
.pddk-disab .gender:before{background-image: conic-gradient(var(--orange) 50%, var(--cgrey2) 0);}
.gender-icon svg{width:6vh;height:auto;line-height:1;margin:0;padding:0;opacity:0.5;}
.gender-inner{display:flex;justify-content:center;align-items:center;position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:12vh;height:12vh;background:var(--cwhite);border-radius:100%;-webkit-box-shadow: inset 0px 0px 10px 0px rgba(0,0,0,0.65);-moz-box-shadow: inset 0px 0px 10px 0px rgba(0,0,0,0.65);box-shadow: inset 0px 0px 10px 0px rgba(0,0,0,0.65);text-align:center;}
.pddk-number{float:right;margin:0 20px 0 auto;padding:0;line-height:1;font-size:150%;font-weight:bold;}
.pddk-info{margin:0 0 0 10px;padding:0;line-height:1.1;font-size:100%;font-weight:normal;}
.chart-pertumbuhan{min-height:55vh;}
.boxicon{position:relative;width:12vh;height:12vh;border-radius:50%;}
.boxicon svg{width:6vh;height:auto;margin:0;line-height:1;fill:var(--cwhite);opacity:0.7;}
.boxdata{position:relative;width:calc(100% - 13vh);margin:0 0 0 1vh;}
.boxdata h2, .boxdata h3, .boxdata p{font-size:100%;margin:0;padding:0;line-height:1.1;}
.boxdata h3, .boxdata p{font-weight:normal;font-size:95%;}
.progress{margin:5px 0!important;height:10px;border-radius:10px;background:var(--cgrey1);}
.tabs-data .tab-content{border:var(--brdgrey) 1px solid;border-top:none;padding:15px 15px;margin:0;}
.chart-tabs{min-height:30vh;}
.anggaran{padding:0 3px 3px;}
.col-anggaran{position:relative;width:calc(50% - 30px);margin:25px 15px 0;}
.anggaran .boxdata div{width:100%;margin:0 25px;}
.anggaran .progress{margin:5px 0 0!important;}
.boxicon span{font-size:160%;line-height:1;padding:0;margin:0;font-weight:bold;color:var(--cwhite);}
.anggaran .boxdata{width:calc(100% - 14.5vh);margin:0 0 0 0.5vh;border-radius:14vh;}
.anggaran .boxicon{width:14vh;height:14vh;}
.grafik-anggaran{border:var(--brdgrey) 1px solid;}
.chart-anggaran{height:55vh;}
.gallerypage{padding:0 3px;}
.galpage-image{position:relative;width:calc(50% - 10px);margin:0 5px;}
.galpage-data{position:relative;width:calc(50% - 10px);margin:0 5px;}
.galpage-data h2{display:block;font-size:120%;margin:0;padding:0;line-height:1.1;font-weight:bold;color:var(--cdefault);}
.galpage-data h2 a{color:var(--cdefault);}
.open-gal{position:relative;font-size:100%;margin:0;padding:0 0 0 15px;line-height:1.1;font-weight:normal;}
.open-gal:after{content:"";position:absolute;left:0;top:0;border-left:var(--brdgrey) 12px solid;border-top:transparent 7px solid;border-bottom:transparent 7px solid;}

.table-bordered,.table-bordered th,.table-bordered td,.table>thead>tr>th,.table>tbody>tr>th,.table>tfoot>tr>th,.table>thead>tr>td,.table>tbody>tr>td,.table>tfoot>tr>td,.table>thead>tr>th,.table>tbody+tbody,.table-bordered>thead>tr>th,.table-bordered>tbody>tr>th,.table-bordered>tfoot>tr>th,.table-bordered>thead>tr>td,.table-bordered>tbody>tr>td,.table-bordered>tfoot>tr>td{border-color:var(--brdgrey)}
.populasi-show{background:linear-gradient(to right, var(--cgrey1), transparent, var(--cgrey1));}
.population-box{position:relative;width:calc(33.33333333% - 20px);margin:0 10px 0;}
.population-inner{padding:10px;background:var(--cwhite);border:var(--brdgrey) 1px solid;}
.population-icon{position:relative;width:10vh;height:10vh;overflow:hidden;}
.population-icon:before{content:"";position:absolute;left:-10px;right:-10px;top:-10px;bottom:40%;background:var(--cwhite);border-radius:0 0 50% 50%;opacity:0.3;}
.population-icon svg{width:6vh;height:auto;fill:var(--cwhite);}
.population-content{position:relative;width:calc(100% - 10vh);}
.population-content h2, .population-content h3, .population-content p{font-size:95%;margin:0;padding:0;line-height:1;color:var(--cdefault);}
.population-content h2{font-size:180%;margin:0 5px 0 0;}
.population-content h3{margin:0 0 0 10px;font-size:100%}
.population-right{float:right;margin:0 0 0 auto;text-align:right;}
.po-total .population-icon{background:var(--green);}
.po-male .population-icon{background:var(--cyan);}
.po-female .population-icon{background:var(--pink);}
.po-total .population-content h2{color:var(--green);}
.po-male .population-content h2{color:var(--cyan);}
.po-female .population-content h2{color:var(--pink);}
.leader-title{position:absolute;left:0;bottom:0;left:40%;margin:0 0 0 10px;}
.sambutan{margin:0 0 10px;padding:5px 0 5px 30px;}
.sambutan .quote-right{display:none;}
.sambutan .quote-left svg, .sambutan .quote-right svg{width:25px;height:25px;fill:var(--yellow);opacity:1;}
.sambutan h1, .sambutan p{display:block;font-size:100%;margin:0;padding:0;line-height:1.1;}
.colsambutan .sambutan p{line-height:1.2;opacity:0.85;}
.sambutan h1{font-size:140%;line-height:1;color:var(--color1);font-weight:bold;text-transform:uppercase;margin:0 0 5px;}
.leader h3, .leader h2{display:block;font-size:100%;margin:3px 0 0;padding:0;line-height:1.1;font-weight:bold;}
.leader h3{color:var(--color1);}
.swiper {height:auto!important;}
.swiper-button-next,.swiper-button-prev{background-color:#fff!important;width:34px!important;height:34px!important;color:transparent!important;font-size:0!important;border-radius:50%!important;box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);-webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);-moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);opacity:0.5;background-repeat:no-repeat;background-position:center;background-size:30% auto;}
.swiper-button-next{right:5px!important;left:auto!important;background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23515151'%2F%3E%3C%2Fsvg%3E");}
.swiper-button-prev{left:5px!important;right:auto!important;background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23515151'%2F%3E%3C%2Fsvg%3E");}
.swiper-button-next:hover, .swiper-button-prev:hover{opacity:1;}
.swiper-pagination-bullet{display:none!important;}
#albums-container .swiper-button-next{right:15px!important;}
#albums-container .swiper-button-prev{left:15px!important;}
.head-moduletop{position:relative;height:6vh;padding:0 10px;background:var(--color1);border-radius:7px 7px 0 0;margin:0 0 7px;}
.head-moduletop:before, .head-moduletop:after{content:"";position:absolute;left:0;bottom:-7px;width:100%;height:7px;background:var(--color1);}
.head-moduletop:after{background:var(--cwhite);border-radius:7px 7px 0 0;}
.head-moduletop h1{position:relative;font-size:140%;font-weight:bold;padding:0;line-height:1;margin:0;letter-spacing:-0.5px;text-transform:uppercase;color:#fff;}
.title-absolute{position:absolute;left:0;bottom:0;right:0;padding:10px;background: linear-gradient(to top, var(--cblack), transparent);border-radius:0 0 7px 7px;display:block!important;}
.title-absolute h2, .title-absolute p{position:relative;font-size:90%;font-weight:normal;padding:0;line-height:1.1;margin:0;letter-spacing:-0.3px;color:var(--cgrey2);}
.gal-open .title-absolute h2, .galhome-box .title-absolute h2{font-size:100%;font-weight:bold;text-shadow:1px 1px 2px #000;-webkit-text-stroke:1px transparent;}
.title-absolute h2{font-size:100%;margin:0 0 5px;color:var(--cwhite);}
.desa-box{position:absolute;top:30px;left:0;right:0;bottom:0;background: linear-gradient(to top, var(--cgrey1), transparent);border:var(--brdgrey) 1px solid;}
.desa-box-inner{position:relative;overflow:hidden;height:100%;}
#desa-list-container ul, #desa-list-container ol{margin:0 5px!important;padding:0!important;line-height:1;list-style:none!important;}
.desalist li{position:relative;margin:7px 0!important;padding:0 0 0 20px!important;line-height:1.1;font-size:100%1important;font-weight:bold;list-style:none!important;}
.panel-icon-box .desalist li, .panel-icon-box .desalist li a{color:var(--cwhite)!important;font-weight:normal!important;}
.desalist li:after{content:"";position:absolute;left:0;top:4px;width:10px;height:10px;border-radius:50%;background:var(--cgrey3);}
.map-geo{height:80vh;border-radius:10px;}
.maphome{border:var(--brdgrey) 1px solid;}
#canvas_peta_home{height:50vh;border-radius:10px;}
.imagezoom, .imagezoom:after{position:absolute;left:0;top:0;right:0;bottom:0;}
.imagezoom svg{position:relative;z-index:3;width:35px;height:35px;fill:var(--cwhite);opacity:0;}
.gal-open:hover .imagezoom svg{opacity:1;}
.imagezoom:after{content:"";opacity:0;background:var(--color1);}
.galhome-box{padding:10px 12px!important;}
.galhome-date{padding:10px 0 0;background:var(--cgrey1);padding:10px;border-radius:0 0 10px 10px;}
.gal-open:hover .imagezoom:after{opacity:0.5;}
.head-geo{height:30px;font-size:100%;margin:0;padding:0 10px;line-height:1.1;font-weight:bold;}
.geo-bot1{position:relative;width:calc(50% - 10px);margin:0 5px;background:var(--color2);color:var(--cwhite);}
.geo-bot2{background:var(--cgrey1);border:var(--brdgrey) 1px solid;}
.geobot h3, .geobot p{font-size:100%;font-weight:normal;margin:0;padding:0;line-height:1;}
.geobot p{margin:0 3px;}
.geobot h3{margin:0;font-weight:normal;}
.middle-col{position:relative;width:calc(33.33333333% - 20px);margin:20px 10px 0;min-height:40vh;}
.middle-col:before{content:"";position:absolute;margin:0 2px;left:0;top:calc(6vh + 7px);right:0;bottom:0;border-radius:7px;z-index:2;box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);-webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);-moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);}
.running-text{position:relative;overflow:hidden;border:var(--brdgrey) 1px solid;border-radius:5px;height:40px;}
.running-head{position:relative;padding:0 15px;margin:5px;height:30px;background:var(--color2);line-height:1;font-size:100%;font-weight:bold;color:var(--cwhite);border-radius:5px 0 0 5px;}
.running-head:after{content:"";position:absolute;top:0;right:-10px;border-left:var(--color2) 10px solid;border-top:transparent 15px solid;border-bottom:transparent 15px solid;}
.run-isi{margin:0 0 0 10px;line-height:40px;padding:0;}
.run-isi p{position:relative;display:block;line-height:40px;padding:0 0 0 30px;font-sise:100%;font-weight:normal;margin:0 0 0 15px;white-space:nowrap;}
.run-isi p:after{content:"";position:absolute;left:0;top:35%;width:10px;height:10px;border-radius:50%;background:var(--cgrey3);}
.run-isi p:first-child:after{display:none;}
.feedhome-area{position:relative;overflow:hidden;}
.feedhome-head{margin:0 0 10px;}
.feedhome-head svg{width:28px;height:auto;line-height:1;fill:var(--cwhite);opacity:0.6;margin:3px 0 0 10px;}
.feedhome-head h1{font-size:140%;font-weight:bold;margin:0;padding:0;line-height:1.1;color:var(--cwhite);text-transform:uppercase;opacity:0.6;}
.feedhome{background: linear-gradient(to top, var(--cblack), var(--color1));padding:20px 15px 10px;}
.feedhome-col{position:relative;width:calc(33.33333333% - 20px);margin:15px 10px 0;}
.feedhome-image{width:calc(35% - 10px);margin:0 5px 0;}
.feedhome-content{width:calc(65% - 10px);margin:0 5px 0;}
.feedhome-content h2{font-size:100%;font-weight:bold;margin:5px 0;padding:0;line-height:1.1;color:var(--cgrey1);text-shadow:1px 1px 2px #000;-webkit-text-stroke:1px transparent;}
.feedhome-content p, .feedhome-content h3{font-size:95%;font-weight:normal;margin:0;padding:0;line-height:1.1;color:var(--cgrey1);}
.feedhome-content h3{color:var(--yellow);}
.feedhome-col:hover .feedhome-content h2{color:var(--yellow);}
.feedhome-col:hover .feedhome-content h3{color:var(--cgrey1);}
.maintop-inner{background:var(--cgrey3);}
@-webkit-keyframes rotate-animation{0%{transform:rotate(0deg)}50%{transform:rotate(180deg)}100%{transform:rotate(360deg)}}@-moz-keyframes rotate-animation{0%{transform:rotate(0deg)}50%{transform:rotate(180deg)}100%{transform:rotate(360deg)}}@-o-keyframes rotate-animation{0%{transform:rotate(0deg)}50%{transform:rotate(180deg)}100%{transform:rotate(360deg)}}@keyframes rotate-animation{0%{transform:rotate(0deg)}50%{transform:rotate(180deg)}100%{transform:rotate(360deg)}}

.footer-section{padding:40px 0 0;border-top:var(--brdgrey) 1px solid;background: linear-gradient(to right, var(--cgrey1), var(--cwhite), var(--cgrey1));}
.graphmod, .graphmod1, .copyright{position:relative;overflow:hidden;}
.graphmod{margin:0 0 -10px;}
.copyright{z-index:8;background: linear-gradient(to right, var(--cblack) 0%, var(--color1) 50%, var(--cblack) 100%);}
.graphmod2{position:absolute;left:0;right:0;top:0;z-index:2;}
.graphmod1 svg, .graphmod2 svg{width:100%;height:auto;fill:var(--color2);display:block;height:auto;}
.copyright p{font-size:95%;margin:0;padding:0 0 15px;line-height:1;color:var(--cgrey1);}
.footer-inner h1, .footer-inner h2, .footer-inner p{font-size:95%;margin:0;padding:0;line-height:1;}
.footer-inner h1{font-weight:bold;font-size:100%;text-transform:uppercase;color:var(--color1);}
.footer-inner h2{text-transform:uppercase;font-weight:normal;margin:0 0 5px;font-size:90%;}
.footer-inner h3{font-weight:bold;font-size:100%;text-transform:uppercase;margin:0;padding:0;line-height:1;}
.footer-inner svg{width:auto;height:22px;margin:0 3px 0 0;line-height:1;opacity:0.4;}
.footer-inner{margin:0 5%;z-index:10;min-height:22vh;}
.contact-inner{margin:0 5px;}
.footer-social img{width:auto;height:5vh;margin:15px 3px 0!important;line-height:1;}
.footer-left{padding:10px 0 0;}
.footer-right{padding:10px 0 0;}
.footer-absolute{position:absolute;left:30%;width:40%;top:0;bottom:0;}
.footer-absolute img{display:block;width:5vh;height:auto;margin:0 auto 5px;}
.table-right{margin:0 0 0 auto;float:right;width:100%;}
.table-left{width:100%;}
.table-footer td{font-size:95%!important;margin:0!important;padding:6px 0!important;line-height:1!important;font-weight:normal;color:var(--cdefault)!important;vertical-align:top;border:none;border-top:var(--brdgrey) 1px solid;}
.tdright{text-align:right!important;}
.table-jamkerja th, .table-jamkerja td{font-size:95%!important;margin:0!important;padding:3px 10px; 0!important;line-height:1!important;font-weight:normal;color:var(--cdefault)!important;vertical-align:center;border:var(--brdgrey) 1px solid;}
.table-jamkerja th{padding:7px 10px;font-weight:bold;}
#backToTop{display: none; position: fixed; bottom: 20px; right: 20px; z-index: 500; border: none; outline: none; background-color:var(--color1); border-radius: 50%;width:34px;height:34px;margin:0!important;padding:0!important;line-height:1!important;}
.bttop{width:34px;height:34px;}
#backToTop svg{width:24px;height:auto;line-height:1;fill:var(--cwhite);}
.preloader_bg{z-index:3000!important;position:fixed;top:0;right:0;left:0;bottom:0;background:#fff;}
.panel-icon{position:absolute;bottom:0;right:0;height:0;left:0;overflow:hidden;transition:0.5s;-webkit-transition:0.5s;-moz-transition:0.5s;-o-transition:0.5s;background:var(--color1);z-index:300;border-radius:10px;}
.panel-icon.is-open {height: 100%;}
.panel-icon-box{position:absolute;bottom:0;right:0;height:100%;left:0;overflow:hidden;border:rgba(255,255,255,0.5) 1px solid;border-radius:10px;}
.panel-icon-pd{padding:10px 20px 55px;}
.panel-icon-close{position:absolute;left:0;right:8px;bottom:0;height:45px;background: linear-gradient(to top, var(--color1), transparent);}
.closepanel{width:30px;height:30px;background:var(--color2);border-radius:50%;cursor:pointer;}
.closepanel svg, .closemodal svg{width:20px;height:auto;fill:var(--cwhite);}
.panel-item{margin:7px 0 0;padding:7px 10px;background:rgba(0,0,0,0.15);color:var(--cwhite);border-radius:5px;opacity:0.6;font-size:95%;font-weight:normal;line-height:1.1;}
.panel-item:hover{opacity:1;background:var(--color2);}
.sidebar-section .panel-item{margin:10px 0 0;padding:10px 10px}
.tablepotensi th{display:none!important;}
.tablepotensi td{vertical-align:top!important;line-height:1.1!important;padding:0!important;margin:0!important;border:none!important;}
.tdbold{font-weight:bold!important;}
.potensi-row{margin:10px 2px;padding:10px;}
.potensi-image{position:relative;width:calc(35% - 10px);margin:0 5px;}
.potensi-content{position:relative;width:calc(65% - 10px);margin:0 5px;}
.potensi-content h2{font-size:120%;margin:10px 0 0;padding:0;line-height:1.1;font-weight:bold;}
.potensi-location svg{width:30px;height:auto;fill:var(--color2);margin:0 5px 0 0;}
.potensi-home .potensi-location svg{width:20px;}
.potensi-location{font-size:100%;margin:0 0;padding:0;line-height:1.1;}
.potensi-home .potensi-location{font-size:95%;}
.potensi-link{border:var(--brdgrey) 1px solid;padding:0 15px;height:30px;border-radius:30px;margin:10px 0 10px;background:var(--cgrey1);cursor:pointer;}
.potensi-home .potensi-content h2{font-size:100%;margin:5px 0 0;}
.potensi-home .potensi-row{margin:0 5px 10px;padding:0;box-shadow:none!important;}
.potensi-home .potensi-content p{font-size:95%;margin:0;padding:0;line-height:1.1;}

.modal.centercustom .modal-dialog {position: fixed;margin: auto;left:50%;width: 40%;top:20px;bottom:20px;-webkit-transform: translate3d(-50%, 0, 0);-ms-transform: translate3d(-50%, 0, 0);-o-transform: translate3d(-50%, 0, 0);transform: translate3d(-50%, 0, 0);z-index:99999 !important;}
.inner-modal{position:absolute;left:0;top:50px;right:0;bottom:0;background:#fff;border-radius:0 0 10px 10px;overflow:hidden;}
.inner-modal-box{position:absolute;left:0;top:0;right:0;height:100%;overflow:hidden;}
.topmodal{position:absolute;left:0;top:0;right:0;height:50px;background:var(--color2);padding:0 15px;border-radius:10px 10px 0 0;} 
.closemodal{width:30px;height:30px;background:var(--color1);border-radius:50%;margin:0 0 0 auto;float:right;cursor:pointer;}
.topmodal h1{font-size:100%;margin:0;padding:0;line-height:1;color:var(--cwhite);}
.title-potensi{font-size:180%;margin:0 auto 15px;padding:0;line-height:1.1;font-weight:bold;}
.table-desa{width:100%;border:var(--brdgrey) 1px solid;border-top:none;}
.table-desa td{padding:15px!important;border:none;border-top:var(--brdgrey) 1px solid;margin:0!important;line-height:1.1!important;font-size:120%!important;}
.table1-desa{width:25%!important;}
.bgloader{position:absolute;left:0;top:0;right:0;bottom:0;background: linear-gradient(to top, var(--cgrey1), var(--cwhite), var(--cgrey1));}
.bgloader-svg svg {width: 20vh;height: 20vh;margin: 20px;display: inline-block;}
.icon-info{width:30px;height:30px;border-radius:5px;background:var(--color2);margin:0 5px 0 0;}
.icon-info svg{width:20px;height:auto;fill:var(--cwhite);line-height:1;}
.event-open h2, .event-open h3, .pelapor-data h2{font-size:100%;margin:0 0 0 35px;padding:0;line-height:1.1;font-weight:bold;}
.event-open h2{margin:0;color:var(--color1);}
.title-sikema{font-size:150%;padding:0;margin:0;}
.sikema-detail{position:relative;width:calc(50% - 20px);margin:20px 10px 0;}
.sikema-user{position:relative;width:calc(50% - 20px);margin:20px 10px 0;}
.sikema-area{margin:3px;}
.col-lampiran{position:relative;width:calc(25% - 10px);margin:10px 5px 0;background:var(--cgrey1);}
.pelapor-image{position:relative;width:25vh;}
.pelapor-data{position:relative;width:calc(100% - 27vh);margin:0 0 0 2vh;}
.list-sikema-left .pelapor-image{width:20vh;}
.list-sikema-left .pelapor-data{width:calc(100% - 22vh);}
.table-pelapor{margin:10px 0 0!important;}
.table-pelapor td{padding:5px 0!important;margin:0!important;line-height:1!important;font-size:100%!important;}
.jawaban{background:var(--cgrey1);padding:7px;}
.pelapor-data h2{font-size:120%;margin:10px 0 10px;}
.list-sikema-left{position:relative;width:calc(50% - 30px);margin:0 15px 0;}
.list-sikema-right{position:relative;width:calc(50% - 45px);margin:0 15px 0;padding:10px 0 0 15px;border-left:var(--brdgrey) 1px solid;}
.pertanyaan{min-width:300px!important;}

.temaopendk{position:fixed;left:0;top:0;right:0;bottom:0;z-index:99999999!important;background:var(--cgrey1);}
.sikema, .main-top {opacity: 0;visibility: hidden;transition: opacity 0.5s ease-in-out;}
.sikema.is-loaded, .main-top.is-loaded {opacity: 1;visibility: visible;}
.my-slider-container {opacity: 0;height:10vh;visibility: hidden;transition: opacity 0.5s ease-in-out;}
.my-slider-container.is-loaded {opacity: 1;visibility: visible;height:70vh;}
.filterdesa .form-control{width:60vh;}
</style>