<?php

    namespace App\Repositories;
    use App\Interfaces\ClientsInterface;
    use App\Models\Client;
    use Illuminate\Http\Request;
    use Illuminate\Http\RedirectResponse;

    class ClientsRepository implements ClientsInterface {
        public function get_clients() {
            return Client::all();
        }
    }


?>
