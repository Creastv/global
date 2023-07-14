<?php 
$tabs = get_field( 'tabs' );
$conter = 0;
?>

<div id="tabs">
    <div class="tabs js">
        <div class="tabs__wraper">
            <div class="nav">
                <ul>
                    <?php foreach($tabs as $acc) { ?>
                    <li>
                        <div class="tab__link" onclick="changeTab(<?php echo $conter; ?>)">
                        <span><?php echo $acc['name']; ?></span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="9.893" height="18.701" viewBox="0 0 9.893 18.701">
                            <path id="Shape_8_copy" data-name="Shape 8 copy" d="M610.165,2338l8.835,9-8.835,9" transform="translate(-609.808 -2337.65)" fill="none" stroke="#b6b6b6" stroke-width="1"/>
                            </svg>
                    </div>
                    </li>
                    <?php $conter++; } ?>
                </ul>
            </div>
            <div class="content__wraper">
                <?php foreach($tabs as $acc) { ?>
                <div class="content">
                    <?php echo $acc['opiscontent']; ?>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
