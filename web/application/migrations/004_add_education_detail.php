<?php
/**
 * Created by PhpStorm.
 * User: Mussawar Ahamd
 * Date: 8/8/2019
 * Time: 11:00 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_education_detail extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),

        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('education_detail');
    }

    public function down()
    {
        $this->dbforge->drop_table('education_detail');
    }
}