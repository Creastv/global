<?php
$colOne = get_field('col_one');
$colTwo = get_field('col_two');

$title = get_field( 'title' );
$des = get_field( 'desc' );
?>

<div id="faq">
    <div class="faq js">
        <div class="faq__wraper" itemscope="" itemtype="https://schema.org/FAQPage">
            <?php if(!empty($colOne['accordion'])) { ?>
            <div class="col" >
                <?php foreach($colOne['accordion'] as $acc) { ?>
                <div class="accordion js " itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h3 class="question h5">
                        <span itemprop="name"><?php echo $acc['accordion_name']; ?></span>
                    </h3>
                    <div class="answer" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                            <?php echo $acc['accordion_content']; ?>
                        </div>
                    </div>
                </div>
                <?php $count++; } ?>
            </div>
            <?php } ?>
            <?php if(!empty($colTwo['accordion']) ) { ?>
            <div class="col">
                <?php foreach($colTwo['accordion'] as $acc) : ?>
                <div class="accordion js" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h3 class="question h5">
                        <span itemprop="name"><?php echo $acc['accordion_name']; ?></span>
                    </h3>
                    <div class="answer" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                            <?php echo $acc['accordion_content']; ?>
                        </div>
                    </div>
                </div>
                <?php $count++; endforeach; ?>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
