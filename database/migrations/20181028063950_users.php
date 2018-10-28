<?php

use think\migration\Migrator;
use think\migration\db\Column;

class Users extends Migrator
{
    // 
    public function up()
    {
        //create the table
        $table = $this->tale('users');
        $table->addColumn('name', 'string')
            ->addColumn('eamli', 'string')
            ->addColumn('password', 'string')
            //->addColumn('avatar', 'string', ['null' => true, 'default'=> NULL, 'comment'=>'用户头像']）
            ->addColumn('avatar', 'string', ['null' => true, 'default'=> NULL, 'comment'=>'用户头像'])
            ->addColumn('god', 'boolean', ['default'=> FALSE, 'comment'=>'管理员'])
            ->addTimestamps('create_at', 'updated_at', 'deleted_at')
            ->addIndex('eamil', ['unique'=> true])
            ->addIndex('god')
            ->create();
    }

    public function down(){
        $this->dropTable('users');
    }
}
