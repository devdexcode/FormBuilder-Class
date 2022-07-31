<div class="col-md-<?=(@$label_col == "" ? '4' : @$label_col);?> <?php echo !empty(@$label_col_class) ? @$label_col_class :'';?>">
    <label class="control-label <?php echo $args['label_position']; ?> 
        <?php echo !empty($label_class) ? $label_class: ''; ?>" for="<?php echo $the_id;?>">
            <?=(@$the_label);?>:
        <?=(isset($required) ? '<span class="text-danger">*</span>' : '');?>
    </label>
</div>