<?php

/* * * *
 * Class: FormBuilder
 * Version: 1
 * Date: 29 July, 2022
 * Description: Creates form fields.
 * Fields: text, textarea, radio, checkbox, multiselect=multiselect checkboxes, country, date,select, file upload,
 * * * * */
class FormBuilder
{
    public $args = array(
        'type' => '',
        'name' => '',
        'label' => '',
        'required' => '',
        'placeholder' => '',
        'description' => '',
        'id' => '',
        'css_class' => '',
        'database_value' || 'dbval'=> '',
        'container_exists' => '',
        'container_class' => '',
        'label_class' => '',
        'label_col' => '',
        'label_position' => '',
        'is_bs4' => '',
        'description_exists' => '',
        'description_class' => '',
        'response_div_exists' => '',
        'response_div_class' => '',
        'data_attribute' || 'data_attr' => '',
    );
    /**
     * text
     *
     * @param mixed $args:(17)|type,name,label,required,placeholder,description,id,css_class,dbval,container_exists,container_class,label_exists,label_position,is_bs4;
     *
     * @return [HTML: With or without container and label and description]
     */
    public function field($args)
    {       ?>
        <?php if($args['container_exists']):?> <div class="<?php echo $args['is_bs4'] !='' ? 'form-group row' : '';?>"><?php endif;?>
        
<?php  /*label_col?>   
        
            
        <?php if($args['label'] != "" || $args['label_position'] == "" || $args['label_position'] == "top"|| $args['label_position'] != 0 ||  $args['label_position'] != 'left' || $args['label_position'] == 1):?>
                <?php include_once('components/label.php');?>                
        <?php elseif($args['label_position'] !=""  || $args['label_position'] == "left" || $args['label_position'] == "side" || $args['label_position'] != 1 || $args['label_position'] == 2):?>
                <?php include_once('components/label-left.php');?>
            <?php else:?>.   
            <?php endif;?>  <?php  */?>  
            <?php  /*label_col?><div class="col-md-<?=($this->label_col == "" ? '4' : $this->label_col);?>"><label class="control-label text-right" for="<?=$name?>"><?=ucfirst($this->clean($label));?><?=($req != null ? '<span class="text-danger">*</span>' : '');?></label></div>
            <div class="col-md-<?=($this->input_col == "" ? '8' : $this->input_col);?>">
                <input class="form-control <?=($css_class != "" ? $css_class : '');?>" type="text" id="<?=$name?>" name="<?=$name?>" value="<?=($dbval != "" ? $dbval : '');?>" <?=($req != "" ? 'required="required"' : '');?> placeholder="<?=$placeholder?>">
                <div class="desc"><?=$desc != "" ? $desc : '';?></div>
            </div> <?php  */?>
            <?php if($args['container_exists']):?></div><?php endif;?>
  <?php }

private function sanitize($stringToSanitize) {
	return addslashes(htmlspecialchars($stringToSanitize));
}
private function clean($str) {
    // Remove all characters except A-Z, a-z, 0-9 and -_
    $str = preg_replace('/[^A-Za-z0-9 -_]/', ' ', $str);
    // Replace sequences of spaces 
    $str = preg_replace('/  */', ' ', $str);
    $str = preg_replace('/-/', ' ', $str);
    $str = preg_replace('/_/', ' ', $str);
    return $str;
}
}
