<?php
/**
 * Created by PhpStorm.
 * User: Mussawar Ahamd
 * Date: 8/8/2019
 * Time: 11:00 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_education_details extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'BIGINT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),

            'education_level_id' => array(
                'type' =>'BIGINT',
            ),

            'degree_id' => array(
                'type' =>'BIGINT',
            ),

            'user_id' => array(
                'type' => 'BIGINT',
            ),

            'passingyears' => array(
                'type' => 'YEAR',

            ),
            'totalmarks' => array(
                'type' => 'FLOAT',
            ),
            'obtainmarks' => array(
                'type' => 'FLOAT',
            ),

            'board_id' => array(
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
            'deleted_at' => array(
                'type' => 'timestamp',
                'default' => NULL,
            ),

        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('education_details');
    }

    public function down()
    {
        $this->dbforge->drop_table('education_details');
    }
}