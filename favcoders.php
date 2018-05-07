<!DOCTYPE html>
<html lang="en-US">


<?php
    
    
    include 'inc/header.php'
    ?>

<!-- include jquery -->
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>        <!-- /.znav-container-->
        <body>
        <section class="p-0 font-1">
            <div class="background-holder overlay overlay-1" style="background-image:url(assets/images/about-team-header.jpg);"></div>
            <!--/.background-holder-->
            <div class="container">
                <div class="row color-white">
                    <div class="col-md-8 py-10"><br>
                        <h5 class="text-uppercase wow fadeInLeft">The FavCoders</h5>
                        <h2 class="fs-4 wow fadeInUp">Code &#9679; Ship :)</h5></div>
                </div>
                <!--/.row-->
            </div>
            <!--/.container-->
        </section>
            
        <section>
           
        <div class="container">
            
                <div id ="div1" class="row">
                    
                </div>
                <!--/.row-->
           </section> 
        
       
  
</body>
  <script >
 // Trying to create and add properties to json object
 var json = (function () {
    var json = null;
    $.ajax({
        'async': false,
        'global': false,
        'url': "profile.json",
        'dataType': "json",
        'success': function (data) {
            json = data;
        }
    });
    return json;
})(); 

for (var key in json ) {
  if (json.hasOwnProperty(key)) {
for (var step = 1; step < 1; step++) {
  // Runs 5 times, with values of step 0 through 4.
    alert(json[key].name);
    alert(json[key].title);
}
var para = document.createElement("div");
 para.setAttribute("class", "col-sm-6 mb-7");
 para.setAttribute("id", "divs2_" + json[key].id);
 document.getElementById("div1").appendChild(para);


var para2 = document.createElement("div");
    para2.setAttribute("class", "row pr-xl-4");
    para2.setAttribute("id", "divs3_" + json[key].id);
    document.getElementById("divs2_" + json[key].id).appendChild(para2);

var para3 = document.createElement("div");
    para3.setAttribute("class", "col-lg-95");
    para3.setAttribute("id", "divs4_" + json[key].id);
    document.getElementById("divs3_" + json[key].id).appendChild(para3);

 
 var para4 = document.createElement("img");
    para4.setAttribute("class", "mb-4 w-100");
    para4.setAttribute("src", "assets/images/portraits/225x313/2.jpg");
    document.getElementById("divs4_" + json[key].id).appendChild(para4);
  
var para5 = document.createElement("div");
    para5.setAttribute("class", "col");
    para5.setAttribute("id", "divs5_" + json[key].id);
    document.getElementById("divs3_" + json[key].id).appendChild(para5);

var para6 = document.createElement("h5");
    var p_name = document.createTextNode(json[key].name);
    para6.appendChild(p_name);
    para6.setAttribute("class", "mb-3");
    para6.setAttribute("id", "name");
    document.getElementById("divs5_" + json[key].id).appendChild(para6);
    
var para7 = document.createElement("h6");
    var p_title = document.createTextNode(json[key].title);
    para7.appendChild(p_title);
    para7.setAttribute("class", "mb-4 ls fw-400");
    para7.setAttribute("id", "title");
    document.getElementById("divs5_" + json[key].id).appendChild(para7);
    
var para8 = document.createElement("p");
    var p_bio= document.createTextNode("Rapha leads Squarespace Ireland and oversees the company’s global Customer Operations teams that support millions of Squarespace users. Prior to this role, Raphael spent eight years at Google developing and managing different operations teams in Brazil, Argentina, Poland and Ireland.");
    para8.appendChild(p_bio);
    para8.setAttribute("class", "fw-300 font-1 color-7");
    para8.setAttribute("id", "bio");
    document.getElementById("divs5_" + json[key].id).appendChild(para8);

var para9 = document.createElement("a");
    para9.setAttribute("class", "font-1 color-1");
    para9.setAttribute("id", "github_" + json[key].id);
    para9.setAttribute("href", json[key].github);
    document.getElementById("divs5_" + json[key].id).appendChild(para9);

var para10 = document.createElement("span");
    para10.setAttribute("class", "fa fa-github fs-1 mr-1");
    para10.setAttribute("id", "github");
    document.getElementById("github_" + json[key].id).appendChild(para10);

var para11 = document.createElement("span");
    var p_handle = document.createTextNode("@zfinix");
    para11.appendChild(p_handle);
    para11.setAttribute("class", "fw-100");
    document.getElementById("github_" + json[key].id).appendChild(para11);
}}
  
</script>
<?php
        
        include 'inc/footer.php'
        ?>

</html>