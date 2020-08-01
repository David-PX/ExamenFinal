<?php
require_once 'conexion.php';
class MetodosSql
{

    public function MostarDatosUsuarios($usuario)
    {
        $c = new Conexion();
        $sql = "SELECT * FROM usuarios WHERE nombre_usuario = '$usuario'";
        $conexion = $c->Conectar();

        $result = mysqli_query($conexion, $sql);

        return mysqli_fetch_all($result, MYSQLI_ASSOC);

    }

    public function GuardarUsuarios($datos)
    {

        $c = new Conexion();
        $conexion = $c->Conectar();

        $sql = "INSERT INTO usuarios (nombre,apellido,foto_perfil,correo,nombre_usuario,contraseña)
           VALUES('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]')";

        return $result = mysqli_query($conexion, $sql);

    }

    public function MostarPublicaciones($usuario)
    {
        $c = new Conexion();
        $sql = "SELECT id_publicacion,titulo,contenido,fecha_publicacion
        FROM publicaciones INNER JOIN usuarios ON publicaciones.id_usuario = usuarios.id_usuario WHERE usuarios.nombre_usuario ='$usuario'
        ORDER BY fecha_publicacion DESC";
        $conexion = $c->Conectar();

        $result = mysqli_query($conexion, $sql);

        return mysqli_fetch_all($result, MYSQLI_ASSOC);

    }
    //Este metodo es para mostrar datos especificos en la pagina de edit.php
    public function MostrarValores($id)
    {
        $c = new Conexion();
        $sql = "SELECT * FROM publicaciones WHERE id_publicacion='$id'";
        $conexion = $c->Conectar();
        $result = mysqli_query($conexion, $sql);
        return mysqli_fetch_row($result);
    }
    public function GuardarPublicacion($id_usuario, $titulo, $contenido)
    {

        $c = new Conexion();

        $sql = "INSERT INTO publicaciones (id_usuario,titulo,contenido)
           VALUES($id_usuario,'$titulo','$contenido')";
        $conexion = $c->Conectar();

        return $result = mysqli_query($conexion, $sql);

    }
    public function EditarPublicacion($id, $datos)
    {
        $c = new Conexion();
        $conexion = $c->Conectar();
        $sql = "UPDATE publicaciones SET titulo='$datos[0]',contenido = '$datos[1]',fecha_publicacion = CURRENT_TIMESTAMP
          WHERE id_publicacion = '$id'";
        return $result = mysqli_query($conexion, $sql);
    }
    public function EliminarPublicacion($id)
    {
        $c = new Conexion();
        $conexion = $c->Conectar();
        $sql = "DELETE FROM publicaciones WHERE id_publicacion =$id";
        return $result = mysqli_query($conexion, $sql);
    }
    public function MostarTodas()
    {
        $c = new Conexion();
        $sql = "SELECT *
        FROM publicaciones INNER JOIN usuarios ON publicaciones.id_usuario = usuarios.id_usuario 
        ORDER BY fecha_publicacion DESC";
        $conexion = $c->Conectar();

        $result = mysqli_query($conexion, $sql);

        return mysqli_fetch_all($result, MYSQLI_ASSOC);

    }
}
