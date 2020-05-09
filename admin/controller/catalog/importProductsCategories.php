<?php

class ControllerCatalogImportProductsCategories extends Controller
{

    private $img_extension = '.png';

    private $name_ancho       = 'Ancho:';
    private $id_ancho         = '29';
    private $name_composicion = 'Comp:';
    private $id_composicion   = '28';
    private $name_peso        = 'Peso:';
    private $id_peso          = '32';
    private $name_piezasde    = 'Piezas de:';
    private $id_piezasde      = '31';
    private $name_rendimiento = 'Rendimiento:';
    private $id_rendimiento   = '30';

    // IDs de las categorias PADRES
    // private $id_usos    = 195;
    // private $id_telas   = 170;

    // para testing en telasunitex.com.ar/telas_testing
    private $id_usos    = 171;
    private $id_telas   = 170;


    protected function getAllDataFromCsv( String $filename ): array
    {
        // paso el .csv a un array
        $products = array();
        $item = 0;
        if (($handle = fopen(DIR_APPLICATION . '../docs/' . $filename, "r")) !== FALSE)
        {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
            {
                $num = count($data);
                for ($c=0; $c < $num; $c++) {
                    $product[$c] = trim($data[$c]);
                }

                $all_data[$item] = $product;
                $item++;
            }
            fclose($handle);
        }

        return $all_data;
    }

    // por cada producto que nos pasan, debemos generar nuevos productos identicos, pero se diferencian por URL SEO.
    // por ejemplo. Si un producto tiene 3 URL SEO, vamos a devolver tres productos identicos, pero con URL SEO diferentes.
    protected function separateProductBySeo( Array $products): array
    {
        $all_products = [];
        foreach ($products AS $k => $product)
        {
            $url_seos           = $this->separateUrlsSeos($product);
            $separate_products  = $this->createNewProductsBySeo( $products[$k], $url_seos);
            $all_products       = $this->addProductsInArray($all_products, $separate_products);
        }

        return $all_products;
    }

    protected function separateUrlsSeos(Array $product)
    {
        $url_seos = explode(",", $product[23]);
        foreach ($url_seos AS $k=>$url)
        {
            if (strlen($url) < 4) {
                unset($url_seos[$k]);
            } else {
                $url_seos[$k] = trim(str_replace('/','', $url));
            }
        }

        return $url_seos;
    }



    protected function addProductsInArray( Array $allproducts, Array $separate_products): array
    {

        end($allproducts);
        $k = key($allproducts);

        foreach ($separate_products AS $product)
        {
            $k++;
            $allproducts[$k] = $product;
        }

        return $allproducts;
    }



    protected function createNewProductsBySeo( Array $product, Array $seos ): array
    {
        $all_products = [];
        $k_newproduct = 0;
        foreach ($seos AS $k_url => $seo)
        {
            $all_products[$k_newproduct] = $product;
            $all_products[$k_newproduct][23] = trim($seo);
            $k_newproduct++;
        }

        return $all_products;
    }


    protected function getProductToInsert( Array $prod): array
    {

        $data["model"]                       = $prod[1];
        $data["sku"]                         = "";
        $data["upc"]                         = "";
        $data["ean"]                         = "";
        $data["jan"]                         = "";
        $data["isbn"]                        = "";
        $data["mpn"]                         = "";
        $data["location"]                    = "";
        $data["price"]                       = str_replace(',','.',$prod[7]);
        $data["tax_class_id"]                = "0"; // va string en 0
        $data["quantity"]                    = "99999999";
        $data["minimum"]                     = "1";
        $data["subtract"]                    = "1";
        $data["stock_status_id"]             = "6";
        $data["shipping"]                    = "1";
        $data["date_available"]              = "2018-12-10";
        $data["length"]                      = "1"; // largo, entiendo que esto depende de la cantidad
        $data["width"]                       = self::set_width($prod[2]); //ancho
        $data["height"]                      = "1"; // alto. entiendo que es infimo por que son telas.
        $data["length_class_id"]             = "1"; // 1 es centimetros seteadas las dimensiones
        $data["weight"]                      = $prod[16]; // el peso por cada metro en gramos
        $data["weight_class_id"]             = "2"; // 2 es en gramos que es lo que vamos a usar para medir cada metro de tela.
        $data["status"]                      = "1";
        $data["sort_order"]                  = "0";
        $data["manufacturer"]                = "";
        $data["manufacturer_id"]             = "0";
        $data["category"]                    = ""; // lo pone siempre vacio

        $data['product_category']             = $this->set_categories( $prod[1], $prod[0], $prod[12], $prod[17] );

        $data['product_discount'][0]['customer_group_id'] = '1';
        $data['product_discount'][0]['quantity'] = '10';
        $data['product_discount'][0]['priority'] = '';
        $data['product_discount'][0]['price'] = str_replace(',','.',$prod[6]);
        $data['product_discount'][0]['date_start'] = '';
        $data['product_discount'][0]['date_end'] = '';

        $data['product_discount'][1]['customer_group_id'] = '1';
        $data['product_discount'][1]['quantity'] = '20';
        $data['product_discount'][1]['priority'] = '';
        $data['product_discount'][1]['price'] = str_replace(',','.',$prod[5]);;
        $data['product_discount'][1]['date_start'] = '';
        $data['product_discount'][1]['date_end'] = '';


        $data['product_discount'][2]['customer_group_id'] = '1';
        $data['product_discount'][2]['quantity'] = '100';
        $data['product_discount'][2]['priority'] = '';
        $data['product_discount'][2]['price'] = str_replace(',','.',$prod[4]);;
        $data['product_discount'][2]['date_start'] = '';
        $data['product_discount'][2]['date_end'] = '';

        $precios[0] = $data['product_discount'][2]['price'];
        $precios[1] = $data['product_discount'][1]['price'];
        $precios[2] = $data['product_discount'][0]['price'];
        $usos       = $prod[12];

        // idioma español
        $data["product_description"][2]["name"]         = $prod[1];
        $data["product_description"][2]["description"]  = $this->getProductDescription( $precios, $usos);
        $data["product_description"][2]["meta_title"]   = $prod[13];
        $data["product_description"][2]["meta_description"]= $prod[14];
        $data["product_description"][2]["meta_keyword"] = $prod[15];
        $data["product_description"][2]["tag"]          = "";

        // idioma ingles, lo agregamos para que no haya errores si editamos manualmente
        $data["product_description"][1]["name"]         = $prod[1];
        $data["product_description"][1]["description"]  = $this->getProductDescription( $precios, $usos);
        $data["product_description"][1]["meta_title"]   = $prod[13];
        $data["product_description"][1]["meta_description"]= $prod[14];
        $data["product_description"][1]["meta_keyword"] = $prod[15];
        $data["product_description"][1]["tag"]          = "";




        // atributos del producto
        $data['product_attribute'][0]['name']           = $this->name_ancho;
        $data['product_attribute'][0]['attribute_id']   = $this->id_ancho;
        $data['product_attribute'][0]['product_attribute_description'][2]['text']   = $prod[2];
        $data['product_attribute'][0]['product_attribute_description'][1]['text']   = $prod[2];


        $data['product_attribute'][1]['name']           = $this->name_composicion;
        $data['product_attribute'][1]['attribute_id']   = $this->id_composicion;
        $data['product_attribute'][1]['product_attribute_description'][2]['text']   = $prod[10];
        $data['product_attribute'][1]['product_attribute_description'][1]['text']   = $prod[10];


        $data['product_attribute'][2]['name']           = $this->name_peso;
        $data['product_attribute'][2]['attribute_id']   = $this->id_peso;
        $data['product_attribute'][2]['product_attribute_description'][2]['text']   = $prod[16];
        $data['product_attribute'][2]['product_attribute_description'][1]['text']   = $prod[16];


        $data['product_attribute'][3]['name']           = $this->name_piezasde;
        $data['product_attribute'][3]['attribute_id']   = $this->id_piezasde;
        $data['product_attribute'][3]['product_attribute_description'][2]['text']   = $prod[9];
        $data['product_attribute'][3]['product_attribute_description'][1]['text']   = $prod[9];


        $data['product_attribute'][4]['name']           = $this->name_rendimiento;
        $data['product_attribute'][4]['attribute_id']   = $this->id_rendimiento;
        $data['product_attribute'][4]['product_attribute_description'][2]['text']   = '80%';
        $data['product_attribute'][4]['product_attribute_description'][1]['text']   = '80%';


        $data["filter"]                      = "";
        $data["product_store"][0]            = "0";
        $data["download"]                    = "";
        $data["related"]                     = "";
        $data["option"]                      = "";
        $data["image"]                      = $this->getFirstImage($prod[23]);
        $data["points"]                      = "";
        $data["product_reward"][1]["points"] = "0";
        $data["product_seo_url"][0][2]       = $prod[23]; // para los dos idiomas  CASTELLANO
        $data["product_seo_url"][0][1]       = $prod[23] . '-en'; // para los dos idiomas INGLES
        $data["product_layout"][0]           = "";

        $data['product_image']              = $this->getImages($prod[23]);

        return $data;
    }

    private function getProductDescription( Array $precios, String $usos ):string
    {
        return '<div class="product-info-container-am ">
                          <div class="product-label-am">
                            <div class="box-wrap-am">
                              <div class="price-box-am ">
                                <div class="price-title-am"> <span>Por menor<br>
                                  <span class="price-subtitle-am desktop-am">A partir de 1 kilo</span> <span class="price-subtitle-am mobile-am">Por 1 kg.</span> </span> </div>
                                <div class="price-container-regular-am "> <span class="regular-price-am"> <span class="price-am">$' . $precios[0] . '</span> </span> </div>
                                <br clear="all">
                                <ul class="tiered-prices-list-am">
                                  <li>
                                    <div class="price-title-am"> <span>Por mayor<br>
                                      <span data-dialog="El precio por mayor se aplica a la compra de 5 kilos del mismo color o diseño" class="tooltip-info-am"><span></span></span> <span class="price-subtitle-am desktop-am">A partir de 5 kilos </span> <span class="price-subtitle-am mobile-am">Más de 5 kgs. </span> </span> </div>
                                    <div class="price-container-tiered-am"> <span class="price-am">$' . $precios[1] . '</span> </div>
                                    <br clear="all">
                                  </li>
                                  <li>
                                    <div class="price-title-am"> <span>Por pieza<br>
                                      <span data-dialog="El precio por pieza se aplica a cantidades múltiplos de 20. - Ej.: 20, 40, 60, 80, etc." class="tooltip-info-am"><span></span></span> <span class="price-subtitle-am desktop-am">Piezas de 20 kilos </span> <span class="price-subtitle-am mobile-am">Pza. de 20 kgs. </span> </span> </div>
                                    <div class="price-container-tiered-am"> <span class="price-am">$' . $precios[2] . '</span> </div>
                                    <br clear="all">
                                  </li>
                                </ul>
                              </div>

                              <span class="price-disclaimer-am">Precios por kilo. IVA incluido.</span> </div>
                          </div>

                          <div class="uses-container-am ">
                            <h4><strong>Usos</strong></h4>
                            <div class="blockquote-am">
                              <div class="inside-am">
                                <p>' . $usos . '</p>
                              </div>
                            </div>
                          </div>
                        </div>';
    }


    protected function getCategoryToInsert( string $type = 'Uso', string $name): array
    {
        $data['parent_id'] = $this->id_usos;
        if ( $type == 'Tela') {
            $data['parent_id']  = $this->id_telas;
        }
        $data['category_description'][2]['name']            = $name;
        $data['category_description'][2]['description']     = '';
        $data['category_description'][2]['meta_title']      = $type . ' ' . $name;
        $data['category_description'][2]['meta_description']= $type . ' ' . $name;
        $data['category_description'][2]['meta_keyword']    = $type . ', ' . $name;
        $data['category_description'][1]['name']            = $name;
        $data['category_description'][1]['description']     = '';
        $data['category_description'][1]['meta_title']      = $type . ' ' . $name;
        $data['category_description'][1]['meta_description']= $type . ' ' . $name;
        $data['category_description'][1]['meta_keyword']    = $type . ', ' . $name;
        $data['path']       = '';
        $data['filter']     =  '';
        $data['category_store'][0]  = '0';
        $data['image']      = 'data/telas/' . strtolower(trim($type)) . '-' . strtolower(trim($this->seoUrl($name))) . $this->img_extension;
        $data['column']     = '';
        $data['sort_order'] = '0';
        $data['status']     = '1' ;
        $data['category_seo_url'][0][2] = strtolower(trim($this->seoUrl($name)));
        $data['category_seo_url'][0][1] = strtolower(trim($this->seoUrl($name))) . '-en';
        $data['category_layout'][0] = '';

        return $data;
    }

    private function seoUrl( $string, $separator = '-' )
    {
        $accents_regex = '~&([a-z]{1,2})(?:acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);~i';
        $special_cases = array( '&' => 'and', "'" => '');
        $string = mb_strtolower( trim( $string ), 'UTF-8' );
        $string = str_replace( array_keys($special_cases), array_values( $special_cases), $string );
        $string = preg_replace( $accents_regex, '$1', htmlentities( $string, ENT_QUOTES, 'UTF-8' ) );
        $string = preg_replace("/[^a-z0-9]/u", "$separator", $string);
        $string = preg_replace("/[$separator]+/u", "$separator", $string);
        return $string;
    }

    protected function getImages( string $seo ): array
    {
        return [
                    [ "image" => 'data/telas/' . $seo . '-b' . $this->img_extension, "sort_order" => 1 ],
                    [ "image" => 'data/telas/' . $seo . '-c' . $this->img_extension, "sort_order" => 2 ],
                    [ "image" => 'data/telas/' . $seo . '-d' . $this->img_extension, "sort_order" => 3 ],
                    [ "image" => 'data/telas/' . $seo . '-e' . $this->img_extension, "sort_order" => 4 ]
            ];
    }



    protected function getFirstImage( string $seo): string
    {
        return trim('data/telas/' . $seo . '-a' . $this->img_extension);
    }


    // nos devuelve el ancho en centímetros. Es pasado como parámetro en metros con coma como separador.
    static function set_width( $width )
    {
        // width ejemplo 1,60
        // y lo tenemos que dejar en 160
        // por que está en centimetro
        $width = str_replace(',','.',$width);
        $width = (float)$width * 100;

        return (int)$width;
    }

    //nos devuelve el array con el id de las categorias. Si no encuentra la categoria avisa con un Warning en pantalla.
    private function set_categories( String $name_product,  String $tela_name, String $usos, String $main_categories ): Array
    {
        $all_categories = $tela_name . ', ' . $usos . ',' . $main_categories;
        $categories     = explode(',', $all_categories );

        $this->load->model('catalog/category');
        $id_categories = [];

        foreach ($categories AS $category)
        {
            $get_category = $this->model_catalog_category->getCategories( ['filter_name'=>strtolower(trim($category))] );
            if (isset($get_category[0]['category_id'])) {
                $id_categories[] = $get_category[0]['category_id'];
            } else {
                echo 'WARNING: Producto ' . $name_product . ' tiene seteada categoria ' . $category . ' y no fue encontrada dentro de las categorias . . . <br />';
            }
        }

        return $id_categories;
    }


    protected function selectDataReferCategorieas( Array $product ):array
    {

        return [    'tela' => ucfirst(strtolower(trim($product[0]))),
                    'usos' => $this->separateUsos( $product[12] )
                ];
    }

    private function separateUsos( string $usos ):array
    {
        $arr_usos = explode(',', $usos);

        if ( count($arr_usos) == 0) {
            return [];
        }

        $responseUsos = [];
        foreach ($arr_usos AS $uso)
        {
            if( strlen($uso) > 3 ) {
                $uso = ucfirst(str_replace(',' , '' , trim($uso)));
                $responseUsos[] = $uso;
            }
        }
        return $responseUsos;
    }

    protected function notExistCategory( string $name):bool
    {
        $this->load->model('catalog/category');
        $get_category = $this->model_catalog_category->getCategories( ['filter_name'=>strtolower(trim($name))] );
        if (isset($get_category[0]['category_id'])) {
            return false;
        }
        return true;
    }

    protected function checkIfExistImage( Array $data):void
    {
        if (!file_exists(DIR_IMAGE . $data['image'])) {
            echo 'Imagen ' . $data['image'] . ' no existe!<br />';
        }
        return;
    }


}



// así hay que pasarlo el producto





        // array(38) {
        //     ["product_description"]=> array(2) {
        //                             [2]=> array(6) {
        //                                  ["name"]=> string(24) "nombre del prod espaniol"
        //                                  ["description"]=> string(51) "<p>toda la descripcion del producto</p>"
        //                                  ["meta_title"]=> string(4) "pepe"
        //                                  ["meta_description"]=> string(0) ""
        //                                  ["meta_keyword"]=> string(0) ""
        //                                  ["tag"]=> string(0) "" }
        //                             [1]=> array(6) {
        //                                     ["name"]=> string(24) "nombre del prod espaniol"
        //                                     ["description"]=> string(61) "<p>toda la descripcion del producto<br></p>"
        //                                     ["meta_title"]=> string(24) "meta tag titulloooo engl"
        //                                     ["meta_description"]=> string(0) ""
        //                                     ["meta_keyword"]=> string(0) ""
        //                                     ["tag"]=> string(0) "" }
        //                                 }
        //     ["model"]=> string(16) "model de la tela"
        //     ["sku"]=> string(0) ""
        //     ["upc"]=> string(0) ""
        //     ["ean"]=> string(0) ""
        //     ["jan"]=> string(0) ""
        //     ["isbn"]=> string(0) ""
        //     ["mpn"]=> string(0) ""
        //     ["location"]=> string(0) ""
        //     ["price"]=> string(0) ""
        //     ["tax_class_id"]=> string(1) "0"
        //     ["quantity"]=> string(1) "1"
        //     ["minimum"]=> string(1) "1"
        //     ["subtract"]=> string(1) "1"
        //     ["stock_status_id"]=> string(1) "6"
        //     ["shipping"]=> string(1) "1"
        //     ["date_available"]=> string(10) "2018-12-10"
        //     ["length"]=> string(0) ""
        //     ["width"]=> string(0) ""
        //     ["height"]=> string(0) ""
        //     ["length_class_id"]=> string(1) "1"
        //     ["weight"]=> string(0) ""
        //     ["weight_class_id"]=> string(1) "1"
        //     ["status"]=> string(1) "1"
        //     ["sort_order"]=> string(1) "1"
        //     ["manufacturer"]=> string(0) ""
        //     ["manufacturer_id"]=> string(1) "0"
        //     ["category"]=> string(0) ""
        //     ["filter"]=> string(0) ""
        //     ["product_store"]=> array(1) {
        //                         [0]=> string(1) "0" }
        //     ["download"]=> string(0) ""
        //     ["related"]=> string(0) ""
        //     ["option"]=> string(0) ""
        //     ["image"]=> string(0) ""
        //     ["points"]=> string(0) ""
        //     ["product_reward"]=> array(1) {
        //                         [1]=> array(1) {
        //                             ["points"]=> string(0) "" } }
        //     ["product_seo_url"]=> array(1) {
        //                         [0]=> array(2) {
        //                             [2]=> string(0) ""
        //                             [1]=> string(0) "" } }
        //     ["product_layout"]=> array(1) {
        //                         [0]=> string(0) "" } }










        // array para insertar categorias
        //array (
        //   'category_description' =>
        //   array (
        //     2 =>
        //     array (
        //       'name' => 'nombre espaniolll',
        //       'description' => '<p>descripcion espaniolll</p>',
        //       'meta_title' => 'el metata titulo',
        //       'meta_description' => 'meta descripcion',
        //       'meta_keyword' => 'meta palabras',
        //     ),
        //     1 =>
        //     array (
        //       'name' => 'nombre en ingles',
        //       'description' => '<p>descrpcion en ingles&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>',
        //       'meta_title' => 'meta titulo',
        //       'meta_description' => 'meta descripcion',
        //       'meta_keyword' => 'meta palabras',
        //     ),
        //   ),
        //   'path' => 'Telas por nombre',
        //   'parent_id' => '170',
        //   'filter' => '',
        //   'category_store' =>
        //   array (
        //     0 => '0',
        //   ),
        //   'image' => '',
        //   'column' => '1',
        //   'sort_order' => '0',
        //   'status' => '1',
        //   'category_seo_url' =>
        //   array (
        //     0 =>
        //     array (
        //       2 => 'jean',
        //       1 => 'jean-en',
        //     ),
        //   ),
        //   'category_layout' =>
        //   array (
        //     0 => '',
        //   ),
        // )

        //fin array de las categorias.




