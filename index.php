<?php
use yii\widgets\LinkPager;
use yii\helpers\Url;
?>


<!--main content start-->
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php foreach ($articles as $article):?>
                    <article class="post">
                        <div class="post-thumb">
                            <a href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>"><img src="<?= $article->getImage();?>" alt=""></a>

                            <a href="<?= Url::toRoute(['site/view', 'id'=>$article->id]);?>" class="post-thumb-overlay text-center">
                                <div class="text-uppercase text-center">View Post</div>
                            </a>
                        </div>
                        <div class="post-content">
                            <header class="entry-header text-center text-uppercase">
                                <h6><a href="<?= Url::toRoute(['site/category', 'id'=>$article->category->id ])?>"><?= $article->category->title; ?></a></h6>

                                <h1 class="entry-title"><a href="<?= Url::toRoute(['site/view', 'id'=>$article->id ])?>"><?= $article->title; ?></a></h1>

                                <div class="game">

                                </div>

                            </header>
                            <div class="entry-content">
                                <p>
                                    <?= $article->description; ?>
                                </p>

                                <div class="btn-continue-reading text-center text-uppercase">
                                    <a href="<?= Url::toRoute(['site/view', 'id'=>$article->id]);?>" class="more-link">Продолжение поста</a>
                                </div>
                            </div>
                            <div class="social-share">
                                <span class="social-share-title pull-left text-capitalize">Автор статьи: <?= $article->author->name?>, Дата создания: <?= $article->getDate();?></span>
                                <ul class="text-center pull-right">
                                    <li><a class="s-facebook" href="#"><i class="fa fa-eye"></i></a></li><?= (int) $article->viewed?>
                                </ul>
                            </div>
                        </div>


                    </article>
                <?php endforeach;?>

                <?php
                    echo LinkPager::widget([
                        'pagination' => $pagination,
                    ]);
                ?>
            </div>

            <?= $this->render('/partials/sidebar', [
                'popular'=>$popular,
                'recent'=>$recent,
                'categories'=>$categories
            ]); ?>
            </div>

        <!-- Yandex.Metrika counter -->
        <script type="text/javascript" >
            (function (d, w, c) {
                (w[c] = w[c] || []).push(function() {
                    try {
                        w.yaCounter51107465 = new Ya.Metrika2({
                            id:51107465,
                            clickmap:true,
                            trackLinks:true,
                            accurateTrackBounce:true,
                            webvisor:true
                        });
                    } catch(e) { }
                });

                var n = d.getElementsByTagName("script")[0],
                    s = d.createElement("script"),
                    f = function () { n.parentNode.insertBefore(s, n); };
                s.type = "text/javascript";
                s.async = true;
                s.src = "https://mc.yandex.ru/metrika/tag.js";

                if (w.opera == "[object Opera]") {
                    d.addEventListener("DOMContentLoaded", f, false);
                } else { f(); }
            })(document, window, "yandex_metrika_callbacks2");
        </script>
        <noscript><div><img src="https://mc.yandex.ru/watch/51107465" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->
    </div>
</div>
<!-- end main content-->
<!--footer start-->
