<div class="activity-picture left">
	<?php 
		$path = "/css/img/blue/index/";
		if (isset($gift["MemberProfile"]["picture_path"])||($gift["MemberProfile"]["picture_path"]!="")){
			echo $html->image("uploads/".$gift["Sender"]["id"]."/default/profile_thumb_".$gift["MemberProfile"]["picture_path"], array("url"=>"/members/profile/".$gift["Sender"]["id"]));
		}else if ($gift["Sender"]["gender_id"]==1){
			echo $html->image($path."s-men.png", array("url"=>"/members/profile/".$gift["Sender"]["id"]));
		}else{
			echo $html->image($path."s-women.png", array("url"=>"/members/profile/".$gift["Sender"]["id"]));	
		}
	?>
</div>
<div class="activity-content left">
	<div class="name-location no-bg left">														
		<h4 class="left"><?php 
				echo $html->link($gift["Sender"]["firstname"], "/members/profile/".$gift["Sender"]["id"]);	
			
			?>
			 <span>sent you a gift.</span></h4>
		<span class="location left clear"><?php echo $gift["Sender"]["state"].", ".$gift["Country"]["name"]?></span>		
	</div>
	<div class="activity-content-button-date left">
		<?php echo $html->link("<span class='left'>View Gift</span>", "#", array("class"=>"activity-content-button right", "escape"=>false))?>
	</div>
</div>
<div class="shadow left clear"></div>