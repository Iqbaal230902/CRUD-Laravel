@extends('layouts.app')

@section('content')

<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
    
    .gallery-section {
        max-width: 1280px; /* setara max-w-7xl Tailwind */
        margin: 0 auto;
        padding: 40px 20px;
    }

    .gallery-header {
        text-align: center;
        margin-bottom: 48px;
    }

    .gallery-header h2 {
        font-family: 'Inter', sans-serif;
        font-size: 32px;
        font-weight: 700;
        color: #1a202c;
        margin: 0;
        letter-spacing: -1px;
    }

    .gallery-header p {
        font-family: 'Inter', sans-serif;
        font-size: 16px;
        color: #718096;
        margin: 12px 0 0 0;
    }

    .gallery-card {
        background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
        border-radius: 16px;
        overflow: hidden;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        border: 1px solid rgba(0, 0, 0, 0.05);
        cursor: pointer;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .gallery-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
        border-color: rgba(15, 109, 115, 0.2);
    }

    .gallery-image-wrapper {
        position: relative;
        overflow: hidden;
        aspect-ratio: 56.25%;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        flex-shrink: 0;
    }

    .gallery-image-wrapper img {
        width: 100%;
        height: 100%;
        possition: absolute;
        object-fit: cover;
        transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .gallery-card:hover .gallery-image-wrapper img {
        transform: scale(1.1) rotate(1deg);
    }

    .gallery-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(15, 109, 115, 0.6) 0%, rgba(118, 75, 162, 0.6) 100%);
        opacity: 0;
        transition: opacity 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .gallery-card:hover .gallery-overlay {
        opacity: 1;
    }

    .gallery-icon {
        width: 50px;
        height: 50px;
        background: rgba(255, 255, 255, 0.9);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        transform: scale(0.8);
        transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .gallery-card:hover .gallery-icon {
        transform: scale(1);
    }

    .gallery-content {
        padding: 20px;
        background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
        text-align: center;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .gallery-title {
        font-family: 'Inter', sans-serif;
        font-size: 16px;
        font-weight: 600;
        color: #1a202c;
        margin: 0 0 8px 0;
        letter-spacing: -0.5px;
        transition: color 0.3s ease;
        line-height: 1.4;
    }

    .gallery-caption {
        font-family: 'Inter', sans-serif;
        font-size: 13px;
        color: #718096;
        line-height: 1.5;
        margin: 0;
        transition: color 0.3s ease;
    }

    .gallery-card:hover .gallery-caption {
        color: #0f6d73;
    }

    .gallery-grid {
        display: grid;
        gap: 24px;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        list-style: none;
        padding: 0;
        margin: 0;
        animation: fadeInUp 0.6s ease-out;
    }

    @media (max-width: 1024px) {
        .gallery-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .gallery-section {
            padding: 30px 16px;
        }

        .gallery-header h2 {
            font-size: 28px;
        }

        .gallery-content {
            padding: 16px;
        }

        .gallery-title {
            font-size: 15px;
        }

        .gallery-caption {
            font-size: 12px;
        }
    }

    @media (max-width: 640px) {
        .gallery-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 14px;
        }
    }

    .gallery-section {
        padding: 24px 12px;
    }
        .gallery-header {
            margin-bottom: 32px;
        }

        .gallery-header h2 {
            font-size: 24px;
        }

        .gallery-header p {
            font-size: 14px;
        }

        .gallery-content {
            padding: 12px;
        }

        .gallery-title {
            font-size: 13px;
            margin-bottom: 4px;
        }

        .gallery-caption {
            font-size: 11px;
        }

        .gallery-icon {
            width: 40px;
            height: 40px;
            font-size: 20px;
        }

        .gallery-card:hover {
            transform: translateY(-4px);
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @media (max-width: 480px) {
    .gallery-grid {
        grid-template-columns: 1fr;
    }
}

    .gallery-item {
        animation: fadeInUp 0.6s ease-out backwards;
    }

    .gallery-item:nth-child(1) { animation-delay: 0.1s; }
    .gallery-item:nth-child(2) { animation-delay: 0.15s; }
    .gallery-item:nth-child(3) { animation-delay: 0.2s; }
    .gallery-item:nth-child(4) { animation-delay: 0.25s; }
    .gallery-item:nth-child(5) { animation-delay: 0.3s; }
    .gallery-item:nth-child(6) { animation-delay: 0.35s; }
    .gallery-item:nth-child(n+7) { animation-delay: 0.4s; }
</style>

<section class="gallery-section">
    <div class="gallery-header">
        <h2>Galeri Aktivitas Peserta Didik</h2>
        <p>Dokumentasi kegiatan pembelajaran dan pengembangan di RA Annidhomiyyah</p>
    </div>

    <ul class="gallery-grid">
        @foreach ($galleries as $gallery)
            <li class="gallery-item">
                <div class="gallery-card">

                    {{-- FOTO DENGAN OVERLAY --}}
                    <div class="gallery-image-wrapper">
                        <img
                            src="{{ asset('storage/' . $gallery->image) }}"
                            alt="{{ $gallery->title }}"
                            loading="lazy"
                        >
                        <div class="gallery-overlay">
                            <div class="gallery-icon">
                                👁️
                            </div>
                        </div>
                    </div>

                    {{-- CONTENT --}}
                    <div class="gallery-content">
                        <h3 class="gallery-title">{{ $gallery->title }}</h3>
                        @if($gallery->caption)
                            <p class="gallery-caption">{{ $gallery->caption }}</p>
                        @endif
                    </div>

                </div>
            </li>
        @endforeach
    </ul>
</section>

@endsection
