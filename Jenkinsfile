pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                // Ambil kode dari repository Git
                checkout scm
            }
        }

        stage('Install Dependencies') {
            steps {
                // Install Composer dan dependensinya
                sh 'composer install --no-dev'
            }
        }

        stage('Build and Deploy') {
            steps {
                // Lakukan proses build, migrasi, dll.
                sh 'php artisan key:generate'
                sh 'php artisan migrate:fresh --seed'
            }
        }

        stage('Configure Nginx') {
            steps {
                // Konfigurasi Nginx untuk mengarahkan ke direktori aplikasi
                sh 'sudo cp index.php /etc/nginx/sites-available/nugasyuk'
                sh 'sudo ln -s /etc/nginx/sites-available/nugasyuk /etc/nginx/sites-enabled/'
                sh 'sudo systemctl reload nginx'
            }
        }
    }
}
