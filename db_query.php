<script type="text/javascript">
		var idnum=1,flag=0;
		 function bookmark_color()
		 {
		 	var x = document.getElementById("bookmark_button");
		 	x.style.color = 'blue';

		 }

		 function star1_color(ele,num)
		 {
		 	var y = document.getElementById(num.id);
		 	y.style.color = 'gold';
		 	$.post( "home.php", {star_value: ele, flag : 1});
		 	
		 }
		 function star2_color(ele,num)
		 {
		 	var y = document.getElementById(num.id);
		 	y.style.color = 'gold';
		 	$.post( "home.php", {star_value: ele, flag : 2 });
		 }

		 function star3_color(ele,num)
		 {
		 	var y = document.getElementById(num.id);
		 	y.style.color = 'gold';
		 	$.post( "home.php", {star_value: ele, flag : 3 });
		 }
		 function star4_color(ele,num)
		 {
		 	var y = document.getElementById(num.id);
		 	y.style.color = 'gold';
		 	$.post( "home.php", {star_value: ele, flag : 4});
		 }
		 function star5_color(ele,num)
		 {
		 	var y = document.getElementById(num.id);
		 	y.style.color = 'gold';
		 	$.post( "home.php", {star_value: ele, flag : 5});
		 }
	</script>
<?php

	 require "connect.inc.php";
	 	$idnum = 4;
		$keyword = $_POST['value'];
		if(isset($_POST['star_value'])&&isset($_POST['flag'])){
			$starVal = $_POST['star_value'];
			$flag = $_POST['flag'];
			$query_rating = "update articleinfo set rating='".$flag."' where articleId='".$starVal."'";
			$query_run2 = mysql_query($query_rating);
		}
		$query_keywordId = "select keywordId from keywords where keyword = '".$keyword."'";
		$query_run3 = mysql_query($query_keywordId);
		if($res_key = mysql_fetch_array($query_run3)){
				 $query_articleid = "select articleId from articleinfo where keywordId = '".$res_key[0]."'";
		}
		$query_run4 = mysql_query($query_articleid);
		while($articleidholder = mysql_fetch_assoc($query_run4)){
			 if($query = mysql_query(" SELECT * FROM articles WHERE articleId='".$articleidholder["articleId"]."'") or die(mysql_error()));
			 while($data = mysql_fetch_assoc($query)){
				$image = $data["imageUrl"];
				$id = $data['articleId'];
			 	
			 	echo '<div id="card_template" class="card" ><div class="card-header">					<h4 id="art_title" align="left">'.
							
        					 $data["title"].
    					
				
			'</h4>	<i id="bookmark_button" class="fa fa-bookmark" onclick="bookmark_color()" ></i></div><div class="card-body"><img id="article_image_holder" src="'.$image.'" alt="image unavaliable"></div><hr><div class="card-footer"><div id="rating_stars"><span id="star1'.$idnum.'" class="glyphicon glyphicon-star" onclick="star1_color('.$id.',this)"></span><span id="star2'.$idnum.'" class="glyphicon glyphicon-star" onclick="star2_color('.$id.',this)" ></span><span id="star3'.$idnum.'" class="glyphicon glyphicon-star" onclick="star3_color('.$id.',this)"></span><span id="star4'.$idnum.'" class="glyphicon glyphicon-star" onclick="star4_color('.$id.',this)"></span><span id="star5'.$idnum.'" class="glyphicon glyphicon-star" onclick="star5_color('.$id.',this)"></span></div><ul  id="keyword_list">		    			<li id="keyword1">#</li><li id="keyword2">#</li><li id="keyword3">#</li><li id="keyword4">#</li>		    			<li id="keyword5">#</li></ul></div></div>';
			$idnum++;
			 
		}
	}
	   ?>