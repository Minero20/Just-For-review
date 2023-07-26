<?php
/*
* visitors.php
* Visitors database collection
* @input :
* @output :
* Visitors database collection
* @author : pisit namsiri 64160168
* @Create Date : 2023-04-07
*/
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
class visitors extends Model
{
    use HasFactory;
    protected $table = 'visitors';
    protected $primaryKey = 'vis_id';
    protected $fillable = ['vis_id', 'vis_citizen_number', 'vis_prefix', 'vis_first_name', 'vis_last_name'
                            ,'vis_dob', 'vis_religion', 'vis_address'];

    /*
    * @author : Pracharapon Pholprasert 64160068
    * @Create Date : 2023-04-07
    */
    public function show_all_users(): Collection
    {
        return DB::table('users')->select('*')->get();
    }
    public function get_visitor_count()
    {
        return DB::table('visitors')
            ->selectRaw('count(*)')
            ->where('vis_citizen_number', '=', '1100801452292')
            ->value('vis_citizen_number');
    }
}
