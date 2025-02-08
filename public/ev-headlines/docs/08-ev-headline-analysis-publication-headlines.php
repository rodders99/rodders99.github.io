<?php include 'html-inc/header.php'; ?>


<style>

::after.sortable {
  border-collapse: collapse;
  width: 100%;
  
  
}

.sortable {
    width: 100%;
    border-collapse: collapse;
    
}

.sortable th,
.sortable td {
    border-bottom: 1px solid #ddd;
    font-family: 'Courier', sans-serif; /* Replace with your desired font */
    

}

.sortable th {
  text-align: center;
}

.sortable td:nth-child(2),
.sortable th:nth-child(2) {
  text-align: left;
  padding-left: 15px;
}

.sortable td:nth-child(3),
.sortable th:nth-child(3) {
  text-align: center;
  padding-right: 10px;
}

.imgbg {

  height: 100px;
  width: 170px;
  position: relative;
  background-color: #FFFFFF; /* white */
  display: flex;
  justify-content: center;
  align-items: center;
}

.ratingbg {

height: 100px;
width: 300px;
position: relative;
background-color: #FFFFFF; /* white */
display: flex;
justify-content: center;
align-items: center;
}

.image {
  display: inline-block;
  vertical-align: middle;
}


</style>

<?php
$publication = "";
error_reporting(E_ALL); // report all types of errors
ini_set('display_errors', 1);

$publication = $_GET['publication'];

if (!isset($publication)) {
  // handle the case when the param is not set
  $publication = $_GET['publication'];
} else {
  // handle the case when the param is set
  $publication = 'bbc';
}

?>

<title>Media Bias and Misinformation: Analysing Mainstream Media Headlines on Electric Vehicles</title>

<body class="colorscheme-light">
    <div class="float-container">
        <a id="dark-mode-toggle" class="colorscheme-toggle">
            <i class="fa-solid fa-adjust fa-fw" aria-hidden="true"></i>
        </a>
    </div><div class="page-container">
  <div class="toolbar" style="width:100%; text-align:center; align-items:center">
                      
      <!-- JUMP TO MENU-->
      <!-- <span class="menu dropbtn" style="align-items:center;" onclick="openNav()"><i style="align-items:center" class="material-icons" style="font-size:24px; color: white">menu</i>&nbsp;Menu</span> -->
      <?php include 'menu-ev-headlines.php'; ?></div>
      <h1>Analysing Mainstream Media Headlines for Electric Vehicles</h1>
      
      
      <div id="JumptoSection"><h2>Select Publication to View EV Headlines</h2>
      <div class="countries">
              <div id="JumptoSection" >
              <!-- <select onchange="javascript:scrollToAnchor(this.value, 100);"> -->
              <select id="mySelect" onchange="javascript:changeUrlParameter()">
                      
                      <option value="">Select Publication to view Headlines</option>
                      <option value="bbc">The BBC</option>
                      <option value="express">The Express</option>
                      <option value="the-daily-mail">The Daily Mail</option>
                      <option value="the-daily-star">The Daily Star</option>
                      <option value="the-economist">The Economist</option>
                      <option value="the-independent">The Independent</option>
                      <option value="the-spectator">The Spectator</option>
                      <option value="the-sun">The Sun</option>
                      <option value="the-telegraph">The Telegraph</option>
                      <option value="the-times">The Times</option>
                      </select></div></div></div>



<h1 id="publication-overview">Publication Analysis Overview</h1> 
<p class='last-updated'><?php include '../tables/last-updated.php' ?></p>


<h2>New Vehicle Sales in the UK: A Peak-Period Analysis</h2>

<p>Click titles to sort</p>

<div class="" style="width:100%">
    <table style="width:100%"><tr>
<?php


echo "<td><div class='imgbg' > ";

echo "<img src='../icons/" . $publication . "-150.png'></div></td>
<td>
<div class='ratingbg' > 
<img src='../img/$publication-rating.png' style='height:100px'>
</div></td>";

?>
</tr>
</table>
</div>

</p>

<div class="sorted table-highlight datatable-container" style="width:100%"> 

<?php
$filename = "../tables/$publication-headline-list.html";
include $filename;
?>

</div>
<br><a href ="#" class="gototop">Top</a>


<?php include 'html-inc/footer.php'; ?>
<script src="/scripts/coder.min.6ae284be93d2d19dad1f02b0039508d9aab3180a12a06dcc71b0b0ef7825a317.js"></script> 

</div></body></html>

<script>
  function changeUrlParameter() {
    var selectedValue = document.getElementById("mySelect").value;
    var urlParam = "publication=" + selectedValue;
    window.location.href = "?"+urlParam;
  }
</script>
