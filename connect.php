 <?php 
// $Name = $_POST['Name'];- //creating variable 
// $Email = $_POST['Email']; //post is used as we are sending the data using Post method
// $textarea = $_POST['textarea'];

// if(!empty($Name) || !empty($Email)|| !empty($textarea)){
//     $host = "localhost";
//     $dbUsername = "root";
//     $dbPassword = "root";
//     $dbname = "bangtanform";

//     $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
//     if(mysqli_connect_error()){
//         die('Connect Error (' .mysqli_connect_errno().')'.mysqli_connect_error());
//     }else{
//         $Select = "SELECT Email FROM bts WHERE Email = ? LIMIT 1";
//             $Insert = "INSERT INTO bts(Name, Email, textarea) values(?, ?, ?)";
//             $stmt = $conn->prepare($Select);
//             $stmt->bind_param("s", $Email);
//             $stmt->execute();
//             $stmt->bind_result($resultEmail);
//             $stmt->store_result();
//             $stmt->fetch();
//             $rnum = $stmt->num_rows;
//             if ($rnum == 0) {
//                 $stmt->close();
//                 $stmt = $conn->prepare($Insert);
//                 $stmt->bind_param("sss",$Name,  $Email, $textarea);
//                 if ($stmt->execute()) {
//                     echo "New record inserted sucessfully.";
//                 }
//                 else {
//                     echo $stmt->error;
//                 }
//             }
//             else {
//                 echo "Someone already registered using this email.";
//             }
//             $stmt->close();
//             $conn->close();
//     }
// }else{
//     echo"All fiels are required";
//     die();
// }

//Database Connection
// $conn = new mysqli('localhost','root','','bangtanform',);  //database name = bangtanform
// if($conn->connect_error){
//     die('Connection Failed : '.$conn->connect_error);
// }else{
//     $stmt = $conn->prepare("insert into BTS (Name, Email, textarea) values(?,?,?)");
//     $stmt->bind_param("sss", $Name, $Email , $textarea);
//     $stmt->execute();
//     echo "All Done!";
//     $stmt->close();
//     $conn->close();
// }
?>