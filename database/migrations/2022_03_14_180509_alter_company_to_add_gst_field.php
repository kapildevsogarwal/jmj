<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterCompanyToAddGstField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('company_info', function (Blueprint $table) {
             $table->string('gst')->nullable()->after('type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::table('company_info', function (Blueprint $table) {
            if (Schema::hasColumn('gst')) {
				Schema::table('company_info', function (Blueprint $table) {
					$table->dropColumn('gst');
				});
			}
        });
    }
}
