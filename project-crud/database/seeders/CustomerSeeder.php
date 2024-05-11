<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\customer; 
class CustomerSeeder extends Seeder
{

    public function run():void
    {
        $json= File::get(path:'database/json/customer.json');
        $customer=collect(json_decode($json));
        $customer->each(function($customer){
            customer::create([ 
                'id'=>$customer->id,
                'products'=>$customer->description,
                'contacts'=>$customer->contactsNum,
                // 'action'=>,
                'name'=>$customer->name,
                'city'=>$customer->city,
                'price'=>$customer->price,
                'description'=>$customer->description
            ]);
    });
    }
}
