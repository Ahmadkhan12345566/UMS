<?php
/**
 * Created by PhpStorm.
 * User: Mussawar Ahamd
 * Date: 17/8/2019
 * Time: 12:43 pM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_subjects extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'BIGINT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),

            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),

            'shortname' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),

            'degree' => array(
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
        $this->dbforge->create_table('subjects');
    }

    public function down()
    {
        $this->dbforge->drop_table('subjects');
    }
}