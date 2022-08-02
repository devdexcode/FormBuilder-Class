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
    public $args_help = array(
        'type' => 'THE TYPE OF THE FIELD, IF LEFT SHALL ASSUMED input type text<hr/>',
        'name' => 'THE NAME',
        'id' => 'THE ID',
        'label OR placeholder' => 'THE LABEL OR PLACEHOLDER',
        'NOTE FOR THE ABOVE 3' => 'IF ANY ONE OF THE name/id/label WAS PROVIDED, IT WILL TAKE CARE OF THE REST<hr/>',
        'required OR req' => 'IS REQUIRED OR NOT',
        'description' => 'DESCRIPTION DIV BELOW THE INPUT',
        'dbval'=> 'THE VALUE COMING FROM DATABSE',
        'container_exists' => 'IF THE OUTER CONTAINER div EXISTS FOR THE lebel AND input/field',
        'container_class' => 'CSS CLASS OF THE ABOVE div CONTINER', 
        'options' => 'THE OPTIONS FOR: radio/select/multiple', 
        'input_class' => 'APPLY COLUMN CLASSES DIRECT TO input EXCEPT ceheckbox/radiobutton/fileupload/multiple',//
         'NOTE:' => ' IN THIS VERSION THERE WILL NOT BE ANY CONTAINER div FOR label or input ECT',
    );

        public function field($args){
            foreach($args as $k => $v) {
                $$k = $v;
            }
            $types  = array('text','textarea','email','checkbox','radio','select','multiple','image','date');

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
            }?>
        <?php if($container_exists != ""):?>
            <div class="form-group form-builder-row <?php echo $the_id?>_container <?php echo $container_class!= "" ? $container_class : '';?>">
        <?php endif;?>
         
            <label class="control-label <?php echo @$label_class != "" ? $label_class: '';?> <?=$the_name;?>_label <?php echo ($type !='checkbox') ? '':'order-md-2'; ?>" for="<?php echo $the_id;?>">
            <?php if( ($type == 'checkbox' || $type == 'radio')):?><span><?php endif;?><?=@$the_label;?>:<?php if( ($type == 'checkbox' || $type == 'radio')):?></span><?php endif;?>
                <?php echo (isset($required) || @$required !== null || !empty(@$required) ? '<span class="text-danger">*</span>' : '');?>
            </label> 
            
        <?php 
            if(in_array($type, $types)){
                include('components/fields/'.$type.'.php');
            } else{
                include('components/fields/text.php');
            }
        ?>
<?php if($container_exists != ""):?></div><?php endif;?>

<?php if(!empty(@$help)):?>
    <?php $this->help();?>
<?php endif;?>
<?php        }

       
        public function make_label($str) {
            // Remove all characters except A-Z, a-z, 0-9
            $str = preg_replace('/[^A-Za-z0-9 -_]/', ' ', $str);
            // Replace sequences of spaces 
            $str = preg_replace('/  */', ' ', $str);
            $str = preg_replace('/-/', ' ', $str);
            $str = preg_replace('/_/', ' ', $str);
            return $str;
        }
public function help(){    
    ob_start();?>
            <div class="container">
            <div class="row">
    <h3 style="width:100%;">Help:</h3>
    <p><strong>Available args with notes:</strong></p>
    <ul>
    <?php foreach($this->args_help as $key=>$value):?>
        <li><strong><?=$key?></strong> <?=$value;?></li>
    <?php endforeach;?>    
    </ul>
    <small><em>To hide this remove h or help from the function args</em></small>
            </div>
            </div>
<?php $html = ob_get_clean();
echo $html;
}

}    
?>