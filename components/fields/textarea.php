  <textarea class="form-control <?=($this->is_not_empty($input_class) ? $input_class:''); ?> <?=$the_id?> input-<?=$type;?> field_<?=$the_id?>" id="<?=$the_id?>" name="<?=$the_name?>" <?=(@$req != ""?'required="required"':'');?> placeholder="<?=$the_label?>" data-id="<?=$the_id?>">
    <?=(@$dbval != ""?$dbval:(isset($_REQUEST[$the_name])?$_REQUEST[$the_name]:''));?>
  </textarea>
  <?php if(isset($desc) || isset($description)):?><div class="description"><?=@$desc || @$description !=""?@$desc || @$description :'';?></div><?php endif;?>
