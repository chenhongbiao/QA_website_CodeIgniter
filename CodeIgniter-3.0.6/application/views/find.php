<?php 
require_once ("templates/includes/session.php");
is_logged(); 
 ?> 

<div class="pure-g">
    <div class="text-box pure-u-2-3">
        <div class="l-box">
            <h1 class="text-box-head"><?php echo $title.$_SESSION['username']; ?></h1>

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
            <h1 class="text-box-head">The one I never forget</h1>
            <h3>An Unexpected Girl</h3>
            <p>
                She depends on own strength to live, with his pen, and let herself become Jane Austen.
                At the story last reunion, it made me sob unceasingly. The conversation that looks very relaxed, 
                but we can see a bit fracture in Tom daughter's name. Yes...
                I loved you, never forget you.
            </p>
        </div>
    </div>
</div>
