<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>DBRS</title>
</head>
<body>
<div class="container p-4">
<?php if(Session::has('success')): ?>
                    <div class="alert alert-success">
                        <?php echo e(Session::get('success')); ?>

                    </div>
                    <?php endif; ?>
                    <?php if(Session::has('error')): ?>
                    <div class="alert alert-danger">
                        <?php echo e(Session::get('error')); ?>

                    </div>
                    <?php endif; ?>
      <div class="m-3">
                    <a class="bg-primary text-white p-2" href="<?php echo e(url('/backup')); ?>">Backup</a>
                    <a class="ml-2 bg-primary text-white p-2" href="<?php echo e(url('/restore')); ?>">Restore</a>
                    <a class="ml-2 bg-danger text-white p-2" href="<?php echo e(url('/logout')); ?>">Logout</a>
</div>
                    <div
        class="table-responsive"
      >
        <table
          class="table table-primary"
        >
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Address</th>
              <th scope="col">City</th>
              <th scope="col">Zip Code</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="">
              <td scope="row"><?php echo e($user->id); ?></td>
              <td><?php echo e($user->name); ?></td>
              <td><?php echo e($user->email); ?></td>
              <td><?php echo e($user->address); ?></td>
              <td><?php echo e($user->city); ?></td>
              <td><?php echo e($user->zipcode); ?></td>
              <td><a href="<?php echo e(url('/delete')); ?>/<?php echo e($user->id); ?>" class="text-danger">Delete</a></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
      </div>
</div>
</body>
</html><?php /**PATH C:\Users\dell\Downloads\Database-Backup-and-Recovery-System-main\Database-Backup-and-Recovery-System-main\resources\views/dashboard.blade.php ENDPATH**/ ?>