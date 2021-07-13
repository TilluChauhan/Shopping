<script src="js/jquery.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>

var main = function () {
  $('#dropdown').click(function() {
	  $(this).toggleClass('foo');
     $('#dropdown-menu').toggle();
  });
};

$(document).ready(main);
</script>