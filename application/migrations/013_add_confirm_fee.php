<?php
/**
 * Created by PhpStorm.
 * User: Mussawar Ahamd
 * Date: 8/8/2019
 * Time: 12:02 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_confirm_fee extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'bankname' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'branchcode' => array(
                'type' => 'VARCHAR',
                'constraint' => '100'
            ),
            'bankaddress' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'depositdate' => array(
                'type' => 'DATE',
            ),
            'challanfileupload' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => TRUE,
            ),
            'ntsbankname' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'ntsbranchcode' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'ntsbankaddress' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'ntsdepositdate' => array(
                'type' => 'DATE',
            ),
            'ntschallanfileupload' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => TRUE,
            ),
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('confirm_fee');
    }

    public function down()
    {
        $this->dbforge->drop_table('confirm_fee');
    }
}