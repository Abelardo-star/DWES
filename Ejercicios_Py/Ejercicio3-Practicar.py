#Muestra los números pares del 1 al 50 de dos formas distintas: recorriendo range con paso 2, y recorriendo todos y filtrando con % y continue. 
#¿Cuál expresa mejor la intención?

#Solo con range (Esta es para recorrer más rapido los pares)
for i in range (2, 51, 2):
    print(i)

#Range, if y continue

for i in range (1,51):
    if i % 2 != 0:
        continue
    print(i)