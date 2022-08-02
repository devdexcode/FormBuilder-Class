<?php foreach($options as $option):?>
  <label class="<?=$input_class != "" ? $input_class:''; ?> "> <?=ucfirst($option);?> <input type="radio" 
  class="<?=$the_id?> input-<?=$type;?> field_<?=$the_id?>" id="<?=$the_id?>" 
  name="<?=$the_name?>" 
  <?php echo (@$dbval == $option?'checked="checked"':($_REQUEST[$the_name]==$option? 'checked="checked"':''));?>
  data-id="<?=$the_name?>"
  value="<?=$option;?>"></label>
<?php endforeach;?>
  <?php if(isset($desc) || isset($description)):?><div class="description"><?=@$desc || @$description !=""?@$desc || @$description :'';?></div><?php endif;?>
