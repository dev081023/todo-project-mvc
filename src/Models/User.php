<?php


namespace App\Models;


/**
 * @Entity
 * @Table(name="users")
 */
class User
{
  /**
   * @Id
   * @Column(name="id", type="integer")
   * @GeneratedValue
   */
  private ?int $id;

  /**
   * @Column(name="login", type="string", length=150, nullable=false, unique=true)
   */
  private string $login;

  /**
   * @Column(name="password", type="string", length=100, nullable=false)
   */
  private string $password;

  public function __construct(string $login, string $password)
  {
    $this->login = $login;
    $this->password = $password;
  }

  /**
   * @return int|null
   */
  public function getId(): ?int
  {
    return $this->id;
  }

  /**
   * @return string
   */
  public function getLogin(): string
  {
    return $this->login;
  }

  /**
   * @return string
   */
  public function getPassword(): string
  {
    return $this->password;
  }
}