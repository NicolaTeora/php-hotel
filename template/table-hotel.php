<tr>
    <td> <?= $hotel['name'] ?> </td> 
    <td> <?= $hotel['description'] ?> </td>
    <!-- usare l' if per correggere il valore booleano "tradotto male" -->
    <td> <?= $hotel['parking'] ? 'si' : 'no' ?> </td>
    <td> <?= $hotel['vote'] ?></td>
    <td> <?= $hotel['distance_to_center'] ?></td>
</tr>