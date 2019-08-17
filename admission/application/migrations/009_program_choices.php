<?php
/**
 * Created by PhpStorm.
 * User: Mussawar Ahamd
 * Date: 8/8/2019
 * Time: 11:00 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_program_choices extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'subject1' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'subject2' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'subject3' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'subject4' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'subject5' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'subject6' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'subject7' => array(
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
        $this->dbforge->create_table('program_choices');
    }

    public function down()
    {
        $this->dbforge->drop_table('program_choices');
    }
}
