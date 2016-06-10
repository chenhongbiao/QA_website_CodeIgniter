

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
        <div class="l-box">
            <h1 class="text-box-head">She is the story</h1>
            <h3>The person I miss</h3>
            <p>
               If I meet her again, I would say "Thank you, Thank you for any of the good times we shared. 
                Sorry, Sorry for all the stupid things I did." and I would tell her all interesting things I had in my university life.
                But now, I just miss her, deeply.
                Way Back Into Love.
            </p>
        </div>
    </div>
</div>
