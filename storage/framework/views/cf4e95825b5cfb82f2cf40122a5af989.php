<?php echo csrf_field(); ?>

<div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title" value="<?php echo e(old('title', $post->title ?? '')); ?>" required>
    <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-danger"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>

<div class="mb-3">
    <label for="body" class="form-label">Body</label>
    <textarea class="form-control" id="body" name="body" rows="5" required><?php echo e(old('body', $post->body ?? '')); ?></textarea>
    <?php $__errorArgs = ['body'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-danger"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>

<div class="mb-3">
    <label for="published_at" class="form-label">Published Date</label>
    <input type="date" class="form-control" id="published_at" name="published_at"
    value="<?php echo e(old('published_at', isset($post) && $post->published_at ? \Carbon\Carbon::parse($post->published_at)->format('Y-m-d') : '')); ?>">
</div>

<button type="submit" class="btn btn-primary">Submit</button>
<?php /**PATH D:\xampp\htdocs\blog-system\resources\views/posts/_form.blade.php ENDPATH**/ ?>