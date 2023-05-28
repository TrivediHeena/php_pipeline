pipeline {
    agent any
    stages {
        stage('github') {
            steps {
                git 'https://github.com/TrivediHeena/php_pipeline.git'
            }
        }
        stage('build'){
            steps{
                //bat 'php -S localhost:80 -t php_pipeline/'
                bat '''
                    php home.php
                    php chk_login.php
                    php DemoReg.php
                    php login.php
                    php logout.php
                    php registr.php
                    php registration_form.php
                    '''
            }
        }
    }
}