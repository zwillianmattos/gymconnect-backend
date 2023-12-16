<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tenant_configuraitons', function (Blueprint $table) {
            $table->id('id_configuration');
            $table->string('config_key');
            $table->string('config_value');
            $table->foreignId('tenant_id')->constrained('tenants');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenant_configuraitons');
    }
};
