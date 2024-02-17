<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        if (!Schema::hasTable('sites')) {
            Schema::create('sites', function (Blueprint $table) {
                $table->id();
                $table->integer('user_id')->unsigned();
                $table->string('name', 255);
                $table->enum('site_type',['development', 'staging', 'production']);
                $table->string('domain', 255);
                $table->string('admin_url', 255);
                $table->string('cms_type', 255);
                $table->string('clickup_list_id', 20)->nullable();
                $table->integer('accelo_contract_id')->nullable();
                $table->timestamps();
            });

            Schema::table('sites', function($table) {
                $table->foreign('user_id')->references('id')->on('users');
            });
        }
    }
    public function down(): void
    {
        Schema::dropIfExists('sites');
    }
};
