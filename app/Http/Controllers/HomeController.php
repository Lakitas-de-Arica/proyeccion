<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

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

    protected $galleries = [
        'making-of' => 'Making of',
        'alto-ramirez-2019' => 'Alto Ramirez 2019',
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
        $songs = [
            [
                'title-1' => 'Diana Proye/ Recordando a Chapatín',
                'title-2' => '(diana / huayno)',
                'mp3'     => '01 - Diana Proye - Recordando a Chapatín.mp3',
            ],
            [
                'title-1' => 'Salto del recuerdo',
                'title-2' => '(takirari)',
                'mp3'     => '02 - Salto del recuerdo.mp3',
            ],
            [
                'title-1' => 'Todos vuelven',
                'title-2' => '(vals)',
                'mp3'     => '03 - Todos vuelven.mp3',
            ],
            [
                'title-1' => 'Mil amores',
                'title-2' => '(cumbia)',
                'mp3'     => '04 - Mil amores.mp3',
            ],
            [
                'title-1' => 'Cuando florezca el chuño',
                'title-2' => '(toba)',
                'mp3'     => '05 - Cuando florezca el chuño.mp3',
            ],
            [
                'title-1' => 'El payacito / Culpable de este dolor',
                'title-2' => '(cumbias)',
                'mp3'     => '06 - El payasito - Culpable de este dolor.mp3',
            ],
            [
                'title-1' => 'Mi ilusión / Carnaval de Oruro',
                'title-2' => '(morenadas)',
                'mp3'     => '07 - Mi ilusión - Carnaval de Oruro.mp3',
            ],
            [
                'title-1' => 'Amor y odio',
                'title-2' => '(cumbia)',
                'mp3'     => '08 - Amor y odio.mp3',
            ],
            [
                'title-1' => 'El amor estuvo aqui',
                'title-2' => '(bolero)',
                'mp3'     => '09 - El amor estuvo aqui.mp3',
            ],
            [
                'title-1' => 'Lo que él me hizo',
                'title-2' => '(cumbia)',
                'mp3'     => '10 - Lo que él me hizo.mp3',
            ],
            [
                'title-1' => 'Sufrire, llorare',
                'title-2' => '(cumbia)',
                'mp3'     => '11 - Sufriré lloraré.mp3',
            ],
            [
                'title-1' => 'Entrando a Illapata',
                'title-2' => '(huayno)',
                'mp3'     => '12 - Entrando a Illapata.mp3',
            ],
        ];

        return view('music')->with('songs', $songs);
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

    public function galleries($section = null)
    {
        if ($section) {
            if (array_key_exists($section, $this->galleries)) {

                $photos = Array();

                $directory = public_path("images/$section");
                $files = File::files($directory);

                foreach ($files as $file) {
                    $f = asset('images/'.$section.'/'.$file->getFilename());
                    $infoImagen = getimagesize(public_path('images/'.$section.'/'.$file->getFilename()));

                    $photos[] = [
                        'file' => $f,
                        'width' => $infoImagen[0],
                        'height' => $infoImagen[1],
                    ];
                }

                return view('gallery-section')
                        ->with('title', $this->galleries[$section])
                        ->with('photos', $photos);
            }
        }

        return view('gallery');
    }

    public function credits()
    {
        return view('credits')
                ->with('logos', $this->sponsorshipLogos);
    }

    public function contact()
    {
        return view('contact');
    }

}
