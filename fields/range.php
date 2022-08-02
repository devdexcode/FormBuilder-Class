<div class="<?=$input_class != "" ? $input_class : '';?>">
<input type="range" 
class="<?=$the_id?> input-<?=$type;?> field_<?=$the_id?>"
name="weight" id="<?=$the_id?>" 
value="<?=(@$dbval != ""?$dbval:(isset($_REQUEST[$the_name])?$_REQUEST[$the_name]:''));?>" <?=(@$req != ""?'required="required"':'');?>
min="<?=@$min?>" max="<?=@$max?>" 
oninput="range_weight_disp.value = <?=$the_name?>.value">
   <output id="range_weight_disp"><?=$_POST[$the_name];?></output>
</div>   