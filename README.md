# FormBuilder-Class

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
        'Available types in version 2.3' => " 'text','password', 'textarea', 'email', 'checkbox', 'radio', 'select','kvselect' 'multiselect', 'multiple', 'date','date-special', 'image', 'range', 'submit' ",
    
