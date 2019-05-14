<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
	public $options;
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {	
		$this->options = array('textbook','dictionary','encyclopedia');
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
			$table->string('title');
            $table->string('author');
            $table->string('publisher');
            $table->enum('type',$this->options );
            $table->string('year');   
            $table->integer('pages');  
			$table->decimal('price',8,2); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
