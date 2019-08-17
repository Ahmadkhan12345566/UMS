<?php
/**
 * Created by PhpStorm.
 * User: Mussawar Ahamd
 * Date: 7/16/2019
 * Time: 3:00 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_personal_information extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'fullname' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'fathername' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'dob' => array(
                'type' => 'DATE',
            ),
            'gender' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'nationality' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'domicile' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'cnic' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'fcnic' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'mobnumbers' => array(
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
        $this->dbforge->create_table('personal_information');
    }

    public function down()
    {
        $this->dbforge->drop_table('personal_information');
    }
}