<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        if (!Schema::hasTable('sites_object')) {
            Schema::create('sites_object', function (Blueprint $table) {
                $table->id();
                $table->index('user_id');
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
                $table->string('name', 255);
                $table->enum('site_type',['development', 'staging', 'production']);
                $table->string('domain', 255);
                $table->string('admin_url', 255);
                $table->string('cms_type', 255);
                $table->string('clickup_list_id', 20);
                $table->integer('accelo_contract_id');
                $table->timestamps();
            });
        }
    }
    public function down(): void
    {
        Schema::dropIfExists('sites_object');
    }
};
