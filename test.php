<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<style type="text/css">
	.box {
  /* What ever properties here, just not `animation` */
}

.js-animate {
  animation: do-stuff 200ms linear;
}

@keyframes do-stuff {
  ⋮
}

.box {
  opacity: 0;
  transition: all 200ms linear;
}

.js-box-fade {
  opacity: 1;
}
</style>

<script type="text/javascript">
	var $box = $('.box');

$box.addClass('js-animate');

var $box = $('.box');

$box.on('animationend', function () {
  // This function will execute when the animation ends
  // Would be a good place to remove the class from the element
});

var $box = $('.box');

$box.on('webkitAnimationEnd animationend', function () {
  // Notice the `webkitAnimationEnd` above
  // The vendor prefixed version of the event and the original will be listened to
});

var $box = $('.box');

$box.on('transitionend', function () {

});
</script>
<body>
<div class="box"></div>
</body>
</html>