<section class="container content-section text-center">
   <div>
        <h2>Listado de Clubes</h2>
        <a href="<?= site_url('Club/Agregar') ?>">Agregar Club</a>
        <table class="table">
            <thead>
                <th>NOMBRE</th>
                <th>ESTADIO</th>
                <th COLSPAN="2">OPCIONES</th>
            </thead>
            <tbody>
                <?php foreach ($data->result() as $row) { ?>
                    <tr>
                        <td><?= $row->nombre ?></td>
                        <td><?= $row->estadio ?></td>
                        <td>
                            <a href="<?= site_url('Club/Editar/').$row->id ?>"><span class="glyphicon glyphicon-edit"></span></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>  
</section>