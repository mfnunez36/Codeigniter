<section class="container content-section text-center">
	<div>
		<h2>Editar Futbolista</h2>
		<?php foreach ($data->result() as $row) { ?>
			<form action="<?= site_url('Futbolista/Actualizar/'.$row->id )?>" method="post">
				<div class="form-group">
		        	<input class="form-control" type="Text" name="nombre" value="<?= $row->nombre ?>" required/>
		        	<br>
		            <input class="form-control" type="Text" name="edad" value="<?= $row->edad ?>" required/>
		            <br>
		            <select class="form-control" name="posicion" value=""> 
    					<option value="<?= $row->id_posicion ?>" ><?= $row->posicion?></option>
		            	<?php foreach ($posiciones->result() as $posi) { ?>
		              		<option value="<?= $posi->id ?>"><?= $posi->nombre ?></option>
		            	<?php } ?>
	    			</select>
	    			<br> 

		    		<select class="form-control" name="pais" value=""> 
		    			<option value="<?= $row->id_pais ?>" ><?= $row->pais ?></option>
		            	<?php foreach ($paises->result() as $pais) { ?>
		              		<option value="<?= $pais->id ?>"><?= $pais->nombre ?></option>
		            	<?php } ?>
	    			</select>
	    			<br>
	    			<select class="form-control" name="club" value=""> 
	    				<option value="<?= $row->id_club ?>" ><?= $row->club ?></option>
		            	<?php foreach ($clubes->result() as $club) { ?>
		              		<option value="<?= $club->id ?>"><?= $club->nombre ?></option>
		            	<?php } ?>
	    			</select>
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