<?php
        session_start();
        require("business.php");
        $login=$_SESSION['login'];
        $kategorie =$_POST['kategorie'];
        $kategorie_profils=get_profil_fotos($login);
        for ($i = 0; $i < count($kategorie); $i++)
        {
            foreach ($kategorie_profils as $kategorie_profil) 
            {
            if($kategorie_profil['name']==$kategorie[$i])
            {   
                 uninstall_profil_fotos($login,$kategorie_profil);
                 continue;
            }
            }
        }
        header('Location: profil.php');
        exit();
      ?>