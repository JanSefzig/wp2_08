
   
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

        $apal   = 10;
        $ostrov  = 0;
        $lod  = 200;

        echo "0 Nákladu loď je bez nákladu a na Apalu je 100 nákladu. <br>";

         do {
           $apal  = $apal - 10;
           echo "Na Apalu je: " . $apal . " nákladu. ";
           for ($i=0; $i < 5 ; $i++) {
             $strela= rand(0,10);
             $lod = $lod - $strela;
               }
               if ($lod <= 0) {
                     echo "<br>Loď je zničena, nebude dál převážet!";
                      break;
                }
              $ostrov = $ostrov + 10;
              echo $ostrov . " nákladu je na ostrovu.";

              echo  "<br> A zbylé HP lodi je : " . $lod . "<br>";

               if ($apal == 0) {
                    echo "Na Apalu nezbývá žádný náklad.";
               }
              }
        while ($ostrov < 100)
     ?>
     <?php echo "<br>Na ostrovu zbylo: " . $ostrov; ?>
  </body>
</html>


