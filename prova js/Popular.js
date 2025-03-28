// Classe Popular herdando de Carro
class Popular extends Carro {
    acelerar() {
        console.log("Acelerando devagar");
    }
}

// Instâncias
const c1 = new Esportivo("Ferrari", "F8");
const c2 = new Popular("Fiat", "Uno");

c1.acelerar(); // "Acelerando rápido"
c2.acelerar(); // "Acelerando devagar"
 