<?php

class ImagesController extends AppController {
	function admin_index() {
		$this->layout = "admin_layout";	
	}
	
	function admin_add() {
		$this->layout = "admin_layout";
		//pr($this->data);
		if(!empty( $this->data )) {
			//$fileName = $
			$data = $this->data['Images'];
			
			
/*
			[Images] => Array
        (
            [file] => Array
                (
                    [name] => 08-05-10 01 07.jpg
                    [type] => image/jpeg
                    [tmp_name] => C:\xampp\tmp\phpBC70.tmp
                    [error] => 0
                    [size] => 1004213
                )

        )*/

			
			$fileName = $data['file']['name'];  // the file name
			$fileTmpLoc = $data['file']['tmp_name'];
			$fileType = $data['file']['type'];
			$fileSize = $data['file']['size'];
			$fileErrorMsg = $data['file']['error'];
			$fileName = preg_replace('#[^a-z.0-9]#i', '', $fileName); // chane
			$kaboom = explode(".", $fileName); 		//Split file name an array using the dot
			$fileExt = end($kaboom);							//Nơw target the last array element to get the file extension
			// START PHP Image Upload Error Handling
			if(!$fileTmpLoc) { // if file not chosen
				echo "ERROR: Please browse for a file before clicking the upload button";
				exit();
			} else if( $fileSize > 5242880 ) { // if file size is larger than 5 Megabytes
				echo "ERROR: Your file was larger than 5 Megabytes in sizes." ;
				unlink( $fileTmpLoc ) ; // Remove the uploaded file from the PHP temp folder
				exit();
			} else if ( !preg_match("/.(gif|jpg|png)$/i", $fileName) ) {
				// This conditions is only if you wish to allow uploading of specific file types
				echo "ERROR: Your image was not .gif, .jpg or .png.";
				unlink( $fileTmpLoc ) ; // Remove the uploaded file from the PHP temp folder
				exit();
			} else if ($fileErrorMsg == 1) { // if file upload error key is equal to 1
				echo "ERROR: An error occured while processing the file. Try again." ;
				exit();
			}
			//END PHP Image Upload Error Hadling.............
			//Place it into your "uploads" folder now using the move_uploaded_file() function
			$moveResult = move_uploaded_file($fileTmpLoc, WWW_ROOT."uploads/$fileName");
			// Check to make sure the move result is true before continuing
			
			if( $moveResult != true ) {
				echo "ERROR: file not uploaded. Try again.";
				unlink($fileTmpLoc);   // Remove the uploaded file from the PHP temp folder
				exit();
			}
			//unlink($fileTmpLoc);
			
			//--------------------Include Adams Universal Image Resizing Function
			include_once("ak_php_img_lib_1.0.php");
			$target_file = WWW_ROOT."uploads/$fileName";
			$resized_file = WWW_ROOT."uploads/resized_$fileName";
			$wmax = 300;
			$hmax = 300;
			ak_img_resize($target_file, $resized_file, $wmax, $hmax, $fileExt);
			//--------------- End resize function -------------------
			//----------------Start Adams Universal Image Thumnail Function
			$target_file =  WWW_ROOT."uploads/resized_$fileName";
			$thumbnail =  WWW_ROOT."uploads/thumb_$fileName";
			$wthumb = 150;
			$hthumb = 150;
			ak_img_thumb($target_file, $thumbnail, $wthumb, $hthumb, $fileExt);
			//----------------End thumbnail function -------------------
			//----------------Start Adams Convert to JPG function ----------
			if (strtolower($fileExt) |= "jpg") {
				$target_file =  WWW_ROOT."uploads/resized_$fileName";
				$new_jpg = $target_file =  WWW_ROOT."uploads/resized_".$kaboom[0].".jpg";
				ak_img_convert_to_jpg($target_file, $new_jpg, $fileExt);
			}
			
			// ---------- Start Adams Image Watermark Function --------
			/*
			$target_file = "uploads/resized_".$kaboom[0].".jpg";
						$wtrmrk_file = "watermark.png";
						$new_file = "uploads/protected_".$kaboom[0].".jpg";
						ak_img_watermark($target_file, $wtrmrk_file, $new_file);*/
			
			
			
			// Display things to the page so you can see what is happening for testing purposes
			echo "The file named <strong>$fileName</strong> uploaded successfuly.<br /><br />";
			echo "It is <strong>$fileSize</strong> bytes in size.<br /><br />";
			echo "It is an <strong>$fileType</strong> type of file.<br /><br />";
			echo "The file extension is <strong>$fileExt</strong><br /><br />";
			echo "The Error Message output for this upload is: $fileErrorMsg";
		} else {
			$this->render('admin_add');
		}

	}
}
