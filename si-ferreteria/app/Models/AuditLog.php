<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AuditLog extends Model
{
    protected $table = 'audit_logs';

    protected $fillable = [
        'user_id',
        'action',
        'affected_model',
        'affected_model_id',
        'ip_address',
        'user_agent',
    ];

    protected $casts = [
        'user_id' => 'integer',
        'affected_model_id' => 'integer',
    ];

    /**
     * Relación con el usuario que realizó la acción
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Obtiene una representación legible del usuario
     * Maneja casos donde el usuario fue eliminado
     */
    public function getUserDisplayAttribute(): string
    {
        return $this->user ? $this->user->name : 'Usuario eliminado';
    }

    /**
     * Obtiene el modelo afectado dinámicamente
     * Solo si el modelo y el ID existen
     */
    public function getAffectedModelInstance()
    {
        if (!$this->affected_model || !$this->affected_model_id) {
            return null;
        }

        try {
            if (class_exists($this->affected_model)) {
                return $this->affected_model::find($this->affected_model_id);
            }
        } catch (\Exception $e) {
            return null;
        }

        return null;
    }

    /**
     * Scope para filtrar por usuario
     */
    public function scopeByUser($query, $userId)
    {
        return $query->where('user_id', $userId);
    }

    /**
     * Scope para filtrar por acción
     */
    public function scopeByAction($query, $action)
    {
        return $query->where('action', 'like', '%' . $action . '%');
    }

    /**
     * Scope para filtrar por modelo afectado
     */
    public function scopeByModel($query, $model)
    {
        return $query->where('affected_model', $model);
    }

    /**
     * Scope para obtener registros recientes
     */
    public function scopeRecent($query, $days = 30)
    {
        return $query->where('created_at', '>=', now()->subDays($days));
    }

    /**
     * Scope para ordenar por más reciente
     */
    public function scopeLatest($query)
    {
        return $query->orderBy('created_at', 'desc');
    }

    /**
     * Obtiene el nombre del modelo de forma legible
     */
    public function getModelNameAttribute(): string
    {
        if (!$this->affected_model) {
            return 'N/A';
        }

        // Extraer solo el nombre de la clase sin namespace
        $modelParts = explode('\\', $this->affected_model);
        return end($modelParts);
    }

    /**
     * Formato de fecha legible
     */
    public function getFormattedDateAttribute(): string
    {
        return $this->created_at->format('d/m/Y H:i:s');
    }
}
