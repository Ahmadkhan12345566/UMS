<?php
/**
 * Migration_users Class
 *
 * @author       Firoz Ahmad Likhon <likh.deshi@gmail.com>
 * @purpose      Migration.
 */
class Migration_users extends CI_Migration {

    /**
     * Create table.
     */
    public function up() {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => 128,
            ),
            'username' =>array (
                'type' => 'VARCHAR',
                'constraint' => 128,
            ),
            'password' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
            ),
            'status' => array(
                'type' => 'TINYINT',
                'constraint' => 1,
                'default' => 1
            ),
            'created_at' => array(
                'type' => 'timestamp',
                'default' => NULL,
            ),
            'updated_at' =>array (
                'type' => 'timestamp',
                'default' => NULL,
            ),
            'deleted_at' => array(
                'type' => 'timestamp',
                'default' => NULL,
            ),
        ));

        $this->dbforge->add_key('id', true);
        $this->dbforge->create_table('users');
    }

    /**
     * Drop table.
     */
    public function down() {
        $this->dbforge->drop_table('users');
    }

}