class Persona:
    def __init__(self, nombre, edad, rol):
        self.nombre = nombre
        self.edad = edad
        self.rol = rol

    def __str__(self):
        return f"Nombre: {self.nombre}, Edad: {self.edad}, Rol: {self.rol}"


gerente = Persona("Laura Pérez", 45, "Gerente")
dueno = Persona("Carlos Gómez", 50, "Dueño")
administrativo = Persona("Ana Martínez", 30, "Administrativo")
docente = Persona("Luis Hernández", 35, "Docente")
maestranza = Persona("José Rodríguez", 40, "Maestranza")


personas = [gerente, dueno, administrativo, docente, maestranza]
for persona in personas:
    print(persona)
