<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Task', function (Blueprint $table) {
            $table
                ->bigInteger('user_id')
                ->unsigned()
                ->after('is_completed');
            $table
                ->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->dropColumn('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Task', function (Blueprint $table) {
            $table->dropColumn('user_id');
            $table->dropForeign('task_user_id_foreign');
            $table
                ->timestamp('deleted_at')
                ->nullable()
                ->after('updated_at');
        });
    }
};
