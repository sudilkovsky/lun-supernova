<?php
    echo file_get_contents('http://sd-03.lundev.net/lun-supernova/_import/head.html');
    echo file_get_contents('http://sd-03.lundev.net/lun-supernova/_import/menu.html');
    ?>

<title>Интерфейсная сетка</title>

<style>
</style>


<div class="container">
	<div class="row">
		<div class="col-sm-12">
				
			<div class="page-header">
			  <h1>Интерфейсная сетка <small>размеры и отступы</small></h1>
			</div>
			
		</div>
	</div>
	<div class="row">
		<div class="col-sm-8">
			<p><b>8dp</b> &mdash; минимальный шаг, по которому выстраиваются все элементы интерфейса и отступы между ними. Половинчатый шаг (4dp) используется в крайних случаях, преимущественно для визуальной отбивки сестринских объектов найнизшего уровня.</p>
			<p><small>*dp &mdash; display pixel</small></p>
			
			
		</div>
	</div>
	<div class="row">
		<div class="col-sm-8">
			<h3>Отступы</h3>
			<p>Выделенные размеры наиболее рекомендуемые для использования как в качестве внешних, так и&nbsp;внутренних отступов.</p>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-5 col-sm-3">
			<table class="table table-condensed">
				<tr>
					<td>xs</td>
					<td>4</td>
				</tr>
				<tr class="active">
					<td>s</td>
					<td>8</td>
				</tr>
				<tr class="active">
					<td>m</td>
					<td>16</td>
				</tr>
				<tr class="active">
					<td>l</td>
					<td>24</td>
				</tr>
				<tr>
					<td>xl</td>
					<td>32</td>
				</tr>
				<tr>
					<td>xxl</td>
					<td>48</td>
				</tr>
				<tr>
					<td>xxxl</td>
					<td>96</td>
				</tr>
				<tr>
					<td>4xl</td>
					<td>128</td>
				</tr>
				<tr>
					<td>5xl</td>
					<td>256</td>
				</tr>
				<tr>
					<td>6xl</td>
					<td>384</td>
				</tr>
				<tr>
					<td>7xl</td>
					<td>480</td>
				</tr>
			</table>
		</div>
	</div>
</div>


<?php
    echo file_get_contents('http://sd-03.lundev.net/lun-supernova/_import/foot.html');
?>
