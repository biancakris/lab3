<?php

    function initCards()
    {
        
    }
    function initPlayers()
    {
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
    function calcPoints()
    {
        
    }
    function displayHand()
    {
        
    }
    function displayWinner()
    {
        
    }

?>