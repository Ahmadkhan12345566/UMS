<?php
/**
 * Created by PhpStorm.
 * User: Mussawar Ahamd
 * Date: 20/8/2019
 * Time: 2:02 PM
 */
class Migration_cities extends CI_Migration {

    /**
     * Create table.
     */
    public function up() {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'BIGINT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => 150,
            ),
            'shortname' =>array (
                'type' => 'VARCHAR',
                'constraint' => 128,
            ),
            'country_id' =>array (
                'type' => 'BIGINT',
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
        $this->dbforge->create_table('cities');
    }

    /**
     * Drop table.
     */
    public function down() {
        $this->dbforge->drop_table('cities');
    }

}