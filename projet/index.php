<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Lancer de Rayon</title>
</head>
<body>
    <!-- upload un fichier -->
    <h1>Calcul d'une image</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <input class="bt" type="submit" name="generer" value="Générer l'image">
    </form>
    <?php
        
// <!-- execution du serveur du calcul de lancer de rayon -->
        if (isset($_POST["generer"])) {
            $targetDir = "./LRjava/bin/";
            $targetFile = $targetDir . basename($_FILES["file"]["name"]);

            // upload the file
            if (!(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile))) {
                echo "Erreur lors de l'envoi du fichier.";
            }

            // Java program compiled successfully   
                $executeCommand = "cd LRjava/src && javac lr/format/simple/*.java lr/format/*.java lr/*.java -d ../bin && cd ../bin && java lr.LR ". basename($_FILES["file"]["name"]); // ../../".$targetFile
                exec($executeCommand);
                
    // <!-- affichage par le serveur de l'image calculée -->
                $imagePath = "LRjava/bin/image2.png";
                echo "<img alt='superbe image' src=".$imagePath.">";
        }
    ?>
</body>
</html>