@component('mail::message')
Mobile Selling At <strong>{{$shopName}} </strong>

@component('mail::panel')
<h3>Your Mobile Found At</h3>
<h4>City     : {{$shopCity}}</h4>
<h4>Cell     : {{$shopPhone}}</h4>
<h4>Province : {{$shopProvince}}</h4>
<h4>IMEI     : {{$no}}</h4>
<h4>Address  : {{$shopAddress}}</h4>
@endcomponent

@component('mail::panel')
Keffiyeh blog actually fashion axe vegan, irony biodiesel. Cold-pressed hoodie chillwave put a bird on it aesthetic, bitters brunch meggings vegan iPhone. Dreamcatcher vegan scenester mlkshk. Ethical master cleanse Bushwick, occupy Thundercats banjo cliche ennui farm-to-table mlkshk fanny pack gluten-free. Marfa butcher vegan quinoa, bicycle rights disrupt tofu scenester chillwave 3 wolf moon asymmetrical taxidermy pour-over. Quinoa tote bag fashion axe, Godard disrupt migas church-key tofu blog locavore. Thundercats cronut polaroid 
@endcomponent

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
Enhanced SmartPhone EcoSystem <strong>User</strong>
@endcomponent
