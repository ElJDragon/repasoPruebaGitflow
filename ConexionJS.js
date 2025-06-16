const mysql = require('mysql');
class conexion{
    conectar(){
        const con=mysql.createConnection({
            host:"localhost",user:"root",password:"",bd:"repaso"
        });
        con.connect((err)=>{
            if (err) {
                console.log('Error en la conexion',err.message);
            }else{
                console.log('conexion exitosa');

            }
            
        });
        return con;
    }
}

module.exports =con;