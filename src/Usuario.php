<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'usuario')]
class Usuario {

  #[ORM\Id]
  #[ORM\GeneratedValue]
  #[ORM\Column(type: 'integer')]
  private $id_usuario;

  #[ORM\Column(type: 'string', length: 100)]
  private $nombre;

  #[ORM\Column(type: 'string', length: 100)]
  private $apellidos;

  #[ORM\Column(type: 'string', length: 100, unique: TRUE)]
  private $correo;

  #[ORM\Column(type: 'string', length: 255)]
  private $contrasena;

  #[ORM\Column(type: 'string', columnDefinition: "ENUM('admin', 'vendedor', 'cliente')")]
  private $rol;

  /**
   * @return mixed
   */
  public function getIdUsuario() {
    return $this->id_usuario;
  }

  /**
   * @param mixed $id_usuario
   */
  public function setIdUsuario($id_usuario): void {
    $this->id_usuario = $id_usuario;
  }

  /**
   * @return mixed
   */
  public function getNombre() {
    return $this->nombre;
  }

  /**
   * @param mixed $nombre
   */
  public function setNombre($nombre): void {
    $this->nombre = $nombre;
  }

  /**
   * @return mixed
   */
  public function getApellidos() {
    return $this->apellidos;
  }

  /**
   * @param mixed $apellidos
   */
  public function setApellidos($apellidos): void {
    $this->apellidos = $apellidos;
  }

  /**
   * @return mixed
   */
  public function getCorreo() {
    return $this->correo;
  }

  /**
   * @param mixed $correo
   */
  public function setCorreo($correo): void {
    $this->correo = $correo;
  }

  /**
   * @return mixed
   */
  public function getContrasena() {
    return $this->contrasena;
  }

  /**
   * @param mixed $contrasena
   */
  public function setContrasena($contrasena): void {
    $this->contrasena = $contrasena;
  }

  /**
   * @return mixed
   */
  public function getRol() {
    return $this->rol;
  }

  /**
   * @param mixed $rol
   */
  public function setRol($rol): void {
    $this->rol = $rol;
  }

}
