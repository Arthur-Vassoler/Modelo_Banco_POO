Quando temos uma classe, com variáveis e adicionamos um valor a ela em outro diretótio: 
EX: Arquivo Conta.class.php

class Conta
{
    // variável publica, tipo string.
    public string $nomeTitular;

}

Arquivo CriaConta.class.php

class CriaConta
{
    $primeiraConta = new Conta();

    $primeiraConta->nomeTitular =  'Arthur';
}

O nome de um arquivo que possui uma classe tem que começar com letra maiúscula, e o nome da classe tem que ser o mesmo nome do arquivo.

Quando temos uma variável publica em uma classe temos que falar que tipo de variável ela é, se é uma variável string, float, int ...

A variável primeiraConta não tem o valor Arthur, ela está referênciando a uma variável publica nomeTitular, está dizendo que a variável nomeTitular referenciada pela variavel primeriaConta tem o valor de Arthur.

E para isso temos que dizer que a nova variável primeiraConta para referênciar a uma variável de outra classe, tem que chamar a outra classe com o nome da variável, $primeiraConta = new Conta();

Para referênciar uma variável de outra classe, após referênciar a classe na variável, é utilizado -> na sintaxi esse operador faz com que, a variável referêncie uma variável de outra classe.

Podemos estanciar uma variável para a outra variável.
EX:

class CriaConta
{
    $primeiraConta = new Conta();

    $primeiraConta->nomeTitular =  'Arthur';

    $segundaConta->$primeriaConta;
}

Assim a segundaConta terá o mesmo valor de primeiraConta.

Não devemos ter mais de uma classe no mesmo arquivo.

Nós podemos colocar o valor fixo em uma variável que irá ser referência.

Devemos evitar ao máximo usar else, então quando temos um if e ele n retorna nada/: void, podemos só dar um return; para ele parar a execução do if após toda a execução dele, e em baixo colocamos os objetos do else, sem precisar colocar else{}.

PROPRIEDADES = variáveis;
MÉTODOS = funções;

É recomendado que todas as propriedades sejam privadas, e só métodos sejam publicos.

Para conseguirmos modificar uma propriedade privada, temos que cirar um método public que chama essa propriedade privada, passando uma variável como parametro, e dizendo que essa variável é igual ao parametro privado, assim podemos adcionar alguma informação sem estar dentro de um método da classe.

Com um método define/ get, podemos fazer validações nos campos, por exemplo: podemos definir que o nome do titular deve ter no mínimo 5 caracteres.

O método contrutor/ __construct, ele é executado sempre quando chamamos a classe, ele está recebendo dois parâmetros, para que seja possivel fazer a verificação dos campos nome e cpf, deixando os mesmos obrigatórios para criarmos uma conta.

Variável normal é acessada pelo padrão this-> / mas as variáveis staticas são acessadas pelo nome da classe Conta:: .
Ou seja As propriedades e Métodos privados são acessados pelo nome da classe Conta:: .
Ou dentro da mesma classe utilizamos self:: .

O método __destruct ele exclui tudo que não está sendo utilizado mas que continua na memória, no nosso caso ele está diminuindo o número de contas, pois se a conta não for salva ela não deve ser somada, então o método constutor está fazendo essa limpa para nós.

Sempre devemos Criar um Arquivo para cada classe.


































