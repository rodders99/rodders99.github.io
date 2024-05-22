<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml" lang="" xml:lang="">
<head>
<meta charset="utf-8" /> 
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
<meta name="color-scheme" content="dark">
<!-- <link rel="stylesheet" href="/css/coder-dark.css" media="screen"> -->
<!-- <link rel="stylesheet" type="text/css" href="/css/coder.css"> -->
<link rel="stylesheet" type="text/css" href="/css/custom.css">
<link rel="stylesheet" type="text/css" href="/css/custom-menu.css">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" type="text/css" href="/css/project-style.css">

<title>eu-safetygate-report-2023</title>

</head>

<body>


              
             
              <!-- NAVIGATION MENU-->
 
              <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                
                <?php include 'menu.php'; ?>
              
              </div>


  
              <div class="page-container">
              <div class="toolbar" style="width:100%; text-align:center;">
                <span class="menu dropbtn" style="align-items:center;" onclick="openNav()"><i style="align-items:center" class="material-icons" style="font-size:24px; color: white">menu</i>&nbsp;Menu</span>

                        <!-- JUMP TO MENU-->
          
            <div id="JumptoSection">Jump to section</div>
            <div class="countries">
          

            
              <select onchange="window.location.hash=this.value" class="country">
                <option value="header-1">EU Safetygate report</option>
                <option value="header-2">Country Annual Total</option>
                <option value="header-3">Country Cumulative and Year on Year change</option>
                <option value="header-4">Country Top 3 Product & Risk Categories</option>
                <option value="header-5">Country Product Category</option>
                <option value="header-8">Risk Category</option>
                <option value="header-11">Counterfeit</option>
                <option value="header-14">Action Required / Responsible Party</option>
                <option value="header-16">Submitting Country</option>
                <option value="header-19">Top 3 Product Categories</option>
                <option value="header-20">#1 - Top Product Category</option>
                <option value="header-21">#1 - Product Category Annual / Total</option>
                <option value="header-24">#1 - Product Category Risk Category</option>
                <option value="header-27">#1 - Product Category Counterfeit</option>
                <option value="header-30">#1 - Product Category Action Required / Responsible Party</option>
                <option value="header-32">#1 - Product Category Submitting Country</option>
                <option value="header-35">#1 - Product Category Top Brands</option>
                <option value="header-37">#2 - Top Product Category</option>
                <option value="header-38">#2 - Product Category Annual / Total</option>
                <option value="header-41">#2 - Product Category Risk Category</option>
                <option value="header-44">#2 - Product Category Counterfeit</option>
                <option value="header-47">#2 - Product Category Action Required / Responsible Party</option>
                <option value="header-49">#2 - Product Category Submitting Country</option>
                <option value="header-52">#2 - Product Category Top Brands</option>
                <option value="header-55">#3 - Top Product Category</option>
                <option value="header-55">#3 - Product Category Annual / Total</option>
                <option value="header-58">#3 - Product Category Risk Category</option>
                <option value="header-61">#3 - Product Category Counterfeit</option>
                <option value="header-64">#3 - Product Category Action Required / Responsible Party</option>
                <option value="header-66">#3 - Product Category Submitting Country</option>
                <option value="header-69">#3 - Product Category Top Brands</option>
                
              </select>
            </div>
          </div>

    <h1 class="ChangeCountry">EU Safetygate report</h1>
    <p><img src="https://rodders.me/safetygate/img-2024/icons/Safety_Gate_Logo.png" alt="Safety Gate Logo" style=""></p>
  
    <?php include 'nav-menu-include.php'; ?>


<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://unpkg.com/tippy.js@6"></script>
<script src="projects-current-year.js"> </script>



<script>
  /* Set the width of the side navigation to 250px */
function openNav() {
document.getElementById("mySidenav").style.width = "350px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
document.getElementById("mySidenav").style.width = "0";
} 
</script>

</body>

</html>


