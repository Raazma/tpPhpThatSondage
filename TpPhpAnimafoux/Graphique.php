<?php
/**
 * Created by PhpStorm.
 * User: 201037629
 * Date: 2015-10-29
 * Time: 14:55
 */
if(!isset($_COOKIE["PHPSESSID"]))
{
    session_start();
    $_SESSION["NbVotes"] = 0;
}

include_once("Controller.php");

?>

<!DOCTYPE html>
<html>
<title>Page Title</title>
<body>

<div>
    <table>
        <tr>
            <td>Chien:</td>
            <?php
            if($lesvotes!=null)
            echo(" <td><span>" .(round(($lesvotes[0]  / $lesvotes[5]) * 100))."%</span></td>")
            ?>
            <td><span>RED</span></td>
        </tr>
        <tr>
             <td>Chat:</td>
            <?php
            if($lesvotes!=null)
                echo(" <td><span>" .(round(($lesvotes[1]  / $lesvotes[5]) * 100))."%</span></td>")
            ?>
             <td><span>RED</span></td>
        </tr>
        <tr>
             <td>Weseau:</td>
            <?php
            if($lesvotes!=null)
                echo(" <td><span>" .(round(($lesvotes[2]  / $lesvotes[5]) * 100))."%</span></td>")
            ?>
             <td><span>RED</span></td>
        </tr>
        <tr>
              <td>Serprent:</td>
            <?php
            if($lesvotes!=null)
                echo(" <td><span>" .(round(($lesvotes[3]  / $lesvotes[5]) * 100))."%</span></td>")
            ?>
              <td><span>RED</span></td>
        </tr>
        <tr>
             <td>Singe</td>
            <?php
            if($lesvotes!=null)
                echo(" <td><span>" .(round(($lesvotes[4]  / $lesvotes[5]) * 100))."%</span></td>")
            ?>
             <td><span>RED</span></td>
        </tr>

    </table>
</div>

<div>
    <a href="Formulaire.php">Aller Voter</a>
</div>

</body>
</html>