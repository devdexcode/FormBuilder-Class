<?php if( @$input_class != "" ) {?>
  <div class="<?=@$input_class;?> display-table">
<?php }?>

  <input type="checkbox" class="
  form-control  <?=$the_id?> input-<?=$type;?> field_<?=$the_id?> table-cell" 
  id="<?=$the_id?>" 
  name="<?=$the_name?>" 
  value="yes" <?=(@$req != ""?'required="required"':'');?> 
  data-id="<?=$the_id?>" 
  <?php echo (@$dbval == "yes"?'checked="checked"':'');?>>
  <?php if(isset($desc) || isset($description)):?><div class="description"><?=@$desc || @$description !=""?@$desc || @$description :'';?></div><?php endif;?>
<?php if( @$input_class != "" ) {?>
  </div>
<?php }?>    