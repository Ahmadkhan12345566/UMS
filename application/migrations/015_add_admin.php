<?php
/**
 * Created by PhpStorm.
 * User: Mussawar Ahamd
 * Date: 8/8/2019
 * Time: 12:30 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_admin extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'fname' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'lname' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'homeaddress' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'city' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'country' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'zipcode' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'aboutme' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),

        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('admin');
    }

    public function down()
    {
        $this->dbforge->drop_table('admin');
    }
}