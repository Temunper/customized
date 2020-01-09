<?php
use yii\helpers\Html;
use app\components\GlobalUrlService;
$type_name = Yii::$app->params['product_type'][$type] ??'';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <title>皇家首府官网</title>
    <?=Html::cssFile('/css/common.css')?>
    <?=Html::cssFile('/css/swiper.min.css')?>
    <?=Html::cssFile('/css/aos.css')?>
    <?=Html::cssFile('/css/list.css')?>
    <?=Html::jsFile('/js/jquery-1.11.3.min.js')?>
    <?=Html::jsFile('/js/aos.js')?>
    <?=Html::jsFile('/js/main.js')?>
</head>
<body>
    <!-- 头部开始 -->
    <div class="headerbg">
        <div class="wrap clearfix">
            <div class="header-l fl">
                <img class="logo" src="images/logo.png" alt="" />
                <img src="images/header-l.png" alt="" />
            </div>
            <div class="header-r fr">
                <img src="images/header-r.png" alt="" />
            </div>
        </div>
    </div>
    <!-- 头部结束 -->

    <!-- 导航开始 -->
    <div class="navbg">
        <div class="nav wrap">
            <ul class="nav-ul clearfix">
                <li class="nav-firstLi navli">
                    <a href="index.html">网站首页</a>
                    <img src="images/navbg.png"  alt="" />
                </li>
                <li class="navli">
                    <a href="about.html">关于我们</a>
                    <img src="images/navbg.png"  alt="" />
                    <div class="downNav clearfix">
                        <ol class="downNav-l fl">
                            <li><a href="about.html">公司简介</a></li>
                            <li><a href="culture.html">企业文化</a></li>
                            <li><a href="factory.html">现代工厂</a></li>
                            <li><a href="honor.html">荣誉资质</a></li>
                        </ol>
                        <div class="downNav-r fr">
                            <img src="images/nav2.png" alt="" />
                        </div>
                    </div>
                </li>
                <li class="navli">
                    <a href="trend.html">市场先机</a>
                    <img src="images/navbg.png"  alt="" />
                    <div class="downNav clearfix">
                        <ol class="downNav-l fl">
                            <li><a href="trend.html">市场趋势</a></li>
                            <li><a href="prospect.html">市场前景</a></li>
                        </ol>
                        <div class="downNav-r fr">
                            <img src="images/nav2.png" alt="" />
                        </div>
                    </div>
                </li>
                <li class="navli">
                    <a href="product.html">产品中心</a>
                    <img src="images/navbg.png"  alt="" />
                    <div class="downNav clearfix">
                        <ol class="downNav-l fl">
                            <?php if ($product_type):?>
                                <?php foreach ($product_type as $key  =>$item):?>
                                    <li <?php if ($key ==$type):?>class="on"<?php endif;?>>
                                        <a href="<?=GlobalUrlService::buildAppUrl('/products',['type'=>$key])?>"><?=$item?></a>
                                    </li>
                                <?php endforeach;?>
                            <?php endif;?>
                        </ol>
                        <div class="downNav-r fr">
                            <img src="images/nav2.png" alt="" />
                        </div>
                    </div>
                </li>
                <li class="navli">
                    <a href="advantage.html">项目优势</a>
                    <img src="images/navbg.png"  alt="" />
                    <div class="downNav clearfix">
                        <ol class="downNav-l fl">
                            <li><a href="advantage.html">品牌魅力</a></li>
                            <li><a href="sellingPoint.html">产品卖点</a></li>
                            <li><a href="joinAdv.html">加盟优势</a></li>
                        </ol>
                        <div class="downNav-r fr">
                            <img src="images/nav2.png" alt="" />
                        </div>
                    </div>
                </li>
                <li class="navli">
                    <a href="joinProcess.html">合作共赢</a>
                    <img src="images/navbg.png"  alt="" />
                    <div class="downNav clearfix">
                        <ol class="downNav-l fl">
                            <li><a href="joinProcess.html">加盟流程</a></li>
                            <li><a href="coMode.html">合作模式</a></li>
                            <li><a href="investmentAdv.html">投资优势</a></li>
                            <li><a href="joinSupport.html">加盟支持</a></li>
                        </ol>
                        <div class="downNav-r fr">
                            <img src="images/nav2.png" alt="" />
                        </div>
                    </div>
                </li>
                <li class="navli">
                    <a href="news.html">新闻资讯</a>
                    <img src="images/navbg.png"  alt="" />
                    <div class="downNav clearfix">
                        <ol class="downNav-l fl">
                            <li><a href="news.html">品牌新闻</a></li>
                            <li><a href="newsIndustry.html">行业动态</a></li>
                        </ol>
                        <div class="downNav-r fr">
                            <img src="images/nav2.png" alt="" />
                        </div>
                    </div>
                </li>
                <li class="nav-lastLi navli">
                    <a href="contactUs.html">联系我们</a>
                </li>
            </ul>
            <img class="nav-firstLiBg" src="images/navbg1.png" alt="" />
        </div>
    </div>
    <!-- 导航结束 -->

    <!-- banner开始 -->
    <div class="banner">
        <img src="images/product-banner.png" alt="" />
    </div>
    <!-- banner结束 -->

    <!-- 内容开始 -->
    <div class="main wrap clearfix">
        <div class="main-l fl">
            <div class="main-l-hd">
                <img src="images/product2.png"  alt="" />
            </div>
            <div class="main-l-bd">
                <ul>
                    <?php if ($product_type):?>
                    <?php foreach ($product_type as $key  =>$item):?>
                            <li <?php if ($key ==$type):?>class="on"<?php endif;?>>
                                <a href="<?=GlobalUrlService::buildAppUrl('/products',['type'=>$key])?>"><?=$item?></a>
                            </li>
                    <?php endforeach;?>
                    <?php endif;?>

                </ul>
                <img class="main-l-ft" src="images/productft.png" alt="" />
            </div>
        </div>
        <div class="main-r fr">
            <div class="main-r-hd clearfix">
                <div class="main-r-hd-l fl">
                    <h3><?=$type_name;?></h3>
                </div>
                <div class="main-r-hd-r fr">
                    <span>您目前所在页面：<a href="/">首页</a> >
                        <a href="<?=GlobalUrlService::buildAppUrl('/products')?>">产品中心</a> >
                        <a href="<?=GlobalUrlService::buildAppUrl('/products',['type'=>$type])?>"><?=$type_name?></a></span>
                </div>
            </div>
            <div class="main-r-bd">
                <ul class="product-ul clearfix">
                    <?php if ($list):?>
                    <?php foreach ($list as $item):?>
                    <li>
                        <a href="javascript:;">
                            <img src="<?=$item['image']?>" alt="" class="pimg"/>
                            <div class="product-txt clearfix">
                                <span class="product-txt-l fl"><?=$item['name']?></span>
                                <span class="product-txt-r fr"></span>
                            </div>
                        </a>
                    </li>

                    <?php endforeach;?>
                    <?php endif;?>
                </ul>
                <!-- 点击图片放大开始 -->
                <div id="outerdiv" style="position:fixed;top:0;left:0;background:rgba(0,0,0,0.7);z-index:2;width:100%;height:100%;display:none;">
                    <div id="innerdiv" style="position:absolute;">
                        <img id="bigimg" style="border:5px solid #fff;" src="" />
                    </div>
                </div>
                <!-- 点击图片放大结束 -->
                <script type="text/javascript">
                    $(function(){
                        for(var i=0; i<20; i++){
                            var n = 3*i+1;
                            $(".product-ul li").eq(n).addClass('jiange');
                        }
                    })
                </script>
            </div>

            <!-- 分页开始 -->
            <div class="fenye">
                <ul class="clearfix">
                    <?php echo \Yii::$app->view->renderFile("@app/modules/frontend/views/common/pagination.php", [
                        'pages' => $pages,
                        'url' => '/products',
                    ]); ?>
                </ul>
            </div>
            <!-- 分页结束 -->
            
        </div>
    </div>
    <!-- 内容结束 -->

    <!-- 底部导航开始 -->
    <div class="navbg ftNav">
        <div class="nav wrap">
            <ul class="nav-ul clearfix">
                <li class="nav-firstLi navli"><a href="index.html">网站首页</a><img src="images/navbg.png"  alt="" /></li>
                <li class="navli"><a href="about.html">关于我们</a><img src="images/navbg.png"  alt="" /></li>
                <li class="navli"><a href="trend.html">市场先机</a><img src="images/navbg.png"  alt="" /></li>
                <li class="navli"><a href="product.html">产品中心</a><img src="images/navbg.png"  alt="" /></li>
                <li class="navli"><a href="advantage.html">项目优势</a><img src="images/navbg.png"  alt="" /></li>
                <li class="navli"><a href="joinProcess.html">合作共赢</a><img src="images/navbg.png"  alt="" /></li>
                <li class="navli"><a href="news.html">新闻资讯</a><img src="images/navbg.png"  alt="" /></li>
                <li class="nav-lastLi navli"><a href="contactUs.html">联系我们</a></li>
            </ul>
            <img class="nav-firstLiBg" src="images/navbg1.png" alt="" />
        </div>
    </div>
    <!-- 底部导航结束 -->

    <!-- 底部开始 -->
    <div class="footerbg">
        <div class="footer wrap">
            <div class="footer-hd clearfix">
                <div class="footer-hd-l fl">
                    <img src="images/footer-l.png"  alt="" />
                    <span>广东缔造者新型材料有限公司</span>
                </div>
                <div class="footer-hd-m fl">
                    <img src="images/footer-m.png"  alt="" />
                    <span>佛山市南海区西樵镇联新革新村一队8号厂房</span>
                </div>
                <div class="footer-hd-r fr">
                    <img src="images/footer-r.png"  alt="" />
                    <span>0731-81833333</span>
                </div>
            </div>
            <div class="footer-bd clearfix">
                <img class="footer-logo fl" src="images/logo.png" height="114" width="100" alt="" />
                <div class="footer-erweima fl">
                    <img src="images/img3.png" alt="" />
                    <div>公众号二维码</div>
                </div>
            </div>
            <p class="footer-copy">copyright@2020-2021版权所有广东缔造者新型材料有限公司      粤ICP备20010233号-1  /  技术支持： 好商汇</p>
        </div>
    </div>
    <!-- 底部结束 -->
</body>
</html>
<script>
    AOS.init({
        easing: 'ease-out-back',
        duration: 1000
    });
</script> 