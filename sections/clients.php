<section class="clients-section" id="clients" aria-labelledby="clients-title">
    <div class="clients-shell">
        <div class="clients-grid">
            <div class="clients-feature-card">
                <p class="eyebrow">Trusted Nationwide</p>
                <h2 id="clients-title">Our Valued Clients</h2>
                <p class="clients-description">Just some of the clients we have had the honour of mediating for. 100+ genuine reviews, no "John from London said!" How many reviews have our competition got?!</p>
                
                <div class="clients-review-badge">
                    <span class="star-icon" aria-hidden="true">★</span>
                    <span>100 Genuine 5 Star Reviews</span>
                </div>
            </div>

            <div class="clients-logo-grid" aria-label="Client company logos">
                <?php
                $logos = [
                    'pc1.png' => 'Paris Smith Solicitors',
                    'pc2.png' => 'Sandwell Council',
                    'pc3.png' => 'Nehemiah UCHA',
                    'pc4.png' => 'Carpenter & Co Solicitors',
                    'pc5.png' => 'BOCP Counselling & Psychotherapy',
                    'pc6.png' => 'Beachcroft',
                    'pc7.png' => 'Sarginsons Law',
                    'pc8.png' => 'BLM Law',
                    'pc9.png' => 'Eversheds Sutherland',
                    'pc10.png' => 'Staple Inn Chambers',
                    'pc11.png' => 'Mendip District Council',
                    'pc12.png' => 'CISK Legal',
                    'pc13.png' => 'St Ives Chambers',
                    'pc14.png' => 'Bray & Bray Solicitors',
                    'pc15.png' => 'Freeths Cartwright LLP'
                ];
                foreach ($logos as $filename => $altText): ?>
                    <div class="client-logo-card">
                        <img src="assets/footer_logos/<?= $filename ?>" alt="<?= htmlspecialchars($altText, ENT_QUOTES, 'UTF-8') ?>" loading="lazy">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
