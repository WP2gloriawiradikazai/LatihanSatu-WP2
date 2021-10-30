<?php
 class tokosepatu extends CI_Controller
 {
    public function index()
    {
        $this->load->view('view-form-tokosepatu');
    }

    public function cetak()
    {
        $this->form_validation->set_rules(
            'nama',
            'nama',
            'required|min_length[3]',
            [
                'required' => 'Nama Wajib Di isi!',
                'min_length' => 'Nama terlalu pendek!'
            ]
        
        );
        
        $this->form_validation->set_rules(
            'no',
            'no handphone',
            'required|min_length[11]',
            [
                'required' => 'No Handphone Wajib di isi!',
                'min_length' => 'No Handphone terlalu pendek!'
            ]
        
        );

        $this->form_validation->set_rules('merk', 'merk sepatu', 'required', [
            'required' =>  "Merk Sepatu Wajib dipilih!"
        ]);

        $this->form_validation->set_rules('size', 'size sepatu', 'required', [
            'required' =>  "Ukuran Sepatu Wajib dipilih!"
        ]);

        if ($this->form_validation->run() != true) {
            $this->load->view('view-form-tokosepatu');
        } else {

            $data = [
                'nama' => $this->input->post('nama'),
                'no' => $this->input->post('no'),
                'merk' => $this->input->post('merk'),
                'size' => $this->input->post('size'),
                'harga' => $this->input->post('harga'),
            ];

            if ($this->input->post('merk') == 'Nike') {
                $data['harga'] = 375000;
            } elseif ($this->input->post('merk') == 'Adidas') {
                $data['harga'] = 300000;
            } elseif ($this->input->post('merk') == 'Kickers') {
                $data['harga'] = 250000;
            } elseif ($this->input->post('merk') == 'Eiger') {
                $data['harga'] = 275000;
            } elseif ($this->input->post('merk') == 'Bucherri') {
                $data['harga'] = 400000;
            }

            $this->load->view('view-data-tokosepatu' , $data);
        }
    }
}