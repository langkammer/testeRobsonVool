<?php

namespace App\Observers;

use App\Fila;
use App\Jobs\EmailFila;


class FilaObserver
{
    /**
     * Handle the fila "created" event.
     *
     * @param  \App\Fila  $fila
     * @return void
     */
    public function created(Fila $fila)
    {
        //
        EmailFila::dispatch($fila)->onQueue('fila_emails');

    }

    /**
     * Handle the fila "updated" event.
     *
     * @param  \App\Fila  $fila
     * @return void
     */
    public function updated(Fila $fila)
    {
        //
    }

    /**
     * Handle the fila "deleted" event.
     *
     * @param  \App\Fila  $fila
     * @return void
     */
    public function deleted(Fila $fila)
    {
        //
    }

    /**
     * Handle the fila "restored" event.
     *
     * @param  \App\Fila  $fila
     * @return void
     */
    public function restored(Fila $fila)
    {
        //
    }

    /**
     * Handle the fila "force deleted" event.
     *
     * @param  \App\Fila  $fila
     * @return void
     */
    public function forceDeleted(Fila $fila)
    {
        //
    }
}
