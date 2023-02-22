<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class InsertTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
	 
	 
	

 
	 
	 
	 
      
		
		
		public function up()
    {
       $table = $this->table('posts');

        // inserting only one row
        $singleRow = [
            'title'    => 'test data two',
			'body'  => 'this is a test dadat description',
            'cover_image'  => 'In Progress',
			'created_at'=> '2022-12-31 23:59:59',
			'updated_at' =>'2022-12-31 23:59:59'
        ];

        $table->insert($singleRow)->saveData();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {

    }

       
}
