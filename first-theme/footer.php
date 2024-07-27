<footer>
<div class="inner-footer">
	<h2>Tours of the Month!</h2>
<?php dynamic_sidebar('sidebar-footer'); ?>
</div>
<div class="inner-footer">
<ul>
<li>Copyright &copy; <?php echo date('Y'); ?>
</li>
<li>All Rights Reserver</li>	
<li><a href="">Web Design by Yan</a></li>
<li><a id="html-checker" href="#">Valid HTML</a></li>
<li><a id="css-checker" href="#">Valid CSS</a></li>
</ul>
</div>
</footer>
<script>
$(document).ready(function(){
			$(".nav-button").click(function () {
			$(".nav-button,.primary-nav").toggleClass("open");
			});    
		});
</script>
<script>
            document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
            document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
        </script>
<?php wp_footer(); ?>  
<!-- Prints scripts or data before the closing body tag  -->
 
</body>
</html>