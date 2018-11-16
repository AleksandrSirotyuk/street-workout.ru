<?php

$this->title = 'Главная';

use yii\helpers\Html;
use yii\helpers\Url;
?>

<!-- Slider -->
<section id="slider">
    <div id="slider_container" class="owl-carousel owl-theme">
        <a href="#"><?= Html::img('@web/images/1-slider.jpg', ['alt' => 'slide1', 'height' => '580px']); ?></a>
        <a href="#"><?= Html::img('@web/images/2-slider.jpg', ['alt' => 'slide2', 'height' => '580px']); ?></a>
        <a href="#"><?= Html::img('@web/images/3-slider.jpg', ['alt' => 'slide3', 'height' => '580px']); ?></a>
    </div>
</section>
<!-- End of slider -->

<!-- Latest news -->
<section class="latest-news">
    <h2>Последние новости</h2>
    <div class="container-fluid">
        <div class="col-sm-4">
				<span class="news-block">
                    <?= Html::img('@web/images/1-latest_news.jpg', ['alt' => 'latest_news1', 'height' => '180px', 'width' => '280px']); ?>
					<p>
						Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру 
						сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, 
						а начинающему оратору отточить навык публичных выступлений в домашних условиях. 
					</p>
				</span>
        </div>
        <div class="col-sm-4">
				<span class="news-block">
					 <?= Html::img('@web/images/2-latest_news.jpg', ['alt' => 'latest_news2', 'height' => '180px', 'width' => '280px']); ?>
						<p>
						Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру 
						сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, 
						а начинающему оратору отточить навык публичных выступлений в домашних условиях.  
					</p>
				</span>
        </div>
        <div class="col-sm-4">
				<span class="news-block">
					 <?= Html::img('@web/images/3-latest_news.jpg', ['alt' => 'latest_news3', 'height' => '180px', 'width' => '280px']); ?>
						<p>
						Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру 
						сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, 
						а начинающему оратору отточить навык публичных выступлений в домашних условиях. 
					</p>
				</span>
        </div>
    </div>
</section>
<!-- End of latest news -->

<!-- Popular tutorials -->
<section class="popular_tutorials">
    <h2>Популярные обучалки</h2>
    <div class="container-fluid">
        <div class="col-md-6">
            <h3>Передний вис</h3>
            <div class="video_tutorial">
                <iframe width="560" height="315"
                        src="https://www.youtube.com/embed/h1z4rLqiu2U" frameborder="0"
                        allow="autoplay; encrypted-media" allowfullscreen>
                </iframe>
            </div>
        </div>
        <div class="col-md-6">
            <h3>Флаг</h3>
            <iframe width="560" height="315"
                    src="https://www.youtube.com/embed/eMMMf9B-V3Y" frameborder="0"
                    allow="autoplay; encrypted-media" allowfullscreen>
            </iframe>
        </div>
    </div>
</section>
<!-- End of popular tutorials -->

<?php echo Yii::$app->user->identity['login']; ?>