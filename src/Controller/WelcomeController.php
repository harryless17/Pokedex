<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class WelcomeController extends AbstractController
{

    public function index($pokemonU = '1')
    {
        $url_pokemon = 'https://pokeapi.co/api/v2/pokemon?limit=964';
        // Get pokemons list
        $pokemonList = $this->getPokeResources($url_pokemon)['results'];
        $pokemonsName = Array();

        // Pokemons list
        foreach ($pokemonList as $pokemon) {
            array_push($pokemonsName,$pokemon['name']);
        }
        // Url api of a pecific pokemon
        $pokemonInfoUrl = 'https://pokeapi.co/api/v2/pokemon/'.$pokemonU;
        // Get data infos of a pokemon
        $pokemonInfo = $this->getPokeResources($pokemonInfoUrl);

        // If the pokemon does not have a photo
        if (!$pokemonInfo['sprites']['front_default']) {
            $pokemonInfo['sprites']['front_default']='/images/coming-soon.png';
        }

        // Pokemon info object
        $pokemonInfos = Array('id'=>$pokemonInfo['id'],
                            'name'=>$pokemonInfo['name'],
                            'img'=>$pokemonInfo['sprites']['front_default'],
                            'types'=>$pokemonInfo['types']);

        return $this->render('welcome/index.html.twig',['pokemonsName'=>$pokemonsName,'pokemonInfo'=>$pokemonInfos]);
    }

    public function getPokeResources($url)
    {
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $data = curl_exec($curl);
        curl_close($curl);
        if ($curl == false) {
            return Array();
        }else{
            $data = json_decode($data,true); 
            return $data;
        }
        
    }

}