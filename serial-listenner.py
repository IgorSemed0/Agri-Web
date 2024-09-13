import serial
import requests

# Configurações da porta serial
ser = serial.Serial('/dev/ttyUSB0', 9600)

# URL da API Laravel para onde os dados serão enviados
url = 'http://127.0.0.1:8000/api/dados'

# Função para enviar dados para a API Laravel
def send_data_to_api(data):
    # Converter os dados para float antes de enviar
    payload = {
        'soilHumidity': float(data[0]),
        'soilTemperature': float(data[1]),
        'airHumidity': float(data[2]),
        'airTemperature': float(data[3]),
        'soilConductivity': float(data[4]),
        'soilPH': float(data[5]),
        'nitrogen': float(data[6]),
        'phosphorus': float(data[7]),
        'potassium': float(data[8])
    }
    response = requests.post(url, json=payload)
    if response.status_code == 200:
        print('Dados enviados com sucesso!')
    else:
        print(f'Erro ao enviar dados: {response.status_code} - {response.text}')

# Loop para ler e enviar dados
while True:
    if ser.in_waiting > 0:
        line = ser.readline().decode('utf-8').strip()
        data = line.split(',')
        if len(data) == 9:
            send_data_to_api(data)
        else:
            print('Formato de dados inválido recebido.')
