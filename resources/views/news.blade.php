<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - Henry Orjiude</title>
    <link rel="stylesheet" href="./bootstrap5/css/bootstrap.css">
    <link rel="stylesheet" href="./home_files/styles.css">

	<style>
		#acidrain {
			display: flex;
			justify-content: center;
			align-items: baseline;
		}
	</style>
</head>
<body>
   <div id="acidrain">
	<center>
		<h1>
			Hi, <br> I'm Henry. <br> My Kind Of Languages <br> 
			Are Programming Languages
			  <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-emoji-smile-fill" viewBox="0 0 16 16">
				<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zM4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8z"/>
			</svg>
		</h1>
		{{-- <div>
			<button id="toggle-icon" onclick="myFunction ()">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
			</button>
		</div> --}}
		<div id="toggle">
			<i class="indicator"></i>
		</div>
	   </center>
   </div>

    <script>
        const body = document.querySelector('body');
        const toggle = document.getElementById('toggle');
        toggle.onclick = function() {
            toggle.classList.toggle('active');
            body.classList.toggle('active');
        }
    </script>
 {{-- <script>
     function myFunction() {
         var element = document.body;
         element.classList.toggle("dark-mode");
     }
 </script> --}}
 <script src="./bootstrap5/js/bootstrap.bundle.js"></script>
</body>
</html>