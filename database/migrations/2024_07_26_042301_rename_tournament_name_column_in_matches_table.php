<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameTournamentNameColumnInMatchesTable extends Migration
{
    public function up()
    {
        Schema::table('matches', function (Blueprint $table) {
            // カラム名の変更
            $table->renameColumn('tornament name', 'tournament_name');
            $table->renameColumn('get point' , 'get_point');
            $table->renameColumn('lost point' , 'lost_point');
        });
    }

    public function down()
    {
        Schema::table('matches', function (Blueprint $table) {
            // ロールバック時に元のカラム名に戻す
            $table->renameColumn('tornament_name', 'tournament name');
            $table->renameColumn('get point' , 'get_point');
            $table->renameColumn('lost point' , 'lost_point');
        });
    }
}
