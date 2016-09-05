<section class="container content-section text-center">
   <div>
        <h2>Listado de Futbolistas</h2>
        <a href="<?= site_url('Futbolista/Agregar') ?>">Agregar Futbolista</a>
        <table class="table">
            <thead>
                <th>NOMBRE</th>
                <th>EDAD</th>
                <th>POSICION</th>
                <th>PAIS</th>
                <th>CLUB</th>
                <th COLSPAN="2">OPCIONES</th>
            </thead>
            <tbody>
                <?php foreach ($data->result() as $row) { ?>
                    <tr>
                        <td><?= $row->nombre ?></td>
                        <td><?= $row->edad ?></td>
                        <td><?= $row->posicion ?></td>
                        <td><?= $row->pais ?></td>
                        <td><?= $row->club ?></td>
                        <td>
                            <a href="<?= site_url('Futbolista/Editar/').$row->id ?>"><span class="glyphicon glyphicon-edit"></span></a>
                        </td>
                        <td>
                            <a href="<?= site_url('Futbolista/Eliminar/').$row->id ?>"><span class="glyphicon glyphicon-trash"></span></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>  
</section>