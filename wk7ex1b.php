<?php

use Phinx\Migration\AbstractMigration;

class MyNewMigration extends AbstractMigration
{
    public function change()
    {
        $users = $this->table('monster');
        $users->addColumn('id', 'integer', ['null' => false],'primarykey')
              ->addColumn('Name', 'varchar', ['limit' => 20], ['null' => false])
              ->addColumn('Image', 'blob', ['null' => false])
              ->addColumn('Audio', 'blob', ['null' => false])
              ->create();
    }
public function up(){
        
       $users->addColumn('id', 'integer', ['null' => false],'primarykey')
              ->addColumn('Name', 'varchar', ['limit' => 20], ['null' => false])
              ->addColumn('Image', 'blob', ['null' => false])
              ->addColumn('Audio', 'blob', ['null' => false])
              ->save();
    }

    public function down(){
         $this->dropTable(' monster ');
    }

}

?>