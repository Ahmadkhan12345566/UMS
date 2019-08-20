<?php
/**
 * Created by PhpStorm.
 * User: Mussawar Ahamd
 * Date: 7/16/2019
 * Time: 3:50 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_address extends CI_Migration {

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
            'address1' => array(
                'type' => 'VARCHAR',
                'constraint' => '500',
            ),
            'address2' => array(
                'type' => 'VARCHAR',
                'constraint' => '500',
            ),
            'phone' => array(
                'type' => 'VARCHAR',
                'constraint' => '500',
            ),
            'city_id' => array(
                'type' => 'BIGINT',
            ),
            'address_type_id' => array(
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
        $this->dbforge->create_table('address');
    }

    public function down()
    {
        $this->dbforge->drop_table('address');
    }
}




//class Migration_address extends CI_Migration {
//
//    public function up()
//    {
//        $this->dbforge->add_field(array(
//            'id' => array(
//                'type' => 'BIGINT',
//                'unsigned' => TRUE,
//                'auto_increment' => TRUE
//            ),
//            'user_id' => array(
//                'type' => 'BIGINT',
//            ),
//            'pline1' => array(
//                'type' => 'VARCHAR',
//                'constraint' => '500',
//            ),
//            'pline2' => array(
//                'type' => 'VARCHAR',
//                'constraint' => '500',
//            ),
//            'city_id' => array(
//                'type' => 'BIGINT',
//            ),
//            'pphone' => array(
//                'type' => 'VARCHAR',
//                'constraint' => '100',
//            ),
//            'mline1' => array(
//                'type' => 'VARCHAR',
//                'constraint' => '100',
//            ),
//            'mline2' => array(
//                'type' => 'VARCHAR',
//                'constraint' => '100',
//            ),
//            'city_id' => array(
//                'type' => 'BIGINT',
//            ),
//            'mphone' => array(
//                'type' => 'VARCHAR',
//                'constraint' => '100',
//            ),
//            'gline1' => array(
//                'type' => 'VARCHAR',
//                'constraint' => '100',
//            ),
//            'gline2' => array(
//                'type' => 'VARCHAR',
//                'constraint' => '100',
//            ),
//            'city_id' => array(
//                'type' => 'BIGINT',
//            ),
//            'gmobile' => array(
//                'type' => 'VARCHAR',
//                'constraint' => '100',
//            ),
//            'created_at' => array(
//                'type' => 'timestamp',
//                'default' => NULL,
//            ),
//            'updated_at' =>array (
//                'type' => 'timestamp',
//                'default' => NULL,
//            ),
//
//        ));
//        $this->dbforge->add_key('id', TRUE);
//        $this->dbforge->create_table('address');
//    }
//
//    public function down()
//    {
//        $this->dbforge->drop_table('address');
//    }
//}