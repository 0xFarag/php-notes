<?php
  //define variable in php using by $ (ex.==>> $var) 
  //echo or print used for printing
  //different between single quoted and multiple quoted returns the string as it is but multiple return the value of variable (echo "hello $x" ,echo 'hello $x') 
  define($dp,3560.14,true); //var,value,case sensitive -->> static var or value 
  echo var_dump($var); //check the data type of variable (string ,int ,float,...)
  $a='b'; $b=5; echo $$a; //==>> echo $b >> output=10
  echo substr($x,0,7); //print part of string (variable,first,end)
  echo strpos($x,'v'); //print position of character (variable,char)
  echo strpos($x,'l',6); //print position of l after 6 characters
  echo strlen($x); //length of string
  echo ucfirst($x); //print first char is capital
  echo ucwords($x); //print first char in each ord is capital
  echo strtoupper($x); //transfer string to uppercase
  echo strtolower($x);//transfer string to lowercase
  echo str_replace('hello','hi',$x); //replace word or statement (replace hello)
  echo str_word_count($x); //count words in statement
  echo strrev($x); //reverse word or statement
  echo end(explode('.',$image));   //divide name of image and print the name after '.'
  in_array($var,$Array); //check var is found in the array or not 
  empty($var); // check if var is empty or not 
  trim($x); //remove space ==>> $x="      hello every body";
  echo strip_tags($var); //remove tags ==>> $var ="<h1>Hello</h1>"; (used in form validation)
  echo stripslashes($x); //remove slashes 
  echo htmlspecialchars($var); //print tags but these tags are not valid ==>> $var ="<h1>Hello</h1>";
  echo '<br>'; //print new line
  echo $x.$y.$var; //(. ==>> dot)concatenation (print more than one variable or value)
  echo 5**3; //power(5,3) ==>> 5*5*5 (Mathematical Operations)
  //assignment operators (= , -= , %= , *= , /=) ==>> ($x-=5; ==> $x=$x-5 | $x*=10 ==> $x=$x*10)
  //increment or decrement operators (-- , ++) ==>> ($x-- ==>> $x=$x-1 | $x++ ==>> $x=$x+1 ) have two type (postfix or prefix) ==>> (--$x | ++$x) prefix
  # Comparison Operators (== , > , < ,!= , <>, >= , <= ,=== , !==) (<> refer to not equal) (=== compare equality and data type)
  echo $x>$y;  //print 1 if comparison is true else didn't print anything (boolean variable)
  #logical operator ( && , || , !, xor) ( !$x ==>> check if x is found or not ,if isn't found print 1 else didn't print anything) , (xor it will execute if 2 condition is reverse to each other (xor gate in(cs)))
      //examples: echo x >10 && y>20 , echo x>10 xor y>20 ,  echo x>10 || y>20 
  //comment in single line(//,#) more than one line(/**/)
  
  // #condition
    //if condition
      if ($x<10 xor $x >10) echo "yes"; else echo "no";
    //switch condition 
      switch($x){
        case 10:{
          echo 10;
          break;
        }
        case 50 : {
          echo 50;
          break;
        }
        case 60 : {
          echo 60;
          break;
        }
        default : {
          echo 0;
          break;
        }
      }

  // #loop
    while($counter>0){echo $counter." "; $counter--; }  
    do{echo $counter."<br>";$counter--;}while($counter>0);
    for($i=0;$i<=10;$i++){echo $i." ";}
    $x=0; for(;;){echo $x." ";$x++;} //(infinite loop)
    foreach($x as $x) echo $x;
    //break ==>> break for loop
    //continue ==>> skip step
  
  // #define function
  function printNums($num){
      echo "first function".$num;
    } 
    $num=1;
    printNums($num);
    function addTwoNum($x,$y){
      return $x+$y;
    }
    echo addTwoNum(5,4);
  
  // #Local and Global Variables
    $x=100;
    function printNum(){
      global $x; //100
      echo "first function".$x; //100
    } 
    $x=10; //x=10
    printNum(); //output x=10

    $x=100;
    function PrintNumb(){
      $x=10; 
      echo "local var".$x.'<br>';
      echo "global var".$GLOBALS['x'];  // ==>>name of var
    }
    PrintNumb(); 

  //# Static Variable
    static $x=1;
  // #array

    // indexed array
      $numbers=array(1,2,3,4,5);
      print_r($numbers); //print for all element in th array
      $numbers[]=6; //push back in array

    // # associative array
      $grades=array('arabic'=>10,'math'=>20,'english'=>30); // array[arabic]= 10 ,array[english]=30 and so on ..
      foreach($grades as $k=>$grade)echo $k." = ".$grade.'<br>'; //(arabic = 10 ,math = 20 and so on ...)
  // #two dimension array  (indexed array)
      $numbers=array(
        array(1,2,3),
        array(4,5,6),
        array(7,8,9)
      );
      print_r($numbers);

  // #two dimension array  (associative array)
      $names=array(
        'arabic'=>array(1,2,3),
        'english'=>array(5,6,7)
      );
      print_r($names);

  //#Super GLOBALS
    //$GLOBALS['x'];

    //$_SERVER
      echo $_SERVER['PHP_SELF'];  // print pwd of script (file name) (variable can be used by hackers (xss)) ==>>solution (htmlspecialchars($_SERVER['PHP_SELF']))
      echo $_SERVER['SERVER_NAME']; // print server name (localhost ,...)
      echo $_SERVER['HTTP_HOST'];     //print name of host
      echo $_SERVER['HTTP_USER_AGENT']; // print information of browser (name,version,...)
      echo $_SERVER['SCRIPT_NAME']; // show the name of script (like php_self)
      echo $_SERVER['REMOTE_ADDR']; //print ip address
      echo $_SERVER['REQUEST_METHOD']; // show the kind of request (post or get)
    
    echo $_REQUEST['req'].'<br>'; //req the name of input (show input in the page of browser)
    echo $_SERVER['REQUEST_METHOD'];
    
    //all global variable in php is capital 
    
    //POST more secure at variance of GET
    //GET used in search engine like google (have a limit of information 2000char )
      // echo $_GET['err']   
    
  // form validation should have request method (<form method='post'></form>)
  
  if($_SERVER['REQUEST_METHOD']=='POST')echo $_REQUEST['var'];
  else echo "not found";

  //$ include
    echo include('x.php'); // recall page with name x.php  (after and before include will execute)
    echo require('x.php'); // after require and require will not execute if we found error

 function check($var){
   $var=trim($var);
   $var=strip_tags($var);
   $var=stripslashes($var);
    return $var;
  }
  if(isset($_POST['sub'])){ //if($_SERVER['REQUEST_METHOD']=='POST')
    $fname=check($_POST['fname']);
    if(ctype_alpha($fname))echo 'valid<br>';
    else echo 'not valid<br>';
    $user=check($_POST['user']);
    if(ctype_alnum($user))echo 'valid<br>';
    else echo 'invalid<br>';
    $email=check(filter_var($_POST['email'],FILTER_SANITIZE_EMAIL));
    if(filter_var($email,FILTER_VALIDATE_EMAIL))echo 'valid mail';
    else echo 'invalid mail';
   }
    
   
  // #ctype functions
    echo ctype_alpha($fname); //check alphabetic only
    echo ctype_digit($phone); //check digit only
    echo ctype_alnum($username);  //check alphabetic and numbers
    echo ctype_lower($comment); //check all alphabetic is lower
    echo ctype_upper($comment); //check all alphabetic is upper
    echo ctype_graph($email); //accept all characters but didn't accept space

  // #filters validate  ==>>check if data has a problem or not (data is valid or not) -- filter_var(variable , filter type)
    echo filter_var($fname,FILTER_VALIDATE_BOOLEAN); //check fname is boolean or not
    echo filter_var($phone,FILTER_VALIDATE_INT); //check var is int or not (accept assign operation (+,-))
    echo filter_var($var,FILTER_VALIDATE_FLOAT); //check is value of var float or not
    echo filter_var($var,FILTER_VALIDATE_URL); //check for link (https://www.google.com) 
     // to solve this problem $var=https://+$var; echo filter_var($var,FILTER_VALIDATE_URL); 
    echo filter_var($email,FILTER_VALIDATE_EMAIL); //check value is type of email

  //sanitize ==>>Remove any illegal character from the data
    $email = filter_var($email, FILTER_SANITIZE_EMAIL); // Remove all illegal characters from email

  //to upload image ==>>should method (form) have enctype=multipart/form-data
    if(isset($_FILES['image'])){
      print_r($_FILES['image']); // name , type ,tmp_name , error, size
      $file_name=$_FILES['image']['name'];
      $file_size=$_FILES['image']['size'];
      $file_type=$_FILES['image']['type'];
      $file_tmp=$_FILES['image']['tmp_name']; //tmp location (file location)
      
      $available_extensions=array('jpg','png','jpeg');
      $ext=strtolower(end(explode('.',$file_name))); //end part of explode for variable 
      if(in_array($ext,$available_extensions)){
        echo '<br>done';
        move_uploaded_file($file_tmp,'images/'.$file_name); //move upload file to another path (take 2 value (current path,new path.filename))
      }
      else echo "<br>error";
    }
  

  // Finish your Form
    //first,last name ==>> required(not empty) - alphabetic - less than 15 characters
    //username ==>>required - num,alpha - less than 15 characters
    //password ==>>required - num,alpha - more than 6 less than 20 characters - hashing (encrypt)
    //phone ==>> required - num - 14 num
    //email ==>>required - email
    //link ==>>required - url
  
  if(isset($_POST['sub'])){
    $fname=check($_POST['fname']);
    $lname=check($_POST['lname']);
    $pass=check($_POST['pass']);
    $phone=check($_POST['phone']);
    $email=check($_POST['email']);
    $link=check($_POST['link']);
    $uname=check($_POST['user']);
    
    if(!$fname || !ctype_alpha($fname)|| strlen($fname)<15)
      $fname_err='Invalid first name';
    if(!$lname || !ctype_alpha($lname)|| strlen($lname)<15)
      $lname_err='Invalid last name';
    if(!$uname|| !ctype_alnum($uname)|| strlen($uname)<15)
      $uname_err='Invalid username';
    if(!$pass|| !ctype_graph($pass)|| strlen($pass)>20 || strlen($pass)<6)
      $pass_err='Invalid password';
    if(!$pass_err)$pass=md5($pass); // password hashing
    echo $pass;
    if(!$email || !filter_var($email,FILTER_VALIDATE_EMAIL))
      $email_err='invalid email';
    if(!$link || !filter_var($link,FILTER_VALIDATE_URL))
      $link_err='invalid link';
  }

  //header function ==>>transfer to another page by ( header('location:name of page') function)
    if($uname='0x7irix'&&$pass='1234'){
      header('location:x.php');
    }
    else header('location:irix.php?err=invalid data');

  //session ==>> used to across multiple pages
    session_start(); //use to start session
    $_SESSION['user']=$user;
    session_destroy(); //logout from session

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <!-- <form action="x.php?lp=hello" method="post"> // action take $_GET
      <input type="text" name="req">
      <input type="submit">
    </form> -->
    <form action="" method="post" enctype="multipart/form-data">
      <table>
        <tr>
          <td>First name</td>
          <td><input type="text" name="fname"><?php echo $fname_err;?></td>
        </tr>
        <tr>
          <td>Last name</td>
          <td><input type="text" name="lname"><?php echo $lname_err;?></td>
        </tr>
        <tr>
          <td>password</td>
          <td><input type="password" name="pass"><?php echo $pass_err;?></td>
        </tr>
        <tr>
          <td>phone</td>
          <td><input type="text" name="phone"></td>
        </tr>
        <tr>
          <td>username</td>
          <td><input type="text" name="user"><?php echo $uname_err;?></td>
        </tr>
        <tr>
          <td>email</td>
          <td><input type="text" name="email"><?php echo $email_err;?></td>
        </tr>
        <tr>
          <td>link</td>
          <td><input type="text" name="link"><?php echo $link_err;?></td>
        </tr>
        <tr>
          <td>image</td>
          <td><input type="file" name="image"></td>
        </tr>
        <tr>
          <td><input type="submit" name="sub"></td>
          <td><input type="reset" name='res'></td>
        </tr>
      </table>
    </form>
  </body>
</html>

<!-- resources -->
<!-- https://www.youtube.com/playlist?list=PLxofFKbtL6_1W1pzynkwS2bdVfwjm22WK -->
<!-- https://www.w3schools.com/php/default.asp -->
<!-- https://www.php.net/manual/en/ -->