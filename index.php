<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2017/5/21
 * Time: 下午9:13
 */

include 'connectDB.php';

$path = "/phpcms_v9_UTF8/install_package/uploadfile/";
//首页banner图片
$sql_banner = "SELECT * FROM `v9_picture` WHERE `catid` = 8";
$result_banner = mysqli_query($con, $sql_banner);

//首页产品流动图片
$sql_pro_flow = "SELECT * FROM `v9_category` WHERE `parentId` = 12";
$result_pro_flow = mysqli_query($con, $sql_pro_flow);

//新闻数据
$sql_news = "SELECT * FROM `v9_news` WHERE `catid` = 9";
$result_news = mysqli_query($con, $sql_news);

//关于我们
$sql_about = "SELECT * FROM `v9_page` WHERE `catid` = 2";
$result_about = mysqli_query($con, $sql_about);
?>
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
                        <li><a href="/index.html">首页</a></li>
                        <li><a href="/about.html">关于我们</a>
                            <ul class="showvox">
                                <li><a href="/about.html">公司简介</a></li>
                                <li><a href="/culture.html">企业文化</a></li>
                                <li><a href="/honor.html">资质荣誉</a></li>
                            </ul>

                        </li>
                        <li><a href="/news.html">新闻动态</a>
                            <ul class="showvox">
                                <li><a href="/news_cid_140.html">公司新闻</a></li>
                                <li><a href="/news_cid_141.html">行业新闻</a></li>
                                <!--<li><a href="#">行业新闻</a></li>-->
                            </ul>

                        </li>
                        <li><a href="/product.html">产品信息</a>
                            <div class="wrapshow">
                                <div class="showtime">
                                    <ul class="showlist">
                                        <li>
                                            <ul class="showll">
                                                <li><span></span><a href="/product_cid_51.html">千分尺</a>
                                                    <ul class="neishow">
                                                        <li><a href="/product_cid_67.html"><span class="pra"><img
                                                                        src="images/tb18.png"/></span>标准外径千分尺</a></li>
                                                        <li><a href="/product_cid_68.html"><span class="pra"><img
                                                                        src="images/tb18.png"/></span>专用千分尺</a></li>
                                                        <li><a href="/product_cid_69.html"><span class="pra"><img
                                                                        src="images/tb18.png"/></span>选件</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class="showll">
                                                <li><span></span><a href="/product_cid_52.html">微分头</a>
                                                    <ul class="neishow">

                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class="showll">
                                                <li><span></span><a href="/product_cid_53.html">卡尺</a>
                                                    <ul class="neishow">
                                                        <li><a href="/product_cid_71.html"><span class="pra"><img
                                                                        src="images/tb18.png"/></span>专用卡尺</a></li>
                                                        <li><a href="/product_cid_97.html"><span class="pra"><img
                                                                        src="images/tb18.png"/></span>大型卡尺</a></li>
                                                        <li><a href="/product_cid_98.html"><span class="pra"><img
                                                                        src="images/tb18.png"/></span>标准卡尺</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class="showll">
                                                <li><span></span><a href="/product_cid_54.html">高度尺</a>
                                                    <ul class="neishow">

                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class="showll">
                                                <li><span></span><a href="/product_cid_55.html">深度尺</a>
                                                    <ul class="neishow">

                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class="showll">
                                                <li><span></span><a href="/product_cid_56.html">内径千分尺</a>
                                                    <ul class="neishow">

                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class="showll">
                                                <li><span></span><a href="/product_cid_57.html">量块</a>
                                                    <ul class="neishow">

                                                    </ul>
                                                </li>
                                            </ul>


                                        </li>
                                        <li>
                                            <ul class="showll">
                                                <li><span></span><a href="/product_cid_58.html">校准仪器</a>
                                                    <ul class="neishow">

                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class="showll">
                                                <li><span></span><a href="/product_cid_59.html">基准器</a>
                                                    <ul class="neishow">

                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class="showll">
                                                <li><span></span><a href="/product_cid_60.html">百/千分表</a>
                                                    <ul class="neishow">
                                                        <li><a href="/product_cid_78.html"><span class="pra"><img
                                                                        src="images/tb18.png"/></span>数显百/千分表</a></li>
                                                        <li><a href="/product_cid_99.html"><span class="pra"><img
                                                                        src="images/tb18.png"/></span>百/千分表应用附件/支架</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class="showll">
                                                <li><span></span><a href="/product_cid_61.html">杠杆表</a>
                                                    <ul class="neishow">

                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class="showll">
                                                <li><span></span><a href="/product_cid_62.html">精密传感器</a>
                                                    <ul class="neishow">
                                                        <li><a href="/product_cid_80.html"><span class="pra"><img
                                                                        src="images/tb18.png"/></span>非接触式传感器</a></li>
                                                        <li><a href="/product_cid_100.html"><span class="pra"><img
                                                                        src="images/tb18.png"/></span>接触式传感器</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class="showll">
                                                <li><span></span><a href="/product_cid_63.html">光栅尺</a>
                                                    <ul class="neishow">

                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class="showll">
                                                <li><span></span><a href="/product_cid_64.html">三坐标测量仪器</a>
                                                    <ul class="neishow">
                                                        <li><a href="/product_cid_82.html"><span class="pra"><img
                                                                        src="images/tb18.png"/></span>手动三坐标测量机</a></li>
                                                        <li><a href="/product_cid_101.html"><span class="pra"><img
                                                                        src="images/tb18.png"/></span>CNC三坐标测量机</a></li>
                                                    </ul>
                                                </li>
                                            </ul>


                                        </li>
                                        <li>
                                            <ul class="showll">
                                                <li><span></span><a href="/product_cid_65.html">表面粗糙度测量机</a>
                                                    <ul class="neishow">

                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class="showll">
                                                <li><span></span><a href="/product_cid_66.html">轮廓形状测量机</a>
                                                    <ul class="neishow">

                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class="showll">
                                                <li><span></span><a href="/product_cid_87.html">圆度测量机</a>
                                                    <ul class="neishow">

                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class="showll">
                                                <li><span></span><a href="/product_cid_88.html">硬度试验机、材料试验机</a>
                                                    <ul class="neishow">
                                                        <li><a href="/product_cid_102.html"><span class="pra"><img
                                                                        src="images/tb18.png"/></span>其他硬度试验机</a></li>
                                                        <li><a href="/product_cid_103.html"><span class="pra"><img
                                                                        src="images/tb18.png"/></span>洛氏</a></li>
                                                        <li><a href="/product_cid_104.html"><span class="pra"><img
                                                                        src="images/tb18.png"/></span>维氏</a></li>
                                                        <li><a href="/product_cid_105.html"><span class="pra"><img
                                                                        src="images/tb18.png"/></span>显微维氏</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class="showll">
                                                <li><span></span><a href="/product_cid_89.html">视像测量机</a>
                                                    <ul class="neishow">
                                                        <li><a href="/product_cid_106.html"><span class="pra"><img
                                                                        src="images/tb18.png"/></span>手动视像测量机</a></li>
                                                        <li><a href="/product_cid_107.html"><span class="pra"><img
                                                                        src="images/tb18.png"/></span>CNC视像测量机</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class="showll">
                                                <li><span></span><a href="/product_cid_90.html">显微镜</a>
                                                    <ul class="neishow">

                                                    </ul>
                                                </li>
                                            </ul>


                                        </li>
                                        <li style="margin-right:0;">
                                            <ul class="showll">
                                                <li><span></span><a href="/product_cid_91.html">投影仪</a>
                                                    <ul class="neishow">

                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class="showll">
                                                <li><span></span><a href="/product_cid_92.html">物镜</a>
                                                    <ul class="neishow">

                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class="showll">
                                                <li><span></span><a href="/product_cid_93.html">测量系统数据管理</a>
                                                    <ul class="neishow">
                                                        <li><a href="/product_cid_108.html"><span class="pra"><img
                                                                        src="images/tb18.png"/></span>统计演算印刷等</a></li>
                                                        <li><a href="/product_cid_109.html"><span class="pra"><img
                                                                        src="images/tb18.png"/></span>测量数据输入</a></li>
                                                        <li><a href="/product_cid_110.html"><span class="pra"><img
                                                                        src="images/tb18.png"/></span>品质管理软件</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class="showll">
                                                <li><span></span><a href="/product_cid_111.html">尼康3D测量系统</a>
                                                    <ul class="neishow">
                                                        <li><a href="/product_cid_112.html"><span class="pra"><img
                                                                        src="images/tb18.png"/></span>工业CT</a></li>
                                                        <li><a href="/product_cid_113.html"><span class="pra"><img
                                                                        src="images/tb18.png"/></span>三坐标测量机</a></li>
                                                        <li><a href="/product_cid_114.html"><span class="pra"><img
                                                                        src="images/tb18.png"/></span>激光/数码扫描测头</a></li>
                                                        <li><a href="/product_cid_115.html"><span class="pra"><img
                                                                        src="images/tb18.png"/></span>关节臂</a></li>
                                                    </ul>
                                                </li>
                                            </ul>


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
                                <!--<a href="#"><img src="images/tb1.png" width="16" height="16" /></a>--></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

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


                                echo "<li>
                                <dl>
                                    <a href=products.php?id=".$row2['catid'].">
                                        <dt><img src=".$row2['image']." /></dt>
                                        <dd>".$row2['catname']."</dd>
                                    </a>
                                </dl>
                            </li>";
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

                        </div>

                        <div class="lfmtwo">
                            <div class="lfmme">
                                <div class="lfmmtu" style="margin-left:60px;">
                                    <img src="/files/images/201506/111059182230.jpg"
                                         style="width: 235px; height: 168px; margin-top:25px;"/></div>
                                <div class="lgmmzi" style="margin-right:0px;">
                                    <p class="styaa">
                                        <br/>
                                        <br/>
                                        <br/>
                                        <br/>
                                        <span style="font-size:14px;display:block;">CV-3200S4</span> <span
                                            style="font-size:12px;font-weight:normal;position:relative;margin-top:-7px;display:block;">轮廓形状测量机</span>
                                    </p>
                                    <p class="stykd" style="margin-top:8px;">
                                        <img height="17" src="images/tb6.png" width="17"/><a
                                            href="http://www.mitutoyo-sf.com.cn/product2_cid_66_id_524.html"
                                            style="color:#ff4e00;">查看详情</a></p>
                                </div>
                            </div>

                            <div class="rtmme">
                                <div class="rtmmss">
                                    <img src="/files/images/201506/111017151761.jpg"
                                         style="width: 170px; height: 169px;"/></div>
                                <p class="stygg">
                                    <span>RA-2200AS/AH</span><br/>
                                    圆度&middot;圆柱度测量仪</p>
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
                                        <a href=news.php?id=". $row['id'] .">
                                        <img src='" . $row['thumb'] . "' width=\"69\" height=\"49\" />
                                        </a>
                                        </div>
                                        <div class=\"kibbs\">
                                        <span>
                                        <a href=news.php?id=". $row['id'] .">"
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
                                    $row = mysqli_fetch_array( $result_about);
                                    $str = $row['content'];
                                    //$str = "hellow world";
                                   echo $str;

                                    //$str='脚本之家：http://www.jb51.net';
                                    //echo mb_substr($str,0,40,'utf-8');//截取头5个字，假定此代码所在php文件的编码为utf-8

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
        <!--footer--->
        <div class="footer">
            <div class="box">
                <div class="fotleft">
                    <div class="link"><a href="/about.html">关于我们 </a><span>|</span><a
                            href="/contact.html">联系我们 </a><span>|</span><a
                            href="/recruiting.html">人才招聘 </a><span>|</span><a href="#">法律声明 </a></div>
                    <div class="copright">©上海首丰精密仪器有限公司版权所有 沪ICP备11030209号<a href="http://www.smallview.cn/">Design by
                            smallview</a><span><SCRIPT LANGUAGE="JavaScript">
document.writeln("<a href='https://www.sgs.gov.cn/lz/licenseLink.do?method=licenceView&entyId=1atvsvjyyrcsqsd0wx5atnhv8fun3kwg7dlx203t71j476s55l'><img src='images/tb7.png' border=0></a>")</SCRIPT>上海工商</span>
                    </div>
                </div>
                <div class="weixin">
                    <div class="weilink">

                    </div>
                    <div class="weikin">
                        <div class="jutu"><img src="images/ewe.png" width="106" height="106"/></div>
                        <p>扫一扫，关注微信</p>
                    </div>


                </div>
            </div>
        </div>
        <!--<div class="footer">
          <div class="box">
             <div class="fotleft">
               <div class="link"><a href="#">关于我们 </a><span>|</span><a href="#">联系我们 </a><span>|</span><a href="#">人才招聘      </a><span>|</span><a href="#">法律声明 </a></div>
               <div class="copright">©上海首丰精密仪器有限公司版权所有 沪ICP备11030209号<a href="#">design by smallview</a><span><img src="images/tb7.png" width="26" height="28" />上海工商</span></div>
             </div>
             <div class="weixin">
               <div class="weilink">
                 <p>关注我们</p>
                 <div class="linkwe">
                   <a href="#"><img src="images/tb11.png" width="30" height="30" /></a>
                   <a href="#"><img src="images/tb12.png" width="30" height="30" /></a>
                   <a href="#"><img src="images/tb13.png" width="30" height="30" /></a>
                   <a href="#"><img src="images/tb14.png" width="30" height="30" /></a>

                  </div>
                </div>
        <div class="weikin">
                  <div class="jutu"><img src="images/ewe.png" width="106" height="106" /></div>
                  <p>扫一扫，关注微信</p>
               </div>


            </div>
          </div>
        </div>-->

    </div>


    </body>
    </html>

<?php
mysqli_close($con);
?>