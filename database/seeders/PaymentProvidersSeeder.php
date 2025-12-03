<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentProvidersSeeder extends Seeder
{
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('payment_providers')->truncate();
        DB::table('payment_providers')->insert([
            ['name' => 'Kookmin Bank', 'local_name' => '국민은행', 'code' => '004'],
            ['name' => 'Shinhan Bank', 'local_name' => '신한은행', 'code' => '088'],
            ['name' => 'Hana Bank', 'local_name' => '하나은행', 'code' => '081'],
            ['name' => 'Woori Bank', 'local_name' => '우리은행', 'code' => '020'],
            ['name' => 'NongHyup Bank', 'local_name' => '농협은행', 'code' => '011'],
            ['name' => 'Industrial Bank of Korea', 'local_name' => '기업은행', 'code' => '003'],
            ['name' => 'Korea Development Bank', 'local_name' => '한국산업은행', 'code' => '002'],
            ['name' => 'Citibank Korea', 'local_name' => '씨티은행', 'code' => '027'],
            ['name' => 'Busan Bank', 'local_name' => '부산은행', 'code' => '032'],
            ['name' => 'Daegu Bank', 'local_name' => '대구은행', 'code' => '031'],
            ['name' => 'Jeonbuk Bank', 'local_name' => '전북은행', 'code' => '037'],
            ['name' => 'Gwangju Bank', 'local_name' => '광주은행', 'code' => '034'],
            ['name' => 'Suhyup Bank', 'local_name' => '수협은행', 'code' => '007'],
            ['name' => 'KakaoBank', 'local_name' => '카카오뱅크', 'code' => '090'],
            ['name' => 'K Bank', 'local_name' => '케이뱅크', 'code' => '089'],
            ['name' => 'Toss Bank', 'local_name' => '토스뱅크', 'code' => '092'],
            ['name' => 'SC First Bank', 'local_name' => 'SC제일은행', 'code' => '023'],
            ['name' => 'Post Office', 'local_name' => '우체국', 'code' => '071'],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
