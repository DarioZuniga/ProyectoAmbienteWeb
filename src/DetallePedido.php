<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'detalle_pedido')]
class DetallePedido {

  #[ORM\Id]
  #[ORM\GeneratedValue]
  #[ORM\Column(type: 'integer')]
  private $id_detalle;

  #[ORM\ManyToOne(targetEntity: Pedido::class)]
  #[ORM\JoinColumn(name: 'id_pedido', referencedColumnName: 'id_pedido')]
  private $id_pedido;

  #[ORM\ManyToOne(targetEntity: Producto::class)]
  #[ORM\JoinColumn(name: 'id_producto', referencedColumnName: 'id_producto')]
  private $id_producto;

  #[ORM\Column(type: 'integer')]
  private $cantidad;

  #[ORM\Column(type: 'decimal', precision: 4)]
  private $precio_unitario;

  #[ORM\Column(type: 'decimal', precision:4)]
  private $subtotal;

  /**
   * @return mixed
   */
  public function getIdDetalle() {
    return $this->id_detalle;
  }

  /**
   * @param mixed $id_detalle
   */
  public function setIdDetalle($id_detalle): void {
    $this->id_detalle = $id_detalle;
  }

  /**
   * @return mixed
   */
  public function getIdPedido() {
    return $this->id_pedido;
  }

  /**
   * @param mixed $id_pedido
   */
  public function setIdPedido($id_pedido): void {
    $this->id_pedido = $id_pedido;
  }

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
  public function getCantidad() {
    return $this->cantidad;
  }

  /**
   * @param mixed $cantidad
   */
  public function setCantidad($cantidad): void {
    $this->cantidad = $cantidad;
  }

  /**
   * @return mixed
   */
  public function getPrecioUnitario() {
    return $this->precio_unitario;
  }

  /**
   * @param mixed $precio_unitario
   */
  public function setPrecioUnitario($precio_unitario): void {
    $this->precio_unitario = $precio_unitario;
  }

  /**
   * @return mixed
   */
  public function getSubtotal() {
    return $this->subtotal;
  }

  /**
   * @param mixed $subtotal
   */
  public function setSubtotal($subtotal): void {
    $this->subtotal = $subtotal;
  }

}
