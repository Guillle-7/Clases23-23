<?php 
# Conectamos a la base de datos
$host='localhost';
$dbname='hospital';
$user='root';
$pass='';

try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
  $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );


  //INSERT
/*   $arrayValues = array(
    ":id" => null,
    ":name"=>"Victor",
    ":email" => "Victor",
    ":pass"=>""
  );
  $sql = "insert into users (id, name, email, password) values (:id, :name, :email, :pass)";
  $stmt = $pdo -> prepare($sql);
  $row = $stmt -> execute($arrayValues);
  echo $row;/

  $sql = "select from users limit 10";
  $stmt = $pdo -> prepare($sql);
  $row = $stmt -> execute();

  $stmt->setFetchMode(PDO::FETCH_ASSOC);

  // while ($row = $stmt->fetch() 
    //{
        /* echo "<pre>";
      print_r($row);
    echo "</pre>"; */
    //echo $row["name"]."<br>";
    //} 


  $rows = $stmt -> fetchAll();
    echo "<pre>";
    print_r($rows);
    echo "</pre>";

    echo $rows[8]["name"];

  $stmt = null;

}

catch(PDOException $e) {
    echo "Se ha producido un error al intentar conectar al servidor MySQL: ".$e->getMessage();
}

?>