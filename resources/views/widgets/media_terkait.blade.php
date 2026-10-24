<div class="headmodule difle-l to-center">
	<div class="headmodule-icon difle-c"><svg viewBox="0 0 24 24"><path d="M22.7 14.3L21.7 15.3L19.7 13.3L20.7 12.3C20.8 12.2 20.9 12.1 21.1 12.1C21.2 12.1 21.4 12.2 21.5 12.3L22.8 13.6C22.9 13.8 22.9 14.1 22.7 14.3M13 19.9V22H15.1L21.2 15.9L19.2 13.9L13 19.9M21 5C21 3.9 20.1 3 19 3H5C3.9 3 3 3.9 3 5V19C3 20.1 3.9 21 5 21H11V19.1L12.1 18H5L8.5 13.5L11 16.5L14.5 12L16.1 14.1L21 9.1V5Z" /></svg></div>
	<h1 class="gradient-text">Media Terkait</h1>
</div>

<div id="media-terkait-widget">
    <div class="marquee-wrapper">
        <div class="marquee-content">
            <ul class="marquee-track">
                <li>
                    <span>Loading media terkait...</span>
                </li>
            </ul>
        </div>
    </div>
</div>

<style>
.marquee-wrapper {
    overflow: hidden;
    position: relative;
    width: 100%;
    background-color: #f0f8ff;
    border-top: 1px solid #ccc;
    border-bottom: 1px solid #ccc;
}

.marquee-content {
    display: flex;
    /* animation applied only when .animate class is added */
}

.marquee-content.animate {
    animation: marquee-seamless 30s linear infinite;
}

.marquee-track {
    display: flex;
    list-style: none;
    padding: 10px 0;
    margin: 0;
}

.marquee-track li {
    margin: 0 20px;
    flex-shrink: 0;
}

.marquee-track img {
    height: 50px;
    object-fit: contain;
}

@keyframes marquee-seamless {
    0% {
        transform: translateX(0%);
    }
    100% {
        transform: translateX(-50%);
    }
}
</style>
