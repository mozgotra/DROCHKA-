public function popular()
{
    $products = [
        [
            'name' => 'Портерхаус',
            'price' => 2500,
            'image' => 'porterhaus.png',
            'badge' => 'new' // new или discount
        ],
        [
            'name' => 'Пиканья',
            'price' => 2700,
            'image' => 'pikanya.png',
            'badge' => 'discount'
        ],
        [
            'name' => 'Стейк Мачете',
            'price' => 2900,
            'image' => 'machete.png',
            'badge' => null // без бейджа
        ],
    ];

    return view('products.popular', compact('products'));
}