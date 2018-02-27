<?php

    function initPlayers()
    {
        //Initializes points/deck/suits from dec
        $players_points = array(0, 0, 0, 0);
        $deck = range(0,51);  //creates array with values 1 to 52
        $suits = array("clubs","spades","hearts","diamonds");
        //creating player arrays to hold hand
        $player1 = array();
        $player2 = array();
        $player3 = array();
        $player4 = array();
        
        //Array holding players images
        $playerImages = array();
        
        //Array holding players scores
        $playerScores = array();
        
        //forloop to deal cards to each players 
        for($i = 1;  $i < 5; $i++)
        {
            //while to to deal cards, while total hand is < 38
            while(calcPoints("player".$i) < 38)
            {
                //gets 'card' from 'deck' and then deletes from deck
                $card = array_pop($deck);
                //assign that card to the player
                $player.$i[] = $card;
            }
        }//At the end of for loop each player should have been dealt a hand
        
    }
    function calcPoints($hand1, $hand2, $hand3, $hand4)
    {
        return array_sum($hand1) + array_sum($hand2) + array_sum($hand3) 
        + array_sum($hand4);   
    }
    function displayHand()
    {
        
    }
    function displayWinner()
    {
        
    }

?>
