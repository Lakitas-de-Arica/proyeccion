<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $sponsorshipLogos = [
        'lak__1.svg',
        'lak__2.svg',
        'lak__3.svg',
        'lak__4.svg',
        'lak__5.svg',
        'lak__6.svg',
    ];

    public function index()
    {
        return view('home')
                ->with('logos', $this->sponsorshipLogos);
    }

    public function project()
    {
        return view('project');
    }

    public function story()
    {
        return view('story');
    }

    public function music()
    {
        return view('music');
    }

    public function members()
    {
        $members = [
            [
                'name' => 'Juan Daniel “JotaD” Vásquez Gamboa',
                'image' => 'juan_daniel_jotad_vasquez_gamboa.png',
                'instrument' => '(sanja y contra 1ra)<br>Director'
            ],
            [
                'name' => 'Rodrigo “Rigo” Barbachan Cordero ',
                'image' => 'rodrigo_rigo_barbachan_cordero.png',
                'instrument' => '(lico, sanja, contra y contra bajo 2da)<br>Director musical'
            ],
            [
                'name' => 'Miguel Ángel “Tito Fleyn” Guarachi Viza',
                'image' => 'miguel_angel_tito_fleyn_guarachi_viza.png',
                'instrument' => '(lico, contra y contra bajo 2da)<br>Caporal'
            ],
            [
                'name' => 'Josué “Chapa” Vilca Flores',
                'image' => 'josue_chapa_vilca_flores.png',
                'instrument' => '(lico, contra y contra bajo 1ra)<br>QEPD'
            ],
            [
                'name' => 'Eduardo “Yayo” Valdivia Oyarzo',
                'image' => 'eduardo_yayo_valdivia_oyarzo.png',
                'instrument' => '(lico, sanja, contra y contra bajo 1ra)'
            ],
            [
                'name' => 'Oscar “Cabro Cali” Carrasco Cali',
                'image' => 'oscar_cabro_cali_carrasco_cali.png',
                'instrument' => '(lico y contra 1ra)'
            ],
            [
                'name' => 'Manuel “Natuel” Muñoz Flores',
                'image' => 'manuel_natuel_munoz_flores.png',
                'instrument' => '(lico 1ra)'
            ],
            [
                'name' => 'Hugo Flores Valdez',
                'image' => 'hugo_flores_valdez.png',
                'instrument' => '(lico 1ra)'
            ],
            [
                'name' => 'Maximiliano “Maxi” Pérez Flores',
                'image' => 'maximiliano_maxi_perez_flores.png',
                'instrument' => '(lico 2da)'
            ],
            [
                'name' => 'Alejandro Apata Mamani',
                'image' => 'alejandro_apata_mamani.png',
                'instrument' => '(lico 2da)'
            ],
            [
                'name' => 'José Ignacio “Enekho” Acosta Ponce',
                'image' => 'jose_ignacio_enekho_acosta_ponce.png',
                'instrument' => '(lico y contra 2da, congas, bongós y chimes)'
            ],
            [
                'name' => 'Hans “Hansed” Carita Carita',
                'image' => 'hans_hansed_carita_carita.png',
                'instrument' => '(platillos y guira)'
            ],
            [
                'name' => 'Fernando Josué “Gato” Flores Flores',
                'image' => 'fernando_josue_gato_flores_flores.png',
                'instrument' => '(caja)'
            ],
            [
                'name' => 'Rodrigo Rodolfo “Sata” Bolados',
                'image' => 'rodrigo_rodolfo_sata_bolados.png',
                'instrument' => '(timbaleta)'
            ],
            [
                'name' => 'César Andrés Choque Pacaje',
                'image' => 'cesar_andres_choque_pacaje.png',
                'instrument' => '(bombo)'
            ]
        ];

        return view('members')
                ->with('members', $members);
    }

    public function galleries()
    {
        return redirect()->route('home');
        return view('galleries');
    }

    public function credits()
    {
        return view('credits')
                ->with('logos', $this->sponsorshipLogos);
    }

    public function contact()
    {
        return redirect()->route('home');
        return view('contact');
    }

}
