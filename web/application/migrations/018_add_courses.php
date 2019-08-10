<?php
/**
 * Created by PhpStorm.
 * User: Mussawar Ahamd
 * Date: 8/8/2019
 * Time: 12:52 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_courses extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'coursecode' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'coursename' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'credithours' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'coursetype' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'coursepre-requisite' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'coursesemester' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'degreename' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),

        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('courses');
    }

    public function down()
    {
        $this->dbforge->drop_table('courses');
    }
}