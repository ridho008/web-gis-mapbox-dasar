<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$data = [
			'title' => 'View Map',
			'layout' => 'home/index'
		];
		$this->load->view('layout/wrapper', $data);
	}

	public function navigasi()
	{
		$data = [
			'title' => 'Navigasi',
			'layout' => 'home/navigasi'
		];
		$this->load->view('layout/wrapper', $data);
	}

	public function geocoder()
	{
		$data = [
			'title' => 'Search Map',
			'layout' => 'home/search_map'
		];
		$this->load->view('layout/wrapper', $data);
	}

	public function geolocation()
	{
		$data = [
			'title' => 'Geolocation',
			'layout' => 'home/geolocation'
		];
		$this->load->view('layout/wrapper', $data);
	}
}
