<?php

use Illuminate\Database\Seeder;

class SiswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswas = [
        ['nama'=>'Ramdhani', 'ttl'=>'2000-12-11', 'jk'=>'laki-laki', 'alamat'=>'sukamenak', 'kelas'=>'XII'],
        ['nama'=>'Idoy', 'ttl'=>'2000-10-05', 'jk'=>'laki-laki', 'alamat'=>'USA', 'kelas'=>'XII'],
        ['nama'=>'Ucok', 'ttl'=>'2000-10-08', 'jk'=>'laki-laki', 'alamat'=>'Bojong', 'kelas'=>'XII'],
        ['nama'=>'Udin', 'ttl'=>'2000-10-07', 'jk'=>'laki-laki', 'alamat'=>'Sayati', 'kelas'=>'XII'],
        ['nama'=>'Adit', 'ttl'=>'2000-08-22', 'jk'=>'laki-laki', 'alamat'=>'NUSA', 'kelas'=>'XII'],
        ];
        DB::table('siswas')->insert($siswas);
    }
}
