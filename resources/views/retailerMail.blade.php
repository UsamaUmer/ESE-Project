@component('mail::message')
Approved Retailer Request

@component('mail::panel')
Keffiyeh blog actually fashion axe vegan, irony biodiesel. Cold-pressed hoodie chillwave put a bird on it aesthetic, bitters brunch meggings vegan iPhone. Dreamcatcher vegan scenester mlkshk. Ethical master cleanse Bushwick, occupy Thundercats banjo cliche ennui farm-to-table mlkshk fanny pack gluten-free. Marfa butcher vegan quinoa, bicycle rights disrupt tofu scenester chillwave 3 wolf moon asymmetrical taxidermy pour-over. Quinoa tote bag fashion axe, Godard disrupt migas church-key tofu blog locavore. Thundercats cronut polaroid 
@endcomponent



{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}



@component('mail::table')
| ShopId        | Shop Mail         | Retailer Cnic  |
| ------------- |:-------------:    | --------:|
| {{$shopId}}   | {{$getMail}}      | {{$cnic}}     |

@endcomponent

Thanks,<br>
ShopKeepers..
@endcomponent
