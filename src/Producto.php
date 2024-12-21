<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'producto')]
class Producto {

  #[ORM\Id] #[ORM\GeneratedValue] #[ORM\Column(type: 'integer')]
  private $id_producto;

  #[ORM\Column(type: 'string', length: 100)]
  private $nombre;

  #[ORM\Column(type: 'decimal', precision:4)]
  private $precio;

  #[ORM\Column(type: 'boolean', options: ['default' => TRUE])]
  private $disponible;

  #[ORM\Column(type: 'text', nullable: TRUE)]
  private $descripcion;

  /**
   * @return mixed
   */
  public function getIdProducto() {
    return $this->id_producto;
  }

  /**
   * @param mixed $id_producto
   */
  public function setIdProducto($id_producto): void {
    $this->id_producto = $id_producto;
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
  public function getPrecio() {
    return $this->precio;
  }

  /**
   * @param mixed $precio
   */
  public function setPrecio($precio): void {
    $this->precio = $precio;
  }

  /**
   * @return mixed
   */
  public function getDisponible() {
    return $this->disponible;
  }

  /**
   * @param mixed $disponible
   */
  public function setDisponible($disponible): void {
    $this->disponible = $disponible;
  }

  /**
   * @return mixed
   */
  public function getDescripcion() {
    return $this->descripcion;
  }

  /**
   * @param mixed $descripcion
   */
  public function setDescripcion($descripcion): void {
    $this->descripcion = $descripcion;
  }

}
