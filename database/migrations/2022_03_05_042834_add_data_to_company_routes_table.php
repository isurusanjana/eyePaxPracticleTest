<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDataToCompanyRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("INSERT INTO `company_routes` (`id`, `name`, `location`, `description`, `created_at`, `created_by`, `last_updated_at`, `last_updated_by`, `is_deleted`, `deleted_by`) VALUES
        (1, 'Barnes Place', 'Barnes', 'Vestibulum id diam sit amet arcu auctor varius vel ut turpis. Integer elementum tempor odio, vitae vehicula turpis tincidunt vitae.', '2022-03-05 09:03:48', 1, '2022-03-05 00:00:00', 0, 'N', 0),
        (2, 'Rosmid Place', 'Rosmid', 'Nullam tortor turpis, tempus vel urna non, convallis eleifend eros. Nullam rhoncus, enim vitae venenatis gravida, nulla erat lacinia ligula, suscipit condimentum mi diam fermentum orci. Mauris a congue ipsum, id posuere libero', '2022-03-05 00:00:00', 1, '2022-03-05 00:00:00', 0, 'N', 0)");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('company_routes', function (Blueprint $table) {
            //
        });
    }
}
