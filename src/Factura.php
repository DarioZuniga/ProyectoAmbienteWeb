<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'factura')]
class Factura {
  #[ORM\Id]
  #[ORM\GeneratedValue]
  #[ORM\Column(type: 'integer')]
  private $id_factura;

  #[ORM\ManyToOne(targetEntity: Pedido::class)]
  #[ORM\JoinColumn(name: 'id_pedido', referencedColumnName: 'id_pedido')]
  private $id_pedido;

  #[ORM\Column(type: 'date')]
  private $fecha_emision;

  #[ORM\Column(type: 'decimal', precision: 4)]
  private $total;

  #[ORM\Column(type: 'string', columnDefinition: "ENUM('pendiente', 'pagada', 'anulada')")]
  private $estado;

  #[ORM\Column(type: 'string', length: 50, unique: TRUE)]
  private $numero_factura;

  #[ORM\Column(type: 'string', columnDefinition: "ENUM('USD', 'CRC')")]
  private $moneda;

  /**
   * @return mixed
   */
  public function getIdFactura() {
    return $this->id_factura;
  }

  /**
   * @param mixed $id_factura
   */
  public function setIdFactura($id_factura): void {
    $this->id_factura = $id_factura;
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
  public function getFechaEmision() {
    return $this->fecha_emision;
  }

  /**
   * @param mixed $fecha_emision
   */
  public function setFechaEmision($fecha_emision): void {
    $this->fecha_emision = $fecha_emision;
  }

  /**
   * @return mixed
   */
  public function getTotal() {
    return $this->total;
  }

  /**
   * @param mixed $total
   */
  public function setTotal($total): void {
    $this->total = $total;
  }

  /**
   * @return mixed
   */
  public function getEstado() {
    return $this->estado;
  }

  /**
   * @param mixed $estado
   */
  public function setEstado($estado): void {
    $this->estado = $estado;
  }

  /**
   * @return mixed
   */
  public function getNumeroFactura() {
    return $this->numero_factura;
  }

  /**
   * @param mixed $numero_factura
   */
  public function setNumeroFactura($numero_factura): void {
    $this->numero_factura = $numero_factura;
  }

  /**
   * @return mixed
   */
  public function getMoneda() {
    return $this->moneda;
  }

  /**
   * @param mixed $moneda
   */
  public function setMoneda($moneda): void {
    $this->moneda = $moneda;
  }

}
