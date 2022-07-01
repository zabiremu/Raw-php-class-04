<?php
// assioative array
$assioative = ['fname'=>'zabir',"Mname" => 'raihan','lname'=> 'emu',"age" => '24', "university" =>'national university'];
print_r($assioative["Mname"]);
echo "<pre>";
$assioative["university"] = "M.E.S College";
print_r($assioative); 
echo "<pre>";
//=================================================
$array = ["Contact" =>[
    "email" => [
        "zabir@gmail.com",
        "user@gmail.com"
    ],
    "number" =>[
        'Fnum'=>"01833086035",
        'lnum' => "01670529380",
    ]
]];
echo "<pre>";
print_r($array["Contact"]['number']['Fnum']);
$array['Contact']['number']['lnum'] = "018*********";
print_r($array)
?>
<?php
echo "<pre>";
$email = "ZabirRaihan570@Gmail.Com";
echo strtolower($email);
echo "<br><br>";
$name = "zabir Raihan";
echo strtoupper($name);
echo "<br><br>";
echo ucwords($name);
echo "<br><br>";
echo strrev($name);
echo "<br><br>";
echo stripos($name,"raihan");
echo "<br><br>";
$userEmail = "abirraihan570@gmail.com";
if(stripos($userEmail,'@') && stripos($userEmail,".com")){
    echo "Login";
} else {
    echo "enter correct email";
}
echo "<br><br>";
$nameRep = "Hello World";
echo str_replace("World","Peter",$nameRep);
echo "<br><br>";
$pass = "         123          ";
if(trim($pass) == "123"){
    echo "login";
}else{
    echo "enter the corret password";
}
echo "<br><br>";
$array1 = ["I","am","zabir","raihan","emu"];
echo implode(" ",$array1);
echo "<br><br>";
$array2 = "Hi, How are you?";
var_dump(explode(" ",$array2));
echo "<br><br>";
$pass = 123;
echo sha1($pass);
echo "<br><br>";
$array3 = "image.png.jpg.mp4";
$lastData = explode(".", $array3);
var_dump(end($lastData));
echo "<br><br>";
$para = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
obcaecati tenetur iure eius e";
echo strlen($para);
?>