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
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'nts' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'ntsrollnumber' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'testtype' => array(
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
            'ntscenter' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'allntsrollnumber' => array(
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