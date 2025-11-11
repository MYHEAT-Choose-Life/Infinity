<div
    <?php echo e($attributes
            ->merge([
                'id' => $getId(),
            ], escape: false)
            ->merge($getExtraAttributes(), escape: false)); ?>

>
    <?php echo e($getChildSchema()); ?>

</div>
<?php /**PATH C:\Users\Manu\Documents\Web dev\Projects\IFINITY\infinityapp\vendor\filament\schemas\resources\views/components/grid.blade.php ENDPATH**/ ?>