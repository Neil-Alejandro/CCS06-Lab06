<?php

// HTML Chess Symbols Unicode
// URL: https://en.wikipedia.org/wiki/Chess_symbols_in_Unicode
// Verify if these Unicodes are correct, make the adjustments if necessary

$pieces = [
    'black' => [
   	 'king' => '&#9818;',
   	 'queen' => '&#9819;',
   	 'rook' => '&#9820;',
   	 'bishop' => '&#9821;',
   	 'knight' => '&#9822;',
   	 'pawn' => '&#9823;'
    ],
    'white' => [
   	 'king' => '&#9812;',
   	 'queen' => '&#9813;',
   	 'rook' => '&#9814;',
   	 'bishop' => '&#9815;',
   	 'knight' => '&#9816;',
   	 'pawn' => '&#9817;'
    ]
];

// Chessboard HTML
// Sample Code: https://gist.github.com/itsromack/d8a62ae2311fcc6d6a13212e2cd72728
?>

<!DOCTYPE html>
<html>
<style>
.board {
    width: 600px;
    height: 600px;
    margin: 20px;
    border: 10px solid #333;
}

.black {
    float: left;
    width: 75px;
    height: 75px;
    background-color: #999;
      font-size:50px;
    text-align:center;
    display: table-cell;
    vertical-align:middle;
}
.white {
    float: left;
    width: 75px;
    height: 75px;
    background-color: #fff;
    font-size:50px;
    text-align:center;
    display: table-cell;
    vertical-align:middle;
	
</style>
<body>
<div class="board">
<div class="white"><?php echo $pieces['black']['rook']; ?></div>
<div class="black"><?php echo $pieces['black']['knight']; ?></div>
<div class="white"><?php echo $pieces['black']['bishop']; ?></div>
<div class="black"><?php echo $pieces['black']['queen']; ?></div>
<div class="white"><?php echo $pieces['black']['king']; ?></div>
<div class="black"><?php echo $pieces['black']['bishop']; ?></div>
<div class="white"><?php echo $pieces['black']['knight']; ?></div>
<div class="black"><?php echo $pieces['black']['rook']; ?></div>

<div class="black"><?php echo $pieces['black']['pawn']; ?></div>
<div class="white"><?php echo $pieces['black']['pawn']; ?></div>
<div class="black"><?php echo $pieces['black']['pawn']; ?></div>
<div class="white"><?php echo $pieces['black']['pawn']; ?></div>
<div class="black"><?php echo $pieces['black']['pawn']; ?></div>
<div class="white"><?php echo $pieces['black']['pawn']; ?></div>
<div class="black"><?php echo $pieces['black']['pawn']; ?></div>
<div class="white"><?php echo $pieces['black']['pawn']; ?></div>

<div class="white"></div>
<div class="black"></div>
<div class="white"></div>
<div class="black"></div>
<div class="white"></div>
<div class="black"></div>
<div class="white"></div>
<div class="black"></div>

<div class="black"></div>
<div class="white"></div>
<div class="black"></div>
<div class="white"></div>
<div class="black"></div>
<div class="white"></div>
<div class="black"></div>
<div class="white"></div>

<div class="white"></div>
<div class="black"></div>
<div class="white"></div>
<div class="black"></div>
<div class="white"></div>
<div class="black"></div>
<div class="white"></div>
<div class="black"></div>

<div class="black"></div>
<div class="white"></div>
<div class="black"></div>
<div class="white"></div>
<div class="black"></div>
<div class="white"></div>
<div class="black"></div>
<div class="white"></div>

<div class="white"><?php echo $pieces['white']['pawn']; ?></div>
<div class="black"><?php echo $pieces['white']['pawn']; ?></div>
<div class="white"><?php echo $pieces['white']['pawn']; ?></div>
<div class="black"><?php echo $pieces['white']['pawn']; ?></div>
<div class="white"><?php echo $pieces['white']['pawn']; ?></div>
<div class="black"><?php echo $pieces['white']['pawn']; ?></div>
<div class="white"><?php echo $pieces['white']['pawn']; ?></div>
<div class="black"><?php echo $pieces['white']['pawn']; ?></div>
<div class="black"><?php echo $pieces['white']['rook']; ?></div>
<div class="white"><?php echo $pieces['white']['knight']; ?></div>
<div class="black"><?php echo $pieces['white']['bishop']; ?></div>
<div class="white"><?php echo $pieces['white']['queen']; ?></div>
<div class="black"><?php echo $pieces['white']['king']; ?></div>
<div class="white"><?php echo $pieces['white']['bishop']; ?></div>
<div class="black"><?php echo $pieces['white']['knight']; ?></div>
<div class="white"><?php echo $pieces['white']['rook']; ?></div>
</div>
</body>
</html>