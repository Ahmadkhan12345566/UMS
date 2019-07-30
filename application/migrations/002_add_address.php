<?php
/**
 * Created by PhpStorm.
 * User: Mussawar Ahamd
 * Date: 7/16/2019
 * Time: 3:50 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_address extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'Permanentline1' => array(
                'type' => 'VARCHAR',
                'constraint' => '500',
            ),
            'Permanentline2' => array(
                'type' => 'VARCHAR',
                'constraint' => '500',
            ),
            'PermanentLocation' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'Permanentphone' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'MailingAddressline1' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'MailingAddressline2' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'Mailingcity' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'Mailingphone' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'GuardianAddressline1' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'GuardianAddressline2' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'Guardiancity' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'Guardianphone' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'Guardianmobile' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),

        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('address');
    }

    public function down()
    {
        $this->dbforge->drop_table('address');
    }
}