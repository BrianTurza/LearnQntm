<?php 
require_once('../../common.php');

if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: ../../login');
}
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: ../../login");
}
$completed = FALSE;
?>
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE 3 | Starter</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../vendors/AdminLTE-master/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../vendors/AdminLTE-master/dist/css/adminlte.min.css">

  <link rel="stylesheet" href="../../vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="../../vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="../../vendors/linericon/style.css">
  <link rel="stylesheet" href="../../vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="../../vendors/owl-carousel/owl.carousel.min.css">

  <link rel="stylesheet" href="../../css/simple-sidebar.css">

  <link href="../../vendors/prism.css" rel="stylesheet">

  <link href='../../vendors/fullcalendar/lib/main.css' rel='stylesheet' />

  
  <link rel="stylesheet" href="../../vendors/nice-select/nice-select.css">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">

  <link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" href="../../css/style-learn.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body style="background: #f4f6f9" class="hold-transition sidebar-mini">
  <!-- Navbar -->
<?php require_once('../../includes/navbar.php') ?>
<main class="side-main">
<div style="margin-left: 3%" class="container-fluid">
  
   <div class="col-md-10">
      <div style="width: 100%" class="card card-primary">
        <div style="margin-left: 3%; margin-right: 3%">
            <br><h2><?php echo $lang['LEARN_TITLE'] ?></h2>
            <span style="float:right"><strong>Spend time</strong>: 20min</span><br>
            <hr>
      <br>
            <p style="white-space: pre-wrap;">
            1.1 Klasicky bit, klasicky po¢itaé

            Klasicky bit, skratene bit, predstavuje zAkladnd jednotku informacie. Nado-
            bida jednu z diskrétnych hodndét {0,1}. Ak spojime 3 bity, méZeme v nich
            uchovat hodnoty napr. 101, 010, atd. Trividlna, ale pre nas délezita skutoé-
            nost je, Ze klasicky bit neméZe nadobtidat Ziadne iné hodnoty.

            Pod pojmom algoritmus rozumieme kone¢ny deterministicky sled krokov,
            ktory riesi dany typ problému.

            Klasicky poéitaé mOézeme interpretovat dvoma spésobmi: ako Turingov stroj
            alebo ako zapojenie logickych obvodov. Podrobny popis Turingovho stroja
            je teraz nepodstatny a mdzZeme ho nasjt v [2]. Dédlezité je ale nasledujiice
            tvrdenie [2]:

            Tvrdenie 1.1.1 (Churchova - Turingova téza). Trieda funkcit spocitatelna
            na Turingovom. stroji presne koresponduje s triedou funkcit spocitatelnych
            algoritmom.

            Neformdalne povedané, ku kaZdému algoritmu existuje ekvivalentny Turingov
            stroj. Zial, tézu nemoZno brat za definiciu, ale dava nam dobrt predstavu,
            éo to znamena, Ze funkcia je spocitatelnd algoritmom.

            Iny model klasického poéitaéa je zalozeny na logickych obvodoch. Tie st
            tvorené logickymi hradlami prepojenymi elektrickymi obvodmi. Tento mo-
            del ma k realite bliZSie neZ model Turingovho stroja, aj ked’ st ekviva-
            1.2 Kvantovy bit, kvantovy po¢itaé 7

            lentné. Vo vseobecnosti, logické hradlo je zariadenie vykonavajtce funkciu f:
            {0, 1}* — {0, 1}, kde na vstupe je & bitov a na vystupe / bitov. Prikladmi
            si hradla NOT (-), AND (A), OR (V), vykonavajtice rovnomenné logické
            operacie. Dé sa ukadzat, Ze vSetky hradlé mé6Zu byt poskladané z koneéného
            pottu NAND. Nech aa b st vyrokové atémy. Logicky, a NAND b = -(aAb).
            Dalej sa & =(aAa); aAb & =(=(aAb)) aaVb & =(aA-b) (De Morganov
            zdkon). Nakolko kaZdd4 vyrokové formula je ekvivalentna s istou formulou,
            ktora je v disjunktivnom normaélnom tvare (tj. zlozend z vyrokovych atémov
            pomocou negacie, disjunkcie a konjunkcie) [5], d6kaz je hotovy.
            </p>
            <pre>
          <code class="language-python">
from qiskit import QuantumCircuit, execute, Ae
from qiskit.visualization import plot_histogram, plot_bloch_vector
from math import sqrt, pi

qc = QuantumCircuit(1)
        </code>
        <button class="btn btn-success" style="float: left; margin-left: 2%;">Run</button>
        </pre>	
            </div>
            <br>
          </div>
        </div>  
      </div>
    </div>
</div>
</main><br><br>
<?php require_once('../../includes/footer.php') ?>
<!-- REQUIRED SCRIPTS -->

<script src="../../vendors/jquery/jquery-3.2.1.min.js"></script>
  
<script src="../../vendors/bootstrap/bootstrap.bundle.min.js"></script>

<script src="../../vendors/nice-select/jquery.nice-select.min.js"></script>

<script>
  $(document).ready(function(){
    $('select').niceSelect();
  });
</script>

<script src="../../vendors/owl-carousel/owl.carousel.min.js"></script>

<!-- AdminLTE App -->
<script src="../../vendors/AdminLTE-master/dist/js/adminlte.min.js"></script>

<script src="../../js/main.js"></script>

<!-- fullCalendar 2.2.5 -->
<script src="../../vendors/AdminLTE-master/plugins/moment/moment.min.js"></script>

<script src='../../vendors/fullcalendar/lib/main.js'></script>
<script src="../../vendors/prism.js"></script>
  <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
</body>
</html>
