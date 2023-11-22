<?php if (session()->has('message')) : ?>
	<div class="alert alert-success" id="success-alert">
		<?= session('message') ?>
	</div>
<?php endif ?>

<?php if (session()->has('error')) : ?>
	<div class="alert alert-danger" id="error-alert">
		<?= session('error') ?>
	</div>
<?php endif ?>

<?php if (session()->has('errorss')) : ?>
	<ul class="alert alert-danger" id="errors-alert">
		<?php foreach (session('errorss') as $error) : ?>
			<li><?= $error ?></li>
		<?php endforeach ?>
	</ul>
<?php endif ?>

<script>
	// Hapus pesan setelah 5 detik
	setTimeout(function() {
		document.getElementById('success-alert').style.display = 'none';
		document.getElementById('error-alert').style.display = 'none';
		document.getElementById('errorss-alert').style.display = 'none';
	}, 5000);
</script>