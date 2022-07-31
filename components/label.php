<label class="control-label <?php echo $label_position;?>" for="<?php echo $the_id;?>">
    <?=@$the_label;?>:
    <?=(isset($required) || !empty($required) ? '<span class="text-danger">*</span>' : '');?>
</label>