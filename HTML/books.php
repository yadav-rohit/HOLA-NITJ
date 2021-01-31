<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="CSS/home.css">
    </head>
    <body id="lib">
          <?php include "navbar.html";
          
          class books {
            public $name;
            public $author;
            public $refrence;
            
        
            function __construct($name ,$author ,$refrence ) {
              $this->name = $name; 
              $this->author = $author; 
              $this->refrence=$refrence;
        
            }
            function get_info() {
                
              
            }
          }
          echo ("<div class="."wall>");
          $phaseeq = new books("phase equilibrium" ,"NA" , "https://drive.google.com/drive/u/0/folders/17IuXtFuF8fkiadcFII_LR0gSzB3CjK7f");
          $spec = new books("spectroscopy ","NA" , "https://drive.google.com/drive/u/0/folders/1stULygMscyJEvu3HtEh5Cd3bmeWSIlaw");
          $ACfd = new books("A.C fundamentals ","NA" , "https://drive.google.com/file/d/19ut9l5pJ50eL2atX1n5rryOLOsRaXglb/view?usp=sharing");
          $DCan = new books("DCcircuit analysis" ,"NA" , "https://drive.google.com/file/d/1w7XedGFeF9wRm1yFughwWfoBxrWTGUa7/view?usp=sharing");
          $tfsys = new books("Es three phase system" ,"NA" , "https://drive.google.com/file/d/1G68l7Cran4AjFXrX0xgUdvr-Re6eNENM/view?usp=sharing");
          $mpes = new books("MP ELECTRIC SHOP" ,"NA" , "https://drive.google.com/file/d/17ybVmYvEv6MMwSvXmvJ3DtbSve3lOCKl/view?usp=sharing");
          $mpft = new books("MP FITTING" ,"NA" , "https://drive.google.com/file/d/13hgE1pOKfaevVZUzldq6NiC3wEoWzCRd/view?usp=sharing");
          $enmn = new books("EST minor2" ,"NA" , "https://drive.google.com/file/d/13hgE1pOKfaevVZUzldq6NiC3wEoWzCRd/view?usp=sharing");
          $estsm1 = new books("EST SEm 1notes" ,"NA" , "https://drive.google.com/file/d/10x8vR3f_h0ShZ_Q89OZBq1rk-ncKiIML/view?usp=sharing");
          $eccs = new books("EC communication skills" ,"NA" , "https://drive.google.com/file/d/10x8vR3f_h0ShZ_Q89OZBq1rk-ncKiIML/view?usp=sharing");
          
          echo ("<div class="."bkks> <strong>NAME-:".$phaseeq->name."<br>AUTHOR NAME -:".$phaseeq->author. "<br><a href='$phaseeq->refrence'>"."REFRENCE -: <br> Cick here"."</strong></a></div>"); 
          echo ("<div class="."bkks> <strong>NAME-:".$spec->name."<br>AUTHOR NAME -:".$spec->author. "<br><a href='$spec->refrence'>"."REFRENCE -: <br> Cick here"."</strong></a></div>"); 
          echo ("<div class="."bkks> <strong>NAME-:".$ACfd->name."<br>AUTHOR NAME -:".$ACfd->author. "<br><a href='$ACfd->refrence'>"."REFRENCE -: <br> Cick here"."</strong></a></div>");
          echo ("<div class="."bkks> <strong>NAME-:".$DCan->name."<br>AUTHOR NAME -:".$DCan->author. "<br><a href='$DCan->refrence'>"."REFRENCE -: <br> Cick here"."</strong></a></div>"); 
          echo ("<div class="."bkks> <strong>NAME-:".$tfsys->name."<br>AUTHOR NAME -:".$tfsys->author. "<br><a href='$tfsys->refrence'>"."REFRENCE -: <br> Cick here"."</strong></a></div>"); 
          echo ("<div class="."bkks> <strong>NAME-:".$mpes->name."<br>AUTHOR NAME -:".$mpes->author. "<br><a href='$mpes->refrence'>"."REFRENCE -: <br> Cick here"."</strong></a></div>"); 
          echo ("<div class="."bkks> <strong>NAME-:".$mpft->name."<br>AUTHOR NAME -:".$mpft->author. "<br><a href='$mpft->refrence'>"."REFRENCE -: <br> Cick here"."</strong></a></div>"); 
          echo ("<div class="."bkks> <strong>NAME-:".$enmn->name."<br>AUTHOR NAME -:".$enmn->author. "<br><a href='$enmn->refrence'>"."REFRENCE -: <br> Cick here"."</strong></a></div>"); 
          echo ("<div class="."bkks> <strong>NAME-:".$estsm1->name."<br>AUTHOR NAME -:".$estsm1->author. "<br><a href='$estsm1->refrence'>"."REFRENCE -: <br> Cick here"."</strong></a></div>"); 
          echo ("<div class="."bkks> <strong>NAME-:".$eccs->name."<br>AUTHOR NAME -:".$eccs->author. "<br><a href='$eccs->refrence'>"."REFRENCE -: <br> Cick here"."</strong></a></div>"); 
          echo ("</div>")
          ?>
        </div>
    </body>
</html>