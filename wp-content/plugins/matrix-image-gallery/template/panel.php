<style>

.addwindow {
	
	position:relative:
	border: 2px;
	display: none;
	
}
.matrixfreeitemfull<?php echo $id; ?> {
	
	margin: 10px;
	padding: 10px;
	border: 2px solid #555;
	<?php
	if($_POST['id']!=$id) {
		echo 'display: none;';
	}
	?>
	
}


.matrixfreedelete<?php echo $id; ?>{
	
	
	display: none;
	
}
.edititem {
	
	position:relative:
	border: 2px;
	display: none;
	margin: 8px;
	line-height:250%;
	padding: 8px;
	background-color:#CCC;
	
}
</style>
    <script type="text/javascript">

        jQuery(document).ready( function () { 
		
		
		var uploadID<?php echo $id; ?> = ''; /*setup the var in a global scope*/
		
		
		
		
		

jQuery('.upload-button<?php echo $id; ?>').click(function() {
	
	

//uploadID = jQuery(this).prev('input');
uploadID<?php echo $id; ?> = jQuery(this).prev('input');


window.send_to_editor = function(html) {

var textt=html;


if(textt.search("img")!=-1) imgurl = jQuery('img',html).attr('src');

else {

	imgurl = jQuery(html).attr('href');

}

uploadID<?php echo $id; ?>.val(imgurl);
tb_remove();
}


tb_show('', 'media-upload.php?type=image&amp;amp;amp;amp;TB_iframe=true&uploadID<?php echo $id; ?>=' + uploadID<?php echo $id; ?>);

return false;
});



		
		
          
	jQuery('.editmatrixfree<?php echo $id; ?>').click(function() {
		
		
	if(jQuery('.matrixfreeitemfull<?php echo $id; ?>').css("display")=="none") jQuery('.matrixfreeitemfull<?php echo $id; ?>').show();
	else jQuery('.matrixfreeitemfull<?php echo $id; ?>').css("display", "none")
	
	
	
	return false;
	
	
})
	

	jQuery('.deletebuton<?php echo $id; ?>').click(function() {
		
		
		
			if(jQuery('.matrixfreedelete<?php echo $id; ?>').css("display")=="none") jQuery('.matrixfreedelete<?php echo $id; ?>').show();
	else jQuery('.matrixfreedelete<?php echo $id; ?>').css("display", "none")
		

	
	
	
	return false;
	
	
})	
		 
	jQuery('.additem').click(function() {
		
		
		
	//jQuery('.widget-wp_matrixfreepro-__i__-savewidget').trigger('click');
	jQuery('input[name=operation]').val('1');
	jQuery('.addwindow').show();
	
	
	
	return false;
	
	
})

	jQuery('.deleteitem').click(function() {
		
		
		
	//jQuery('.widget-wp_matrixfreepro-__i__-savewidget').trigger('click');
	jQuery('input[name=operation]').val('2');
	jQuery('.addwindow').show();
	
	
	
	return false;
	
	
})

	jQuery('.cancel').click(function() {
		
		
		
	//jQuery('.widget-wp_matrixfreepro-__i__-savewidget').trigger('click');
	jQuery('input[name=operation]').val('0');
	jQuery('.addwindow').hide();
	
	
	
	return false;
	
	
})

jQuery('.<?php echo $id; ?>editbutton').click(function() {
		
		
		
	//jQuery('.widget-wp_matrixfreepro-__i__-savewidget').trigger('click');
	

	if(jQuery('#<?php echo $id; ?>edit'+jQuery(this).attr("rel")).css("display")=="none") { 
		
		jQuery('#<?php echo $id; ?>edit'+jQuery(this).attr("rel")).show()
		jQuery(this).text("-")
	}
	else { 
		jQuery(this).text('+')
		jQuery('#<?php echo $id; ?>edit'+jQuery(this).attr("rel")).css("display", "none")
	}
	return false;
	
	
})



// media library functions

//var clicked = null;

jQuery('.upload_image_button<?php echo $id; ?>').click(function() {
 

 clicked = jQuery(this);
 
 formfield = jQuery(this).prev('input').attr('name');
 
 
 
if(formfield.search("vid")!=-1) tb_show('', 'media-upload.php?type=video&amp;TB_iframe=true');
else tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
 
 return false;
});

window.send_to_editor = function(html) {
 //imgurl = jQuery('img',html).attr('src');
 //clicked.prev('input').val(imgurl);
 //tb_remove();
 
 
 var textt=html;


if(textt.search("img")!=-1) imgurl = jQuery('img',html).attr('src');

else {

	imgurl = jQuery(html).attr('href');

}


//clicked.prev('input').val(imgurl);
+
clicked.prev('input').val(imgurl);

tb_remove();
 
 
 
}

		  
        });






    </script>

	  <legend><strong>Matrix <?php echo $id; ?>. Write in your Pages or Posts: [matrix <?php echo $id; ?> /] or use the widget matrix. </strong><button class="editmatrixfree<?php echo $id; ?>">EDIT</button></legend> 



<div class="matrixfreeitemfull<?php echo $id; ?>"> 
	<form method="post" action="">
		<fieldset>
<label >Title: </label><input id="stitle<?php echo $id; ?>" name="stitle<?php echo $id; ?>" type="text" value="<?php echo $title; ?>" />
              <hr />
             
              <input name="operation" type="hidden" id="operation" value="0" />
               <input name="itemselect<?php echo $id; ?>" type="hidden" id="itemselect<?php echo $id; ?>" value="" />
<h2>IMAGES:</h2>               
            <button class="additem">Add Image</button> <button class="deleteitem">Delete images</button> <input type='submit' name='' value='Save' />
            <div class="addwindow">
             <hr />
           <input type='submit' name='' value='OK' /><button class="cancel">Cancel</button>
            
            </div>
             <hr />
            <ul>
            <?php
			
			// items
			$cont=0;
			if($values!="") {
				$items=explode("kh6gfd57hgg", $values);
				$cont=1;
				foreach ($items as &$value) {
					if(count($items)>$cont) {
					$item=explode("t6r4nd", $value);
					
					 
					 echo '<li><input name="item'.$cont.'" type="checkbox" value="hide" /><img src="'.$item[2].'" width="60px" style="margin:5px;"/><input name="title'.$cont.'" type="text" value="'.$item[0].'" /><button class="'.$id.'editbutton" rel="'.$cont.'">+</button>
					 
					 <div id="'.$id.'edit'.$cont.'" class="edititem">
					  Image:<br/>
					 <input type="text" name="image'.$cont.'" value="'.$item[2].'" class="upload'.$id.'" size="70"/>
					
					 <input class="upload_image_button'.$id.'" name="wsl-image-add" type="button" value="Change image" /><br/>
					
					URL link:<br/>
					 ';
					 
					
					echo '<input name="video'.$cont.'" type="text" value="'.$item[4].'" size="70" /> 
					<br/>
					
					
					
					  Active: <input name="link'.$cont.'" type="checkbox" id="link'.$cont.'" value="1"';
					 
					 if($item[3]=="1") echo 'checked="checked"';
					 
					 echo ' /><br/>
					 Description(show in lightbox):<br/><textarea name="seol'.$cont.'"  rows="3" cols="70" />'.$item[7].'</textarea><br/>
					 
					  SEO Alt image tag: <input name="seo'.$cont.'" type="text" value="'.$item[6].'" size="70" /><br/>
					 
					 ORDER: <input name="order'.$cont.'" type="text" value="'.$cont.'" size="4"/><br/>
					  <hr />
					  <input type=\'submit\' name=\'\' value=\'Save\' />
					 </div>
					 </li>';
					 $cont++;
					}
					 
				}
			}
			 $cont--;
			echo '</ul><input class="widefat" name="total" type="hidden" id="total" value="'.$cont.'" />';
			
	
			
			
			?>
 
            <hr />
<h2>CONFIGURATION:</h2>            

<script type="text/javascript" src="<?php echo plugins_url('jscolor.js', __FILE__); ?>"></script>
<h3>PLUGIN CONFIGURATION</h3>
<p>
           <label>Plugin width(number with px or %): </label> <input type='text' id='width<?php echo $id; ?>'  name='width<?php echo $id; ?>'  value='<?php echo $width; ?>' size="6"/>
            
       		<label>Plugin height(number with px or %): </label> <input type='text' id='height<?php echo $id; ?>'  name='height<?php echo $id; ?>'  value='<?php echo $height; ?>' size="6"/>
           
           </p>
           
           <p> 
           <label>Matrix STYLE:</label>
			      <select name="sizethumbnail<?php echo $id; ?>" id="sizethumbnail<?php echo $id; ?>">
                  
                  
                    <option value="1" <?php if($sizethumbnail==1) echo ' selected="selected"'; ?>>Viewer in centre</option>
                <option value="0" <?php if($sizethumbnail==0) echo ' selected="selected"'; ?>>Viewer out</option>
               
		          </select> 
                   </p>
           <p>  
            <label>Images Mouse Effect: </label> 
            
            
             <select name="round<?php echo $id; ?>" id="round<?php echo $id; ?>">
             
              <option value="0" <?php if($round==0) echo ' selected="selected"'; ?>>None</option>
		        <option value="1" <?php if($round==1) echo ' selected="selected"'; ?>>Y Rotation</option>
		        <option value="2" <?php if($round==2) echo ' selected="selected"'; ?>>X Rotation</option>
		        <option value="3" <?php if($round==3) echo ' selected="selected"'; ?>>Scale</option>
             
              </select>
            
            
            
             
                           
       <label> Speed: </label> <input type='text' id='number_thumbnails<?php echo $id; ?>'  name='number_thumbnails<?php echo $id; ?>'  value='<?php echo $number_thumbnails; ?>' size="6"/> (0-1 recommended, sample: 0.5) 
       
       </p> 
       <p>
        
        <label>Images Click:</label>
			      <select name="twidth<?php echo $id; ?>" id="twidth<?php echo $id; ?>">
                  
                  
                    <option value="1" <?php if($twidth==1) echo ' selected="selected"'; ?>>Go to url link</option>
                <option value="0" <?php if($twidth==0) echo ' selected="selected"'; ?>>Image lightbox</option>
               <option value="2" <?php if($twidth==2) echo ' selected="selected"'; ?>>URL lightbox</option>
		          </select>  
                  
                    <label>Lightbox style:</label>
			      <select name="mode<?php echo $id; ?>" id="mode<?php echo $id; ?>">
                  
             
                    <option value="facebook" <?php if($mode=="facebook") echo ' selected="selected"'; ?>>facebook</option>
                     <option value="dark_square" <?php if($mode=="dark_square") echo ' selected="selected"'; ?>>dark_square</option>
                      <option value="light_square" <?php if($mode=="light_square") echo ' selected="selected"'; ?>>light_square</option>
                       <option value="dark_rounded" <?php if($mode=="dark_rounded") echo ' selected="selected"'; ?>>dark_rounded</option>
                        <option value="blight_rounded" <?php if($mode=="blight_rounded") echo ' selected="selected"'; ?>>blight_rounded</option>
                <option value="pp_default" <?php if($mode=="pp_default") echo ' selected="selected"'; ?>>Simple</option>
               
		          </select>  
                    <label for="time" accesskey="o">Link target: </label>
			    <input type='text' id='time<?php echo $id; ?>'  name='time<?php echo $id; ?>'  value='<?php echo $time; ?>'/>
                   <label>Images shadow:</label>
			      <select name="op5<?php echo $id; ?>" id="op5<?php echo $id; ?>">
                  
                  
                    <option value="1" <?php if($op5==1) echo ' selected="selected"'; ?>>Yes</option>
                <option value="0" <?php if($op5==0) echo ' selected="selected"'; ?>>Non</option>
               
		          </select>  
                  
                  
                  
                  
                 
			
		     
       </p>
       



 
			    <input type='hidden' id='thumbnail_round<?php echo $id; ?>'  name='thumbnail_round<?php echo $id; ?>'  value='<?php echo $thumbnail_round; ?>'/>
		      
			  
			 
			    <input type='hidden' id='sizetitle<?php echo $id; ?>'  name='sizetitle<?php echo $id; ?>'  value='<?php echo $sizetitle; ?>'/>
		     
		
			 
			    <input type='hidden' id='op2<?php echo $id; ?>'  name='op2<?php echo $id; ?>'  value='<?php echo $op2; ?>'/>
		     



			
			
			    <input class="color" type='hidden' id='op3<?php echo $id; ?>'  name='op3<?php echo $id; ?>'  value='<?php echo $op3; ?>'/>
		     
		 
	<h3>TEXT SETTINGS</h3>
    <p>
			  <label for="tborder" accesskey="d">Text border(Number, 0 not border): </label>
			    <input type='text' id='tborder<?php echo $id; ?>'  name='tborder<?php echo $id; ?>'  value='<?php echo $tborder; ?>'/>
		     
			  
			  <label for="font" accesskey="t">Text border color:  </label>
			    <input class="color" type='text' id='font<?php echo $id; ?>'  name='font<?php echo $id; ?>'  value='<?php echo $font; ?>'/>
		    
			  
			  <label for="color1" accesskey="t">Text font: </label>
			    <input type='text' id='color1<?php echo $id; ?>'  name='color1<?php echo $id; ?>'  value='<?php echo $color1; ?>'/>
		     
			</p>
              <p>
			  <label for="color2" accesskey="t">Font size(number): </label>
			    <input type='text' id='color2<?php echo $id; ?>'  name='color2<?php echo $id; ?>'  value='<?php echo $color2; ?>'/>
		     
			 
			  <label for="color3" accesskey="t">Font color: </label>
			    <input class="color" type='text' id='color3<?php echo $id; ?>'  name='color3<?php echo $id; ?>'  value='<?php echo $color3; ?>'/>
		     
		  
          <label for="sizedescription" accesskey="t">Text images vertical separation(Number positive or negative): </label>
			    <input type='text' id='sizedescription<?php echo $id; ?>'  name='sizedescription<?php echo $id; ?>'  value='<?php echo $sizedescription; ?>'/>
		     
			  </p>

			

  <br/>      

<input name="id" type="hidden" id="id" value="<?php echo $id; ?>" /></td>
	<input type='submit' name='' value='SAVE MATRIX' />
		 
      </fieldset>
	</form>		 <br/>
    <hr />
  <form method="post" action="">
	  <input name="borrar" type="hidden" id="borrar" value="<?php echo $id; ?>">
      <button class="deletebuton<?php echo $id; ?>">Delete matrix</button>
      <div class="matrixfreedelete<?php echo $id; ?>">
      <button class="deletebuton<?php echo $id; ?>">CANCEL</button>
     <input type='submit' name='' value='OK' />
     </div>
    </form>
  <hr />
  </div>
