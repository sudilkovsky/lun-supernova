<?php
    echo file_get_contents('http://sd-03.lundev.net/lun-supernova/_import/head.html');
    echo file_get_contents('http://sd-03.lundev.net/lun-supernova/_import/menu.html');
    ?>

<title>Таблицы</title>

<style>
</style>


<div class="container">
	<div class="row">
		<div class="col-sm-12">

			<div class="page-header">
			  <h1>Таблицы  <small>Data</small></h1>
			</div>

		</div>
	</div>
	<div class="row">
		<div class="col-sm-4">

			<p>Представление табличных данных.</p>

		</div>
		<div class="col-sm-8">
			<img src="_img/comp/table/example.png" class="img-responsive" />
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<hr>
			<h3>Структура и отступы</h3>
		</div>
	</div>
	<div class="row mt_xl">
		<div class="col-sm-4">
			<p>В таблицах высота строк задается константной, а&nbsp;не&nbsp;формируется отступами от контента до&nbsp;границы ячейки.</p>
			<p>Названия столбцов набраны <code>.body-xs</code>. Содержимое таблицы <code>.body-1</code>.</p>
			<p>Подробнее <a href="typo.php">о типографике</a>.</p>
		</div>
		<div class="col-sm-8">
			<img src="_img/comp/table/structure.png" class="img-responsive" />
		</div>
	</div>
	<div class="row mt_xl">
		<div class="col-sm-4">
			<p>Содержимое строки может быть многострочным.</p>
		</div>
		<div class="col-sm-8">
			<img src="_img/comp/table/doblerow.png" class="img-responsive" />
		</div>
	</div>


</div>


<?php
    echo file_get_contents('http://sd-03.lundev.net/lun-supernova/_import/foot.html');
?>
