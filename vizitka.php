<?php
/**
 * Created by PhpStorm.
 * User: uxenus
 * Date: 25.07.14
 * Time: 10:54
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

    <h2>Визитка (50х90мм)</h2>

    <br/>

    <ul>
        <li><a href="vizitka.php">Визитка (50х90мм)</a></li>
        <li><a href="kalendar.php">Календарь (70х100мм)</a></li>
    </ul>

    <br/>
    <br/>

    <div class="left-sidebar">

        <form id="zakaz_vizitka" enctype="multipart/form-data" action="zakaz.php">
            <!-- ================= NAME OF ZAKAZ - START ================ -->
            <div class="control-group ">
                <label for="name" class="control-label"><h6>Название Заказа</h6></label>

                <div class="controls col-xs-7">
                    <input type="text" value="" name="name"
                           placeholder="Введите название заказа" class="span5" maxlength="40" required="true"
                           id="name">
                </div>
            </div>
            <!-- ================= NAME OF ZAKAZ - END ================ -->

            <!-- ================= COLOR OF PRINT - START ================ -->
            <div class="control-group ">
                <h6>Цветность печати:</h6>

                <input class="radio_ch" type="radio" name="color_mode" id="color_4_0" value="half"> <label
                    for="color_4_0"
                    class="radio-inline"><span>односторонняя (4+0)</span></label>
                <input class="radio_ch" type="radio" name="color_mode" id="color4_4" value="full"> <label for="color4_4"
                                                                                                          class="radio-inline"><span>двусторонняя (4+4)</span></label>

            </div>
            <!-- ================= COLOR OF PRINT - END ================ -->


            <!-- ================= MAKET UPLOAD - START ================ -->
            <div class="control-group ">
                <label for="upload" class="control-label"><h6>Загрузка МАКЕТА ВИЗИТКИ</h6></label>

                <input type="file" id="upload_maket" name="upload_maket">

            </div>
            <!-- ================= MAKET UPLOAD - END ================ -->


            <!-- /////////////////////////// AFTER PRINT ACTIONS ////////////////////// -->

            <!-- ================= LAMINAT - START ================ -->
            <div class="control-group ">
                <input type="checkbox" value="on" id="laminat_status" name="laminat_status">
                <label for="laminat"> Ламинация</label>

                <div style="" id="laminatparam">
                    <select id="laminat" name="laminat" class="">
                        <option title="1.00" value="g1_0">1+0 глянцевая УльтраБонд</option>
                        <option title="2.00" value="g1_1">1+1 глянцевая УльтраБонд</option>
                        <option title="1.25" value="m1_0">1+0 матовая УльтраБонд</option>
                        <option title="2.50" value="m1_1">1+1 матовая УльтраБонд</option>
                    </select>
                </div>
            </div>
            <!-- ================= LAMINAT - END ================ -->

            <!-- ================= ZAKRUGLENIE - START ================ -->
            <div class="control-group ">
                <input type="checkbox" value="on" id="krug_status" name="krug_status">
                <label for="krug_status"> Закругление углов</label>

                <div id="krug-info">
                    <label for="krug_status"><strong>+ 0,6 грн.</strong> за 10 шт.</label>
                </div>
            </div>
            <!-- ================= ZAKRUGLENIE - END ================ -->

            <!-- ================= BIGOVKA - START ================ -->
            <div class="control-group ">
                <input type="checkbox" value="on" id="bigovka_status" name="bigovka_status">
                <label for="bigovka">Биговка (канавка для сгиба):</label>

                <div class="hidden-options" id="bigparam">
                    <select id="bigovka" name="bigovka">
                        <option value="1">1 биг&nbsp; &nbsp;&nbsp; &mdash; 1.00 грн.</option>
                        <option value="2">2 бига&nbsp;&nbsp;&nbsp; &mdash; 2.00 грн.</option>
                        <option value="3">3 бига&nbsp;&nbsp;&nbsp; &mdash; 3.00 грн.</option>
                        <option value="4">4 бига&nbsp;&nbsp;&nbsp; &mdash; 4.00 грн.</option>
                        <option value="5">5 бигов &mdash; 5.00 грн.</option>
                        <option value="6">6 бигов &mdash; 6.00 грн.</option>
                        <option value="7">7 бигов &mdash; 7.00 грн.</option>
                        <option value="8">8 бигов &mdash; 8.00 грн.</option>
                        <option value="9">9 бигов &mdash; 9.00 грн.</option>
                    </select> - 100.00 грн. за 1000
                </div>
            </div>
            <!-- ================= BIGOVKA - END ================ -->

            <!-- ================= FALCOVKA - START ================ -->
            <div class="control-group ">
                <input type="checkbox" value="on" id="falc_status" name="falc_status">
                <label for="falc_status">Фальцовка (сгиб): <span id="falc-info">100.00 грн. за 1000</span></label>
            </div>
            <!-- ================= FALCOVKA - START ================ -->

            <!-- ================= PERFORACIYA - START ================ -->
            <div class="control-group ">
                <input type="checkbox" value="on" id="perf_status" name="perf_status">
                <label for="perf_status"> Перфорация:</label>

                <div class="hidden-options" id="perfp">
                    <select id="perforation" name="perforation">
                        <option value="1">1 проход&nbsp;&mdash; 1.00 грн.</option>
                        <option value="2">2 прохода &mdash; 2.00 грн.</option>
                        <option value="3">3 прохода &mdash; 3.00 грн.</option>
                        <option value="4">4 прохода &mdash; 4.00 грн.</option>
                        <option value="5">5 проходов &mdash; 5.00 грн.</option>
                        <option value="6">6 проходов &mdash; 6.00 грн.</option>
                        <option value="7">7 проходов &mdash; 7.00 грн.</option>
                        <option value="8">8 проходов &mdash; 8.00 грн.</option>
                        <option value="9">9 проходов &mdash; 9.00 грн.</option>
                    </select> - 100.00 грн. за 1000
                </div>
            </div>
            <!-- ================= PERFORACIYA - START ================ -->

            <!-- ================= POREZKA - START ================ -->
            <div class="control-group ">
                <input type="checkbox" value="on" id="porezka_status" name="porezka_status">
                <label for="porezka_status"> Дополнительный рез:</label>

                <div class="hidden-options" id="cuttings">
                    <select id="cutting" name="cutting">
                        <option value="1">1 рез&nbsp; &ndash; 0.20 грн.</option>
                        <option value="2">2 реза &ndash; 0.40 грн.</option>
                        <option value="3">3 реза &ndash; 0.60 грн.</option>
                        <option value="4">4 реза &ndash; 0.80 грн.</option>
                        <option value="5">5 резов &ndash; 1.00 грн.</option>
                    </select> - 20.00 грн. за 1000
                    <br/>
                    <span class="info">минимальный формат порезки 50х45мм</span>
                </div>
            </div>
            <!-- ================= POREZKA - START ================ -->

            <!-- ================= ZAKRUGLENIE - START ================ -->
            <div class="control-group ">
                <input type="checkbox" value="on" id="drilling_status" name="drilling_status">
                <label for="drilling"> Сверление, ∅ 6мм</label>

                <div id="drilling-info">
                    <label for="drilling-info">
                        <strong>+ 0,5 грн.</strong> за 10 шт.
                    </label>
                </div>
            </div>
            <!-- ================= ZAKRUGLENIE - START ================ -->

            <!-- /////////////////////////// AFTER PRINT ACTIONS ////////////////////// -->
        </form>

    </div>

</div>
</body>
</html>