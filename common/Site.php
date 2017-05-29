<?php




class Site {
    /* 成员变量 */
    var $url;
    var $title;
    var $perpageNum;//产品页每页展示的数量

    function __construct() {
        $this->perpageNum = 3;

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