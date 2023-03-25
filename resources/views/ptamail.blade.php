@component('mail::message')
Mobile Blockage Request

@component('mail::panel')
Keffiyeh blog actually fashion axe vegan, irony biodiesel. Cold-pressed hoodie chillwave put a bird on it aesthetic, bitters brunch meggings vegan iPhone. Dreamcatcher vegan scenester mlkshk. Ethical master cleanse Bushwick, occupy Thundercats banjo cliche ennui farm-to-table mlkshk fanny pack gluten-free. Marfa butcher vegan quinoa, bicycle rights disrupt tofu scenester chillwave 3 wolf moon asymmetrical taxidermy pour-over. Quinoa tote bag fashion axe, Godard disrupt migas church-key tofu blog locavore. Thundercats cronut polaroid 
@endcomponent



{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

@component('mail::table')
| ESE Mail        | Your Email  | Mobile IMEI 
| ------------- |:-------------: |:-------------:  
| {{'programmers@gmail.com'}}   | {{$msg}} | {{$msg4}}    

@endcomponent


@component('mail::table')
| User Cnic        | User Cell         | User Email 
| ------------- |:-------------:    | --------:|  
| {{$msg1}}   | {{$msg2}}      | {{$msg3}}     | 

@endcomponent

Thanks,<br>
PTA..
@endcomponent

