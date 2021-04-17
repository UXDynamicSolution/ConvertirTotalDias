import math

def descomponer_anios(total_dias):
	PROMEDIO_ANNIO = 365.20
	PROMEDIO_MES   = 30.42

	calcular_annios = math.floor(total_dias / PROMEDIO_ANNIO)
	return round(calcular_annios)

def descomponer_meses(total_dias):
	PROMEDIO_ANNIO = 365.20
	PROMEDIO_MES   = 30.42

	calcular_meses = math.floor(total_dias - descomponer_anios(total_dias) * PROMEDIO_ANNIO)
	meses = math.floor(calcular_meses / PROMEDIO_MES)
	return (meses)

def descomponer_dias(total_dias):
	PROMEDIO_ANNIO = 365.20
	PROMEDIO_MES   = 30.42

	calcular_dias = (total_dias-(descomponer_anios(total_dias) * PROMEDIO_ANNIO + descomponer_meses(total_dias) * PROMEDIO_MES))
	return math.floor(calcular_dias)

print(str(descomponer_anios(3703)))
print((descomponer_meses(3703)))
print(str(descomponer_dias(3703)))


	

