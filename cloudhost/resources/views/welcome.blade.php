@extends('layout')

@section('body')

    <body class="min-h-screen">

    @include('parts.hero-section')
    @include('parts.migration-section')
    @include('parts.features-section')
    @include('parts.cta-section')
    @include('parts.subscribe-section')
    @include('parts.footer')

    </body>

@endsection


@push('scripts')
    <style>
        body {
            background-color: #121212;
            font-family: 'Comfortaa', cursive;
        }

        /* Floating Cloud Animations */
        @keyframes float-slow {
            0%, 100% { transform: translateY(0px) translateX(0px); }
            25% { transform: translateY(-20px) translateX(10px); }
            50% { transform: translateY(-10px) translateX(-15px); }
            75% { transform: translateY(-15px) translateX(20px); }
        }

        @keyframes float-medium {
            0%, 100% { transform: translateY(0px) translateX(0px); }
            25% { transform: translateY(-15px) translateX(-20px); }
            50% { transform: translateY(-25px) translateX(10px); }
            75% { transform: translateY(-5px) translateX(-25px); }
        }

        @keyframes float-fast {
            0%, 100% { transform: translateY(0px) translateX(0px); }
            25% { transform: translateY(-30px) translateX(25px); }
            50% { transform: translateY(-20px) translateX(-30px); }
            75% { transform: translateY(-35px) translateX(15px); }
        }

        .animate-float-slow {
            animation: float-slow 8s ease-in-out infinite;
        }

        .animate-float-medium {
            animation: float-medium 6s ease-in-out infinite;
        }

        .animate-float-fast {
            animation: float-fast 4s ease-in-out infinite;
        }

        /* Gradient Animation */
        @keyframes gradient-x {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        .animate-gradient-x {
            background-size: 200% 200%;
            animation: gradient-x 3s ease infinite;
        }

        /* Enhanced Rotation Animations */
        @keyframes rotate-slow {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        @keyframes rotate-reverse {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(-360deg); }
        }

        .animate-rotate-slow {
            animation: rotate-slow 20s linear infinite;
        }

        .animate-rotate-reverse {
            animation: rotate-reverse 25s linear infinite;
        }

        /* Scale and Glow Animations */
        @keyframes scale-glow {
            0%, 100% { transform: scale(1); opacity: 0.3; }
            50% { transform: scale(1.1); opacity: 0.6; }
        }

        .animate-scale-glow {
            animation: scale-glow 4s ease-in-out infinite;
        }

        /* Floating Particles */
        @keyframes float-particle {
            0%, 100% { transform: translateY(0px) translateX(0px) scale(1); }
            25% { transform: translateY(-15px) translateX(10px) scale(1.2); }
            50% { transform: translateY(-25px) translateX(-5px) scale(0.8); }
            75% { transform: translateY(-10px) translateX(15px) scale(1.1); }
        }

        .animate-float-particle {
            animation: float-particle 6s ease-in-out infinite;
        }

        /* Interactive Hover Effects */
        .hero-bg-element {
            transition: all 0.3s ease;
        }

        .hero-bg-element:hover {
            transform: scale(1.1) rotate(5deg);
            filter: brightness(1.2);
        }

        /* Subtle Parallax Effect */
        @keyframes parallax-slow {
            0%, 100% { transform: translateY(0px) translateX(0px); }
            50% { transform: translateY(-10px) translateX(5px); }
        }

        .animate-parallax-slow {
            animation: parallax-slow 12s ease-in-out infinite;
        }

        /* Glowing Border Effect */
        @keyframes glow-border {
            0%, 100% { box-shadow: 0 0 5px rgba(22, 131, 171, 0.3); }
            50% { box-shadow: 0 0 20px rgba(30, 153, 117, 0.5); }
        }

        .animate-glow-border {
            animation: glow-border 4s ease-in-out infinite;
        }
    </style>


    <!-- Custom CSS for Animated Gradients -->
    <style>
        .overlay {
            position: absolute;
            top: 0;
            left: 0px;
            right: 0px;
            height: 100%;
            background: linear-gradient(180deg, transparent 44.24%, #121212);
            z-index: 5;
            pointer-events: none;
        }

        .header-animation {
            width: 100%;
            height: 1560px;
            position: absolute;
            top: -180px;
            left: 0;
            z-index: 1;
            pointer-events: none;
        }

        .header-animation .animation {
            position: absolute;
            right: 0;
            top: 0;
            width: 100%;
            height: 100%;
        }

        .header-animation .animation-orange {
            opacity: 1;
            background: radial-gradient(112.01% 306.85% at 116.95% -15.43%,rgb(20, 101, 132) 0, transparent 100%);
            animation: orangeAnimation 16s linear infinite;
        }

        .header-animation .animation-black {
            background: linear-gradient(0deg,rgb(11, 64, 66), transparent);
        }

        .header-animation .animation-gray {
            opacity: 0;
            animation: grayAnimation 16s linear infinite;
            background: radial-gradient(169.22% 169.22% at 50% -45.86%,rgb(9, 67, 48) 0, transparent 100%);
        }

        .header-animation .animation-blue {
            opacity: 0;
            animation: blueAnimation 16s linear infinite;
            background: radial-gradient(111.77% 306.21% at -17.34% -6.72%,rgb(17, 62, 85) 0, transparent 100%);
        }

        @keyframes orangeAnimation {
            25% {
                opacity: 0;
            }
            50% {
                opacity: 0;
            }
            75% {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes blueAnimation {
            25% {
                opacity: 0.5;
            }
            50% {
                opacity: 1;
            }
            75% {
                opacity: 0.5;
            }
            to {
                opacity: 0;
            }
        }

        @keyframes grayAnimation {
            25% {
                opacity: 1;
            }
            50% {
                opacity: 0;
            }
            75% {
                opacity: 1;
            }
            to {
                opacity: 0;
            }
        }

        /* Moving Border Gradient Animation */
        @keyframes border-gradient {
            0% {
                background-position: 0% 0%;
            }
            25% {
                background-position: 100% 0%;
            }
            50% {
                background-position: 100% 100%;
            }
            75% {
                background-position: 0% 100%;
            }
            100% {
                background-position: 0% 0%;
            }
        }

        .animate-border-gradient {
            background: conic-gradient(from 0deg, rgba(9, 36, 46, 0.46), rgba(6, 28, 21, 0.55),rgb(5, 29, 37),rgb(4, 28, 21), rgb(7, 35, 45));
            background-size: 200% 200%;
            animation: border-gradient 18s linear infinite;
        }

        @keyframes dash {
            to {
                stroke-dashoffset: -24;
            }
        }

        .animate-dash {
            animation: dash 3s linear infinite;
        }
    </style>
@endpush
