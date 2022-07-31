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
    // public $args = array(
    //     'type' => '',
    //     'name' => '',
    //     'label' => '',
    //     'required' || 'req' => '',
    //     'placeholder' => '',
    //     'description' => '',
    //     'id' => '',
    //     'css_class' => '',
    //     'database_value' || 'dbval'=> '',
    //     'container_exists' => '',
    //     'container_class' => '',
    //     'label_class' => '',
    //     'label_col' => '',
    //     'label_col_class' => '',
    //     'label_position' => '',
    //     'description_exists' => '',
    //     'description_class' => '',
    //     'response_div_exists' => '',
    //     'response_div_class' => '',
    //     'data_attribute' || 'data_attr' => '',
    //      'label_class',
    //      'label_col_class',
    //      'field_col_class',
    // );
    /**
     * text
     *
     * @param mixed $args:(17)|type,name,label,required,placeholder=label,description,id,css_class,dbval,container_exists,container_class,label_class,label_col_class,field_col_class,label_exists,label_position,is_bs4;
     *
     * @return [HTML: With or without container and label and description]
     */
    public function field($args)
    {   
       
        foreach($args as $k => $v) {
            $$k = $v;
        }
        $container_exists_options = array('yes',1,'y','true');

        
        $types      = array('text');


        if((!isset($name) || empty($name) ) && (!isset($id) || empty($id) )  && (!isset($label) || empty($label) ) ){
            echo "<div class='text-danger form-group row'>Please specify at least one unique identifier! i.e: id,name or label.</div>"; 
            return;
        }elseif((!isset($name)  || empty($name) ) && (!isset($id) || empty($id) ) && !empty($label)){
            $the_label = ucfirst($label);      
            $the_id = str_replace(' ','_',$label);          
            $the_name = str_replace(' ','_',$label);          
        }elseif( (!isset($name)  || empty($name) ) && !empty($id) && (!isset($label) || empty($label) )){
            $the_label = ucfirst($this->make_label($id));      
            $the_id = $id;          
            $the_name = $id;  
        }elseif(!empty($name) && (!isset($id) || empty($id) )  && (!isset($label) || empty($label) )){
            $the_label = ucfirst($this->make_label($name));      
            $the_id = $name;          
            $the_name = $name;  
        }
        ?>
        <?php if(in_array($container_exists,$container_exists_options)):?>
            <div class="form-group row <?php echo !empty($container_class) ? $container_class :'';?>">
        <?php endif;?>
        <?php if(!isset($no_label) || $no_label == "" || empty($no_label)){//if label exists
          
            if(@$label_position =="top" || @$label_position ==="" || null === @$label_position){
                include('components/label.php');
            }elseif(@$label_position != "" || @$label_position == "left" || @$label_position == "side"){
                include('components/label-left.php');
            }

        }//ends if label exists?>
        <?php 
            if(!isset($type) || empty($type)){
                include('components/types/text.php');
            } elseif(in_array($type, $types)){
                include('components/types/'.$type.'.php');
            } else{
                include('components/types/text.php');
            }
        ?>
            <?php if($container_exists):?></div><?php endif;?>
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
private function make_label($str) {
    // Remove all characters except A-Z, a-z, 0-9
    $str = preg_replace('/[^A-Za-z0-9 -_]/', ' ', $str);
    // Replace sequences of spaces 
    $str = preg_replace('/  */', ' ', $str);
    $str = preg_replace('/-/', ' ', $str);
    $str = preg_replace('/_/', ' ', $str);
    return $str;
}
private function is_not_empty($str){
    if(isset($str) || $str !== null || $str != "" || $str ==1 || $str != 0){
        return true;
    }
}
}
