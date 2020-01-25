<!DOCTYPE html>
<html>
<head>
	<title>demo webpage</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>
<body>
	<header>
		<div class="container11">
	       	<div class="col1">
	             <p>Choose from more than 1 lakh + movies and exclusive content</p>       		
	        </div>
	        <div class="col1">
	            <ul>
		 	        <li><a href="#">All exclusive content</a></li>
		 	        <li><a href="#">|</a></li>
	                <li><a href="#">Contact Us</a></li>
	                <li><a href="#">|</a></li>
	                <li><a href="#">Report</a></li>
	            </ul>
	        </div>
		</div>
		 
		<div class="container11">
	        <div class="col2">
	            <p><b>My Entertainment DataBase</b></P>
	        </div>
	        <div class="col2">          
	            <input type="text" name="" placeholder="Search here!..." maxlength="200" id="Search">
	            <input type="submit" name="" value="Go!" id="submit">       
	        </div> 
	        <div class="col2">
	          	<ul>
	               <li><a href="#">Wishlist</a></li>
	               <li><a href="#">|</a></li>
	               <li><a href="#">My List</a></li>
	               <li><a href="#">|</a></li>
	               <li><a href="#">login</a></li>
	           	</ul>   
	        </div>
		</div>
	</header>

	<section>
		<div class="container">
			<div class="col8">
				<h2><I>COMING SOON....</I></h2>
				<img class="mySlides img-responsive" src="images/bond.jpg">
				<img class="mySlides img-responsive" src="images/ww.jpg">
				<img class="mySlides img-responsive" src="images/rambo.jpg">
				<img class="mySlides img-responsive" src="images/birds.jpg">
				<img class="mySlides img-responsive" src="images/top.jpg">
			</div>
			<div class="col8">
				<h2><I>WATCH NOW!</I></h2>
				<img class="mySlides2 img-responsive" src="images/starwars.jpg">
				<img class="mySlides2 img-responsive" src="images/irish.jpg">
				<img class="mySlides2 img-responsive" src="images/avengers.jpg">
				<img class="mySlides2 img-responsive" src="images/holly.jpg">
				<img class="mySlides2 img-responsive" src="images/joker.jpg">
			</div>
		</div>
		<br><br>
	</section>

	<section>
		<div class="container">
			<div><h2>FOR POPULAR MOVIES CHECK THE LIST BELOW</h2></div>
			<?php
				$conn = mysqli_connect("localhost","root","","assignment"); 
				$str = "select * from form";
				// echo $str;
				$result = mysqli_query($conn,$str) or die(mysqli_error($conn));
				// echo "<pre>";
				// print_r($result);
				// echo "</pre>";

				if($result->num_rows > 0)
				{
					while( $ans = $result->fetch_array(MYSQLI_ASSOC))
					{
						// echo "<pre>";
						// print_r($ans);
						// exit;
						$path = $ans['image'];
						// echo $path;
						// echo $ans['name'];

						$id = $ans['id'];
						// echo $id;

						echo '<div class="col10">';
						?>
						<img class="img-responsive" data-toggle="modal" data-target="#myModal<?php echo $id; ?>" src="<?php echo $ans['image'];  ?>">
						<div id="myModal<?php echo $id; ?>" class="modal fade" role="dialog">
						<?php
						    
						    echo '<div class="modal-dialog">';
						    
						      echo '<div class="modal-content">';
						        echo '<div class="modal-header">';
						        	echo '<h4 class="modal-title">'.$ans['name'].'</h4>';
							        echo '<button type="button" class="close" data-dismiss="modal">&times;</button>';
						        echo '</div>';
						        echo '<div class="modal-body">';
						        	echo '<p>'.$ans['description'].'</p>';
						        echo '</div>';
						      echo '</div>';
						      
						    echo '</div>';
						  	echo '</div>';
						echo '</div>';
					}
				}
				else
				{
					echo "No Data";
				}
				?>

		</div>
	</section>

	<footer>
		<div class="container3">
			<form method="post" class="form" id="form" enctype="multipart/form-data">
				Movie Name: <input type="text" name="name" placeholder="Enter Name here.."><br><br>
				Movie Description:<br>
				<textarea rows="5" cols="100" name="description" placeholder="Enter description here..."></textarea><br><br>
				Movie Poster: <input type="file" name="image"><br><br>
				<button type="button" name="add" id="add">Add</button>
			</form>
			<div class="message"></div>
		</div>
	</footer>

	<script>
		var slideIndex = 0;
		carousel();

		function carousel() {
		var i;
		var x = document.getElementsByClassName("mySlides");
		for (i = 0; i < x.length; i++) {
				x[i].style.display = "none"; 
		}
		slideIndex++;
		if (slideIndex > x.length) {
				slideIndex = 1
			} 
		x[slideIndex-1].style.display = "block"; 

		var y = document.getElementsByClassName("mySlides2");
		for (i = 0; i < y.length; i++) {
				y[i].style.display = "none"; 
		}
		slideIndex++;
		if (slideIndex > y.length) {
				slideIndex = 1
			} 
		y[slideIndex-1].style.display = "block";

		setTimeout(carousel, 2000); 
		}


	$(document).ready(function(){
	 	$('#add').click(function(){
	 		var form = document.getElementById('form');
			obj = new FormData(form);
            $.ajax({
            	url: 'action.php',
            	type: 'post',
            	data: obj,
            	contentType:false,
            	processData:false,            
                   success:function(data){
                   	// console.log(data);
                   	$(".message").html(data);
                   	$("#form")[0].reset();
                   }
            });
	 	});

	})
</script>
</body>
</html>