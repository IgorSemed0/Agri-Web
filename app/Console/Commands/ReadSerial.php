<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;
use App\Models\DadoSensor;

class ReadSerial extends Command
{
    protected $signature = 'serial:read';
    protected $description = 'Read data from the serial port and store it in the database';

    public function handle()
    {
        $process = new Process(['cat', '/dev/ttyUSB0']); // Altere para a sua porta
        $process->setTimeout(60);
        $process->run();
        if ($process->isSuccessful()) {
            $output = trim($process->getOutput()); // Remover espaços em branco, incluindo novas linhas
            $data = explode(',', $output);

            if (count($data) === 9) {
                DadoSensor::create([
                    'soilHumidity' => $data[0],
                    'soilTemperature' => $data[1],
                    'airHumidity' => $data[2],
                    'airTemperature' => $data[3],
                    'soilConductivity' => $data[4],
                    'soilPH' => $data[5],
                    'nitrogen' => $data[6],
                    'phosphorus' => $data[7],
                    'potassium' => $data[8],
                ]);

                $this->info('Dados armazenados com sucesso!');
            } else {
                $this->error('Formato de dados inválido recebido do Serial.');
            }
        } else {
            $this->error('Erro ao ler do Serial: ' . $process->getErrorOutput());
        }

    }
}
