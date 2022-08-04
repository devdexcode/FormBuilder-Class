<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>
<link rel='stylesheet' id='Font_Awesome-css'  href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css?ver=6.0.1' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-css'  href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css?ver=6.0.1' type='text/css' media='all' />
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
   </head>
    <body>
        <?php include_once 'FormBuilder.php';?>
        <?php include_once 'formClass.php';?>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <h1 class="text-center">FormBuilder</h1>

<form name="SignUp" id="SignUp" method="post">
<?php $form_builder = new FormBuilder();?>
<h3>Text</h3>
<?php $form_builder->field(array(
    'container_exists' => 'yes',
    'container_class' => 'row',
    'label' => 'Full Name',
    'required' => 1,
    'type' => 'text',
    'label_class'=>'the_label',
    'input_class'=>'the_field',
    'label_col'=>'col-md-2',
    'input_col'=>'col-md-4',
    'min' => 4,
    'max' => 5
)); ?>

<h3>Email</h3>
<?php $form_builder->field(array(
    'container_exists' => 'yes',
    'container_class' => 'row',
    'label' => 'email',
    'required' => 1,
    'type' => 'email',
    'label_class'=>'the_label',
    'input_class'=>'the_field',
    'label_col'=>'col-md-2',
    'input_col'=>'col-md-4',
)); ?>
<h3>Textarea</h3>
<?php $form_builder->field(array(
    'container_exists' => 'yes',
    'container_class' => 'row',
    'label' => 'message',
    'required' => 1,
    'type' => 'textarea',
    'label_class'=>'the_label',
    'input_class'=>'the_field',
    'label_col'=>'col-md-2',
    'input_col'=>'col-md-4',
)); ?>
<h3>Checkbox</h3>
<?php $form_builder->field(array(
    'container_exists' => 'yes',
    'container_class' => 'row',
    'label' => 'agree',
    'required' => 1,
    'type' => 'checkbox',   
    'label_class'=>'the_label',
    'input_class'=>'the_field',
    'label_col'=>'col-md-2',
    'input_col'=>'col-md-4',
)); ?>
<h3>Radio</h3>
<?php $form_builder->field(array(
    'container_exists' => 'yes',
    'container_class' => 'row',
    'label' => 'Gender',
    'required' => 1,
    'type' => 'radio',   
    'label_class'=>'the_label',
    'input_class'=>'the_field',
    'label_col'=>'col-md-2',
    'input_col'=>'col-md-4',
    'options'=> array('male','female')
)); ?>
<h3>Select</h3>
<?php $form_builder->field(array(
    'container_exists' => 'yes',
    'container_class' => 'row',
    'label' => 'misc',
    'required' => 1,
    'type' => 'select',   
    'label_class'=>'the_label',
    'input_class'=>'the_field',
    'label_col'=>'col-md-2',
    'input_col'=>'col-md-4',
    'options'=> array('lorem','ipsum','dolor','sit','amet')
)); ?>
<h3>Select 2</h3>
<?php $form_builder->field(array(
    'container_exists' => 'yes',
    'container_class' => 'row',
    'label' => 'select test',
    'required' => 'yes',
    'type' => 'select',   
    'label_class'=>'the_label',
    'input_class'=>'the_field',
    'label_col'=>'col-md-2',
    'input_col'=>'col-md-4',
    'options'=> array('one','two','three','four','five','six')
)); ?>
<h3>Multiple</h3>
<?php $form_builder->field(array(
    'container_exists' => 'yes',
    'container_class' => 'row',
    'label' => 'the multiple',
    'required' => 1,
    'type' => 'multiple',   
    'label_class'=>'the_label',
    'input_class'=>'the_field',
    'label_col'=>'col-md-2',
    'input_col'=>'col-md-4',
    'options'=> array('lorem','ipsum','dolor','sit','amet')
)); ?>
<h3>Date</h3>
<?php $form_builder->field(array(
    'container_exists' => 'yes',
    'container_class' => 'row',
    'label' => 'event date',
    'required' => 1,
    'type' => 'date',   
    'label_class'=>'the_label',
    'input_class'=>'the_field',
    'label_col'=>'col-md-2',
    'input_col'=>'col-md-4',
)); ?>
<h3>Image Upload</h3>
<?php $form_builder->field(array(
    'container_exists' => 'yes',
    'container_class' => 'row',
    'label' => 'your image',
    'required' => 1,
    'type' => 'image',   
    'label_class'=>'the_label',
    'input_class'=>'the_field',
    'label_col'=>'col-md-2',
    'input_col'=>'col-md-4',
)); ?>
<h3>Range</h3>
<?php $form_builder->field(array(
    'container_exists' => 'yes',
    'container_class' => 'row',
    'label' => 'the range',
    'required' => 1,
    'type' => 'range',   
    'label_class'=>'the_label',
    'input_class'=>'the_field',
    'label_col'=>'col-md-2',
    'input_col'=>'col-md-4',
    'min'=>'0',
    'max'=>'100',
)); ?>
<h3>Password</h3>
<?php $form_builder->field(array(
    'container_exists' => 'yes',
    'container_class' => 'row',
    'label' => 'Password',
    'required' => 1,
    'type' => 'password',   
    'label_class'=>'the_label',
    'input_class'=>'the_field',
    'label_col'=>'col-md-2',
    'input_col'=>'col-md-4',
    'min'=>4,
    'help'=>'1'
)); ?>
<h3>Submit</h3>
<?php $form_builder->field(array(

    'container_class' => 'row',
    'label' => 'submit',
    'required' => 1,
    'type' => 'submit',   
    'label_class'=>'the_label',
    'input_class'=>'the_field',
    'label_col'=>'col-md-reverse',
    'input_col'=>'col-md-4',
)); ?>
    <hr>
    <?php ?>
</form>
                </div>
            </div>
        </div>


<?php $form_builder->jQuery_validation();?>       
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<!-- <script>
    function validate(obj) {
        let val =obj.value;
        submit = document.getElementsByClassName('form_builder_submit');    
        if(val == ""){
            alert('please enter '+make_label(obj.name)); 
            submit[0].setAttribute("disabled", "disabled");
            event.preventDefault();
            return false;
        }else if(val.length <= 2){
            alert(make_label(obj.name)+' must be at least 3 characters!');
        }else{
            alert(obj.type);
            submit[0].removeAttribute("disabled");
        }
    }
</script> -->
<script>
    (function ($) {
 $(document).ready(function() {	
	$('.form_builder_submit').on('click',function(e){
        e.preventDefault();
        console.log('Clicked!');
    });
 });
})(jQuery);
</script>
    </body>
</html>
