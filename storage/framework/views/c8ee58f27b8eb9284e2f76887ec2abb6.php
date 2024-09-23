<?php if (isset($component)) { $__componentOriginal61b7c119be9b054fc3033ecd71de14c0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal61b7c119be9b054fc3033ecd71de14c0 = $attributes; } ?>
<?php $component = App\View\Components\LandingLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('landing-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\LandingLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="w-full">
        <img class="w-full" src="<?php echo e(asset('/background.png')); ?>"/>
    </div>
    
    <div class="w-full p-12">
        <h1 class="text-4xl text-center font-bold mb-8">LAPORAN KEUANGAN MASJID</h1>

        <div class="flex gap-6">
            <div class="p-8 m-4 mr-0 bg-white rounded-md shadow-sm w-1/2">
                <h2>Total Pemasukan : </h2>
                <p class="font-bold text-4xl">Rp. <?php echo e($pemasukan->sum('nominal')); ?></p>

                <table class="mt-8 table-auto border w-full">
                    <thead class="bg-green-500 text-white">
                        <tr>
                            <th class="text-left py-3 px-4 uppercase font-semibold">No</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold">Tanggal</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold">Nominal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $pemasukan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="text-left py-3 px-4 font-semibold"><?php echo e($loop->iteration); ?></td>
                                <td class="text-left py-3 px-4 font-semibold"><?php echo e($d->created_at); ?></td>
                                <td class="text-left py-3 px-4 font-semibold"><?php echo e($d->nominal); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>

            <div class="p-8 m-4 ml-0 bg-white rounded-md shadow-sm w-1/2">
                <h2>Total Pengeluaran : </h2>
                <p class="font-bold text-4xl">Rp. <?php echo e($pengeluaran->sum('nominal')); ?></p>

                <table class="mt-8 table-auto border w-full">
                    <thead class="bg-red-500 text-white">
                        <tr>
                            <th class="text-left py-3 px-4 uppercase font-semibold">No</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold">Tanggal</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold">Nominal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $pengeluaran; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="text-left py-3 px-4 font-semibold"><?php echo e($loop->iteration); ?></td>
                                <td class="text-left py-3 px-4 font-semibold"><?php echo e($d->created_at); ?></td>
                                <td class="text-left py-3 px-4 font-semibold"><?php echo e($d->nominal); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal61b7c119be9b054fc3033ecd71de14c0)): ?>
<?php $attributes = $__attributesOriginal61b7c119be9b054fc3033ecd71de14c0; ?>
<?php unset($__attributesOriginal61b7c119be9b054fc3033ecd71de14c0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal61b7c119be9b054fc3033ecd71de14c0)): ?>
<?php $component = $__componentOriginal61b7c119be9b054fc3033ecd71de14c0; ?>
<?php unset($__componentOriginal61b7c119be9b054fc3033ecd71de14c0); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\masjid\resources\views/landing/index.blade.php ENDPATH**/ ?>