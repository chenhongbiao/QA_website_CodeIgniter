<?php 
require_once ("templates/includes/session.php");
is_logged(); 
 ?> 

<h1><?php echo $title; ?></h1>

<div id="body">

    <?php echo validation_errors(); ?>

    <?php echo form_open('ask', 'class="pure-form pure-form-stacked"');  ?>

    <fieldset>

    <label for="title">Title</label>
    <input name="title" placeholder="Title" /><br/>
  <!--use input name="xx" please, instead of id="xx", or CI can't work-->
    <label for="label">Label</label>
    <input name="label" placeholder="Label" /><br/>

    <label for="content">Content</label>
    <textarea name="content"></textarea><br/>

    <button type="submit" class="pure-button pure-button-primary">Ask Now!</button>

     </fieldset>
</form>

</div>

