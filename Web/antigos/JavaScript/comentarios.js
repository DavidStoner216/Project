/*O tipo de dados String consiste em uma cadeia de caracteres, ou seja, textos.
Para denotar string no JavaScript são usados

aspas duplas(" "), aspas simples(' ') e template literals ou template strings(),

template literals permitem textos multilinhas e expressões de
linguagem com os caracteres ${ }, por exemplo: 

console.log(A soma de duas unidades é ${ 1+1 }),

já as outras não, por exemplo: 

console.log("Isso é um texto").*/


// ----------------------------------------------------------------------
    // O tipo de dado Object é estrutural, contendo atributos,
    // // ou propriedades, e métodos, ou funcionalidades.
    // // Um objeto é denotado com os caracteres { },
    // // atributos e métodos com nome: valor.Por exemplo { nome: "João", idade: 20 }.
    // console.log({
    //     name: 'david',
    //     idade: '20',
    //     andar: function () {
    //         console.log('andar')
    //     }
    // })
// ----------------------------------------------------------------------

    // O tipo de dados Array, ou vetor, também é estrutural,
    // e consiste em uma lista de dados agrupados,
    // um Array é denotado com os caracteres[], por exemplo:
    // ["Leite", "Ovos", "Manteiga", 1, 2].
    // console.log(["Leite", "Ovos", "Manteiga", 1, 2])
// ----------------------------------------------------------------------

    // Conforme o ECMAScript Standard(o padrão do orgão que padroniza o JavaScript)
    // temos 9 tipos de dados organizados em 4 categorias:

    //     * Data Types
    //         * Primitive / Primitive Value
    //         * Structural
    //         * Structural Primitive
        
    // ## Primitivos

    //     * String
    //     * Number
    //     * Boolean
    //     * Undefined
    //     * Symbol
    //     * BigInt
        
    // ## Estruturais
    //     * Object
    //         * Arrays
    //         * Map
    //         * Set
    //         * Date
    //         * ...
    //     * Function
        
    // ## Primitivo estrutural /Structural Root Primitive
    // que consiste apenas no dado null


// ----------------------------------------------------------------------

// # Variaveis
//     *Nomes simbólicos para algum valor
//     *Atalhos de código
//     *identificadores
    
// ##Para criar uma variável,
// podemos usar uma das palavras reservadas:

//     *var;
//     *let ;
//     *const;
    
// por exemplo:
//     var clima = "quente";
// onde var é a palavra que simboliza a criação da variável,
// clima é o nome da variável, o sinal de igual denota que
// a variável está recebendo um valor e "quente" é a string
// que está sendo recebida.
// As variáveis declaradas com "var" e "let" podem ter seu 
// valor mudado, já a const não.
// ----------------------------------------------------------------------

    // const array = [
    //     'cat',
    //     'lion',
    //     'leopard',
    //     {
    //         name: 'jaguar',
    //         age: 3
    //     }
    // ]
    // console.log(array[3].name)
// ----------------------------------------------------------------------

    // let student = {
    //     name: "david",
    //     age: 20,
    //     weight: 72.4,
    //     isSubscribed: true,
    // }
    // console.log(`${student.name} tem idade de ${student.age} anos e pesa ${student.weight}kg`)

    // let students = []
    // students = [student]
    // console.log(students[0])
// ----------------------------------------------------------------------
// Existem várias maneiras de manipular arrays, como: o método push(), que adiciona um elemento no final do array, o método unshift(), que adiciona um elemento no começo do array, o método pop(), que retira um elemento do final do array, o método shift(), que retira um elemento do começo do array, o método slice(), que recebe como argumentos a posição de início e a posição do fim da parte que você quer selecionar, e retorna os valores destas posições, o método splice(), que recebe como argumentos a posição de início e a quantidade de elementos que você quer remover e o método indexOff(), que encontra o index do valor que recebe como argumento em um array.

// ----------------------------------------------------------------------
    /* De cima para baixo, do mais importante ao menos importante.

            * grouping                      ( )
            * negação e incremento          ! ++ --
            * multiplicação e divisão       * /
            * adição e subtração            + -
            * relacional                    &lt; &lt;= &gt; &gt;=
            * igualdade                     == != === !==
            * AND                           &amp;&amp;
            * OR                            ||
            * condicional                   ?:
            * assignment (atribuição)       = += -= *= %=
    */
// ----------------------------------------------------------------------

// Nesta aula veremos sobre o throw e try/catch. São parte do controle de fluxo da aplicação.

// Throw em inglês significa lançar, disparar, catch quer dizer pegar e try tentar.

// Isso significa que vamos tentar executar um bloco de código, e se der algum erro, será disparado e capturado na nossa aplicação.Suponhamos que haja uma função que dispare um erro caso não seja passado um parâmetro dessa função.

    // function sayMyName(name = '') {
    //     if (name === '') {
    //         throw 'Nome é obrigatório'
    //     }

    //     console.log(name)
    // }
// Nesse caso, se o nome vier vazio, será disparada uma mensagem.

// Precisamos agora usar o try/catch para capturarmos esse erro, caso contrário, ele irá encerrar nossa aplicação, e nós o faremos da seguinte maneira:

    // try {
    //     sayMyName()
    // } catch (e) {
    //     console.log(e)
    // }

    // console.log('após ao try/catch')
// O try irá executar a função, enquanto o catch vai capturar o erro e atribuir à variável e, que só existe dentro do catch.Após isso, mesmo com o erro, nossa aplicação não será interrompida por completo.

// ----------------------------------------------------------------------

// A estrutura de repetição for tem a seguinte sintaxe:

//     for (inicialização de uma variável; condição de continuação para o loop; expressão final)

// ----------------------------------------------------------------------


// ----------------------------------------------------------------------


// ----------------------------------------------------------------------


// ----------------------------------------------------------------------
