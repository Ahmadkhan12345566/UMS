<?php
/**
 * Created by PhpStorm.
 * User: Mussawar Ahamd
 * Date: 20/8/2019
 * Time: 3:12 PM
 */
class Migration_address_types extends CI_Migration {

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
        $this->dbforge->create_table('address_types');
    }

    /**
     * Drop table.
     */
    public function down() {
        $this->dbforge->drop_table('address_types');
    }

}