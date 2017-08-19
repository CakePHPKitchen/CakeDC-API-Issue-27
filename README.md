# CakePHP Issue #11048

Steps to reproduce locally....

    #!/bin/bash
    git clone https://github.com/CakePHPKitchen/CakeDC-API-Issue-27.git
    cd CakeDC-API-Issue-27
    composer install
    bin/cake server -p 9001

Then navigate to 

    http://localhost:9001/api/foo/stats
    
