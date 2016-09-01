<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

class MahasiswaPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Yang bisa merubah hanya yang membuat
     *
     * @param User $user
     * @param Mahasiswa $mahasiswa
     * @return bool
     */
    public function destroy(User $user, Mahasiswa $mahasiswa)
    {
        return $user->id === $overtime->user_id;
    }

}
