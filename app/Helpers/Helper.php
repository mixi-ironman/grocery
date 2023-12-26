<?php

namespace App\Helpers;

class Helper
{

    public static function category($categories, $parent_id = 0, $char = '')
    {
        $html = '';
        // dd($categories);
        // echo "<pre>";
        // print_r($categories);
        // echo"</pre>";
        foreach ($categories as $key => $category) {
            if ($category['parent_id'] == $parent_id) {
                // echo"<br>";
                // echo '-1--'.$key;
                // echo"<br>";
                // dd($categories);
                // dd($category);
                // echo $category->parent_id .'và'. $parent_id .'<br>';
                $html .= '
                    <tr>
                        <td scope="row" style="text-align: justify; vertical-align: middle;">'. $category->id .'</td>
                        <td style="text-align: justify; vertical-align: middle;">'.$char.$category->name .'</td>
                        <td style="text-align: justify; vertical-align: middle;">'. $category->slug .'</td>
                        <td style="text-align: justify; vertical-align: middle; max-width: 200px; white-space: normal; overflow: hidden;">'. $category->description .'</td>
                        <td style="text-align: center; vertical-align: middle;">'. $category->parent_id .'</td>
                        <td style="text-align: center; vertical-align: middle;">'. ($category->is_active ? '+' : '-') .'</td>
                        <td style="text-align: center; vertical-align: middle;">'. $category->created_at->format('d/m/Y h:i:s') .'</td>
                        <td>
                            <a class="btn btn-outline-primary" href=""><i class="fa-solid fa-pen-to-square"></i></a>
                            <a class="btn btn-outline-danger" href=""><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                ';
                // echo '--2--'.$key;
                // echo"<br>";

                unset($categories[$key]);
                // dd($categories);
                $html .= self::category($categories, $category->id, $char.'-- ');
                // $html.=self::category($categories, $category->id,$char.$category->name.' - ');
            }
        }
        return $html;
    }

    public static function price($price = 0)
    {
        if ($price != 0) {
            return '<p style="font-size:20px;  letter-spacing: 1px;">' . number_format($price) .'₫</p>';
        } else {
            return '<a href="/lien-he.html">Liên hệ</a>';
        }
    }


    public static function oldPrice( $priceSale = 0)
    {
        if($priceSale != 0 ){
            return '<p class="old-price">' . number_format($priceSale) . '₫</p>';
            //khoảng trắng &nbsp₫
            // return number_format($priceSale);
        }else{
            // return '<a href="/lien-he.html">Lien hệ</a>';
        }
    }

}

