<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'pedido')]
class Pedido {

  #[ORM\Id]
  #[ORM\GeneratedValue]
  #[ORM\Column(type: 'integer')]
  private $id_pedido;

  #[ORM\ManyToOne(targetEntity: Usuario::class)]
  #[ORM\JoinColumn(name: 'id_usuario', referencedColumnName: 'id_usuario')]
  private $id_usuario;

  #[ORM\Column(type: 'date')]
  private $fecha_pedido;

  #[ORM\Column(type: 'string', columnDefinition: "ENUM('pendiente', 'en_proceso', 'entregado')")]
  private $estado;

  #[ORM\Column(type: 'date', nullable: TRUE)]
  private $fecha_entrega;

  #[ORM\Column(type: 'text', nullable: TRUE)]
  private $notas;

  #[ORM\Column(type: 'string', columnDefinition: "ENUM('USD', 'CRC')")]
  private $moneda;

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
  public function getFechaPedido() {
    return $this->fecha_pedido;
  }

  /**
   * @param mixed $fecha_pedido
   */
  public function setFechaPedido($fecha_pedido): void {
    $this->fecha_pedido = $fecha_pedido;
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
  public function getFechaEntrega() {
    return $this->fecha_entrega;
  }

  /**
   * @param mixed $fecha_entrega
   */
  public function setFechaEntrega($fecha_entrega): void {
    $this->fecha_entrega = $fecha_entrega;
  }

  /**
   * @return mixed
   */
  public function getNotas() {
    return $this->notas;
  }

  /**
   * @param mixed $notas
   */
  public function setNotas($notas): void {
    $this->notas = $notas;
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
