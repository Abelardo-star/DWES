#Crea una lista con las compras de un proyecto: añade, sustituye y elimina elementos usando cada método visto (append, insert, remove, pop, del). 
#Muestra la lista tras cada operación.
compras = ["Cuaderno", "Lápiz", "Mochila"]
print(compras)

compras.append("Bolígrafo")
print(compras)

compras.insert(1, "Goma")
print(compras)

compras.remove("Lápiz")
print(compras)

compras.pop()
print(compras)

del compras[0]
print(compras)