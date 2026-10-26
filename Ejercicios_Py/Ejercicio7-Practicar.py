#Sobre la lista dias de la sección de slicing, obtén con porciones: los dos primeros días, los dos últimos, los días en posiciones pares y una copia completa. 
#Comprueba que la copia es independiente modificándola.
dias = ["lunes", "martes", "miércoles", "jueves", "viernes"]

print(dias[:2])
print(dias[-2:])
print(dias[::2])

copia = dias[:]
print(copia)

copia[0] = "domingo"

print(dias)
print(copia)