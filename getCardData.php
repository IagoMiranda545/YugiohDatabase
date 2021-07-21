<?php

function BuscarCarta($busca, $qtd)

{

     $busca = str_replace(' ', '%20', $busca);
     $api_url = "https://db.ygoprodeck.com/api/v7/cardinfo.php?fname=$busca" ;

   
    $json_data = file_get_contents($api_url);
    $response_data = json_decode($json_data);
    $cards = $response_data->data;
    $cards = array_chunk($cards, $qtd);

    return $cards;
     
}