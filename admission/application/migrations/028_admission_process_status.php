<?php
/**
 * Created by PhpStorm.
 * User: Mussawar Ahamd
 * Date: 21/8/2019
 * Time: 10:40 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_admission_process_status extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'BIGINT',
                'unsigned' => True,
                'auto_increment' => True,
            ),
            'user_id' => array(
                'type' => 'BIGINT',
            ),
            'instruction' => array(
                'type' => 'BOOLEAN',
                'default' => false,
            ),
            'pinformation' => array(
                'type' => 'BOOLEAN',
                'default' => false,
            ),
            'address' => array(
                'type' => 'BOOLEAN',
                'default' => false,
            ),
            'pupload' => array(
                'type' => 'BOOLEAN',
                'default' => false,
            ),
            'edetails' => array(
                'type' => 'BOOLEAN',
                'default' => false,
            ),
            'ntsdetails' => array(
                'type' => 'BOOLEAN',
                'default' => false,
            ),
            'prochoices' => array(
                'type' => 'BOOLEAN',
                'default' => false,
            ),
            'pubdetails' => array(
                'type' => 'BOOLEAN',
                'default' => false,
            ),
            'rinterests' => array(
                'type' => 'BOOLEAN',
                'default' => false,
            ),
            'workhistory' => array(
                'type' => 'BOOLEAN',
                'default' => false,
            ),
            'othdetails' => array(
                'type' => 'BOOLEAN',
                'default' => false,
            ),
            'fdetails' => array(
                'type' => 'BOOLEAN',
                'default' => false,
            ),
            'docupload' => array(
                'type' => 'BOOLEAN',
                'default' => false,
            ),
            'confirmfee' => array(
                'type' => 'BOOLEAN',
                'default' => false,
            ),
            'subapplication' => array(
                'type' => 'BOOLEAN',
                'default' => false,
            ),
            'status' => array(
                'type' => 'BOOLEAN',
                'default' => false,
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

        $this->dbforge->add_key('id', True);
        $this->dbforge->create_table('admission_process_status');
    }

    public function down ()
    {
        $this->dbforge->drop_table('admission_process_status');
    }
}