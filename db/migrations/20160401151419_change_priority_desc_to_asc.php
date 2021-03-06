<?php

use Phinx\Migration\AbstractMigration;

class ChangePriorityDescToAsc extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function up()
    {
        // Update dependent
        $queryPath = __DIR__ . "/moderation_stack_grouped_priority_asc.sql";
        $query = file_get_contents($queryPath);
        $this->query($query);
    }
    public function down()
    {
        // Update dependent
        $queryPath = __DIR__ . "/moderation_stack_grouped_priority_desc.sql";
        $query = file_get_contents($queryPath);
        $this->query($query);
    }
}
