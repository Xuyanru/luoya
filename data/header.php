<?php
	header("content-type:text/html;charset:utf-8");
?>
  <div id="nav">
        <div class="w1200">
            <div class="lf logo">
                <img src="images/logo.png" alt=""/>
            </div>
            <ul id="main_nav" class="lf">
                <li class="lf txtcenter">
                    <a href="index.html" >
                        <span>HOME</span><br>
                        罗亚首页
                    </a>
                </li>
                <li class="lf txtcenter">
                    <a href="">
                        <span>POYAL PHOTO</span><br>
                        罗亚摄影
                    </a>
                    <ul class="sub">
                        <li><a href="about.html">关于罗亚</a></li>
                        <li><a href="connect.html">联系我们</a></li>
                        <li><a href="concept.html">摄影理念</a></li>
                    </ul>
                </li>
                <li class="lf txtcenter">
                    <a href="">
                        <span>SHOW CASE</span><br>
                        作品赏析
                    </a>
                    <ul class="sub">
                        <li><a href="theme_wedding.html">主题婚纱</a></li>
                        <li><a href="youth.html">致青春</a></li>
                        <li><a href="baby.html">BABY</a></li>
                    </ul>
                </li>
                <li class="lf txtcenter">
                    <a href="#">
                        <span>PHOTOS</span><br>
                        精彩客照
                    </a>
                    <ul class="sub">
                        <li><a href="wedding_photos.html">婚纱</a></li>
                        <li><a href="photo_graph.html">写真</a></li>
                        <li><a href="parent.html">亲子妈咪照</a></li>
                    </ul>
                </li>
                <li class="lf txtcenter">
                    <a href="">
                        <span>NEWS</span><br>
                        动态资讯
                    </a>
                    <ul class="sub">
                        <li><a href="huodong.html">限时活动</a></li>
                        <li><a href="service_tips.html">服务小贴士</a></li>
                        <li><a href="">大众点评</a></li>
                    </ul>
                </li>
            </ul>
            <div class="lf search">
                <form action="">
                    <input class="lf" type="text"/>
                    <input type="button" value="搜索" class="lf"/>
                </form>
            </div>
        </div>
    </div>
    <!--广告大图轮播-->
    <div id="banner">
        <ul id="slider">
            <li><img src="uploads/image/20160901/1472707875.jpg" alt="#1"/></li>
            <li><img src="uploads/image/20160302/1456902053.jpg" alt="#2"/></li>
        </ul>
        <ul id="idx">
            <li class="lf active" id="1"></li>
            <li class="lf" id="2"></li>
        </ul>
    </div>