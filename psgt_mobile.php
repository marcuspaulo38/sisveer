<?php

header("refresh: 7;");

error_reporting(0);
header('Content-Type: application/json');
header('Character-Encoding: utf-8');

$servername = "sql184.main-hosting.eu";
$username = "u132039622_agua";
$password = "Agua2020";
$dbname = "u132039622_agua";


    // Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
if ($conn->connect_error) 
{
	die("Connection falhou: " . $conn->connect_error);
} 

else {
   	// faz a consulta
	 $query = ("SELECT * FROM dados1 ORDER BY id DESC LIMIT 1");
	$result = mysqli_query($conn, $query) or die("Algum problema na query".mysql_Error());
	$num_rows = mysqli_num_rows($result);

	$json = array();
	while($row = mysqli_fetch_assoc($result))
	{
		
		            $dados           = $row['dados'];
                    
                    
                    $campo01              = substr("$dados",170, 9);
                    $campo01_altura       = substr("$id", 215, 7)." mm";
                    $campo01_temperatura  = substr("$id", 216, 11)." °C";
					
					
					$campo02             = substr("$dados",246, 13);
                    $campo02_altura      = substr("$id", 285, 17)." mm";
                    $campo02_temperatura = substr("$id", 297, 9)." °C";
                  
					
                    $campo03             = substr("$dados",330, 9);
                    $campo03_altura      = substr("$id", 375, 6)." mm";
                    $campo03_temperatura = substr("$id", 376, 11)."°C";
                   
					
                    $campo04              = substr("$dados",397, 22);
                    $campo04_altura       = substr("$id", 449, 11)." mm";
                    $campo04_temperatura  = substr("$id",457, 70)." °C";
		
		
		
		$json[] = array(
			'id' => utf8_encode( $row['id'] ),
			'dados1' => utf8_encode( $campo01 ),
			'dados2' => utf8_encode( $campo02 ),
			'dados3' => utf8_encode( $campo03 ),
			'dados4' => utf8_encode( $campo04 ),
			'data1' => utf8_encode($row['data'] )
		);
		
		

	}

	// converte o array em Json
	echo json_encode($json, JSON_PRETTY_PRINT);

	mysqli_close($conn);
}

mysqli_close($conn);
 

?>
