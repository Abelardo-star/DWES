#Escribe un programa que cuente palabras: pide frases hasta que se introduzca una línea vacía y acumula en un diccionario cuántas veces aparece cada palabra (ayuda: frase.split() y palabras.get(palabra, 0)).
palabras = {}

frase = input("Introduce una frase: ")

while frase != "":
    for palabra in frase.split():
        palabras[palabra] = palabras.get(palabra, 0) + 1

    frase = input("Introduce una frase: ")

print(palabras)