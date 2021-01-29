<?php
//array_combine
$teamsNBA = ["Atlanta Hawks", "Boston Celtics", "Charlotte Bobcats", "Chicago Bulls", "Cleveland Cavaliers", "Dallas Mavericks", "Denver Nuggets", "Detroit Pistons", "G.S. Warriors", "Houston Rockets", "Indiana Pacers", "L.A. Clippers", "L.A. Lakers", "Memphis Grizzlies", "Miami Heat", "Milwaukee Bucks", "Minnesota T'wolves", "N.J. Nets", "N.O. Hornets", "N.Y. Knicks", "Oklahoma Thunder", "Orlando Magic", "Philadelphia 76ers", "Phoenix Suns", "Portland T. Blazers", "Sacramento Kings", "San Antonio Spurs", "Toronto Raptors", "Utah Jazz", "Wash. Wizards"];
//var_dump($teamsNBA);
$randomScore = [];
$randomInt = rand(40, 100);
for ($i = 0; $i < 30; $i++) {
  $randomInt = rand(40, 100);
  array_push($randomScore, $randomInt);
}
//var_dump($randomScore);

$homeTeams = [];
$guestTeams = [];

//CICLO FOR per pushare la metà delle squadre totali dentro l'array $homeTeams
while (count($homeTeams) < 15) {
  // indice (quindi la key) casuale dell'array teamsNBA
  //output: UNA key dell'array teamsNBA (quindi un numero indice)
  $randomTeamKey = array_rand($teamsNBA);
  // valore per la key casuale dell'array teamsNBA
  //var_dump($teamsNBA[$randomTeamKey]); 
  //output: UNO tra i team
  $randomTeam = $teamsNBA[$randomTeamKey];

  if (in_array($randomTeam, $homeTeams)) {
    array_pop($homeTeams);
  } else {
    array_push($homeTeams, $randomTeam);
  }
};

var_dump($homeTeams);
//differenza tra array(teamsNBA) e array(homeTeams), mi da come risultato le altre 15 squadre non uscite dalla pesca randomica
$guestTeams = array_diff($teamsNBA, $homeTeams);
//metto in ordine le key degli elementi dell'array (guestTeams), perchè dall'operazione precedente mi sono ritrovato con delle key non in ordine e non partivano da zero
ksort($guestTeams);
//creo un nuovo aray per mettere in ordile le key degli elemnti allínterno dell'array da 0 a 14, questo mi sarà utile quando dovrò richiamare gli elementi di questo array
$orderedGuestTeams = [];
foreach ($guestTeams as $value) {
  array_push($orderedGuestTeams, $value);
}
var_dump($orderedGuestTeams);
$matches = [
  "Match 1" => [
    "Home" => $homeTeams[0],
    "Guest" => $orderedGuestTeams[0],
    "Home Point" => $randomScore[0],
    "Guest Point" => $randomScore[1],
  ],
  "Match 2" => [
    "Home" => $homeTeams[1],
    "Guest" => $orderedGuestTeams[1],
    "Home Point" => $randomScore[2],
    "Guest Point" => $randomScore[3],
  ],
  "Match 3" => [
    "Home" => $homeTeams[2],
    "Guest" => $orderedGuestTeams[2],
    "Home Point" => $randomScore[4],
    "Guest Point" => $randomScore[5],
  ],
  "Match 4" => [
    "Home" => $homeTeams[3],
    "Guest" => $orderedGuestTeams[3],
    "Home Point" => $randomScore[6],
    "Guest Point" => $randomScore[7],
  ],
  "Match 5" => [
    "Home" => $homeTeams[4],
    "Guest" => $orderedGuestTeams[4],
    "Home Point" => $randomScore[8],
    "Guest Point" => $randomScore[9],
  ],
  "Match 6" => [
    "Home" => $homeTeams[5],
    "Guest" => $orderedGuestTeams[5],
    "Home Point" => $randomScore[10],
    "Guest Point" => $randomScore[11],
  ],
  "Match 7" => [
    "Home" => $homeTeams[6],
    "Guest" => $orderedGuestTeams[6],
    "Home Point" => $randomScore[12],
    "Guest Point" => $randomScore[13],
  ],
  "Match 8" => [
    "Home" => $homeTeams[7],
    "Guest" => $orderedGuestTeams[7],
    "Home Point" => $randomScore[14],
    "Guest Point" => $randomScore[15],
  ],
  "Match 9" => [
    "Home" => $homeTeams[8],
    "Guest" => $orderedGuestTeams[8],
    "Home Point" => $randomScore[16],
    "Guest Point" => $randomScore[17],
  ],
  "Match 10" => [
    "Home" => $homeTeams[9],
    "Guest" => $orderedGuestTeams[9],
    "Home Point" => $randomScore[18],
    "Guest Point" => $randomScore[19],
  ],
  "Match 11" => [
    "Home" => $homeTeams[10],
    "Guest" => $orderedGuestTeams[10],
    "Home Point" => $randomScore[20],
    "Guest Point" => $randomScore[21],
  ],
  "Match 12" => [
    "Home" => $homeTeams[11],
    "Guest" => $orderedGuestTeams[11],
    "Home Point" => $randomScore[22],
    "Guest Point" => $randomScore[23],
  ],
  "Match 13" => [
    "Home" => $homeTeams[12],
    "Guest" => $orderedGuestTeams[12],
    "Home Point" => $randomScore[24],
    "Guest Point" => $randomScore[25],
  ],
  "Match 14" => [
    "Home" => $homeTeams[13],
    "Guest" => $orderedGuestTeams[13],
    "Home Point" => $randomScore[26],
    "Guest Point" => $randomScore[27],
  ],
  "Match 15" => [
    "Home" => $homeTeams[14],
    "Guest" => $orderedGuestTeams[14],
    "Home Point" => $randomScore[28],
    "Guest Point" => $randomScore[29],
  ],
];

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