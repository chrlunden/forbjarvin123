<?php    /* Eksempel 1 */
/*
/*    Programmet mottar fra et HTML-skjema et fornavn og et etternavn ved POST-metoden
/*    Programmet skriver ut en "god dag"-melding med personens navn 
*/
  
  $etternavn=$_POST ["etternavn"];  /* variable gitt verdier fra feltene i HTML-skjemaet */
	
  pint ("God Dag $fornavn $etternavn <br />");  /* resultat skrevet ut  */	
?>