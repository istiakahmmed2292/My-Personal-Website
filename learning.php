 
<!doctype html>
<html lang="en">
<?php include('head.php'); ?> 

<head>
  
<style>
textarea{
	height:150px;
	width:100%;
	background-color:;
	border:5px solid white;
	border-radius: ; 
	
}

iframe{
	height:520px;
	width:100%;
	background-color:gray;
	border:5px solid white;
	border-radius:10px; 
}
body {
  align-items: center;
  background: ;
 
}

.element {
  align-items: center;
  background: linear-gradient(-45deg, rgba(0,0,0,0.22), rgba(255,255,255,0.25));
  box-shadow: 12px 12px 16px 0 rgba(0, 0, 0, 0.25),
   -8px -8px 12px 0 rgba(255, 255, 255, 0.3);
  border-radius:10px;
  display: flex;
  height: 150px;
  justify-content: center;
  width: 100%;
  padding:10px;
}
 
 
.element-3 {
  background: linear-gradient(135deg, rgba(0,0,0,0.22), rgba(255,255,255,0.25));
}
 
</style>

</head>
<body>
<!-- header -->
<?php include('header.php'); ?>
<!-- //header -->

<!-- contact breadcrumb 
<section class="w3l-about-breadcrumb text-center">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-2">
         Write Your Code Below & Test
    </div>
	
</section>-->
  
<!-- contact breadcrumb -->

<!-- contact block -->
<!-- contact1 -->
<section class="w3l-aboutblock1" id="about">
    <div class="midd-w3 py-5"> 
        <div class="container py-lg-5 py-md-3">
               <div class="row">
            <div class="col-lg-6">

                <label><i class="fa fa-html5" aria-hidden="true"></i> HTML Code</label>
                <textarea id="html" onkeyup="run()" class="element element-3"></textarea> 

                <label><i class="fa fa-css3" aria-hidden="true"></i> CSS Code</label>
                <textarea id="css" onkeyup="run()" class="element element-3"></textarea>

                <label><i class="fa fa-js" aria-hidden="true"></i> JS Code</label>
                <textarea id="js" onkeyup="run()" class="element element-3"></textarea>
				
				 

            </div>

            <div class="col-lg-6">
                <label><i class="fa fa-play" aria-hidden="true"></i> Output</label>
                <iframe id="output" class="element element-3" style="height:520px;width:100%;"></iframe>
            </div>
        </div>
			
				     <script>
            function run() {
                let htmlCode = document.getElementById("html").value;
                let cssCode = document.getElementById("css").value;
                let jsCode = document.getElementById("js").value;

                let output = document.getElementById("output");

                // Set the content of the iframe
                output.contentDocument.documentElement.innerHTML = htmlCode;

                // Create style element for CSS
                let style = document.createElement("style");
                style.innerHTML = cssCode;

                // Append style to the head of the iframe
                output.contentDocument.head.appendChild(style);

                // Create script element for JS
                let script = document.createElement("script");
                script.innerHTML = jsCode;

                // Append script to the body of the iframe
                output.contentDocument.body.appendChild(script);
            }
        </script>
			  
		</div>
			
    </div>
    
</section> 


<!-- //contact block -->
<!-- Footer -->
<?php include ('footer.php');?>
<!-- //Footer -->

