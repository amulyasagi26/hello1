          <?php
// phppppppppppppppppppppppppppppppppppppppppppppp
       echo"h";
        if(isset($_REQUEST['roll']) )
        {


        $u=$_REQUEST['roll'];
    
$conn=mysqli_connect('localhost','root','');
$connection=mysqli_select_db($conn,"demo");

if($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);

}
else
{
    echo"sucessful";
    $query="select * from logins where roll='".$u."';";
    echo $query;
    $q=mysqli_query($conn,$query);
    $n=mysqli_num_rows($q);
echo $n;
if($n!=1)
{
    
        echo("incorrect roll no.");
      
        }

    
    
 } 
       }

// phppppppppppppppppppppppppppppppppppppppppppppp
?>