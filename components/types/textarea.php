<?php 
if(@$label_position =="top" || @$label_position ==="" || null === @$label_position) {?>
        <textarea class="form-control <?=$the_id?> textarea field_<?=$the_id?>" id="<?=$the_id?>" name="<?=$the_name?>" <?=(@$req != ""?'required="required"':'');?> placeholder="<?=$the_label?>" data-id="<?=$the_id?>"><?=(@$dbval != ""?$dbval:(isset($_REQUEST[$the_name])?$_REQUEST[$the_name]:''));?></textarea>
        <?php if(isset($desc) || isset($description)):?><div class="description"><?=@$desc || @$description !=""?@$desc || @$description :'';?></div><?php endif;?>
<?php } else{?>
    <div class="col-md-<?=(!isset($input_col) || $input_col ==""?'8':$input_col);?> field_col <?=$the_name?>_col  <?php echo (isset($field_col_class) || @$field_col_class !=="")? @$field_col_class:''; ?> ">
        <textarea class="form-control <?=$the_id?> textarea field_<?=$the_id?>" id="<?=$the_id?>" name="<?=$the_name?>" <?=(@$req != ""?'required="required"':'');?> placeholder="<?=$the_label?>" data-id="<?=$the_id?>"><?=(@$dbval != ""?$dbval:(isset($_REQUEST[$the_name])?$_REQUEST[$the_name]:''));?></textarea>
        <?php if(isset($desc) || isset($description)):?><div class="description <?=$the_id?>_desc desc <?=$the_id?>_description"><?=@$desc || @$description !=""?@$desc || @$description :'';?></div><?php endif;?>
    </div>
<?php } ?>