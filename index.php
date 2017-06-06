<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2017/5/21
 * Time: 下午9:13
 */

include 'common/connectDB.php';


//首页banner图片
$sql_banner = "SELECT * FROM `v9_picture` WHERE `catid` = 8";
$result_banner = mysqli_query($con, $sql_banner);

//产品分类标题
$sql_pro_flow = "SELECT * FROM `v9_category` WHERE `parentId` = 12";
$result_pro_flow = mysqli_query($con, $sql_pro_flow);

//新闻数据
$sql_news = "SELECT * FROM `v9_news` WHERE `catid` = 9";
$result_news = mysqli_query($con, $sql_news);


//关于我们
$sql_about = "SELECT * FROM `v9_page` WHERE `catid` = 2";
$result_about = mysqli_query($con, $sql_about);

    include 'common/header.php';
?>



        <!--middle--->
        <div class="banner">
            <ul>
                <li><a href="#" style=" background:url(images/banner2.jpg) repeat-x scroll center top transparent;"></a>
                </li>
            </ul>
            <div class="libanne">
                <div class="libans">
                    <div class="www51buycom">
                        <ul class="51buypic">
                            <?php
                            while ($row = mysqli_fetch_array($result_banner)) {


                                echo "<li><img src='" . $row['thumb'] . "'/></li>";
                            }
                            // 释放结果集
                            mysqli_free_result($result_banner);

                            ?>
                        </ul>
                        <!--                    <a class="prev" href="javascript:void(0)"></a>-->
                        <!--                    <a class="next" href="javascript:void(0)"></a>-->
                        <div class="num">
                            <ul></ul>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <div class="middle">
            <div class="canshoue">
                <div class="xinbox">
                    <div class="zuojia"><a href="#"><img id="left" src="images/tb15.png" width="15" height="28"/></a>
                    </div>
                    <div id="product">
                        <ul class="canlist">

                            <?php
                            while ($row2 = mysqli_fetch_array($result_pro_flow)) {
                                if ($row2['image']) {
                                    echo "<li>
                                <dl>
                                    <a href=products.php?id=" . $row2['catid'] . ">
                                        <dt><img src=" . $row2['image'] . " /></dt>
                                        <dd>" . $row2['catname'] . "</dd>
                                    </a>
                                </dl>
                            </li>";
                                }


                            }
                            // 释放结果集
                            mysqli_free_result($result_pro_flow);

                            ?>


                        </ul>
                    </div>
                    <div class="youjian"><a href="#"><img id="right" src="images/tb16.png" width="15" height="28"/></a>
                    </div>
                </div>
            </div>


            <div class="twomian">
                <div class="box">
                    <div class="leftnews">
                        <div class="bttitle">
                            <div class="btleft">产品中心 / <span>Products</span></div>

                            <?php
                            //产品中心
                            $sql_pro_center1 = "SELECT * FROM `v9_news` WHERE `id` = 6";
                            $result_pro_center1 = mysqli_query($con, $sql_pro_center1);
                            $row_pro_center1 = mysqli_fetch_array($result_pro_center1);


                            $sql_pro_center2 = "SELECT * FROM `v9_news` WHERE `id` = 7";
                            $result_pro_center2 = mysqli_query($con, $sql_pro_center2);
                            $row_pro_center2 = mysqli_fetch_array($result_pro_center2);

//


                            ?>

                        </div>

                        <div class="lfmtwo">
                            <div class="lfmme">
                                <div class="lfmmtu" style="margin-left:60px;">
                                    <img src="<?php echo $row_pro_center1['thumb']; ?>"
                                         style="width: 235px; height: 168px; margin-top:25px;"/></div>
                                <div class="lgmmzi" style="margin-right:0px;">
                                    <p class="styaa">
                                        <br/>
                                        <br/>
                                        <br/>
                                        <br/>
                                        <span style="font-size:14px;display:block;"><?php echo $row_pro_center1['keywords']; ?></span> <span
                                            style="font-size:12px;font-weight:normal;position:relative;margin-top:-7px;display:block;"><?php echo $row_pro_center1['title']; ?></span>
                                    </p>
                                    <p class="stykd" style="margin-top:8px;">
                                        <img height="17" src="images/tb6.png" width="17"/><a
                                            href="http://www.mitutoyo-sf.com.cn/product2_cid_66_id_524.html"
                                            style="color:#ff4e00;">查看详情</a></p>
                                </div>
                            </div>

                            <div class="rtmme">
                                <div class="rtmmss">
                                    <img src="<?php echo $row_pro_center2['thumb']; ?>"
                                         style="width: 170px; height: 169px;"/></div>
                                <p class="stygg">
                                    <span><?php echo $row_pro_center1['keywords']; ?></span><br/>
                                    <?php echo $row_pro_center1['title']; ?></p>
                                <p class="stygfg">
                                    <img height="17" src="images/tb6.png" width="17"/><a
                                        href="http://www.mitutoyo-sf.com.cn/product2_cid_87_id_515.html">查看详情</a></p>
                            </div>

                        </div>

                        <div class="lemfsan">

                            <div class="oollm">
                                <div class="oolltu">
                                    <img src="/files/images/201506/111032271292.jpg"
                                         style="width: 122px; height: 169px;"/></div>
                                <div class="oollzi" style="margin-right:25px;">
                                    <p class="stygg">
                                        <span>HV－112/113</span><br/>
                                        维氏硬度试验机</p>
                                    <p class="stygfg">
                                        <img height="17" src="images/tb6.png" width="17"/><a
                                            href="http://www.mitutoyo-sf.com.cn/product2_cid_104_id_504.html">查看详情</a>
                                    </p>
                                </div>
                            </div>

                            <div class="oollm">
                                <div class="oolltu">
                                    <img src="/files/images/201506/111030233480.jpg"
                                         style="width: 122px; height: 169px;"/></div>
                                <div class="oollzi" style="margin-right:25px;">
                                    <p class="stygg">
                                        <span>CRYSTA-Apex S700系列</span><br/>
                                        CNC三坐标测量机</p>
                                    <p class="stygfg">
                                        <img height="17" src="images/tb6.png" width="17"/><a
                                            href="http://www.mitutoyo-sf.com.cn/product2_cid_101_id_565.html">查看详情</a>
                                    </p>
                                </div>
                            </div>


                        </div>

                    </div>
                    <div class="rightnews">
                        <div class="bttitle">
                            <div class="btleft">新闻动态 <span> / News</span></div>
                        </div>
                        <ul class="listnews">

                            <?php
                            while ($row = mysqli_fetch_array($result_news)) {
                                $url = $row['thumb'];

                                echo "<li>
                                        <div class=\"aalsd\">
                                        <a href=news.php?id=" . $row['id'] . ">
                                        <img src='" . $row['thumb'] . "' width=\"69\" height=\"49\" />
                                        </a>
                                        </div>
                                        <div class=\"kibbs\">
                                        <span>
                                        <a href=news.php?id=" . $row['id'] . ">"
                                    . $row['title'] .
                                    "</a>
                                        </span>
                                        <br />"
                                    . $row['inputtime'] .
                                    "</div>
                                        </li>";
                            }
                            // 释放结果集
                            mysqli_free_result($result_news);

                            ?>


                        </ul>


                        <div class="bttitle">
                            <div class="btleft"> 关于我们 <span> / About us  </span></div>
                        </div>
                        <ul class="listnews">
                            <li style="border-bottom:none;">
                                <div class="ertud"><img src="images/img8.jpg" width="98" height="70"/></div>
                                <div class="huys">

                                    <?php
                                    $row = mysqli_fetch_array($result_about);
                                    $str = $row['content'];

                                    $length =200;
                                    if(strlen($str)>$length){
                                        echo (mb_substr($str,0,$length,"utf-8")."...");

                                    }else{
                                        echo (mb_substr($str,0,$length,"utf-8"));

                                    }


                                    // 释放结果集
                                    mysqli_free_result($result_about);


                                    ?>
                                </div>
                            </li>
                        </ul>
                        <div class="bttitle">
                            <div class="btleft"> 联系我们 <span>  / Contact us</span></div>
                        </div>
                        <ul class="conlist">
                            <li><span><img src="images/tb8.png"/></span> 地址：黄浦区中山南路969号谷泰滨江大厦1603室</li>
                            <li><span><img src="images/tb9.png"/></span>电话：021-63238808、63230098、400-920-0816</li>
                            <li><span><img src="images/tb10.png"/></span>邮箱：wangjunhao@mitutoyo-sf.com</li>

                        </ul>


                    </div>

                </div>

            </div>


        </div>
        <!--middle-end-->
<?php
include "common/footer.php";
mysqli_close($con);
?>


