<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTitlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        if(!Schema::hasTable('titles')) {
            DB::statement('CREATE TABLE titles (
                             id int(6) PRIMARY KEY AUTO_INCREMENT NOT NULL,
                             department_id int(6) NOT NULL,
                             title VARCHAR(50) NOT NULL,
                             billing_rate DECIMAL(5,2),
                             created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
                             updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                             FOREIGN KEY(department_id) REFERENCES Departments(id)
            )');
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('titles');
    }
}
