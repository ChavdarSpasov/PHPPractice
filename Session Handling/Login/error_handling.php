<?php



// catch normal errors 

set_error_handler(function(int $errno,string $errstr,string $errfile){
    // echo 'Sorry Error1!';
    // error_log('Error: '. $errstr . $errfile . $errno);
    // exit;

        //catching all errors
    throw new Exception('Erro1!' . $errstr . $errno);
    
});

// catch new generation errors (exeptions)

set_exception_handler(function(Exception $e){
    echo 'Sorry Error2!';
    error_log('Error: ' . $e->getMessage() . $e->getFile() . $e->getLine());
    exit;
});

print $a;


// try{
//     $a = new PDO('');
// }catch (Exception $e){
//     echo $e->getMessage();
// }

echo 'end';