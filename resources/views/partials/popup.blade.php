<!-- Modal Overlay -->
<div id="popupOverlay" class="popup-overlay">
    <div class="popup-modal">
        <button class="popup-close" onclick="closePopup()">×</button>
        <h2>Latest/News</h2>
        <p>
        <div id="newsContent" class="news-content">
            <div class="marquee-inner">

                @foreach ($latestNews as $item)
                    @php
                        $isNew = $item->created_at->greaterThan(now()->subDays(7));
                    @endphp

                    <div class="news-item">
                        <h4>
                            📢 {{ $item->title }}
                            @if ($isNew)
                                <span class="new-badge">NEW</span>
                            @endif
                        </h4>

                        <div class="news-meta">
                            <span>{{ $item->created_at->format('d M Y') }}</span>

                            @if ($item->pdf)
                                <a href="{{ asset('storage/' . $item->pdf) }}" target="_blank" class="pdf-btn">
                                  Download  PDF
                                </a>
                            @endif
                        </div>

                        <p>{{ Str::limit($item->description, 100) }}</p>

                        <a href="{{ route('public.news') }}" class="read-more">
                            Read More →
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
        </p>
        <div class="flex justify-center">
            <a href="{{ route('public.news') }}" class="popup-btn">View All</a>
        </div>
    </div>
</div>


<style>
    /* Main Box */
    #latestNewsBox {
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 320px;
        background: #ffffff;
        border: 2px solid #pink;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        z-index: 99999;
        font-family: Lexend, ui-sans-serif, system-ui;
    }

    /* Header */
    .news-header {
        background: linear-gradient(to right,
                var(--gradient-from, #a855f7),
                var(--gradient-to, #f472b6));
        color: #fff;
        padding: 10px 14px;
        font-weight: bold;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-radius: 8px 8px 0 0;
    }

    /* Buttons */
    .news-actions button {
        background: none;
        border: none;
        color: #fff;
        font-size: 18px;
        cursor: pointer;
        margin-left: 6px;
    }

    /* Content container */
    .news-content {
        height: 220px;
        overflow: hidden;
        position: relative;
        background: #fff;
    }

    /* Vertical marquee */
    .marquee-inner {
        animation: scrollUp 18s linear infinite;
    }

    .news-content:hover .marquee-inner {
        animation-play-state: paused;
    }

    /* News item */
    .news-item {
        padding: 10px;
        border-bottom: 1px dashed #ddd;
        font-size: 14px;
    }

    .news-item h4 {
        margin: 0 0 6px;
        font-size: 14px;
        color: #000;
    }

    /* Meta */
    .news-meta {
        display: flex;
        justify-content: space-between;
        font-size: 12px;
        color: #666;
        margin-bottom: 6px;
    }

    .news-item p {
        font-size: 13px;
        color: #333;
        margin-bottom: 6px;
    }

    /* Badges & buttons */
    .new-badge {
        background: #e11d48;
        color: #fff;
        font-size: 10px;
        padding: 2px 6px;
        border-radius: 12px;
        margin-left: 6px;
    }

    .pdf-btn {
        background: #facc15;
        color: #000;
        font-size: 10px;
        padding: 2px 6px;
        border-radius: 4px;
        text-decoration: none;
    }

    .read-more {
        font-size: 12px;
        color: #2563eb;
        text-decoration: none;
    }

    /* Animation */
    @keyframes scrollUp {
        from {
            transform: translateY(100%);
        }

        to {
            transform: translateY(-100%);
        }
    }

    /* Mobile */
    @media (max-width: 768px) {
        #latestNewsBox {
            width: 90%;
            left: 5%;
            right: auto;
            bottom: 10px;
        }
    }
</style>

<script>
    function toggleNews() {
        const content = document.getElementById('newsContent');
        content.style.display = content.style.display === 'none' ? 'block' : 'none';
    }

    function closeNews() {
        document.getElementById('latestNewsBox').style.display = 'none';
    }
</script>


<style>
    /* Overlay */
    .popup-overlay {
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, 0.6);
        display: none;
        align-items: center;
        justify-content: center;
        z-index: 99999;
    }

    /* Modal */
    .popup-modal {
        background: #fff;
        width: 90%;
        max-width: 400px;
        padding: 25px;
        border-radius: 10px;
        text-align: left;
        position: relative;
        animation: popupScale 0.3s ease;
    }

    /* Close button */
    .popup-close {
        position: absolute;
        top: 10px;
        right: 12px;
        background: none;
        border: none;
        font-size: 22px;
        cursor: pointer;
    }

    /* Button */
    .popup-btn {
        display: inline-block;
        margin-top: 15px;
        background: #6a00ff;
        color: #fff;
        padding: 10px 20px;
        border-radius: 6px;
        text-decoration: none;
        font-size: 14px;
    }

    /* Animation */
    @keyframes popupScale {
        from {
            transform: scale(0.8);
            opacity: 0;
        }

        to {
            transform: scale(1);
            opacity: 1;
        }
    }
</style>

<script>
    // Open popup after 3 seconds
    window.addEventListener('load', () => {
        setTimeout(() => {
            document.getElementById('popupOverlay').style.display = 'flex';
        }, 3000); // 3000ms = 3 seconds
    });

    function closePopup() {
        document.getElementById('popupOverlay').style.display = 'none';
    }

    // Close on outside click
    document.getElementById('popupOverlay').addEventListener('click', function(e) {
        if (e.target === this) closePopup();
    });
</script>
