<section class="container content-section text-center">
    <div>
       	<h2>Agregar un Futbolista</h2>
       	<form action="<?= site_url('Futbolista/Agregar') ?>" method="post">
            <div class="form-group">
            	<input class="form-control" type="Text" name="nombre" placeholder="Escriba el Nombre" required/>
            	<br>
                <input class="form-control" type="Text" name="edad" placeholder="Edad" required/>
                <br>
                <select class="form-control" name="posicion" value=""> 
    			    <option value="" >Seleccione la Posicion</option>
                    <?php foreach ($posiciones->result() as $row) { ?>
                        <option value="<?= $row->id ?>"><?= $row->nombre ?></option>
                    <?php } ?>
        			</select>
        			<br>             
        			<select class="form-control" name="pais" value=""> 
        				<option value="" >Seleccione Pais</option>
                    <?php foreach ($paises->result() as $row) { ?>
                        <option value="<?= $row->id ?>"><?= $row->nombre ?></option>
                    <?php } ?>
        			</select>
        			<br>
        			<select class="form-control" name="club" value=""> 
        				<option value="" >Seleccione Club</option>
                    <?php foreach ($clubes->result() as $row) { ?>
                       <option value="<?= $row->id ?>"><?= $row->nombre ?></option>
                    <?php } ?>
        			</select>
            </div>
            <button class="btn btn-primary" style="width: 179px;" type="submit">Agregar</button>
        </form>
    </div>
</section>
<script src="<?= site_url('js/jquery.min.js') ?>"></script>
<script src="<?= site_url('js/bootstrap.min.js') ?>"></script>
</body>
</html>