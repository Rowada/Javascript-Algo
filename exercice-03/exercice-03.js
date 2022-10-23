"use strict";

let taille = 8;

let chessboard = "";

for (let y = 0; y < taille; y++) {
  for (let x = 0; x < taille; x++) {
    if ((x + y) % 2 == 0) {
      chessboard += " ";
    } else {
      chessboard += "#";
    }
  }
  chessboard += "\n";
}

console.log(chessboard);
