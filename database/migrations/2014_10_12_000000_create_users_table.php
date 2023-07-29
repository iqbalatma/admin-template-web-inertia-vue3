<?php

use App\Enums\DatabaseSchema;
use App\Enums\Table;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement('CREATE SCHEMA IF NOT EXISTS ' . DatabaseSchema::AUTH());
        Schema::create(Table::USERS(), function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(Table::USERS());
        DB::statement('DROP SCHEMA IF EXISTS ' . DatabaseSchema::AUTH() . ' CASCADE');
    }
};
