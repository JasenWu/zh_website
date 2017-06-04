<?php
include 'common/connectDB.php';
include 'common/header.php';
include 'common/Site.php';
$SiteConfig = new Site;//实例化配置

if(isset($_POST["key"])){
    $key = $_POST["key"];
    $search_list_sql ="SELECT * FROM `v9_category` WHERE `parentid` = 12 AND `catname` LIKE  '".$key."'";

    $search_list_result = mysqli_query($con,$search_list_sql);
    //var_dump($search_list_result);
//    while ($row = mysqli_fetch_array($search_list_result)) {
//
//        var_dump($row);
//    }
}


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
            <div class="aammk">产品信息</div>
            <div class="ammwp">

                <ul class="canping">

                    <?php
                    if(isset($_GET["catid"])){
                        $catid = $_GET["catid"];
                    }else{
                        $catid = 15;
                    }


                    $sql_category = "SELECT * FROM `v9_category` WHERE `catid` =".$catid;
                    $sql_result_category= mysqli_query($con,$sql_category);
                    $row_category = mysqli_fetch_array($sql_result_category);

                    $str_childids = $row_category['arrchildid'];

                    $arrchildidsArr = explode(',',$str_childids);//数组



                    if(isset($_GET["page"]))//判断所需要的参数是否存在，isset用来检测变量是否设置，返回true or false
                    {
                        $cur_page = $_GET["page"];//存在
                    }else{
                        $cur_page= 1;//存在
                    }

                    $numbersPerPage = $SiteConfig->perpageNum;//每页产品数


                    $startIndex = ($cur_page  -1) * $numbersPerPage;//页总数



                    if (count($arrchildidsArr)>1)//说明有子元素在
                    {

                        $Limit = "";
                        for($x=0;$x<count($arrchildidsArr);$x++)
                        {
                            $Limit.= (" OR catid =" .$arrchildidsArr[$x]);

                        }
                        $rowcount= mysqli_fetch_array(mysqli_query($con,"SELECT COUNT(*) AS C FROM `v9_news` WHERE `catid` =".$catid ." ".$Limit))['C'];//数据总数量
                        $sql_list = "SELECT * FROM `v9_news` WHERE `catid` = ".$catid." ".$Limit." LIMIT ".$startIndex.",".$numbersPerPage;



                    }
                    else
                    {//说明没有子元素

                        $rowcount= mysqli_fetch_array(mysqli_query($con,"SELECT COUNT(*) AS C FROM `v9_news` WHERE `catid` =".$catid))['C'];//数据总数量
                        $sql_list = "SELECT * FROM `v9_news` WHERE `catid` = ".$catid."  LIMIT ".$startIndex.",".$numbersPerPage;



                    }

                    $totalPageNum = ceil($rowcount / $numbersPerPage);//页总数






                    //分页结束






                    $result_list = mysqli_query($con, $sql_list);


                    while ($row = mysqli_fetch_array($result_list)) {
                        $sql_attachment = "SELECT * FROM `v9_download` RIGHT JOIN `v9_download_data` ON `v9_download`.id=`v9_download_data`.id WHERE `v9_download`.keywords =".$row['id'];
                        $result_attachment = mysqli_query($con, $sql_attachment);
                        $result_attachment_row = mysqli_fetch_array($result_attachment);




                        $downloadHtml = "";

                        if(isset($result_attachment_row['downfile'])){
                            $downloadHtml = "<a href='".getPath()."/admin/uploadfile".substr_replace($result_attachment_row['downfile'],"",strlen($result_attachment_row['downfile'])-1)."' target=\"_blank\">详细参数（PDF)</a>";
                        }else{
                            $downloadHtml = "<div>&nbsp;</div>";
                        }

                        echo " <li>
                                <dl>
                                    <dt><a href='product_detail.php?id=".$row['id']."'>".$row['title']." </a><br/>
                                        <a href='product_detail.php?id=".$row['id']."'></a>".$row['keywords']."</dt>
                                    <dd class=\"tu\"><a href='product_detail.php?id=".$row['id']."'><img src=".$row['thumb']."
                                                                                               width=\"169\" height=\"121\"/></a>
                                    </dd>
                                    <dd class=\"zi\">".$row['description']."</dd>
                                    <dd class=\"zzi\">".$downloadHtml."</dd>
        
                                </dl>
                            </li>";



                    }


                    ?>






                </ul>

                <?php


                ?>


                <div class="page">
                    <div class="pageli">

                        <?php



                        $SiteConfig->pagination($cur_page,$totalPageNum,$catid,"products.php");



                        ?>



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
