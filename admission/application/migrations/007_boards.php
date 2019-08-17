<?php
/**
 * Created by PhpStorm.
 * User: Mussawar Ahamd
 * Date: 17/8/2019
 * Time: 12:44 pM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_boards extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'BIGINT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),

            'boardname' => array(
                'type' => 'VARCHAR',
                'constraint' => '500',
            ),

            'shortname' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
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
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('boards');
    }

    public function down()
    {
        $this->dbforge->drop_table('boards');
    }
}