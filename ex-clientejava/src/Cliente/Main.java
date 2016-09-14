package Cliente;

import java.util.Date;

public class Main {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        PessoaFisica zilly;
        Pedido pedido;
        
        zilly = new PessoaFisica("12334534", "Zilly", "Rua onde o Zilly mora", "420420420", "Holy Mary");
        zilly.getDados();
        
        pedido = new Pedido(new Date(), "14:56", zilly);
        pedido.getDados();
    }
    
}
