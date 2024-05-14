<!DOCTYPE html>
<html lang="sl">
	<head>
		<title>	
         Dice game
		</title>
		<meta charset="utf-8" >
        <link rel="stylesheet" href="css/Style.css">
		<link rel="shortcut icon" href="images/Grayicon.ico" type="image/x-icon">
		<link rel="icon" href="images/icon.png" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	</head>
	<body onload="generate()">
		<form name="Obrazec" id="Obrazec" method="post" autocomplete="off" action="game.php" >
        
        <div id="Header">
                
                <div class="naslov">Dice game</div>
        </div>
        <div id="wrapper">
            <div class="playerk">
                <strong>FIRST<br /> PLAYER<br /><br /><i class="fa fa-male" id="userOne"></i></br></br>
                <input type="text" name="playerone" id="player1" maxlength="10" required>
            </div>
            <div class="players">
                <strong>SECOND<br /> PLAYER<br /><br /><i class="fa fa-male" id="userOne"></i></br></br>			
                <input type="text" name="playertwo" id="player2" maxlength="10" required>
            </div>
            <div class="playerk">
                <strong>THIRD<br /> PLAYER<br /><br /><i class="fa fa-male" id="userOne"></i></br></br>
                <input type="text" name="playerthree" id="player3" maxlength="10" required>
            </div>
			<div class="numr">
                <strong> ROUNDS:</strong></br>
                <select name="rNum" id="rNum">
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    <option value="4">Four</option>
                    <option value="5">Five</option>
                </select>
            </div>
			<div class="numb">
                <button type="submit" id="submit" ><div>START</div></button>
                <input id="gumb" name="buttoun" style="display:none;">
            </div>
            <div class="numd">
                <strong> DICE:</strong></br>
                <select name="dNum" id="dNum">
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>                     
        </div>
        </form>
	</body>
</html>