<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TheoryClass extends Model
{
    use HasFactory;

    public function instructor(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Instructor::class);
    }

    public static function getActiveClasses()
    {
        $now = Carbon::now();
        return TheoryClass::where('theory_classes.class_date', '>', $now)->get();
    }

}
