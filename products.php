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

                $sql_parent2 = "SELECT * FROM `v9_category` WHERE `parentId` = 12";
                $result_parent2 = mysqli_query($con, $sql_parent2);
                while ($row2 = mysqli_fetch_array($result_parent2)) {



                echo "<li name=\"51\"><a href='products.php?catid=".$row2['catid']."'>".$row2['catname']."</a></li>";



                }


                ?>



            </ul>
            <div class="telephone">
                <p>资讯热线<br/><span>400-920-0816</span></p>
            </div>

        </div>
        <!---右边的内容---->
        <div class="mainright">
            <div class="aammk">产品信息</div>
            <div class="ammwp">

                <ul class="canping">

                    <?php

                    $catid = $_GET["catid"];
                    $catid__new = "";
                    if($catid == '42'){
                        $catid__new = 43;
                    }


                    //分页功能
                    $rowcount= mysqli_fetch_array(mysqli_query($con,"SELECT COUNT(*) AS C FROM `v9_news` WHERE `catid` =".$catid__new))['C'];//数据总数量




                    if(is_array($_GET)&&count($_GET)>0)//判断是否有Get参数
                    {
                        if(isset($_GET["page"]))//判断所需要的参数是否存在，isset用来检测变量是否设置，返回true or false
                        {
                            $cur_page = $_GET["page"];//存在
                        }else{
                            $cur_page= 1;//存在
                        }
                    }

                    $numbersPerPage = 2;//每页产品数

                    $totalPageNum = $rowcount / $numbersPerPage;//页总数
                    $startIndex = ($cur_page  -1) * $numbersPerPage;//页总数

                    printf("总共返回行数据:".$rowcount."<br/>");

                    printf("当前页:".$cur_page."<br/>");
                    printf("每页产品数:".$numbersPerPage."<br/>");
                    printf("页总数:".$totalPageNum."<br/>");
                    printf("起始index:".$startIndex."<br/>");

                    //分页结束

                    $sql_list = "SELECT * FROM `v9_news` WHERE `catid` = ".$catid__new." LIMIT ".$startIndex.",".$numbersPerPage;

                    $result_list = mysqli_query($con, $sql_list);

                    while ($row = mysqli_fetch_array($result_list)) {



                        echo " <li>
                                <dl>
                                    <dt><a href=\"/product2_cid_99_id_650.html\">".$row['title']." </a><br/>
                                        <a href=\"/product2_cid_99_id_650.html\"></a>".$row['keywords']."</dt>
                                    <dd class=\"tu\"><a href=\"/product2_cid_99_id_650.html\"><img src=".$row['thumb']."
                                                                                               width=\"169\" height=\"121\"/></a>
                                    </dd>
                                    <dd class=\"zi\">".$row['description']."</dd>
                                    <dd class=\"zzi\"><a href=\"/shoufeng/台架.pdf#page=8\" target=\"_blank\">详细参数（PDF)</a></dd>
        
                                </dl>
                            </li>";



                    }


                    ?>






                </ul>

                <?php


                ?>

                <div class="page">
                    <div class="pageli">


                        <a href="products.php?catid=42&page=">《</a>

                        <?php

                            for ($i=1; $i<=$totalPageNum; $i++)
                            {
                                echo "<a href='products.php?catid=42&page=".$i."' >".$i."</a>";
                            }

                        ?>

                        <a href="products.php?catid=42&page=">》</a>

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
