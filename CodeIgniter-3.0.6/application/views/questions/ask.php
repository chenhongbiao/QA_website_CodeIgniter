
<h1><?php echo $title; ?></h1>

<div id="body">

    <?php echo validation_errors(); ?>

    <?php echo form_open('ask'); ?>

    <label for="title">Title</label>
    <input type="input" name="title" /><br/>

    <label for="content">Content</label>
    <textarea name="content"></textarea><br/>

    <input type="submit" name="submit" value="Ask Now!" />

</form>

</div>