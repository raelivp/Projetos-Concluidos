using System;

namespace Calculadora
{
    class Program
    {

        static void Main(string[] args)
        {

            Console.WriteLine(" ESCREVA SEU NOME: \r\n");

            string nome = Console.ReadLine();

            Console.WriteLine("\r\n ESCOLHA UM NÚMERO:\r\n");

            double num1 = Convert.ToDouble(Console.ReadLine());

            Console.WriteLine("\r\n Selecione uma das opções de operação: \r\n ADIÇÃO : + \r\n SUBTRAÇÃO : -\r\n MULYIPLICAÇÃO : * \r\n DIVIDIR : / \r\n POTENCIAÇÃO : ** \r\n");

            string operacao = Console.ReadLine();

            Console.WriteLine("\r\n digite mais outros números:");

            double num2 = Convert.ToDouble(Console.ReadLine());

            double Valor = 0;

            bool Visto = true;

            if (operacao == "*")
            {
                Valor = num1 * num2;
            }
            else if (operacao == "+")
            {
                Valor = num1 + num2;
            }
            else if (operacao == "-")
            {
                Valor = num1 - num2;
            }
            else if (operacao == "/")
            {
                Valor = num1 / num2;
            }
            else if (operacao == "**")
            {
                Valor = Math.Pow(num1, num2);
            }
            else
            {
                Console.WriteLine("\r\n '" + operacao + "' Operação INVÁLIDA");
                Visto = false;
            }

            if (Visto == true) { 
            Console.WriteLine("\r\n" + nome + ", o resultado " + num1 + operacao + num2 + " é " + Valor);
           }        
        }
    }
}


