<?php




class Site {
    /* 成员变量 */
    var $url;
    var $title;
    var $perpageNum;//产品页每页展示的数量

    function __construct() {
        $this->perpageNum = 1;

    }


    /*
     * $cur_page:当前页码
     * $totalPageNum:总页数
     * $catid:目录ID
     *
     * */
    function pagination($cur_page,$totalPageNum,$catid,$pageName){
        if($cur_page>=2){
            $pre_page = $cur_page - 1;
        }else{
            $pre_page = 1;
        }

        if($cur_page<=$totalPageNum-1){
            $next_page = $cur_page + 1;
        }else{
            $next_page =  $totalPageNum;
        }

        if($totalPageNum>0){
            echo "<a href='".$pageName."?catid=".$catid."&page=".$pre_page."'>《</a>";
            for ($i=1; $i<=$totalPageNum; $i++)
            {
                if($i == $cur_page){
                    $class = "cur";
                }else{
                    $class = "";
                }
                echo "<a class='".$class."' href='".$pageName."?catid=".$catid."&page=".$i."' >".$i."</a>";
            }
            echo "<a href='".$pageName."?catid=".$catid."&page=".$next_page."'>》</a>";
        }else{
            echo "无数据!";
        }
    }

    /* 成员函数 */
    function setUrl($par){
        $this->url = $par;
    }

    function getUrl(){
        echo $this->url . PHP_EOL;
    }

    function setTitle($par){
        $this->title = $par;
    }

    function getTitle(){
        echo $this->title . PHP_EOL;
    }
}


?>