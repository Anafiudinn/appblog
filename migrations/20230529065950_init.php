<?php

use Phoenix\Database\Element\Index;
use Phoenix\Migration\AbstractMigration;

final class Init extends AbstractMigration
{
    protected function up(): void
    {
        $this->table('user')
        ->addColumn('id', 'integer', ['autoincrement' => true])
        ->addColumn('username', 'string')
        ->addColumn('password', 'string')
        ->addColumn('created_at', 'datetime')
        ->addColumn('update_at', 'datetime', ['null' => true])
        ->addIndex('username', Index::TYPE_UNIQUE)
         ->create();

         $this->insert('user',[
            [
                'username' => 'udin',
                'password' => '123',
                'created_at'=> date('y-m-d'),
            ]

         ]);
    }

    protected function down(): void
    {
        $this->table('user')
            ->drop();
    }
}