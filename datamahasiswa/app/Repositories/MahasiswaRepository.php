<?php 
	
	namespace App\Repositories;

	use App\User;
	use App\Mahasiswa;

	class MahasiswaRepository
	{
	    public function forUser (User $user)
	    {
	        return $user->overtime()
	        			->orderby('created_act', 'asc')
	        			->get();
	    }
	}

 ?>