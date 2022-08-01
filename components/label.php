<label class="control-label <?php echo C ? $label_class: '';?> <?=$the_name;?>_label" for="<?php echo $the_id;?>">
    <?=@$the_label;?>:
    <?php echo (isset($required) || @$required !== null || !empty(@$required) ? '<span class="text-danger">*</span>' : '');?>
</label>