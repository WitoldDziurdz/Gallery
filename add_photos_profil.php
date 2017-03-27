<?php
        session_start();
        require("business.php");
        $y=0;
        $login=$_SESSION['login'];
        $kategorie =$_POST['kategorie'];
        $kategorie_profils=get_profil_fotos($login);

        for ($i = 0; $i < count($kategorie); $i++)
        {
            $y=0;
            foreach ($kategorie_profils as $kategorie_profil) 
            {
   
            if($kategorie_profil['name']==$kategorie[$i])
            {
                $y=1;
                continue;
            }
            }
            if($y) continue;
            $foto= $kategorie[$i];
            $name = ['name' => $foto];
            
            save_profil_foto($login,$name);
        }
        header('Location: galeria.php');
        exit();
      ?>