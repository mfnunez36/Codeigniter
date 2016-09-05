<section class="container content-section text-center">
	<div class="container" style="width: 600px;">
	<h3>Login</h3>
    <form action="<?= site_url('Login/InicioSession')?>" method="post">
        <div class="form-group">
            <input class="form-control" type="email" name="correo" placeholder="Ingrese su Correo"/>
            <br>
            <input class="form-control" type="password" name="contraseña" placeholder="Ingrese su Contraseña"/>
        </div>
        <button class="btn btn-primary" style="width: 179px;" type="submit">INGRESAR</button>
    </form>
	</div>
</section>
<script src="<?= site_url('js/jquery.min.js') ?>"></script>
<script src="<?= site_url('js/bootstrap.min.js') ?>"></script>
</body>
</html>
