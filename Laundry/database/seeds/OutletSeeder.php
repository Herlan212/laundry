<?php

use Illuminate\Database\Seeder;

class OutletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $outlet = new \App\Outlet;
        $outlet->nama = "Herlan Wash";
        $outlet->alamat = "Jl. Amasandi, No. 37";
        $outlet->no_telp = "083807068989";

        $outlet->save();

        $this->command->info("Seeder berhasil!");
    }
}
