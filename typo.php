<?php
    echo file_get_contents('http://sd-03.lundev.net/lun-supernova/_import/head.html');
    echo file_get_contents('http://sd-03.lundev.net/lun-supernova/_import/menu.html');
    ?>

<title>Типографика</title>

<style>
.body-xs, 
.body-1, 
.body-2, 
.h1-1, 
.h2-1, 
.h3-1, 
.h4-1, 
.h4-2, 
.h5-1, 
.h5-2 {
	font-family: 'Open Sans';
	color: #333;
	font-weight: 400;
}
.body-xs {
	font-size: 13px;
	line-height: 20px;
}
.body-1 {
	font-size: 15px;
	line-height: 20px;
	padding-bottom: 4px;
}
.body-2 {
	font-size: 15px;
	line-height: 24px;
	padding-bottom: 4px;
}
.h5-1 {
	font-size: 15px;
	line-height: 20px;
	font-weight: bold;
	padding-bottom: 4px;
}
.h5-2 {
	font-size: 15px;
	line-height: 24px;
	font-weight: bold;
	padding-bottom: 4px;
}
.h4-1 {
	font-size: 20px;
	line-height: 24px;
}
.h4-2 {
	font-size: 20px;
	line-height: 28px;
}
.h3-1 {
	font-size: 26px;
	line-height: 32px;
}
.h2-1 {
	font-size: 38px;
	line-height: 52px;
}
.h1-1 {
	font-size: 45px;
	line-height: 48px;
}
</style>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
				
			<div class="page-header">
			  <h1>Типографика <small>Заголовки, параграфы, тексты</small></h1>
			</div>
			
		</div>
	</div>
	<div class="row">
		<div class="col-sm-8">
			<p>Используем классы для определения внешнего вида элементов. Это дает большую степень свободы при разметке.</p>
			<p>Основной и единственный шрифт: <a href="https://www.google.com/fonts#UsePlace:use/Collection:Open+Sans" target="_blank">Open Sans</a> в начертаниях жирностью 400, 600 и 800.</p>
			<p>Для заголовков и текстовых блоков доступны модификаторы <code>-1</code> и <code>-2</code>. -1 используется для широких колонок, -2 для узких (содержит увеличенный межстрочный интервал).</p>
			
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<h3>Заголовки</h3>
		</div>
	</div>
	<div class="row mt_xl">
		<div class="col-sm-6 h1-1">
			Head Title .h1-1
		</div>
		<div class="col-sm-4">
			<pre>
.h1-1 {
	font-size: 45px;
	line-height: 48px;
}</pre>
		</div>
		<div class="col-sm-6 h2-1">
			Head Title .h2-1
		</div>
		<div class="col-sm-4">
			<pre>
.h2-1 {
	font-size: 38px;
	line-height: 52px;
}</pre>
		</div>
		<div class="col-sm-6 h3-1">
			Head Title .h3-1
		</div>
		<div class="col-sm-4">
			<pre>
.h3-1 {
	font-size: 26px;
	line-height: 32px;
}</pre>
		</div>
		<div class="col-sm-6 h4-1">
			Head Title .h4-1
		</div>
		<div class="col-sm-4">
			<pre>
.h4-1 {
	font-size: 20px;
	line-height: 24px;
}</pre>
		</div>
		<div class="col-sm-6 h4-2">
			Head Title .h4-2
		</div>
		<div class="col-sm-4">
			<pre>
.h4-2 {
	font-size: 20px;
	line-height: 28px;
}</pre>
		</div>
		<div class="col-sm-6 h5-1">
			Head Title .h5-1
		</div>
		<div class="col-sm-4">
			<pre>
.h5-1 {
	font-size: 15px;
	line-height: 20px;
	font-weight: bold;
	padding-bottom: 4px;
}</pre>
		</div>
		<div class="col-sm-6 h5-2">
			Head Title .h5-2
		</div>
		<div class="col-sm-4">
			<pre>
.h5-2 {
	font-size: 15px;
	line-height: 24px;
	font-weight: bold;
	padding-bottom: 4px;
}</pre>
		</div>
	</div>
	
	<div class="row">
		<div class="col-sm-12">
			<h3>Текстовые блоки</h3>
		</div>
	</div>
	<div class="row mt_xl">
		<div class="col-sm-6">
			<div class="body-1">Параграф body-1. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Maecenas faucibus mollis interdum. Nullam id dolor id nibh ultricies vehicula ut id elit. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</div>
		</div>
		<div class="col-sm-4">
			<pre>
.body-1 {
	font-size: 15px;
	line-height: 20px;
	padding-bottom: 4px;
}</pre>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="body-2" style="padding-right: 40%;">Параграф body-2. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Maecenas faucibus mollis interdum. </div>
		</div>
		<div class="col-sm-4">
			<pre>
.body-2 {
	font-size: 15px;
	line-height: 24px;
	padding-bottom: 4px;
}</pre>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="body-xs">Параграф body-xs. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</div>
		</div>
		<div class="col-sm-4">
			<pre>
.body-xs {
	font-size: 13px;
	line-height: 20px;
}</pre>
		</div>
	</div>
</div>


<?php
    echo file_get_contents('http://sd-03.lundev.net/lun-supernova/_import/foot.html');
?>
