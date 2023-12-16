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
        Schema::create('tenant_plans', function (Blueprint $table) {
            $table->id('id')->comment('Unique Record Id for system');
            $table->foreignId('tenant_id')->constrained('tenants'); 
            $table->foreignId('service_id')->index('FK_mst_plans_mst_services')->constrained('tenant_services');
            $table->string('plan_code', 50)->unique('plan_id')->comment('Unique plan id for reference');
            $table->string('plan_name', 50)->comment('name of the plan');
            $table->text('plan_details')->comment('plan details');
            $table->integer('days')->comment('duration of the plans in days');
            $table->integer('amount')->comment('amount to charge for the plan');
            $table->boolean('status')->comment('0 for inactive, 1 for active');
            $table->timestamps();
            $table->integer('created_by')->unsigned()->index('FK_mst_plans_mst_users_1');
            $table->integer('updated_by')->unsigned()->nullable()->index('FK_mst_plans_mst_users_2');
        
            $table->unique(['tenant_id', 'plan_name'], 'unique_tenant_plan_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenant_plans');
    }
};
