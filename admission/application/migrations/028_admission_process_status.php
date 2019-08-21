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
            'instruction' => array(
                'type' => 'BOOLEAN',
            ),
            'pinformation' => array(
                'type' => 'BOOLEAN',
            ),
            'address' => array(
                'type' => 'BOOLEAN',
            ),
            'pupload' => array(
                'type' => 'BOOLEAN',
            ),
            'edetails' => array(
                'type' => 'BOOLEAN',
            ),
            'ntsdetails' => array(
                'type' => 'BOOLEAN',
            ),
            'prochoices' => array(
                'type' => 'BOOLEAN',
            ),
            'pubdetails' => array(
                'type' => 'BOOLEAN',
            ),
            'rinterests' => array(
                'type' => 'BOOLEAN',
            ),
            'workhistory' => array(
                'type' => 'BOOLEAN',
            ),
            'othdetails' => array(
                'type' => 'BOOLEAN',
            ),
            'fdetails' => array(
                'type' => 'BOOLEAN',
            ),
            'docupload' => array(
                'type' => 'BOOLEAN',
            ),
            'confirmfee' => array(
                'type' => 'BOOLEAN',
            ),
            'subapplication' => array(
                'type' => 'BOOLEAN',
            ),
            'status' => array(
                'type' => 'BOOLEAN',
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