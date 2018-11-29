<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Pemesanan_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function tampil()
    {
     /*$query =  "SELECT ps.nama_pasien, d.nama_dokter, p.nama_poli, pm.tanggal, w.waktu
                   FROM  pemesanan pm, pasien ps, dokter d, poli p, waktu w
                   WHERE pm.id_pasien = ps.id_pasien AND pm.id_dokter = d.id_dokter AND pm.id_poli = p.id_poli AND pm.id_waktu = w.id_waktu";

        return $this->db->query($query);
        }*/
      $this->db->select('*');
        $this->db->from('pemesanan');
        $this->db->join('dokter','dokter.id_dokter=pemesanan.id_dokter');
        $this->db->join('pasien','pasien.id_pasien=pemesanan.id_pasien');
        $this->db->join('poli','poli.id_poli=pemesanan.id_poli');
        $this->db->join('waktu','waktu.id_waktu=pemesanan.id_waktu')->where('pemesanan.id_pasien',$this->session->userdata('id_pasien'));
        
        $query = $this->db->get();
        return $query;
    }
    public function pasien_pemesanan($id_pasien)
    {
      $id = $this->session->userdata['login']['id_pasien'];
      $this->db->select('*');
      $this->db->where('pasien.id_pasien',$id_pasien);
      $this->db->from('pemesanan');
      $this->db->join('pasien','pasien.id_pasien = pemesanan.id_pasien');

      $query = $this->db->get();
      return $query->result();
    }
    /*
     * Get pemesanan by id_pemesanan
     */
    function get_pemesanan($id_pemesanan)
    {
        return $this->db->get_where('pemesanan',array('id_pemesanan'=>$id_pemesanan))->row_array();
    }
        
    /*
     * Get all pemesanan
     */
    public function pasien_pesan()
    {
      $id = $this->session->userdata('id_pasien');
      $query = $this->db->query('SELECT * FROM pasien WHERE id_pasien="$id"');
      return $query;
    }
    function get_all_pemesanan()
    {
        $this->db->order_by('id_pemesanan', 'desc');
        return $this->db->get('pemesanan')->result_array();
    }
        
    function simpan(){
    $id_pasien = $this->input->post('id_pasien');
    $id_poli = $this->input->post('id_poli');
    $id_dokter = $this->input->post('id_dokter');
    $id_waktu = $this->input->post('id_waktu');
    $tanggal = $this->input->post('tanggal');
    
    $data = array(
      'id_pasien' => $id_pasien,
      'id_poli' => $id_poli,
      'id_dokter' => $id_dokter,
      'id_waktu' => $id_waktu,
      'tanggal' => $tanggal,
    );
    $query = $this->db->insert('pemesanan',$data);
    return $query;
    }
    /*
     * function to add new pemesanan
     










     

    function add_pemesanan($params)
    {
      $params = array(
            'id_pasien' => $this->input->post('id_pasien'),
            'id_poli' => $this->input->post('id_poli'),
            'id_dokter' => $this->input->post('id_dokter'),
            'id_waktu' => $this->input->post('id_waktu'),
            'tanggal'=> $this->input->post('tanggal')
        );
        $this->db->insert('kendaraan',$params);
       //$query = $this->db->query('INSERT INTO `pemesanan`(`id_pemesanan`, `id_pasien`, `id_dokter`, `id_poli`, `id_waktu`, `tanggal`) VALUES ("",id_pasien,id_dokter,id_poli,id_waktu,tanggal);');
        //return $query;
      //$this->db->insert('pemesanan',$params);
        //return $this->db->insert_id();
    }
    
    /*
     * function to update pemesanan
     */
    function update_pemesanan($id_pemesanan,$params)
    {
        $this->db->where('id_pemesanan',$id_pemesanan);
        return $this->db->update('pemesanan',$params);
    }
    
    /*
     * function to delete pemesanan
     */
    function delete_pemesanan($id_pemesanan)
    {
        return $this->db->delete('pemesanan',array('id_pemesanan'=>$id_pemesanan));
    }
}