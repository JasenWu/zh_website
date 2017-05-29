<?php
include 'common/connectDB.php';
include 'common/header.php';
include 'common/Site.php';
$SiteConfig = new Site;//实例化配置

?>

<!--middle--->
<div class="bantao">
    <ul>
        <li><a href="#" style=" background:url(images/aboutus.jpg) repeat-x scroll center top transparent;"></a></li>
    </ul>

</div>

<div class="midcenter">
    <div class="centerbox">
        <!---左边的内容---->
        <div class="leftside">
            <div class="hmiand"><p>新闻动态<br/><span>news</span></p></div>
            <ul class="listmenu">
                <?php
                $sql_left_nav = "SELECT * FROM `v9_category` WHERE `parentId` = 9";
                $result_left_nav = mysqli_query($con, $sql_left_nav);

                while ($row = mysqli_fetch_array($result_left_nav)) {
                    echo "<li ><a href=\"news.php?catid=".$row['catid']."\">".$row['catname']."</a> </li>";
                }
                ?>
            </ul>
            <div class="telephone">
                <p>资讯热线<br/><span>400-920-0816</span></p>
            </div>

        </div>


        <!---左边的内容---->
        <div class="mainright">
            <div class="aammk">公司新闻</div>
            <div class="hubout">
                <ul class="new_list">
                    <?php
                    $sql_content = "SELECT * FROM `v9_news` WHERE `catid` =".$_GET['catid'];
                    $result_content = mysqli_query($con, $sql_content);


                    while ($row_content = mysqli_fetch_array($result_content)){
                        echo " <li>
                        <div class=\"newlwft\"><img src=\"".$row_content['thumb']."\" width=\"183\" height=\"124\" /></div>
                        <div class=\"newzis\">
                            <p class=\"bitia\"><a href=\"/news2_cid_140_id_722.html\">".$row_content['title']."</a></p>
                            <p class=\"date\">".$row_content['inputtime']."</p>
                            <p class=\"neirog\">
                                ".$row_content['description']."
                            </p>
                            <div class=\"hkans\"><a href=\"news_details.php?id=".$row_content['id']."\">查看详情</a></div>


                        </div>


                    </li>";
                    }


                    ?>






                </ul>
                <div class="page">
                    <div class="pageli">


                        <a href="#" >《</a>

                        <a href="/news_page_1.html?cid=140">1</a>

                        <a href="/news_page_2.html?cid=140">2</a>

                        <a href="#" >》</a>

                    </div>

                </div>
    </div>
</div>
<!--middle-end-->


<?php
include "common/footer.php";
mysqli_close($con);
?>
