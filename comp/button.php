<?php
    echo file_get_contents('http://sd-03.lundev.net/lun-supernova/_import/head.html');
    echo file_get_contents('http://sd-03.lundev.net/lun-supernova/_import/menu.html');
    ?>

<title>Кнопки</title>

<style>
</style>


<div class="container">

    <div class="row">
		<div class="col-sm-12">

			<div class="page-header">
			  <h1>Кнопки</h1>
			</div>
		</div>
	</div>



	<div class="row">
		<div class="col-sm-12">

			<h3>Тип <small>type</small></h3>
		</div>
	</div>


	<div class="row mt_xl">
		<div class="col-sm-4">
            <p>Плоские и объёмные.</p>
            <p>Плоские используются на белом фоне.</p>
		</div>
		<div class="col-sm-8">
			<img src="_img/comp/button/type.png" class="img-responsive" />
		</div>
	</div>



	<div class="row mt_xl">
		<div class="col-sm-12">
			<hr>
			<h3>Размер <small>size</small></h3>
		</div>
	</div>
	<div class="row mt_xl">
		<div class="col-sm-4">
            <p>XS, S, M, L</p>
			<p>Размер М — стандартный.</p>

		</div>
		<div class="col-sm-8">
			<img src="_img/comp/button/size.png" class="img-responsive" />
		</div>
	</div>



    <div class="row mt_xl">
		<div class="col-sm-12">
			<hr>
			<h3>Приоритет <small>priority</small></h3>
		</div>
	</div>
	<div class="row mt_xl">
		<div class="col-sm-4">
            <p>Первостепенные и второстепенные</p>
		</div>
		<div class="col-sm-8">
			<img src="_img/comp/button/priority.png" class="img-responsive" onmouseover="this.src='_img/comp/button/priority-hover.png';" onmouseout="this.src='_img/comp/button/priority.png';"/>
            Наведите на картинку для состояния hover
		</div>
	</div>



    <div class="row">
		<div class="col-sm-12">

			<div class="page-header">
                <h1>Группы кнопок</h1>
			</div>

		</div>
	</div>

    <div class="row">
		<div class="col-sm-4">
    			<p>Объединяя кнопки в группы ключевое действие размещаем справа.</p>
    			<p>Не рекомендуется объединять плоские и объемные кнопки в одну группу.</p>
		</div>
        <div class="col-sm-8">
            <img src="_img/comp/button/group.png" class="img-responsive" />
        </div>
	</div>





</div>


<?php
    echo file_get_contents('http://sd-03.lundev.net/lun-supernova/_import/foot.html');
?>
