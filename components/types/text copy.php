


    <?php if( $this->is_not_empty(@$label_position) || @$label_position =="left" || @$label_position =="side"  || @$label_position ==2 || @$label_position !="top" ):?>
        <div class="col-md-<?=(!isset($input_col) || $input_col ==""?'8':$input_col);?> <?php if( $this->is_not_empty(@$field_col_class) ) { echo @$field_col_class;} ?>">
    <?php endif;//ends label position?>
    <input class="form-control <?=(@$css_class != ""?$css_class:'');?>" type="text" id="<?=$the_id?>" name="<?=$the_name?>" value="<?=(@$dbval != ""?$dbval:(isset($_REQUEST[$the_name])?$_REQUEST[$the_name]:''));?>" <?=(@$req != ""?'required="required"':'');?> placeholder="<?=$the_label?>">
    <?php if(isset($desc) || isset($description)):?><div class="description"><?=@$desc || @$description !=""?@$desc || @$description :'';?></div><?php endif;?>
    <?php if( $this->is_not_empty(@$label_position) || @$label_position =="left"  || @$label_position =="side"  || @$label_position ==2 ):?></div><?php endif;//ends label position?>



        <?php if( $this->is_not_empty(@$label_position) || @$label_position =="left" || @$label_position =="side"  || @$label_position ==2 || @$label_position !="top" ) {?>
        <div class="col-md-<?=(!isset($input_col) || $input_col ==""?'8':$input_col);?> <?php if( $this->is_not_empty(@$field_col_class) ) { echo @$field_col_class;} ?>">
        <?php }?>    
        <?php else{}?>