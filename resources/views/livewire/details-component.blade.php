<main>
    <section class="hero">
     <div class="main-message">
       <h1>Welcome to Yare !</h1>
       <p>Cheapest Accounts And Best Services
       </p>
     </div>
     <div class="container">
   </div>
   </section>
   <div class="destination">
     <p><a href="{{asset('/')}}"> Home </a> / <a href="{{asset('accounts')}}"> Accounts </a></p>
   </div>

   <div class="image-show">
     <h2 class="price-h2">{{$product->name}}</h2>
     <h1 class="title-h1">
   Price : {{$product->regular_price}}$
     </h1>

     <img src="{{asset('full.png')}}" id="full" >
   <div class="cta">
     <a href="{{route('product.pay',$product->slug)}}" class="btn">Buy</a>
     </div>
   </div>
   <h1 class="title">
     Summary Of The Account
   </h1>

   <div class="acc-details">
     <div id="details">
        <h3>Previous Ranked</h3>
        <p>{{$product->previous_ranked}}</p>
     </div>
     <div id="details">
       <h3>Date of Creation</h3>
       <p>{{$product->date_ofcreation}}</p>
    </div>
    <div id="details">
     <h3>Skins</h3>
     <p>{{$product->skins}} Skin <b>(Check Account's infos below)</b></p>
   </div>
   <div id="details">
     <h3>Icons</h3>
     <p> {{$product->icons}}</p>
   </div>
   <div id="details">
     <h3>Type of The Account</h3>
     <p> {{$product->type}} Account</p>
   </div>
   <div id="details">
     <h3>Ward Skins</h3>
     <p>{{$product->ward}}</p>
   </div>

     </div>
     <div>
   <div class="item-data">
   <div class="Summary">

     <div class="buttons">
       <div class="level">
         <span class="level1">Level</span>
         <span class="levell">{{$product->level}}</span>
       </div>
       <div class="rank">
         <span class="rank1">{{$product->ranked}}</span>
       </div>
       <div class="levelup">
         <span class="levelup1">
           {{$product->honor}}
         </span>
       </div>
       <div class="be">
         <span class="be1">
           {{$product->be}} BE
         </span>
       </div>
     </div>
     <div class="wrapper">
   <nav>
         <div class="items">
           <span class="item active" data-name="skins" onclick="btnClick(this)">Skins</span>
           <span class="item" data-name="champions" onclick="btnClick(this)">Champions</span>
           <span class="item" data-name="gallery" onclick="btnClick(this)">Gallery</span>

         </div>
       </nav>
                                          <!-- Skins-->

           <div id="skinsWarpper" class="gallery">

               @foreach ($skins as $skin)
               @if($skin->slug === $product->slug)
            <div class="image" data-name="skins"><span><img src="{{asset('imagg/test')}}/{{$skin->image}}" alt=""></span>
                <span class="nameSkins">{{$skin->name}}</span>
                     </div>
                     @endif
                     @endforeach
                    </div>
         {{-- <div class="image" data-name="skins"><span><img src={{asset('test\yas.png')}} alt=""></span>
    <span class="nameSkins">Project Yasuo</span>
         </div>
         <div class="image" data-name="skins"><span><img src={{asset('test\teemoo.jpg')}} alt=""></span>
         <span class="nameSkins">Omega Teemo</span></div>
         <div class="image" data-name="skins"><span><img src={{asset('test\project1.png')}} alt=""></span>
         <span class="nameSkins">Project Fiora</span></div>
         <div class="image" data-name="skins"><span><img src={{asset('test\project2.jpg')}} alt=""></span>
         <span class="nameSkins">Project Katarina</span></div>
         <div class="image" data-name="skins"><span><img src={{asset('test\project3.png')}} alt=""></span>
         <span class="nameSkins">Project Yi</span></div>
         <div class="image" data-name="skins"><span><img src={{asset('test\project4.jpg')}} alt=""></span>
         <span class="nameSkins">Project Zed</span></div>
         <div class="image" data-name="skins"><span><img src={{asset('test\nighyas.jpg')}} alt=""></span>
         <span class="nameSkins">Nightbringer Yasuo</span></div>
         <div class="image" data-name="skins"><span><img src={{asset('test\luxx.jpg')}} alt=""></span>
         <span class="nameSkins">Spellthief Lux</span></div>
         <div class="image" data-name="skins"><span><img src={{asset('test\godfistlee.png')}} alt=""></span>
           <span class="nameSkins">Godfist Lee Sin</span></div>
           <div class="image" data-name="skins"><span><img src={{asset('test\zed.jpg')}} alt=""></span>
             <span class="nameSkins">Shockblade Zed</span></div>
             <div class="image" data-name="skins"><span><img src={{asset('test\thresh.jpg')}} alt=""></span>
               <span class="nameSkins">Dark Star Thresh</span></div>
               <div class="image" data-name="skins"><span><img src={{asset('test\mf.png')}} alt=""></span>
                 <span class="nameSkins">Miss Fortune</span></div>
                 <div class="image" data-name="skins"><span><img src={{asset('test\vayne.jpg')}} alt=""></span>
                   <span class="nameSkins">Soulstealer Vayne</span></div>
                   <div class="image" data-name="skins"><span><img src={{asset('test\diana.jpg')}} alt=""></span>
                     <span class="nameSkins">Blood moon Dianna</span></div>
                     <div class="image" data-name="skins"><span><img src={{asset('test\luxxx.jpg')}} alt=""></span>
                       <span class="nameSkins">Elementalist Lux</span></div>
                       <div class="image" data-name="skins"><span><img src={{asset('test\zedd.png')}} alt=""></span>
                         <span class="nameSkins">Championship Zed</span></div>
       </div> --}}
                                <!-- Champions -->
       <div id="championsWarpper" class="galleryy">
        @foreach ($champions as $champion)
        @if($champion->slug === $product->slug)
        <div class="image1" data-name="champions"><span><img id="imgg" src="{{asset('imagg/test')}}/{{$champion->image}}" alt=""></span>
            <span class="nameChamps">{{$champion->name}}</span></div>
            @endif
            @endforeach
               {{-- <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/aatrox.png')}} alt=""></span>
                 <span class="nameChamps">Aatrox</span></div>
          <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/Amumu.png')}} alt=""></span>
          <span class="nameChamps">Amumu</span></div>
           <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/Alistar.png')}} alt=""></span>
           <span class="nameChamps">Alistar</span></div>
            <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/teemo-lol.png')}} alt=""></span>
            <span class="nameChamps">Teemo</span></div>
              <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/Akali_Square.png')}} alt=""></span>
              <span class="nameChamps">Akali</span></div>
              <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/Leona.png')}} alt=""></span>
              <span class="nameChamps">Leona</span></div>
              <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/Morgana.png')}} alt=""></span>
              <span class="nameChamps">Morgana</span></div>
              <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/Zac.png')}} alt=""></span>
              <span class="nameChamps">Zac</span></div>
              <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/Anivia.png')}} alt=""></span>
              <span class="nameChamps">Anivia</span></div>
              <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/samira.png')}} alt=""></span>
              <span class="nameChamps">Samira</span></div>
              <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/aphelios.png')}} alt=""></span>
               <span class="nameChamps">Aphelios</span></div>
               <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/AurelionSol.png')}} alt=""></span>
                 <span class="nameChamps">AurelionSol</span></div>
                   <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/Bard.png')}} alt=""></span>
                     <span class="nameChamps">Bard</span></div>
                     <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/Rengar.png')}} alt=""></span>
                       <span class="nameChamps">Rengar</span></div>
                       <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/caitlyn-lol.png')}} alt=""></span>
                         <span class="nameChamps">Caitlyn</span></div>
                         <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/kata.jpg')}} alt=""></span>
                           <span class="nameChamps">Katarina</span></div>
                           <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/Khazix.png')}} alt=""></span>
                             <span class="nameChamps">Kha'zix</span></div>
                             <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/Kled.png')}} alt=""></span>
                               <span class="nameChamps">Kled</span></div>
                               <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/Kassadin_Square.png')}} alt=""></span>
                                 <span class="nameChamps">Kassadin</span></div>
                                 <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/eve.png')}} alt=""></span>
                                   <span class="nameChamps">Eevelyn</span></div>
                                   <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/Ekko-Champion-LoL.png')}} alt=""></span>
                                     <span class="nameChamps">Ekko</span></div>
                                     <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/777.png')}} alt=""></span>
                                       <span class="nameChamps">Yone</span></div>
                                       <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/Lux.png')}} alt=""></span>
                                         <span class="nameChamps">Lux</span></div>
                                         <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/sylas.png')}} alt=""></span>
                                           <span class="nameChamps">Sylas</span></div>
                                           <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/Lucian.png')}} alt=""></span>
                                             <span class="nameChamps">Lucian</span></div>
                                             <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/Dianna.png')}} alt=""></span>
                                               <span class="nameChamps">Dianna</span></div>
                                               <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/LeeSin.png')}} alt=""></span>
                                                 <span class="nameChamps">Lee Sin</span></div>
                                                 <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/qiyana.png')}} alt=""></span>
                                                   <span class="nameChamps">Qiyana</span></div>
                                                   <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/Lillia.png')}} alt=""></span>
                                                     <span class="nameChamps">Lillia</span></div>
                                                     <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/SivirSquare.png')}} alt=""></span>
                                                       <span class="nameChamps">Sivir</span></div>
                                                       <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/Karma.png')}} alt=""></span>
                                                         <span class="nameChamps">Karma</span></div>
                                                         <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/vladimir-lol.png')}} alt=""></span>
                                                           <span class="nameChamps">Vladimir</span></div>
                                                           <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/Mordekaiser.png')}} alt=""></span>
                                                             <span class="nameChamps">Mordekaiser</span></div>
                                                             <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/sett.png')}} alt=""></span>
                                                               <span class="nameChamps">Sett</span></div>
                                                               <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/HeimerdingerSquare_Unreleased.png')}} alt=""></span>
                                                                 <span class="nameChamps">Heimerdinger</span></div>
                                                                 <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/SkarnerSquare.png')}} alt=""></span>
                                                                   <span class="nameChamps">Skarner</span></div>
                                                                   <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/RyzeSquare_Unreleased.png')}} alt=""></span>
                                                                     <span class="nameChamps">Ryze</span></div>
                                                                     <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/Twisted_FateSquare.png')}} alt=""></span>
                                                                       <span class="nameChamps">Twisted fate</span></div>
                                                                       <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/FiddlesticksSquare.png')}} alt=""></span>
                                                     <span class="nameChamps">Fiddlesticks</span></div>
                                                     <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/MissFortuneSquare.png')}} alt=""></span>
                                                       <span class="nameChamps">Missfortune</span></div>
                                                       <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/TryndamereSquare.png')}} alt=""></span>
                                                         <span class="nameChamps">Tryndamere</span></div>
                                                         <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/Tahm_KenchSquare.png')}} alt=""></span>
                                                           <span class="nameChamps">Tahm Kench</span></div>
                                                           <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/NidaleeSquare.png')}} alt=""></span>
                                                             <span class="nameChamps">Nidalee</span></div>
                                                             <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/CassiopeiaSquare.png')}} alt=""></span>
                                                               <span class="nameChamps">Cassiopeia</span></div>
                                                               <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/BlitzcrankSquare.png')}} alt=""></span>
                                                                 <span class="nameChamps">Blitzcrank</span></div>
                                                                 <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/LeBlancSquare.png')}} alt=""></span>
                                                                   <span class="nameChamps">Leblanc</span></div>
                                                                   <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/Master_YiSquare.png')}} alt=""></span>
                                                                     <span class="nameChamps">Master Yi</span></div>
                                                                     <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/LissandraSquare.png')}} alt=""></span>
                                                                       <span class="nameChamps">Lissandra</span></div>
                                                                       <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/HecarimSquare.png')}} alt=""></span>
                                                                         <span class="nameChamps">Hecarim</span></div>
                                                                         <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/Jarvan_IVSquare.png')}} alt=""></span>
                                                                           <span class="nameChamps">Jarvan IV</span></div>
                                                                           <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/GangplankSquare.png')}} alt=""></span>
                                                                             <span class="nameChamps">Gankplank</span></div>
                                                                             <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/Dr._MundoSquare.png')}}
                                                                               " alt=""></span>
                                                                               <span class="nameChamps">Dr Mundo</span></div>
                                                                               <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/Xin_ZhaoSquare.png')}} alt=""></span>
                                                                                 <span class="nameChamps">Xin Zhao</span></div>
                                                                                 <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/OriannaSquare.png')}} alt=""></span>
                                                                                   <span class="nameChamps">Orianna</span></div>
                                                                                   <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/ShyvanaSquare.png')}} alt=""></span>
                                                                                     <span class="nameChamps">Shyvana</span></div>
                                                                                 <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/VolibearSquare.png')}} alt=""></span>
                                                                                   <span class="nameChamps">Volibear</span></div>
                                                                                   <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/TristanaSquare.png')}} alt=""></span>
                                                                                     <span class="nameChamps">Tristana</span></div>
                                                                                     <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/RenektonSquare.png')}} alt=""></span>
                                                                                       <span class="nameChamps">Renekton</span></div>
                                                                                       <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/NocturneSquare.png')}} alt=""></span>
                                                                                         <span class="nameChamps">Nocturne</span></div>
                                                                                         <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/NautilusSquare.png')}} alt=""></span>
                                                                                           <span class="nameChamps">Nautilus</span></div>
                                                                                           <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/MalzaharSquare.png')}} alt=""></span>
                                                                                             <span class="nameChamps">Malzahar</span></div>
                                                                                             <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/MalphiteSquare.png')}} alt=""></span>
                                                                                               <span class="nameChamps">Malphite</span></div>
                                                                                               <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/KatarinaSquare.png')}} alt=""></span>
                                                                                                 <span class="nameChamps">Katarina</span></div>
                                                                                                 <div class="image1" data-name="champions"><span><img id="imgg" src={{asset('test/WarwickSquare.png')}} alt=""></span>
                                                                                                   <span class="nameChamps">Warwick</span></div> --}}


             </div>
       <div id="galleryWarpper" class="galllery" style="flex-wrap:wrap">
           @foreach ($galleries as $gallery)
           @if($gallery->slug === $product->slug)
           <div class="image2" data-name="gallery"><span><img src="{{asset('imagg/test')}}/{{$gallery->image}}"></span></div>
         {{-- <div class="image2" data-name="gallery"><span><img src={{asset('dw.png')}}></span></div>
         <div class="image2" data-name="gallery"><span><img src={{asset('screen1.png')}}></span></div> --}}
         @endif
         @endforeach
       </div>
     </div>
   </div>

   </main>
