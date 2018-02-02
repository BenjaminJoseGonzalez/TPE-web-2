<?php
require_once(__DIR__ . '/model.php');
class UsuarioModel extends Model {

	function getUsuario($usuario){

		$consulta = $this->db->prepare("SELECT * FROM usuario WHERE email = ? ");
		$consulta->execute(array($usuario));
		$usuario = $consulta->fetchAll();

		if(count($usuario)>0)
			return $usuario;
		else 
			return 404;
	}

	function agregarUsuario($nombre,$email,$password){
		$consulta = $this->db->prepare('INSERT INTO usuario (nombre,email,password) VALUES(?,?,?)');
		$exect = $consulta->execute(array($nombre,$email,$password));
		
		if(count($exect)>0)
			return $exect;
		else 
			return 404;
	}
	function getComentarios(){
		$consulta = $this->db->prepare("SELECT * FROM comentario c JOIN usuario u ON c.id_usuario = u.id_usuario");
		$consulta->execute();
		return $consulta->fetchAll();

	}

	function agregarComentario($puntaje,$comentario, $usuario){
		$consulta = $this->db->prepare('INSERT INTO comentario(puntaje,comentario,id_usuario) VALUES(?,?,?)');
		$consulta->execute(array($puntaje,$comentario,$usuario));

		return "Se cargo exitosamente";
	}
	function borrarComentario($id_comentario){
		$consulta = $this->db->prepare('DELETE FROM comentario WHERE id_comentario = (?)');
		$consulta->execute(array($id_comentario));
		return "Se borro un comentario";
	}
}

?>