

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Edit Post</h1>

    <form action="<?php echo e(route('posts.update', $post)); ?>" method="POST">
        <?php echo method_field('PUT'); ?>
        <?php echo $__env->make('posts._form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </form>
</div>

<?php /**PATH D:\xampp\htdocs\blog-system\resources\views/posts/edit.blade.php ENDPATH**/ ?>