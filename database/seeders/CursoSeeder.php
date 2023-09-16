<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Curso;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { {
            $curso = new Curso();
            $curso->name = "Laravel";
            $curso->descripcion = "El mejor framework de Php";
            $curso->categoria = "Desarrollo web";

            if ($curso->save()) {
                // Los datos se guardaron exitosamente
                // Puedes ejecutar código adicional aquí si es necesario
                dump("Los datos se guardaron correctamente.");
            } else {
                // Hubo un error al guardar los datos
                // Puedes manejar el error de acuerdo a tus necesidades
                dump("Error al guardar los datos.");
            }

            // Puedes seguir agregando más registros y condiciones if según sea necesario.

        } {
            $curso = new Curso();
            $curso->name = "Laravel";
            $curso->descripcion = "El mejor framework de Php";
            $curso->categoria = "Desarrollo web";

            if ($curso->save()) {
                // Los datos se guardaron exitosamente
                // Puedes ejecutar código adicional aquí si es necesario
                dump("Los datos se guardaron correctamente.");
            } else {
                // Hubo un error al guardar los datos
                // Puedes manejar el error de acuerdo a tus necesidades
                dump("Error al guardar los datos.");
            }

            // Puedes seguir agregando más registros y condiciones if según sea necesario.

        } {
            $curso = new Curso();
            $curso->name = "Laravel";
            $curso->descripcion = "El mejor framework de Php";
            $curso->categoria = "Desarrollo web";

            if ($curso->save()) {
                // Los datos se guardaron exitosamente
                // Puedes ejecutar código adicional aquí si es necesario
                dump("Los datos se guardaron correctamente.");
            } else {
                // Hubo un error al guardar los datos
                // Puedes manejar el error de acuerdo a tus necesidades
                dump("Error al guardar los datos.");
            }

            // Puedes seguir agregando más registros y condiciones if según sea necesario.

        }
    }
}
