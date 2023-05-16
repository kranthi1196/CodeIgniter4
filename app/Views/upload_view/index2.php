<?php echo validation_errors();?>
<?php echo form_open_multipart('pages/index');?>
<p><input type="file" multiple="multiple" name="image_name[]" class="form-control" /></p>

<input type="submit" class="btn btn-success btn-block"/> 
</form>