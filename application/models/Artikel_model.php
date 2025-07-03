<?php
class Artikel_model extends CI_Model {
    public function get_all() {
        return $this->db->get('artikel')->result();
    }

    public function get($id) {
        return $this->db->get_where('artikel', ['id' => $id])->row();
    }

    public function save($data, $id = null) {
        if ($id) {
            $this->db->where('id', $id)->update('artikel', $data);
        } else {
            $this->db->insert('artikel', $data);
        }
    }

    public function delete($id) {
        $this->db->delete('artikel', ['id' => $id]);
    }

    public function count() {
        return $this->db->count_all('artikel');
    }
}