  <input type="email" 
  class="<?=(@$req != ""?'required':'');?> form-control <?= $input_class != "" ? $input_class:''; ?> <?=$the_id?> input-<?=$type;?> field_<?=$the_id?>" 
  id="<?=$the_id?>" name="<?=$the_name?>" 
  value="<?=(@$dbval != ""?$dbval:(isset($_REQUEST[$the_name])?$_REQUEST[$the_name]:''));?>" 
  <?=(@$req != ""?'required="required"':'');?> 
  placeholder="<?=$the_label?>"
   data-id="<?=$the_id?>">
  <div class="description response"><?=@$desc || @$description !=""?@$desc || @$description :'';?></div>
