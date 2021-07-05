<?php session_start(); ?>
<?php
include "head.php";
?>


<body>
	<main>
		<div class="container">
			<h2>Well done!</h2>
				<p>You passed the test very well!</p>
				<p>Your Score: <?php echo $_SESSION['score']; ?></p>
				<a href="question.php?n=1" class="start">Try again</a>
		</div>
	</main>

	
</body>
</html>
<?php session_destroy(); ?>
