<?php
		
		namespace App\Models;
		
		use Illuminate\Database\Eloquent\Factories\HasFactory;
		use Illuminate\Database\Eloquent\Model;
		use Illuminate\Database\Eloquent\Relations\HasMany;
		class Course extends Model
		{
				
				use HasFactory;
				protected $fillable = [
						'name', 'batch_name', 'status'
				];
				
				public function students() : HasMany
				{
						return $this->hasMany( Student::class );
				}
				public function scopeActive( $query )
				{
						return $query->where( 'status', 1 );
				}
				
				
		}
