<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seedSeervices = [
            [
                'id' => 1,
                'service_name' => "Registro de Usuario",
                'description' => "Permite enviar dar de alta un usuario al servicio de Autenticación",
                'method' => 'POST',
                'in_route' => 'api/v1/auth/register',
                'out_route' => '#'
            ],
            [
                'id' => 2,
                'service_name' => "Login de Usuario",
                'description' => "Permite validar las credenciales de un usuario",
                'method' => 'POST',
                'in_route' => 'api/v1/auth/login',
                'out_route' => '#'
            ],
            [
                'id' => 3,
                'service_name' => "Renovación de Token",
                'description' => "Permite renovar el token de un usuario con sesión iniciada",
                'method' => 'POST',
                'in_route' => 'api/v1/auth/refresh',
                'out_route' => '#'
            ],
            [
                'id' => 4,
                'service_name' => "Desconexión de Usuario",
                'description' => "Expira el token asignado al usuario",
                'method' => 'POST',
                'in_route' => 'api/v1/auth/logout',
                'out_route' => '#'
            ],
            [
                'id' => 5,
                'service_name' => "Check Token",
                'description' => "Permite recuperar los datos de un usuario con el token dado, verificando su validez",
                'method' => 'POST',
                'in_route' => 'api/v1/auth/me',
                'out_route' => '#'
            ],
            [
                'id' => 6,
                'service_name' => "Obtener Usuario",
                'description' => "Permite obtener un usuario a partir del id solicitado",
                'method' => 'POST',
                'in_route' => 'api/v1/auth/getUserById',
                'out_route' => '#'
            ],
            [
                'id' => 7,
                'service_name' => "Obtener Imagen de Perro Aleatoria",
                'description' => "Ejemplo de Ruta de Entrada con uso de parametros en URL.",
                'method' => 'GET',
                'in_route' => 'dogs/[:alpha:]',
                'out_route' => 'https://dog.ceo/api/breeds/image/random'
            ]
        ];
        foreach ($seedSeervices as $seedSeervice) {
            $seedSeervice = Service::create($seedSeervice);
        }
    }
}