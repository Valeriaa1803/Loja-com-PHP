<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- lib para mascara de preço -->
<script type="text/javascript" src="js/jquery.priceformat.min.js"></script>

<script type="text/javascript">
	$('.price').priceFormat({
	    prefix: '',
	    centsSeparator: ',',
	    thousandsSeparator: '.'
	});


		setTimeout(function() {
		$(".esconde").fadeOut(2500);
	}, 2500);
</script>
</body>
</html>