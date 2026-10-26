#Escribe un programa que pida una nota entera (0-10) y muestre la calificación con elif: 
#Insuficiente (< 5), Suficiente (5-6), Bien (7), Notable (8-9) y Sobresaliente (10). 
#Añade después el mismo reparto con expresiones condicionales en una sola línea, para comparar legibilidad.

nota = int(input("Nota del 1 al 10: "))

#if nota < 5:
#    print(f"Insuficiente")
#elif 5 <= nota <= 6:
#    print(f"Suficiente")
#elif nota == 7:
#    print(f"Bien")
#elif 8 <= nota <= 9:
#    print(f"Notable")
#elif nota == 10 :
#    print(f"Sobresaliente")
#else :
#    print(f"Ingrese un numero del 1 al 10")

print("Insuficiente") if nota < 5 else print("Suficiente") if 5 <= nota <= 6 else print("Bien") if nota == 7 else print("Notable") if 8 <= nota <= 9 else print("Sobresaliente") if nota == 10 else print("Ingrese un numero del 1 al 10") 

