<?php
namespace Sebastian\GestorTareas;

class Task {
    private string $title;
    private bool $completed = false;

    //  Constructor: recibe el título de la tarea al crear el objeto
    public function __construct(string $title) {
        $this->title = $title;
    }

    //  Marcar como completada
    public function complete(): void {
        $this->completed = true;
    }

    // Marcar como pendiente
    public function reopen(): void {
        $this->completed = false;
    }

    //  Obtener estado texto
    public function getStatus(): string {
        return $this->completed ? "Completada" : "Pendiente";
    }

    //  Obtener el título
    public function GetTitle(): string {
        return $this->title;
    }
}