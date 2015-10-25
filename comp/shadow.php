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
			<h5>Карточка</h5>
		</div>
	</div>
	<div class="row mt_s">
		<div class="col-sm-6">
			<p>Обычное состояние:
				<br/>
				<code>box-shadow: 0 1px 2px rgba(5, 5, 6, 0.1);</code>
			</p>
			
			<p>При наведении: <br/><code>box-shadow: 0 0px 8px rgba(5, 5, 6, 0.28);</code></p>
		</div>

		<div class="col-sm-6"> 
			<img src="_img/comp/shadow/shadow-card.png" class="img-responsive"/>
		</div>
	</div>


	<div class="row">
		<div class="col-sm-12">
			<hr>
			<h5>Элементы управления</h5>
		</div>
	</div>
	<div class="row mt_s">
		<div class="col-sm-6">
			<p>Обычное состояние:
				<br/>
				<code>box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
				</code>
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
