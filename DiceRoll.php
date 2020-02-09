<!-- Student Name:
     Date:
// REPLACE line #3-9 WITH INITIAL AT END OF COMMENT
</head>
<body>
<?php
$FaceNamesSingular = array("one", "two", "three", "four", "five", "six");
// REPLACE line #14-20 WITH INITIAL AT END OF COMMENT

     if ($Die1 == $Die2) {// Doubles
          echo "The roll was double ", $FaceNamesPlural[$Die1-1], ".<br />";
          $ReturnValue = true;
     }
     else { // Not Doubles
// REPLACE line #27-33 WITH INITIAL AT END OF COMMENT

function DisplayScoreText($Score, $Doubles) {
     switch ($Score) {
          case 2:
               echo "You rolled snake eyes!<br />";
               break;
// REPLACE line #41-46 WITH INITIAL AT END OF COMMENT
               echo "You rolled a natural!<br />";
               break;
          case 9:
               echo "You rolled a nina!<br />";
               break;
          case 11:
// REPLACE Line #53-59 WITH INITIAL AT END OF COMMENT
                                      number */
                    if ($Doubles) {
                         echo "You rolled a hard
                              $Score!<br />";
// REPLACE Line #64-70 WITH INITIAL AT END OF COMMENT
     }
}

$DoublesCount = 0;
$RollCount = 0;
$ScoreCount = array();
for ($PossibleRolls = 2; $PossibleRolls <= 12; ++$PossibleRolls) {
     $ScoreCount[$PossibleRolls] = 0;
}

foreach ($FaceValues as $Die1) {
     foreach ($FaceValues as $Die2) {
          ++$RollCount;
          $Score = $Die1 + $Die2;
          ++$ScoreCount[$Score];
          echo "<p>";
          echo "The total score for roll $RollCount was $Score.<br />";
          $Doubles = CheckForDoubles($Die1,$Die2);
          DisplayScoreText($Score, $Doubles);
          echo "</p>";
          if ($Doubles)
               ++$DoublesCount;
     } // End of the foreach loop for $Die2
} // End of the foreach loop for $Die1
echo "<p>Doubles occurred on $DoublesCount of the $RollCount rolls.</p>";

foreach ($ScoreCount as $ScoreValue => $ScoreCount) {
     echo "<p>A combined value of $ScoreValue occurred $ScoreCount of $RollCount times.</p>";
}
?>
</body>
</html>

