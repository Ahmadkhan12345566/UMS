<?php
/**
 * Created by PhpStorm.
 * User: Mussawar Ahamd
 * Date: 7/16/2019
 * Time: 3:50 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_address extends CI_Migration {

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
            'permanentline1' => array(
                'type' => 'VARCHAR',
                'constraint' => '500',
            ),
            'permanentline2' => array(
                'type' => 'VARCHAR',
                'constraint' => '500',
            ),
            'permanentLocation' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'permanentphone' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'mailingAddressline1' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'mailingAddressline2' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'mailingcity' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'mailingphone' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'guardianAddressline1' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'guardianAddressline2' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'guardiancity' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'guardianphone' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'guardianmobile' => array(
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
        $this->dbforge->create_table('address');
    }

    public function down()
    {
        $this->dbforge->drop_table('address');
    }
}