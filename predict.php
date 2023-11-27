<?php
session_start();

$apiUrl = "http://127.0.0.1:5022/orders";
// 'http://127.0.0.1:4029/orders';

// Initiate a new cURL session/resource
$curl =curl_init();
if ($_SERVER["REQUEST_METHOD"] == "POST") {


$input1=$_POST['input1'];
$input2=$_POST['input2'];
$input3=$_POST['input3'];
$input4=$_POST['input4'];
$input5=$_POST['input5'];




$params = array(
                'arg_week' => $input1, 
                'arg_center_id' => $input2,
                'arg_meal_id' => $input3, 
                'arg_checkout_price' => $input4,
                'arg_base_price' => $input5,
            );

// STEP 3: Set the cURL options
// CURLOPT_RETURNTRANSFER: true to return the transfer as a string of the
// return value of curl_exec() instead of outputting it directly.
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$apiUrl = $apiUrl . '?' . http_build_query($params);
curl_setopt($curl, CURLOPT_URL, $apiUrl);

// For testing:
// echo "The generated URL sent to the API is:<br>".$apiUrl."<br><br>";

// Make a GET request
$response = curl_exec($curl);

// Check for cURL errors
if (curl_errno($curl)) {
    $error = curl_error($curl);
    // Handle the error appropriately
    die("cURL Error: $error");
}

// Close cURL session/resource
curl_close($curl);

// Process the response
// echo "<br>The predicted output in JSON format is:<br>" . var_dump($response) . "<br><br>";

// Decode the JSON into normal text
$data = json_decode($response, true);

// echo "<br>The predicted output in decoded JSON format is:<br>" . var_dump($data) . "<br><br>";
$diagnosis;
// Check if the response was successful
if (isset($data['0'])) {
    // API request was successful
    // Access the data returned by the API
	// echo "The predicted Lung Cancer status is:<br>";
    echo "The predicted number of orders:";
	echo $data[0];
    // if($data[0]=="YES"){
    //     // echo "<br><br>Unfortunately,You have Lung cancer. Please consult a doctor.";
    //     // $diagnosis=$data[0];
    //     $_SESSION['diagnosis']="<h3>Unfortunately,😔 You have Lung cancer. Please consult a doctor.</h3>";
    // }
    // if($data[0]=="NO")
    // {
    // // echo "<br><br> Congratulations!! You DO NOT HAVE Lung Cancer";
    // $_SESSION['diagnosis']="<h3>Congratulations!! 🎉 You DO NOT HAVE Lung Cancer</h3>";
    // }
    // echo $data[0];
    // header('Location: diagnosis.php');
    // Process the data
	// foreach($data as $repository) {
	// 	echo $repository['0'],$repository['1'],$repository['2'],"<br>";
	// }
} else {
    // API request failed or returned an error
    // Handle the error appropriately
    echo "API Error: " . $data['message'];
}
}






// REQUIRED LAB WORK SUBMISSION:
/*
Create a form in the web user interface to post the parameter values
(e.g., $arg_pregnant, $arg_glucose, etc.) instead of setting them manually
in Line 22-49.
*/
?>