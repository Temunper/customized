<?php
use app\components\GlobalUrlService;
?>
    <!-- banner开始 -->
    <div class="banner">
        <img src="images/about-banner.png" alt="" />
    </div>
    <!-- banner结束 -->

    <!-- 内容开始 -->
    <div class="main wrap clearfix">
        <div class="main-l fl">
            <div class="main-l-hd">
                <img src="images/about.png"  alt="" />
            </div>
            <div class="main-l-bd">
                <ul>
                    <li><a href="<?=GlobalUrlService::buildAppUrl('/about',['type'=>1]);?>">公司简介</a></li>
                    <li><a href="<?=GlobalUrlService::buildAppUrl('/about',['type'=>2]);?>">企业文化</a></li>
                    <li><a href="<?=GlobalUrlService::buildAppUrl('/about',['type'=>3]);?>">现代工厂</a></li>
                    <li class="on"><a href="<?=GlobalUrlService::buildAppUrl('/about',['type'=>4]);?>">荣誉资质</a></li>
                </ul>
                <img class="main-l-ft" src="images/aboutft.png" alt="" />
            </div>
        </div>
        <div class="main-r fr">
            <div class="main-r-hd clearfix">
                <div class="main-r-hd-l fl">
                    <h3>荣誉资质</h3>
                </div>
                <div class="main-r-hd-r fr">
                    <span>您目前所在页面：<a href="/">首页</a> > <a href="<?=GlobalUrlService::buildAppUrl('/about');?>">关于我们</a> >
                        <a href="<?=GlobalUrlService::buildAppUrl('/about',['type'=>4]);?>">荣誉资质</a></span>
                </div>
            </div>
            <div class="main-r-bd">
                <h6>精诚铸就品牌  悉心创造辉煌</h6>

                
                <img class="bigImage" src="images/honor.png" alt="" />
            </div>

            <!-- 分页开始 -->
<!--            <div class="fenye">-->
<!--                <ul class="clearfix">-->
<!--                    --><?php //echo \Yii::$app->view->renderFile("@app/modules/frontend/views/common/pagination.php", [
//                        'pages' => $pages,
//                        'url' => '/about',
//                    ]); ?>
<!--                </ul>-->
<!--            </div>-->
            <!-- 分页结束 -->
            
        </div>
    </div>
    <!-- 内容结束 -->

