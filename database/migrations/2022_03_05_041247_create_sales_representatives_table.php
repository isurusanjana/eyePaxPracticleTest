<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesRepresentativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE TABLE IF NOT EXISTS `sales_representatives` (
            `id` int NOT NULL AUTO_INCREMENT,
            `full_name` varchar(200) NOT NULL,
            `email` varchar(200) NOT NULL,
            `telephone` varchar(15) NOT NULL,
            `current_route` int NOT NULL,
            `comments` text NOT NULL,
            `joined_date` date NOT NULL,
            `created_date` datetime NOT NULL,
            `last_updated_at` datetime NOT NULL,
            `last_updated_by` int NOT NULL,
            `is_deleted` enum('Y','N') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'N',
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
        Schema::dropIfExists('sales_representatives');
    }
}
