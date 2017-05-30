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
            <?php
            $catName = "公司新闻";
            $catid = $_GET['catid'];
            if($catid == 47){
                $catName = "行业新闻";
            }else{
                $catName = "公司新闻";
            }
            ?>

            <div class="aammk"><?php echo $catName; ?></div>
            <div class="hubout">
                <ul class="new_list">
                    <?php




                    if(isset($_GET["page"]))//判断所需要的参数是否存在，isset用来检测变量是否设置，返回true or false
                    {
                        $cur_page = $_GET["page"];//存在
                    }else{
                        $cur_page= 1;//存在
                    }
                    $numbersPerPage = $SiteConfig->perpageNum;//每页产品数
                    $startIndex = ($cur_page  -1) * $numbersPerPage;//页总数
                    $rowcount= mysqli_fetch_array(mysqli_query($con,"SELECT COUNT(*) AS C1 FROM `v9_news` WHERE `catid` =".$catid))['C1'];


                    $totalPageNum = ceil($rowcount / $numbersPerPage);//页总数

                    $sql_content = "SELECT * FROM `v9_news` WHERE `catid` =".$catid." LIMIT ".$startIndex.",".$numbersPerPage;
                    $result_content = mysqli_query($con, $sql_content);


                    while ($row_content = mysqli_fetch_array($result_content)){
                        echo " <li>
                        <div class=\"newlwft\"><img src=\"".$row_content['thumb']."\" width=\"183\" height=\"124\" /></div>
                        <div class=\"newzis\">
                            <p class=\"bitia\"><a href=\"news_details.php?id=".$row_content['id']."\">".$row_content['title']."</a></p>
                            <p class=\"date\">".date("Y-m-d ",$row_content['inputtime'])."</p>
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


                        <?php
                            $SiteConfig->pagination($cur_page,$totalPageNum,$catid,"news.php");

                        ?>

                    </div>

                </div>
    </div>
</div>
<!--middle-end-->


<?php
include "common/footer.php";
mysqli_close($con);
?>
