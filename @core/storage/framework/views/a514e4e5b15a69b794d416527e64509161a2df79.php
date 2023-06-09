<?php $__env->startSection('site-title'); ?>
    <?php echo e(get_static_option('link_page_' . $user_select_lang_slug . '_name')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-title'); ?>
    <?php echo e(get_static_option('link_page_' . $user_select_lang_slug . '_name')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-meta-data'); ?>
    <meta name="description" content="<?php echo e(get_static_option('link_page_' . $user_select_lang_slug . '_meta_description')); ?>">
    <meta name="tags" content="<?php echo e(get_static_option('link_page_' . $user_select_lang_slug . '_meta_tags')); ?>">
    <?php echo render_og_meta_image_by_attachment_id(get_static_option('link_page_' . $user_select_lang_slug . '_meta_image')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="blog-content-area padding-60">
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-10 offset-lg-1">
                    <div class="card">
                        <div class="card-header bg-dark">
                            <h4 class="text-white mb-0">
                            <?php echo e(get_static_option('announcement_board_title_' . $user_select_lang_slug. '_announcement_board_title_text')); ?>

                            </h4>
                        </div>
                        <div class="card-body">
                            <?php $__empty_1 = true; $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <p class="card-text text-justify" style="padding: 4px 4px;">
                                    <?php if($link->url): ?>
                                        <img src="<?php echo e(asset('assets/frontend/img/www.png')); ?>" width="30"
                                            class="img-circle" />
                                        <a href="<?php echo e($link->url); ?>" target="_blank"
                                            style="color:#135e2a; font-weight: 600!important;"><?php echo e($link->title); ?></a>
                                        <?php if($link->expired_at > Carbon\Carbon::now()->toDateTimeString()): ?>
                                            <img src="<?php echo e(asset('assets/frontend/img/new.gif')); ?>" class="img-circle" />
                                        <?php endif; ?>
                                    <?php endif; ?>

                                    <?php if($link->file_extension == 'pdf'): ?>
                                        <img src="<?php echo e(asset('assets/frontend/img/pdf.png')); ?>" width="30"
                                            class="img-circle" />
                                        <a href="<?php echo e(route('user.download', $link->original_filename)); ?>" target="_blank"
                                            style="color:#135e2a; font-weight: 600!important;"><?php echo e($link->title); ?></a>
                                        <?php if($link->expired_at > Carbon\Carbon::now()->toDateTimeString()): ?>
                                            <img src="<?php echo e(asset('assets/frontend/img/new.gif')); ?>" class="img-circle" />
                                        <?php endif; ?>
                                    <?php endif; ?>

                                    <?php if($link->file_extension == 'doc' || $link->file_extension == 'docx'): ?>
                                        <img src="<?php echo e(asset('assets/frontend/img/word.png')); ?>" width="30"
                                            class="img-circle" />
                                        <a href="<?php echo e(route('user.download', $link->original_filename)); ?>" target="_blank"
                                            style="color:#135e2a; font-weight: 600!important;"><?php echo e($link->title); ?></a>
                                        <?php if($link->expired_at > Carbon\Carbon::now()->toDateTimeString()): ?>
                                            <img src="<?php echo e(asset('assets/frontend/img/new.gif')); ?>" class="img-circle" />
                                        <?php endif; ?>
                                    <?php endif; ?>

                                    <?php if($link->file_extension == 'xls' || $link->file_extension == 'xlsx'): ?>
                                        <img src="<?php echo e(asset('assets/frontend/img/excel.png')); ?>" width="30"
                                            class="img-circle" />
                                        <a href="<?php echo e(route('user.download', $link->original_filename)); ?>" target="_blank"
                                            style="color:#135e2a; font-weight: 600!important;"><?php echo e($link->title); ?></a>
                                        <?php if($link->expired_at > Carbon\Carbon::now()->toDateTimeString()): ?>
                                            <img src="<?php echo e(asset('assets/frontend/img/new.gif')); ?>" class="img-circle" />
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </p>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <p class="card-text" style="padding: 4px 4px 0 4px;">
                                <h4 style="font-weight: 800; text-align: center; color:red;">
                                    <?php echo e(get_static_option('announcement_board_message_' . $user_select_lang_slug. '_announcement_board_message_text')); ?>

                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.frontend-page-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kanhatig/public_html/@core/resources/views/frontend/pages/link/links.blade.php ENDPATH**/ ?>