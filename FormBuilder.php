<?php
/* * * *
 * Class: FormBuilder
 * Version: 2.4
 * Date: 2.2: 5 Aug, | 2 Aug, 2022 | v1: 29 Jul, 2022
 * Description: Creates form fields with jQuery validation.
 * Fields: 'text','password', 'textarea', 'email', 'checkbox', 'radio', 'select','countries','kvselect' 'multiselect', 'multiple', 'date','date-special', 'image', 'range', 'submit'
 * * * * */
class FormBuilder
{
    public function __construct()
    {
        error_reporting(0);
    }
    public $args_help = array(
        'type' => 'THE TYPE OF THE FIELD, IF LEFT SHALL ASSUMED input type text<hr/>',
        'name' => 'THE NAME',
        'id' => 'THE ID',
        'label OR placeholder' => 'THE LABEL OR PLACEHOLDER',
        'NOTE FOR THE ABOVE 3' => 'IF ANY ONE OF THE name/id/label WAS PROVIDED, IT WILL TAKE CARE OF THE REST<hr/>',
        'label_col' => 'class of the label column for example col-md-4',
        'input_col' => 'class of the input column for example col-md-8',
        'required OR req' => 'IS REQUIRED OR NOT',
        'type_class' => 'alpha:alphabets only,numeric: numbers only,alphanumeric: exclude all special chars',
        'description' => 'DESCRIPTION DIV BELOW THE INPUT',
        'dbval' => 'THE VALUE COMING FROM DATABSE',
        'container_class' => 'CSS CLASS OF THE ABOVE div CONTINER',
        'options' => 'THE OPTIONS FOR: radio/select/multiple',
        'for range' => 'min & max: ARE MUST',
        'input_class' => 'APPLY COLUMN CLASSES DIRECT TO input EXCEPT ceheckbox/radiobutton/fileupload/multiple', //
        'NOTE:' => ' Want jQuery Validation? just add:  $form_builder = new FormBuilder(); $form_builder->jQuery_validation(); to your footer after jQuery and inside your onclick add: form_validator(".form_builder_submit",".form_builder_field.required"); And added new js classes alpha,numeric,alpha_numeric and alpha_numeric_dash or no_special_chars',
        'Available types in version 2.4' => " 'text','password', 'textarea', 'email', 'checkbox', 'radio', 'select','countries','kvselect' 'multiselect', 'multiple', 'date','date-special', 'image', 'range', 'submit' ",
    );

    public function field($args)
    {
        foreach ($args as $k => $v) {
            $$k = $v;
        }
        $types = array('text','password', 'textarea', 'email', 'checkbox', 'radio', 'select','countries','kvselect','multiselect','multiple', 'date','date-special', 'image', 'range', 'submit');

        if ((!isset($name) || empty($name)) && (!isset($id) || empty($id)) && (!isset($label) || empty($label))) {
            echo "<div class='text-danger form-group row'>Please specify at least one unique identifier! i.e: id,name or label.</div>";
            return;
        } elseif ((!isset($name) || empty($name)) && (!isset($id) || empty($id)) && !empty($label)) {
            $the_label = ucfirst($label);
            $the_id = str_replace(' ', '_', $label);
            $the_name = str_replace(' ', '_', $label);
        } elseif ((!isset($name) || empty($name)) && !empty($id) && (!isset($label) || empty($label))) {
            $the_label = ucfirst($this->make_label($id));
            $the_id = $id;
            $the_name = $id;
        } elseif (!empty($name) && (!isset($id) || empty($id)) && (!isset($label) || empty($label))) {
            $the_label = ucfirst($this->make_label($name));
            $the_id = $name;
            $the_name = $name;
        }?>
            <?php
        if ($type === "range") {
            if (($min == "") || ($min == "")) {
                echo "<div class='text-danger form-group row'>Please specify min & max values for range.</div>";
                return;
            }
        }
        ?>
<div class="form-group form_builder_row <?php echo $the_id ?>_container <?php echo $container_class != "" ? $container_class : ''; ?>">
<?php if (isset($label_col) && $label_col != "") {?><div class="<?php echo $label_col ?> form_builder_col"><?php }?>
<?php if($type != "submit"):?>
    <label class="control-label <?php echo @$label_class != "" ? $label_class : ''; ?> <?=$the_name;?>_label <?php echo ($type != 'checkbox') ? '' : 'order-md-2'; ?>" for="<?php echo $the_id; ?>">
            <?php if (($type == 'checkbox' || $type == 'radio')): ?><span><?php endif;?><?=@$the_label;?>:<?php if (($type == 'checkbox' || $type == 'radio')): ?></span><?php endif;?>
                <?php echo (isset($required) || @$required !== null || !empty(@$required) ? '<span class="text-danger">*</span>' : ''); ?>
    </label>
<?php endif;//ends type=submit?>            
<?php if (isset($label_col) && $label_col != "") {?></div><?php }?>
<?php if (isset($input_col) && $input_col != "") {?><div class="<?php echo $input_col ?> form_builder_col"><?php }?>
    <?php
    if (in_array($type, $types)) {
        include 'fields/' . $type . '.php';
    } else {
        include 'fields/text.php';
    }
    ?>
<?php if (isset($input_col) && $input_col != "") {?></div><?php }?>
</div>
<?php if (!empty(@$help)): ?>
    <?php $this->help();?>
<?php endif;?>
<?php
}

    public function jQuery_validation()
    {
        ob_start();?>
        <script src="functions.js"></script>
    <?php $html = ob_get_clean();
        echo $html;
    }

    public function make_label($str)
    {
        // Remove all characters except A-Z, a-z, 0-9
        $str = preg_replace('/[^A-Za-z0-9 -_]/', ' ', $str);
        // Replace sequences of spaces
        $str = preg_replace('/  */', ' ', $str);
        $str = preg_replace('/-/', ' ', $str);
        $str = preg_replace('/_/', ' ', $str);
        return $str;
    }
    public function help()
    {
        ob_start();?>
            <div class="container">
            <div class="row">
    <h3 style="width:100%;">Help:</h3>
    <p><strong>Available args with notes:</strong></p>
    <ul>
    <?php foreach ($this->args_help as $key => $value): ?>
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