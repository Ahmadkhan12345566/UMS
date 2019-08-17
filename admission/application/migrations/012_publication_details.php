<?php
/**
 * Created by PhpStorm.
 * User: Mussawar Ahamd
 * Date: 8/8/2019
 * Time: 11:40 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_publication_details extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'title' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'jobtype' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'level' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'firstauthor' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'secondauthor' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'thirdauthor' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'publisher' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'year' => array(
                'type' => 'DATE',
            ),
            'volume' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'chapters' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'pages' => array(
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
        $this->dbforge->create_table('publication_details');
    }

    public function down()
    {
        $this->dbforge->drop_table('publication_details');
    }
}