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
    <meta name="description" content="Типографические услуги - заказ Визитка (50х90мм)">
    <meta name="keywords" content="Типографические услуги - заказ Визитка (50х90мм)">
    <meta name="author" content="uxenus">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/angular.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>

    <script type="text/javascript">
        $(".control-group").live('hover', function () {
            $(".control-group").popover('hide');
            $(this).popover('toggle');
        });
    </script>

</head>

<body>

<div id="container" class="shadow">

<h2>Визитка (50х90мм)</h2>

<br/>

<ul>
    <li><a href="/">Назад</a></li>
</ul>


<div class="left-sidebar span12">

<form id="zakaz_vizitka" enctype="multipart/form-data" action="zakaz.php">

<!-- ================= NAME OF ZAKAZ - START ================ -->
<div class="control-group span12"
     data-toggle="popover"
     data-content="Введите название вашего заказа. Используйте понятные названия."
     data-placement="top"
     data-original-title="ИНФОРМАЦИЯ!">

    <label for="name" class="control-label"><h6 id="name-of-zakaz">Название Заказа</h6></label>

    <div class="controls">
        <input type="text" value="" name="name"
               placeholder="Введите название заказа" class="span11" maxlength="150" required="true"
               id="name">
    </div>
</div>
<!-- ================= NAME OF ZAKAZ - END ================ -->

<!-- /////////////////// MAIN SETTINGS - START //////////////// -->
<div id="main_setting" class="span6">

    <!-- ================= PRODUCT COUNT - START ================ -->
    <div class="control-group" data-toggle="popover"
         data-content="Введите количество визиток которое вы хотите заказать... используйте только цифры! Минимальное количество 10шт."
         data-placement="top" data-original-title="ИНФОРМАЦИЯ!">
        <label for="name" class="control-label"><h6>Количество визиток (шт.)</h6></label>

        <div class="controls">
            <input type="number" min="50" step="50" maz="10000" value="" name="count"
                   placeholder="Введите количество визиток (мин. 10шт.)" class="span5" maxlength="40"
                   required="true"
                   id="count">
        </div>
    </div>
    <!-- ================= PRODUCT COUNT - END ================ -->

    <!-- ================= LAMINAT - START ================ -->
    <div class="control-group" data-toggle="popover"
         data-content="Выберите тип бумаги для печати (плотность)."
         data-placement="top" data-original-title="ИНФОРМАЦИЯ!">
        <label for="paper_type"><h6>Выберите тип бумаги для печати (плотность)</h6></label>

        <div id="paperparam">
            <select id="paper_type" name="paper_type" class="span5">
                <option title="80 г/м2 офсет" value="ofs80">80 г/м2 офсет</option>
                <option title="90 г/м2 офсет" value="mel90">90 г/м2 мел</option>
                <option title="115 г/м2 офсет" value="mel115">115 г/м2 мел</option>
                <option title="130 г/м2 офсет" value="mel130">130 г/м2 мел</option>
                <option title="150 г/м2 мел" value="mel150">150 г/м2 мел</option>
                <option title="200 г/м2 мел" value="mel200">200 г/м2 мел</option>
                <option title="250 г/м2 мел" value="mel250">250 г/м2 мел</option>
                <option title="300 г/м2 мел" value="mel300">300 г/м2 мел</option>
                <option title="350 г/м2 мел" value="mel350">350 г/м2 мел</option>
                <option title="Самоклейка" value="samokl">Самоклейка</option>
            </select>
        </div>
    </div>
    <!-- ================= LAMINAT - END ================ -->

    <!-- ================= COLOR OF PRINT - START ================ -->
    <div class="control-group" data-toggle="popover"
         data-content="Выберите цветность печати: 4+0 - односторонняя, 4+4 - двухсторонняя. При печати используется 4 цвета."
         data-placement="top" data-original-title="ИНФОРМАЦИЯ!">
        <h6>Цветность печати:</h6>

        <input class="radio_ch" type="radio" name="color_mode" id="color_4_0" value="half" checked="checked"> <label
            for="color_4_0"
            class="radio-inline"><span>односторонняя (4+0)</span></label>
        <input class="radio_ch" type="radio" name="color_mode" id="color4_4" value="full"> <label
            for="color4_4"
            class="radio-inline"><span>двусторонняя (4+4)</span></label>

    </div>
    <!-- ================= COLOR OF PRINT - END ================ -->


    <!-- ================= MAKET UPLOAD - START ================ -->
    <div class="control-group" data-toggle="popover"
         data-content="Загрузите файл макета для визитки. Если у вас нет макета - вы можете заказать дизайн макета у нас."
         data-placement="top" data-original-title="ВНИМАНИЕ!">
        <label for="upload" class="control-label"><h6>Загрузка МАКЕТА ВИЗИТКИ</h6></label>

        <input type="file" id="upload_maket" name="upload_maket">

    </div>
    <!-- ================= MAKET UPLOAD - END ================ -->

    <!-- ================= MSG - START ================ -->
    <div class="control-group">

        <label for="name" class="control-label"><h6>Комментарий к заказу</h6></label>

        <div class="controls">
            <textarea type="text" name="message"
                      placeholder="Вы можете оставить комментарий к заказу"
                      class="span5"
                      id="message"></textarea>
        </div>
    </div>
    <!-- ================= MSG - END ================ -->

</div>
<!-- /////////////////// MAIN SETTINGS - END //////////////// -->

<!-- /////////////////// AFTER PRINT SETTINGS - START //////////////// -->
<div id="after_print_settings" class="span6">
    <!-- /////////////////////////// AFTER PRINT ACTIONS ////////////////////// -->

    <!-- ================= LAMINAT - START ================ -->
    <div class="control-group after_print" data-toggle="popover"
         data-content="Выберите тип ламинации после печати (покрытие плёнкой)."
         data-placement="top" data-original-title="ИНФОРМАЦИЯ!">
        <input type="checkbox" value="on" id="laminat_status" name="laminat_status">
        <label for="laminat_status"><span class="label_info">Ламинация</span></label>

        <div id="laminatparam">
            <select id="laminat" name="laminat" class="" disabled>
                <option title="1.00" value="g1_0">1+0 глянцевая УльтраБонд</option>
                <option title="2.00" value="g1_1">1+1 глянцевая УльтраБонд</option>
                <option title="1.25" value="m1_0">1+0 матовая УльтраБонд</option>
                <option title="2.50" value="m1_1">1+1 матовая УльтраБонд</option>
            </select>
        </div>
    </div>
    <!-- ================= LAMINAT - END ================ -->

    <!-- ================= ZAKRUGLENIE - START ================ -->
    <div class="control-group after_print" data-toggle="popover"
         data-content="Визитки выглядят более привлекательно с закругленными углами."
         data-placement="top" data-original-title="ИНФОРМАЦИЯ!">
        <input type="checkbox" value="on" id="krug_status" name="krug_status">
        <label for="krug_status"><span class="label_info">Закругление углов</span></label>

        <div id="krug-info">
            <label for="krug_status"><strong>+ 0,6 грн.</strong> за 10 шт.</label>
        </div>
    </div>
    <!-- ================= ZAKRUGLENIE - END ================ -->

    <!-- ================= BIGOVKA - START ================ -->
    <div class="control-group after_print" data-toggle="popover"
         data-content="Введите название вашего заказа. Используйте понятные названия."
         data-placement="top" data-original-title="ИНФОРМАЦИЯ!">
        <input type="checkbox" value="on" id="bigovka_status" name="bigovka_status">
        <label for="bigovka_status"><span class="label_info">Биговка (канавка для сгиба):</span></label>

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
    <div class="control-group after_print" data-toggle="popover"
         data-content="Введите название вашего заказа. Используйте понятные названия."
         data-placement="top" data-original-title="ИНФОРМАЦИЯ!">
        <input type="checkbox" value="on" id="falc_status" name="falc_status">
        <label for="falc_status"><span class="label_info">Фальцовка (сгиб):</span> <span id="falc-info">100.00 грн. за 1000</span></label>
    </div>
    <!-- ================= FALCOVKA - START ================ -->

    <!-- ================= PERFORACIYA - START ================ -->
    <div class="control-group after_print" data-toggle="popover"
         data-content="Введите название вашего заказа. Используйте понятные названия."
         data-placement="top" data-original-title="ИНФОРМАЦИЯ!">
        <input type="checkbox" value="on" id="perf_status" name="perf_status">
        <label for="perf_status"><span class="label_info">Перфорация:</span></label>

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
    <div class="control-group after_print" data-toggle="popover"
         data-content="Минимальный формат порезки 50х45мм."
         data-placement="top" data-original-title="ИНФОРМАЦИЯ!">
        <input type="checkbox" value="on" id="porezka_status" name="porezka_status">
        <label for="porezka_status"><span class="label_info">Дополнительный рез:</label>

        <div class="hidden-options" id="cuttings">
            <select id="cutting" name="cutting">
                <option value="1">1 рез&nbsp; &ndash; 0.20 грн.</option>
                <option value="2">2 реза &ndash; 0.40 грн.</option>
                <option value="3">3 реза &ndash; 0.60 грн.</option>
                <option value="4">4 реза &ndash; 0.80 грн.</option>
                <option value="5">5 резов &ndash; 1.00 грн.</option>
            </select> - 20.00 грн. за 1000
            <br/>
        </div>
    </div>
    <!-- ================= POREZKA - START ================ -->

    <!-- ================= ZAKRUGLENIE - START ================ -->
    <div class="control-group after_print" data-toggle="popover"
         data-content="Введите название вашего заказа. Используйте понятные названия."
         data-placement="top" data-original-title="ИНФОРМАЦИЯ!">
        <input type="checkbox" value="on" id="drilling_status" name="drilling_status">
        <label for="drilling_status"><span class="label_info">Сверление, ∅ 6мм</span></label>

        <div id="drilling-info">
            <strong>+ 0,5 грн.</strong> за 10 шт.
        </div>
    </div>
    <!-- ================= ZAKRUGLENIE - START ================ -->
</div>
<!-- /////////////////////////// AFTER PRINT ACTIONS ////////////////////// -->

<!-- /////////////////// AFTER PRINT SETTINGS - END //////////////// -->

<div class="clearfix span10">
    <input id="btn-zakaz" type="submit" value="Заказать" class="btn btn-success span3">
</div>


</form>

</div>

</div>
</body>
</html>