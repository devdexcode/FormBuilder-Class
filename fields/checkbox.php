<?php if( @$input_class != "" ) {?>
  <div class="order-md-1 <?=@$input_class;?> display-table" style=" display:table;">
<?php }?>

  <input type="checkbox" class=" <?=(@$req != ""?'required':'');?>
  form-control  <?=$the_id?> input-<?=$type;?> field_<?=$the_id?> table-cell" 
  id="<?=$the_id?>" 
  name="<?=$the_name?>" 
  value="yes" <?=(@$req != ""?'required="required"':'');?> 
  data-id="<?=$the_id?>" 
  <?php echo (@$dbval == "yes"?'checked="checked"':(isset($_REQUEST[$the_name]) ? 'checked="checked"':''));?>  style=" display:table-cell;">
  <div class="description response"><?=@$desc || @$description !=""?@$desc || @$description :'';?></div>
<?php if( @$input_class != "" ) {?>
  </div>
<?php }?>    