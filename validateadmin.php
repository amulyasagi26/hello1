          <?php
// phppppppppppppppppppppppppppppppppppppppppppppp
       echo"h";
        if(isset($_REQUEST['form-username']) && isset($_REQUEST['form-password']))
        {


        $u=$_REQUEST['form-username'];
    $p=$_REQUEST['form-password'];
$conn=mysqli_connect('localhost','root','');
$connection=mysqli_select_db($conn,"demo");

if($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);

}
else
{
    echo"sucessful";
    $query="select * from logins where roll='".$u."' and pswd='".$p."';";
    echo $query;
    $q=mysqli_query($conn,$query);
    $n=mysqli_num_rows($q);
echo $n;
if($n==1)
{
    
        echo("correct");

        header('Location: enter.php');
        }
    
    else
    {
        echo"incorrect";
    }

 } 
       }

// phppppppppppppppppppppppppppppppppppppppppppppp
?>