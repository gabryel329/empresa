<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Symfony\Component\DomCrawler\Crawler;

class TabelaController extends Controller
{
    // public function tabela_brasileiro()
    // {
    //     // Configurando o cliente cURL com verificação de certificado desativada temporariamente
    //     $client = new Client([
    //         'verify' => false,
    //     ]);
    
    //     // Realizando a solicitação HTTP usando cURL
    //     $response = $client->get('https://iffhs.com/posts/3153');
    
    //     // Obtendo o corpo da resposta HTTP
    //     $html = (string) $response->getBody();
    
    //     // Criando uma instância do Crawler para analisar o HTML
    //     $crawler = new Crawler($html);
    
    //     // Inicializando um array para armazenar os dados da tabela HTML
    //     $rows = [];
    
    //     // Iterando sobre as linhas da tabela e extraindo os dados das células
    //     $crawler->filter('table tr')->each(function ($row) use (&$rows) {
    //         $rowData = [];
    //         $row->filter('td')->each(function ($cell) use (&$rowData) {
    //             $rowData[] = $cell->text();
    //         });
    //         $rows[] = $rowData;
    //     });

    //     // Retornando a view 'chances' com os dados da tabela HTML e da tabela chancesvit
    //     return view('welcome', compact('rows'));
    // }

    public function atualizar()
    {
        // Caminho para o arquivo Excel
        $filePath = public_path('/Sites.xlsx');

        // Carrega o arquivo Excel
        $spreadsheet = IOFactory::load($filePath);

        // Obtém a primeira planilha do arquivo
        $sheet = $spreadsheet->getSheet(0);

        // Obtém o número da última linha
        $lastRow = 12;

        // Array para armazenar os dados
        $data = [];

        // Percorre as linhas do arquivo Excel
        for ($row = 1; $row <= $lastRow; $row++) {
            // Obtém os valores das células
            $cellAValue = $sheet->getCell('AC' . $row)->getValue();
            $cellBValue = $sheet->getCell('AD' . $row)->getValue();
            $cellCValue = $sheet->getCell('AE' . $row)->getValue();
            $cellDValue = $sheet->getCell('AF' . $row)->getValue();
            $cellEValue = $sheet->getCell('AG' . $row)->getValue();
            $cellFValue = $sheet->getCell('AH' . $row)->getValue();
            $cellGValue = $sheet->getCell('Ai' . $row)->getValue();

            // Adiciona os valores ao array
            $data[] = [
                'nome' => $cellAValue,
                'setor' => $cellBValue,
                'pais' => $cellCValue,
                'valor' => $cellDValue,
                'ano' => $cellEValue,
                'obs' => $cellFValue,
                'site' => $cellGValue,
            ];
        }

        // Obtém a primeira planilha do arquivo
        $sheet1 = $spreadsheet->getSheet(0);

        // Obtém o número da última linha
        $lastRow1 = 12;

        // Array para armazenar os dados
        $data1 = [];

        // Percorre as linhas do arquivo Excel
        for ($row1 = 1; $row1 <= $lastRow1; $row1++) {
            // Obtém os valores das células
            $cellA1Value = $sheet1->getCell('AL' . $row1)->getValue();
            $cellB1Value = $sheet1->getCell('AM' . $row1)->getValue();
            $cellC1Value = $sheet1->getCell('AN' . $row1)->getValue();
            $cellD1Value = $sheet1->getCell('AO' . $row1)->getValue();
            $cellF1Value = $sheet1->getCell('AP' . $row1)->getValue();
            $cellG1Value = $sheet1->getCell('AQ' . $row1)->getValue();

            // Adiciona os valores ao array
            $data1[] = [
                'nome' => $cellA1Value,
                'setor' => $cellB1Value,
                'valor' => $cellC1Value,
                'ano'=> $cellD1Value,
                'obs'=> $cellF1Value,
                'site'=> $cellG1Value,
            ];
        }

        // Retorna a view com os dados
        // Retorna a view com os dados
        return view('welcome', compact('data', 'data1'));

    }

}
