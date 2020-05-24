<h2 class="flaresy-title">LA TEAM FLARESY</h2>

<div class="custom-underlines">
    <div class="line"></div>
    <div class="box"></div>
    <div class="line"></div>
</div>

<div id="equipe" class="pt-3">
    @foreach($users as $user)
        <div class="membre">
            <div class="img-container-membre">
                <img src="{{ asset('storage/photos/users/'.$user->id.'.jpg') }}" class="img-membre">
                <div class="reseaux">
                    @foreach($user->reseaux as $reseau)
                        <a target="_blank" class="link-reseau" href="{{ $reseau->pivot->link }}" type="button"><i class="fa-2x {!! $reseau->icon !!} icon-reseau" aria-hidden="true"></i></a>
                    @endforeach
                </div>
                <div class="txt-membre">
                    <div>
                        <h2 class="prenom">{{ $user->prenom }}</h2>
                        <span class="job">{{ $user->poste }}</span>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
