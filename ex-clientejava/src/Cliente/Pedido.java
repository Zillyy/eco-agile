package Cliente;

import java.util.Date;

public class Pedido {

    private Date data;
    private String hora;
    private Cliente cliente;

    public Pedido(Date data, String hora, Cliente cliente) {
        this.data = data;
        this.hora = hora;
        this.cliente = cliente;
    }
    
    public void getDados() {
        System.out.println("Hora: " + hora);
        System.out.println("Data: " + data);
    }

    public Date getData() {
        return data;
    }

    public void setData(Date data) {
        this.data = data;
    }

    public String getHora() {
        return hora;
    }

    public void setHora(String hora) {
        this.hora = hora;
    }

    public Cliente getCliente() {
        return cliente;
    }

    public void setCliente(Cliente cliente) {
        this.cliente = cliente;
    }

}
