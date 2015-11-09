<?php
    echo file_get_contents('http://sd-03.lundev.net/lun-supernova/_import/head.html');
    echo file_get_contents('http://sd-03.lundev.net/lun-supernova/_import/menu.html');
    ?>

<title>Тени</title>

<style>
</style>


<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="page-header">
			  <h1>Тени  <small>  </small></h1>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-8">
			<p>Используем чтобы показать, как объекты расположены друг относительно друга.</p>
			<p>Тени исполняют функцию обозначения иерархии элементов на экране. Например, если подъем элемента больше, то и тень у него больше.</p>
			<p>Эта увеличенная глубина помогает сфокусировать внимание пользователя.</p>
		</div>
	</div>


	<div class="row">
		<div class="col-sm-12">
			<hr>
			<h3>Типы</h3>
		</div>
	</div>

    <div class="row mt_s">
		<div class="col-sm-6">

			<p>S:
				<br/>
				<code>box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);</code>
			</p>

			<p>M:
				<br/>
				<code>box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);</code>
			</p>

			<p>L:
				<br/>
				<code>box-shadow: 0 0 8px rgba(0, 0, 0, 0.3);</code>
			</p>

		</div>

		<div class="col-sm-6">
			<img src="_img/comp/shadow/shadow-types.png" class="img-responsive"/>
		</div>
	</div>



   <div class="row">
		<div class="col-sm-12">
			<hr>
			<h3>Использование</h3>
		</div>
	</div>

    <div class="row">
		<div class="col-sm-12">
			<h5>Карточка</h5>
		</div>
	</div>

	<div class="row mt_s">
		<div class="col-sm-6">
			<p>Обычное состояние:
				<br/>
				<code>S</code>
			</p>

			<p>При наведении
				<br/>
				<code>L</code>
			</p>
		</div>

		<div class="col-sm-6">
			<img src="_img/comp/shadow/shadow-card.png" class="img-responsive"/>
		</div>
	</div>


	<div class="row">
		<div class="col-sm-12">
			<h5>Элементы управления</h5>
		</div>
	</div>

	<div class="row mt_s">
		<div class="col-sm-6">
			<p>Обычное состояние:
				<br/>
				<code>M</code>
			</p>
		</div>

		<div class="col-sm-6">
			<img src="_img/comp/shadow/shadow-element.png" class="img-responsive"/>
		</div>
	</div>

</div>


<?php
    echo file_get_contents('http://sd-03.lundev.net/lun-supernova/_import/foot.html');
?>
