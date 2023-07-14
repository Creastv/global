<?php
$size = get_field( 'size' );
$class="normal";
$classWrap = 'container';
if($size = 'Wide'){
    $class="wide";
    $classWrap ='container-fluid';
}


?>
<div class="custom-con__wraper <?php echo $class; ?>">
    <div class="<?php echo $classWrap; ?>">
        <div class="row">
            <InnerBlocks />
        </div>
    </div>
</div>