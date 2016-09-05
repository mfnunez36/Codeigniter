<section class="container content-section text-center">
    <div class="container" style="width: 600px;">
    <h3>Registrate</h3>
    <form action="<?= site_url('Login/Registrate') ?>" method="post">
        <div class="form-group">
        	<input class="form-control" type="Text" name="nombre" placeholder="Nombre" required/>
        	<br>
            <input class="form-control" type="email" name="correo" placeholder="Correo" required/>
            <br>
            <input class="form-control" type="password" name="contraseña" placeholder="Contraseña" minlength="7" required/>
            <br>
            <input class="form-control" type="password" name="contraseña2" placeholder="Repita la contraseña" minlength="7" required/>
        </div>
        <button class="btn btn-primary" style="width: 179px;" type="submit">Registrate</button>
    </form>
    </div>
</section>
<script src="<?= site_url('js/jquery.min.js') ?>"></script>
<script src="<?= site_url('js/bootstrap.min.js') ?>"></script>
</body>
</html>
