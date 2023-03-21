<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hello Word</h1>
    @php
        // $products = [['id' => 1, 'name' => 'xoai', 'description' => '<i><strong>Tieu de</strong></i>'], ['id' => 2, 'name' => 'cam', 'description' => '<i><strong>Tieu de</strong></i>'], ['id' => 3, 'name' => 'chuoi', 'description' => '<i><strong>Tieu de</strong></i>'], ['id' => 4, 'name' => 'oi', 'description' => '<i><strong>Tieu de</strong></i>'], ['id' => 5, 'name' => 'buoi', 'description' => '<i><strong>Tieu de</strong></i>']];
    @endphp
    <table border="1">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Name</th>
        </thead>
        <tbody>
            <?php
            foreach ($products as $product) {
            ?>
            <tr>
                <td><?= $product['id'] ?></td>
                <td><?= $product['name'] ?></td>
                <td><?= $product['description'] ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>


    <table border="1">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Name</th>
        </thead>
        <tbody>
            @forelse ($products as $product)
                <tr>
                    <td><?php echo $product['name']; ?></td>
                    <td>{{ $product['id'] }}</td>
                    <td>{{ $product['name'] }}</td>
                    <td>{!! $product['description'] !!}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Not Products</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <?php
    //1 -> normal
    //2 -> VIP
    //3 -> VVIP
    //4 -> SUPER VIP
    switch ($userLevel) {
        case 1:
            echo 'normal';
            break;
        case 2:
            echo 'VIP';
            break;
        case 3:
            echo 'VVIP';
            break;
        case 4:
            echo 'SUPER VIP';
            break;
        default:
            break;
    }
    ?>

    @switch($userLevel)
        @case(1)
        {{ 'normal' }} @break;
        @case(2)
        {{ 'VIP' }} @break;
        @case(3)
        {{ 'VVIP' }} @break;
        @case(4)
        {{ 'SUPPER VIP' }} @break;

        @default
        {{ 'normal' }} @break;
    @endswitch

</body>

</html>
