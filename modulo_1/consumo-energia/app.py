# --- ENTRADA DE DADOS ---
print("⚡ CALCULADORA DE CONSUMO DE ENERGIA ⚡\n")
nome_aparelho = input("Qual o nome do aparelho? (Ex: Geladeira): ")
potencia_w = float(input(f"Qual a potência em Watts (W) do(a) {nome_aparelho}? "))
horas_uso = float(input(f"Quantas horas por dia o(a) {nome_aparelho} fica ligado(a)? "))

# --- PROCESSAMENTO (A Matemática) ---
consumo_mensal = (potencia_w * horas_uso * 30) / 1000
custo_estimado = consumo_mensal * 0.75

# --- SAÍDA DE DADOS (O resultado na tela) ---
print("\n------------------------------------------------")
print("📊 RESULTADO DA ESTIMATIVA")
print("------------------------------------------------")
print(f"Aparelho: {nome_aparelho}")
print(f"Consumo estimado: {consumo_mensal:.2f} kWh/mês")
print(f"Custo estimado: R$ {custo_estimado:.2f} por mês")
print("------------------------------------------------")