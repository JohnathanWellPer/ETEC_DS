# Contadores para guardar os totais no final
total_excelente = 0
total_ruim = 0

print("=== TudoWeb: Pesquisa de Satisfação ===")
print("Iniciando o sistema de avaliação...\n")

# Para testar rápido, deixei o range em 10. 
for contador in range(10):
    print(f"--- Ficha do Entrevistado {contador + 1} ---")
    
    nome = input("Nome do cliente: ")
    idade = int(input("Idade: "))
    
    print("Avalie o atendimento: [1] Excelente | [2] Bom | [3] Ruim")
    resposta = int(input("Sua escolha: "))
    
    # Conferindo a resposta e somando no placar
    if resposta == 1:
        total_excelente += 1
    elif resposta == 3:
        total_ruim += 1
    
    # Imprime uma linha pontilhada só pra separar um cliente do outro na tela
    print("-" * 35)

# Exibindo o placar final
print("\n=== RESULTADO DA PESQUISA ===")
print(f"a) Quantidade de respostas EXCELENTE: {total_excelente}")
print(f"b) Quantidade de respostas RUIM: {total_ruim}")