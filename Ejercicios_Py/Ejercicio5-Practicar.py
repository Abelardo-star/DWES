#Escribe un bucle que recorra la lista ["Cuaderno", "Lápiz", "Mochila"] con enumerate 
#Y muestre el total de artículos al final (un acumulador, como en Java).

lista = ["Cuaderno", "Lápiz", "Mochila"]
total = 0

for i, articulo in enumerate(lista):
    print(i, articulo)
    total += 1

print("Total articulos", total)