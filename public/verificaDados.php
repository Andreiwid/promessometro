   



<html>
<head>
	<title></title>


	<script type="text/javascript">
	function meusdados1(){

		window.location='meusdados1';

	}

	function meusdados2(){

		window.location='meusdados2';

	}

	</script>
</head>
<body>

</body>
</html>









<?php
		
		session_start();
    
       



		switch ($_SESSION['ID_TIPO_USUARIO']) {
			case 1:
				 echo "<script>window.location='meusdados1'</script>";
				break;

			case 2:
				echo "<script>window.location='meusdados2'</script>";
				break;

			case 3:
				echo "<script>window.location='meusdadosadm'</script>";
				break;
			
			
		}
		
		


          
?>