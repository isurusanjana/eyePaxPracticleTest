<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE TABLE IF NOT EXISTS `company_routes` (
            `id` int NOT NULL AUTO_INCREMENT,
            `name` varchar(200) NOT NULL,
            `location` varchar(200) NOT NULL,
            `description` text NOT NULL,
            `created_at` datetime NOT NULL,
            `created_by` int NOT NULL,
            `last_updated_at` datetime NOT NULL,
            `last_updated_by` int NOT NULL,
            `is_deleted` enum('Y','N') NOT NULL DEFAULT 'N',
            `deleted_by` int NOT NULL,
            PRIMARY KEY (`id`)
          ) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_routes');
    }
}
