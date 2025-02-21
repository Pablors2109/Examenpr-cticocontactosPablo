<?php

namespace Formacom\controllers;

use Formacom\Core\Controller;
use Formacom\models\Contacto;
use Exception;


class ContactController extends Controller
{
    public function index(...$params)
    {
        $contactos = Contacto::all();
        $this->view('home', $contactos);
    }
    public function nuevo()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            try {
                Contacto::create([
                    'nombre' => $_POST['nombre'],
                    'telefono' => $_POST['telefono'],
                    'email' => $_POST['email'],
                    'direccion' => $_POST['direccion']
                ]);
                header("Location: " . BASE_URL);
                exit();
            } catch (Exception $e) {
                echo "Error al agregar el contacto: " . $e->getMessage();
            }
        } else {
            $this->view('nuevo');
        }
    }
    public function editar($id)
    {
        $contacto = Contacto::find($id);

        if (!$contacto) {
            die("Error: Contacto no encontrado.");
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            try {
                $contacto->update([
                    'nombre' => $_POST['nombre'],
                    'telefono' => $_POST['telefono'],
                    'email' => $_POST['email'],
                    'direccion' => $_POST['direccion']
                ]);
                header("Location: " . BASE_URL);
                exit();
            } catch (Exception $e) {
                echo "Error al actualizar el contacto: " . $e->getMessage();
            }
        } else {
            
            $this->view('editar', $contacto);
        }
    }

    public function eliminar($id)
    {
        try {
            $contacto = Contacto::find($id);

            if (!$contacto) {
                throw new Exception("Error: Contacto no encontrado.");
            }

            $contacto->delete(); 
            header("Location: " . BASE_URL);
            exit();
        } catch (Exception $e) {
            echo "Error al eliminar el contacto: " . $e->getMessage();
        }
    }
}
