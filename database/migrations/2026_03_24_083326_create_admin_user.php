<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{
    public function up(): void
    {
        $exists = DB::table('users')->where('email', 'admin@bachkhoadigital.com')->exists();
        if (!$exists) {
            DB::table('users')->insert([
                'name'       => 'Admin BKD',
                'email'      => 'admin@bachkhoadigital.com',
                'password'   => Hash::make('bachkhoa123'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

    public function down(): void
    {
        DB::table('users')->where('email', 'admin@bachkhoadigital.com')->delete();
    }
};
