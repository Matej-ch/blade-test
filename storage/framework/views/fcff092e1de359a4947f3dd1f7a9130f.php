<?php $__bladeCompiler = app('blade.compiler'); ?><?php $__env->startSection('banner'); ?>
    <nav class="p-8 flex justify-center font-bold">
        Hello, this is banner section
    </nav>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="pb-8">
        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <?php if($loop->first): ?>
                <div class="bg-orange-500 font-bold text-center">First book</div>
            <?php endif; ?>

            <?php if($loop->last): ?>
                <div class="bg-emerald-500 font-bold text-center"> Last book</div>
            <?php endif; ?>

            <div class="<?php echo e($__bladeCompiler->applyEchoHandler($loop->first ? 'bg-red-200' : 'bg-green-200')); ?>">
                <?php echo e($__bladeCompiler->applyEchoHandler($book->name)); ?>

                <?php echo e($__bladeCompiler->applyEchoHandler($book->cover)); ?>

                <?php echo $__bladeCompiler->applyEchoHandler($book->cover); ?>


            </div>
            <div class="pb-8">
                Custom blade echo directive of an object
                <pre class="inline">Book</pre>
                defined in
                <pre class="inline">AppServiceProvider</pre>
                : <?php echo e($__bladeCompiler->applyEchoHandler($book)); ?>

            </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH S:\PHPStorm\blade-example\resources\views/books/index.blade.php ENDPATH**/ ?>