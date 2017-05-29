<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页-上海首丰精密仪器有限公司</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="stylesheet" href="css/public.css">
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="css/lrtk.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery.superslide.2.1.1.js"></script>
    <script src="js/jcarousellite.min.js"></script>
    <script src="js/index.js"></script>
</head>
<body>
<div class="wrap">
    <div class="QQbox ">
        <li><a href="http://wpa.b.qq.com/cgi/wpa.php?ln=1&key=XzkzODAxMDAyMF8yODMwNTdfNDAwOTIwMDgxNl8yXw
"><img src="images/aa.jpg"/></a></li>
        <li><a href="#"><img src="images/aa2.jpg"/></a>
            <div class="jasdgv">
                    <span
                        style="display:block;text-align:center;font-weight:bold;color:#db972b;margin-top:8px;">电话</span>
                <span style="display:block;text-align:center;font-weight:bold;color:#db972b;">021-63238808</span>
                <span style="display:block;text-align:center;font-weight:bold;color:#db972b;">021-63230098</span>
                <span style="display:block;text-align:center;font-weight:bold;color:#db972b;">400-920-0816</span>
            </div>

        </li>
        <li><a href="#"><img src="images/aa3.jpg"/></a>
            <div class="asuyasg">
                <img width="90" src="images/ewe.png"/>
            </div>

        </li>
        <li style="margin-top:0px;"><a href="#"><img src="images/aa4.jpg"/></a></li>

    </div>

    <!-----top----->
    <div class="top"><a href="#"><img src="images/top.png" width="30" height="30"/></a></div>
    <!-----top----->
<div class="header">
    <div class="box">

        <div class="logo"><a href="/index.html" style="float:left;"><img src="images/logo.png" width="573"
                                                                         height="42"/></a>
            <a href="http://www.mitutoyo.com.cn/products/index.html#page=1" target="_blank"
               style="float:right;"><img src="images/LOGO.jpg"/></a></div>
        <div class="nav">
            <ul class="navlist">
                <?php
                    function getPath(){
                        $url='http://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];
                        return  dirname($url);
                    }

                ?>

                <li><a href="<?php echo getPath()."/index.php"; ?>">首页</a></li>
                <li><a href="<?php echo getPath()."/about.php"; ?>">关于我们</a>
                    <ul class="showvox">


                        <?php
                        //产品分类标题
                        $sql_list_aboutus = "SELECT * FROM `v9_category` WHERE `parentId` = 1";
                        $result_list_aboutus = mysqli_query($con, $sql_list_aboutus);

                        while ($row2 = mysqli_fetch_array($result_list_aboutus)) {

                            echo "<li><a href='products?catid=".$row2['catid']."'>".$row2['catname']."</a></li>";

                        }
                        ?>


                    </ul>

                </li>
                <li><a href="<?php echo getPath()."/news.php"; ?>">新闻动态</a>
                    <ul class="showvox">
                        <li><a href="/news_cid_140.html">公司新闻</a></li>
                        <li><a href="/news_cid_141.html">行业新闻</a></li>
                        <!--<li><a href="#">行业新闻</a></li>-->
                    </ul>

                </li>
                <li><a href="<?php echo getPath()."/products.php"; ?>">产品信息</a>
                    <div class="wrapshow"  >
                        <div class="showtime">
                            <ul class="showlist">
                                <li>
                                    <?php
                                    $sql_parent1 = "SELECT * FROM `v9_category` WHERE `catid` = 13 OR `catid` = 14 OR `catid` = 15 OR `catid` = 18 OR `catid` = 19  OR `catid` = 22";
                                    $result_parent1 = mysqli_query($con, $sql_parent1);
                                    while ($row2 = mysqli_fetch_array($result_parent1)) {

                                        $sql_pro_child = "SELECT * FROM `v9_category` WHERE `parentId` =".$row2['catid'];
                                        $result_pro_child = mysqli_query($con, $sql_pro_child);
                                        $html = "";
                                        while ($row3 = mysqli_fetch_array($result_pro_child)) {
                                            $html .= "<li>
                                                                                        <a href='products.php?catid=".$row3['catid']."'>
                                                                                                <span class=\"pra\">
                                                                                                    <img src=\"images/tb18.png\"/>
                                                                                                </span>".$row3['catname']."</a>
                                                                            </li>";

                                        }



                                        echo "<ul class=\"showll\">
                                                                            <li><span></span><a href=products.php?catid=" . $row2['catid'] . ">" . $row2['catname'] . "</a>
                                                                            <ul class=\"neishow\">
                                                                            ".$html."
                                                                                
                
                                                                               
                                                                            </ul>
                                                                            </li>
                                                                        </ul>";



                                    }


                                    ?>





                                </li>


                                <li>
                                    <?php
                                    $sql_parent2 = "SELECT * FROM `v9_category` WHERE `catid` = 23 OR `catid` = 24 OR `catid` = 25 OR `catid` = 26 OR `catid` = 27  OR `catid` = 28 OR `catid` = 29";
                                    $result_parent2 = mysqli_query($con, $sql_parent2);
                                    while ($row2 = mysqli_fetch_array($result_parent2)) {

                                        $sql_pro_child = "SELECT * FROM `v9_category` WHERE `parentId` =".$row2['catid'];
                                        $result_pro_child = mysqli_query($con, $sql_pro_child);
                                        $html = "";
                                        while ($row3 = mysqli_fetch_array($result_pro_child)) {
                                            $html .= "<li>
                                                                                        <a href='products.php?catid=".$row3['catid']."'>
                                                                                                <span class=\"pra\">
                                                                                                    <img src=\"images/tb18.png\"/>
                                                                                                </span>".$row3['catname']."</a>
                                                                            </li>";

                                        }



                                        echo "<ul class=\"showll\">
                                                                            <li><span></span><a href=products.php?catid=" . $row2['catid'] . ">" . $row2['catname'] . "</a>
                                                                            <ul class=\"neishow\">
                                                                            ".$html."
                                                                                
                
                                                                               
                                                                            </ul>
                                                                            </li>
                                                                        </ul>";



                                    }


                                    ?>





                                </li>

                                <li>
                                    <?php
                                    $sql_parent3 = "SELECT * FROM `v9_category` WHERE `catid` = 30 OR `catid` = 31 OR `catid` = 32 OR `catid` = 33 OR `catid` = 34  OR `catid` = 35 OR `catid` = 29 OR `catid` = 38 OR `catid` = 39 OR `catid` = 40";
                                    $result_parent3 = mysqli_query($con, $sql_parent3);
                                    while ($row2 = mysqli_fetch_array($result_parent3)) {

                                        $sql_pro_child = "SELECT * FROM `v9_category` WHERE `parentId` =".$row2['catid'];
                                        $result_pro_child = mysqli_query($con, $sql_pro_child);
                                        $html = "";
                                        while ($row3 = mysqli_fetch_array($result_pro_child)) {
                                            $html .= "<li>
                                                                                        <a href='products.php?catid=".$row3['catid']."'>
                                                                                                <span class=\"pra\">
                                                                                                    <img src=\"images/tb18.png\"/>
                                                                                                </span>".$row3['catname']."</a>
                                                                            </li>";

                                        }



                                        echo "<ul class=\"showll\">
                                                                            <li><span></span><a href='products.php?catid=" . $row2['catid'] . "'>" . $row2['catname'] . "</a>
                                                                            <ul class=\"neishow\">
                                                                            ".$html."
                                                                                
                
                                                                               
                                                                            </ul>
                                                                            </li>
                                                                        </ul>";



                                    }


                                    ?>





                                </li>

                                <li>
                                    <?php
                                    $sql_parent3 = "SELECT * FROM `v9_category` WHERE `catid` = 30 OR `catid` = 31 OR `catid` = 32 OR `catid` = 33 OR `catid` = 34  OR `catid` = 35 OR `catid` = 29";
                                    $result_parent3 = mysqli_query($con, $sql_parent3);
                                    while ($row2 = mysqli_fetch_array($result_parent3)) {

                                        $sql_pro_child = "SELECT * FROM `v9_category` WHERE `parentId` =".$row2['catid'];
                                        $result_pro_child = mysqli_query($con, $sql_pro_child);
                                        $html = "";
                                        while ($row3 = mysqli_fetch_array($result_pro_child)) {
                                            $html .= "<li>
                                                                                        <a href=\"products.php\">
                                                                                                <span class=\"pra\">
                                                                                                    <img src=\"images/tb18.png\"/>
                                                                                                </span>".$row3['catname']."</a>
                                                                            </li>";

                                        }



                                        echo "<ul class=\"showll\">
                                                                            <li><span></span><a href=products.php?catid=" . $row2['catid'] . ">" . $row2['catname'] . "</a>
                                                                            <ul class=\"neishow\">
                                                                            ".$html."
                                                                                
                
                                                                               
                                                                            </ul>
                                                                            </li>
                                                                        </ul>";



                                    }


                                    ?>





                                </li>


                            </ul>


                        </div>
                    </div>
                </li>
                <li><a href="/sense.html">仪器常识</a></li>
                <li><a href="/service.html">服务维修</a>
                    <ul class="showvox">
                        <li><a href="/service.html">服务指南</a></li>
                        <li><a href="/service1.html">关于支持咨询</a></li>
                    </ul>

                </li>
                <li><a href="/recruiting.html">招贤纳士</a>
                    <ul class="showvox">
                        <li><a href="/recruiting.html">人才理念</a></li>
                        <li><a href="/recruiting1_cid_3.html">招聘职位 </a></li>
                    </ul>
                </li>
                <li style="margin-right:0;"><a href="/contact.html">联系我们</a>
                    <ul class="showvox">
                        <li><a href="/contact.html">联系我们</a></li>
                        <li><a href="/consulting.html">产品咨询</a></li>
                    </ul>
                </li>
            </ul>
            <form action="/product.html" method="get" id="form">
                <div class="soso">
                    <input name="key" type="text" class="sotxt"/>
                    <div class="soxx"><input type="submit" value=""
                                             style="background:url(images/tb1.png);width:16px;height:16px;"/>

                </div>
            </form>
        </div>
    </div>
</div>