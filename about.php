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
            <div class="hmiand"><p>公司介绍<br/><span>Company Profile</span></p></div>
            <ul class="listmenu">
                <?php
                    $sql_left_nav = "SELECT * FROM `v9_category` WHERE `parentId` = 1";
                    $result_left_nav = mysqli_query($con, $sql_left_nav);

                    while ($row = mysqli_fetch_array($result_left_nav)) {
                        echo "<li ><a href=\"about.php?catid=".$row['catid']."\">".$row['catname']."</a> </li>";
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
            $sql_content = "SELECT * FROM `v9_page` WHERE `catid` =".$_GET['catid'];
            $result_content = mysqli_query($con, $sql_content);
            $row_content = mysqli_fetch_array($result_content)


            ?>

            <div class="aammk"><?php
                echo $row_content['title'];
                ?></div>
            <div class="hubout">
                <?php
                     echo $row_content['content'];
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
