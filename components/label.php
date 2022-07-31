<label class="control-label <?php echo $this->is_not_empty(@$label_position) ? $label_position: '';?>" for="<?php echo $the_id;?>">
    <?=@$the_label;?>:
    <?php echo (isset($required) || @$required !== null || !empty(@$required) ? '<span class="text-danger">*</span>' : '');?>
</label>