<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::create([
            'name' => 'Zahra', 
            'gender' => 'Perempuan',      
            'email' => 'zahra10@gmail.com',       
            'phone' => '0812 9253 7143',       
         ]);
        Customer::create([
            'name' => 'Budi',
            'gender' => 'Laki-laki ',        
            'email' => 'budi11@gmail.com',                    
            'phone' => '0813 2648 9270',                    
         ]);
    }
}
