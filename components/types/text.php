


<div class="col-md-<?=($input_col ==""?'8':$input_col);?>">
    <input class="form-control <?=($css_class != ""?$css_class:'');?>" type="text" id="<?=$the_id?>" name="<?=$the_name?>" value="<?=(@$dbval != ""?$dbval:(isset($_REQUEST[$the_name])?$_REQUEST[$the_name]:''));?>" <?=(@$req != ""?'required="required"':'');?> placeholder="<?=$the_label?>">
    <div class="description"><?=@$desc!=""?$desc:'';?></div>
</div>