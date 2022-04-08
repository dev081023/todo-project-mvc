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

//  /**
//   * @ManyToOne(targetEntity="User")
//   * @JoinColumn(name="user_id", referencedColumnName="id")
//   */
//  private ?int $userId;

  /**
   * @Column(type="datetime")
   */
  private  $created;

  public function __construct(string $text)
  {
    $this->text = $text;
  }

  /**
   * @return int
   */
  public function getId(): int
  {
    return $this->id;
  }

  /**
   * @return string
   */
  public function getText(): string
  {
    return $this->text;
  }

//  public function getUserId(): ?int
//  {
//    return $this->userId;
//  }

  public function getCreated()
  {
    return $this->created;
  }
}