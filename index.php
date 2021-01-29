<?php
//array_combine
$teamsNBA = ["Atlanta Hawks", "Boston Celtics", "Charlotte Bobcats", "Chicago Bulls", "Cleveland Cavaliers", "Dallas Mavericks", "Denver Nuggets", "Detroit Pistons", "G.S. Warriors", "Houston Rockets", "Indiana Pacers","L.A. Clippers", "L.A. Lakers", "Memphis Grizzlies","Miami Heat", "Milwaukee Bucks", "Minnesota T'wolves", "N.J. Nets", "N.O. Hornets", "N.Y. Knicks", "Oklahoma Thunder", "Orlando Magic","Philadelphia 76ers", "Phoenix Suns", "Portland T. Blazers", "Sacramento Kings", "San Antonio Spurs", "Toronto Raptors", "Utah Jazz", "Wash. Wizards"];
//var_dump($teamsNBA);


// indice (quindi la key) casuale dell'array teamsNBA
 //output: UNA key dell'array teamsNBA (quindi un numero indice)
// valore per la key casuale dell'array teamsNBA
//var_dump($teamsNBA[$randomTeamKey]); //output: UNO tra i team
$randomInt = rand(40,100);

$homeTeams = [];
$guestTeams = [];



//CICLO FOR per pushare la metà delle squadre totali dentro l'array $homeTeams
for ($i=0; $i < 15; $i++) {
  $randomTeamKey = array_rand($teamsNBA);
  $randomTeam = $teamsNBA[$randomTeamKey];
  
  if (in_array($randomTeam,$homeTeams)) {
    array_pop($homeTeams);
  } else{
    array_push($homeTeams, $randomTeam);
  }
};
var_dump($homeTeams);
// $matches = [
//   "Match 1" => [
//     "Home" => $teamsNBA[$randomTeamKey],
//     "Guest" => $teamsNBA[$randomTeamKey],
//   ], []

// ];

//var_dump($matches["Match 1"]);
?>
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Snack</title>
  <!-- css -->
  <link rel="stylesheet" href="./dist/css/app.css">
</head>

<body>
<!-- ISTRUZIONI:
  PHP Snack 1:
  Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
  Stampiamo a schermo tutte le partite con questo schema:
  Olimpia Milano - Cantù | 55 - 60 -->


  <!-- js -->
  <script src="./dist/js/app.js"></script>
</body>

</html>