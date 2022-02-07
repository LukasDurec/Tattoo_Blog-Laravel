@extends('user/app')

@section('bg-img',asset('user/img/Home.png'))

@section('main-content')
    <!-- Main Content-->
    <div class="container">
        <div class="row">
                <p>
                    In 2012, Ito and Kubec first got the idea to open a studio and we established Old School Tattoo in Zilina.
                    Over time, we have managed to expand our crew to 10 tattoo artists, tattoo miles of skin, win various awards at tattoo
                    shows at home and abroad, but mainly create an environment that cultivates the art of tattooing. Since the very beginning,
                    our goal has been to build a community and raise awareness on tattooing in Slovakia.
                </p>
                <p> We emphasize uniqueness that is reflected in our work which is tailor-made for each of our clients.
                    Each of our artists master their own unique style – whether you are into realism, mandala, dot work, traditional designs or prefer Japanese or abstract art –
                    Old school Tattoo can transform your ideas into quality tattoo work.
                </p>
            <div class="col-md">
                <table class="table table-bordered" >
                    <thead>
                    <tr>
                        <th scope="col">Tattoo</th>
                        <th scope="col">Black</th>
                        <th scope="col">Color</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">Small 1 to 25cm</th>
                        <td>30€</td>
                        <td>50€</td>
                    </tr>
                    <tr>
                        <th scope="row">For 1cm over 25cm</th>
                        <td>1€</td>
                        <td>1,5€</td>
                    </tr>
                    <tr>
                        <th scope="row">Continue for 1cm over 25cm</th>
                        <td>1€</td>
                        <td>1,5€</td>
                    </tr>
                    <tr>
                        <th scope="row">Remake For 1cm over 25cm </th>
                        <td>1,2€</td>
                        <td>1,7€</td>
                    </tr>
                    <tr>
                        <th scope="row">Overmake For 1cm over 25cm </th>
                        <td>1,5€</td>
                        <td>2€</td>
                    </tr>
                    </tbody>
                </table>
                <p> Price also depends on amount of time</p>
            </div>
            <div class="col-md-5">
                <p>Your tattoo cost is an investment in permanent body art that you'll wear every day.
                    The last thing you want is a super-cheap tattoo that you might have to pay double the cost of to remove it if you don't like it later.
                    That's why the best tattoo artists work thoughtfully to create designs with long-lasting appeal.
                    This guide will provide general tattoo price ranges only.</p>
            </div>
        </div>
        <div class="clearfix">
            <img src="user/img/prices.jpg" class="img-fluid" alt="Tattoo artist">
            <p>
                Getting one short word tattoo that covers 2 to 4 square inches runs from $50 to $200, depending on the size of the letters and usually takes an hour of work or less.
            </p>

            <p>
                Most artists don't charge on a per letter basis. When you're talking to your tattoo artist,
                ask for their hourly rates and how long it would take to do a lettering tattoo in the size you want on which specific part of your body.
            </p>
            <p>
                A small tattoo costs $50 to $250 on average for designs that cover 3 square inches of skin or less. Regardless of the size, you have
                to pay the shop minimum fee of around $50 or more,
                and then they usually charge an hourly rate as well after the first hour. Also, you may pay extra for them to work on a custom design for you.
            </p>
        </div>
@endsection
