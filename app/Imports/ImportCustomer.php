<?php

namespace App\Imports;

use App\Models\{Customer, User};
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ImportCustomer implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if(empty($row['restaurantcode'])){

        }else{
            $refrenseNo = '';
            $reataurant = User::where('store_code', $row['restaurantcode'])->where('brand_id', (int)request()->get('brand_id'))->where('role', 2)->first();
            // dd($reataurant, $row['restaurantcode'], (int)request()->get('brand_id'));
            if($reataurant){
                //$customer = Customer::where('brand_id', request()->get('brand_id'))->where('restaurant_id', $reataurant->id)->where('phone', strval($row['phone']))->first();
                //if(empty($customer)){

                    if(in_array($row['type'], ['dinein', 'delivery', 'feedback'])){
                        $refrenseNo = Customer::orderBy('id', 'desc')->first() ? Customer::orderBy('id', 'desc')->first()->id  + 1 : 1;
                        $refrenseNo = str_pad($refrenseNo,5,"0", STR_PAD_LEFT);
                        return new Customer([
                            'brand_id' => (int)request()->get('brand_id'),
                            'restaurant_id' => $reataurant->id,
                            'name' => $row['name'],
                            'email' => $row['email'],
                            'phone' => strval($row['phone']),
                            'type' => strval($row['type']),
                            'reference_no' => $refrenseNo
                        ]);
                    }
                //}
            }
        }
    }
}
