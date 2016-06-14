
<div class="pure-g">
    <div class="text-box pure-u-2-3">
        <div class="l-box">
            <h1 class="text-box-head"><?php echo $title; ?></h1>

            <div id="body">
            <?php foreach ($questions as $questions_item): ?>
                 
            <h3><?php echo $questions_item['title']; ?></h3>
                
                <p>
                <?php echo $questions_item['content']; ?>
                <a href="<?php echo site_url('questions/view/'.$questions_item['id']); ?>">Read More</a>
                </p>
           <?php endforeach; ?>
            </div>

        </div>
    </div>

    <div class="text-box pure-u-1-3">
        <div class="l-box">
            <h1 class="text-box-head">People from around the world</h1>
            <h3>The person I miss</h3>
            <p>
                Just by looking at her face, I would have a wonderful feeling of peace as if I were in a different world.
                Just by listening to her voice, I would have enormous courage to face any shadow that blocked my way.
                Maybe she doesn't realize how powerful she is for me, but the fact is that because of her, my heart is alive.
            </p>
        </div>
    </div>
</div>
