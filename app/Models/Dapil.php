<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Dapil",
 *      required={"nama"},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="nama",
 *          description="nama",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="tingkat",
 *          description="tingkat",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="jumlahPenduduk",
 *          description="jumlahPenduduk",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="idWilayah",
 *          description="idWilayah",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="totalAlokasiKursi",
 *          description="totalAlokasiKursi",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="idVersi",
 *          description="idVersi",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="noDapil",
 *          description="noDapil",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="created_at",
 *          description="created_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="updated_at",
 *          description="updated_at",
 *          type="string",
 *          format="date-time"
 *      )
 * )
 */
class Dapil extends Model
{
    use SoftDeletes;

    public $table = 'dapils';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nama',
        'tingkat',
        'jumlahPenduduk',
        'idWilayah',
        'totalAlokasiKursi',
        'idVersi',
        'noDapil'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nama' => 'string',
        'tingkat' => 'integer',
        'jumlahPenduduk' => 'integer',
        'idWilayah' => 'integer',
        'totalAlokasiKursi' => 'integer',
        'idVersi' => 'integer',
        'noDapil' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama' => 'required'
    ];

    
}
