<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DataRowsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_rows')->delete();
        
        \DB::table('data_rows')->insert(array (
            0 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 1,
                'delete' => 0,
                'details' => '{}',
                'display_name' => 'ID',
                'edit' => 0,
                'field' => 'id',
                'id' => 1,
                'order' => 1,
                'read' => 0,
                'required' => 1,
                'type' => 'number',
            ),
            1 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 1,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'Nombre',
                'edit' => 1,
                'field' => 'name',
                'id' => 2,
                'order' => 2,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            2 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 1,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'Email',
                'edit' => 1,
                'field' => 'email',
                'id' => 3,
                'order' => 3,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            3 => 
            array (
                'add' => 1,
                'browse' => 0,
                'data_type_id' => 1,
                'delete' => 0,
                'details' => '{}',
                'display_name' => 'Contraseña',
                'edit' => 1,
                'field' => 'password',
                'id' => 4,
                'order' => 4,
                'read' => 0,
                'required' => 1,
                'type' => 'password',
            ),
            4 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 1,
                'delete' => 0,
                'details' => '{}',
                'display_name' => 'Remember Token',
                'edit' => 0,
                'field' => 'remember_token',
                'id' => 5,
                'order' => 5,
                'read' => 0,
                'required' => 0,
                'type' => 'text',
            ),
            5 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 1,
                'delete' => 0,
                'details' => '{}',
                'display_name' => 'Created At',
                'edit' => 0,
                'field' => 'created_at',
                'id' => 6,
                'order' => 6,
                'read' => 1,
                'required' => 0,
                'type' => 'timestamp',
            ),
            6 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 1,
                'delete' => 0,
                'details' => '{}',
                'display_name' => 'Updated At',
                'edit' => 0,
                'field' => 'updated_at',
                'id' => 7,
                'order' => 7,
                'read' => 0,
                'required' => 0,
                'type' => 'timestamp',
            ),
            7 => 
            array (
                'add' => 1,
                'browse' => 0,
                'data_type_id' => 1,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'Avatar',
                'edit' => 1,
                'field' => 'avatar',
                'id' => 8,
                'order' => 8,
                'read' => 1,
                'required' => 0,
                'type' => 'image',
            ),
            8 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 1,
                'delete' => 0,
                'details' => '{"model":"TCG\\\\Voyager\\\\Models\\\\Role","table":"roles","type":"belongsTo","column":"role_id","key":"id","label":"display_name","pivot_table":"roles","pivot":"0","taggable":"0"}',
                'display_name' => 'Role',
                'edit' => 1,
                'field' => 'user_belongsto_role_relationship',
                'id' => 9,
                'order' => 10,
                'read' => 1,
                'required' => 0,
                'type' => 'relationship',
            ),
            9 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 1,
                'delete' => 0,
                'details' => '{"model":"TCG\\\\Voyager\\\\Models\\\\Role","table":"roles","type":"belongsToMany","column":"id","key":"id","label":"display_name","pivot_table":"user_roles","pivot":"1","taggable":"0"}',
                'display_name' => 'Roles',
                'edit' => 1,
                'field' => 'user_belongstomany_role_relationship',
                'id' => 10,
                'order' => 11,
                'read' => 1,
                'required' => 0,
                'type' => 'relationship',
            ),
            10 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 1,
                'delete' => 0,
                'details' => '{}',
                'display_name' => 'Settings',
                'edit' => 0,
                'field' => 'settings',
                'id' => 11,
                'order' => 12,
                'read' => 0,
                'required' => 0,
                'type' => 'hidden',
            ),
            11 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 2,
                'delete' => 0,
                'details' => NULL,
                'display_name' => 'ID',
                'edit' => 0,
                'field' => 'id',
                'id' => 12,
                'order' => 1,
                'read' => 0,
                'required' => 1,
                'type' => 'number',
            ),
            12 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 2,
                'delete' => 1,
                'details' => NULL,
                'display_name' => 'Name',
                'edit' => 1,
                'field' => 'name',
                'id' => 13,
                'order' => 2,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            13 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 2,
                'delete' => 0,
                'details' => NULL,
                'display_name' => 'Created At',
                'edit' => 0,
                'field' => 'created_at',
                'id' => 14,
                'order' => 3,
                'read' => 0,
                'required' => 0,
                'type' => 'timestamp',
            ),
            14 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 2,
                'delete' => 0,
                'details' => NULL,
                'display_name' => 'Updated At',
                'edit' => 0,
                'field' => 'updated_at',
                'id' => 15,
                'order' => 4,
                'read' => 0,
                'required' => 0,
                'type' => 'timestamp',
            ),
            15 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 3,
                'delete' => 0,
                'details' => '{}',
                'display_name' => 'ID',
                'edit' => 0,
                'field' => 'id',
                'id' => 16,
                'order' => 1,
                'read' => 0,
                'required' => 1,
                'type' => 'number',
            ),
            16 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 3,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'Nombre',
                'edit' => 1,
                'field' => 'name',
                'id' => 17,
                'order' => 2,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            17 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 3,
                'delete' => 0,
                'details' => '{}',
                'display_name' => 'Created At',
                'edit' => 0,
                'field' => 'created_at',
                'id' => 18,
                'order' => 3,
                'read' => 0,
                'required' => 0,
                'type' => 'timestamp',
            ),
            18 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 3,
                'delete' => 0,
                'details' => '{}',
                'display_name' => 'Updated At',
                'edit' => 0,
                'field' => 'updated_at',
                'id' => 19,
                'order' => 4,
                'read' => 0,
                'required' => 0,
                'type' => 'timestamp',
            ),
            19 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 3,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'Display Name',
                'edit' => 1,
                'field' => 'display_name',
                'id' => 20,
                'order' => 5,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            20 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 1,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'Rol',
                'edit' => 1,
                'field' => 'role_id',
                'id' => 21,
                'order' => 9,
                'read' => 1,
                'required' => 0,
                'type' => 'text',
            ),
            21 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 9,
                'delete' => 0,
                'details' => '{}',
                'display_name' => 'Id',
                'edit' => 0,
                'field' => 'id',
                'id' => 33,
                'order' => 1,
                'read' => 0,
                'required' => 1,
                'type' => 'text',
            ),
            22 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 9,
                'delete' => 1,
                'details' => '{"display":{"width":6},"validation":{"rule":"required"}}',
                'display_name' => 'Carnet de Identidad',
                'edit' => 1,
                'field' => 'ci',
                'id' => 36,
                'order' => 4,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            23 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 9,
                'delete' => 1,
                'details' => '{"display":{"width":6}}',
                'display_name' => 'Email',
                'edit' => 1,
                'field' => 'email',
                'id' => 37,
                'order' => 5,
                'read' => 1,
                'required' => 0,
                'type' => 'text',
            ),
            24 => 
            array (
                'add' => 1,
                'browse' => 0,
                'data_type_id' => 9,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'Numero de telefono',
                'edit' => 1,
                'field' => 'phone_number',
                'id' => 38,
                'order' => 6,
                'read' => 1,
                'required' => 0,
                'type' => 'text',
            ),
            25 => 
            array (
                'add' => 1,
                'browse' => 0,
                'data_type_id' => 9,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'Fecha de nacimiento',
                'edit' => 1,
                'field' => 'date_of_birth',
                'id' => 39,
                'order' => 7,
                'read' => 1,
                'required' => 0,
                'type' => 'date',
            ),
            26 => 
            array (
                'add' => 1,
                'browse' => 0,
                'data_type_id' => 9,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'Dirección',
                'edit' => 1,
                'field' => 'addres',
                'id' => 40,
                'order' => 8,
                'read' => 1,
                'required' => 0,
                'type' => 'text_area',
            ),
            27 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 9,
                'delete' => 0,
                'details' => '{}',
                'display_name' => 'Created At',
                'edit' => 0,
                'field' => 'created_at',
                'id' => 41,
                'order' => 9,
                'read' => 0,
                'required' => 0,
                'type' => 'timestamp',
            ),
            28 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 9,
                'delete' => 0,
                'details' => '{}',
                'display_name' => 'Updated At',
                'edit' => 0,
                'field' => 'updated_at',
                'id' => 42,
                'order' => 10,
                'read' => 0,
                'required' => 0,
                'type' => 'timestamp',
            ),
            29 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 9,
                'delete' => 0,
                'details' => '{}',
                'display_name' => 'Deleted At',
                'edit' => 0,
                'field' => 'deleted_at',
                'id' => 43,
                'order' => 11,
                'read' => 0,
                'required' => 0,
                'type' => 'timestamp',
            ),
            30 => 
            array (
                'add' => 1,
                'browse' => 0,
                'data_type_id' => 1,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'Email Verified At',
                'edit' => 1,
                'field' => 'email_verified_at',
                'id' => 44,
                'order' => 6,
                'read' => 1,
                'required' => 0,
                'type' => 'timestamp',
            ),
            31 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 10,
                'delete' => 0,
                'details' => '{}',
                'display_name' => 'Id',
                'edit' => 0,
                'field' => 'id',
                'id' => 45,
                'order' => 1,
                'read' => 0,
                'required' => 1,
                'type' => 'text',
            ),
            32 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 10,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'Nombre del curso',
                'edit' => 1,
                'field' => 'course_name',
                'id' => 46,
                'order' => 2,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            33 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 10,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'Descripción',
                'edit' => 1,
                'field' => 'course_description',
                'id' => 47,
                'order' => 3,
                'read' => 1,
                'required' => 1,
                'type' => 'text_area',
            ),
            34 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 10,
                'delete' => 1,
                'details' => '{"display":{"width":6}}',
                'display_name' => 'Fecha de inicio',
                'edit' => 1,
                'field' => 'start_date',
                'id' => 48,
                'order' => 4,
                'read' => 1,
                'required' => 0,
                'type' => 'date',
            ),
            35 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 10,
                'delete' => 1,
                'details' => '{"display":{"width":6}}',
                'display_name' => 'Fecha Finalización',
                'edit' => 1,
                'field' => 'end_date',
                'id' => 49,
                'order' => 5,
                'read' => 1,
                'required' => 0,
                'type' => 'date',
            ),
            36 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 10,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'Fecha de emisión del certificado',
                'edit' => 0,
                'field' => 'certificate_date',
                'id' => 50,
                'order' => 6,
                'read' => 1,
                'required' => 0,
                'type' => 'date',
            ),
            37 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 10,
                'delete' => 0,
                'details' => '{}',
                'display_name' => 'Imagen del certificado',
                'edit' => 0,
                'field' => 'img_certificate',
                'id' => 51,
                'order' => 7,
                'read' => 1,
                'required' => 0,
                'type' => 'image',
            ),
            38 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 10,
                'delete' => 0,
                'details' => '{"display":{"width":6}}',
                'display_name' => 'Posicion X',
                'edit' => 0,
                'field' => 'x',
                'id' => 52,
                'order' => 8,
                'read' => 0,
                'required' => 0,
                'type' => 'number',
            ),
            39 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 10,
                'delete' => 0,
                'details' => '{"display":{"width":6}}',
                'display_name' => 'Posicion Y',
                'edit' => 0,
                'field' => 'y',
                'id' => 53,
                'order' => 9,
                'read' => 0,
                'required' => 0,
                'type' => 'number',
            ),
            40 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 10,
                'delete' => 0,
                'details' => '{}',
                'display_name' => 'Created At',
                'edit' => 0,
                'field' => 'created_at',
                'id' => 54,
                'order' => 10,
                'read' => 0,
                'required' => 0,
                'type' => 'timestamp',
            ),
            41 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 10,
                'delete' => 0,
                'details' => '{}',
                'display_name' => 'Updated At',
                'edit' => 0,
                'field' => 'updated_at',
                'id' => 55,
                'order' => 11,
                'read' => 0,
                'required' => 0,
                'type' => 'timestamp',
            ),
            42 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 10,
                'delete' => 0,
                'details' => '{}',
                'display_name' => 'Deleted At',
                'edit' => 0,
                'field' => 'deleted_at',
                'id' => 56,
                'order' => 12,
                'read' => 0,
                'required' => 0,
                'type' => 'timestamp',
            ),
            43 => 
            array (
                'add' => 1,
                'browse' => 0,
                'data_type_id' => 10,
                'delete' => 1,
                'details' => '{"model":"App\\\\Models\\\\Person","table":"people","type":"belongsToMany","column":"id","key":"id","label":"full_name","pivot_table":"course_person","pivot":"1","taggable":"0"}',
                'display_name' => 'Personas',
                'edit' => 1,
                'field' => 'course_belongstomany_person_relationship',
                'id' => 57,
                'order' => 13,
                'read' => 1,
                'required' => 0,
                'type' => 'relationship',
            ),
            44 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 10,
                'delete' => 0,
                'details' => '{}',
                'display_name' => 'Tamaño Letra',
                'edit' => 0,
                'field' => 'font_size',
                'id' => 58,
                'order' => 10,
                'read' => 0,
                'required' => 0,
                'type' => 'number',
            ),
            45 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 11,
                'delete' => 0,
                'details' => '{}',
                'display_name' => 'Id',
                'edit' => 0,
                'field' => 'id',
                'id' => 59,
                'order' => 1,
                'read' => 0,
                'required' => 1,
                'type' => 'text',
            ),
            46 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 11,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'Font Name',
                'edit' => 1,
                'field' => 'font_name',
                'id' => 60,
                'order' => 2,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            47 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 11,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'Font Url',
                'edit' => 1,
                'field' => 'font_url',
                'id' => 61,
                'order' => 3,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            48 => 
            array (
                'add' => 0,
                'browse' => 1,
                'data_type_id' => 11,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'Created At',
                'edit' => 1,
                'field' => 'created_at',
                'id' => 62,
                'order' => 4,
                'read' => 1,
                'required' => 0,
                'type' => 'timestamp',
            ),
            49 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 11,
                'delete' => 0,
                'details' => '{}',
                'display_name' => 'Updated At',
                'edit' => 0,
                'field' => 'updated_at',
                'id' => 63,
                'order' => 5,
                'read' => 0,
                'required' => 0,
                'type' => 'timestamp',
            ),
            50 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 10,
                'delete' => 0,
                'details' => '{}',
                'display_name' => 'Font Id',
                'edit' => 0,
                'field' => 'font_id',
                'id' => 64,
                'order' => 2,
                'read' => 0,
                'required' => 0,
                'type' => 'text',
            ),
            51 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 9,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'Nombre Completo',
                'edit' => 1,
                'field' => 'full_name',
                'id' => 65,
                'order' => 2,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            52 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 10,
                'delete' => 0,
                'details' => '{}',
                'display_name' => 'Certificate Delivered',
                'edit' => 0,
                'field' => 'certificate_delivered',
                'id' => 66,
                'order' => 15,
                'read' => 0,
                'required' => 1,
                'type' => 'text',
            ),
        ));
        
        
    }
}