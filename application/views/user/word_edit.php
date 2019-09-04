<div class="container">
  <h4 style="text-align:center">Edit Content</h4>
  <?php echo form_open('user/save?q=word');?>
    <?php foreach ($str as $key): ?>
        <div class="form-group">
         <label for="formGroupExampleInput">Header</label>
         <input type="text" class="form-control" id="formGroupExampleInput" name="header"value="<?php echo htmlentities($key['header']);?>">
       </div>
          <label for="formGroupExampleInput">Body</label>
          <textarea name="body" rows="8" cols="80" id="editor1"><?php echo $key['body'];?></textarea>
    <?php endforeach; ?><br>
    <input type="submit" name="submit" value="Save" class="btn btn-success btn-sm">
  </form>
</div>
