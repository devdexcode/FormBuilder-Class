<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>
        <link rel='stylesheet' id='Font_Awesome-css'  href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css?ver=6.0.1' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-css'  href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css?ver=6.0.1' type='text/css' media='all' />
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
<?php $form_builder->field(array(
    'container_exists'=>'yes', 
    'label'=>'Full Name',
    'required'=>1,
    'label_col'=>4,
    'input_col'=>8,
    'type'=>'text',
    ));

    $form_builder->field(array(
        'container_exists'=>'yes', 
        'required'=>1,
        'label_col'=>4,
        'input_col'=>8,
        'label_position'=>'top',
        'id'=>'user_email'
        ));
        $form_builder->field(array(
            'container_exists'=>'yes', 
            'name'=>'',
            'required'=>1,
            'label_col'=>4,
            'input_col'=>8,
            'label_position'=>'side',
            'id'=>'bingo'
            ));
            $form_builder->field(array(
                'container_exists'=>'yes', 
                'name'=>'Age',
                'required'=>1,
                'label_position'=>0,
                'no_label'=>'yes',
                ));?>

    <button type="submit" class="btn btn-primary" id="sendMessageButton">Send Message</button>
    <hr>
    <?php ?>
</form>
                </div>
            </div>
        </div>
       
        
        <!-- <div class="container">
            <div class="row">
                <div class="col-md-12">

                </div>
            </div>
        </div> -->


        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </body>
</html>
