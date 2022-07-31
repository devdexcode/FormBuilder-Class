<div class="col-md-<?=(@$label_col == "" ? '4' : @$label_col);?> label_col <?php echo $the_name;?>_label_col">
    <label class="control-label <?php echo $this->is_not_empty(@$label_position) ? $label_position: '';?> label <?=$the_name;?>_label" for="<?php echo $the_id;?>">
            <?=(@$the_label);?>:
        <?=(isset($required) ? '<span class="text-danger">*</span>' : '');?>
    </label>
</div>