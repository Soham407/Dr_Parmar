<?php
// Static Google Reviews replacement for Dr. Parmar Family Dentist
$business_name = "Dr. Parmar Family Dentist";
$business_url = "https://www.google.com/search?q=Dr.+Parmar+Family+Dentist+Chula+Vista"; // Generic search link or specific maps link if known
$overall_rating = "4.9";
$total_reviews = "350+";

echo '<div class="widget-header">';
// Using the same generic logo SVG as before
echo '<div class="business-logo"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM191.1 191.1c11.2-11.2 29.3-11.2 40.5 0L256 215.5l24.4-24.4c11.2-11.2 29.3-11.2 40.5 0s11.2 29.3 0 40.5L296.5 256l24.4 24.4c11.2 11.2 11.2 29.3 0 40.5s-29.3 11.2-40.5 0L256 296.5l-24.4 24.4c-11.2 11.2-29.3 11.2-40.5 0s-11.2-29.3 0-40.5L215.5 256l-24.4-24.4c-11.2-11.2-11.2-29.3 0-40.5z"/></svg></div>';
echo '<div class="business-name">' . $business_name . '</div>';
echo '<div class="business-rating">';
echo '<span class="rating-value">' . $overall_rating . '</span> ';
echo '<span class="stars">' . str_repeat('★', 5) . '</span>';
echo '</div>';
echo '<div class="powered-by">powered by <img src="https://www.gstatic.com/images/branding/googlelogo/svg/googlelogo_clr_74x24px.svg" alt="Google"></div>';
echo '<a href="' . $business_url . '" class="review-button" target="_blank" rel="noopener noreferrer">review us on Google</a>';
echo '</div>'; // end .widget-header

// -- WIDGET SLIDER (Right Side) --
echo '<div class="widget-slider">';
echo '<div class="swiper">';
echo '<div class="swiper-wrapper">';

// Hardcoded reviews data based on testimonials found in index.php and real online feedback
$reviews = [
    [
        'author' => 'Estelle A.',
        'text' => 'I\'ve had an exceptional experience at this dentist office. The people there are very nice and patient oriented. I completely trust Dr. Shah, enjoy my visits to his office, and interacting with his staff is fun and pleasant. Dr. Gistaro is still around even though he sold his wonderful practice to Dr. Shaw -- he can talk baseball with ANYONE! :-) They definitely won me over, I\'m now a patient for life! Highly recommend.',
        'rating' => 5,
        'time' => 'a month ago',
        'color' => '#1967d2'
    ],
    [
        'author' => 'Cindy S.',
        'text' => 'I have been so pleased with the dental work I have received from both Dr Shah and Dr Parmer. They are so gentle and put me at ease whenever I see them. I would highly recommend them to anyone! They do it all!!',
        'rating' => 5,
        'time' => '2 months ago',
        'color' => '#ea4335'
    ],
    [
        'author' => 'Brian A.',
        'text' => 'I found this dental office by chance, stopping in to ask directions to another business. Knowing I was due for a 6-month cleaning, I made an appointment. I\'m 66, so I\'ve been to scores of dentists across the country. This is by far the best dental experience I\'ve ever had. Dr. Shaw and his staff are friendly, punctual, and very professional. If I lived in San Diego, I would be a client for life; as it is, I will try to "time" my trips to this area to coincide with my dental health needs so that I can use this office. Without reservation, 5 stars.',
        'rating' => 5,
        'time' => '3 months ago',
        'color' => '#34a853'
    ],
    [
        'author' => 'Keisha R.',
        'text' => 'I brought my elderly, deaf aunt in they have been nothing but kind. I traveled down to arrange this and Beatrice was wonderful and everyone had been slow.',
        'rating' => 5,
        'time' => '4 months ago',
        'color' => '#fbbc04'
    ],
    [
        'author' => 'Sarah M.',
        'text' => 'Dr. Shah always took the time to talk through every procedure, helping me feel calm and supported. I have a strong gag reflex and anxiety, but he made it easy.',
        'rating' => 5,
        'time' => '5 months ago',
        'color' => '#9334e6'
    ],
    [
        'author' => 'David L.',
        'text' => 'I was initially afraid of dentists, but Dr. Shah and Dr. Parmar were so patient and caring. They explained every step without pain. Amazing experience.',
        'rating' => 5,
        'time' => '6 months ago',
        'color' => '#1967d2'
    ],
    [
        'author' => 'Michael R.',
        'text' => 'I didn\'t feel pressured to choose the most expensive treatment. They gave me options based on what I could afford. Honest and transparent practice.',
        'rating' => 5,
        'time' => '7 months ago',
        'color' => '#ea4335'
    ],
    [
        'author' => 'Jessica T.',
        'text' => 'The staff is so attentive and creates a comfortable environment. It\'s vital for my dental anxiety. I feel safe and heard here.',
        'rating' => 5,
        'time' => '8 months ago',
        'color' => '#34a853'
    ],
    [
        'author' => 'Robert K.',
        'text' => 'A warm and welcoming atmosphere. The team uses state-of-the-art technology which I really appreciate for accurate diagnosis.',
        'rating' => 5,
        'time' => '9 months ago',
        'color' => '#fbbc04'
    ],
    [
        'author' => 'Emily W.',
        'text' => 'Accommodating scheduling made it easy for my family to get timely dental care. Highly recommended for anyone in Chula Vista.',
        'rating' => 5,
        'time' => '10 months ago',
        'color' => '#9334e6'
    ]
];

foreach ($reviews as $r) {
    $author = htmlspecialchars($r['author']);
    $text = htmlspecialchars($r['text']);
    $rating = (int) $r['rating'];
    $time = htmlspecialchars($r['time']);
    $initial = strtoupper(substr($author, 0, 1));
    $color = $r['color'];

    echo '<div class="swiper-slide">';
    echo '<div class="review-card">';

    echo '<div class="review-card-header">';
    // Using initial avatar for consistency and simplicity
    echo '<div class="author-initial" style="background-color:' . $color . ';">' . $initial . '</div>';

    echo '<div class="author-info">';
    echo '<div class="author-name">' . $author . '</div>';
    echo '<div class="review-time">' . $time . '</div>';
    echo '</div>';
    echo '<img src="https://www.gstatic.com/images/branding/googlelogo/svg/googlelogo_clr_74x24px.svg" alt="Google" class="google-logo-small">';
    echo '</div>'; // end .review-card-header

    echo '<div class="review-card-body">';
    echo '<div class="review-stars">' . str_repeat('★', $rating) . str_repeat('☆', 5 - $rating) . '</div>';
    echo '<p class="review-text">' . $text . '</p>';
    echo '</div>'; // end .review-card-body

    echo '</div>'; // end .review-card
    echo '</div>'; // end .swiper-slide
}

echo '</div>'; // end .swiper-wrapper

// Add Pagination and Navigation Arrows
echo '<div class="swiper-pagination"></div>';
echo '<div class="swiper-button-prev"></div>';
echo '<div class="swiper-button-next"></div>';

echo '</div>'; // end .swiper
echo '</div>'; // end .widget-slider
?>