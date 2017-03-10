<?php
//TODO: Check that this old script still works
class REnc_V2
{
	/*
		This script was written by Reece Mackie (Rover656) for my own websites.
		Please add appropriate credit when using, and please ask Rover656 before merging any PR's
		Because you could break something on someones server if they update.
	*/
    function REnc_Decrypt($originalstring, $password) {
	 $string = $originalstring;
	 $chars = str_split($string , 4);
	 foreach($chars as $char) {
	  switch($char) {
	   case substr(md5($password . md5("RE")), 0, 4):
		$replace = ""; #Removes the 'RE' prefix
		break;
	   case substr(md5($password . md5("Us")), 0, 4):
		$replace = "A";
		break;
	   case substr(md5($password . md5("h2")), 0, 4):
		$replace = "a";
		break;
	   case substr(md5($password . md5("ih")), 0, 4):
		$replace = "B";
		break;
	   case substr(md5($password . md5("35")), 0, 4):
		$replace = "b";
		break;
	   case substr(md5($password . md5("1h")), 0, 4):
		$replace = "C";
		break;
	   case substr(md5($password . md5("kk")), 0, 4):
		$replace = "c";
		break;
	   case substr(md5($password . md5("bk")), 0, 4):
		$replace = "D";
		break;
	   case substr(md5($password . md5("Aq")), 0, 4):
		$replace = "d";
		break;
	   case substr(md5($password . md5("03")), 0, 4):
		$replace = "E";
		break;
	   case substr(md5($password . md5("yW")), 0, 4):
		$replace = "e";
		break;
	   case substr(md5($password . md5("Hg")), 0, 4):
		$replace = "F";
		break;
	   case substr(md5($password . md5("T5")), 0, 4):
		$replace = "f";
		break;
	   case substr(md5($password . md5("NH")), 0, 4):
		$replace = "G";
		break;
	   case substr(md5($password . md5("u3")), 0, 4):
		$replace = "g";
		break;
	   case substr(md5($password . md5("Sf")), 0, 4):
		$replace = "H";
		break;
	   case substr(md5($password . md5("W2")), 0, 4):
		$replace = "h";
		break;
	   case substr(md5($password . md5("g1")), 0, 4):
		$replace = "I";
		break;
	   case substr(md5($password . md5("Wz")), 0, 4):
		$replace = "i";
		break;
	   case substr(md5($password . md5("RH")), 0, 4):
		$replace = "J";
		break;
	   case substr(md5($password . md5("mO")), 0, 4):
		$replace = "j";
		break;
	   case substr(md5($password . md5("yM")), 0, 4):
		$replace = "K";
		break;
	   case substr(md5($password . md5("g5")), 0, 4):
		$replace = k;
		break;
	   case substr(md5($password . md5("NK")), 0, 4):
		$replace = L;
		break;
	   case substr(md5($password . md5("lo")), 0, 4):
		$replace = "l";
		break;
	   case substr(md5($password . md5("Wp")), 0, 4):
		$replace = "M";
		break;
	   case substr(md5($password . md5("3G")), 0, 4):
		$replace = "m";
		break;
	   case substr(md5($password . md5("kq")), 0, 4):
		$replace = "N";
		break;
	   case substr(md5($password . md5("LC")), 0, 4):
		$replace = "n";
		break;
	   case substr(md5($password . md5("y2")), 0, 4):
		$replace = "O";
		break;
	   case substr(md5($password . md5("hz")), 0, 4):
		$replace = "o";
		break;
	   case substr(md5($password . md5("jj")), 0, 4):
		$replace = "P";
		break;
	   case substr(md5($password . md5("jP")), 0, 4):
		$replace = "p";
		break;
	   case substr(md5($password . md5("a3")), 0, 4):
		$replace = "Q";
		break;
	   case substr(md5($password . md5("MO")), 0, 4):
		$replace = "q";
		break;
	   case substr(md5($password . md5("Og")), 0, 4):
		$replace = "R";
		break;
	   case substr(md5($password . md5("pZ")), 0, 4):
		$replace = "r";
		break;
	   case substr(md5($password . md5("rx")), 0, 4):
		$replace = "S";
		break;
	   case substr(md5($password . md5("O7")), 0, 4):
		$replace = "s";
		break;
	   case substr(md5($password . md5("CC")), 0, 4):
		$replace = "T";
		break;
	   case substr(md5($password . md5("Rl")), 0, 4):
		$replace = "t";
		break;
	   case substr(md5($password . md5("A4")), 0, 4):
		$replace = "U";
		break;
	   case substr(md5($password . md5("Vs")), 0, 4):
		$replace = "u";
		break;
	   case substr(md5($password . md5("vw")), 0, 4):
		$replace = "V";
		break;
	   case substr(md5($password . md5("uK")), 0, 4):
		$replace = "v";
		break;
	   case substr(md5($password . md5("gt")), 0, 4):
		$replace = "W";
		break;
	   case substr(md5($password . md5("ES")), 0, 4):
		$replace = "w";
		break;
	   case substr(md5($password . md5("VS")), 0, 4):
		$replace = "X";
		break;
	   case substr(md5($password . md5("oN")), 0, 4):
		$replace = "x";
		break;
	   case substr(md5($password . md5("kn")), 0, 4):
		$replace = "Y";
		break;
	   case substr(md5($password . md5("eF")), 0, 4):
		$replace = "y";
		break;
	   case substr(md5($password . md5("v1")), 0, 4):
		$replace = "Z";
		break;
	   case substr(md5($password . md5("r8")), 0, 4):
		$replace = "z";
		break;
	   case substr(md5($password . md5("hT")), 0, 4):
		$replace = "0";
		break;
	   case substr(md5($password . md5("s6")), 0, 4):
		$replace = 1;
		break;
	   case substr(md5($password . md5("9D")), 0, 4):
		$replace = "2";
		break;
	   case substr(md5($password . md5("SL")), 0, 4):
		$replace = "3";
		break;
	   case substr(md5($password . md5("zt")), 0, 4):
		$replace = "4";
		break;
	   case substr(md5($password . md5("tk")), 0, 4):
		$replace = "5";
		break;
	   case substr(md5($password . md5("J3")), 0, 4):
		$replace = "6";
		break;
	   case substr(md5($password . md5("xW")), 0, 4):
		$replace = "7";
		break;
	   case substr(md5($password . md5("nt")), 0, 4):
		$replace = "8";
		break;
	   case substr(md5($password . md5("jl")), 0, 4):
		$replace = "9";
		break;
	   case substr(md5($password . md5("\S")), 0, 4):
		$replace = "space";
		break;
	   case substr(md5($password . md5("\L")), 0, 4):
		$replace = "<";
		break;
	   case substr(md5($password . md5("\R")), 0, 4):
		$replace = ">";
		break;
	   case substr(md5($password . md5("\E")), 0, 4):
		$replace = "!";
		break;
	   case substr(md5($password . md5("\C")), 0, 4):
		$replace = ",";
		break;
	   default:
		$temp = str_split($char, 1);
		$replace = $temp[0];
	  }
	  $replaced[ ] = $replace;
	 }
	 return str_replace('space', ' ', implode($replaced));
	}
	function REnc_Encrypt($string, $password) {
	 $chars = str_split($string, 1);
	 $replaced[ ] = substr(md5($password . md5("RE")), 0, 4);
	 foreach($chars as $ch) {
	  $char = str_replace(' ', 'space', $ch);
	  switch($char) {
	   case "A":
		$replace = substr(md5($password . md5("Us")), 0, 4);
		break;
	   case "a":
		$replace = substr(md5($password . md5("h2")), 0, 4);
		break;
	   case "B":
		$replace = substr(md5($password . md5("ih")), 0, 4);
		break;
	   case "b":
		$replace = substr(md5($password . md5("35")), 0, 4);
		break;
	   case "C":
		$replace = substr(md5($password . md5("1h")), 0, 4);
		break;
	   case "c":
		$replace = substr(md5($password . md5("kk")), 0, 4);
		break;
	   case "D":
		$replace = substr(md5($password . md5("bk")), 0, 4);
		break;
	   case "d":
		$replace = substr(md5($password . md5("Aq")), 0, 4);
		break;
	   case "E":
		$replace = substr(md5($password . md5("03")), 0, 4);
		break;
	   case "e":
		$replace = substr(md5($password . md5("yW")), 0, 4);
		break;
	   case "F":
		$replace = substr(md5($password . md5("Hg")), 0, 4);
		break;
	   case "f":
		$replace = substr(md5($password . md5("T5")), 0, 4);
		break;
	   case "G":
		$replace = substr(md5($password . md5("NH")), 0, 4);
		break;
	   case "g":
		$replace = substr(md5($password . md5("u3")), 0, 4);
		break;
	   case "H":
		$replace = substr(md5($password . md5("Sf")), 0, 4);
		break;
	   case "h":
		$replace = substr(md5($password . md5("W2")), 0, 4);
		break;
	   case "I":
		$replace = substr(md5($password . md5("g1")), 0, 4);
		break;
	   case "i":
		$replace = substr(md5($password . md5("Wz")), 0, 4);
		break;
	   case "J":
		$replace = substr(md5($password . md5("RH")), 0, 4);
		break;
	   case "j":
		$replace = substr(md5($password . md5("mO")), 0, 4);
		break;
	   case "K":
		$replace = substr(md5($password . md5("yM")), 0, 4);
		break;
	   case "k":
		$replace = substr(md5($password . md5("g5")), 0, 4);
		break;
	   case "L":
		$replace = substr(md5($password . md5("NK")), 0, 4);
		break;
	   case "l":
		$replace = substr(md5($password . md5("lo")), 0, 4);
		break;
	   case "M":
		$replace = substr(md5($password . md5("Wp")), 0, 4);
		break;
	   case "m":
		$replace = substr(md5($password . md5("3G")), 0, 4);
		break;
	   case "N":
		$replace = substr(md5($password . md5("kq")), 0, 4);
		break;
	   case "n":
		$replace = substr(md5($password . md5("LC")), 0, 4);
		break;
	   case "O":
		$replace = substr(md5($password . md5("y2")), 0, 4);
		break;
	   case "o":
		$replace = substr(md5($password . md5("hz")), 0, 4);
		break;
	   case "P":
		$replace = substr(md5($password . md5("jj")), 0, 4);
		break;
	   case "p":
		$replace = substr(md5($password . md5("jP")), 0, 4);
		break;
	   case "Q":
		$replace = substr(md5($password . md5("a3")), 0, 4);
		break;
	   case "q";
		$replace = substr(md5($password . md5("MO")), 0, 4);
		break;
	   case "R":
		$replace = substr(md5($password . md5("Og")), 0, 4);
		break;
	   case "r":
		$replace = substr(md5($password . md5("pZ")), 0, 4);
		break;
	   case "S":
		$replace = substr(md5($password . md5("rx")), 0, 4);
		break;
	   case "s":
		$replace = substr(md5($password . md5("O7")), 0, 4);
		break;
	   case "T":
		$replace = substr(md5($password . md5("CC")), 0, 4);
		break;
	   case "t":
		$replace = substr(md5($password . md5("Rl")), 0, 4);
		break;
	   case "U":
		$replace = substr(md5($password . md5("A4")), 0, 4);
		break;
	   case "u":
		$replace = substr(md5($password . md5("Vs")), 0, 4);
		break;
	   case "V":
		$replace = substr(md5($password . md5("vw")), 0, 4);
		break;
	   case "v":
		$replace = substr(md5($password . md5("uK")), 0, 4);
		break;
	   case "W":
		$replace = substr(md5($password . md5("gt")), 0, 4);
		break;
	   case "w":
		$replace = substr(md5($password . md5("ES")), 0, 4);
		break;
	   case "X":
		$replace = substr(md5($password . md5("VS")), 0, 4);
		break;
	   case "x":
		$replace = substr(md5($password . md5("oN")), 0, 4);
		break;
	   case "Y":
		$replace = substr(md5($password . md5("kn")), 0, 4);
		break;
	   case "y":
		$replace = substr(md5($password . md5("eF")), 0, 4);
		break;
	   case "Z":
		$replace = substr(md5($password . md5("v1")), 0, 4);
		break;
	   case "z":
		$replace = substr(md5($password . md5("r8")), 0, 4);
		break;
	   case "0":
		$replace = substr(md5($password . md5("hT")), 0, 4);
		break;
	   case "1":
		$replace = substr(md5($password . md5("s6")), 0, 4);
		break;
	   case "2":
		$replace = substr(md5($password . md5("9D")), 0, 4);
		break;
	   case "3":
		$replace = substr(md5($password . md5("SL")), 0, 4);
		break;
	   case "4":
		$replace = substr(md5($password . md5("zt")), 0, 4);
		break;
	   case "5":
		$replace = substr(md5($password . md5("tk")), 0, 4);
		break;
	   case "6":
		$replace = substr(md5($password . md5("J3")), 0, 4);
		break;
	   case "7":
		$replace = substr(md5($password . md5("xW")), 0, 4);
		break;
	   case "8":
		$replace = substr(md5($password . md5("nt")), 0, 4);
		break;
	   case "9":
		$replace = substr(md5($password . md5("jl")), 0, 4);
		break;
	   case "space":
		$replace = substr(md5($password . md5("\S")), 0, 4);
		break;
	   case "<":
		$replace = substr(md5($password . md5("\L")), 0, 4);
		break;
	   case ">":
		$replace = substr(md5($password . md5("\R")), 0, 4);
		break;
	   case "!":
		$replace = substr(md5($password . md5("\E")), 0, 4);
		break;
	   case ",":
		$replace = substr(md5($password . md5("\C")), 0, 4);
		break;
	   default:
		$i = 0;
		while ($i < 4) {
		 $replace .= $char;
		 $i++;
		}
	  }
	  $replaced[ ] = $replace;
	 }
	 return rtrim(implode($replaced),',');
	}
}
?>