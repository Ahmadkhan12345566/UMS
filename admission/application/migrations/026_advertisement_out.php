<?php
/**
 * Created by PhpStorm.
 * User: Mussawar Ahamd
 * Date: 20/8/2019
 * Time: 06:04 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_advertisement_out extends CI_Migration {

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
            'advertisement_id' => array(
                'type' => 'BIGINT',
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
        $this->dbforge->create_table('advertisement_out');
    }

    public function down()
    {
        $this->dbforge->drop_table('advertisement_out');
    }
}