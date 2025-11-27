namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table = 'kegiatan';
    protected $fillable = ['nama', 'lokasi', 'tanggal', 'deskripsi', 'foto'];
}
