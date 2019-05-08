<?php
    $slides = $page->gallery()->toFiles()->count();
?>
<style>
.slide1 {
    animation:fade <?= 3 * $slides ?>s infinite;
} 
.slide2 {
    animation:fade2 <?= 3 * $slides ?>s infinite;
}
.slide3 {
    animation:fade3 <?= 3 * $slides ?>s infinite;
}
.slide4 {
    animation:fade4 <?= 3 * $slides ?>s infinite;
}
.slide5 {
    animation:fade5 <?= 3 * $slides ?>s infinite;
}
@keyframes fade {
    0% {opacity:1}
    <?php if($slides > 1):?>
    <?= 100 / $slides ?>% { opacity: 0}
    <?php endif;?>
    <?php if($slides > 2):?>
    <?= 2 * (100 / $slides )?>% { opacity: 0}
    <?php endif;?>
    <?php if($slides > 3):?>
    <?= 3 * (100 / $slides )?>% { opacity: 0}
    <?php endif;?>
    <?php if($slides > 4):?>
    <?= 4 * (100 / $slides )?>% { opacity: 0}
    <?php endif;?>
    100% { opacity: 1}
}
@keyframes fade2 {
    0% {opacity:0}
    <?php if($slides > 1):?>
    <?= 100 / $slides ?>% { opacity: 1}
    <?php endif;?>
    <?php if($slides > 2):?>
    <?= 2 * (100 / $slides )?>% { opacity: 0}
    <?php endif;?>
    <?php if($slides > 3):?>
    <?= 3 * (100 / $slides )?>% { opacity: 0}
    <?php endif;?>
    <?php if($slides > 4):?>
    <?= 4 * (100 / $slides )?>% { opacity: 0}
    <?php endif;?>
    100% { opacity: 0}
}
@keyframes fade3 {
    0% {opacity:0}
    <?php if($slides > 1):?>
    <?= 100 / $slides ?>% { opacity: 0}
    <?php endif;?>
    <?php if($slides > 2):?>
    <?= 2 * (100 / $slides )?>% { opacity: 1}
    <?php endif;?>
    <?php if($slides > 3):?>
    <?= 3 * (100 / $slides )?>% { opacity: 0}
    <?php endif;?>
    <?php if($slides > 4):?>
    <?= 4 * (100 / $slides )?>% { opacity: 0}
    <?php endif;?>
    100% { opacity: 0}
}
@keyframes fade4 {
    0% {opacity:0}
    <?php if($slides > 1):?>
    <?= 100 / $slides ?>% { opacity: 0}
    <?php endif;?>
    <?php if($slides > 2):?>
    <?= 2 * (100 / $slides )?>% { opacity: 0}
    <?php endif;?>
    <?php if($slides > 3):?>
    <?= 3 * (100 / $slides )?>% { opacity: 1}
    <?php endif;?>
    <?php if($slides > 4):?>
    <?= 4 * (100 / $slides )?>% { opacity: 0}
    <?php endif;?>
    100% { opacity: 0}
}
@keyframes fade5 {
    0% {opacity:0}
    <?php if($slides > 1):?>
    <?= 100 / $slides ?>% { opacity: 0}
    <?php endif;?>
    <?php if($slides > 2):?>
    <?= 2 * (100 / $slides )?>% { opacity: 0}
    <?php endif;?>
    <?php if($slides > 3):?>
    <?= 3 * (100 / $slides )?>% { opacity: 0}
    <?php endif;?>
    <?php if($slides > 4):?>
    <?= 4 * (100 / $slides )?>% { opacity: 1}
    <?php endif;?>
    100% { opacity: 0}
}
</style>