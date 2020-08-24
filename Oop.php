 <?php 
	class mobil
	{
		public $merk;

		public function hidupkan()
		{
			return 'Hidupkan mobil '.$this->merk;
 		}
	}

	$mobil1 = new mobil();
	$mobil1->merk = 'Lamborghini';
	echo $mobil1->hidupkan();
 ?>
