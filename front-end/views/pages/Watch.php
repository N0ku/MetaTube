<?php ob_start() ?>
<div class="watch-content">
    <div class="lector">
        <div class="video-lector">
            <div class="container-watch">
                <div class="video-container" id="video-container">
                    <div class="playback-animation" id="playback-animation">
                        <svg class="playback-icons lectorsvg">
                            <use class="hidden" href="#play-icon"></use>
                            <use href="#pause"></use>
                        </svg>
                    </div>

                    <video controls class="video" id="video" preload="metadata"
                        poster="/front-end/assets/img/poster.jpeg">
                        <source src="/front-end/assets/videos/video.mp4" type="video/mp4">
                        </source>
                    </video>

                    <div class="video-controls hidden" id="video-controls">
                        <div class="video-progress">
                            <progress id="progress-bar" value="0" min="0"></progress>
                            <input class="seek" id="seek" value="0" min="0" type="range" step="1">
                            <div class="seek-tooltip" id="seek-tooltip">00:00</div>
                        </div>

                        <div class="bottom-controls">
                            <div class="left-controls">
                                <button class="lectorbutton" data-title="Play (k)" id="play">
                                    <svg class="playback-icons lectorsvg">
                                        <use href="#play-icon"></use>
                                        <use class="hidden" href="#pause"></use>
                                    </svg>
                                </button>

                                <div class="volume-controls">
                                    <button data-title="Mute (m)" class="volume-button lectorbutton" id="volume-button">
                                        <svg class="lectorsvg">
                                            <use class="hidden" href="#volume-mute"></use>
                                            <use class="hidden" href="#volume-low"></use>
                                            <use href="#volume-high"></use>
                                        </svg>
                                    </button>

                                    <input class="volume" id="volume" value="1" data-mute="0.5" type="range" max="1"
                                        min="0" step="0.01">
                                </div>

                                <div class="time">
                                    <time id="time-elapsed">00:00</time>
                                    <span> / </span>
                                    <time id="duration">00:00</time>
                                </div>
                            </div>

                            <div class="right-controls">
                                <button data-title="PIP (p)" class="pip-button lectorbutton" id="pip-button">
                                    <svg class="lectorsvg">
                                        <use href="#pip"></use>
                                    </svg>
                                </button>
                                <button data-title="Full screen (f)" class="fullscreen-button lectorbutton"
                                    id="fullscreen-button">
                                    <svg class="lectorsvg">
                                        <use href="#fullscreen"></use>
                                        <use href="#fullscreen-exit" class="hidden"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <svg style="display: none" class="lectorsvg">
                <defs>
                    <symbol id="pause" viewBox="0 0 24 24">
                        <path d="M14.016 5.016h3.984v13.969h-3.984v-13.969zM6 18.984v-13.969h3.984v13.969h-3.984z">
                        </path>
                    </symbol>

                    <symbol id="play-icon" viewBox="0 0 24 24">
                        <path d="M8.016 5.016l10.969 6.984-10.969 6.984v-13.969z"></path>
                    </symbol>

                    <symbol id="volume-high" viewBox="0 0 24 24">
                        <path
                            d="M14.016 3.234q3.047 0.656 5.016 3.117t1.969 5.648-1.969 5.648-5.016 3.117v-2.063q2.203-0.656 3.586-2.484t1.383-4.219-1.383-4.219-3.586-2.484v-2.063zM16.5 12q0 2.813-2.484 4.031v-8.063q1.031 0.516 1.758 1.688t0.727 2.344zM3 9h3.984l5.016-5.016v16.031l-5.016-5.016h-3.984v-6z">
                        </path>
                    </symbol>

                    <symbol id="volume-low" viewBox="0 0 24 24">
                        <path
                            d="M5.016 9h3.984l5.016-5.016v16.031l-5.016-5.016h-3.984v-6zM18.516 12q0 2.766-2.531 4.031v-8.063q1.031 0.516 1.781 1.711t0.75 2.32z">
                        </path>
                    </symbol>

                    <symbol id="volume-mute" viewBox="0 0 24 24">
                        <path
                            d="M12 3.984v4.219l-2.109-2.109zM4.266 3l16.734 16.734-1.266 1.266-2.063-2.063q-1.547 1.313-3.656 1.828v-2.063q1.172-0.328 2.25-1.172l-4.266-4.266v6.75l-5.016-5.016h-3.984v-6h4.734l-4.734-4.734zM18.984 12q0-2.391-1.383-4.219t-3.586-2.484v-2.063q3.047 0.656 5.016 3.117t1.969 5.648q0 2.203-1.031 4.172l-1.5-1.547q0.516-1.266 0.516-2.625zM16.5 12q0 0.422-0.047 0.609l-2.438-2.438v-2.203q1.031 0.516 1.758 1.688t0.727 2.344z">
                        </path>
                    </symbol>

                    <symbol id="fullscreen" viewBox="0 0 24 24">
                        <path
                            d="M14.016 5.016h4.969v4.969h-1.969v-3h-3v-1.969zM17.016 17.016v-3h1.969v4.969h-4.969v-1.969h3zM5.016 9.984v-4.969h4.969v1.969h-3v3h-1.969zM6.984 14.016v3h3v1.969h-4.969v-4.969h1.969z">
                        </path>
                    </symbol>

                    <symbol id="fullscreen-exit" viewBox="0 0 24 24">
                        <path
                            d="M15.984 8.016h3v1.969h-4.969v-4.969h1.969v3zM14.016 18.984v-4.969h4.969v1.969h-3v3h-1.969zM8.016 8.016v-3h1.969v4.969h-4.969v-1.969h3zM5.016 15.984v-1.969h4.969v4.969h-1.969v-3h-3z">
                        </path>
                    </symbol>

                    <symbol id="pip" viewBox="0 0 24 24">
                        <path
                            d="M21 19.031v-14.063h-18v14.063h18zM23.016 18.984q0 0.797-0.609 1.406t-1.406 0.609h-18q-0.797 0-1.406-0.609t-0.609-1.406v-14.016q0-0.797 0.609-1.383t1.406-0.586h18q0.797 0 1.406 0.586t0.609 1.383v14.016zM18.984 11.016v6h-7.969v-6h7.969z">
                        </path>
                    </symbol>
                </defs>
            </svg>

            <div class="below-video-content">
                <div class="video-informations">
                    <p class="watch-vid-title">Robin - While True (clip) ft.PH,Romuald</p>
                    <div class="video-views-date-desc">
                        <div class="video-date-views">
                            <p class="watch-video-views">7,679,097 views</p>
                            <p class="watch-video-date">Jan 12 1990</p>
                        </div>
                        <p class="video-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora
                            maxime ipsum pariatur quos incidunt labore molestias aut, itaque iste maiores tenetur
                            reiciendis totam placeat at sequi atque! Maiores, blanditiis voluptas?</p>
                    </div>
                    <div class="video-icons">
                        <div class="video-icon">
                            <img src="/front-end/assets/img/Menu-svg/compass.svg" alt="">
                            <p>Partager</p>
                        </div>
                        <div class="video-icon">
                            <img src="/front-end/assets/img/Menu-svg/compass.svg" alt="">
                            <p>Partager</p>
                        </div>
                        <div class="video-icon">
                            <img src="/front-end/assets/img/Menu-svg/compass.svg" alt="">
                            <p>Partager</p>
                        </div>
                        <div class="video-icon">
                            <img src="/front-end/assets/img/Menu-svg/compass.svg" alt="">
                            <p>Partager</p>
                        </div>
                        <div class="video-icon">
                            <img src="/front-end/assets/img/Menu-svg/compass.svg" alt="">
                            <p>Partager</p>
                        </div>
                        <div class="video-icon">
                            <img src="/front-end/assets/img/Menu-svg/compass.svg" alt="">
                            <p>Partager</p>
                        </div>
                        <div class="video-icon">
                            <img src="/front-end/assets/img/Menu-svg/compass.svg" alt="">
                            <p>Partager</p>
                        </div>
                    </div>
                </div>
                <div class="below-content-box">
                    <div class="channel-watch box-below">
                        <img src="/front-end/assets/img/favicon.svg" alt="" width="36px" height="36px">
                        <div class="watch-chan-infos">
                            <div class="video-watch-name-channel">Robin the Gang</div>
                            <div class="video-watch-subscribers">100k subscribers</div>
                        </div>
                        <button class="sub-button-watch">SUBSCRIBE</button>
                    </div>

                    <div class="comments-video box-below">
                        <div class="watch-chan-infos comment-box">
                            <div class="video-watch-name-channel">Comments</div>
                            <div class="video-watch-subscribers">8.8k</div>
                        </div>
                        <img src="/front-end/assets/img/bonhomme-baton.jpeg" alt="" width="25px" height="25px"
                            style="border-radius: 50%; margin-left:5px;">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae sunt perspiciatis iure commodi
                            itaque officiis nihil quaerat incidunt eos, assumenda illum at! Provident recusandae error
                            sequi quaerat nisi corporis architecto?</p>
                    </div>
                </div>
            </div>
            <div class="comments-section">
                <div class="comments-section-infos">
                    <p class="comments-section-number">27,400 Comments</p>
                </div>
                <div class="add-comment">
                    <div class="add-comment-line">
                        <img src="/front-end/assets/img/cucumber.jpeg" alt=""
                            style="border-radius:50%; width:40px; height:40px;">
                        <input type="text" name="" class="add-comment-text" cols=" 30" rows="10"
                            placeholder="Add a comment.." />

                    </div>
                    <div class="add-comment-buttons">
                        <button class="cancel-button">CANCEL</button>
                        <button class="comment-button">COMMENT</button>
                    </div>
                </div>
                <div class="watch-comments">
                    <div class="comments-name">
                        <img src="/front-end/assets/img/bonhomme-baton.jpeg" alt="" class="img-comment-user"
                            style="border-radius:50%; width:40px; height:40px;">
                        <p class="name-comment-user">Romuald</p>
                        <p class="date-comments">2mins ago</p>
                    </div>
                    <p class="comments-content">
                        This clip is amazing !!! You are my god of the music ❤️
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, consequuntur ullam?
                        Perferendis libero dignissimos consectetur odit ab veniam, perspiciatis doloremque est dicta
                        architecto iste assumenda dolorum exercitationem? Numquam, est reiciendis!
                    </p>
                    <div class="comment-likes">
                        <div class="comment-like">
                            <img src="/front-end/assets/img/like.svg" alt="like" class="comment-like-img">
                            <p class="comment-like-number">1.1k</p>
                        </div>
                        <div class="comment-dislike">
                            <img src="/front-end/assets/img/dislike.svg" alt="dislike" class="comment-dislike-img">
                            <p class="comment-disike-number">107k</p>
                        </div>
                    </div>
                    <button class="comments-reply">
                        <img src="/front-end/assets/img/arrow-reply.svg" alt="">
                        <p> Views x replies</p>
                    </button>
                </div>
                <div class="watch-comments">
                    <div class="comments-name">
                        <img src="/front-end/assets/img/bonhomme-baton.jpeg" alt="" class="img-comment-user"
                            style="border-radius:50%; width:40px; height:40px;">
                        <p class="name-comment-user">Romuald</p>
                        <p class="date-comments">2mins ago</p>
                    </div>
                    <p class="comments-content">
                        This clip is amazing !!! You are my god of the music ❤️
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, consequuntur ullam?
                        Perferendis libero dignissimos consectetur odit ab veniam, perspiciatis doloremque est dicta
                        architecto iste assumenda dolorum exercitationem? Numquam, est reiciendis!
                    </p>
                    <div class="comment-likes">
                        <div class="comment-like">
                            <img src="/front-end/assets/img/like.svg" alt="like" class="comment-like-img">
                            <p class="comment-like-number">1.1k</p>
                        </div>
                        <div class="comment-dislike">
                            <img src="/front-end/assets/img/dislike.svg" alt="dislike" class="comment-dislike-img">
                            <p class="comment-disike-number">107k</p>
                        </div>
                    </div>
                    <button class="comments-reply">
                        <img src="/front-end/assets/img/arrow-reply.svg" alt="">
                        <p> Views x replies</p>
                    </button>
                </div>
                <div class="watch-comments">
                    <div class="comments-name">
                        <img src="/front-end/assets/img/bonhomme-baton.jpeg" alt="" class="img-comment-user"
                            style="border-radius:50%; width:40px; height:40px;">
                        <p class="name-comment-user">Romuald</p>
                        <p class="date-comments">2mins ago</p>
                    </div>
                    <p class="comments-content">
                        This clip is amazing !!! You are my god of the music ❤️
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, consequuntur ullam?
                        Perferendis libero dignissimos consectetur odit ab veniam, perspiciatis doloremque est dicta
                        architecto iste assumenda dolorum exercitationem? Numquam, est reiciendis!
                    </p>
                    <div class="comment-likes">
                        <div class="comment-like">
                            <img src="/front-end/assets/img/like.svg" alt="like" class="comment-like-img">
                            <p class="comment-like-number">1.1k</p>
                        </div>
                        <div class="comment-dislike">
                            <img src="/front-end/assets/img/dislike.svg" alt="dislike" class="comment-dislike-img">
                            <p class="comment-disike-number">107k</p>
                        </div>
                    </div>
                    <button class="comments-reply">
                        <img src="/front-end/assets/img/arrow-reply.svg" alt="">
                        <p> Views x replies</p>
                    </button>
                </div>
                <div class="watch-comments">
                    <div class="comments-name">
                        <img src="/front-end/assets/img/bonhomme-baton.jpeg" alt="" class="img-comment-user"
                            style="border-radius:50%; width:40px; height:40px;">
                        <p class="name-comment-user">Romuald</p>
                        <p class="date-comments">2mins ago</p>
                    </div>
                    <p class="comments-content">
                        This clip is amazing !!! You are my god of the music ❤️
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, consequuntur ullam?
                        Perferendis libero dignissimos consectetur odit ab veniam, perspiciatis doloremque est dicta
                        architecto iste assumenda dolorum exercitationem? Numquam, est reiciendis!
                    </p>
                    <div class="comment-likes">
                        <div class="comment-like">
                            <img src="/front-end/assets/img/like.svg" alt="like" class="comment-like-img">
                            <p class="comment-like-number">1.1k</p>
                        </div>
                        <div class="comment-dislike">
                            <img src="/front-end/assets/img/dislike.svg" alt="dislike" class="comment-dislike-img">
                            <p class="comment-disike-number">107k</p>
                        </div>
                    </div>
                    <button class="comments-reply">
                        <img src="/front-end/assets/img/arrow-reply.svg" alt="">
                        <p> Views x replies</p>
                    </button>
                </div>
                <div class="watch-comments">
                    <div class="comments-name">
                        <img src="/front-end/assets/img/bonhomme-baton.jpeg" alt="" class="img-comment-user"
                            style="border-radius:50%; width:40px; height:40px;">
                        <p class="name-comment-user">Romuald</p>
                        <p class="date-comments">2mins ago</p>
                    </div>
                    <p class="comments-content">
                        This clip is amazing !!! You are my god of the music ❤️
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, consequuntur ullam?
                        Perferendis libero dignissimos consectetur odit ab veniam, perspiciatis doloremque est dicta
                        architecto iste assumenda dolorum exercitationem? Numquam, est reiciendis!
                    </p>
                    <div class="comment-likes">
                        <div class="comment-like">
                            <img src="/front-end/assets/img/like.svg" alt="like" class="comment-like-img">
                            <p class="comment-like-number">1.1k</p>
                        </div>
                        <div class="comment-dislike">
                            <img src="/front-end/assets/img/dislike.svg" alt="dislike" class="comment-dislike-img">
                            <p class="comment-disike-number">107k</p>
                        </div>
                    </div>
                    <button class="comments-reply">
                        <img src="/front-end/assets/img/arrow-reply.svg" alt="">
                        <p> Views x replies</p>
                    </button>
                </div>
                <div class="watch-comments">
                    <div class="comments-name">
                        <img src="/front-end/assets/img/bonhomme-baton.jpeg" alt="" class="img-comment-user"
                            style="border-radius:50%; width:40px; height:40px;">
                        <p class="name-comment-user">Romuald</p>
                        <p class="date-comments">2mins ago</p>
                    </div>
                    <p class="comments-content">
                        This clip is amazing !!! You are my god of the music ❤️
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, consequuntur ullam?
                        Perferendis libero dignissimos consectetur odit ab veniam, perspiciatis doloremque est dicta
                        architecto iste assumenda dolorum exercitationem? Numquam, est reiciendis!
                    </p>
                    <div class="comment-likes">
                        <div class="comment-like">
                            <img src="/front-end/assets/img/like.svg" alt="like" class="comment-like-img">
                            <p class="comment-like-number">1.1k</p>
                        </div>
                        <div class="comment-dislike">
                            <img src="/front-end/assets/img/dislike.svg" alt="dislike" class="comment-dislike-img">
                            <p class="comment-disike-number">107k</p>
                        </div>
                    </div>
                    <button class="comments-reply">
                        <img src="/front-end/assets/img/arrow-reply.svg" alt="">
                        <p> Views x replies</p>
                    </button>
                </div>
                <div class="watch-comments">
                    <div class="comments-name">
                        <img src="/front-end/assets/img/bonhomme-baton.jpeg" alt="" class="img-comment-user"
                            style="border-radius:50%; width:40px; height:40px;">
                        <p class="name-comment-user">Romuald</p>
                        <p class="date-comments">2mins ago</p>
                    </div>
                    <p class="comments-content">
                        This clip is amazing !!! You are my god of the music ❤️
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, consequuntur ullam?
                        Perferendis libero dignissimos consectetur odit ab veniam, perspiciatis doloremque est dicta
                        architecto iste assumenda dolorum exercitationem? Numquam, est reiciendis!
                    </p>
                    <div class="comment-likes">
                        <div class="comment-like">
                            <img src="/front-end/assets/img/like.svg" alt="like" class="comment-like-img">
                            <p class="comment-like-number">1.1k</p>
                        </div>
                        <div class="comment-dislike">
                            <img src="/front-end/assets/img/dislike.svg" alt="dislike" class="comment-dislike-img">
                            <p class="comment-disike-number">107k</p>
                        </div>
                    </div>
                    <button class="comments-reply">
                        <img src="/front-end/assets/img/arrow-reply.svg" alt="">
                        <p> Views x replies</p>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="suggestions-video">
        <a href="index.php?name=Watch">
            <div class="watch-video-content">
                <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail-watch" />
                <div class="watch-next-content">
                    <strong class="watch-watch-vid-title">I'M THE TITLE OF THE VIDEO</strong>
                    <div class="watch-content-infos">
                        <p class="watch-video-channel-name">Name of the chanel</p>
                        <div class="watch-video-infos">
                            <p class="watch-video-number-views">200k views</p>
                            <p class="watch-video-date">2 weeks ago</p>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="index.php?name=Watch">
            <div class="watch-video-content">
                <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail-watch" />
                <div class="watch-next-content">
                    <strong class="watch-watch-vid-title">I'M THE TITLE OF THE VIDEO</strong>
                    <div class="watch-content-infos">
                        <p class="watch-video-channel-name">Name of the chanel</p>
                        <div class="watch-video-infos">
                            <p class="watch-video-number-views">200k views</p>
                            <p class="watch-video-date">2 weeks ago</p>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="index.php?name=Watch">
            <div class="watch-video-content">
                <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail-watch" />
                <div class="watch-next-content">
                    <strong class="watch-watch-vid-title">I'M THE TITLE OF THE VIDEO</strong>
                    <div class="watch-content-infos">
                        <p class="watch-video-channel-name">Name of the chanel</p>
                        <div class="watch-video-infos">
                            <p class="watch-video-number-views">200k views</p>
                            <p class="watch-video-date">2 weeks ago</p>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="index.php?name=Watch">
            <div class="watch-video-content">
                <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail-watch" />
                <div class="watch-next-content">
                    <strong class="watch-watch-vid-title">I'M THE TITLE OF THE VIDEO</strong>
                    <div class="watch-content-infos">
                        <p class="watch-video-channel-name">Name of the chanel</p>
                        <div class="watch-video-infos">
                            <p class="watch-video-number-views">200k views</p>
                            <p class="watch-video-date">2 weeks ago</p>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="index.php?name=Watch">
            <div class="watch-video-content">
                <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail-watch" />
                <div class="watch-next-content">
                    <strong class="watch-watch-vid-title">I'M THE TITLE OF THE VIDEO</strong>
                    <div class="watch-content-infos">
                        <p class="watch-video-channel-name">Name of the chanel</p>
                        <div class="watch-video-infos">
                            <p class="watch-video-number-views">200k views</p>
                            <p class="watch-video-date">2 weeks ago</p>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="index.php?name=Watch">
            <div class="watch-video-content">
                <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail-watch" />
                <div class="watch-next-content">
                    <strong class="watch-watch-vid-title">I'M THE TITLE OF THE VIDEO</strong>
                    <div class="watch-content-infos">
                        <p class="watch-video-channel-name">Name of the chanel</p>
                        <div class="watch-video-infos">
                            <p class="watch-video-number-views">200k views</p>
                            <p class="watch-video-date">2 weeks ago</p>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="index.php?name=Watch">
            <div class="watch-video-content">
                <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail-watch" />
                <div class="watch-next-content">
                    <strong class="watch-watch-vid-title">I'M THE TITLE OF THE VIDEO</strong>
                    <div class="watch-content-infos">
                        <p class="watch-video-channel-name">Name of the chanel</p>
                        <div class="watch-video-infos">
                            <p class="watch-video-number-views">200k views</p>
                            <p class="watch-video-date">2 weeks ago</p>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="index.php?name=Watch">
            <div class="watch-video-content">
                <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail-watch" />
                <div class="watch-next-content">
                    <strong class="watch-watch-vid-title">I'M THE TITLE OF THE VIDEO</strong>
                    <div class="watch-content-infos">
                        <p class="watch-video-channel-name">Name of the chanel</p>
                        <div class="watch-video-infos">
                            <p class="watch-video-number-views">200k views</p>
                            <p class="watch-video-date">2 weeks ago</p>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="index.php?name=Watch">
            <div class="watch-video-content">
                <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail-watch" />
                <div class="watch-next-content">
                    <strong class="watch-watch-vid-title">I'M THE TITLE OF THE VIDEO</strong>
                    <div class="watch-content-infos">
                        <p class="watch-video-channel-name">Name of the chanel</p>
                        <div class="watch-video-infos">
                            <p class="watch-video-number-views">200k views</p>
                            <p class="watch-video-date">2 weeks ago</p>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="index.php?name=Watch">
            <div class="watch-video-content">
                <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail-watch" />
                <div class="watch-next-content">
                    <strong class="watch-watch-vid-title">I'M THE TITLE OF THE VIDEO</strong>
                    <div class="watch-content-infos">
                        <p class="watch-video-channel-name">Name of the chanel</p>
                        <div class="watch-video-infos">
                            <p class="watch-video-number-views">200k views</p>
                            <p class="watch-video-date">2 weeks ago</p>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="index.php?name=Watch">
            <div class="watch-video-content">
                <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail-watch" />
                <div class="watch-next-content">
                    <strong class="watch-watch-vid-title">I'M THE TITLE OF THE VIDEO</strong>
                    <div class="watch-content-infos">
                        <p class="watch-video-channel-name">Name of the chanel</p>
                        <div class="watch-video-infos">
                            <p class="watch-video-number-views">200k views</p>
                            <p class="watch-video-date">2 weeks ago</p>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="index.php?name=Watch">
            <div class="watch-video-content">
                <img src="/front-end/assets/img/Home/thumbnail.png" alt="thumbnail" class="thumbnail-watch" />
                <div class="watch-next-content">
                    <strong class="watch-watch-vid-title">I'M THE TITLE OF THE VIDEO</strong>
                    <div class="watch-content-infos">
                        <p class="watch-video-channel-name">Name of the chanel</p>
                        <div class="watch-video-infos">
                            <p class="watch-video-number-views">200k views</p>
                            <p class="watch-video-date">2 weeks ago</p>
                        </div>
                    </div>
                </div>
            </div>
        </a>

    </div>
</div>


<?php $pageName = ob_get_clean() ?>