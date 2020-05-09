<?php

require DIR_APPLICATION . 'controller/catalog/importProductsCategories.php';

class  ControllerCatalogImport extends ControllerCatalogImportProductsCategories
{


    // IDs de las categorias PADRES
    private $id_usos    = 195;
    private $id_telas   = 170;



    public function importAll():bool
    {
        if ($this->importProducts()) {
            echo '<br />Categorías y Productos cargados con éxitos, revisar si hay algún Warning y resolverlo si se puede.<br />';
            return true;
        }

        throw new \Exception('ERROR FATAL. Las salidas dieron con errores. Revisar. ');
    }

    public function importProducts()
    {

        $products_csv = $this->getAllDataFromCsv('telas.csv');
        $products     = $this->separateProductBySeo($products_csv);

        // Inserto las categotrias
        foreach ($products as $k => $prod)
        {
            $tela_usos = $this->selectDataReferCategorieas($prod);
            $tela = $tela_usos['tela'];
            if($this->notExistCategory($tela)) {
                $tela_category = $this->getCategoryToInsert('Tela', $tela);
                $this->insertCategory($tela_category);
            }

            foreach ($tela_usos['usos'] AS $uso)
            {
                if($this->notExistCategory($uso)) {
                    $uso_category = $this->getCategoryToInsert('Uso', $uso);
                    $this->insertCategory($uso_category);
                }
            }
        }

        // Inserto productos
        foreach ($products as $k => $prod)
        {
            $data = $this->getProductToInsert($prod);
            $this->insertProduct($data);
        }

        echo 'Productos y Categorías Insertados Correctamente . . . Controlar si hay algún mensaje que faltó algo';
        return true;

    }

    private function insertProduct($data): bool
    {
        $this->load->language('catalog/product');
        $this->document->setTitle($this->language->get('heading_title'));
        $this->load->model('catalog/product');
        $add_product = $this->model_catalog_product->addProduct($data);
        if ( isset($add_product) && is_numeric($add_product) && $add_product > 0) {
            return true;
        }

        throw new \Exception('ERROR FATAL. No puedo crear el producto ' . $prod[0]);

    }

    // public function importCategories()
    // {
    //     // Nombres Telas
    //     $categories_telas_csv = $this->getAllDataFromCsv('telas-categorias-nombres.csv');
    //     foreach ($categories_telas_csv AS $tela)
    //     {
    //         $data = $this->getCategoryToInsert($tela, $this->id_telas);
    //         // echo '<strong>$data in line ' . __LINE__ . ' in filename ' . __FILE__ . '</strong> <pre>' . var_export($data, true) . '</pre>';
    //         $this->insertCategory( $data );
    //     }
    //     echo 'Categorias Nombres de Telas insertadas con éxito . . .<br />';

    //     // Usos
    //     $categories_usos_csv = $this->getAllDataFromCsv('telas-categorias-usos.csv');
    //     foreach ($categories_usos_csv AS $uso)
    //     {
    //         $data = $this->getCategoryToInsert($uso, $this->id_usos);
    //         // echo '<strong>$data in line ' . __LINE__ . ' in filename ' . __FILE__ . '</strong> <pre>' . var_export($data, true) . '</pre>';
    //         $this->insertCategory( $data );
    //     }
    //     echo 'Categorias Usos de Telas insertadas con éxito . . .<br />';

    //     return true;
    // }

    private function insertCategory($data): bool
    {
        $this->load->language('catalog/category');
        $this->document->setTitle($this->language->get('heading_title'));
        $this->load->model('catalog/category');
        $this->checkIfExistImage($data);
        $add_category = $this->model_catalog_category->addCategory($data);
        if ( isset($add_category) && is_numeric($add_category) && $add_category > 0) {
            return true;
        }

        throw new \Exception('ERROR FATAL. No puedo crear el producto ' . $prod[0]);

    }




}