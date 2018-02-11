<?php
	include $_SERVER['DOCUMENT_ROOT'] . '/scripts/php/db/mysqlifunction.php';
	function getStories() {
		$query = "SELECT * FROM STORY;";
		$result = db_query($query);
		$count = 0;
		$storyList = '';
		while($row =mysqli_fetch_assoc($result))
		{
			if ($count & 1) {
				$storyList .= standard($row["ID"], $row["NAME"],$row["TITLE"],$row["QUOTE"],$row["STORY"]);
			} else { 
				$storyList .= alternative($row["ID"], $row["NAME"],$row["TITLE"],$row["QUOTE"], $row["STORY"]);
			}
			$storyList .= '<hr>';
			$count ++;
		}
		return $storyList;
		
		
	}

	function standard($id, $name, $title, $quote, $story) {
		return '
		<section>
			<div class="container">
				<div class="row">
					<div class="col-sm order-sm-1" id="main-icon">
						<i class="fa fa-user-circle"></i>
						<h3 style="text-align: center;">' . $name . '</h3>
					</div>
					<div class="col-sm order-sm-2" id="main-icon">
						<h3>' . $title . '</h3>
						<p class="blockquote">' . $quote . '</p>
					</div>
				</div>
				<div class="row">
					<p class="readmore" data-id="' . $id . '">Click to read the full story >></p>
					<p class="readless" data-id="' . $id . '"><< Click to hide the full story</p>
					<p class="morecontent" data-id="' . $id . '">' . $story . '</div>
					<p class="readless" data-id="' . $id . '"><< Click to hide the full story</p>
				</div>
			</div>
		</section>
		';
	}
	
	function alternative($id, $name, $title, $quote, $story) {
		return '
		
		<section>
			<div class="container">
				<div class="row">
					<div class="col-sm order-sm-1 order-2" id="main-icon">
						<h3>' . $title . '</h3>
						<p class="blockquote">' . $quote . '</p>
					</div>
					<div class="col-sm order-sm-2 order-1" id="main-icon">
						<i class="fa fa-user-circle"></i>
						<h3 style="text-align: center;">' . $name . '</h3>
					</div>
				</div>
				<div class="row">
					<p class="readmore" data-id="' . $id . '">Click to read the full story >></p>
					<p class="readless" data-id="' . $id . '"><< Click to hide the full story</p>
					<p class="morecontent" data-id="' . $id . '">' . $story . '</div>
					<p class="readless" data-id="' . $id . '"><< Click to hide the full story</p>
				</div>
			</div>
		</section>
		
		';
	}

?>