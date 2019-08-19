<?php
/**
 * Created by PhpStorm.
 * User: Mussawar Ahamd
 * Date: 8/8/2019
 * Time: 11:31 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_work_history extends CI_Migration {

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
            'selfemployed' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'employer' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'jobtitle' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'formdate' => array(
                'type' => 'DATE',
            ),
            'currentlyworking' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'todate' => array(
                'type' => 'DATE',
            ),
            'addressOrg' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'phone' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'description' => array(
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
        $this->dbforge->create_table('work_history');
    }

    public function down()
    {
        $this->dbforge->drop_table('work_history');
    }
}