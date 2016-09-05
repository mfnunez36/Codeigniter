<section class="container content-section text-center">
	<div>
		<h2>Editar Club</h2>
		<?php foreach ($data->result() as $row) { ?>
			<form action="<?= site_url('Club/Actualizar/'.$row->id )?>" method="post">
				<div class="form-group">
		        	<input class="form-control" type="Text" name="nombre" value="<?= $row->nombre ?>" required/>
		        	<br>
		            <input class="form-control" type="Text" name="estadio" value="<?= $row->estadio ?>" required/>
		        </div>
		        <button class="btn btn-primary" style="width: 179px;" type="submit">Editar</button>
			</form>
		<?php } ?>
	</div>
</section>
<script src="<?= site_url('js/jquery.min.js') ?>"></script>
<script src="<?= site_url('js/bootstrap.min.js') ?>"></script>
</body>
</html>