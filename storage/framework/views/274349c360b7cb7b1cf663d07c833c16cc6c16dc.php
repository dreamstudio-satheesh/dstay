
<?php $__env->startSection('title'); ?> Customers List <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<!--datatable css-->
<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
<!--datatable responsive css-->
<link href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Pages <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Customers  <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">List of Users</h5>
                <div class="d-flex justify-content-sm-end">
                    <div>
                        <a href="<?php echo e(url('/admin/customers/create')); ?>" class="btn btn-primary add-btn"><i class="ri-add-line align-bottom me-1"></i> Add </a>
                    </div>
                  
                </div>
            </div>
            <div class="card-body">
                <table id="buttons-datatables" class="display table table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>address</th>
                            <th>Action</th>
                        </tr>
                    </thead>                   
                     <tbody>
                            <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                        <th scope="row"><a href="#" class="fw-semibold">#<?php echo e($user->id); ?></a></th>
                        <td><?php echo e($user->name); ?></td>
                        <td><?php echo e($user->mobile); ?></td>
                        <td><?php echo e($user->address); ?></td>
                        <td>
                          
                            <div class="d-flex gap-2">
                                <div class="edit">
                                    <a href="<?php echo e(route('customers.edit',$user->id)); ?>" class="btn btn-sm btn-success edit-item-btn">Edit</a>
                                </div>
                                <div class="remove"> 
                                    <form action="<?php echo e(route('customers.destroy',$user->id)); ?>" method="POST"> 
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-sm btn-primary remove-item-btn">Remove</button>
                                    </form> 
                                </div>
                            </div>
                        </td>
                        
                        </tr>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       
                        </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
  let table = new DataTable('#buttons-datatables', {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'print', 'pdf'
        ]
        
    });
}); 
</script>

<script src="<?php echo e(URL::asset('/admin_assets/js/app.min.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\sathe\Documents\projects\dstays\resources\views/customers/index.blade.php ENDPATH**/ ?>