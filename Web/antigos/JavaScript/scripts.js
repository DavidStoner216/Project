/*Estruturas de repetição
Crie um algoritmo que transforme as notas do sistema
numérico para sistema de notas em caracteres tipo A B C
*/
{
    let note = 10;
    // 90>A      80-89:B      70-79:C     60-69:D      50<F
    if (note >= 90 && note <= 100) {
        document.getElementById("demo").innerHTML = 'Nota A';
    }
    else if (note >= 80 && note <= 89) {
        document.getElementById("demo").innerHTML = 'Nota B';
    }
    else if (note >= 70 && note <= 79) {
        document.getElementById("demo").innerHTML = 'Nota C';
    }
    else if (note >= 60 && note <= 69) {
        document.getElementById("demo").innerHTML = 'Nota D';
    }
    else if (note < 60 && note >= 0) {
        document.getElementById("demo").innerHTML = 'Nota F';
    }
    else
        document.getElementById("demo").innerHTML = 'Nota invalida';
}

// Outra forma de se fazer com If Else
{
    let score = 100
    function getScore(score) {
        let scoreA = score <= 100 && score >= 90
        let scoreB = score <= 89 && score >= 80
        let scoreC = score <= 79 && score >= 70
        let scoreD = score <= 69 && score >= 60
        let scoreF = score <= 59 && score >= 0

        if (scoreA) {
            scoreFinal = 'Nota A'
        }
        else if (scoreB) {
            scoreFinal = 'Nota B'
        }
        else if (scoreC) {
            scoreFinal = 'Nota C'
        }
        else if (scoreD) {
            scoreFinal = 'Nota D'
        }
        else if (scoreF) {
            scoreFinal = 'Nota F'
        }
        else {
            scoreFinal = 'Nota inválida'
        }
        return scoreFinal
    }

    document.getElementById("demo").innerHTML = getScore(score);

    console.log(getScore())
}

/*--------------------------------------------------------
Crie um objeto que possuirá 2 propriedades, ambas do tipo array:
    * receitas: []
    * despesas: []
Agora, crie uma função que irá calcular o total de receitas e 
despesas e irá mostrar uma mensagem se a família está com 
saldo positivo ou negativo, seguido do valor do saldo.
*/
{
    let family = {
        /*Receitas*/incomes: [2500, 3200, 250.90, 360.60],
        /*Despesas*/expenses: [320.34, 128.45, 176.50, 1450.00]
    }
    function sum(array) {
        let total = 0
        for (let value of array) {
            total += value;

        }
        return total
    }

    function calculateBalance() {
        const calculateIcomes = sum(family.incomes)
        const calculateExpenses = sum(family.expenses)

        const total = calculateIcomes - calculateExpenses
        const itsOk = total >= 0
        let balanceText = 'Negativo'
        
        if (itsOk) {
            balanceText = 'Positivo'
        }
        console.log('seu saldo é '+ balanceText +': R$' + total.toFixed(2))
    }
    calculateBalance()
}

/*--------------------------------------------------------
Crie uma função que receba uma string em celsius ou fahrenheit
e faça a transformação de uma unidade para outra
C = (F - 32) * 5 / 9
F = C * 9 / 5 + 32
*/

{
    // estudar expressão regular
    function transformeDegree(degree) {
        const celsiusExists = degree.toUpperCase().includes('C')
        const fahrenheitExists = degree.toUpperCase().includes('F')

        if (!celsiusExists && !fahrenheitExists) {
            throw new Error('Grau não identificado')
        }

        // fluxo ideal fahrenheit -> celsius
        let updateDegree = Number(degree.toUpperCase().replace('F',''));
        let formula = fahrenheit => (fahrenheit - 32) * 5 / 9
        let degreeSign = "C"

        if (celsiusExists) {
            updateDegree = Number(degree.toUpperCase().replace('C', ''));
            formula = celsius => celsius * 9 / 5 + 32
            degreeSign = "F"
        }

        return formula(updateDegree)+degreeSign

    }
    try {
        console.log(transformeDegree('50c'))
    } catch (error) {
        console.log(error)
    }
}

/*--------------------------------------------------------
/*
    ∞ Buscando e contando dados em Arrays ∞
    Baseado no Array de Livros por Categoria abaixo, faça os seguintes desafios
        • Contar o número de categorias e o número de livros em cada categoria
        • Contar o número de autores
        • Mostrar livros do autor Auguto Cury
        • Transformar a função acima em uma função que irá receber o nome do autor e devolver os livros desse autor.
*/

{
    const booksByCategory = [
    {   category: "Riqueza",
        books: [
            {
                title: "Os segredos da mente milionária",
                author: "T. Harv Eker",
            },
            {
                title: "O homem mais rico da Babilônia",
                author: "George S. Clason",
            },
            {
                title: "Pai rico, pai pobre",
                author: "Robert T. Kiyosaki e Sharon L. Lechter",
            },
        ],
    },
    {   category: "Inteligência Emocional",
        books: [
            {
                title: "Você é Insubstituível",
                author: "Augusto Cury",
            },
            {
                title: "Ansiedade – Como enfrentar o mal do século",
                author: "Augusto Cury",
            },
            {
                title: "Os 7 hábitos das pessoas altamente eficazes",
                author: "Stephen R. Covey",
            },
        ],
    },
];
const totalCategories = booksByCategory.length;
console.log('total de categorias: '+ totalCategories);
for (let category of booksByCategory){
    console.log('Total de livros por categoria -', category.category + ' : '+ category.books.length)
    // console.log(category.books.length)
}
function countAuthors(){
    let authors = [];
    for (let category of booksByCategory){
        for (let books of category.books){
            if (authors.indexOf(books.author) == -1) {
                authors.push(books.author)
            }
        }
    }
    console.log('Total de autores: ' + authors.length);
}
countAuthors();                                                                                                                                                                                                                                                                                                                                                                                                                                                                         

    function booksOfAuthor(author) {
        let books = [];
        for (let category of booksByCategory) {
            for (let book of category.books) {
                if(book.author === author) {
                    books.push(book.title)
                }
            }
        }
        console.log(`Total do autor ${author}: ${books.join(', ')}`);
    }
    booksOfAuthor('Augusto Cury');
    booksOfAuthor('George S. Clason');
    
// estudar funçoes e manipulaçoes de dados
}