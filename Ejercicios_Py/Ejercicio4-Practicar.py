#Convierte el menú de ejemplo del while para que use match en lugar de if/elif.
opcion = 0
while opcion != 3:
    print("1) Ver catálogo")
    print("2) Buscar")  
    print("3) Salir")
    opcion = int(input("Opción: "))
    
    match opcion:
        case 1:
            print("Ver catálogo")
        case 2:
            print("Buscar")
        case 3:
            print("Saliendo")
        case _:
            print("Opción no valida")