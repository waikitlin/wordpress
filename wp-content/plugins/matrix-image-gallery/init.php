<?php
/*
Plugin Name: Matrix 3D
Plugin URI: http://webpsilon.com/matrix-plugin/
Description: Create easily a gallery of videos for your site with youtube and flv videos. Extremely quickly to use, add the url of your videos.
Version: 1.2
Author: Webpsilon S.C.P.
Author URI:  http://webpsilon.com

Copyright 2014 Webpsilon.com

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.
*/








function matrixfreepro_enqueue_scripts() { 

  
    wp_enqueue_script('media-upload');
    wp_enqueue_script('thickbox');
	wp_enqueue_style('thickbox');
	
	
 }



function matrixfreepro($content){
	$content = preg_replace_callback("/\[matrix ([^]]*)\/\]/i", "matrixfreepro_render2", $content);
	return $content;
	
}

function matrixfreepro_render2($tag_string){
	return matrixfreepro_render($tag_string, "");
}

function matrixfreepro_render($tag_string, $instance){
$contador=rand(9, 9999999);
$nombrebox="matrixfree".rand(99, 99999);
$widthloading="48"; // Set if change loading image

global $wpdb; 	
$table_name = $wpdb->prefix . "matrixfreepro";


if(isset($tag_string[1])) {
	
	
	
	$auxi1=str_replace(" ", "", $tag_string[1]);
	
	}

else {
	
	
	
	$auxi1 = empty($instance['title']) ? '&nbsp;' : apply_filters('widget_title', $instance['title']);
	
	}


	
	
	
	$myrows = $wpdb->get_results( "SELECT * FROM $table_name WHERE id = ".$auxi1.";" );

	if(count($myrows)<1) $myrows = $wpdb->get_results( "SELECT * FROM $table_name;" );
	
	$conta=0;
$id= $myrows[$conta]->id;
	$title = $myrows[$conta]->title;
		$width = $myrows[$conta]->width;
$height = $myrows[$conta]->height;
$values =$myrows[$conta]->ivalues;

$twidth = $myrows[$conta]->width_thumbnail;

$theight = $myrows[$conta]->height_thumbnail;

$number_thumbnails = $myrows[$conta]->number_thumbnails;



$total = $myrows[$conta]->number_thumbnails;

$border = $myrows[$conta]->border;
$round = $myrows[$conta]->round;
$tborder = $myrows[$conta]->thumbnail_border;
$thumbnail_round = $myrows[$conta]->thumbnail_round;

$sizetitle = $myrows[$conta]->sizetitle;
$sizedescription = $myrows[$conta]->sizedescription;
$sizethumbnail = $myrows[$conta]->sizethumbnail;
$font = $myrows[$conta]->font;
$color1 = $myrows[$conta]->color1;
$color2 = $myrows[$conta]->color2;

$color3 = $myrows[$conta]->color3;

$time = $myrows[$conta]->time;

$animation = $myrows[$conta]->animation;

$mode = $myrows[$conta]->mode;

$op1 = $myrows[$conta]->op1;
$op2 = $myrows[$conta]->op2;
$op3 = $myrows[$conta]->op3;
$op4 = $myrows[$conta]->op4;
$op5 = $myrows[$conta]->op5;


/*

else {
$width = empty($instance['width']) ? '&nbsp;' : apply_filters('widget_width', $instance['width']);
$height = empty($instance['height']) ? '&nbsp;' : apply_filters('widget_height', $instance['height']);
$values = empty($instance['values']) ? '&nbsp;' : apply_filters('widget_values', $instance['values']);
$twidth = empty($instance['width_thumbnail']) ? '&nbsp;' : apply_filters('widget_width_thumbnail', $instance['width_thumbnail']);
$theight = empty($instance['height_thumbnail']) ? '&nbsp;' : apply_filters('widget_height_thumbnail', $instance['height_thumbnail']);


$total = empty($instance['number_thumbnails']) ? '&nbsp;' : apply_filters('widget_number_thumbnails', $instance['number_thumbnails']);

$border = empty($instance['border']) ? '&nbsp;' : apply_filters('widget_border', $instance['border']);
$round = empty($instance['round']) ? '&nbsp;' : apply_filters('widget_round', $instance['round']);
$tborder = empty($instance['thumbnail_border']) ? '&nbsp;' : apply_filters('widget_thumbnail_border', $instance['thumbnail_border']);
$thumbnail_round = empty($instance['thumbnail_round']) ? '&nbsp;' : apply_filters('widget_thumbnail_round', $instance['thumbnail_round']);

$sizetitle = empty($instance['sizetitle']) ? '&nbsp;' : apply_filters('widget_sizetitle', $instance['sizetitle']);
$sizedescription = empty($instance['sizedescription']) ? '&nbsp;' : apply_filters('widget_sizedescription', $instance['sizedescription']);
$sizethumbnail = empty($instance['sizethumbnail']) ? '&nbsp;' : apply_filters('widget_sizethumbnail', $instance['sizethumbnail']);
$font = empty($instance['font']) ? '&nbsp;' : apply_filters('widget_font', $instance['font']);
$color1 = empty($instance['color1']) ? '&nbsp;' : apply_filters('widget_color1', $instance['color1']);
$color2 = empty($instance['color2']) ? '&nbsp;' : apply_filters('widget_color2', $instance['color2']);
$color3 = empty($instance['color3']) ? '&nbsp;' : apply_filters('widget_color3', $instance['color3']);

$time = empty($instance['time']) ? '&nbsp;' : apply_filters('widget_time', $instance['time']);
$animation = empty($instance['animation']) ? '&nbsp;' : apply_filters('widget_animation', $instance['animation']);
$mode = empty($instance['mode']) ? '&nbsp;' : apply_filters('widget_mode', $instance['mode']);


}

*/
$site_url = get_option( 'siteurl' );
$firstimatrixfreeimage="";
$textovid="";
$ligtext="";
$textj="";
$titj="";
$desj="";
$textj2="";
$items_matrixfree="";
$cont=0;
			if($values!="") {
				$items=explode("kh6gfd57hgg", $values);
				$cont=0;
				foreach ($items as &$value) {
					if(count($items)>$cont) {
					$item=explode("t6r4nd", $value);
					
					
					
					
					
					
					$imagematrixfree="";
					if(isset($item[2]) && $item[2]!="") $imagematrixfree=$item[2];
					
					
					if(isset($item[3]) && $item[3]==1 && $imagematrixfree!="") {
						
						if ($twidth==1) {
							$textovid.='&imagen'.$cont.'='.$imagematrixfree.'&title'.$cont.'='.$item[0].'&link'.$cont.'='.$item[4];
							
						}
					else{
						if ($twidth==2) {
							$textovid.='&imagen'.$cont.'='.$imagematrixfree.'&title'.$cont.'='.$item[0].'&link'.$cont.'='.$item[4];
							if($item[4]!="") {
								$ligtext.= '<a href="'.$item[4].'" rel="prettyPhoto['.$nombrebox.']"></a>';
								if($textj=="") {
									$textj.="'".$item[4]."'";
									$titj.="'".$item[0]."'";
									$desj.="'".$item[7]."'";
								}
								else {
									$textj.=", '".$item[4]."'";
									$titj.=", '".$item[0]."'";
									$desj.=", '".$item[7]."'";
								}
							}
							if($textj2=="") $textj2.="'".$item[4]."'";
							else $textj2.=", '".$item[4]."'";
						}
						else {
							$textovid.='&imagen'.$cont.'='.$imagematrixfree.'&title'.$cont.'='.$item[0].'&link'.$cont.'='.$imagematrixfree;
							if($imagematrixfree!="") {
								if($textj=="") {
									$textj.="'".$imagematrixfree."'";
										$titj.="'".$item[0]."'";
									$desj.="'".$item[7]."'";
								}
								else {
									$textj.=", '".$imagematrixfree."'";
									$titj.=", '".$item[0]."'";
									$desj.=", '".$item[7]."'";
								}
								$ligtext.= '<a href="'.$imagematrixfree.'" rel="prettyPhoto['.$nombrebox.']"></a>';
							}
							if($textj2=="") $textj2.="'".$imagematrixfree."'";
							else $textj2.=", '".$imagematrixfree."'";
						}
					
					}
					$cont++;
											
						 ;
						}
					}
					 
				}
			}



 
if ($twidth==2) $twidth=0;

 
$cantidad=$cont;

$width_thumbs_total=($twidth+1)*($cantidad+1);

$width_windowmatrixfree=round($width-(2*$border));

$widthzone=round($total*($twidth+1));
$paggingtop=10;

$timgwidth="";
//$timgwidth="width: ".($twidth*2)."px;";


if(!isset($titles))  $titles="";

if(!isset($texto))  $texto="";



$texto.='title='.$titles.'&alpha='.$sizedescription.'&menu5='.str_replace("#", "", $color1).'&menu6='.str_replace("#", "", $color2).'&zoom2='.$sizetitle.'&zoom1='.$thumbnail_round.'&youtube=&onlink='.$twidth.'&rows='.$theight.'&speed='.$number_thumbnails.'&row=1&cantidad='.$cantidad.'&vertical='.$sizethumbnail.'&menu7='.str_replace("#", "", $color3).'&menu3='.$tborder.'&menu4='.$font.'&target='.$time.'&op1='.$op1.'&menu1='.$op2.'&shadow='.$op5.'&escala=1&menu2='.$op3.'&funct='.$nombrebox.'&mouseover='.$round.$textovid;

//$texto='cantidad=6&carpeta=images2/&orientacion=&escala=1&timeback=&speed=40&border=&round=&speed2=&type=&music=&color1=1&text1=0&text2=100&text3=1&text4=1&text5=&color2=000000&text6=&color3=&target=&text7=&controls=&round2=&background='.$textovid;


$urlpflash=plugins_url('matrix.swf', __FILE__);
///*  pp_default /blight_rounded / dark_rounded / light_square / dark_square / facebook
$output='

<script type="text/javascript">

  jQuery(document).ready(function(){
	 jQuery("a[rel^=\'prettyPhoto\']").prettyPhoto({theme: \''.$mode.'\'});
    
  });
  function abrirSB'.$nombrebox.'(type, title, url)
			 {
				 
				 api_images = ['.$textj.'];
				  api_images2 = ['.$textj2.'];
api_titles = ['.$titj.'];
api_descriptions = ['.$desj.'];
jQuery.prettyPhoto.open(api_images,api_titles,api_descriptions);
var contar=0;
jQuery.each(api_images2, function() {
     if(this!="" && contar<title) jQuery.prettyPhoto.changePage(\'next\');
      contar++;
   });

			    
		}; 
</script>
<div style="'.$op4.'">


<object id="flashcontent" data="'.$urlpflash.'" width="'.$width.'" height="'.$height.'" type="application/x-shockwave-flash" >
 <param name="movie" value="'.$urlpflash.'" />
 <param name="quality" value="high" />
 <param name="wmode" value="transparent" />
 <param name="allowFullScreen" value="true" />
 <param name="flashvars" value="'.$texto.'" />
 
  <!--[if !IE]>-->
  <object type="application/x-shockwave-flash" data="'.$urlpflash.'" width="'.$width.'" height="'.$height.'">
  
    <p>
      Require Flash player
    </p>
      
  <!--[if !IE]>-->
  </object>
  <!--<![endif]-->
 
</object>
</div>
'.$ligtext;
	
	if(isset($tag_string[1])) return $output;
	else echo $output;
}


function add_header_matrixfreepro() {

wp_enqueue_script('jquery');

wp_enqueue_script('prettyPhoto', plugins_url( '/js/jquery.prettyPhoto.js', __FILE__ ), array('jquery'), '1.0', true);

 wp_register_style( 'prettyPhoto-style', plugins_url('/css/prettyPhoto.css', __FILE__) );
        wp_enqueue_style( 'prettyPhoto-style' );


}

class wp_matrixfreepro extends WP_Widget {
	function wp_matrixfreepro() {
		$widget_ops = array('classname' => 'wp_matrixfreepro', 'description' => 'Matrix widget, select the matrix gallery' );
		$this->WP_Widget('wp_matrixfreepro', 'Matrix', $widget_ops);
	}
	function widget($args, $instance) {
		extract($args, EXTR_SKIP);
		
		$site_url = get_option( 'siteurl' );


		
		//$instance['hide_is_admin']

		
		
			echo $before_widget;
			
			echo matrixfreepro_render("", $instance);
			
			
			echo $after_widget;
		
	}
	function update($new_instance, $old_instance) {
		
		
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);

		
		
		
		
		
		
		$instance['values']=$values;
		
		return $instance;
	}
	function form($instance) {
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'width' => '240', 'height' => '200', 'border' => '10', 'round' => '1', 'width_thumbnail' => '40', 'height_thumbnail' => '50', 'thumbnail_border' => '6', 'thumbnail_round' => '1', 'number_thumbnails' => '4', 'values'=>'', 'sizetitle'=>'18pt Arial', 'sizedescription'=>'12pt Arial', 'sizethumbnail'=>'10pt Arial', 'font'=>'Verdana', 'color1'=>'#333333', 'color2'=>'#888888', 'color3'=>'#dddddd', 'time'=>'5000', 'animation'=>'0', 'mode'=>'0','op1' => '','op2' => '','op3' => '','op4' => '','op5' => '' ) );
		$title = strip_tags($instance['title']);
		$id=rand(0, 99999);
		$width = strip_tags($instance['width']);
		$height = strip_tags($instance['height']);
		$border = strip_tags($instance['border']);
		$round = strip_tags($instance['round']);
		$title = strip_tags($instance['title']);
		$width_thumbnail = strip_tags($instance['width_thumbnail']);
		$height_thumbnail = strip_tags($instance['height_thumbnail']);
		$thumbnail_border = strip_tags($instance['thumbnail_border']);
		$thumbnail_round = strip_tags($instance['thumbnail_round']);
		$number_thumbnails = strip_tags($instance['number_thumbnails']);
		$values = strip_tags($instance['values']);
		
		$sizetitle = strip_tags($instance['sizetitle']);
		$sizedescription = strip_tags($instance['sizedescription']);
		$sizethumbnail = strip_tags($instance['sizethumbnail']);
		$font = strip_tags($instance['font']);
		$color1 = strip_tags($instance['color1']);
		$color2 = strip_tags($instance['color2']);
		$color3 = strip_tags($instance['color3']);
		
		$time = strip_tags($instance['time']);
		$animation = strip_tags($instance['animation']);
		$mode = strip_tags($instance['mode']);
		
		$op1 = strip_tags($instance['op1']);
		$op2 = strip_tags($instance['op2']);
		$op3 = strip_tags($instance['op3']);
		$op4 = strip_tags($instance['op4']);
		$op5 = strip_tags($instance['op5']);

		
		
		$borderround[$round] = 'checked';
		$tborderround[$thumbnail_round] = 'checked';
		
		

  global $wpdb; 
	$table_name = $wpdb->prefix . "matrixfreepro";
	
	$myrows = $wpdb->get_results( "SELECT * FROM $table_name;" );

if(empty($myrows)) {
	
	echo '
	<p>First create a new matrix, from the administration of matrix plugin.</p>
	';
}

else {
	$contaa1=0;
	$selector='<select name="'.$this->get_field_name('title').'" id="'.$this->get_field_id('title').'">';
	while($contaa1<count($myrows)) {
		
		
		$tt="";
		if($title==$myrows[$contaa1]->id)  $tt=' selected="selected"';
		$selector.='<option value="'.$myrows[$contaa1]->id.'"'.$tt.'>'.$myrows[$contaa1]->id.' '.$myrows[$contaa1]->title.'</option>';
		$contaa1++;
		
	}
	
	$selector.='</select>';




echo 'Gallery: '.$selector; 

			}
	}
}


function matrixfreepro_panel(){
	global $wpdb; 
	$table_name = $wpdb->prefix . "matrixfreepro";	
	
	if(isset($_POST['crear'])) {
		$re = $wpdb->query("select * from $table_name");
		
		
//autos  no existe
$paca=0;
if(empty($re))
{
	

	$paca=1;
	
  $sql = " CREATE TABLE $table_name(
	id mediumint( 9 ) NOT NULL AUTO_INCREMENT ,
	title longtext NOT NULL ,
	width longtext NOT NULL ,
	height longtext NOT NULL ,
	border longtext NOT NULL ,
	round longtext NOT NULL ,
	width_thumbnail longtext NOT NULL ,
	height_thumbnail longtext NOT NULL ,
	thumbnail_border longtext NOT NULL ,
	thumbnail_round longtext NOT NULL ,
	number_thumbnails longtext NOT NULL ,
	ivalues longtext NOT NULL ,
	sizetitle longtext NOT NULL ,
	sizedescription longtext NOT NULL ,
	sizethumbnail longtext NOT NULL ,
	font longtext NOT NULL ,
	color1 longtext NOT NULL ,
	color2 longtext NOT NULL ,
	color3 longtext NOT NULL ,
	time longtext NOT NULL ,
	animation longtext NOT NULL ,
	mode longtext NOT NULL ,
	op1 longtext NOT NULL ,
	op2 longtext NOT NULL ,
	op3 longtext NOT NULL ,
	op4 longtext NOT NULL ,
	op5 longtext NOT NULL ,
	
		PRIMARY KEY ( `id` )	
	) ;";
	$wpdb->query($sql);
	
}

		
	if($paca==1) $sql = "INSERT INTO $table_name  (`title`, `width`, `height`, `border`, `round`, `width_thumbnail`, `height_thumbnail`, `thumbnail_border`, `thumbnail_round`, `number_thumbnails`, `ivalues`, `sizetitle`, `sizedescription`, `sizethumbnail`, `font`, `color1`, `color2`, `color3`, `time`, `animation`, `mode`, `op1`, `op2`, `op3`, `op4`, `op5`) VALUES
('', '100%', '300px', '1', '1', '0', '', '2', '50', '1', 'Title imaget6r4ndt6r4nd".plugins_url('/images/img0.jpg', __FILE__)."t6r4nd1t6r4ndt6r4ndt6r4ndt6r4ndLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Ut enim ad minim veniam, quis nostrud exercitationaliqua.kh6gfd57hggTitle imaget6r4ndt6r4nd".plugins_url('/images/img1.jpg', __FILE__)."t6r4nd1t6r4ndt6r4ndt6r4ndt6r4ndLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Ut enim ad minim veniam, quis nostrud exercitationaliqua.kh6gfd57hggTitle imaget6r4ndt6r4nd".plugins_url('/images/img2.jpg', __FILE__)."t6r4nd1t6r4ndt6r4ndt6r4ndt6r4ndLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Ut enim ad minim veniam, quis nostrud exercitationaliqua.kh6gfd57hggTitle imaget6r4ndt6r4nd".plugins_url('/images/img3.jpg', __FILE__)."t6r4nd1t6r4ndt6r4ndt6r4ndt6r4ndLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Ut enim ad minim veniam, quis nostrud exercitationaliqua.kh6gfd57hggTitle imaget6r4ndt6r4nd".plugins_url('/images/img4.jpg', __FILE__)."t6r4nd1t6r4ndt6r4ndt6r4ndt6r4ndLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Ut enim ad minim veniam, quis nostrud exercitationaliqua.kh6gfd57hggTitle imaget6r4ndt6r4nd".plugins_url('/images/img5.jpg', __FILE__)."t6r4nd1t6r4ndt6r4ndt6r4ndt6r4ndLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Ut enim ad minim veniam, quis nostrud exercitationaliqua.kh6gfd57hggTitle imaget6r4ndt6r4nd".plugins_url('/images/img6.jpg', __FILE__)."t6r4nd1t6r4ndt6r4ndt6r4ndt6r4ndLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Ut enim ad minim veniam, quis nostrud exercitationaliqua.kh6gfd57hgg', '0', '-115', '1', '363636', 'arial', '12', 'FFFFFF', '_blank', '', 'facebook', '', '0', 'FFFFFF', '', '1');



";
	
	else $sql = "INSERT INTO $table_name (`title`, `width`, `height`, `border`, `round`, `width_thumbnail`, `height_thumbnail`, `thumbnail_border`, `thumbnail_round`, `number_thumbnails`, `ivalues`, `sizetitle`, `sizedescription`, `sizethumbnail`, `font`, `color1`, `color2`, `color3`, `time`, `animation`, `mode`, `op1`, `op2`, `op3`, `op4`, `op5`) VALUES
('', '100%', '300px', '1', '1', '0', '', '2', '50', '1', '', '0', '-115', '1', '363636', 'arial', '12', 'FFFFFF', '_blank', '', 'facebook', '', '0', 'FFFFFF', '', '1');";
	
	
	$wpdb->query($sql);
	}
	
if(isset($_POST['borrar'])) {
		$sql = "DELETE FROM $table_name WHERE id = ".$_POST['borrar'].";";
	$wpdb->query($sql);
	}
	if(isset($_POST['id'])){	
	
	
	
	$total = strip_tags($_POST['total']);


$cont=1;
		
		 $sorter=array();
		while($cont<=$total) {
			
			if(!$_POST['item'.$cont] || $_POST['operation']!="2") {
				$valaux=count($sorter);
				$sorter[$valaux]['order']=$_POST['order'.$cont];
				$sorter[$valaux]['cont']=$cont;
			}
		
			$cont++;
		}


function sortByOrder($a, $b) {
    return $a['order'] - $b['order'];
}

usort($sorter, 'sortByOrder');


		$cont=1;
		
		
		$values="";
		foreach ($sorter as &$value) {
    $cont = $value['cont'];

			if(!$_POST['item'.$cont] || $_POST['operation']!="2") $values.=$_POST['title'.$cont]."t6r4nd".$_POST['description'.$cont]."t6r4nd".$_POST['image'.$cont]."t6r4nd".$_POST['link'.$cont]."t6r4nd".$_POST['video'.$cont]."t6r4nd".$_POST['timage'.$cont]."t6r4nd".$_POST['seo'.$cont]."t6r4nd".$_POST['seol'.$cont]."kh6gfd57hgg";
				
		
			
		}
		
		if($_POST['operation']=="1") {
			$values.="Titlet6r4nd".""."t6r4nd".""."t6r4nd"."1"."t6r4nd".""."t6r4nd".""."t6r4nd".""."t6r4nd".""."t6r4nd".date("j/n/Y")."kh6gfd57hgg";
			
			$cont++;
		}
		

	
	


$sql= "UPDATE $table_name SET `ivalues` = '".$values."', `title` = '".$_POST["stitle".$_POST['id']]."', `width` = '".$_POST["width".$_POST['id']]."', `height` = '".$_POST["height".$_POST['id']]."', `round` = '".$_POST["round".$_POST['id']]."', `width_thumbnail` = '".$_POST["twidth".$_POST['id']]."', `height_thumbnail` = '".$_POST["theight".$_POST['id']]."', `thumbnail_border` = '".$_POST["tborder".$_POST['id']]."', `thumbnail_round` = '".$_POST["thumbnail_round".$_POST['id']]."', `number_thumbnails` = '".$_POST["number_thumbnails".$_POST['id']]."', `sizetitle` = '".$_POST["sizetitle".$_POST['id']]."', `sizedescription` = '".$_POST["sizedescription".$_POST['id']]."', `sizethumbnail` = '".$_POST["sizethumbnail".$_POST['id']]."', `font` = '".$_POST["font".$_POST['id']]."', `color1` = '".$_POST["color1".$_POST['id']]."', `color2` = '".$_POST["color2".$_POST['id']]."', `color3` = '".$_POST["color3".$_POST['id']]."', `time` = '".$_POST["time".$_POST['id']]."', `border` = '".$_POST["border".$_POST['id']]."', `animation` = '".$_POST["animation".$_POST['id']]."', `mode` = '".$_POST["mode".$_POST['id']]."', `op1` = '".$_POST["op1".$_POST['id']]."', `op2` = '".$_POST["op2".$_POST['id']]."', `op3` = '".$_POST["op3".$_POST['id']]."', `op4` = '".$_POST["op4".$_POST['id']]."', `op5` = '".$_POST["op5".$_POST['id']]."' WHERE `id` =  ".$_POST["id"]." LIMIT 1";
		
			
			
			$wpdb->query($sql);
	}
	$myrows = $wpdb->get_results( "SELECT * FROM $table_name" );
$conta=0;



include('template/cabezera_panel.html');
while($conta<count($myrows)) {
	$id= $myrows[$conta]->id;
	$title = $myrows[$conta]->title;
		$width = $myrows[$conta]->width;
$height = $myrows[$conta]->height;
$values =$myrows[$conta]->ivalues;

$twidth = $myrows[$conta]->width_thumbnail;

$theight = $myrows[$conta]->height_thumbnail;

$number_thumbnails = $myrows[$conta]->number_thumbnails;



//$total = $myrows[$conta]->total;

$border = $myrows[$conta]->border;
$round = $myrows[$conta]->round;
$tborder = $myrows[$conta]->thumbnail_border;
$thumbnail_round = $myrows[$conta]->thumbnail_round;

$sizetitle = $myrows[$conta]->sizetitle;
$sizedescription = $myrows[$conta]->sizedescription;
$sizethumbnail = $myrows[$conta]->sizethumbnail;
$font = $myrows[$conta]->font;
$color1 = $myrows[$conta]->color1;
$color2 = $myrows[$conta]->color2;

$color3 = $myrows[$conta]->color3;

$animation = $myrows[$conta]->animation;
$time = $myrows[$conta]->time;
$mode = $myrows[$conta]->mode;
$op1 = $myrows[$conta]->op1;
$op2 = $myrows[$conta]->op2;
$op3 = $myrows[$conta]->op3;
$op4 = $myrows[$conta]->op4;
$op5 = $myrows[$conta]->op5;


	include('template/panel.php');			
	$conta++;
	}
include('template/footer.html');
}




function matrixfreepro_add_menu(){	
	if (function_exists('add_options_page')) {
		//add_menu_page
		add_options_page('matrixfreepro', 'Matrix', 'manage_options', 'matrixfreepro', 'matrixfreepro_panel');
	}
}


if (function_exists('add_action')) {
	add_action('admin_menu', 'matrixfreepro_add_menu'); 
}

add_action( 'widgets_init', create_function('', 'return register_widget("wp_matrixfreepro");') );
add_action('wp_enqueue_scripts', 'add_header_matrixfreepro');
add_filter('the_content', 'matrixfreepro');
add_action('admin_head', 'matrixfreepro_enqueue_scripts');
?>
