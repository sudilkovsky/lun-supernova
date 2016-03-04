<?php
    echo file_get_contents('http://sd-03.lundev.net/lun-supernova/_import/head.html');
    echo file_get_contents('http://sd-03.lundev.net/lun-supernova/_import/menu.html');
    ?>

<title>Цвета</title>

<style>
	.color-box {
		height: 100px;
		border: 1px solid #bbbbbb;
		margin-bottom: 8px;
	}
	.color-box_small {
		height: 48px;
	}

	.color-box_acent {
		background-color: #ff9800;
	}
	.color-box_link {
		background-color: #6688BB;
	}

    .color-box_selection {
        background-color: #E0E0E0;
    }

	.color-box_text {
		background-color: #333333;
	}
	.color-box_card {
		background-color: #FFFFFF;
	}
	.color-box_background {
		background-color: #F5F5F5;
	}
</style>


<div class="container">
	<div class="row">
		<div class="col-sm-12">

			<div class="page-header">
			  <h1>Цвета <small>оттенки, тени</small></h1>
			</div>

		</div>
	</div>
	<div class="row">
		<div class="col-sm-8">



		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<h3>Основные цвета</h3>
		</div>
	</div>
	<div class="row mt_xl">
		<div class="col-xs-3">
			<div class="color-box color-box_acent">
			</div>
			<p>lunOrange <code>#FF9800</code></p>
		</div>

		<div class="col-xs-3">
			<div class="color-box color-box_link">
			</div>
			<p>linkColor <code>#6688BB</code></p>
		</div>

        <div class="col-xs-3">
            <div class="color-box color-box_selection">
            </div>
            <p>grayLighter <code>#E0E0E0</code></p>
        </div>

	</div>
	<div class="row">

		<div class="col-xs-3">
			<div class="color-box color-box_text">
			</div>
			<p>grayDark <code>#333333</code></p>
		</div>

		<div class="col-xs-3">
			<div class="color-box color-box_background">
			</div>
			<p>bodyBG <code>#F5F5F5</code></p>
		</div>

        <div class="col-xs-3">
			<div class="color-box color-box_card">
			</div>
			<p>white <code>#FFFFFF</code></p>
		</div>

	</div>
	<div class="row">
		<div class="col-sm-12">
			<h3>Производные цвета</h3>
			<p>Используются для ховеров и дополнительных вариаций (преимущественно с текстом)</p>
		</div>
	</div>
	<div class="row mt_xl">
		<div class="col-xs-2">
			<div class="color-box color-box_small" style="background-color: #FD9F41;">
			</div>
			<p><code>#FD9F41</code></p>
		</div>
		<div class="col-xs-2">
			<div class="color-box color-box_small" style="background-color: #606ea5;">
			</div>
			<p><code>#606EA5</code></p>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-2">
			<div class="color-box color-box_small" style="background-color: #000000;">
			</div>
			<p><code>#000000</code></p>
		</div>
		<div class="col-xs-2">
			<div class="color-box color-box_small" style="background-color: #9E9E9E;">
			</div>
			<p><code>#9E9E9E</code></p>
		</div>
		<div class="col-xs-2">
			<div class="color-box color-box_small" style="background-color: #BDBDBD;">
			</div>
			<p><code>#BDBDBD</code></p>
		</div>
	</div>
</div>


<?php
    echo file_get_contents('http://sd-03.lundev.net/lun-supernova/_import/foot.html');
?>
