<?php
    echo file_get_contents('http://sd-03.lundev.net/lun-supernova/_import/head.html');
    echo file_get_contents('http://sd-03.lundev.net/lun-supernova/_import/menu.html');
    ?>

<title>Карточки</title>

<style>
</style>


<div class="container">
	<div class="row">
		<div class="col-sm-12">
				
			<div class="page-header">
			  <h1>Карточки</h1>
			</div>
			
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4">

			<p>Используются для вывода однотипной информации в виде плитки или списка, а так же для разбития контента на логические блоки на странице. Содержимое карточки состоит из отдельных блоков, которые могут дополняться и изменяться не нарушая правил построения карточек в <a href="http://www.google.com/design/spec/components/cards.html#">Google Material Design.</a></p>
			
		</div>
		<div class="col-sm-8">
			<img src="_img/comp/card/card-example.png" class="img-responsive" />
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<hr>
			<h3>Блоки-конструкторы карточки</h3>
		</div>
	</div>
	<div class="row mt_xl">
		<div class="col-sm-4">
			<h5>Медиа</h5>
			<p><code>__media</code></p>
			<p>Изображения или видео на фоне. Поверх при необходимости выводится контент и/или элементы управления.</p>
			<p>Контент отображается в блоках строгих пропорций 1:1 или 4:3.</p>
			<p>При разработке шаблонов настоятельно рекомендуется ограничить и стандартизировать размеры изображений для снижения нагрузки на&nbsp;сервер.</p>
		</div>
		<div class="col-sm-8">
			<img src="_img/comp/card/card__media.png" class="img-responsive" />
		</div>
	</div>
	<div class="row mt_s">
		<div class="col-sm-4">
			<p>Отступы внутри блока Медиа диктуются содержимым. Например, Заголовки отступают на 16dp, а Действия &mdash; на 8dp.</p>
		</div>
		<div class="col-sm-8">
			<img src="_img/comp/card/card__media_structure.png" class="img-responsive" />
		</div>
	</div>
	<div class="row mt_s">
		<div class="col-sm-4">
			<p>Для повышения контраста текста на фоне пестрых изображений используем градиент.<br />
				<code>background-image: linear-gradient(-180deg, rgba(0,0,0,0.00) 0%, rgba(60,69,73,0.79) 100%);</code></p>
			<p>При необходимости еще большего повышения контраста к тексту добавляем тень.<br /><code>text-shadow: 0px 0px 4px rgba(0,0,0,0.50);</code></p>
		</div>
		<div class="col-sm-8">
			<img src="_img/comp/card/card__media_structure_show-shadow.png" class="img-responsive" />
		</div>
	</div>
	<div class="row mt_xl">
		<div class="col-sm-4">
			<h5>Заголовок</h5>
			<p><code>__title</code></p>
			<p>Размер заголовков подбирается исходя из&nbsp;размера карточки но только из списка <a href="typo.php">Типографики</a>.</p>
		</div>
		<div class="col-sm-8">
			<img src="_img/comp/card/card__titles.png" class="img-responsive" />
		</div>
	</div>
	<div class="row mt_xl">
		<div class="col-sm-4">
			<h5>Контент</h5>
			<p><code>__content</code></p>
			<p>Пример строчных текстовых блоков и&nbsp;параграфов. </p>
			<p>При наборном тексте отступ между параграфами равен одной пустой строке.</p>
		</div>
		<div class="col-sm-8">
			<img src="_img/comp/card/card__content.png" class="img-responsive" />
		</div>
	</div>
	<div class="row mt_xl">
		<div class="col-sm-4">
			<h5>Действие</h5>
			<p><code>__action</code></p>
			<p>Блок действий содержит кнопки, которые имеют собственный внутренние отступы. </p>

		</div>
		<div class="col-sm-8">
			<img src="_img/comp/card/card__action.png" class="img-responsive" />
		</div>
	</div>
	<div class="row mt_s">
		<div class="col-sm-4">
			<h6>Кликабельная зона</h6>
			<p>Если другого не определено, вся карточка кликабельна. Но зоны клика могут отвечать за различные действия. Например, клик на изображения сделает переход на другую страницу, клик на сердечке добавит в избранное, а клик на кнопку «попробовать» &mdash; добавит товар в корзину.</p>

		</div>
		<div class="col-sm-8">
			<img src="_img/comp/card/card__action_click-area.png" class="img-responsive" />
		</div>
	</div>
	<div class="row mt_xl">
		<div class="col-sm-4">
			<h5>Разделитель</h5>
			<p><code>__break</code></p>
			<p>Если в карточке большое количество элементов их можно разделить на группы.</p>

		</div>
		<div class="col-sm-8">
			<img src="_img/comp/card/card__break.png" class="img-responsive" />
		</div>
	</div>
	
	
	
	<div class="row mt_xl">
		<div class="col-sm-12">
			<hr>
			<h3>Горизонтальные карточки</h3>
		</div>
	</div>
	<div class="row mt_xl">
		<div class="col-sm-4">
			<p>В частных случаях может понадобится использование горизонтальных карточек с контентом неопределенного размера (например, текст объявления). Рекомендуем придерживаться следующего алгоритма разработки:</p>
			<p>1. Определить высоту карточки. Для сохранения ясного ритма рекомендуем высоту делать кратной 16dp (в идеале 32dp).</p>
			<p>2. Выбрать место для динамического отступа. В примере Заголовок и Контент «прилипают» к&nbsp;верхней границе карточки, а блок Действия &mdash; к&nbsp;нижней.</p>
			<p>3. Задать правила и ограничения для контента. Как будет отображаться карточка, если текста объявления будет в 2 раза больше, а заголовок в две строки?</p>

		</div>
		<div class="col-sm-8">
			<img src="_img/comp/card/card-horizontal-card.png" class="img-responsive" />
		</div>
	</div>


</div>


<?php
    echo file_get_contents('http://sd-03.lundev.net/lun-supernova/_import/foot.html');
?>
