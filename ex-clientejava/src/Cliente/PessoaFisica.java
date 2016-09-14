package Cliente;

public class PessoaFisica extends Cliente {

    private String cpf;
    private String nome;

    public PessoaFisica(String cpf, String nome, String endereco, String fone, String cidade) {
        super(endereco, fone, cidade);
        this.cpf = cpf;
        this.nome = nome;
    }

    @Override
    public void getDados() {
        System.out.println("Nome: " + nome);
        System.out.println("Endereço: " + endereco);
        System.out.println("CPF: " + cpf);
        System.out.println("Fone: " + fone);
        System.out.println("Cidade: " + cidade);
    }

    public String getCpf() {
        return cpf;
    }

    public void setCpf(String cpf) {
        this.cpf = cpf;
    }

    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }
    
}
