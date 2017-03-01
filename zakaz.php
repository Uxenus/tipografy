<?php
/**
 * Created by PhpStorm.
 * User: Mega
 * Date: 28.07.14
 * Time: 20:06
 */

include_once "inc/inc.php";

?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Типографические услуги - заказ Визитка (50х90мм)</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="uxenus">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/angular.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>

</head>

<body>

<div id="container" class="shadow">
    <h2 class="confirm-h2">ЗАКАЗ: Визитка (50х90мм) - ШАГ 2</h2>

    <form id="confirm_form" enctype="multipart/form-data" action="go_order.php" method="post">
        <div id="confirm_order" class="span12">

            <!-- //////////////////////////////// ZAKAZ DETAIL - START //////////////////// -->
            <div id="zakaz-detail" class="span6">
                <h3 class="confirm-h3">Подтверждение заказа:</h3>

                <div class="zakaz_punk">
                    <b class="zakaz-punk-title">Название заказа:</b> <span
                        class="zakaz-punk-value"><?php echo $_REQUEST['name']; ?></span>
                </div>

                <div class="zakaz_punk">
                    <b class="zakaz-punk-title">Тип продукта:</b> <span
                        class="zakaz-punk-value"><?php echo post_id__to__text($_REQUEST['type']); ?></span>
                </div>

                <div class="zakaz_punk">
                    <b class="zakaz-punk-title">Материал:</b> <span
                        class="zakaz-punk-value">БУМАГА - плотность <?php echo post_id__to__text($_REQUEST['paper_type']); ?></span>
                </div>

                <div class="zakaz_punk">
                    <b class="zakaz-punk-title">Цветность печати:</b> <span
                        class="zakaz-punk-value"><?php echo post_id__to__text($_REQUEST['color_mode']); ?></span>
                </div>

                <div class="zakaz_punk">
                    <b class="zakaz-punk-title">ТИРАЖ:</b> <span
                        class="zakaz-punk-value"><?php echo $_REQUEST['count']; ?>шт.</span>
                </div>

                <hr/>

                <h4 id="after-print-values" class="confirm-h4">Послепечатные работы:</h4>

                <div id="after-print-values-container">
                    <?php if ($_REQUEST['laminat_status']) { ?>
                        <div class="zakaz_punk">
                            <b class="zakaz-punk-title">Ламинация:</b> <span
                                class="zakaz-punk-value"><?php echo post_id__to__text($_REQUEST['laminat']); ?></span>
                        </div>
                    <?php } ?>

                    <?php if ($_REQUEST['krug_status']) { ?>
                        <div class="zakaz_punk">
                            <b class="zakaz-punk-title">Закругление углов:</b> <span class="zakaz-punk-value">Да</span>
                        </div>
                    <?php } ?>

                    <?php if ($_REQUEST['bigovka_status']) { ?>
                        <div class="zakaz_punk">
                            <b class="zakaz-punk-title">Биговка (канавка для сгиба) количество:</b> <span
                                class="zakaz-punk-value"><?php echo $_REQUEST['bigovka']; ?>биг.</span>
                        </div>
                    <?php } ?>

                    <?php if ($_REQUEST['falc_status']) { ?>
                        <div class="zakaz_punk">
                            <b class="zakaz-punk-title">Фальцовка (сгиб):</b> <span class="zakaz-punk-value">Да</span>
                        </div>
                    <?php } ?>

                    <?php if ($_REQUEST['perf_status']) { ?>
                        <div class="zakaz_punk">
                            <b class="zakaz-punk-title">Перфорация:</b> <span
                                class="zakaz-punk-value"><?php echo $_REQUEST['perforation']; ?>прох.</span>
                        </div>
                    <?php } ?>

                    <?php if ($_REQUEST['porezka_status']) { ?>
                        <div class="zakaz_punk">
                            <b class="zakaz-punk-title">Дополнительный рез:</b> <span
                                class="zakaz-punk-value"><?php echo $_REQUEST['cutting']; ?>рез.</span>
                        </div>
                    <?php } ?>

                    <?php if ($_REQUEST['drilling_status']) { ?>
                        <div class="zakaz_punk">
                            <b class="zakaz-punk-title">Сверление, ∅ 6мм:</b> <span class="zakaz-punk-value">Да</span>
                        </div>
                    <?php } ?>
                </div>
                <hr/>
            </div>
            <!-- //////////////////////////////// ZAKAZ DETAIL - END //////////////////// -->


            <!-- //////////////////////////////// REKVIZITI - START //////////////////// -->
            <div class="forma_zakaza_tovara span6">
                <h4 class="confirm-h4">Ваши реквизиты:</h4>

                <div class="form_texts">ФИО:</div>

                <div style="clear:both;"></div>
                <input type="text" value="" maxlength="50" placeholder="Укажите контактные ФИО" name="sender_name"
                       id="sender_name" class="sender_name span5" required>

                <div style="clear:both;"></div>
                <div class="form_texts">Ваш телефон:</div>

                <div style="clear:both;"></div>
                <input type="tel" value="" maxlength="50" placeholder="Введите ваш контактный телефон" name="phone_"
                       id="phone_" class="sender_name span5" required>

                <div style="clear:both;"></div>
                <div class="form_texts">Ваш e-mail:</div>

                <div style="clear:both;"></div>
                <input type="email" value="" maxlength="100" placeholder="Введите контактный электронный адрес"
                       name="email_" id="email_" class="sender_name span5">

                <div style="clear:both;"></div>
                <div class="form_texts">Ваше сообщение:</div>

                <div style="clear:both;"></div>
                <textarea rows="10" name="message" id="message" placeholder="Комментарий к заказу"
                          class="sender_message span5"><?php echo $_REQUEST['message']; ?></textarea>

                <br>
                <br>

                <input type="hidden" value="do_zakaz" name="mode">

            </div>
            <!-- //////////////////////////////// REKVIZITI - END //////////////////// -->

            <div style="clear:both;"></div>
            <input type="submit" value="Подтвердить заказ" name="submit" id="btn_obr_otpravit"
                   class="btn btn-info span3">
            <input type="button" value="Назад" name="btn_back" id="btn_back"
                   class="btn btn-warning span3 pull-right" onclick="window.history.go(-1);">
        </div>


    </form>
</div>

</body>
</html>