<div class="row">
    <div class="col-sm-4">
        <h3 class="form-group-title"><?php echo e(__("Cookie consent")); ?></h3>
    </div>
    <div class="col-sm-8">
        <div class="panel">
            <div class="panel-title"><strong><?php echo e(__("Cookie consent config")); ?></strong></div>
            <div class="panel-body">
                <div class="form-controls">
                    <label><input type="checkbox" <?php if(setting_item('enable_cookie_consent')): ?> checked <?php endif; ?> name="enable_cookie_consent" value="1"><?php echo e(__('Enable Cookie consent')); ?></label>
                </div>
                <div class="form-group" data-condition="enable_cookie_consent:is(1)">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#cookiePreferences"><?php echo e(__("Cookie preferences")); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " data-toggle="tab" href="#cookieModal"><?php echo e(__("Cookie Settings Modal")); ?></a>
                        </li>
                    </ul>
                    <div class="tab-content" >
                        <div class="tab-pane active" id="cookiePreferences">
                            <div class="form-group">
                                <label><?php echo e(__("Cookie Title")); ?></label>
                                <div class="form-controls">
                                    <input type="text" name="cookie_consent_preferences_title" value="<?php echo e(setting_item('cookie_consent_preferences_title')); ?>" class="form-control">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label><?php echo e(__("Primary button Text")); ?></label>
                                        <div class="form-controls">
                                            <input type="text" name="cookie_consent_primary_btn_text" value="<?php echo e(setting_item('cookie_consent_primary_btn_text',__('Accept all'))); ?>" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label><?php echo e(__("Primary button Role")); ?></label>
                                        <div class="form-controls">
                                            <select name="cookie_consent_primary_btn_role" class="form-control">
                                                <option <?php if(setting_item('cookie_consent_primary_btn_role') == 'accept_all'): ?> selected <?php endif; ?>  value="accept_selected"><?php echo e(__('Accept all')); ?></option>
                                                <option <?php if(setting_item('cookie_consent_primary_btn_role') == 'accept_selected'): ?> selected <?php endif; ?>  value="accept_selected"><?php echo e(__('Accept selected')); ?></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label><?php echo e(__("Secondary button Text")); ?></label>
                                        <div class="form-controls">
                                            <input type="text" name="cookie_consent_secondary_btn_text" value="<?php echo e(setting_item('cookie_consent_secondary_btn_text',__('Settings'))); ?>" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label><?php echo e(__("Secondary button Role")); ?></label>
                                        <div class="form-controls">
                                            <select name="cookie_consent_primary_btn_role" class="form-control">
                                                <option <?php if(setting_item('cookie_consent_secondary_btn_role') == 'settings'): ?> selected <?php endif; ?>  value="settings"><?php echo e(__('Open modal settings')); ?></option>
                                                <option <?php if(setting_item('cookie_consent_secondary_btn_role') == 'accept_necessary'): ?> selected <?php endif; ?>  value="accept_necessary"><?php echo e(__('Accept necessary')); ?></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="cookieModal">
                            <div class="form-group">
                                <label><?php echo e(__("Title")); ?></label>
                                <div class="form-controls">
                                    <input type="text" name="cookie_consent_setting_modal_title" value="<?php echo e(setting_item('cookie_consent_setting_modal_title',__('Cookie preferences'))); ?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label><?php echo e(__("Button save setting text")); ?></label>
                                <div class="form-controls">
                                    <input type="text" class="form-control" name="cookie_consent_setting_modal_save" value="<?php echo e(setting_item('cookie_consent_setting_modal_save',__('Save settings'))); ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label><?php echo e(__("Button Accept All text")); ?></label>
                                        <div class="form-controls">
                                            <input type="text" class="form-control" name="cookie_consent_setting_modal_accept" value="<?php echo e(setting_item('cookie_consent_setting_modal_accept',__('Accept All'))); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label><?php echo e(__("Button Reject All text")); ?></label>
                                        <div class="form-controls">
                                            <input type="text" class="form-control" name="cookie_consent_setting_modal_reject" value="<?php echo e(setting_item('cookie_consent_setting_modal_reject',__('Reject All'))); ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label><?php echo e(__("Setting options")); ?></label>
                                <div class="form-controls">
                                    <div class="form-group-item">
                                        <div class="form-group-item">
                                            <div class="g-items-header">
                                                <div class="row">
                                                    <div class="col-md-3"><?php echo e(__("Title")); ?></div>
                                                    <div class="col-md-5"><?php echo e(__('Description')); ?></div>
                                                    <div class="col-md-3"><?php echo e(__('Action')); ?></div>
                                                    <div class="col-md-1"></div>
                                                </div>
                                            </div>
                                            <div class="g-items">
                                                <?php $cookie_consent_setting_modal_block_list = setting_item('cookie_consent_setting_modal_block_list'); ?>
                                                <?php if(!empty($cookie_consent_setting_modal_block_list) && is_array(json_decode($cookie_consent_setting_modal_block_list))): ?>
                                                    <?php $__currentLoopData = json_decode($cookie_consent_setting_modal_block_list); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="item" data-number="<?php echo e($k); ?>">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <input type="text" name="cookie_consent_setting_modal_block_list[<?php echo e($k); ?>][title]" class="form-control" value="<?php echo e($list->title); ?>">
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <textarea name="cookie_consent_setting_modal_block_list[<?php echo e($k); ?>][content]" class="form-control" rows="5" style="height: 100%"><?php echo $list->content; ?></textarea>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label class=""><input type="checkbox" <?php if(!empty($list->toggle)): ?> checked <?php endif; ?> name="cookie_consent_setting_modal_block_list[<?php echo e($k); ?>][toggle]"> <?php echo e(__('Toggle')); ?></label>
                                                                    <label class=""><input type="checkbox" <?php if(!empty($list->enable)): ?> checked <?php endif; ?> name="cookie_consent_setting_modal_block_list[<?php echo e($k); ?>][enable]"> <?php echo e(__('Enable')); ?></label>
                                                                    <label class=""><input type="checkbox" <?php if(!empty($list->readonly)): ?> checked <?php endif; ?> name="cookie_consent_setting_modal_block_list[<?php echo e($k); ?>][readonly]"> <?php echo e(__('Readonly')); ?></label>
                                                                    <label class="mb-0"><?php echo e(__('Value')); ?> <input type="text" name="cookie_consent_setting_modal_block_list[<?php echo e($k); ?>][value]" class="form-control" value="<?php echo e($list->value); ?>"></label>
                                                                </div>
                                                                <div class="col-md-1">
                                                                    <span class="btn btn-danger btn-sm btn-remove-item"><i class="fa fa-trash"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                            </div>
                                            <div class="text-right">
                                                <span class="btn btn-info btn-sm btn-add-item"><i class="icon ion-ios-add-circle-outline"></i> <?php echo e(__('Add item')); ?></span>
                                            </div>
                                            <div class="g-more hide">
                                                <div class="item" data-number="__number__">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <input type="text" __name__="cookie_consent_setting_modal_block_list[__number__][title]" class="form-control" value="">
                                                        </div>
                                                        <div class="col-md-5">
                                                            <textarea __name__="cookie_consent_setting_modal_block_list[__number__][content]" class="form-control" rows="5" style="height: 100%"></textarea>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label class=""><input type="checkbox" __name__="cookie_consent_setting_modal_block_list[__number__][toggle]"> <?php echo e(__('Toggle')); ?></label>
                                                            <label class=""><input type="checkbox" __name__="cookie_consent_setting_modal_block_list[__number__][enable]"> <?php echo e(__('Enable')); ?></label>
                                                            <label class=""><input type="checkbox" __name__="cookie_consent_setting_modal_block_list[__number__][readonly]"> <?php echo e(__('Readonly')); ?></label>
                                                            <label class="mb-0"><?php echo e(__('Value')); ?> <input type="text" __name__="cookie_consent_setting_modal_block_list[__number__][value]" class="form-control"></label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <span class="btn btn-danger btn-sm btn-remove-item"><i class="fa fa-trash"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php /**PATH W:\xampp\htdocs\my-travel-app\modules/Core/Views/admin/settings/groups/parts/cookie-consent-setting.blade.php ENDPATH**/ ?>