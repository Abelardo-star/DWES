#A partir del catalogo de ejemplo, muestra: la lista de nombres con stock agotado, el precio medio y el producto más caro (con max y un bucle, sin funciones todavía).
catalogo = [
    {"nombre": "Cuaderno", "precio": 2.5, "stock": 12},
    {"nombre": "Lápiz", "precio": 0.8, "stock": 0},
    {"nombre": "Mochila", "precio": 18.9, "stock": 3},
]

agotados = []
total = 0

for producto in catalogo:
    if producto["stock"] == 0:
        agotados.append(producto["nombre"])

    total += producto["precio"]

media = total / len(catalogo)

caro = catalogo[0]

for producto in catalogo:
    if producto["precio"] > caro["precio"]:
        caro = producto

print("Productos agotados:", agotados)
print("Precio medio:", media)
print("Producto más caro:", caro["nombre"])