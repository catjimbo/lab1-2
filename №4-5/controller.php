<?php

	function getRecords($db) {
		$records = false;
		$query = $db->query('SELECT * FROM records');
		if ($query->num_rows > 0) {
			$records = array();
			while ($row = $query->fetch_assoc()) {
				$records[] = $row;
			}
		}
		return $records;
	}

	function getRecord($db, $id) {
		$record = false;
		$query = $db->query('SELECT * FROM records WHERE id="'.$id.'"');
		if ($query->num_rows > 0) {
			$record = $query->fetch_assoc();
		}
		return $record;
	}

	function addRecord($db, $post) {
		$title = $db->real_escape_string($post['title']);
		$description = $db->real_escape_string($post['description']);
		$price = (int) $post['price'];
		$photo = '';
		if (array_key_exists('photo',$_FILES) && $_FILES['photo']['error'] == 0) {
			$photo = $_FILES['photo']['name'];
			move_uploaded_file($_FILES['photo']['tmp_name'], 'photo/'.$_FILES['photo']['name']);
		}
		$db->query('INSERT INTO records SET title="'.$title.'", description="'.$description.'", price="'.$price.'", photo="'.$photo.'"');
		header('Location: /list.php');
	}

	function updateRecord($db, $post) {
		$id = (int) $post['id'];
		$title = $db->real_escape_string($post['title']);
		$description = $db->real_escape_string($post['description']);
		$price = (int) $post['price'];
		$photo = '';
		if (array_key_exists('photo',$_FILES) && $_FILES['photo']['error'] == 0) {
			$photo = $_FILES['photo']['name'];
			move_uploaded_file($_FILES['photo']['tmp_name'], 'photo/'.$_FILES['photo']['name']);
		}
		$db->query('UPDATE records SET title="'.$title.'", description="'.$description.'", price="'.$price.'", photo="'.$photo.'" WHERE id="'.$id.'"');
		header('Location: /list.php');
	}

	function deleteRecord($db, $post) {
		$id = (int) $post['id'];
		$db->query('DELETE FROM records WHERE id="'.$id.'"');
		header('Location: /list.php');
	}

	if (isset($_POST['action'])) {
		switch ($_POST['action']) {
			case 'create':
				addRecord($db, $_POST);
			break;
			case 'update':
				updateRecord($db, $_POST);
			break;
			case 'delete':
				deleteRecord($db, $_POST);
			break;
		}
	}

?>