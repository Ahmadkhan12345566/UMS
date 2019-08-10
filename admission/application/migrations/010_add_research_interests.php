<?php
/**
 * Created by PhpStorm.
 * User: Mussawar Ahamd
 * Date: 8/8/2019
 * Time: 11:43 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_research_interests extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'researchIn1' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'researchIn2' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'researchIn3' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),

        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('research_interests');
    }

    public function down()
    {
        $this->dbforge->drop_table('research_interests');
    }
}