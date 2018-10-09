<?php

use app\models\Media;
use app\models\Registration;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<section id="slide">       
    <div class="container">
        <div class="navPanel">
            <div class="navPanel_left">
                <img src="image/logo_waxom.png" alt="logo.png">
                <p>Waxom</p>
            </div>
            <div class="navPanel_right">
                <div class="navPanel_button">
                    <a href="">Menu</a>
                </div>
                <div class="navPanel_button">
                    <a href="">About us</a>
                </div>
                <div class="navPanel_button">
                    <a data-toggle="modal" data-target=".bd-example-modal-sm-2">Registration</a>
                </div>
            </div>
        </div>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="item active">
                    <div class='first'>
                        <h1>Unique and Modern Design</h1>
                        <p>Лучший книжный магазин</p>
                    </div>
            </div>
            <div class="item">
                <div class='first'>
                    <h1>БЕРИТЕ КНИЖКИ У НАС</h1>
                </div>
            </div>
            <div class="item">
                <div class='first'>
                    <h1>МЫ ВАС ЖДЕМ!!!</h1>
                </div>
            </div>
          </div>
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="icon-prev" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="icon-next" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </div>    
</section>

<!--Модальное окно регистрации-->

<?php $model_Registration = new Registration; ?>

<div class="modal fade bd-example-modal-sm-2" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                <?php
                $form = ActiveForm::begin([
                    'id' => 'registration-save',
                    'action' => Yii::$app->urlManager->createUrl(['/registration/save']),
                ])
                ?>
                <?= $form->field($model_Registration, 'email') ?>
                <?= $form->field($model_Registration, 'password') ?>
                <?= $form->field($model_Registration, 'name') ?>
                <?= $form->field($model_Registration, 'surname') ?>
                <?= $form->field($model_Registration, 'phone') ?>
                <div class="form-group">
                    <div class="col-lg-offset-1 col-lg-11">
                        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary']) ?>
                    </div>                    
                </div>
                <?php ActiveForm::end() ?>
            </div>
        </div>
    </div>
</div>

<section id="stats">
    <div class="container">
        <div class="row1">
            <div class="item1">
                <img src="image/icon-1.png" alt="icon-1">
                <h4>3587</h4>
                <p>SATISFIED CLIENTS</p>
                <img src="image/line.png" alt="line">
            </div>
            <div class="item1">
                <img src="image/icon-2.png" alt="icon-2">
                <h4>207</h4>
                <p>CUPS OF COFFEE</p>
                <img src="image/line.png" alt="line">
            </div>
            <div class="item1">
                <img src="image/icon-3.png" alt="icon-3">
                <h4>2500</h4>
                <p>BLOG POSTS</p>
                <img src="image/line.png" alt="line">
            </div>
            <div class="item1">
                <img src="image/icon-4.png" alt="icon-4">
                <h4>873</h4>
                <p>LIKES</p>
                <img src="image/line.png" alt="line">
            </div>
            <div class="item1">
                <img src="image/icon-5.png" alt="icon-5">
                <h4>900</h4>
                <p>WE LAUNCHED</p>
                <img src="image/line.png" alt="line">
            </div>
        </div>
    </div>
</section>

<section id="projects">
    <div class="container">
        <div class="row6-1">
            <h3>Our Latest Projects.</h3>
            <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium.</p>
        </div>
        <div class="row6-2">
            <div class="row6-inner">
                <button>All</button>
                <button>Web Design</button>
                <button>Mobile App</button>
                <button>Illustration</button>
                <button>Photo</button>
            </div>
        </div>
        <div class="row6-3">
            <div class="col-sm-6 col-xs-12 col-lg-4 item6">
                <div class="item6-inner">    
                    <div>
                        <img src="image/project-1.png" alt="project-1">
                    </div>
                    <p>Claritas Etiam Processus</p>
                    <p>Photograpy Nature</p>
                </div>    
            </div>
            <div class="col-sm-6 col-xs-12 col-lg-4 item6">
                <div class="item6-inner">    
                    <div>
                        <img src="image/project-2.png" alt="project-1">
                    </div>
                    <p>Quam Nutamus Farum</p>
                    <p>Graphic Design, Mock-Up</p>
                </div>    
            </div>
            <div class="col-sm-6 col-xs-12 col-lg-4 item6">
                <div class="item6-inner">    
                    <div>
                        <img src="image/project-3.png" alt="project-1">
                    </div>
                    <p>Usus Legentis Videntur</p>
                    <p>Photography, Holiday</p>
                </div>    
            </div>
            <div class="col-sm-6 col-xs-12 col-lg-4 item6">
                <div class="item6-inner">    
                    <div>
                        <img src="image/project-4.png" alt="project-1">
                    </div>
                    <p>Claritas Etiam Processus</p>
                    <p>Photograpy Nature</p>
                </div>
            </div>
            <div class="col-sm-6 col-xs-12 col-lg-4 item6">
                <div class="item6-inner">    
                    <div>
                        <img src="image/project-5.png" alt="project-1">
                    </div>
                    <p>Quam Nutamus Farum</p>
                    <p>Graphic Design, Mock-Up</p>
                </div>
            </div>
            <div class="col-sm-6 col-xs-12 col-lg-4 item6">
                <div class="item6-inner">    
                    <div>
                        <img src="image/project-6.png" alt="project-1">
                    </div>
                    <p>Usus Legentis Videntur</p>
                    <p>Photography, Holiday</p>
                </div>
            </div>
        </div>
        <div class="row_load_more">
            <div class="row_load_more-inner">
                <button data-toggle="modal" data-target=".bd-example-modal-sm">LOAD MORE</button>
            </div>
        </div>
    </div>
</section>

<!--Модальное окно-->

<?php $model_Media = new Media; ?>

<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                <?php
                $form = ActiveForm::begin([
                    'id' => 'media-save',
                    'action' => Yii::$app->urlManager->createUrl(['/media/save']),
                ])
                ?>
                <?= $form->field($model_Media, 'title') ?>
                <?= $form->field($model_Media, 'desc') ?>
                <?= $form->field($model_Media, 'url') ?>
                <div class="form-group">
                    <div class="col-lg-offset-1 col-lg-11">
                        <?= Html::submitButton('Применить', ['class' => 'btn btn-primary']) ?>
                    </div>                    
                </div>
                <?php ActiveForm::end() ?>
            </div>
        </div>
    </div>
</div>

<section id="partners">
    <div class="container">
        <div class="row2">
            <div class="item2">
                <img src="image/partner-1.png" alt="partner-1">
            </div>
            <div class="item2">
                <img src="image/partner-2.png" alt="partner-2">
            </div>
            <div class="item2">
                <img src="image/partner-3.png" alt="partner-3">
            </div>
            <div class="item2">
                <img src="image/partner-4.png" alt="partner-4">
            </div>
        </div>
    </div>    
</section>

<section id="hand">
    <div class="container">
        <div class="row3">
            <div class="item3-1">
                <img src="image/hand_with_phone.png" alt="hand_with_phone">
            </div>
            <div class="item3-2">
                <h2>Excellent for Mobile Devices.</h2>
                <p>Qisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius claritas. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                <ul>
                    <li>Nam liber tempor cum soluta nobis eleifend option;</li>
                    <li>Option congue nihil imperdiet doming id quod mazim placerat facer;</li>
                    <li>Eodem modo typi, qui nunc nobis videntur parum futurum;</li>
                    <li>Investigationes demonstraverunt lectores</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="recent_posts">
    <div class="container">
        <div class="row4">
            <h2>Recent Posts.</h2>
            <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium.</p>
        </div>
        <div class="row row5">
            <div class="col-sm-6 col-xs-12 col-lg-4 item_recent">
                <div class="recent_1">
                    <div>
                        <div>
                            <p>30</p>
                        </div>
                        <p>Sep.</p>
                    </div>
                </div>
                <div>
                    <h3>Lorem ipsum dolor sit amet</h3>
                    <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium.</p>
                    <a href="">Read more</a>
                    <img src="image/strelka.png" alt="strelka">
                </div>
            </div>
            <div class="col-sm-6 col-xs-12 col-lg-4 item_recent">
                <div class="recent_1">
                    <div>
                        <div>
                            <p>30</p>
                        </div>
                        <p>Sep.</p>
                    </div>
                </div>
                <div>
                    <h3>Lorem ipsum dolor sit amet</h3>
                    <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium.</p>
                    <a href="">Read more</a>
                    <img src="image/strelka.png" alt="strelka">
                </div>
            </div>
            <div class="col-sm-6 col-xs-12 col-lg-4 item_recent">
            <div class="recent_1">
                    <div>
                        <div>
                            <p>30</p>
                        </div>
                        <p>Sep.</p>
                    </div>
                </div>
                <div>
                    <h3>Lorem ipsum dolor sit amet</h3>
                    <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium.</p>
                    <a href="">Read more</a>
                    <img src="image/strelka.png" alt="strelka">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="footer">
    <div class="container">
        <div class="row_footer">
            <div class="item_footer col-xs-12 col-sm-6 col-lg-3">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci suscipit lobortis claritatem.</p>
            </div>
            <div class="item_footer col-xs-12 col-sm-6 col-lg-3">
                <p>МНОГО ТЕКСТА</p>
            </div>
            <div class="item_footer col-xs-12 col-sm-6 col-lg-3">
                <p>МНОГО ТЕКСТА</p>
            </div>
            <div class="item_footer col-xs-12 col-sm-6 col-lg-3">
                <h3>Dribbble Widget</h3>
                <?php
                    $model = Media::find()->limit(4)->all();
                    foreach ($model as $key => $item) {
                ?>
                <div class="col-xs-6 col-lg-6 item_pic_inner">
                    <img src="<?php echo $item->url; ?>">
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<?php

$path = '/image/';    
$massiv = [
    [
        'picture' => 'ideas-1.png',
        'title' => 'Web & App Design',
        'desc' => 'Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim.',
    ],
    [
        'picture' => 'ideas-2.png',
        'title' => 'Development',
        'desc' => 'Lorem ipsum dolor sit amet, adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.',
    ],
    [
        'picture' => 'ideas-3.png',
        'title' => 'Customization',
        'desc' => 'Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim.',
    ],
    [
        'picture' => 'ideas-4.png',
        'title' => 'Marketing',
        'desc' => 'Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim.',
    ],
    
            ];

?>

<section id="ideas">
    <div class="container">
        <div class="row_ideas">
            <?php
                foreach ($massiv as $key => $value) { ?>
                    <div class="item_ideas">
                        <div class="item_ideas_inner">
                            <img src="<?php echo $path.$value['picture'] ?>">
                            <h3><?php echo $value['title'] ?></h3>
                            <p><?php echo $value['desc'] ?></p>
                        </div>
                    </div>
            <?php } ?>
        </div>
    </div>
</section>

