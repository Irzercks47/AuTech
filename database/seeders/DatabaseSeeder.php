<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('products')->insert([
            "id" => 1,
            "ProdName" => "QDC Anole VX Professional",
            "ProdPrice" => 2556,
            "ProdDesk" => "QDC monitors have been adjusted by several top sound engineers and famous musicians in music section, with the features of wide frequency response, small stain, abundant sound detail, crisp and clear quality, accurate sound field positioning without losing the sense of encirclement, high resolution middle-high frequency, but not too much modification, innate excellent transient response for balanced armature, attaching equal importance to designing both quantum sense and descending, and more excellent middle frequency density than moving coil, thoroughly explain the rich emotion of music.",
            "ProdImage" => "images/fp1.jpg"
        ]);
        DB::table('products')->insert([
            "id" => 2,
            "ProdName" => "Iriver Astell & Kern KANN CUBE",
            "ProdPrice" => 1727,
            "ProdDesk" => "KANN CUBE is the second model from the KANN line, which focuses on high fidelity with powerful output and low noise. This player is designed to offer a very low noise floor, even with its massive power output. High performance, low-noise amp makes KANN Cube an Absolute Audio Powerhouse. Dual ES9038PRO DACs, the current flagship SABRE DAC chips from ESS designed for Pro Audio Equipment 5-pin Mini XLR output for even less noise 32bit/384kHz, Native DSD256 support",
            "ProdImage" => "images/fp2.jpg"
        ]);
        DB::table('products')->insert([
            "id" => 3,
            "ProdName" => "Tanchjim Prism",
            "ProdPrice" => 599.99,
            "ProdDesk" => "The dynamic driver which is combined with the fourth generation DMT technology and composite dual balanced armature sonion drivers, the frequency division calculated by equivalent analysis ensures that both kind of drivers connect naturally and smoothly",
            "ProdImage" => "images/fp3.jpg"
        ]);
        DB::table('products')->insert([
            "id" => 4,
            "ProdName" => "SMSL D300 DAC",
            "ProdPrice" => 399.99,
            "ProdDesk" => "QDC monitors have been adjusted by several top sound engineers and famous musicians in music section, with the features of wide frequency response, small stain, abundant sound detail, crisp and clear quality, accurate sound field positioning without losing the sense of encirclement, high resolution middle-high frequency, but not too much modification, innate excellent transient response for balanced armature, attaching equal importance to designing both quantum sense and descending, and more excellent middle frequency density than moving coil, thoroughly explain the rich emotion of music.",
            "ProdImage" => "images/fp4.jpg"
        ]);
        DB::table('products')->insert([
            "id" => 5,
            "ProdName" => "QDC Dmagic",
            "ProdPrice" => 1599.99,
            "ProdDesk" => "Dmagic (magic circle) is inspired by Dynamic Magic, which means magician in moving circle. Use the new qdc Dmagic patented moving coil acoustic cavity design blocks the interference between the multi-unit moving coils,the frequency division and acoustic tuning pairing are completed outside the earphone shell, making the multi-unit moving coil customized to the multi-unit moving iron like binaural consistency and excellent acoustic indicators.",
            "ProdImage" => "images/rp1.jpg"
        ]);
        DB::table('products')->insert([
            "id" => 6,
            "ProdName" => "Topping L30 NFCA",
            "ProdPrice" => 149.99,
            "ProdDesk" => "The TOPPING L30 is a new product with Ultra-High Performance NFCA modules,uses the same NFCA (Nested Feedback Composite Amplifier)module from flagship A90. Voltage Current hybrid feedback architecture along with UHGF (Ultra High Gain Feedback) technology provides excellent DC and AC performance. High output current drive capability allows the amp driving low impedance headphones with ease. Ultra-low noise of 0.3uV is miles ahead of the competition,giving an absurdly high dynamic range of 141dB and no audible noise and darkest background for the most sensitive IEMs.",
            "ProdImage" => "images/rp3.jpg"
        ]);
        DB::table('products')->insert([
            "id" => 7,
            "ProdName" => "Hilidac Audirect Beam 3 Pro",
            "ProdPrice" => 149.99,
            "ProdDesk" => "Equipped with high-performance ES9281 AC PRO chip It adapts the independent ES9281 AC PRO decoding chip produced by the global audio chip manufacturer ESS, supports up to PCM/DXD(32-bit/768kHz), and with a dual independent op-amp, ensuring the HiFi sound quality to your smartphone, PC or gaming devices.",
            "ProdImage" => "images/rp4.jpg"
        ]);
        DB::table('products')->insert([
            "id" => 8,
            "ProdName" => "BGVP ArtMagic V12",
            "ProdPrice" => 1299.00,
            "ProdDesk" => "All these configuration that V12 used, makes the sound in all frequencies smooth-connected, and able to present a true, amazing sound.",
            "ProdImage" => "images/rp5.jpg"
        ]);
    }
}
