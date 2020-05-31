<html>
<head>
</head>

<body>
<center>
    <?php
    session_start();
    if(!isset($_POST['submit'])) {
        $_SESSION['gewonnen'] = 0;

    }else{

        $acties = array("paper", "rock", "scissors");
        $mogelijkheden = array("paper" => 1, "rock" => 2, "scissors" => 4);

        $player = $mogelijkheden[$_POST['rps']];

        $c = $acties[rand(0,2)];
        $comp = $mogelijkheden[$c];

        $gewonnen = ((($player > $comp && $comp / $player != 0.5) || $player / $comp == 0.5) && $comp != $player);


        if($gewonnen){
            ?>
            <table>
                <form name="rps" action="?action" method="post">
                    <tr>
                        <td><input type="radio" name="rps" value="paper" /></td>
                        <td align="left">Paper</td>
                    </tr>
                    <tr>
                        <td width="50%"><input type="radio" name="rps" value="rock" /></td>
                        <td align="left">Rock</td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="rps" value="scissors" /></td>
                        <td align="left"><label for="scissors">Scissors</label></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name="submit" value="Strijd" /></td>
                    </tr>
                </form>
            </table>
            <font color="green">
                Je hebt gewonnen!<br />
                Gefeliciteerd
            </font>
            <?php
            $_SESSION['gewonnen'] = $_SESSION['gewonnen'] +1;
            echo $_SESSION['gewonnen'];
        }
        elseif($player == $comp){
            ?>
            <table>
                <form name="rps" action="?action" method="post">
                    <tr>
                        <td><input type="radio" name="rps" value="paper" /></td>
                        <td align="left">Paper</td>
                    </tr>
                    <tr>
                        <td width="50%"><input type="radio" name="rps" value="rock" /></td>
                        <td align="left">Rock</td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="rps" value="scissors" /></td>
                        <td align="left"><label for="scissors">Scissors</label></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name="submit" value="Strijd" /></td>
                    </tr>
                </form>
            </table>
            Jullie hadden dezelfde actie,<br />
            Gelijkspel
            <?php
        }
        else{
            ?>
            <table>
                <form name="rps" action="?action" method="post">
                    <tr>
                        <td><input type="radio" name="rps" value="paper" /></td>
                        <td align="left">Paper</td>
                    </tr>
                    <tr>
                        <td width="50%"><input type="radio" name="rps" value="rock" /></td>
                        <td align="left">Rock</td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="rps" value="scissors" /></td>
                        <td align="left"><label for="scissors">Scissors</label></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name="submit" value="Strijd" /></td>
                    </tr>
                </form>
            </table>
            <font color="red">Je hebt verloren!</font>
            <?php
        }
        ?>

        <br /><br />
        <table>
            <tr>
                <td width="50%">Jouw actie:</td>
                <td><?=ucfirst($_POST['rps']); ?></td>
            </tr>
            <tr>
                <td>Pc actie:</td>
                <td><?=ucfirst($c); ?></td>
            </tr>
        </table>
        <br /><br />
        <a href="<?=$_SERVER['HTTP_REFERER']; ?>">Begin opnieuw</a>
        <?php
        exit();
    }
    ?>
    Welkom bij Rock, paper, scissors<br />
    <br />
    <table>
        <form name="rps" action="?action" method="post">
            <tr>
                <td><input type="radio" name="rps" value="paper" /></td>
                <td align="left">Paper</td>
            </tr>
            <tr>
                <td width="50%"><input type="radio" name="rps" value="rock" /></td>
                <td align="left">Rock</td>
            </tr>
            <tr>
                <td><input type="radio" name="rps" value="scissors" /></td>
                <td align="left"><label for="scissors">Scissors</label></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="submit" value="Strijd" /></td>
            </tr>
        </form>
    </table>
</center>
</body>
</html>