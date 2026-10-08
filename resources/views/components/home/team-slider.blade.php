{{-- Team / experts slider (sab countries).
     Order: config('home.core_team') -> members (country ke Figma members) -> experts (admin panel OurExpert, duplicate naam skip).
     members = [['image' (full url), 'name', 'role'], ...] ; experts = OurExpert collection --}}
@props(['title', 'members' => [], 'experts' => [], 'core' => true])
@php
    $team = $core
        ? array_map(fn ($m) => ['name' => $m['name'], 'role' => $m['role'], 'image' => asset('public/front/images/common/team/' . $m['image'])], config('home.core_team'))
        : [];
    $team = array_merge($team, $members);
    $names = array_column($team, 'name');
    foreach ($experts as $expert) {
        if (!in_array($expert->name, $names)) {
            $team[] = ['name' => $expert->name, 'role' => $expert->designation, 'image' => asset('/' . $expert->image)];
        }
    }
@endphp
<section class="our_experts mt-100 ">
    <div class="container">
        <div class="com_sec_head_top">
            <h2>{!! $title !!}</h2>
        </div>

        <div class="our_experts_cen">
            <div class="experts_slider team-slider" data-slider data-slider-controls="slider1" data-slider-show="4">
                @foreach ($team as $member)
                    <div class="experts_card team-card">
                        <img class="img-fluid" src="{{ $member['image'] }}" loading="lazy" alt="{{ $member['name'] ?? 'expert' }}">
                        <div class="experts_card_bt">
                            <h4 class="sub_head">{{ $member['name'] }}</h4>
                            <p class="mb-0">{{ $member['role'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <x-home.slider-controls prefix="slider1" />
    </div>
</section>
