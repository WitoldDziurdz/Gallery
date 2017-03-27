<?php
        session_start();
           require("business.php");
           require_once("function.php");
           if($_FILES)
           {
            $own=$_POST['own'];
            if($_POST['author'])
           	$author=$_POST['author'];
            else
            $author=$_SESSION['login'];  
           	$title=$_POST['title'];
           	$text_watermark=$_POST['watermark'];
           	$name=$_FILES['filename']['name'];
            $type=$_FILES['filename']['type'];
            $size=$_FILES['filename']['size'];
            $filename=$_FILES['filename']['tmp_name'];
            $uploads_dir_original = 'images/original/';
            $uploads_dir_watermark = 'images/watermark/';
            $uploads_dir_mini = 'images/mini/';
            $max_size_foto=1000000;
            $width_mini_foto=200;
            $hight_mini_foto=125;
            $rand=random();
            $text_galerja="";
            switch ($_FILES['filename']['type']) 
            {
            	case 'image/jpeg': $ext='jpg'; break;
            	case 'image/png':  $ext='png'; break;
            	default:           $ext=''; break;
            }
            if($ext)
            {
            	if($_FILES['filename']['size']<=$max_size_foto)
            		{
            			$plik="$rand.$ext";
            			move_uploaded_file($filename, "$uploads_dir_original$plik");
            		    imageresize("$uploads_dir_original$plik","$uploads_dir_mini$plik",$width_mini_foto,$hight_mini_foto);
            		    watermark("$uploads_dir_original$plik","$uploads_dir_watermark$plik",$text_watermark); 
            		     $q=0;
                     $person = [
                        'author' => $author,
                        'title' => $title,
                        'watermark' => $text_watermark,
                        'name' => $plik,
                        'type' => $type,
                        'size' => $size,
                        'own' => $own
                                       ];
                         save_product($person);
                         header('Location: galeria.php');
                         exit();
            		}
                else
                {
                	$text_galerja="plik jest wiekszy ot 1 mb musisz zmniejszyć rozmiar pliku.";
                }
            }
            else
            {
            	if($_FILES['filename']['size']<=$max_size_foto){
            	$text_galerja="plik nie jest dozwolenego rosszerzenia.";
                }
            
                else{
                	$text_galerja="plik nie jest dozwolenego rosszerzenia i prsewyssza dozwolony rozmiar.";
                }
             }
           }
          else
          {
          	$text_galerja="Plik nie zostł przesłany.";
          }
         
        include_once("galeria.php");
      ?>