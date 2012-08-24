<?php
class DesignsController extends AppController {
	public $name = "Designs";
	public function admin_index() {
		$this->layout = "admin_layout";
	}
	
	
	/*
	$this->layout = "admin_layout";
				$this->Session->setFlash('');
				if(!empty($this->data)) {
					
					$parent_id = $this->data['Collection']['parent_id'];
					//$parent = $this->Collection->getById($parent_id, true);
					$this->Collection->save($this->data);
					$this->redirect(array( 'action' => 'admin_index'));
				} else {
					$parents[0] = '[ Top ]';
					$Collectionlist = $this->Collection->generateTreeList(null, null, null, " - ");
					if($Collectionlist) {
						foreach ( $Collectionlist as $key=>$value ){
							$parents[$key] = $value;
						}
						$this->set(compact('parents'));
					}
				}*/
	
	
	public function admin_add() {
		$this->layout = "admin_layout";
		$this->Session->setFlash('');
		if ( !empty( $this->data ) ) {
			$data = $this->data['Design'];
			$collection_id = $this->data['collectionId'];
			// Upload images
			$fileName = $data['file']['name']; // the file name
			$fileTmpLoc = $data['file']['tmp_name'];
			$fileType = $data['file']['type'];
			$fileSize = $data['file']['size'];
			$fileErrorMsg = $data['file']['error'];
			$fileName = preg_replace('#[^a-z.0-9]#i', '', $fileName);
			$fileName = $data['code'].$fileName; 			// Lay cai ma de luu cai name xuong
			$kaboon = explode(".", $fileName);
			$fileExt = end($kaboon);
			$fileExt_temp = $fileExt; // this variable use for convert function
			//START PHP Image Upload Error Handling
			if(!$fileTmpLoc) {
				echo "ERROR: Please browse for a file before clicking the upload button";
				exit();
			} else if ( $fileSize > 5242880 ) {
				echo "ERROR: Your file was larger than 5megabytes in size.";
				unlink($fileTmpLoc);
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
			if (strtolower($fileExt) != "jpg") {
			
				$target_file =  WWW_ROOT."uploads/resized_$fileName";
				$new_jpg = $target_file =  WWW_ROOT."uploads/resized_".$kaboom[0].".jpg";
				ak_img_convert_to_jpg($target_file, $new_jpg, $fileExt);
			}	
			// Luu xuong bang images
			$url = "uploads/resized_$fileName";
			App::import('model','Image');
			$imageModel = new Image();
			$imageData = array('Image' => array(
												'url' => $url,
												'description' => ''
											)
			);
			$imageModel->save($imageData);
			$image_id = $imageModel->id;
			
			// Luu xuong bang design
			$code = $data['code'];
			$description = $data['description'];
			$designData = array('Design' => array(
												'code' => $code,
												'description' => $description,
												'collection_id' => $collection_id,
												'image_id' => $image_id
											)
			);
			// luu
			$this->Design->save($designData);
		} else {
			// lam cai chi o day sau
		}
	}
}
