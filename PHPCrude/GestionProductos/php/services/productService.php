<?php
include 'mainService.php';
class ProductService extends MainService{
    private $entityName = "producto";
    function insert($descripcion, $categoria, $fechaExpiracion, $precio){
        $stmt = $this->conex->prepare("INSERT INTO producto (descripcion, categoria, fecha_expiracion, precio) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("sssd", $descripcion, $categoria, $fechaExpiracion, $precio);
        $stmt->execute();
        $stmt->close();
    }
    function findAll() {
        return $this->findAll1($this->entityName);
    }
    function findByPK($codProducto) {
        $result = $this->conex->query("SELECT * FROM producto WHERE codigo=".$codProducto);
        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }
    function update( $descripcion, $categoria, $fechaExpiracion, $precio, $codigo) {
        $stmt = $this->conex->prepare("UPDATE producto set descripcion=?, categoria=?, fecha_expiracion=?, precio=? WHERE codigo= ?");
        $stmt->bind_param("sssdi", $descripcion, $categoria, $fechaExpiracion, $precio, $codigo);
        $stmt->execute();
        $stmt->close();
    }
    function delete($codProducto) {
        $stmt=$this->conex->prepare('DELETE FROM producto WHERE codigo= '.$codProducto.'');
        //$stmt->bind_param('i', $codProducto);
        $stmt->execute();
        $stmt->close();
    }
}
?>