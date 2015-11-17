<?php
    echo file_get_contents('http://sd-03.lundev.net/lun-supernova/_import/head.html');
    echo file_get_contents('http://sd-03.lundev.net/lun-supernova/_import/menu.html');
    ?>

<title>Структура</title>

<style>
</style>


<div class="container">

	<div class="row">
		<div class="col-sm-12">

			<div class="page-header">
			  <h1>Структура</h1>
			</div>

		</div>
	</div>

	<div class="row">
		<div class="col-sm-8">
			<p>Используем 12-колоночную структуру. Ширина отступа между колонками — 24dp.</p>
		</div>
	</div>

    <div class="row">
		<div class="col-sm-4">
			<h3>Десктоп</h3>
		</div>
    </div>
    <div class="row">
        <div class="col-sm-4">
			<p>1200dp ≤ ширина контента </p>
		</div>
        <div class="col-sm-8">
			<img src="_img/structure/structure-desktop.png" class="img-responsive" />
		</div>
	</div>


    <div class="row">
		<div class="col-sm-4">
			<h3>Ландшафт</h3>
		</div>
    </div>
    <div class="row">
        <div class="col-sm-4">
			<p>940dp ≤ ширина контента < 1200dp</p>
		</div>
        <div class="col-sm-8">
			<img src="_img/structure/structure-landscape.png" class="img-responsive" />
		</div>
	</div>


    <div class="row">
        <div class="col-sm-4">
            <h3>Портрет</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <p>726dp ≤ ширина контента < 940dp</p>
        </div>
        <div class="col-sm-8">
            <img src="_img/structure/structure-portrait.png" class="img-responsive" />
        </div>
    </div>


    <div class="row">
        <div class="col-sm-4">
            <h3>Мобильный</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <p>ширина контента < 726dp</p>
        </div>
        <div class="col-sm-8">
            <img src="_img/structure/structure-mobile.png" class="img-responsive" />
        </div>
    </div>


</div>




<?php
    echo file_get_contents('http://sd-03.lundev.net/lun-supernova/_import/foot.html');
?>
