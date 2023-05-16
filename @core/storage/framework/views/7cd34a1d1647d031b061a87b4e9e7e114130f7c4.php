
<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/media-uploader.css')); ?>">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
    <style>
        .dataTables_wrapper .dataTables_paginate .paginate_button {
            padding: 0 !important;
        }

        div.dataTables_wrapper div.dataTables_length select {
            width: 60px;
            display: inline-block;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Tender Page')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-lg-12">
                <div class="margin-top-40"></div>
                 <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.error-msg','data' => []]); ?>
<?php $component->withName('error-msg'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
                 <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.flash-msg','data' => []]); ?>
<?php $component->withName('flash-msg'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
            </div>
            <div class="col-lg-12 mt-0">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title"><?php echo e(__('All Tender Items')); ?></h4>
                        <div class="bulk-delete-wrapper">
                            <div class="select-box-wrap">
                                <select name="bulk_option" id="bulk_option">
                                    <option value=""><?php echo e(__('Bulk Action')); ?></option>
                                    <option value="delete"><?php echo e(__('Delete')); ?></option>
                                </select>
                                <button class="btn btn-primary btn-sm" id="bulk_delete_btn"><?php echo e(__('Apply')); ?></button>
                            </div>
                        </div>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <?php $a=0; ?>
                            <?php $__currentLoopData = $tenders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $tender): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="nav-item">
                                    <a class="nav-link <?php if($a == 0): ?> active <?php endif; ?>" data-toggle="tab"
                                        href="#slider_tab_<?php echo e($key); ?>" role="tab" aria-controls="home"
                                        aria-selected="true"><?php echo e(get_language_by_slug($key)); ?></a>
                                </li>
                                <?php $a++; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        <div class="tab-content margin-top-40" id="myTabContent">
                            <?php $b=0; ?>
                            <?php $__currentLoopData = $tenders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $tender): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="tab-pane fade <?php if($b == 0): ?> show active <?php endif; ?>"
                                    id="slider_tab_<?php echo e($key); ?>" role="tabpanel">
                                    <div class="table-wrap table-responsive">
                                        <table class="table table-default" id="all_tender_table">
                                            <thead>
                                                <th class="no-sort">
                                                    <div class="mark-all-checkbox">
                                                        <input type="checkbox" class="all-checkbox">
                                                    </div>
                                                </th>
                                                <th><?php echo e(__('S.No.')); ?></th>
                                                <th><?php echo e(__('Title')); ?></th>
                                                <th><?php echo e(__('Description')); ?></th>
                                                <th><?php echo e(__('Expired_At')); ?></th>
                                                <th><?php echo e(__('Doc Type')); ?></th>
                                                <th><?php echo e(__('File Size')); ?></th>
                                                <th><?php echo e(__('Current Status')); ?></th>
                                                <th><?php echo e(__('Action')); ?></th>
                                            </thead>
                                            <tbody>
                                                <?php $__currentLoopData = $tenders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td>
                                                            <div class="bulk-checkbox-wrapper">
                                                                <input type="checkbox" class="bulk-checkbox"
                                                                    name="bulk_delete[]" value="<?php echo e($data->id); ?>">
                                                            </div>
                                                        </td>
                                                        <td><?php echo e($data->id); ?></td>
                                                        <td><?php echo e($data->title); ?></td>
                                                        <td><?php echo Str::limit($data->description, 200, '...'); ?></td>
                                                        <td><?php echo e(date('d-M-Y', strtotime($data->last_date))); ?></td>
                                                        <td class="text-center">
                                                            <?php if($data->file_extension): ?>
                                                                <?php if($data->file_extension == 'doc' || $data->file_extension == 'docx'): ?>
                                                                    <img src="<?php echo e(asset('assets/frontend/img/word.png')); ?>"
                                                                        width="24" height="24"
                                                                        class="img-responsive rounded" alt="doc-image">
                                                                <?php endif; ?>

                                                                <?php if($data->file_extension == 'xls' || $data->file_extension == 'xlsx'): ?>
                                                                    <img src="<?php echo e(asset('assets/frontend/img/excel.png')); ?>"
                                                                        width="24" height="24"
                                                                        class="img-responsive rounded" alt="xls-image">
                                                                <?php endif; ?>

                                                                <?php if($data->file_extension == 'pdf'): ?>
                                                                    <img src="<?php echo e(asset('assets/frontend/img/pdf.png')); ?>"
                                                                        width="28" height="28"
                                                                        class="img-responsive rounded" alt="pdf-image">
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                        </td>
                                                        <td width="10%" class="text-center">
                                                            <?php if($data->file_extension == 'doc' || $data->file_extension == 'docx'): ?>
                                                                <span class="badge badge-primary"
                                                                    style="font-size: 14px;"><?php echo e(HumanReadable::bytesToHuman($data->file_size)); ?></span>
                                                            <?php endif; ?>

                                                            <?php if($data->file_extension == 'xls' || $data->file_extension == 'xlsx'): ?>
                                                                <span class="badge badge-success"
                                                                    style="font-size: 14px;"><?php echo e(HumanReadable::bytesToHuman($data->file_size)); ?></span>
                                                            <?php endif; ?>

                                                            <?php if($data->file_extension == 'pdf'): ?>
                                                                <span class="badge badge-danger"
                                                                    style="font-size: 14px;"><?php echo e(HumanReadable::bytesToHuman($data->file_size)); ?></span>
                                                            <?php endif; ?>
                                                        </td>
                                                        <td>
                                                            <?php if($data->status == 'draft'): ?>
                                                                <span class="alert alert-warning"
                                                                    style="margin-top: 20px;display: inline-block;"><?php echo e(__('Draft')); ?></span>
                                                            <?php else: ?>
                                                                <span class="alert alert-success"
                                                                    style="margin-top: 20px;display: inline-block;"><?php echo e(__('Publish')); ?></span>
                                                            <?php endif; ?>
                                                        </td>
                                                        <td>
                                                             <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.delete-popover','data' => ['url' => route('admin.tender.destroy', $data->id)]]); ?>
<?php $component->withName('delete-popover'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.tender.destroy', $data->id))]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

                                                            <a class="btn btn-xs btn-primary btn-xs mb-3 mr-1"
                                                                href="<?php echo e(route('admin.tender.edit', $data->id)); ?>">
                                                                <i class="ti-pencil"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <?php $b++; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <!-- Start datatable js -->
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="//cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="//cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="//cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $(document).on('click', '#bulk_delete_btn', function(e) {
                e.preventDefault();

                var bulkOption = $('#bulk_option').val();
                var allCheckbox = $('.bulk-checkbox:checked');
                var allIds = [];
                allCheckbox.each(function(index, value) {
                    allIds.push($(this).val());
                });
                if (allIds != '' && bulkOption == 'delete') {
                    $(this).text('<?php echo e(__('Deleting...')); ?>');
                    $.ajax({
                        'type': "POST",
                        'url': "<?php echo e(route('admin.tender.bulk.action')); ?>",
                        'data': {
                            _token: "<?php echo e(csrf_token()); ?>",
                            ids: allIds
                        },
                        success: function(data) {
                            location.reload();
                        }
                    });
                }

            });

            $('.all-checkbox').on('change', function(e) {
                e.preventDefault();
                var value = $('.all-checkbox').is(':checked');
                var allChek = $(this).parent().parent().parent().parent().parent().find('.bulk-checkbox');
                //have write code here fr
                if (value == true) {
                    allChek.prop('checked', true);
                } else {
                    allChek.prop('checked', false);
                }
            });

            $('.table-wrap > table').DataTable({
                "order": [
                    [1, "desc"]
                ],
                'columnDefs': [{
                    'targets': 'no-sort',
                    'orderable': false
                }]
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kanhatig/public_html/@core/resources/views/backend/pages/tender/index.blade.php ENDPATH**/ ?>