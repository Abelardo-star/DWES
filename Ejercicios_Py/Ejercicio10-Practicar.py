#Construye una lista pedido de tuplas (producto, unidades) y calcula el total usando el diccionario de precios "Cuaderno": 2.5, "Lápiz": 0.8, "Mochila": 18.9.
precios = {
    "Cuaderno": 2.5,
    "Lápiz": 0.8,
    "Mochila": 18.9
}

pedido = [
    ("Cuaderno", 2),
    ("Lápiz", 3),
    ("Mochila", 1)
]

total = 0

for producto, unidades in pedido:
    total += precios[producto] * unidades

print("Total del pedido:", total, "euros")