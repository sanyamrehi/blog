

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Blog Posts</h1>
    <a href="<?php echo e(route('posts.create')); ?>" class="btn btn-primary mb-3">Create New Post</a>

    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card mb-3">
            <div class="card-body">
                <h3><a href="<?php echo e(route('posts.show', $post)); ?>"><?php echo e($post->title); ?></a></h3>
                <p><?php echo e(Str::limit($post->body, 150)); ?></p>
<small>
    Published at:
    <?php echo e($post->published_at ? \Carbon\Carbon::parse($post->published_at)->format('d M, Y') : 'Not published'); ?>

</small>

                <div class="mt-2">
                    <a href="<?php echo e(route('posts.edit', $post)); ?>" class="btn btn-warning btn-sm">Edit</a>

                    <form action="<?php echo e(route('posts.destroy', $post)); ?>" method="POST" class="d-inline" onsubmit="return confirm('Delete this post?');">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php echo e($posts->links()); ?>

</div>

<?php /**PATH D:\xampp\htdocs\blog-system\resources\views/posts/index.blade.php ENDPATH**/ ?>