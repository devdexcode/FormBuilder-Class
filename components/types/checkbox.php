<?php 
if(@$label_position =="top" || @$label_position ==="" || null === @$label_position) {?>
        <input class="form-control <?=$the_id?> input-text field_<?=$the_id?>" type="checkbox" id="<?=$the_id?>" name="<?=$the_name?>" value="<?=$the_id?>" <?=(@$req != ""?'required="required"':'');?> placeholder="<?=$the_label?>" data-id="<?=$the_id?>" <?=(@$dbval == $the_name?'checked="checked"':(isset($_REQUEST[$the_name]) && $_REQUEST[$the_name] == $the_name?'checked="checked"':''));?>>
        &nbsp; <?php echo $the_label;?>
        <?php if(isset($desc) || isset($description)):?><div class="description"><?=@$desc || @$description !=""?@$desc || @$description :'';?></div><?php endif;?>
<?php } else{?>
    <div class="col-md-<?=(!isset($input_col) || $input_col ==""?'8':$input_col);?> field_col <?=$the_name?>_col  <?php echo (isset($field_col_class) || @$field_col_class !=="")? @$field_col_class:''; ?> ">
    <input class="form-control <?=$the_id?> input-text field_<?=$the_id?>" type="checkbox" id="<?=$the_id?>" name="<?=$the_name?>" value="<?=$the_id?>" <?=(@$req != ""?'required="required"':'');?> placeholder="<?=$the_label?>" data-id="<?=$the_id?>" <?=(@$dbval == $the_name?'checked="checked"':(isset($_REQUEST[$the_name]) && $_REQUEST[$the_name] == $the_name?'checked="checked"':''));?>>
        &nbsp; <?php echo $the_label;?>
        <?php if(isset($desc) || isset($description)):?><div class="description <?=$the_id?>_desc desc <?=$the_id?>_description"><?=@$desc || @$description !=""?@$desc || @$description :'';?></div><?php endif;?>
    </div>
<?php } ?>