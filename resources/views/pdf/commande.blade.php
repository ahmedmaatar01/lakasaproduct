<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>commande {{$order->id}} LKP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            line-height: 1.6;
            padding: 20px;
        }

        h3 {
            color: #444;
            border-bottom: 2px solid #f0f0f0;
            padding-bottom: 5px;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 6px 10px;
            border: 1px solid #ddd;
            text-align: left;
            font-size: 0.7rem;
        }

        th {
            background-color: #f7f7f7;
        }

        .section {
            margin-bottom: 40px;
        }

        .product-title {
            margin-bottom: 10px;
            color: #555;
        }

        .empty-message {
            color: #999;
            font-style: italic;
        }
    </style>
</head>

<body>
    <div class="section client">
        <h3>Détails du Client</h3>
        <table>
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Adresse</th>
                <th>Ville</th>
                <th>Code Postal</th>
            </tr>
            <tr>
                <td>{{ $order->customer_name }}</td>
                <td>{{ $order->customer_email }}</td>
                <td>{{ $order->customer_phone }}</td>
                <td>{{ $order->customer_address }}</td>
                <td>{{ $order->customer_city }}</td>
                <td>{{ $order->customer_postal_code }}</td>
            </tr>
        </table>
    </div>

    <div class="section order-details">
        <h3>Détails de la Commande</h3>
        @forelse ($order->items as $item)
            <div class="product-title">
                <h5>{{ $item->product_name }}</h5>
            </div>
            <table>
                <tr>
                    <th>Quantité</th>
                    <th>dimensions(L x H)</th>
                    <th>Cadre</th>
                    <th>Couleur du Cadre</th>
                    <th>Couleur LED</th>
                    <th>Couleur du Miroir</th>
                    <th>Interrupteur</th>
                </tr>
                <tr>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ $item->length }} x {{ $item->width }}</td>
                    <td>{{ $item->frame }}</td>
                    <td>{{ $item->frame_color }}</td>
                    <td>{{ $item->led_color }}</td>
                    <td>{{ $item->mirror_color }}</td>
                    <td>{{ $item->switch_type }}</td>
                </tr>
            </table>
        @empty
            <p class="empty-message">La commande est vide.</p>
        @endforelse
    </div>
</body>

</html>
