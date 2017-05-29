<?php
include 'common/connectDB.php';
include 'common/header.php';
?>

<div class="bantao">
    <ul>
        <li><a href="#" style=" background:url(images/banner3.jpg) repeat-x scroll center top transparent;"></a></li>
    </ul>

</div>
<div class="midcenter">
    <div class="centerbox">
        <!---左边的内容---->
        <div class="leftside">
            <div class="hmiand"><p>产品信息<br/><span>products</span></p></div>
            <ul class="listmenu">
                <?php
                $html = "";

                //循环父级目录
                $sql_parent2 = "SELECT * FROM `v9_category` WHERE `parentId` = 12";
                $result_parent2 = mysqli_query($con, $sql_parent2);



                while ($row2 = mysqli_fetch_array($result_parent2)) {

                    $html.= "<li name=\"51\"><a href='products.php?catid=".$row2['catid']."'>".$row2['catname']."</a>";

                    //循环子级目录
                    $sql_children = "SELECT * FROM `v9_category` WHERE `parentId` =".$row2['catid'];
                    $result_parent_children = mysqli_query($con, $sql_children);

                    $rowcount1= mysqli_fetch_array(mysqli_query($con,"SELECT COUNT(*) AS C1 FROM `v9_category` WHERE `parentId` =".$row2['catid']))['C1'];
                    if($rowcount1>0){
                        $html.="<ul class='menbu'>";

                        while ($row = mysqli_fetch_array($result_parent_children)) {

                            $html.="<li class=\"on\"><a href='products.php?catid=".$row['catid']."'>".$row['catname']."</a></li>";

                        }

                        $html.="</li></ul>";
                    }
                }

                echo $html;

                ?>



            </ul>
            <div class="telephone">
                <p>资讯热线<br/><span>400-920-0816</span></p>
            </div>

        </div>
        <!---右边的内容---->
        <div class="mainright">
            <div class="aammk">产品详情</div>

            <?php

                    $sql_detail ="SELECT * FROM `v9_news` WHERE id=".$_GET['id'];

                    $result_detail= mysqli_query($con,$sql_detail);
                    $row_detail = mysqli_fetch_array($result_detail);

            //var_dump($row_detail);
            ?>
            <div class="ammwp">
                <div class="boxmm">
                    <div class="onemm">
                        <div class="llonemm"><img src="<?php echo $row_detail['thumb']; ?>" width="254" height="236"></div>
                        <div class="rronmrm">
                            <p class="styhu"><?php echo $row_detail['title']; ?> </p>
                            <p class="sydj">EC<br>
                                数显百/千分表</p>
                            <div class="btnes">
                                <input type="button" value="在线预订" class="btn1">
                                <input type="button" value="发送邮件" class="btn2">

                            </div>


                        </div>
                    </div>

                    <div class="twomm">
                        <ul class="twoulls" style="display: none;">
                            <li class="on"><a href="javascript:void(0);">特征</a>
                                <!--<div class="jiuay"><a href="#"><img src="images/tb22.jpg" width="7" height="4" /></a></div>-->
                            </li>

                            <li class=""><a href="javascript:void(0);">规格</a></li></ul>
                    </div>
                    <div class="body" style="min-height: 400px; display: block;">
                        <?php echo $row_detail['description']; ?>

                    </div>


                </div>



            </div>
        </div>

    </div>


</div>
<!--middle-end-->



<?php
include "common/footer.php";
mysqli_close($con);
?>
