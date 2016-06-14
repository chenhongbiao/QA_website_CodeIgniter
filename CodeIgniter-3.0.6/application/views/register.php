
<h1><?php echo $title; ?></h1>

<div id="body">

    <?php echo validation_errors(); ?>

    <?php echo form_open('register', 'class="pure-form pure-form-stacked"');  ?>
    
    <fieldset>

    <label for="username">Username</label>
    <input name="username" placeholder="Username" />
  <!--use input name="xx" please, instead of id="xx", or CI can't work-->

    <label for="password">Password</label>
    <input name="password" type="password" placeholder="Password" />

        
    <label for="email">Email</label>
    <input name="email" type="email" placeholder="Email" />

    <button type="submit" class="pure-button pure-button-primary">Sign Up!</button>
    
    </fieldset>

</form>

</div>

