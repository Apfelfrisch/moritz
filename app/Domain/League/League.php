<?php

namespace App\Domain\League;

use App\Domain\Adress\Adress;
use App\Service\Acl\User\User;
use App\Domain\Contact\Contact;
use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function adress()
    {
        return $this->belongsTo(Adress::class);
    }

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }
}
