<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        App\User::create([
            'name' => 'Alexander Briones',
            'email' => 'alexanderbvart@gmail.com',
            'password' => bcrypt('alexx123'), 
        ]);

        //responsabilidades
        App\Reponsibility::create([            'type' => 'Responsabilidad mayor'         ]);
        App\Reponsibility::create([            'type' => 'Participacion mayor en el proceso'         ]);
        App\Reponsibility::create([            'type' => 'Alguna participacion en el proceso'         ]);
        App\Reponsibility::create([            'type' => 'Ninguna participacion en el procesor'         ]);



        //areas y puestos de trabajo
        App\Area::create([            'name' => 'Gerencia'         ]);
        App\Jobtitle::create([            
            'name'          =>      'Gerente General',
            'area_id'       =>      1
        ]);
        
        App\Area::create([            'name' => 'Compras'         ]);
        App\Jobtitle::create([            
            'name'          =>      'Responsable de compras',
            'area_id'       =>      2
        ]);

        App\Area::create([            'name' => 'Logística'         ]);
        App\Jobtitle::create([            
            'name'          =>      'Jefe de logistica',
            'area_id'       =>      3
        ]);

        App\Area::create([            'name' => 'Producción'         ]);
        App\Jobtitle::create([            
            'name'          =>      'Jefe de Producción',
            'area_id'       =>      4
        ]);
        App\Jobtitle::create([            
            'name'          =>      'Pintor',
            'area_id'       =>      4
        ]);
        App\Jobtitle::create([            
            'name'          =>      'Soldador',
            'area_id'       =>      4
        ]);
        App\Jobtitle::create([            
            'name'          =>      'Ayudante en soldadura',
            'area_id'       =>      4
        ]);

        App\Area::create([            'name' => 'Ventas'         ]);
        App\Jobtitle::create([            
            'name'          =>      'Responsable de ventas',
            'area_id'       =>      5
        ]);

        App\Area::create([            'name' => 'Contabilidad y Finanzas'         ]);
        App\Jobtitle::create([            
            'name'          =>      'Contador',
            'area_id'       =>      6
        ]);


        App\Area::create([            'name' => 'RR.HH.'         ]);
        App\Jobtitle::create([            
            'name'          =>      'Director de Recursos Humanos',
            'area_id'       =>      7
        ]);




        //procesos y subprocesos
        App\Processe::create([      'name' => 'Administración de la empresa'         ]); //1
        App\Subprocesse::create([            
            'name'          =>      'Gestión de la empresa',
            'processe_id'       =>      1
        ]);
        App\Subprocesse::create([            
            'name'          =>      'Planeación operativa de la empresa',
            'processe_id'       =>      1
        ]);
        App\Subprocesse::create([            
            'name'          =>      'Diagnostico empresarial',
            'processe_id'       =>      1
        ]);

        App\Processe::create([      'name' => 'Gestión de calidad'         ]); //2
        App\Subprocesse::create([            
            'name'          =>      'Evaluación de los proyectos',
            'processe_id'       =>      2
        ]);
        App\Subprocesse::create([            
            'name'          =>      'Verificar calidad de los productos',
            'processe_id'       =>      2
        ]);
        App\Subprocesse::create([            
            'name'          =>      'Verificar calidad de atención al cliente',
            'processe_id'       =>      2
        ]);

        App\Processe::create([      'name' => 'Gestión financiera'         ]); //3
        App\Subprocesse::create([            
            'name'          =>      'Elaboración de libros contables',
            'processe_id'       =>      3
        ]);
        App\Subprocesse::create([            
            'name'          =>      'Elaboración del presupuesto',
            'processe_id'       =>      3
        ]);
        App\Subprocesse::create([            
            'name'          =>      'Gestión de caja',
            'processe_id'       =>      3
        ]);

        App\Processe::create([      'name' => 'Gestión de ventas'         ]); //4
        App\Subprocesse::create([            
            'name'          =>      'Proceso de venta',
            'processe_id'       =>      4
        ]);
        App\Subprocesse::create([            
            'name'          =>      'Marketing',
            'processe_id'       =>      4
        ]);
        App\Subprocesse::create([            
            'name'          =>      'Facturación',
            'processe_id'       =>      4
        ]);

        App\Processe::create([      'name' => 'Gestión comercial'         ]); //5
        App\Subprocesse::create([            
            'name'          =>      'Proceso de inventario y almacén',
            'processe_id'       =>      5
        ]);
        App\Subprocesse::create([            
            'name'          =>      'Gestión de compras',
            'processe_id'       =>      5
        ]);

        App\Processe::create([      'name' => 'Gestión de la producción'         ]); //6
        App\Subprocesse::create([            
            'name'          =>      'Preparación de las estructuras metálicas',
            'processe_id'       =>      6
        ]);
        App\Subprocesse::create([            
            'name'          =>      'Gestión de inventarios inicial y final',
            'processe_id'       =>      6
        ]);
        
        App\Processe::create([      'name' => 'Gestión de clientes'         ]); //7
        App\Subprocesse::create([            
            'name'          =>      'Gestión de requerimientos',
            'processe_id'       =>      7
        ]);
        App\Subprocesse::create([            
            'name'          =>      'Gestión de datos del cliente',
            'processe_id'       =>      7
        ]);
        App\Subprocesse::create([            
            'name'          =>      'Atención de reclamos',
            'processe_id'       =>      7
        ]);
        
        App\Processe::create([      'name' => 'Seguridad industrial'         ]); //8
        App\Subprocesse::create([            
            'name'          =>      'Aplicación del plan de gestión y prevención de riesgos laborales',
            'processe_id'       =>      8
        ]);
        App\Subprocesse::create([            
            'name'          =>      'Implementación de un Sistema de Salud Ocupacional',
            'processe_id'       =>      8
        ]);
        App\Subprocesse::create([            
            'name'          =>      'Investigación de incidentes y accidentes',
            'processe_id'       =>      8
        ]);
        App\Subprocesse::create([            
            'name'          =>      'Plan de contingencia',
            'processe_id'       =>      8
        ]);
        
        App\Processe::create([      'name' => 'Logística'         ]); //9
        App\Subprocesse::create([            
            'name'          =>      'Gestión de los productos y servicios de la empresa',
            'processe_id'       =>      9
        ]);
        App\Subprocesse::create([            
            'name'          =>      'Gestión de compras de materiales',
            'processe_id'       =>      9
        ]);
        App\Subprocesse::create([            
            'name'          =>      'Gestión de stock',
            'processe_id'       =>      9
        ]);
        App\Subprocesse::create([            
            'name'          =>      'Transporte de bienes',
            'processe_id'       =>      9
        ]);
        
        App\Processe::create([      'name' => 'Gestión de trabajo humano'         ]); //10
        App\Subprocesse::create([            
            'name'          =>      'Gestión de reclutamiento y selección',
            'processe_id'       =>      10
        ]);
        App\Subprocesse::create([            
            'name'          =>      'Remuneración del empleado y administración de beneficios',
            'processe_id'       =>      10
        ]);
        App\Subprocesse::create([            
            'name'          =>      'Planificación de recursos humanos',
            'processe_id'       =>      10
        ]);
        App\Subprocesse::create([            
            'name'          =>      'Transporte de bienes',
            'processe_id'       =>      10
        ]);

 



    }
}

/* 
Gestión administrativa de personal. ...
Reclutamiento y selección de personal. ...
Formación y desarrollo profesional. ...
Relaciones laborales. ...
Prevención de riesgos laborales (PRL) ...
Evaluación del desempeño. ...
Beneficios Sociales. ...
Planificación de la plantilla. */