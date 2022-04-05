<?php


namespace App\Models;


/**
 * @Entity
 * @Table(name="tasks")
 */
class Task
{
  /**
   * @Id
   * @Column(name="id", type="integer")
   * @GeneratedValue
   */
  private ?int $id;

  /**
   * @Column(name="text", type="string", length=600, nullable=false)
   */
  private ?string $text;

  public function __construct(string $text)
  {
    $this->text = $text;
  }

  /**
   * @return string
   */
  public function getText(): string
  {
    return $this->text;
  }
}