package Cliente;

public abstract class Cliente {

    protected String endereco;
    protected String fone;
    protected String cidade;

    public Cliente(String endereco, String fone, String cidade) {
        this.endereco = endereco;
        this.fone = fone;
        this.cidade = cidade;
    }

    public abstract void getDados();
    
    public String getEndereco() {
        return endereco;
    }

    public void setEndereco(String endereco) {
        this.endereco = endereco;
    }

    public String getFone() {
        return fone;
    }

    public void setFone(String fone) {
        this.fone = fone;
    }

    public String getCidade() {
        return cidade;
    }

    public void setCidade(String cidade) {
        this.cidade = cidade;
    }

}
