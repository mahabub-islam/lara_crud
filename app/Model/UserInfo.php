<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model {

    protected $table = 'user_infos';

    protected $fillable = ['name','phone','email'];

    public function rowQuery()
    {
        $data = UserInfo::where('id', 1)
            ->orderBy('name', 'desc')
            ->get();

        echo '<pre>';print_r($data);
        echo 'Test';exit;
    }
    public function rowQuery2()
    {
        $data = Model::from('users')
            //->where('id', 1)
            ->orderBy('name', 'desc')
            ->get();

        echo '<pre>';print_r($data);
        echo 'Test';exit;
    }

}
