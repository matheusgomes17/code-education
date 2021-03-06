<?php

namespace Products\Controllers;

Use Products\Entity\ProductsApi;
use Products\Mapper\ProductsMapperApi;
use Products\Service\ProductsServiceApi;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManager;

class ProductsCtlApi implements \Products\Interfaces\ProductsControllerApiInterface
{
    public function connect(Application $app, EntityManager $em) {
        $productsControllerApi = $app['controllers_factory'];

        $app['productsServiceApi'] = function () use ($em) {

            $productsService = new ProductsServiceApi($em);

            return $productsService;
        };

        $productsControllerApi->get('/', function () use ($app) {

            $result = $app['productsServiceApi']->fetchAll();

            return $app->json($result);

        });


        $productsControllerApi->get('/{id}', function ($id) use ($app) {

            $result = $app['productsServiceApi']->findOneById($id);

            return $app->json($result);

        });

        $productsControllerApi->post('/', function (Request $request) use ($app) {

            $data['name'] = $request->get('name');
            $data['description'] = $request->get('description');
            $data['value'] = $request->get('value');

            $products = new ProductsApi();
            $products->setName($data['name']);
            $products->setDescription($data['description']);
            $products->setValue($data['value']);


            if ( $app['productsServiceApi']->insert($data)) {
                return $app->json([
                    'SUCCESS' => 'Data successfully registered in database',
                    'SUCESSO' => 'Dados cadastrados com sucesso no banco'
                ]);
            } else {
                return $app->json([
                    'ERROR' => 'Error inserting product!',
                    'ERRO'  => 'Erro ao cadastrar Produto!'
                ]);
            }

        });



        $productsControllerApi->put('/{id}', function (Request $request, $id) use ($app) {

            $data['id'] =  $id;
            $data['name'] = $request->get('name');
            $data['description'] = $request->get('description');
            $data['value'] = $request->get('value');

            if ($app['productsServiceApi']->update($data, $id)) {
                return $app->json([
                    'SUCCESS' => 'Successful update data in database',
                    'SUCESSO' => 'Dados Alterado com sucesso no banco'
                ]);
            } else {
                return $app->json([
                    'ERROR' => 'Error Changing Product!',
                    'ERRO'  => 'Erro ao alterar Produto!'
                ]);
            }

        });


        
        $productsControllerApi->delete('/{id}', function ( $id) use ($app) {

            if ($app['productsServiceApi']->delete($id)) {
                return $app->json([
                    'SUCCESS' => 'Data successfully deleted the seat',
                    'SUCESSO' => 'Dados deletado com sucesso no banco'
                ]);
            } else {
                return $app->json([
                    'ERROR' => 'Error deleting Product!',
                    'ERRO'  => 'Erro ao deletar Produto!'
                ]);
            }
        });
        
        return $productsControllerApi;

    }
}