<?php
/**
 * Created by PhpStorm.
 * User: Mussawar Ahamd
 * Date: 7/16/2019
 * Time: 4:18 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_photo_upload extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'studentphoto' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => TRUE,
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
        $this->dbforge->create_table('photo_upload');
    }

    public function down()
    {
        $this->dbforge->drop_table('photo_upload');
    }
}
