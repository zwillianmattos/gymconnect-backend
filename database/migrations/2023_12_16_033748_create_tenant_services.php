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
        Schema::create('tenant_services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tenant_id')->constrained('tenants'); 
            $table->string('name', 50);
            $table->string('description', 50);
            $table->timestamps();
            $table->integer('created_by')->unsigned()->index('FK_mst_services_mst_users_1');
            $table->integer('updated_by')->unsigned()->index('FK_mst_services_mst_users_2');
            $table->unique(['tenant_id', 'name'], 'unique_tenant_service_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenant_services');
    }
};
