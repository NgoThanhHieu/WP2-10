<?php


function exerciseOne() {
drawArmrise(); drawPushup(); drawArmrise(); drawSquat();
}

function exerciseTwo() {
drawPushup(); drawArmrise(); drawSquat();
}

function exerciseThree() {
drawSitup(); drawBenchpress(); drawDips(); drawArmrise();
}

function exerciseFour() {
drawBenchpress(); drawDips(); drawArmrise(); drawSquat(); drawBenchpress();
}

function drawSquat() {
?> <img src="squat.jpg" alt="squat" style="width:100px">
<?php ;}

function drawBenchpress() {
?> <img src="benchpress.jpg" alt="benchpress" style="width:100px">
<?php ;}

function drawPushup() {
?> <img src="pushup.jpg" alt="pushup" style="width:100px">
<?php ;}

function drawArmrise() {
?> <img src="armraise.jpg" alt="armraise" style="width:100px">
<?php ;}

function drawDips() {
?> <img src="dips.jpg" alt="dips" style="width:100px">
<?php ;}