# Importando os recursos necessários da biblioteca colorama
from colorama import Fore, Style, init

# Inicializa o colorama (boa prática para garantir o funcionamento correto no terminal do Windows)
init()

# 1. Utilizando uma lista para armazenar as mensagens das situações do reservatório
# O índice da lista (0 a 4) representará os níveis (1 a 5)
situacoes_reservatorio = [
    "Muito baixo (crítico)", # Nível 1
    "Baixo",                 # Nível 2
    "Médio",                 # Nível 3
    "Alto",                  # Nível 4
    "Muito alto (alerta)"    # Nível 5
]

# 2. Criando a função responsável por definir a cor e exibir a mensagem
def alertar_nivel_agua(nivel, situacao):
    """
    Avalia o nível do reservatório, define a cor adequada da biblioteca colorama
    e imprime o alerta no terminal, restaurando a cor padrão ao final.
    """
    
    # Estrutura de decisão para associar o nível à cor correspondente
    if nivel == 1:
        cor = Fore.RED      # Vermelho para Muito baixo
    elif nivel == 2:
        cor = Fore.YELLOW   # Amarelo para Baixo
    elif nivel == 3:
        cor = Fore.GREEN    # Verde para Médio
    elif nivel == 4:
        cor = Fore.CYAN     # Ciano para Alto
    elif nivel == 5:
        cor = Fore.BLUE     # Azul para Muito alto
    else:
        cor = Fore.WHITE    # Cor padrão para níveis não mapeados
        
    # Exibindo no terminal a situação atual com a cor correspondente.
    # O Style.RESET_ALL garante que as configurações de cor não permaneçam ativas.
    mensagem_alerta = f"Nível {nivel}: {situacao}"
    print(f"{cor}{mensagem_alerta}{Style.RESET_ALL}")

# 3. Bloco principal: Simulação do ambiente de monitoramento
def simular_monitoramento():
    print("--- SISTEMA DE MONITORAMENTO DO RESERVATÓRIO ---\n")
    
    # Percorrendo a lista usando um laço de repetição. 
    # Usamos o 'range(len())' para capturar a posição (índice) e calcular o Nível.
    for indice in range(len(situacoes_reservatorio)):
        nivel_atual = indice + 1 # Como o índice começa em 0, somamos 1 para virar Nível 1 a 5
        situacao_atual = situacoes_reservatorio[indice]
        
        # Chamada da função para cada nível
        alertar_nivel_agua(nivel_atual, situacao_atual)
        
    print("\n--- SIMULAÇÃO CONCLUÍDA ---")

# Chamada para executar o programa
if __name__ == "__main__":
    simular_monitoramento()