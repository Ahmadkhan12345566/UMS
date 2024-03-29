<?php
/**
 * Created by PhpStorm.
 * User: Mussawar Ahamd
 * Date: 8/8/2019
 * Time: 11:00 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_nts_details extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'BIGINT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'user_id' => array(
                'type' => 'BIGINT',
            ),
            'test_type_id' => array(
                'type' => 'INT',
            ),
            'ntsrollnumber' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'testlevel' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'obtainedmarks' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'testdate' => array(
                'type' => 'date',
            ),
            'centername' => array(
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

        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('nts_details');
    }

    public function down()
    {
        $this->dbforge->drop_table('nts_details');
    }
}