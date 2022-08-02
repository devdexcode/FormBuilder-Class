<?php foreach(@$options as $option):?>
  <label class="<?=$input_class != "" ? $input_class:''; ?> "> 
  <?=ucfirst(@$option);?> 
  <input type="checkbox" 
  class="<?=$the_id?> input-<?=$type;?> input-checkbox field_<?=$the_id?>" id="<?=$the_id?>" 
  name="<?=$the_name?>[]" 
  <?php echo (@$dbval == $option ?'checked="checked"':(in_array($option,$_REQUEST[@$the_name]) ? 'checked="checked"':''));?>
  data-id="<?=$the_name?>"
  value="<?=$option;?>"></label>
<?php endforeach;?>
  <?php if(isset($desc) || isset($description)):?><div class="description"><?=@$desc || @$description !=""?@$desc || @$description :'';?></div><?php endif;?>
