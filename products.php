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
                    $sql_list = "SELECT * FROM `v9_category` WHERE `parentId` =".$catid;

                    $result_list = mysqli_query($con, $sql_list);
                    while ($row = mysqli_fetch_array($result_list)) {



                        echo " <li>
                                <dl>
                                    <dt><a href=\"/product2_cid_99_id_650.html\">".$row['catname']." </a><br/>
                                        <a href=\"/product2_cid_99_id_650.html\"></a></dt>
                                    <dd class=\"tu\"><a href=\"/product2_cid_99_id_650.html\"><img src=".$row['image']."
                                                                                               width=\"169\" height=\"121\"/></a>
                                    </dd>
                                    <dd class=\"zi\">适合圆柱型工件的固定</dd>
                                    <dd class=\"zzi\"><a href=\"/shoufeng/台架.pdf#page=8\" target=\"_blank\">详细参数（PDF)</a></dd>
        
                                </dl>
                            </li>";



                    }


                    ?>






                </ul>

                <div class="page">
                    <div class="pageli">


                        <a href="#">《</a>

                        <a href="/product_page_1.html?cid=60">1</a>

                        <a href="/product_page_2.html?cid=60">2</a>

                        <a href="/product_page_3.html?cid=60">3</a>

                        <a href="/product_page_4.html?cid=60">4</a>

                        <a href="/product_page_2.html?cid=60">》</a>

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
