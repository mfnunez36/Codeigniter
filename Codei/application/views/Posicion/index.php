<section class="container content-section text-center">
   <div>
        <h2>Listado de Países</h2>
        <a href="<?= site_url('Posicion/Agregar') ?>">Agregar Posición</a>
        <table class="table">
            <thead>
                <th>NOMBRE</th>
            </thead>
            <tbody>
                <?php foreach ($data->result() as $row) { ?>
                    <tr>
                        <td><?= $row->nombre ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>  
</section>