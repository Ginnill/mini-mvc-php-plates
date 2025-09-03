<?php 

namespace app\controllers;

use GuzzleHttp\Client;

class HomeController{

    public function index($params = null) {
        $client = new Client([
            'base_uri' => 'https://api.github.com/',
            'timeout'  => 5,
            'headers'  => [
                // GitHub exige um User-Agent
                'User-Agent' => '4works-test',
                'Accept'     => 'application/vnd.github+json',
                // Se tiver token para evitar rate limit:
                // 'Authorization' => 'Bearer ' . $_ENV['GITHUB_TOKEN'],
            ],
        ]);

        try {
            // Ex.: listar repositórios públicos de um usuário
            $res = $client->get('users/Ginnill/repos', [
                'query' => [
                    'sort' => 'updated',
                    'per_page' => 10,
                ],
            ]);

            $repos = json_decode($res->getBody()->getContents(), true); // array associativo
        } catch (\Throwable $e) {
            // Em produção, logue o erro e degrade com valor padrão
            $repos = [];
        }

        return Controller::view('home', [
            'title' => 'Home',
            'repos' => $repos,
        ]);
    }

    public function form($params){
        var_dump($params);
    }

}