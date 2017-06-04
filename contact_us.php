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
            <div class="hmiand"><p>联系我们<br/><span>Company Profile</span></p></div>
            <ul class="listmenu">
                <?php
                $sql_left_nav = "SELECT * FROM `v9_category` WHERE `parentId` = 5";
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
            $sql_content = "SELECT * FROM `v9_page` WHERE `catid` = 48";
            $result_content = mysqli_query($con, $sql_content);
            $row_content = mysqli_fetch_array($result_content);
            //var_dump($row_content);


            ?>

            <div class="aammk"><?php

                echo $row_content['title'];
                ?></div>
            <div class="hubout">
                <?php
                echo $row_content['content'];
                ?>


                <br />
                <br />
                <br />

                <div class="newsbo" id="root">
                    <!---01---->
                    <div class="sulting">您有什么问题？ 请填写以下信息，我们将尽快回复您，带"<span>*</span>"为必填项</div>
                    <form id="form" name="form"  method="post"  onsubmit="return false">
                        <ul class="sultilist">
                            <li><p><span>*</span>姓名</p><input type="text" name="username" v-model="form.username"  class="txtsu"><div class="zisult">请输入联系人的姓名</div></li>
                            <li><p><span>*</span>电话</p><input type="text" name="mobile" v-model="form.mobile"  class="txtsu"><div class="zisult">请输入手机/座机号</div></li>
                            <li><p><span>*</span> 邮箱</p><input type="text" name="email" v-model="form.email"  class="txtsu"><div class="zisult">请输入常用邮箱，以便及时回复您</div></li>
                            <li><p><span></span>  QQ</p><input type="text" name="qq" v-model="form.qq"  class="txtsu"><div class="zisult"></div></li>
                            <li><p><span>*</span>  产品</p><input type="text" name="products" v-model="form.products"  class="txtsu"><div class="zisult">请选择您要咨询的产品类型</div></li>
                            <li><p><span>*</span>  标题</p><input type="text" name="title" v-model="form.title"  class="txtsu"><div class="zisult">请选输入您要咨询的问题</div></li>
                            <li style="margin-bottom:0;"><p><span></span>  内容</p><textarea v-model="form.content"  name="content" cols="" rows="" class="tatsu"></textarea></li>
                            <li><p><span></span> &nbsp;</p><div class="shaxi"><!--0/180字--></div></li>
                            <li><p><span></span> &nbsp;</p>
                                <input type="submit" v-on:click="checkForm" class="btn3" value="提交">
                                <input type="reset" class="btn4" value="重置">
                            </li>
                        </ul>
                    </form>
                    <!---01---->
                </div>
            </div>
        </div>
    </div>
</div>
<!--middle-end-->

<script>

    var app = new Vue({
        el: '#root',
        data: {
            form: {

                username:"",
                mobile:"",
                email:"",
                qq:"",
                products:"",
                title:"",
                content:""
            }
        },
        methods:{

            checkForm:function () {

                if(this.form.username.length <=0 || this.form.mobile.length <=0 || this.form.email.length <=0 || this.form.products.length <=0 ||  this.form.title.length <=0){
                    alert("请完善表单信息!");
                    return;
                }
                console.log("this.form",axios);
                var __self = this;

                axios.post("./commit_message.php",this.form).then(function (response) {
                    console.log("response",response);
                    alert(response.data);
                    __self.form = {

                            username:"",
                            mobile:"",
                            email:"",
                            qq:"",
                            products:"",
                            title:"",
                            content:""
                    }
                }).catch(function (error) {
                    console.log("error",error);
                })

            }
        }
    })
</script>


<?php
include "common/footer.php";
mysqli_close($con);
?>
