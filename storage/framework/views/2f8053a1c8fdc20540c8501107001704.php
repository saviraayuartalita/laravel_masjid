<?php if (isset($component)) { $__componentOriginal0de143e5b61900e6d7b990ac144ae3fb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0de143e5b61900e6d7b990ac144ae3fb = $attributes; } ?>
<?php $component = App\View\Components\DashboardLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dashboard-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\DashboardLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="flex flex-col gap-6 p-8 m-4 bg-white rounded-md shadow-sm">
        <h1 class="text-2xl mb-4">Validasi Infaq</h1>

        <table class="mb-4 table-auto border">
            <thead class="bg-pink-400 text-white">
                <tr>
                    <th class="text-left py-3 px-4 uppercase font-semibold">No</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold">Tanggal/Waktu</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold">Nama</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold">Instansi</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold">Nominal</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold">Bukti</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td class="text-left py-3 px-4 font-semibold"><?php echo e($loop->iteration); ?></td>
                    <td class="text-left py-3 px-4 font-semibold"><?php echo e($d->created_at); ?></td>
                    <td class="text-left py-3 px-4 font-semibold"><?php echo e($d->nama); ?></td>
                    <td class="text-left py-3 px-4 font-semibold"><?php echo e($d->instansi); ?></td>
                    <td class="text-left py-3 px-4 font-semibold"><?php echo e($d->nominal); ?></td>
                    <td class="text-left py-3 px-4 font-semibold">
                        <img class="w-60 bg-white" src="<?php echo e(asset('/images/bukti_bayar/'.$d->bukti_bayar)); ?>"/>
                    </td>
                    <td class="text-left py-3 px-4 font-semibold inline-flex flex-col gap-2">
                        <?php if($d->is_valid == 0): ?>
                        <a  href="<?php echo e(route('pemasukan.validasi', $d->id)); ?>" 
                            class="bg-green-500 cursor-pointer text-white p-2 px-3 text-center rounded-md">
                            Validasi
                        </a>
                        <form action="<?php echo e(route('pemasukan.destroy', $d->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="bg-red-500 text-white p-2 px-3 text-center rounded-md">
                                Hapus
                            </button>
                        </form>
                        <?php else: ?>
                            Data Telah Valid
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0de143e5b61900e6d7b990ac144ae3fb)): ?>
<?php $attributes = $__attributesOriginal0de143e5b61900e6d7b990ac144ae3fb; ?>
<?php unset($__attributesOriginal0de143e5b61900e6d7b990ac144ae3fb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0de143e5b61900e6d7b990ac144ae3fb)): ?>
<?php $component = $__componentOriginal0de143e5b61900e6d7b990ac144ae3fb; ?>
<?php unset($__componentOriginal0de143e5b61900e6d7b990ac144ae3fb); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\masjid\resources\views/pemasukan/index.blade.php ENDPATH**/ ?>