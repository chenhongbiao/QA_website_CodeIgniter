

<div class="pure-g">
    <div class="text-box pure-u-2-3">

        <div class="l-box">
            <h1 class="text-box-head"><?php echo $title; ?></h1>
            <div id="body">
            <p><?php echo $questions_item['content']; ?></p>
            </div>

            <h1 class="text-box-head"><?php echo 'Answer Counts'; ?></h1>
            <div id="body">

                <?php foreach ($answers_item as $answers): ?>
                <h3><?php echo 'The author of this answer: '.$answers['authorId']; ?></h3>

                <p><?php echo $answers['content']; ?></p>
                <?php endforeach; ?>

            </div>

            <a  style="margin: 0 8px 8px 90%" class="pure-button pure-button-primary" href="<?php echo site_url('questions'); ?>">Return</a>

        </div>

    </div>

    <div class="text-box pure-u-1-3">

        <div class="pure-g">
            <div class="text-box pure-u-1-1">
                <a class="ask-button pure-button" href="<?php echo site_url('questions/ask'); ?>">Ask</a>
             </div>

            <div class="text-box pure-u-1-1">
            <div class="l-box">
                <h3>The person I miss</h3>
                <p style="padding-left: 10px">
               If I meet her again, I would say "Thank you, Thank you for any of the good times we shared. 
               Sorry, Sorry for all the stupid things I did." and I would tell her all interesting things I had in my university life.
               Just by looking at her face, I would have a wonderful feeling of peace as if I were in a different world.
               Just by listening to her voice, I would have enormous courage to face any shadow that blocked my way
               Maybe she doesn't realize how powerful she is for me, but the fact is that because of her, my heart is alive.
               However, unlike fairy tale s where stories always have a happy ending, I messed things up.
               But now, I just miss her, deeply.
               Way Back Into Love.
                </p>
            </div>
             </div>

        </div>

    </div>
</div>

