<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { 

        for ($x = 1; $x <= 2; $x++) {
            $slider = DB::table('sliders')->insert([
                'image' => 'slider/img'.$x.'.jpg',
                'linkto' => "http://127.0.0.1:8000/en/aboutus",
            ]);
        }
        for ($x = 1; $x <= 2; $x++) {
            $slider = DB::table('slider_translations')->insert([
                'slider_id' => $x,
                'title' => "-Here you will find all the services you need" . $x,
                'top_header' => "Twelve years of providing". $x,
                "buttom_header" => "distinguished public utility services". $x,
                "locale" => "en"
            ]);
        }
        for ($x = 1; $x <= 2; $x++) {
            $slider = DB::table('slider_translations')->insert([
                'slider_id' => $x,
                'title' => "- هنا سوف تجد جميع الخدمات التي تحتاجها" . $x,
                'top_header' => "اثني عشر عامًا من تقديم الخدمات". $x,
                "buttom_header" => "خدمات المرافق العامة المتميزة". $x,
                "locale" => "ar"
            ]);
        }

    }   
}








