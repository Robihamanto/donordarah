<?php $__env->startSection('content'); ?>

    <article>
        <h1>Semua Data Pendonor (Telah Disetujui)</h1>
        <table width=100% border=1>
            <tr bgcolor=cf0b0b>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Berat</th>
                <th>Umur</th>
                <th>Gol. Darah</th>
                <th>Edit</th>
            </tr>
            <?php $no=1;?>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <tr>
                <td><?php echo e($no++); ?></td>
                <td><?php echo e($r->fullname); ?></td>
                <td><?php echo e($r->weight); ?> Kg</td>
                <td><?php echo e($r->dob); ?></td>
                <td align=center><?php echo e($r->bloodType->name); ?></td>
                <td align=center>
                    <a href='<?php echo e(route('editdatapendonor', ['id' => $r->id])); ?>'>Pilih</a>
                </td>
            </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        </table>
    </article>

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layoutadmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>