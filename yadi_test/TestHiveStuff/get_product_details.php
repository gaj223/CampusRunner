
<?php
header("Access-Control-Allow-Origin: *");
 
/*
 * Following code will get single product details
 * A product is identified by product id (pid)
 */
 
// array for JSON response
$response = array();
//get the data that was sent
//$json = file_get_contents('php://input');
//echo"file : \n"
//var_dump($json);
// echo "\n\n\nin get: \n";
var_dump($_GET);
//decode it
//$obj = json_decode($json);

//place in $_POST array, kinda cheating but whatever
//foreach ($obj as $key => $value) {
//     //echo "$key => $value\n";
//     $_GET[$key] = $value;
// } 
// include db connect class
//require_once __DIR__ . '/db_connect.php';
 
// connecting to db
//$db = new DB_CONNECT();
 
// check for post data
if (isset($_GET["pid"])) {
 echo "is set";
    // $pid = $_GET['pid'];
    // // get a product from products table
    // $result = $con->query("SELECT * FROM products WHERE pid = $pid");
 
    // if (!empty($result)) {
    //     // check for empty result
    //     if ($result->num_rows > 0) {
    //         require 'config.php';
    //         echo "in array";
    //         var_dump($result);
    //         $product = array();
    //         $product["pid"] = $result["pid"];
    //         $product["name"] = $result["name"];
    //         $product["price"] = $result["price"];
    //         $product["description"] = $result["description"];
    //         $product["created_at"] = $result["created_at"];
    //         $product["updated_at"] = $result["updated_at"];
    //         // success
    //         $response["success"] = 1;
 
    //         // user node
    //         $response["product"] = array();
 
    //         array_push($response["product"], $product);
 
    //         // echoing JSON response
    //         echo json_encode($response);
    //     } else {
    //         // no product found
    //         $response["success"] = 0;
    //         $response["message"] = "No product found";
 
    //         // echo no users JSON
    //         echo json_encode($response);
    //     }
    // } else {
    //     // no product found
    //     $response["success"] = 0;
    //     $response["message"] = "No product found";
 
    //     // echo no users JSON
    //     echo json_encode($response);
    // }
} else {
    echo "issue";
    // required field is missing
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";
 
    // echoing JSON response
    echo json_encode($response);
}
?>