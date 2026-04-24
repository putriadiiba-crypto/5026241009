<!DOCTYPE html>
<html lang="en">
<head>
    <title>Alinea Links</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        :root {
            /* base scale */
            --small: 0.75rem;     /* 12px */
            --medium: 1rem;       /* 16px */
            --large: 1.5rem;      /* 24px */

            /* exact mapping (pixel-perfect) */
            --card-width: 25rem;          /* 400px */
            --card-radius: 1.5rem;        /* 24px */
            --btn-radius: 1.75rem;        /* 28px */
            --avatar-size: 5rem;          /* 80px */
            --icon-size: 2.2rem;          /* 35.2px */
            --icon-inner: 1rem;           /* 16px */
            --dots-right: 0.875rem;       /* 14px */
            --spacing-xs: 0.4rem;         /* ~6.4px */
            --spacing-sm: 0.75rem;        /* 12px */
            --spacing-md: 1rem;           /* 16px */
            --spacing-lg: 1.5rem;         /* 24px */
            --spacing-xl: 2rem;           /* 32px */
            --text-sm: 0.8rem;            /* 12.8px */
            --text-md: 1.15rem;           /* 18.4px */
            --text-xs: 0.65rem;           /* ~10px */
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(
                180deg,
                #8a929c 0%,
                #5c6470 35%,
                #2f3745 70%,
                #1E2330 100%
            );
            font-family: 'Segoe UI', sans-serif;

            display: flex;
            justify-content: center;
            align-items: flex-start;

            padding: calc(var(--spacing-lg) + 1rem) var(--spacing-md);
            color: #fff;
        }

        /* CARD */
        .lt-card {
            width: 100%;
            max-width: var(--card-width);

            padding: var(--spacing-lg);
            border-radius: var(--card-radius);

            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(1.5625rem);

            display: flex;
            flex-direction: column;
            align-items: center;

            box-shadow: 0 1.25rem 3.75rem rgba(0,0,0,0.4);
        }

        /* TOP BAR */
        .lt-topbar {
            width: 100%;
            display: flex;
            justify-content: space-between;
            margin-bottom: var(--spacing-lg);
        }

        .lt-icon-btn {
    width: var(--icon-size);
    height: var(--icon-size);
    border-radius: 50%;

    display: flex;
    align-items: center;
    justify-content: center;

    background: transparent; /* 🔥 penting */
    border: 1.5px solid rgba(255,255,255,0.5); /* outline putih */

    backdrop-filter: blur(10px);
}

       .lt-icon-btn svg {
    width: 1.1rem;
    height: 1.1rem;
    stroke: #fff;   /* putih */
    fill: none;
}

        /* PROFILE/LOGO */
        .lt-avatar {
            width: var(--avatar-size);
            height: var(--avatar-size);
            border-radius: 50%;
            overflow: hidden;

            margin-bottom: var(--spacing-sm);
        }

        .lt-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* NAMA/USERNAME */
        .lt-username {
            font-size: var(--text-md);
            font-weight: 600;
            margin-bottom: var(--spacing-lg);
        }

        /* TAUTAN */
        .lt-links {
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: var(--spacing-sm);
        }

        .lt-btn {
            position: relative;
            width: 100%;

            padding: 0.9rem 2.5rem 0.9rem 1.5rem;
            border-radius: var(--btn-radius);

            border: 1px solid rgba(255,255,255,0.35);
            background: transparent;

            color: #fff;
            font-size: var(--text-sm);
            text-transform: uppercase;
            letter-spacing: 0.04em;

            cursor: pointer;
            transition: 0.2s;
        }

        .lt-btn:hover {
            background: rgba(255,255,255,0.06);
        }

        .lt-btn:active {
            background: rgba(255,255,255,0.12);
        }

        .lt-btn .dots {
            position: absolute;
            right: var(--dots-right);
            top: 50%;
            transform: translateY(-50%);
            opacity: 0.5;
        }

        /* JOIN BUTTON */
        .lt-join-btn {
            margin-top: var(--spacing-xl);

            padding: 0.65rem 1.5rem;
            border-radius: var(--btn-radius);

            background: #fff;
            color: #1E2330;

            font-size: 0.85rem;
            font-weight: 600;

            border: none;
            cursor: pointer;

            box-shadow: 0 0.25rem 1.25rem rgba(0,0,0,0.25);
        }

        .lt-join-btn:hover {
            opacity: 0.88;
        }

        /* FOOTER */
        .lt-footer {
            margin-top: 1.25rem;
            font-size: var(--text-xs);
            opacity: 0.5;

            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: var(--spacing-xs);
        }
    </style>
</head>

<body>

<div class="lt-card">

    <div class="lt-topbar">
        <div class="lt-icon-btn">
    <svg viewBox="0 0 24 24">
        <path d="M12 2v20M4.93 4.93l14.14 14.14M2 12h20M4.93 19.07L19.07 4.93"
              stroke="#111"
              stroke-width="2"
              stroke-linecap="round"/>
    </svg>
</div>
        <div style="display:flex; gap:0.4rem;">
           <div class="lt-icon-btn">
    <svg viewBox="0 0 24 24" fill="none">
        <path d="M12 22a2 2 0 0 0 2-2h-4a2 2 0 0 0 2 2Z" stroke="#111" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M18 16V11a6 6 0 1 0-12 0v5l-2 2h16l-2-2Z" stroke="#111" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
</div>
           <div class="lt-icon-btn">
    <svg viewBox="0 0 24 24" fill="none">
        <path d="M12 16V4" stroke="#111" stroke-width="1.8" stroke-linecap="round"/>
        <path d="M8 8l4-4 4 4" stroke="#111" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M4 20h16" stroke="#111" stroke-width="1.8" stroke-linecap="round"/>
    </svg>
</div>
        </div>
    </div>

    <div class="lt-avatar">
        <img src="https://ugc.production.linktr.ee/5OovCtTRq0Oes9UaPnZg_Z2t4olSht1mE1s7r?io=true&size=avatar-v3_0">
    </div>

    <div class="lt-username">@alinea1.0</div>

    <div class="lt-links">
        <button class="lt-btn">OUR MENU !<span class="dots">⋮</span></button>
        <button class="lt-btn">RATE US ON GOOGLE !<span class="dots">⋮</span></button>
        <button class="lt-btn">ALINEA POUNDFIT w/ Bunsky Vol.2 | JAN 2026<span class="dots">⋮</span></button>
        <button class="lt-btn">CHAT US ON WHATSAPP !<span class="dots">⋮</span></button>
        <button class="lt-btn">FIND US ON INSTAGRAM !<span class="dots">⋮</span></button>
        <button class="lt-btn">TOKOPEDIA !<span class="dots">⋮</span></button>
        <button class="lt-btn">SHOPEE !<span class="dots">⋮</span></button>
    </div>

    <button class="lt-join-btn">Join alinea1.0 on Linktree</button>

    <div class="lt-footer">
        <span>Cookie Preferences</span> •
        <span>Report</span> •
        <span>Privacy</span> •
        <span>Explore</span>
    </div>

</div>

</body>
</html>
