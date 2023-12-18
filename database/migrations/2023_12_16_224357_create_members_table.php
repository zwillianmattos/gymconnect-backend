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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->foreignId('gym_id')->constrained()->cascadeOnDelete();
            $table->string('member_code', 50)->unique('member_id')->comment('Unique member id for reference');
            $table->string('name', 50);
            $table->string('photo', 50);
            $table->date('DOB');
            $table->string('email', 50)->unique('unique_tenant_member_email');
            $table->string('address', 200);
            $table->boolean('status');
            $table->string('proof_name', 50);
            $table->string('proof_photo', 50);
            $table->char('gender', 50);
            $table->string('contact', 11)->unique('contact');
            $table->string('emergency_contact', 11);
            $table->string('health_issues', 50);
            $table->integer('pin_code');
            $table->string('occupation', 50);
            $table->string('aim', 50);
            $table->string('source', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
