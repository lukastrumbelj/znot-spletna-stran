
@extends('layouts.app')

@section('title', 'Naši podporniki')

@section('content')

<div class="hero-container blurred">
    <div class="hero-background"></div>

    <div class="content-wrapper">
        <div class="scrollable-content">

            <section class="supporters-section">


                <div class="supporters-grid">

                    @php
                        $files = File::files(public_path('images/podporniki'));
                        shuffle($files);
                    @endphp

                    @foreach ($files as $file)
                        @if (in_array(strtolower($file->getExtension()), ['png', 'jpg', 'jpeg', 'svg', 'webp']))
                            <div class="supporter-logo">
                                <img
                                    src="{{ asset('images/podporniki/' . $file->getFilename()) }}"
                                    alt="Podpornik"
                                    loading="lazy"
                                >
                            </div>
                        @endif
                    @endforeach

                </div>

            </section>

        </div>
    </div>
</div>

<style>
    .supporters-section {
        width: 100%;
        min-height: 80vh;
        padding: 60px 5%;
        box-sizing: border-box;
    }

    .supporters-header {
        text-align: center;
        margin-bottom: 60px;
    }

    .supporters-header h1 {
        font-size: clamp(2rem, 5vw, 3.5rem);
        font-weight: 800;
        margin-bottom: 15px;
    }

    .supporters-header p {
        font-size: 1.1rem;
        opacity: 0.8;
        max-width: 650px;
        margin: 0 auto;
        line-height: 1.6;
    }

    .supporters-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
        gap: 35px;
        width: 100%;
        max-width: 1600px;
        margin: 0 auto;
        align-items: center;
        justify-items: center;
    }

    .supporter-logo {
        width: 100%;
        height: 150px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        box-sizing: border-box;
        transition: transform 0.3s ease;
    }

    .supporter-logo img {
        max-width: 100%;
        max-height: 110px;
        width: auto;
        height: auto;
        object-fit: contain;
        display: block;
        transition: transform 0.3s ease;
    }

    .supporter-logo:hover img {
        transform: scale(1.12);
    }

    /* Tablice */
    @media (max-width: 768px) {
        .supporters-section {
            padding: 40px 4%;
        }

        .supporters-header {
            margin-bottom: 35px;
        }

        .supporters-grid {
            grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
            gap: 20px;
        }

        .supporter-logo {
            height: 120px;
            padding: 15px;
        }

        .supporter-logo img {
            max-height: 85px;
        }
    }

    /* Telefoni */
    @media (max-width: 480px) {
        .supporters-section {
            padding: 30px 15px;
        }

        .supporters-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 15px;
        }

        .supporter-logo {
            height: 100px;
            padding: 10px;
        }

        .supporter-logo img {
            max-height: 75px;
        }

        .supporters-header p {
            font-size: 0.95rem;
        }
    }
</style>

@endsection
