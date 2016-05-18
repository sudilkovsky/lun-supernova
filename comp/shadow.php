<?php
    echo file_get_contents('http://sd-03.lundev.net/lun-supernova/_import/head.html');
    echo file_get_contents('http://sd-03.lundev.net/lun-supernova/_import/menu.html');
    ?>

<title>Тени</title>

<style>
	.background-card {
		background-color: #f5f5f5;
        padding: 16px;
	}

    p.comment {
        color: #9E9E9E;
    }
    .card {
        background-color: rgba(255, 255, 255, 0.0);

        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);

        background-image:url("_img/comp/shadow/card.png");

        width: 220px;
        border-radius: 2px;

        display: block;
        margin-left: auto;
        margin-right: auto;

        transition: box-shadow 0.2s ease-in-out;
	}

    .card:hover {
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
	}

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
			<p>Тени исполняют функцию обозначения иерархии элементов на экране. Чем больше подъем — тем больше тень.</p>
		</div>
	</div>


	<div class="row">
		<div class="col-sm-12">
			<hr>
			<h3>Типы</h3>
		</div>
	</div>

    <div class="row mt_s">
		<div class="col-sm-4">

			<p>S
				<br/>
				<code>box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);</code>
			</p>

			<p>M
				<br/>
				<code>box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);</code>
			</p>

            <p>L
				<br/>
				<code>box-shadow: 0 4px 16px rgba(0, 0, 0, 0.15);</code>
			</p>

		</div>

		<div class="col-sm-8">
			<img src="_img/comp/shadow/types.png" class="img-responsive"/>
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
		<div class="col-sm-4">
			<p>Обычное состояние:
				<br/>
				<code>S</code>
			</p>

			<p>При наведении:
				<br/>
                <code>L</code>
			</p>
		</div>

		<div class="col-sm-8">
            <img src="_img/comp/shadow/card.png" class="img-responsive"/>
		</div>
	</div>


	<div class="row">
		<div class="col-sm-12">
			<h5>Элементы управления</h5>
		</div>
	</div>

	<div class="row mt_s">
		<div class="col-sm-4">
			<p>Обычное состояние:
				<br/>
				<code>S</code>
			</p>
		</div>

		<div class="col-sm-8">
			<img src="_img/comp/shadow/controls.png" class="img-responsive"/>
		</div>
	</div>

</div>


<?php
    echo file_get_contents('http://sd-03.lundev.net/lun-supernova/_import/foot.html');
?>
