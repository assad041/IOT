<?php echo form_open('post/login') ?>
  <fieldset>
    <legend>Login</legend>
    <?php echo validation_errors(); ?>
    <?php echo '<label class="text-denger">'.$this->session->flashdata('error').'</label><br>'; ?>
    <div class="form-group">
      <label>Email address</label>
      <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label >Password</label>
      <input type="password" class="form-control" name="pass"  placeholder="Password">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

  </fieldset>
</form>
