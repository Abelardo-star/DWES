#Dibuja la tabla de multiplicar de un número pedido por teclado usando for y range

numero = int(input("Introduce un numero: "))

for i in range (1,11):
    print(numero, "x", i, "=", numero*i)