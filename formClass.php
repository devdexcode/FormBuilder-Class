<?php
/* * * *
 * Class: FormFields
 * Version: 5
 * Date: 30 June, 2020
 * Description: Creates form fields & displays. 
 * Fields: text, textarea, radio, checkbox, multiselect=multiselect checkboxes, country, date,select, file upload,
 * * * * */
/**
 * [Description FormFields]
 */
class FormFields{
 
/********************|WORDPRESS COLORPICKER|**********************/
    public function wp_color($name, $label, $dbval = null, $req = null, $desc = null, $css_class = null) {?>  
      <div class="form-group row">
          <div class="col-md-<?=($this->label_col ==""?'4':$this->label_col);?>"><label class="control-label text-right" for="<?=$name?>"><?= ucfirst($this->clean($label));?><?=($req!=null?'<span class="text-danger">*</span>':'');?></label></div>
          <div class="col-md-<?=($this->input_col ==""?'8':$this->input_col);?>">
              <input class="form-control cpa-color-picker <?=($css_class != ""?$css_class:'');?>" type="text" id="<?=$name?>" name="<?=$name?>" value="<?=($dbval != ""?$dbval:'');?>" <?=($req != ""?'required="required"':'');?>>
              <div class="desc"><?=$desc!=""?$desc:'';?></div>
          </div>
      </div>
<?php  }
/********************|WORDPRESS UPLOADS|**********************/
    public function wp_upl($name, $label, $dbval = null, $id, $desc = null, $css_class = null) {?>  
      <div class="form-group row">
          <div class="col-md-<?=($this->label_col ==""?'4':$this->label_col);?>"><label class="control-label text-right" for="<?=$id?>-btn"><?= ucfirst($this->clean($label));?></label></div>
          <div class="col-md-<?=($this->input_col ==""?'8':$this->input_col);?>">
                                
                    <input type="text" readonly name="<?=$name?>" id="<?=$id?>" value="<?= ($dbval  != "") ? ($dbval ) : ''; ?>" class="form-control col-sm-6" size="30" />
                    <input type="button" name="<?=$id?>" id="<?=$id?>-btn" class="btn btn-primary" value="Upload Image">
                    <div class="<?=$id?>_imagearea col-sm-3">
                        <div class="images_parent_class">
                            <div class="<?=$id?>-delete delete_btn">X</div>
                            <img src="<?= ($dbval  != "") ? ($dbval) : ''; ?>" id="<?=$id?>-img" class="<?= ($dbval  != "") ? 'img-thumbnail' : ''; ?>" style="margin-left: auto; margin-right: auto; display: block;"/>
                        </div>
                    </div>
            
              <div class="desc"><?=$desc!=""?$desc:'';?></div>
                          <script>
                var $ = jQuery;
                jQuery(document).ready(function ($) {
                    $("#<?=$id?>-btn").click(function (e) {
                        e.preventDefault();
                        var image = wp.media({
                            title: "Upload Image",
                            // mutiple: true if you want to upload multiple files at once
                            multiple: false
                        }).open()
                                .on("select", function (e) {
                                    // This will return the selected image from the Media Uploader, the result is an object
                                    var uploaded_image = image.state().get("selection").first();
                                    // We convert uploaded_image to a JSON object to make accessing it easier
                                    // Output to the console uploaded_image
                                    console.log(uploaded_image);
                                    var image_url = uploaded_image.toJSON().url;
                                    // Lets assign the url value to the input field
                                    $('#<?=$id?>').val(image_url);
                                    $('#<?=$id?>-img').attr('src', image_url);
                                    $('#<?=$id?>-img').addClass();
                                    $('.<?=$id?>-delete').show();
                                });
                    });
                });
                $(document).on('click', '.<?=$id?>-delete', function () {
                    $('#<?=$id?>').val('');
                    $('#<?=$id?>-img').attr('src', '');
                    $('.<?=$id?>-delete').hide();
                });
            </script>
            <style>.<?=$id?>-delete{display: none;<?= ($dbval != "") ? 'display: block;' : '' ?> color: white;font-weight: bold;cursor: pointer;position: absolute;top: -10px;right: -10px;border: 2px solid red;border-radius: 50px;text-align: center; width: 18px;height: 18px;background-color: red;}
                .images_parent_class{display: inline-block;position:relative;width: 150px;height: 150px;}
                .images_parent_class img{max-width:100%;width:100%;height:auto;}.<?=$id?>_imagearea {float: right;}</style>
          </div>
      </div>
<?php  }//ends wp uploads













/********************|SELECT WP QUERY|**********************/
public function select_wpquery($name, $label, $dbval = null, $req = null, $desc = null,$wpquery,$key,$value, $css_class = null) {?>  
      <div class="form-group row">
          <div class="col-md-<?=($this->label_col ==""?'4':$this->label_col);?>"><label class="control-label text-right" for="<?=$name?>"><?= ucfirst($this->clean($label));?><?=($req!=null?'<span class="text-danger">*</span>':'');?></label></div>
          <div class="col-md-<?=($this->input_col ==""?'8':$this->input_col);?>">
 <select class="form-control <?=($css_class != ""?$css_class:'');?>" id="<?=$name?>" name="<?=$name?>" <?=($req != ""?'required="required"':'');?>>
    <option value=''>Select</option>
    <?php  foreach ($wpquery as $row) {?>
    <option value='<?=$row->$key?>' <?=($row->$key==$dbval)?"selected='selected'":'';?>><?= ucfirst($row->$value);?></option>
    <?php     }?>
</select>
              <div class="desc"><?=$desc!=""?$desc:'';?></div>
          </div>
      </div>
<?php  }
/* clean a string */
private function clean($str) {
    // Remove all characters except A-Z, a-z, 0-9 and -_
    $str = preg_replace('/[^A-Za-z0-9 -_]/', ' ', $str);
    // Replace sequences of spaces 
    // $str = preg_replace('/  */', ' ', $str);
    // $str = preg_replace('/-/', ' ', $str);
    $str = preg_replace('/_/', ' ', $str);
    return $str;
}

}
