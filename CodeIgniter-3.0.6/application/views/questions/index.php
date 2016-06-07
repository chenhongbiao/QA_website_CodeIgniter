

<h1><?php echo $title; ?></h1>

<div id="body">

<?php foreach ($questions as $questions_item): ?>

    <h3><?php echo $questions_item['title']; ?></h3>
    <p>
        <?php echo $questions_item['content']; ?>
        <a href="<?php echo site_url('questions/view/'.$questions_item['id']); ?>">Read More</a>
    </p>

<?php endforeach; ?>

</div>