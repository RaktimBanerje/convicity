<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ViewController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('inc/header');
		$this->load->view('home');
		$this->load->view('inc/footer');
	}

	public function corporate()
	{
		$this->load->view('inc/header');
		$this->load->view('corporate');
		$this->load->view('inc/footer');
	}

	public function careers()
	{
		$this->load->view('inc/header');
		$this->load->view('careers');
		$this->load->view('inc/footer');
	}

	public function contact()
	{
		$this->load->view('inc/header');
		$this->load->view('contact');
		$this->load->view('inc/footer');
	}

	public function testinomial()
	{
		$this->load->view('inc/header');
		$this->load->view('testinomial');
		$this->load->view('inc/footer');
	}

	public function news()
	{
		$this->load->view('inc/header');
		$this->load->view('news');
		$this->load->view('inc/footer');
	}

	public function downloads()
	{
		$this->load->view('inc/header');
		$this->load->view('downloads');
		$this->load->view('inc/footer');
	}

	public function gallery()
	{
		$this->load->view('inc/header');
		$this->load->view('gallery');
		$this->load->view('inc/footer');
	}

	public function catelog_elite_villa()
	{
		$this->load->view('inc/header');
		$this->load->view('catelog_elite_villa');
		$this->load->view('inc/footer');
	}

	public function catelog_apartment()
	{
		$this->load->view('inc/header');
		$this->load->view('catelog_apartment');
		$this->load->view('inc/footer');
	}

	public function catelog_classic_villa()
	{
		$this->load->view('inc/header');
		$this->load->view('catelog_classic_villa');
		$this->load->view('inc/footer');
	}

	// Elite Villa
	public function details_elite_villa_3k()
	{
		$data = [
			"name" => "3 Katha Villa Elite",
			"brochure" => "elite/3k/brochure.pdf",
			"images" => [
				"elite/3k/1.jpg",
				"elite/3k/2.jpg"
			],
			"description" => "Admittedly not for everyone, Villa Elite are the ultimate limited edition living experience. Each villa is unique and captures the spirit of independent living spaces with a blend of floral serenity. With meticulously designed aesthetic exteriors, they are the spaces so vibrant that while you enjoy the best living style, you and your family will create the best moments.",
			"land_area" => "Land Area : 2880 sq.ft. (with Landscape Garden)",
			"build_area" => "Built-up Area : 2584 sq.ft.",
			"ground_floor" => "Ground Floor : 1284 sq.ft.",
			"first_floor" => "First Floor : 1300 sq.ft.",
			"specification" => [
				["icon" => "12.png", "heading" => "DOOR FRAMES AND SHUTTERS", 	"detail" => "Frame - Shal Wood, Shutter - Flush door, Hardware - Lock, Docorative Handle/Knob."],
				["icon" => "11.png", "heading" => "TOILETS", 					"detail" => "Floor: Vitrified Tile - Anti Skid, Interior: Tiles Dado, Bathroom Doors: Frame - Pvc, Shutter - Designer Pvc Door, Sanitary Fittings: Chinaware - White/Ivory, SS Fittings."],
				["icon" => "19.png", "heading" => "ELECTRICAL", 				"detail" => "Cabling - Copper, Concealed PVC Conduit, Switches - Modular."],
				["icon" => "13.png", "heading" => "FLOORING", 					"detail" => "Floor : Vitrified Tiles, Staircase Marble finish."],
				["icon" => "17.png", "heading" => "PAINTING", 					"detail" => "Surface Treatment, Stone Cladding and Exteriors-Grade Paint in combination as per design."],
				["icon" => "22.png", "heading" => "SECURITY", 					"detail" => "Gated community with 24x7 Security Personnel all over the project. CCTV Surveillance."],
				["icon" => "1.png",  "heading" => "KITCHEN", 					"detail" => "Floor: Anti skid Tiles, Interior Tiles Dado - Ready for Modular Set-up with Granite Top."],
				["icon" => "16.png", "heading" => "WINDOW FRAMES & SHUTTERS", 	"detail" => "Window Shutter - Aluminium, Glazing - 5mm thick glass"],
				["icon" => "23.png", "heading" => "WATER SUPPLY", 				"detail" => "Ground Water supply from deep submersible pumps, individual underground reservoir and overhead tank."],
				["icon" => "20.png", "heading" => "CABLE TV CONNECTION", 		"detail" => "Provision for cable T.V/DTH/Broadband connection."],
				["icon" => "18.png", "heading" => "STRUCTURE", 					"detail" => "Good quality Bricks with Cement mortar."],
				["icon" => "15.png", "heading" => "AC POINT", 					"detail" => "Provision for AC point in all Bedrooms."],
				["icon" => "21.png", "heading" => "FOUNDATION", 				"detail" => "RCC Frame with cement mortar."],
			],
			"location" => "elite/3k/location/location.jpg",
			"ground_floor" => "elite/3k/location/ground.jpg",
			"first_floor" => "elite/3k/location/first.jpg" 
		];

		$this->load->view('inc/header');
		$this->load->view('project_details', $data);
		$this->load->view('inc/footer');
	}

	public function details_elite_villa_4k()
	{
		$data = [
			"name" => "4 Katha Villa Elite",
			"brochure" => "elite/4k/brochure.pdf",
			"images" => [
				"elite/4k/1.jpg",
				"elite/4k/2.jpg"
			],
			"description" => "Admittedly not for everyone, Villa Elite are the ultimate limited edition living experience. Each villa is unique and captures the spirit of independent living spaces with a blend of floral serenity. With meticulously designed aesthetic exteriors, they are the spaces so vibrant that while you enjoy the best living style, you and your family will create the best moments.",
			"land_area" => "Land Area : 2880 sq.ft. (with Landscape Garden)",
			"build_area" => "Built-up Area : 2584 sq.ft.",
			"ground_floor" => "Ground Floor : 1284 sq.ft.",
			"first_floor" => "First Floor : 1300 sq.ft.",
			"specification" => [
				["icon" => "12.png", "heading" => "DOOR FRAMES AND SHUTTERS", 	"detail" => "Frame - Shal Wood, Shutter - Flush door, Hardware - Lock, Docorative Handle/Knob."],
				["icon" => "11.png", "heading" => "TOILETS", 					"detail" => "Floor: Vitrified Tile - Anti Skid, Interior: Tiles Dado, Bathroom Doors: Frame - Pvc, Shutter - Designer Pvc Door, Sanitary Fittings: Chinaware - White/Ivory, SS Fittings."],
				["icon" => "19.png", "heading" => "ELECTRICAL", 				"detail" => "Cabling - Copper, Concealed PVC Conduit, Switches - Modular."],
				["icon" => "13.png", "heading" => "FLOORING", 					"detail" => "Floor : Vitrified Tiles, Staircase Marble finish."],
				["icon" => "17.png", "heading" => "PAINTING", 					"detail" => "Surface Treatment, Stone Cladding and Exteriors-Grade Paint in combination as per design."],
				["icon" => "22.png", "heading" => "SECURITY", 					"detail" => "Gated community with 24x7 Security Personnel all over the project. CCTV Surveillance."],
				["icon" => "1.png",  "heading" => "KITCHEN", 					"detail" => "Floor: Anti skid Tiles, Interior Tiles Dado - Ready for Modular Set-up with Granite Top."],
				["icon" => "16.png", "heading" => "WINDOW FRAMES & SHUTTERS", 	"detail" => "Window Shutter - Aluminium, Glazing - 5mm thick glass"],
				["icon" => "23.png", "heading" => "WATER SUPPLY", 				"detail" => "Ground Water supply from deep submersible pumps, individual underground reservoir and overhead tank."],
				["icon" => "20.png", "heading" => "CABLE TV CONNECTION", 		"detail" => "Provision for cable T.V/DTH/Broadband connection."],
				["icon" => "18.png", "heading" => "STRUCTURE", 					"detail" => "Good quality Bricks with Cement mortar."],
				["icon" => "15.png", "heading" => "AC POINT", 					"detail" => "Provision for AC point in all Bedrooms."],
				["icon" => "21.png", "heading" => "FOUNDATION", 				"detail" => "RCC Frame with cement mortar."],
			],
			"location" => "elite/4k/location/location.jpg",
			"ground_floor" => "elite/4k/location/ground.jpg",
			"first_floor" => "elite/4k/location/first.jpg" 
		];


		$this->load->view('inc/header');
		$this->load->view('project_details', $data);
		$this->load->view('inc/footer');
	}


	// Okside Apartment
	public function details_okside_apartment_p3()
	{
		$data = [
			"name" => "Oakside Apartment P3",
			"brochure" => "okside/p3/brochure.pdf",
			"images" => [
				"okside/p3/1.jpg",
				"okside/p3/2.jpg"
			],
			"description" 	=> "Oakside Apartment by Convicity offers spacious 3BHK apartments that have been carefully designed by experts for an opulent feel, together with amenities and facilities. It has 3 large size bedrooms, two balcony's, provision for covered car parking, etc.",
			"land_area" 	=> "Land Area : 2160 sq.ft.",
			"build_area" 	=> "Super Built-up Area : 1750 sq.ft.",
			"ground_floor" 	=> "Built-up Area : 1400 sq.ft.",
			"first_floor" 	=> "Car Parking Area : 125 sq.ft.",
			"specification" => [
				["icon" => "12.png", "heading" => "DOOR FRAMES AND SHUTTERS", 	"detail" => "Frame - Shal Wood, Shutter - Flush door, Hardware - Lock, Docorative Handle/Knob."],
				["icon" => "11.png", "heading" => "TOILETS", 					"detail" => "Floor: Vitrified Tile - Anti Skid, Interior: Tiles Dado, Bathroom Doors: Frame - Pvc, Shutter - Designer Pvc Door, Sanitary Fittings: Chinaware - White/Ivory, SS Fittings."],
				["icon" => "19.png", "heading" => "ELECTRICAL", 				"detail" => "Cabling - Copper, Concealed PVC Conduit, Switches - Modular."],
				["icon" => "13.png", "heading" => "FLOORING", 					"detail" => "Floor : Vitrified Tiles, Staircase Marble finish."],
				["icon" => "17.png", "heading" => "PAINTING", 					"detail" => "Surface Treatment, Stone Cladding and Exteriors-Grade Paint in combination as per design."],
				["icon" => "22.png", "heading" => "SECURITY", 					"detail" => "Gated community with 24x7 Security Personnel all over the project. CCTV Surveillance."],
				["icon" => "1.png",  "heading" => "KITCHEN", 					"detail" => "Floor: Anti skid Tiles, Interior Tiles Dado - Ready for Modular Set-up with Granite Top."],
				["icon" => "16.png", "heading" => "WINDOW FRAMES & SHUTTERS", 	"detail" => "Window Shutter - Aluminium, Glazing - 5mm thick glass"],
				["icon" => "23.png", "heading" => "WATER SUPPLY", 				"detail" => "Ground Water supply from deep submersible pumps, individual underground reservoir and overhead tank."],
				["icon" => "20.png", "heading" => "CABLE TV CONNECTION", 		"detail" => "Provision for cable T.V/DTH/Broadband connection."],
				["icon" => "18.png", "heading" => "STRUCTURE", 					"detail" => "Good quality Bricks with Cement mortar."],
				["icon" => "15.png", "heading" => "AC POINT", 					"detail" => "Provision for AC point in all Bedrooms."],
				["icon" => "21.png", "heading" => "FOUNDATION", 				"detail" => "RCC Frame with cement mortar."],
			],
			"location" => "okside/p3/location/location.jpg",
			"ground_floor" => "okside/p3/location/ground.jpg",
			"first_floor" => "okside/p3/location/first.jpg" 
		];


		$this->load->view('inc/header');
		$this->load->view('project_details', $data);
		$this->load->view('inc/footer');
	}
	public function details_okside_apartment_p28()
	{
		$data = [
			"name" => "Oakside Apartment P28/1",
			"brochure" => "okside/p28/brochure.pdf",
			"images" => [
				"okside/p28/1.jpg",
				"okside/p28/2.jpg"
			],
			"description" 	=> "Oakside Apartment by Convicity offers spacious 2BHK apartments that have been carefully designed by experts for an opulent feel, together with amenities and facilities. It has 2 large size bedrooms, large balcony, provision for covered car parking, etc.",
			"land_area" 	=> "Land Area : 1800 sq.ft.",
			"build_area" 	=> "Super Built-up Area : 1075 sq.ft.",
			"ground_floor" 	=> "Built-up Area : 860 sq.ft.",
			"first_floor" 	=> "Car Parking Area : 120 sq.ft.",
			"specification" => [
				["icon" => "12.png", "heading" => "DOOR FRAMES AND SHUTTERS", 	"detail" => "Frame - Shal Wood, Shutter - Flush door, Hardware - Lock, Docorative Handle/Knob."],
				["icon" => "11.png", "heading" => "TOILETS", 					"detail" => "Floor: Vitrified Tile - Anti Skid, Interior: Tiles Dado, Bathroom Doors: Frame - Pvc, Shutter - Designer Pvc Door, Sanitary Fittings: Chinaware - White/Ivory, SS Fittings."],
				["icon" => "19.png", "heading" => "ELECTRICAL", 				"detail" => "Cabling - Copper, Concealed PVC Conduit, Switches - Modular."],
				["icon" => "13.png", "heading" => "FLOORING", 					"detail" => "Floor : Vitrified Tiles, Staircase Marble finish."],
				["icon" => "17.png", "heading" => "PAINTING", 					"detail" => "Surface Treatment, Stone Cladding and Exteriors-Grade Paint in combination as per design."],
				["icon" => "22.png", "heading" => "SECURITY", 					"detail" => "Gated community with 24x7 Security Personnel all over the project. CCTV Surveillance."],
				["icon" => "1.png",  "heading" => "KITCHEN", 					"detail" => "Floor: Anti skid Tiles, Interior Tiles Dado - Ready for Modular Set-up with Granite Top."],
				["icon" => "16.png", "heading" => "WINDOW FRAMES & SHUTTERS", 	"detail" => "Window Shutter - Aluminium, Glazing - 5mm thick glass"],
				["icon" => "23.png", "heading" => "WATER SUPPLY", 				"detail" => "Ground Water supply from deep submersible pumps, individual underground reservoir and overhead tank."],
				["icon" => "20.png", "heading" => "CABLE TV CONNECTION", 		"detail" => "Provision for cable T.V/DTH/Broadband connection."],
				["icon" => "18.png", "heading" => "STRUCTURE", 					"detail" => "Good quality Bricks with Cement mortar."],
				["icon" => "15.png", "heading" => "AC POINT", 					"detail" => "Provision for AC point in all Bedrooms."],
				["icon" => "21.png", "heading" => "FOUNDATION", 				"detail" => "RCC Frame with cement mortar."],
			],
			"location" => "okside/p28/location/location.jpg",
			"ground_floor" => "okside/p28/location/ground.jpg",
			"first_floor" => "okside/p28/location/first.jpg" 
		];


		$this->load->view('inc/header');
		$this->load->view('project_details', $data);
		$this->load->view('inc/footer');
	}


	// Classic Villa
	public function details_classic_villa_1k()
	{
		$data = [
			"name" => "1.5 Katha Villa",
			"brochure" => "classic/1k/brochure.pdf",
			"images" => [
				"classic/1k/1.jpg",
				"classic/1k/2.jpg"
			],
			"description" 	=> "1.5 Katha Convicity Villa epitomizes the pinnacle of living. Built on a land area of 1080 sq ft —with a built-up area of about 895 sq ft, the Villa comes loaded with many features. It has 2 large size bedrooms + study, open terrace in the first floor, provision for covered car parking, garden space, etc.",
			"land_area" 	=> "Land Area : 1080 sq.ft.",
			"build_area" 	=> "Built-up Area : 895 sq.ft.",
			"ground_floor" 	=> "",
			"first_floor" 	=> "",
			"specification" => [
				["icon" => "12.png", "heading" => "DOOR FRAMES AND SHUTTERS", 	"detail" => "Frame - Shal Wood, Shutter - Flush door, Hardware - Lock, Docorative Handle/Knob."],
				["icon" => "11.png", "heading" => "TOILETS", 					"detail" => "Floor: Vitrified Tile - Anti Skid, Interior: Tiles Dado, Bathroom Doors: Frame - Pvc, Shutter - Designer Pvc Door, Sanitary Fittings: Chinaware - White/Ivory, SS Fittings."],
				["icon" => "19.png", "heading" => "ELECTRICAL", 				"detail" => "Cabling - Copper, Concealed PVC Conduit, Switches - Modular."],
				["icon" => "13.png", "heading" => "FLOORING", 					"detail" => "Floor : Vitrified Tiles, Staircase Marble finish."],
				["icon" => "17.png", "heading" => "PAINTING", 					"detail" => "Surface Treatment, Stone Cladding and Exteriors-Grade Paint in combination as per design."],
				["icon" => "22.png", "heading" => "SECURITY", 					"detail" => "Gated community with 24x7 Security Personnel all over the project. CCTV Surveillance."],
				["icon" => "1.png",  "heading" => "KITCHEN", 					"detail" => "Floor: Anti skid Tiles, Interior Tiles Dado - Ready for Modular Set-up with Granite Top."],
				["icon" => "16.png", "heading" => "WINDOW FRAMES & SHUTTERS", 	"detail" => "Window Shutter - Aluminium, Glazing - 5mm thick glass"],
				["icon" => "23.png", "heading" => "WATER SUPPLY", 				"detail" => "Ground Water supply from deep submersible pumps, individual underground reservoir and overhead tank."],
				["icon" => "20.png", "heading" => "CABLE TV CONNECTION", 		"detail" => "Provision for cable T.V/DTH/Broadband connection."],
				["icon" => "18.png", "heading" => "STRUCTURE", 					"detail" => "Good quality Bricks with Cement mortar."],
				["icon" => "15.png", "heading" => "AC POINT", 					"detail" => "Provision for AC point in all Bedrooms."],
				["icon" => "21.png", "heading" => "FOUNDATION", 				"detail" => "RCC Frame with cement mortar."],
			],
			"location" => "classic/1k/location/location.jpg",
			"ground_floor" => "classic/1k/location/ground.jpg",
			"first_floor" => "classic/1k/location/first.jpg" 
		];

		$this->load->view('inc/header');
		$this->load->view('project_details', $data);
		$this->load->view('inc/footer');
	}
	public function details_classic_villa_2k()
	{
		$data = [
			"name" => "2 Katha Villa",
			"brochure" => "classic/2k/brochure.pdf",
			"images" => [
				"classic/2k/1.jpg",
				"classic/2k/2.jpg"
			],
			"description" 	=> "2 Katha Convicity Villa epitomizes the pinnacle of living. Built on a land area of 1440 sq ft —with a built-up area of about 1265 sq ft, the Villa comes loaded with many features. It has 3 large size bedrooms, two big terrace in the first floor, provision for covered car parking, garden space, etc.",
			"land_area" 	=> "Land Area : 1440 sq.ft.",
			"build_area" 	=> "Built-up Area : 1265 sq.ft.",
			"ground_floor" 	=> "",
			"first_floor" 	=> "",
			"specification" => [
				["icon" => "12.png", "heading" => "DOOR FRAMES AND SHUTTERS", 	"detail" => "Frame - Shal Wood, Shutter - Flush door, Hardware - Lock, Docorative Handle/Knob."],
				["icon" => "11.png", "heading" => "TOILETS", 					"detail" => "Floor: Vitrified Tile - Anti Skid, Interior: Tiles Dado, Bathroom Doors: Frame - Pvc, Shutter - Designer Pvc Door, Sanitary Fittings: Chinaware - White/Ivory, SS Fittings."],
				["icon" => "19.png", "heading" => "ELECTRICAL", 				"detail" => "Cabling - Copper, Concealed PVC Conduit, Switches - Modular."],
				["icon" => "13.png", "heading" => "FLOORING", 					"detail" => "Floor : Vitrified Tiles, Staircase Marble finish."],
				["icon" => "17.png", "heading" => "PAINTING", 					"detail" => "Surface Treatment, Stone Cladding and Exteriors-Grade Paint in combination as per design."],
				["icon" => "22.png", "heading" => "SECURITY", 					"detail" => "Gated community with 24x7 Security Personnel all over the project. CCTV Surveillance."],
				["icon" => "1.png",  "heading" => "KITCHEN", 					"detail" => "Floor: Anti skid Tiles, Interior Tiles Dado - Ready for Modular Set-up with Granite Top."],
				["icon" => "16.png", "heading" => "WINDOW FRAMES & SHUTTERS", 	"detail" => "Window Shutter - Aluminium, Glazing - 5mm thick glass"],
				["icon" => "23.png", "heading" => "WATER SUPPLY", 				"detail" => "Ground Water supply from deep submersible pumps, individual underground reservoir and overhead tank."],
				["icon" => "20.png", "heading" => "CABLE TV CONNECTION", 		"detail" => "Provision for cable T.V/DTH/Broadband connection."],
				["icon" => "18.png", "heading" => "STRUCTURE", 					"detail" => "Good quality Bricks with Cement mortar."],
				["icon" => "15.png", "heading" => "AC POINT", 					"detail" => "Provision for AC point in all Bedrooms."],
				["icon" => "21.png", "heading" => "FOUNDATION", 				"detail" => "RCC Frame with cement mortar."],
			],
			"location" => "classic/2k/location/location.jpg",
			"ground_floor" => "classic/2k/location/ground.jpg",
			"first_floor" => "classic/2k/location/first.jpg" 
		];


		$this->load->view('inc/header');
		$this->load->view('project_details', $data);
		$this->load->view('inc/footer');
	}
	public function details_classic_villa_3k()
	{
		$data = [
			"name" => "3 Katha Villa",
			"brochure" => "classic/3k/brochure.pdf",
			"images" => [
				"classic/3k/1.jpg",
				"classic/3k/2.jpg"
			],
			"description" 	=> "3 Katha Convicity Villa epitomizes the pinnacle of living. Built on a land area of 2160 sq ft —with a built-up area of about 1872 sq ft, the Villa comes loaded with many features. It has 4 large size bedrooms, two big terrace in the first floor, provision for covered car parking, garden space, etc.",
			"land_area" 	=> "Land Area : 2160 sq.ft.",
			"build_area" 	=> "Built-up Area : 1872 sq.ft.",
			"ground_floor" 	=> "",
			"first_floor" 	=> "",
			"specification" => [
				["icon" => "12.png", "heading" => "DOOR FRAMES AND SHUTTERS", 	"detail" => "Frame - Shal Wood, Shutter - Flush door, Hardware - Lock, Docorative Handle/Knob."],
				["icon" => "11.png", "heading" => "TOILETS", 					"detail" => "Floor: Vitrified Tile - Anti Skid, Interior: Tiles Dado, Bathroom Doors: Frame - Pvc, Shutter - Designer Pvc Door, Sanitary Fittings: Chinaware - White/Ivory, SS Fittings."],
				["icon" => "19.png", "heading" => "ELECTRICAL", 				"detail" => "Cabling - Copper, Concealed PVC Conduit, Switches - Modular."],
				["icon" => "13.png", "heading" => "FLOORING", 					"detail" => "Floor : Vitrified Tiles, Staircase Marble finish."],
				["icon" => "17.png", "heading" => "PAINTING", 					"detail" => "Surface Treatment, Stone Cladding and Exteriors-Grade Paint in combination as per design."],
				["icon" => "22.png", "heading" => "SECURITY", 					"detail" => "Gated community with 24x7 Security Personnel all over the project. CCTV Surveillance."],
				["icon" => "1.png",  "heading" => "KITCHEN", 					"detail" => "Floor: Anti skid Tiles, Interior Tiles Dado - Ready for Modular Set-up with Granite Top."],
				["icon" => "16.png", "heading" => "WINDOW FRAMES & SHUTTERS", 	"detail" => "Window Shutter - Aluminium, Glazing - 5mm thick glass"],
				["icon" => "23.png", "heading" => "WATER SUPPLY", 				"detail" => "Ground Water supply from deep submersible pumps, individual underground reservoir and overhead tank."],
				["icon" => "20.png", "heading" => "CABLE TV CONNECTION", 		"detail" => "Provision for cable T.V/DTH/Broadband connection."],
				["icon" => "18.png", "heading" => "STRUCTURE", 					"detail" => "Good quality Bricks with Cement mortar."],
				["icon" => "15.png", "heading" => "AC POINT", 					"detail" => "Provision for AC point in all Bedrooms."],
				["icon" => "21.png", "heading" => "FOUNDATION", 				"detail" => "RCC Frame with cement mortar."],
			],
			"location" => "classic/3k/location/location.jpg",
			"ground_floor" => "classic/3k/location/ground.jpg",
			"first_floor" => "classic/3k/location/first.jpg" 
		];



		$this->load->view('inc/header');
		$this->load->view('project_details', $data);
		$this->load->view('inc/footer');
	}

	
}
