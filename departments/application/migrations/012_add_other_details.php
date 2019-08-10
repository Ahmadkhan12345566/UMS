<?php
/**
 * Created by PhpStorm.
 * User: Mussawar Ahamd
 * Date: 8/8/2019
 * Time: 11:58 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_other_details extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'seats' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'transport' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'aboutums' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('other_details');
    }

    public function down()
    {
        $this->dbforge->drop_table('other_details');
    }
}