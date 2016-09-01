<?php 
	
	namespace App\Repositories;

	use App\User;
	use App\Dosen;

	class DosenRepository
	{
	    public function forUser (User $user)
	    {
	        return $user->overtime()
	        			->orderby('created_act', 'asc')
	        			->get();
	    }
	}

 ?>