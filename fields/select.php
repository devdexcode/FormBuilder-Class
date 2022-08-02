<select class="<?=(@$req != ""?'required':'');?> <?=$input_class != "" ? $input_class:''; ?> <?=$the_id?> input-<?=$type;?> field_<?=$the_id?>" id="<?=$the_id?>" 
  name="<?=$the_name?>" data-id="<?=$the_name?>">
<?php foreach(@$options as $option):?>
    <option value="<?=(@$option);?>" <?php echo (@$dbval == @$option?'selected="selected"':((isset($_REQUEST[@$the_name]) && $_REQUEST[@$the_name]==@$option) ? 'selected="selected"':''));?>><?=ucfirst(@$option);?></option>
<?php endforeach;?>
</select>
  <div class="description response"><?=@$desc || @$description !=""?@$desc || @$description :'';?></div>
