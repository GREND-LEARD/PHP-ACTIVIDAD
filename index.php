
<?php
// Clase Libro
class Libro {
    private $titulo;
    private $autor;
    private $prestado;

    public function __construct($titulo, $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->prestado = false; // Por defecto, el libro está disponible
    }

    public function prestar() {
        if (!$this->prestado) {
            $this->prestado = true;
            return "El libro '{$this->titulo}' ha sido prestado.";
        } else {
            return "El libro '{$this->titulo}' ya está prestado.";
        }
    }

    public function devolver() {
        if ($this->prestado) {
            $this->prestado = false;
            return "El libro '{$this->titulo}' ha sido devuelto.";
        } else {
            return "El libro '{$this->titulo}' no estaba prestado.";
        }
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function isPrestado() {
        return $this->prestado;
    }
}

// Clase Biblioteca
class Biblioteca {
    private $libros = [];

    public function agregarLibro($libro) {
        $this->libros[] = $libro;
        return "El libro '{$libro->getTitulo()}' ha sido agregado a la biblioteca.";
    }

    public function prestarLibro($titulo) {
        foreach ($this->libros as $libro) {
            if ($libro->getTitulo() === $titulo) {
                return $libro->prestar();
            }
        }
        return "El libro '{$titulo}' no se encuentra en la biblioteca.";
    }

    public function devolverLibro($titulo) {
        foreach ($this->libros as $libro) {
            if ($libro->getTitulo() === $titulo) {
                return $libro->devolver();
            }
        }
        return "El libro '{$titulo}' no se encuentra en la biblioteca.";
    }

    public function listarLibros() {
        if (empty($this->libros)) {
            return "No hay libros en la biblioteca.";
        }

        $lista = "Libros en la biblioteca:\n";
        foreach ($this->libros as $libro) {
            $estado = $libro->isPrestado() ? "Prestado" : "Disponible";
            $lista .= "- {$libro->getTitulo()} ({$estado})\n";
        }
        return nl2br($lista);
    }
}

