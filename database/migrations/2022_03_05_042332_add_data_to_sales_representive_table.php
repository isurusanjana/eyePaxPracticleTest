<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDataToSalesRepresentiveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("INSERT INTO `sales_representatives` (`id`, `full_name`, `email`, `telephone`, `current_route`, `comments`, `joined_date`, `created_date`, `last_updated_at`, `last_updated_by`, `is_deleted`, `deleted_by`) VALUES
        (1, 'Andrew Smith', 'Andrew@expo.com', '0655147147', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc venenatis nisi erat, at ultricies lorem fermentum sed. Nulla facilisi. Suspendisse magna leo, vehicula id mi ut, placerat condimentum nunc. Donec a purus sapien.', '2022-03-01', '2022-03-05 00:00:00', '2022-03-05 00:00:00', 0, 'N', 0),
        (2, 'Ben Cameran', 'cameran@expo.com', '075525258', 2, 'Cras vitae nisl id odio blandit vulputate. Ut elementum nisi non enim dapibus, et scelerisque urna lacinia. Quisque ut ultrices tellus. Maecenas condimentum mi nisi, in tempus odio suscipit at. Nunc accumsan sapien eget erat sagittis, ac auctor odio bibendum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos', '2022-03-03', '2022-03-05 09:01:26', '0000-00-00 00:00:00', 0, 'N', 0)");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sales_representive', function (Blueprint $table) {
            //
        });
    }
}
