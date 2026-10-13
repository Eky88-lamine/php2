
<?php



class Pessoa
{
    public $nome;
    public $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function apresentar() {
        echo "Nome = {$this->nome}, Idade = {$this->idade}<br>";
    }
}

$pessoa1 = new Pessoa("Miguel", 25);
$pessoa2 = new Pessoa("Maria", 22);

$pessoa1->apresentar();
$pessoa2->apresentar();

echo "<br> EXERCICIO 2 - RETANGULO <br><br>";



class Retangulo
{
    public $altura;
    public $largura;

    public function __construct($altura, $largura) {
        $this->altura = $altura;
        $this->largura = $largura;
    }

    public function calcularArea() {
        return $this->altura * $this->largura;
    }

    public function calcularPerimetro() {
        return 2 * ($this->altura + $this->largura);
    }

    public function apresentar() {
        echo "Area = {$this->calcularArea()}<br>";
        echo "Perimetro = {$this->calcularPerimetro()}<br>";
    }
}

$retangulo1 = new Retangulo(5, 3);

$retangulo1->apresentar();

echo "<br> EXERCICIO 3 - ALUNO <br><br>";




class Aluno
{
    private $nome;
    private $numero;
    private $nota1;
    private $nota2;
    private $nota3;

    public function __construct($nome, $numero, $nota1, $nota2, $nota3) {
        $this->nome = $nome;
        $this->numero = $numero;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->nota3 = $nota3;
    }

    public function calcularMedia() {
        return ($this->nota1 + $this->nota2 + $this->nota3) / 3;
    }

    public function situacao() {
        if ($this->calcularMedia() >= 10) {
            return "Aprovado";
        } else {
            return "Reprovado";
        }
    }

    public function apresentar() {
        echo "Nome = {$this->nome}<br>";
        echo "Media = " . round($this->calcularMedia(), 2) . "<br>";
        echo "Situacao = {$this->situacao()}<br><br>";
    }
}

$aluno1 = new Aluno("Miguel", 1, 15, 12, 14);
$aluno2 = new Aluno("Maria", 2, 8, 9, 7);
$aluno3 = new Aluno("Joao", 3, 10, 12, 11);

$aluno1->apresentar();
$aluno2->apresentar();
$aluno3->apresentar();

?>
