<section class="container content-section text-center">
    <div>
       	<h2>Agregar un País</h2>
       	<form action="<?= site_url('Pais/Agregar') ?>" method="post">
            <div class="form-group">
            	<input class="form-control" type="Text" name="nombre" placeholder="Escriba el Nombre del País" required/>
            </div>
            <button class="btn btn-primary" style="width: 179px;" type="submit">Agregar</button>
        </form>
    </div>
</section>
<script src="<?= site_url('js/jquery.min.js') ?>"></script>
<script src="<?= site_url('js/bootstrap.min.js') ?>"></script>
</body>
</html>