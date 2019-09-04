<?php
class Pages extends CI_Controller{

    public function Login($page = 'login')
{
  if (!file_exists(APPPATH.'views/contents/'.$page.'.php')) {
    show_404();
  }
    // $this->load->view('templates/header',$data);
    $this->load->view('contents/'.$page);
    // $this->load->view('templates/footer');

}


public function LoginProcess()
{
    $usr = $this->input->post("username");
    $pass = $this->input->post("password");

    $exec = $this->users_model->MatchData($usr,$pass);
    if ($exec) {

        $dataUser = array(
            'id' => $exec[0]['id'],
            'nama'=> $exec[0]['nama'],
            'username' => $exec[0]['username'],
            'role' => $exec[0]['role']
    );
        $this->session->set_userdata($dataUser);

        redirect(base_url('beranda'));


    } else {

        $this->session->set_flashdata('fail','Login Gagal, username atau password tidak sesuai');
        redirect(base_url('/'));


    }



}

public function Beranda($page = 'beranda')
{
    if (!$this->session->userdata("username")) {

        show_404();

    } else {



    if (!file_exists(APPPATH.'views/contents/'.$page.'.php')) {
        show_404();
      }
      $report = 'all';

      if ($this->input->get('type') == 'week') {
         $report = "week";
      }
      if ($this->input->get('type') == 'month') {
         $report = "month";
      }
      if ($this->input->get('type') == 'year') {
         $report = "year";
      }

      $data['report'] = $this->users_model->GetReport($report);
    //   print_r($data['report']);
    //   die();

        // $this->load->view('templates/header',$data);
        $this->load->view('contents/'.$page,$data);
        // $this->load->view('templates/footer');


    }



}

public function CreateCustomer($page = 'create_customer')
{
    if (!$this->session->userdata('username')) {


        show_404();



    } else {


        if (!file_exists(APPPATH.'views/contents/'.$page.'.php')) {
            show_404();
          }

            // $this->load->view('templates/header',$data);
            $this->load->view('contents/'.$page);
            // $this->load->view('templates/footer');


    }




}

public function SaveNewCustomer()
{
    if ($this->session->userdata('username')) {
       
        $chechifAvailable = $this->users_model->CheckCustomer($this->input->post('telp'));
        if ($chechifAvailable) {
            $this->session->set_flashdata('available','Nomer Telepon Sudah Ada, Masukan Nomer Telepon yang lain');
            redirect(base_url('/createcustomer'));
            die();
        }else{
            $Data = array(
                'id'=>date('si'),
                'nama' => $this->input->post('nama'),
                'alamat'=> $this->input->post('alamat'),
                'no_telp'=> $this->input->post('telp'),
                'utang'=> 0,
                'piutang' =>0,
                'diskon'=>$this->input->post('diskon'),
                'created_by'=>$this->session->userdata('username'),
            );
        
            $exec = $this->users_model->SaveCustomer($Data);
            if ($exec) {
                $this->session->set_flashdata('success','Data Telah Tersimpan');
                redirect(base_url('/createcustomer'));
        
            } else {
                $this->session->set_flashdata('fail','Data Gagal Tersimpan');
                redirect(base_url('/createcustomer'));
        
            }
        }


    

    } else {
        

        
        redirect(base_url('/'));
        


    }
    

    

}


public function EditCustomer($page = "editcustomer")
{
    if (!$this->session->userdata("username")) {

        show_404();

    } else {



    if (!file_exists(APPPATH.'views/contents/'.$page.'.php')) {
        show_404();
      }
        $data['customer'] = $this->users_model->getCustomerOnes($this->input->get("id"));
        // $this->load->view('templates/header',$data);
        $this->load->view('contents/'.$page,$data);
        // $this->load->view('templates/footer');


    }

}


public function UpdateCustomer()
{
    if (!$this->session->userdata("username")) {

        show_404();

    } else {
        $dataToDb = array(
            'nama'=>$this->input->post('nama'),
            'alamat'=>$this->input->post('alamat'),
            'no_telp'=>$this->input->post('no_telp'),
            'utang'=>$this->input->post('utang'),
            'piutang'=>$this->input->post('piutang'),
            'diskon'=>$this->input->post('diskon'),
        );
        $update = $this->users_model->UpdDataCustomer($dataToDb,$this->input->get('id'));

        if ($update) {
            $this->session->set_flashdata('update','Update Berhasil');
            redirect('/datacustomer');
        } else {
            $this->session->set_flashdata('noupdate','Update Berhasil');
            redirect('/datacustomer');
        }




    }
}

public function DeleteCustomer()
{
    if ($this->session->userdata("role") === '1') {
        $delete = $this->users_model->DeleteCustomer($this->input->get("id"));
    if ($delete) {
        $this->session->set_flashdata('deleteSukses','Data Berhasil Dihapus');
        redirect('/datacustomer');
    } else {
        $this->session->set_flashdata('deleteGagal','Data Gagal Dihapus');
        redirect('/datacustomer');
    }
    } else {
        die("No Permition Because Your Not Super Admin");
    }



}


public function DataCustomer($page = 'list_customer')
{


    if (!$this->session->userdata("username")) {

        show_404();

    } else {



    if (!file_exists(APPPATH.'views/contents/'.$page.'.php')) {
        show_404();
      }
        $data['customer'] = $this->users_model->getCustomer();
        // $this->load->view('templates/header',$data);
        $this->load->view('contents/'.$page,$data);
        // $this->load->view('templates/footer');


    }


}


public function HistoryCustomer($page = 'history')
{
    if (!$this->session->userdata("username")) {

        show_404();

    } else {



    if (!file_exists(APPPATH.'views/contents/'.$page.'.php')) {
        show_404();
      }
        $data['customer'] = $this->users_model->getHistory($this->input->get('id'));
        $data['customer_info'] = $this->users_model->getCustomerOnes($this->input->get('id'));
        // $this->load->view('templates/header',$data)sa;
        $this->load->view('contents/'.$page,$data);
        // $this->load->view('templates/footer');


    }
}

public function DeleteHistory()
{
   $delete = $this->users_model->deleteHistory($this->input->get('id'),$this->input->get('target'));
   if ($delete) {
     $this->session->set_flashdata('deleteSukses','Berhasil Delete History');
     redirect(base_url('/history?id='.$this->input->get('id').''));
   } else {
     $this->session->set_flashdata('deleteGagal','Gagal Delete History');
     redirect(base_url('/history?id='.$this->input->get('id').''));
   }

}


public function MoneyFlow($page = 'moneyflow')

{
    if (!$this->session->userdata('username')) {

        show_404();


    } else {


        if (!file_exists(APPPATH.'views/contents/'.$page.'.php')) {
            show_404();
          }

            $data['customer'] = $this->users_model->getCustomer();
            // $this->load->view('templates/header',$data);
            $this->load->view('contents/'.$page,$data);
            // $this->load->view('templates/footer');


    }





}

public function MoneyFlowSave()
{
    // 1 = peminjaman
    // 2 = pembayaran hutang
    if ($this->input->post('jenis') == 1) {

        $get = $this->users_model->getCustomerOnes($this->input->post('customer'));
        if ($this->input->post('nominal') == 0) {
            $this->session->set_flashdata('utangnol','Transaksi Gagal, Nominal Berjumlah Rp. 0');
            redirect(base_url('/money'));
            die();
        }
        
        $piutang = (!empty($get[0]['piutang']) ? $get[0]['piutang'] : 0);
        $utang = (!empty($get[0]['utang']) ? $get[0]['utang'] : 0);
        // update To Data Customer
        // diskon
        $diskon = $this->input->post('nominal')*$get[0]['diskon']/100;
        // utang dari form - diskon
        $newutang = $this->input->post('nominal')-$diskon;
        // total hutang
        $tot = $get[0]['utang']+$newutang;
        $statpiutang = $piutang - $tot;
        $totUtang = $tot - $piutang;

        // $rt = array(
        //     'piutang dari db'=>$piutang,
        //     'utang dari db'=>$utang,
        //     'hutang dari form'=>$this->input->post('nominal'),
        //     'diskon'=>$diskon,
        //     'jadi'=>$newutang,
        //     'total utang'=>$totUtang
        // );
        // print_r($rt);die();

        // echo $statpiutang;die();

        $data2 = array(
            'utang'=>($totUtang < 0 ? 0 : $totUtang),
            'piutang'=>($statpiutang < 0  ? 0 : $statpiutang),
        );
        $toDataCustomer = $this->users_model->UpdDataCustomer($data2,$this->input->post('customer'));
        if (!$toDataCustomer) {
            die("gagal saved");
        }

        $get_for_history = $this->users_model->getCustomerOnes($this->input->post('customer'));
        $piutang_for_history = (!empty($get_for_history[0]['piutang']) ? $get_for_history[0]['piutang'] : 0);
        $utang_for_history = (!empty($get_for_history[0]['utang']) ? $get_for_history[0]['utang'] : 0);

        // To History
            $data = array(
                'id_customer'=>$this->input->post('customer'),
                'nama_customer'=>$get[0]['nama'],
                'peminjaman'=>$this->input->post('nominal'),
                'pembayaran'=>0,
                'piutang'=>$piutang_for_history,
                'utang'=>$utang_for_history,
                'input_by'=>$this->session->userdata('username'),
                'diskon'=>$get_for_history[0]['diskon'],
                'is_active'=>1
            );


        $toHistory = $this->users_model->SaveToHistory($data);
        if (!$toHistory) {
            die("gagal saved");
        }

        $this->session->set_flashdata('success','Peminjaman Dana Sebesar Rp. '. number_format($this->input->post('nominal'),2,",",".") .' Telah Berhasil Dicatat Atas nama '.$get[0]['nama']);
        redirect(base_url('/money'));


    } elseif ($this->input->post('jenis') == 2) {

        $get = $this->users_model->getCustomerOnes($this->input->post('customer'));
        if ($this->input->post('nominal') == 0) {
            $this->session->set_flashdata('utangnol','Transaksi Gagal, Nominal Berjumlah Rp. 0');
            redirect(base_url('/money'));
            die();
        }

        // if saldo 0, tidak bisa bayar hutang.
        if ($get[0]['utang'] == 0) {
            $this->session->set_flashdata('utangnol','Transaksi Gagal, Saldo Utang '.$get[0]['nama'].' Berjumlah Rp. 0');
            redirect(base_url('/money'));
            die();
        }


        // Pembayaran(  bayar - utang  )
        $piutang = (!empty($get[0]['piutang']) ? $get[0]['piutang'] : 0);
        $bayar = $this->input->post('nominal')+$piutang;
        $sisa_bayar = $bayar - $get[0]['utang'];
        if ($sisa_bayar < 0 ) {

            $data1 = array(
                'utang'=>abs($sisa_bayar),
            );
            $this->users_model->UpdDataCustomer($data1,$this->input->post('customer'));

        }elseif ($sisa_bayar > 0 ) {

            $data2 = array(
                'utang'=>0,
                'piutang'=>$sisa_bayar,
            );
            $this->users_model->UpdDataCustomer($data2,$this->input->post('customer'));

        }elseif($sisa_bayar == 0){

            $data3 = array(
                'utang'=>0,
                'piutang'=>0,
            );
            $this->users_model->UpdDataCustomer($data3,$this->input->post('customer'));

        }
        $get_for_history = $this->users_model->getCustomerOnes($this->input->post('customer'));
        $piutang_for_history = (!empty($get_for_history[0]['piutang']) ? $get_for_history[0]['piutang'] : 0);
        $utang_for_history = (!empty($get_for_history[0]['utang']) ? $get_for_history[0]['utang'] : 0);

        $data = array(
            'id_customer'=>$this->input->post('customer'),
            'nama_customer'=>$get[0]['nama'],
            'peminjaman'=>0,
            'pembayaran'=>$this->input->post('nominal'),
            'piutang'=>$piutang_for_history,
            'utang'=>$utang_for_history,
            'input_by'=>$this->session->userdata('username'),
            'diskon'=>0,
            'is_active'=>1
        );
        $toHistory = $this->users_model->SaveToHistory($data);


        $this->session->set_flashdata('success','Pembayaran Dana Sebesar Rp. '. number_format($this->input->post('nominal'),2,",",".") .' Telah Berhasil Dicatat Atas nama '.$get[0]['nama']);
        redirect(base_url('/money'));


    }

}

public function CreateAccount($page = 'create_account')
{
    if ($this->session->userdata('role') == 2 || !$this->session->userdata('username')) {

        die("No Permition Because Your Not Super Admin");


    } else {

        if (!file_exists(APPPATH.'views/contents/'.$page.'.php')) {
            show_404();
          }

            // $this->load->view('templates/header',$data);
            $this->load->view('contents/'.$page);
            // $this->load->view('templates/footer');


    }




}


public function SaveNewAccount()
{
    $username = $this->users_model->CheckAccount($this->input->post('username'));

    if ($username) {
        $this->session->set_flashdata('adaakun','Username Sudah Terpakai');
        redirect('/createaccount');
    }


    $data = array(
        'username'=>$this->input->post('username'),
        'password'=>$this->input->post('password'),
        'nama'=>$this->input->post('nama'),
        'role'=>2,
    );

    $save = $this->users_model->SaveNewAccount($data);
    if ($save) {
        $this->session->set_flashdata('success','Akun Baru telah ditambahkan');
        redirect('/createaccount');
    } else {
        $this->session->set_flashdata('fail','Akun Baru gagal ditambahkan');
        redirect('/createaccount');
    }

}

public function DataAdmin($page = "list_admin")
{
    if (!$this->session->userdata('username')) {

        die("No Permition Because Your Not Super Admin");



    } else {

        if (!file_exists(APPPATH.'views/contents/'.$page.'.php')) {
            show_404();
          }
            $data['admin'] = $this->users_model->getUser();
            // $this->load->view('templates/header',$data);
            $this->load->view('contents/'.$page,$data);
            // $this->load->view('templates/footer');


    }
}

public function DataAdminOnes($page = "editadmin")
{
    if (!$this->session->userdata('username')) {

        die("No Permition Because Your Not Super Admin");



    } else {

        if (!file_exists(APPPATH.'views/contents/'.$page.'.php')) {
            show_404();
          }
            $data['admin'] = $this->users_model->getUserOnes($this->input->get("id"));
            // $this->load->view('templates/header',$data);
            $this->load->view('contents/'.$page,$data);
            // $this->load->view('templates/footer');


    }
}


public function UpdateAdmin()
{
    if ($this->session->userdata('role') == 2) {

        die("No Permition Because Your Not Super Admin");

    } else {
        // echo $this->input->get("id");
        // die();
        $password = (!empty($this->input->get('password')) ? $this->input->get('password') : NULL );
        $data=[];

        if (empty($this->input->post('password'))) {
            $data = array(
                'username'=>$this->input->post('username'),
                'nama'=>$this->input->post('nama'),
            );
        } else {
            $data = array(
                'username'=>$this->input->post('username'),
                'nama'=>$this->input->post('nama'),
                'password'=>$this->input->post('password'),
            );
        }


        $update = $this->users_model->UpdDataUser($data,$this->input->get("id"));

        if ($update) {
            $this->session->set_flashdata('success','Akun Berhasil Di Update');
            redirect('/dataadmin');
        } else {
            $this->session->set_flashdata('fail','Akun Gagal Di Update');
            redirect('/dataadmin');
        }


    }

}

public function DeleteAdmin()
{
    if ($this->session->userdata('role') == 2) {

        die("No Permition Because Your Not Super Admin");

    } else {

        $delete = $this->users_model->DeleteUser($this->input->get("id"));

        if ($delete) {
            $this->session->set_flashdata('success','Akun telah Dihapus');
            redirect('/dataadmin');
        } else {
            $this->session->set_flashdata('fail','Akun Gagal Dihapus');
            redirect('/dataadmin');
        }


    }

}


public function logout()
{
    $dataUser = array('id','nama','username','role');# code...
    $this->session->unset_userdata($dataUser);

    redirect(
    base_url('/')
    );
}

}
