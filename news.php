<?php
include 'connectDB.php';



$id = $_GET["id"];

//首页产品流动图片
$sql_pro_flow = "SELECT * FROM `v9_news` WHERE `catid` = 9 AND `id` = $id";
$result_pro_flow = mysqli_query($con, $sql_pro_flow);



while ($row2 = mysqli_fetch_array($result_pro_flow)) {


    echo "<li>
                                <dl>
                                    <a href=products.php?id=".$row2['id'].">
                                        <dt><img src=".$row2['thumb']." /></dt>
                                        <dd>".$row2['title']."</dd>
                                    </a>
                                </dl>
                            </li>";
}

