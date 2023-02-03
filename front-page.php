<!DOCTYPE html>

<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<style>
		@import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;900&display=swap');

		html,
		body {
			width: 100%;

			overflow-x: hidden;
		}

		.gallery {

			display: grid !important;

			/* grid-template-columns: repeat(4, 1fr); */

			grid-auto-columns: minmax(0, 1fr);
			grid-auto-flow: column;
		}

		.mobile-switch> :first-child {
			display: none;
		}

		.mobile-switch> :last-child {}

		@media (max-width: 50rem) {

			.mobile-switch> :first-child {
				display: initial;
			}

			.mobile-switch> :last-child {
				display: none;
			}

			.featured-article .article-image {
				max-width: 100%;
			}

			.featured-article {
				flex-direction: column-reverse !important;
			}

			.reverse-row {
				flex-direction: column-reverse;
			}

			.gallery {
				flex-direction: column;
			}

			.sache .article-type-0 {
				flex-direction: column-reverse;
			}

			.row {
				grid-auto-flow: row;
			}
		}

		:root {

			--white: white;

			--secondaryGray: #989898;

			--gray: #222;

			--primary: #FF6961;




			--constDarkBlue: #569cd6;
			--propertyLightBlue: #9adafb;
			--stringOrange: #ce9178;
			--importPurple: #c586c0;
			--classGreen: #4dc9b0;
			--numberGreen: #b4cda7;
			--commentGreen: #699855;
		}

		img {

			--shadowSize: 8px;
			--shadowColor: var(--propertyLightBlue);

			position: relative;
			left: 0;
			bottom: var(--shadowSize);

			background: var(--primary);

			box-shadow: var(--shadowSize) var(--shadowSize) 0px 0px var(--shadowColor);

			transition-duration: 0.1s;
		}

		*:hover>img {
			left: var(--shadowSize);
			bottom: 0;

			box-shadow: 0px 0px 0px 0px var(--shadowColor);
		}

		.wp-block-post:hover img {
			left: var(--shadowSize);
			bottom: 0;

			box-shadow: 0px 0px 0px 0px var(--shadowColor);
		}

		/* *:hover>img {
			box-shadow: 10px 10px 0px 0px var(--shadowColor);

			left: -2px;

			left: -6px;

			bottom: 10px;
		} */

		/* *:hover>p::after {
			display: block;
			content: attr(title);
			font-weight: bold;
			height: 1px;
			color: transparent;
			overflow: hidden;
			visibility: hidden;
		} */

		/* .article:hover .article-info {
			transform: scale(1.05);
		} */

		.article {
			transition-duration: 0.1s;
		}

		.article:hover {
			/* transform: scale(1.01); */
		}

		.article p {
			transition-duration: 0.1s;
		}

		.article-info {

			transition-duration: 0.1s;
		}

		.article:hover h1 {
			/* padding-right: 0.1rem; */
		}

		.article:hover p {
			/* font-weight: 700; */

			/* padding-left: 0.1rem; */

			/* -webkit-text-stroke-width: 1.5px;
			-webkit-text-stroke-color: black; */

			/* text-shadow: 0.3px 0.3px 0px black; */

			/* font-variation-settings: 'GRAD' 500; */
		}

		html,
		body {

			width: 100vw;
			padding: 0;
			margin: 0;

			background: var(--gray);

			font-family: "Source Sans Pro";
		}

		* {
			box-sizing: border-box;
		}

		header {
			display: flex;
			flex-direction: column;
			align-items: center;

			width: 100%;
			padding: 0 1rem;

			font-size: 1rem;
		}

		footer {
			display: flex;
			flex-direction: column;
			align-items: center;

			background: #222;

			min-height: 12rem;
		}

		header .branding {
			display: flex;
			align-items: center;
			justify-content: space-between;

			width: 100%;
			height: 8rem;
		}

		header nav {
			display: flex;

			width: 100%;
			height: 4rem;
		}

		header nav a:first-child {
			padding-left: 0;
		}

		header nav .routing-link {
			margin-left: auto;

			bottom: 0.5rem;

			text-decoration: none !important;

			padding: 0;
		}

		header nav .routing-link span {

			background: white;
			color: #222;

			height: fit-content;

			padding: 0.5rem 1rem;

			transition-duration: 0.1s;
		}

		header nav .routing-link:hover span {
			background: var(--primary);

			color: white;
		}

		header nav a {
			color: white;

			text-decoration: none;

			padding: 0 1rem;

			font-weight: bold;
		}

		header nav a:hover {
			text-decoration: underline;
		}

		header>* {
			max-width: 70rem;
		}

		main {
			display: flex;
			flex-direction: column;
			align-items: center;

			width: 100%;

			background: white;
		}

		.content-column {
			display: flex;
			flex-direction: column;

			width: 100%;
			max-width: 63rem;

			margin: 8rem 0;
		}

		.featured-article {
			display: flex;
			flex-direction: column;
		}

		.featured-article .article-tag {
			margin: 0;

			font-weight: bold;
			color: #222;
		}

		.featured-article .article-title {
			margin: 0;

			max-width: 66%;

			font-weight: bold;
			font-size: 40px;
			color: #222;

			margin-bottom: 1rem;
		}

		.featured-article .article-description {
			margin: 0;

			color: #222;
		}

		.featured-article .article-image {
			width: 42rem;
		}

		.row {
			display: flex;
			justify-content: space-between;
		}

		.heading {
			display: flex;
			align-items: center;

			width: 100%;
			height: 3rem;
			padding: 0 1rem;


			color: white;
			background: #222;
		}

		.heading h2 {
			font-size: 25px;

			margin: 0;
		}

		.block {
			display: flex;
			flex-direction: column;
		}

		.block.small {

			width: 20rem;
		}

		.block.medium {
			width: 42rem;
		}

		.block.large {
			width: 63rem;
		}

		.button {
			position: relative;
			display: flex;
			align-items: center;
			justify-content: center;

			gap: 1rem;

			border: none;
			font-weight: bold;
			cursor: pointer;
			transition-duration: 0.1s;

			text-decoration: none;
		}

		.button.primary {
			left: 0;
			bottom: 4px;

			background: var(--primary);

			box-shadow: 4px 4px 0px 0px #222;

			color: white;

			height: 5rem;
			font-size: 25px;

			width: 100%;

			text-decoration: underline;

			text-decoration-color: rgba(0, 0, 0, 0);
		}

		.button.primary:hover {
			left: 4px;
			bottom: 0;

			box-shadow: 0px 0px 0px 0px #222;

			filter: brightness(1.1);

			text-decoration-color: white;
		}


		.event {
			display: flex;

			height: 6rem;


		}

		.event:not(:last-child) {
			border-bottom: 1px solid rgba(0, 0, 0, 0.1);
		}

		.article:not(.featured-article):not(:last-child) {
			border-bottom: 1px solid rgba(0, 0, 0, 0.1);
		}

		.event-info {
			display: flex;
			flex-direction: column;
			justify-content: center;
		}

		.event-title {

			font-weight: bold;

			color: #222;

			margin: 0;

			padding-left: 6px;

			border-left: 6px solid #222;

			font-size: 20px;
		}

		.event-description {

			color: #222;

			margin: 0;
		}

		.event-date {
			font-weight: bold;

			color: #222;

			margin: 0;
		}

		.event-logo-container {
			display: flex;
			align-items: center;
			justify-content: center;

			width: 6rem;
		}

		.event-logo-container svg {

			fill: #222 !important;
		}

		.button.secondary {
			height: 2.5rem;

			border: 2px solid var(--secondaryGray);

			color: var(--secondaryGray);

			border-radius: 999rem;

			padding: 0 1.5rem;

			font-weight: bold;

			background: none;

			white-space: nowrap;
		}

		.wp-block-post-template {
			display: flex !important;
			flex-direction: column !important;
		}

		.wp-block-post-template,
		.wp-block-post {

			width: 100% !important;
			max-width: 100% !important;
			margin: 0 !important;
			padding: 0 !important;
			gap: 0 !important;
		}

		.button.secondary:hover {
			transform: scale(1.02);

			border-color: white;
			color: white;
		}

		.wp-block-post {
			display: flex;
			flex-direction: row-reverse;

			padding: 1rem;

			gap: 1rem;
		}

		.article-type-0 {
			display: flex;

			padding: 1rem;

			gap: 1rem;
		}

		.article-type-0 .article-info {

			display: flex;
			flex-direction: column;

			width: 20rem;
		}

		.article-tag a {
			color: #222 !important;
			text-decoration: none !important;
		}

		.article-type-0 .article-tag {
			margin: 0;

			font-weight: bold;
			color: #222;
		}

		main .wp-block-post .wp-block-post-title {
			margin: 0;

			font-weight: bold;
			font-size: 25px;
			color: #222;

			margin-bottom: 1rem;
			text-decoration: none !important;

			text-decoration-color: transparent !important;
		}

		main .wp-block-post .wp-block-post-title:hover {
			text-decoration: none !important;

			text-decoration-color: transparent !important;
		}

		.article-type-0 .article-title {
			margin: 0;

			font-weight: bold;
			font-size: 25px;
			color: #222;

			margin-bottom: 1rem;
		}

		.article-type-0 .article-description {
			margin: 0;

			color: #222;
		}

		.article-type-0 .article-image {

			object-fit: cover;

			width: 16rem;
			height: 10rem;
		}

		.article-type-1 {
			display: flex;
			flex-direction: column-reverse;
			justify-content: flex-end;

			padding: 1rem;

			gap: 1rem;
		}

		.article-type-1 .article-tag {
			margin: 0;

			font-weight: bold;
			color: #222;
		}

		.article-type-1 .article-title {
			margin: 0;

			/* margin-top: 0.5rem; */
			margin-bottom: 1rem;

			font-weight: bold;
			font-size: 25px;
			color: #222;
		}

		.article-type-1 .article-description {
			margin: 0;

			color: #222;
		}

		.article-type-1 .article-image {
			object-fit: cover;

			height: 10rem;
		}

		.calendar {
			display: grid;
			grid-template-columns: repeat(7, 1fr);

			gap: 2px;

			width: 42rem;
			height: fit-content;
		}

		.calendar .cell {

			position: relative;
			display: flex;
			align-items: center;
			justify-content: center;



			width: 100%;

			aspect-ratio: 1;

			background: #f0f0f0;

			font-size: 25px;

			font-weight: bold;

			color: #222;
		}

		.calendar .cell.today {
			font-size: 3rem;
		}

		.cell .corner {
			position: absolute;
			right: 0;
			top: 0;

			width: 100%;
			height: 100%;
		}

		.calendar .cell.event-cell {
			color: white;
		}

		.calendar .cell span {
			z-index: 99;
		}

		.slackticker {
			position: relative;
			display: flex;

			width: 100%;
			height: 5rem;
		}

		.slackticker .box {
			display: flex;
			align-items: center;
			justify-content: center;

			height: 100%;
			aspect-ratio: 1;

			background: #222;
		}

		.slackticker .ticker {
			overflow: hidden;
			display: flex;

			width: 100%;
			height: 100%;

			background: #f0f0f0;

			animation-name: TickerScroll;
			animation-duration: 5s;
		}

		@keyframes TickerScroll {

			0% {
				left: 0;
			}

			100% {
				left: -100%;
			}
		}

		.ticker-item {
			display: flex;
			flex-direction: column;
			justify-content: space-evenly;

			height: 100%;

			padding: 0 1.5rem;
		}

		.ticker-item .title {
			font-weight: bold;
			color: #222;
		}

		.ticker-item .description {
			position: relative;

			bottom: 10px;

			font-size: 12px;

			font-weight: bold;
			color: #222;
		}

		.ticker-item p {
			position: relative;
			bottom: 8px;

			margin: 0;

			white-space: nowrap;

			color: #222;
		}
	</style>
	<title>CODE Review</title>
</head>

<body>
	<header>
		<div class="branding">
			<a href="/" style="display:flex;align-items: center; width: 100%; height:100%">
				<svg width="159" height="56" viewBox="0 0 159 56" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path
						d="M44.1725 47.6194V27.1996H51.9006C53.3666 27.1996 54.7175 27.3986 55.9531 27.7965C57.1888 28.1735 58.1836 28.8437 58.9376 29.8071C59.6915 30.7705 60.0685 32.1004 60.0685 33.7968C60.0685 35.2628 59.7648 36.4775 59.1575 37.4409C58.5501 38.4043 57.7543 39.1583 56.7699 39.7028L61.1994 47.6194H55.1678L51.6493 40.7709H49.5759V47.6194H44.1725ZM49.5759 36.4985H51.5236C53.7017 36.4985 54.7908 35.5979 54.7908 33.7968C54.7908 32.9172 54.5081 32.3098 53.9426 31.9747C53.3981 31.6396 52.5917 31.4721 51.5236 31.4721H49.5759V36.4985ZM63.9603 47.6194V27.1996H77.1546V31.7234H69.3637V34.9277H76.0236V39.4515H69.3637V43.0956H77.4687V47.6194H63.9603ZM84.8721 47.6194L78.8404 27.1996H84.558L86.6942 36.1215C86.9874 37.2106 87.2387 38.2891 87.4481 39.3572C87.6785 40.4044 87.9298 41.483 88.2021 42.593H88.3278C88.621 41.483 88.8723 40.4044 89.0817 39.3572C89.3121 38.2891 89.5634 37.2106 89.8357 36.1215L91.9091 27.1996H97.4381L91.4064 47.6194H84.8721ZM99.3942 47.6194V27.1996H104.798V47.6194H99.3942ZM109.334 47.6194V27.1996H122.528V31.7234H114.737V34.9277H121.397V39.4515H114.737V43.0956H122.843V47.6194H109.334ZM128.424 47.6194L124.843 27.1996H130.372L131.502 36.1215C131.607 37.1896 131.722 38.2577 131.848 39.3258C131.974 40.3939 132.089 41.462 132.194 42.5302H132.319C132.508 41.462 132.696 40.3939 132.885 39.3258C133.073 38.2368 133.262 37.1687 133.45 36.1215L135.398 27.1996H139.922L141.869 36.1215C142.058 37.1477 142.246 38.2054 142.435 39.2944C142.623 40.3625 142.812 41.4411 143 42.5302H143.126C143.231 41.4411 143.346 40.3625 143.472 39.2944C143.597 38.2054 143.712 37.1477 143.817 36.1215L144.948 27.1996H150.1L146.707 47.6194H139.859L138.288 39.5143C138.142 38.7185 138.005 37.9122 137.88 37.0954C137.754 36.2786 137.639 35.4932 137.534 34.7392H137.409C137.304 35.4932 137.189 36.2786 137.063 37.0954C136.958 37.9122 136.822 38.7185 136.655 39.5143L135.147 47.6194H128.424Z"
						fill="white" />
					<path
						d="M50.7158 22.6481C49.4832 22.6481 48.3397 22.3807 47.2853 21.8461C46.2457 21.2966 45.4067 20.4724 44.7681 19.3735C44.1295 18.2745 43.8102 16.9008 43.8102 15.2524C43.8102 14.0346 43.9959 12.958 44.3671 12.0224C44.7532 11.0719 45.273 10.27 45.9265 9.61655C46.5947 8.96311 47.3447 8.47304 48.1763 8.14632C49.0228 7.80476 49.899 7.63397 50.8049 7.63397C51.7702 7.63397 52.6316 7.82703 53.3889 8.21315C54.1612 8.58442 54.7998 9.02994 55.3047 9.54972L53.2998 12.0001C52.9434 11.6882 52.5721 11.4358 52.186 11.2427C51.8148 11.0348 51.3841 10.9308 50.894 10.9308C50.3297 10.9308 49.8025 11.1016 49.3124 11.4432C48.8372 11.7699 48.4511 12.2451 48.1541 12.8689C47.8719 13.4926 47.7308 14.2425 47.7308 15.1187C47.7308 16.4702 48.013 17.5171 48.5773 18.2597C49.1565 18.9873 49.9139 19.3512 50.8495 19.3512C51.4138 19.3512 51.9113 19.225 52.342 18.9725C52.7875 18.72 53.1662 18.4304 53.478 18.1037L55.4829 20.5095C54.874 21.2224 54.1612 21.757 53.3444 22.1134C52.5276 22.4698 51.6514 22.6481 50.7158 22.6481ZM62.6981 22.6481C61.3615 22.6481 60.1883 22.351 59.1785 21.757C58.1686 21.1481 57.3815 20.2794 56.8172 19.1507C56.2529 18.0221 55.9707 16.6632 55.9707 15.0742C55.9707 13.4852 56.2529 12.1412 56.8172 11.0422C57.3815 9.92841 58.1686 9.08192 59.1785 8.50274C60.1883 7.92356 61.3615 7.63397 62.6981 7.63397C64.0346 7.63397 65.2078 7.92356 66.2177 8.50274C67.2275 9.08192 68.0146 9.92841 68.579 11.0422C69.1433 12.1412 69.4254 13.4852 69.4254 15.0742C69.4254 16.6632 69.1433 18.0221 68.579 19.1507C68.0146 20.2794 67.2275 21.1481 66.2177 21.757C65.2078 22.351 64.0346 22.6481 62.6981 22.6481ZM62.6981 19.3512C63.5743 19.3512 64.2574 18.9651 64.7475 18.1928C65.2524 17.4206 65.5049 16.381 65.5049 15.0742C65.5049 13.7525 65.2524 12.7352 64.7475 12.0224C64.2574 11.2947 63.5743 10.9308 62.6981 10.9308C61.8367 10.9308 61.1536 11.2947 60.6487 12.0224C60.1438 12.7352 59.8913 13.7525 59.8913 15.0742C59.8913 16.381 60.1438 17.4206 60.6487 18.1928C61.1536 18.9651 61.8367 19.3512 62.6981 19.3512ZM72.018 22.3807V7.90129H76.295C77.7652 7.90129 79.0572 8.14632 80.171 8.6364C81.2997 9.11162 82.1759 9.87643 82.7996 10.9308C83.4234 11.9852 83.7352 13.3664 83.7352 15.0742C83.7352 16.782 83.4234 18.178 82.7996 19.2621C82.1759 20.3313 81.322 21.1184 80.2379 21.6234C79.1538 22.1283 77.9137 22.3807 76.5178 22.3807H72.018ZM75.8495 19.3066H76.0722C76.7702 19.3066 77.4014 19.1878 77.9657 18.9502C78.53 18.7126 78.9756 18.2894 79.3023 17.6805C79.6438 17.0716 79.8146 16.2028 79.8146 15.0742C79.8146 13.9455 79.6438 13.0916 79.3023 12.5124C78.9756 11.9184 78.53 11.5174 77.9657 11.3095C77.4014 11.0868 76.7702 10.9754 76.0722 10.9754H75.8495V19.3066ZM86.3104 22.3807V7.90129H95.6663V11.109H90.1419V13.3812H94.8644V16.589H90.1419V19.173H95.8891V22.3807H86.3104Z"
						fill="white" />
					<path fill-rule="evenodd" clip-rule="evenodd"
						d="M39.6884 7.77478H0V47.4631H39.6884V7.77478ZM15.6939 40.0216L27.9517 28.0532L28.3378 27.6672L15.6939 15.2163L11.3505 19.4631L19.9407 27.5707L11.3505 35.7747L15.6939 40.0216Z"
						fill="white" />
				</svg>
			</a>

			<div class="mobile-switch">
				<button class="button secondary" style="width: 3rem; height: 3rem; padding: 0">
					<svg style="height: 1rem" viewBox="0 0 512 512" aria-hidden="true" role="img"
						xmlns="http://www.w3.org/2000/svg">
						<g transform="translate(256 256)" transform-origin="128 0">
							<g transform="translate(0,0) scale(1,1)">
								<path
									d="M352 96l64 0c17.7 0 32 14.3 32 32l0 256c0 17.7-14.3 32-32 32l-64 0c-17.7 0-32 14.3-32 32s14.3 32 32 32l64 0c53 0 96-43 96-96l0-256c0-53-43-96-96-96l-64 0c-17.7 0-32 14.3-32 32s14.3 32 32 32zm-9.4 182.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L242.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l210.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z"
									fill="currentColor" transform="translate(-256 -256)"></path>
							</g>
						</g>
					</svg>
				</button>
				<button class="button secondary">
					<svg style="height: 1rem" viewBox="0 0 488 512" aria-hidden="true" role="img"
						xmlns="http://www.w3.org/2000/svg">
						<g transform="translate(244 256)" transform-origin="122 0">
							<g transform="translate(0,0) scale(1,1)">
								<path
									d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"
									fill="currentColor" transform="translate(-244 -256)"></path>
							</g>
						</g>
					</svg>
					<span>Sign in with @test.berlin (desktop)</span>
				</button>
			</div>
		</div>
		<nav>
			<a href="#">Technology</a>
			<a href="#">Community</a>
			<a href="#">Events</a>

			<a href="#" class="routing-link">
				<span>About</span>
			</a>
		</nav>
	</header>
	<?php
	$args = array(
		'posts_per_page' => -1,
	);
	$all_posts = new WP_Query($args);

	$ding = array(
		'category_name' => 'Things you missed at CODE',
	);
	$tymac = new WP_Query($ding);

	$newest_article = $all_posts->get_posts()[0];

	$newest_articles_0 = array_slice($all_posts->get_posts(), 1, 3);

	$newest_articles_1 = array_slice($all_posts->get_posts(), 4, 3);

	$best_of_code_review_0 = array_slice($all_posts->get_posts(), 1, 4);

	$best_of_code_review_0 = $tymac->get_posts();
	?>
	<main>
		<div class="content-column">
			<div class="article featured-article">
				<span class="article-tag">
					<?php echo get_the_category($newest_article->ID)[0]->name; ?>
				</span>
				<h1 class="article-title">
					<?php echo get_the_title($newest_article->ID); ?>
				</h1>
				<div class="row reverse-row">
					<div style="display:flex; flex-direction: column; justify-content: space-between; width: 18rem">
						<p class="article-description">
							<?php echo get_the_excerpt($newest_article->ID); ?>
						</p>
						<a href="#" class="button primary">

							<svg style="height: 25px" fill="white" viewBox="0 0 103 103" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path
									d="M1.58234 100.436L1.60108 100.455C2.09805 100.956 2.68909 101.353 3.3402 101.624C3.99131 101.896 4.68965 102.036 5.39507 102.037C5.98864 102.036 6.57812 101.938 7.13998 101.747L37.7311 91.3696L96.4333 32.6674C100.022 29.0784 102.038 24.2109 102.038 19.1356C102.037 14.0603 100.021 9.19296 96.4321 5.60434C92.8432 2.01572 87.9756 -0.000222178 82.9003 1.83658e-08C77.825 0.000222214 72.9577 2.01659 69.3691 5.60553L10.6669 64.3078L0.290456 94.898C-0.0364007 95.8492 -0.088573 96.8733 0.139921 97.8529C0.368415 98.8324 0.868326 99.7278 1.58234 100.436ZM74.2438 10.4799C76.5428 8.19839 79.6522 6.9209 82.8911 6.92712C86.13 6.93334 89.2345 8.22277 91.5247 10.513C93.8149 12.8033 95.1043 15.9078 95.1104 19.1467C95.1165 22.3856 93.839 25.4949 91.5574 27.7939L83.838 35.5133L66.524 18.1993L74.2438 10.4799ZM16.6793 68.0442L61.6497 23.0736L78.9637 40.3876L33.9931 85.358L7.79055 94.2467L16.6793 68.0442Z" />
							</svg>

							<span>Write an Article</span></a>
					</div>
					<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($newest_article->ID)); ?>
					<img src="<?php echo $image[0]; ?>" class="article-image">
				</div>
			</div>
			<div class="slackticker" style="margin-top: 3rem; display: none">
				<div class="box">
					<svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path
							d="M8.44978 25.5426C8.44978 27.8674 6.57229 29.7464 4.2493 29.7464C1.92631 29.7464 0.0488281 27.8674 0.0488281 25.5426C0.0488281 23.2177 1.92631 21.3387 4.2493 21.3387H8.44978V25.5426ZM10.55 25.5426C10.55 23.2177 12.4275 21.3387 14.7505 21.3387C17.0735 21.3387 18.951 23.2177 18.951 25.5426V36.0521C18.951 38.3769 17.0735 40.2559 14.7505 40.2559C12.4275 40.2559 10.55 38.3769 10.55 36.0521V25.5426Z"
							fill="white" />
						<path
							d="M14.7506 8.66349C12.4276 8.66349 10.5501 6.78451 10.5501 4.45967C10.5501 2.13484 12.4276 0.255859 14.7506 0.255859C17.0736 0.255859 18.951 2.13484 18.951 4.45967V8.66349H14.7506ZM14.7506 10.7972C17.0736 10.7972 18.951 12.6762 18.951 15.0011C18.951 17.3259 17.0736 19.2049 14.7506 19.2049H4.21756C1.89457 19.2049 0.0170898 17.3259 0.0170898 15.0011C0.0170898 12.6762 1.89457 10.7972 4.21756 10.7972H14.7506Z"
							fill="white" />
						<path
							d="M31.5842 15.0011C31.5842 12.6762 33.4617 10.7972 35.7847 10.7972C38.1077 10.7972 39.9851 12.6762 39.9851 15.0011C39.9851 17.3259 38.1077 19.2049 35.7847 19.2049H31.5842V15.0011ZM29.484 15.0011C29.484 17.3259 27.6065 19.2049 25.2835 19.2049C22.9605 19.2049 21.083 17.3259 21.083 15.0011V4.45967C21.083 2.13484 22.9605 0.255859 25.2835 0.255859C27.6065 0.255859 29.484 2.13484 29.484 4.45967V15.0011Z"
							fill="white" />
						<path
							d="M25.2835 31.8483C27.6065 31.8483 29.484 33.7273 29.484 36.0521C29.484 38.3769 27.6065 40.2559 25.2835 40.2559C22.9605 40.2559 21.083 38.3769 21.083 36.0521V31.8483H25.2835ZM25.2835 29.7464C22.9605 29.7464 21.083 27.8674 21.083 25.5426C21.083 23.2177 22.9605 21.3387 25.2835 21.3387H35.8165C38.1395 21.3387 40.017 23.2177 40.017 25.5426C40.017 27.8674 38.1395 29.7464 35.8165 29.7464H25.2835Z"
							fill="white" />
					</svg>

				</div>
				<div class="ticker">
					<div class="ticker-item">
						<span class="title">Hanno Grimm</span>
						<span class="description">#00_announcements</span>
						<p>Lorem ipsum dolor sit amet</p>
					</div>
					<div class="ticker-item">
						<span class="title">Hanno Grimm</span>
						<span class="description">#00_announcements</span>
						<p>Lorem ipsum dolor sit amet</p>
					</div>
					<div class="ticker-item">
						<span class="title">Hanno Grimm</span>
						<span class="description">#00_announcements</span>
						<p>Lorem ipsum dolor sit amet</p>
					</div>
					<div class="ticker-item">
						<span class="title">Hanno Grimm</span>
						<span class="description">#00_announcements</span>
						<p>Lorem ipsum dolor sit amet</p>
					</div>
					<div class="ticker-item">
						<span class="title">Hanno Grimm</span>
						<span class="description">#00_announcements</span>
						<p>Lorem ipsum dolor sit amet</p>
					</div>
				</div>
			</div>

			<div class="row reverse-row" style="margin-top: 3rem">
				<div class="block medium sache">
					<div class="heading">
						<h2>New Articles</h2>
					</div>

					<?php foreach ($newest_articles_0 as $post): ?>
						<div class="article article-type-0">
							<div class="article-info">
								<span class="article-tag">
									<?php echo get_the_category($post->ID)[0]->name; ?>

									<!-- <?php the_author(); ?> -->
									<!-- <?php the_date(); ?> -->
								</span>
								<h1 class="article-title">
									<?php echo get_the_title($post->ID); ?>
								</h1>
								<p class="article-description">
									<?php echo get_the_excerpt($post->ID); ?>
								</p>
							</div>
							<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID)); ?>
							<img src="<?php echo $image[0]; ?>" class="article-image">
						</div>
					<?php endforeach; ?>

					<!--<?php if (have_posts()):
						while (have_posts()):
							the_post(); ?>
																																																																																																																																																																																		<div class="article article-type-0">
																																																																																																																																																																																			<div class="article-info">
																																																																																																																																																																																				<span class="article-tag">
																																																																																																																																																																																				<?php the_category(" "); ?>
																																																																																																																																																																																				</span>
																																																																																																																																																																																				<h1 class="article-title">
																																																																																																																																																																																					<?php the_title(); ?>
																																																																																																																																																																																				</h1>
																																																																																																																																																																																				<p class="article-description">
																																																																																																																																																																																				<?php the_excerpt(); ?>
																																																																																																																																																																																				</p>
																																																																																																																																																																																			</div>
																																																																																																																																																																																			<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id()); ?>
																																																																																																																																																																																			<img src="<?php echo $image[0]; ?>" class="article-image">
																																																																																																																																																																																		</div>
																																																																																											<?php endwhile; endif; ?>-->
				</div>

				<div class="block small">
					<div class="heading">
						<h2>Upcoming</h2>
					</div>
					<div style="display:flex; flex-direction:column">
						<div class="event">
							<div class="event-logo-container">
								<svg width="61" height="16" viewBox="0 0 61 16" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M26.0809 8.64147C26.2086 8.29727 26.321 7.94631 26.4672 7.61012C26.9178 6.57351 27.6259 5.7607 28.6185 5.20697C29.4195 4.75938 30.2862 4.57789 31.1969 4.64899C32.1188 4.72108 32.9507 5.02949 33.6233 5.69361C33.6483 5.71864 33.6801 5.73892 33.7522 5.79549C33.7522 5.611 33.7522 5.46681 33.7522 5.32262C33.7522 4.93286 33.7522 4.93236 34.1375 4.93211C34.9503 4.93211 35.7634 4.93411 36.5764 4.92885C36.7216 4.92885 36.7767 4.96766 36.7749 5.12236C36.7667 5.66732 36.7717 6.21254 36.7717 6.80957C36.8195 6.74999 36.843 6.73047 36.8543 6.70518C37.0566 6.2586 37.3244 5.85907 37.7127 5.55367C38.149 5.20947 38.6414 4.97942 39.1778 4.82772C39.9281 4.61617 40.7166 4.57967 41.4831 4.72108C42.4899 4.90182 43.3621 5.36042 44.035 6.15496C44.0933 6.2238 44.1942 6.30291 44.2618 6.36399C44.277 6.26458 44.284 6.16415 44.2833 6.06359C44.2868 4.42176 44.2868 2.77987 44.2833 1.13788C44.2833 0.965158 44.3334 0.915593 44.5071 0.917346C45.3454 0.926525 46.1838 0.926525 47.0221 0.917346C47.2081 0.915343 47.2705 0.964658 47.2697 1.15791C47.2644 2.63485 47.2697 4.11178 47.2725 5.58872C47.2725 5.6493 47.281 5.70988 47.29 5.82828C47.4151 5.70938 47.5043 5.62677 47.5904 5.54216C48.0247 5.1201 48.5581 4.89131 49.1377 4.75888C49.7154 4.62616 50.3142 4.61084 50.898 4.71382C51.4051 4.80054 51.886 5.00022 52.3056 5.29809C52.9549 5.75794 53.3945 6.3745 53.6406 7.12098C53.7512 7.45692 53.8458 7.81414 53.8571 8.1646C53.8984 9.46055 53.9072 10.758 53.9184 12.055C53.9264 12.9519 53.9184 13.8491 53.9214 14.7462C53.9214 14.8874 53.8671 14.941 53.7264 14.9402C52.8543 14.9371 51.9821 14.9371 51.1097 14.9402C50.9653 14.9402 50.9182 14.8902 50.9185 14.7472C50.9215 12.8981 50.9265 11.0486 50.916 9.19946C50.9132 8.67902 50.7786 8.19063 50.3728 7.82115C50.0223 7.50223 49.5968 7.40811 49.1359 7.40836C48.5536 7.40836 48.0485 7.56982 47.6807 8.04694C47.4156 8.39089 47.2942 8.79593 47.2902 9.21748C47.273 11.0449 47.2727 12.8723 47.2747 14.6997C47.2747 14.8934 47.2144 14.9437 47.0269 14.9417C46.1758 14.9325 45.3247 14.9352 44.4735 14.9395C44.3281 14.9395 44.2783 14.8839 44.2803 14.7442C44.285 14.3772 44.2818 14.01 44.2818 13.5957C44.2157 13.6408 44.1759 13.6555 44.1549 13.6843C43.8728 14.0762 43.5055 14.3991 43.0807 14.6288C42.6269 14.8724 42.1477 15.0544 41.6343 15.115C41.1619 15.17 40.6831 15.2421 40.2115 15.2209C39.085 15.1708 38.0196 14.9027 37.1434 14.1289C37.0305 14.0288 36.9229 13.9237 36.7875 13.797C36.7792 13.8678 36.7704 13.9094 36.7704 13.9509C36.7692 14.2218 36.7669 14.4926 36.7704 14.7635C36.7722 14.8852 36.7256 14.9387 36.6 14.9387C35.7108 14.9362 34.8216 14.9362 33.9325 14.9387C33.8073 14.9387 33.7572 14.8887 33.7572 14.7655C33.76 14.5437 33.7572 14.3217 33.7572 14.0538C33.6611 14.1259 33.5975 14.1625 33.5475 14.2128C33.0901 14.6734 32.5284 14.9563 31.9091 15.1014C31.0134 15.3115 30.1192 15.2767 29.2493 14.949C28.445 14.6448 27.7749 14.1607 27.2242 13.4938C26.7736 12.9474 26.4732 12.3296 26.2331 11.6734C26.1763 11.517 26.133 11.356 26.0579 11.1958C26.0479 11.3092 26.0296 11.4224 26.0293 11.5358C26.0271 12.6019 26.0256 13.6681 26.0293 14.7345C26.0293 14.8884 25.981 14.9415 25.8243 14.9405C24.9607 14.9345 24.0969 14.9345 23.2329 14.9405C23.0892 14.9405 23.0377 14.8889 23.0384 14.7472C23.0412 14.1677 23.0384 13.588 23.0332 13.0082C23.0332 12.9679 23.0061 12.9281 22.9919 12.888C22.9596 12.9131 22.9168 12.9334 22.897 12.9666C22.2962 14.003 21.37 14.6035 20.2483 14.9392C19.4556 15.1792 18.6265 15.2761 17.7998 15.2256C16.6338 15.1528 15.5161 14.8934 14.5238 14.2303C13.6511 13.647 13.0338 12.861 12.635 11.8965C12.5945 11.7979 12.6223 11.7355 12.7169 11.681C13.5405 11.2073 14.3625 10.731 15.1831 10.2521C15.2853 10.1925 15.3468 10.2035 15.4022 10.3154C15.6159 10.7482 15.8845 11.1443 16.2578 11.4552C16.6012 11.7418 17.004 11.918 17.4396 12.0169C17.9899 12.1412 18.5603 12.1473 19.113 12.0347C19.5887 11.939 20.0322 11.7395 20.1747 11.1926C20.2748 10.8038 20.0996 10.3487 19.7789 10.1224C19.2532 9.75043 18.6497 9.57795 18.0474 9.39496C17.6469 9.2733 17.2431 9.1604 16.8491 9.01947C16.3527 8.84274 15.8477 8.67827 15.3776 8.44371C14.4724 7.99162 13.7522 7.33676 13.3965 6.35698C13.1712 5.73316 13.1152 5.08456 13.184 4.42569C13.2921 3.38934 13.7417 2.5252 14.5157 1.83129C14.9814 1.41375 15.5243 1.12837 16.1133 0.921601C16.7312 0.704817 17.3675 0.628467 18.0173 0.63898C19.272 0.659007 20.4162 1.00997 21.412 1.79049C22.0081 2.25735 22.4732 2.83661 22.8372 3.49823C22.8469 3.52131 22.8602 3.54274 22.8765 3.56181C22.9133 3.59611 22.9546 3.62565 22.9939 3.65719C23.0086 3.60887 23.0359 3.56081 23.0362 3.5125C23.0399 2.50968 23.0429 1.50662 23.0389 0.503804C23.0389 0.345847 23.087 0.286268 23.2505 0.288772C24.1216 0.302039 24.9925 0.308297 25.8636 0.312052C26.0138 0.312052 26.0354 0.392157 26.0354 0.514568C26.0354 3.1128 26.0359 5.71106 26.0371 8.30929V8.63672L26.0809 8.64147ZM33.7537 9.9214C33.7858 9.50338 33.7037 9.08448 33.5159 8.70956C33.3472 8.3554 33.0818 8.05606 32.7504 7.84593C32.4052 7.62614 32.037 7.48996 31.6324 7.4772C31.3571 7.46844 31.074 7.47244 30.8079 7.53177C30.5247 7.59468 30.2524 7.69929 30.0001 7.84218C29.8068 7.95282 29.6554 8.14257 29.4966 8.30678C29.1978 8.61819 29.0598 9.01171 29.003 9.42525C28.9657 9.69736 28.9935 9.97848 28.9947 10.2553C28.997 10.766 29.195 11.2051 29.5084 11.5938C29.785 11.935 30.1638 12.1785 30.5888 12.2885C31.0872 12.4244 31.6132 12.423 32.1111 12.2845C32.8085 12.094 33.2821 11.6559 33.5585 11.0218C33.7605 10.6408 33.7605 10.3177 33.7537 9.9214ZM23.0429 6.41931H23.0409C23.0409 5.6155 23.0409 4.81145 23.0387 4.00765C23.0382 3.95087 23.0182 3.896 22.9821 3.85219C22.9666 3.83517 22.8875 3.86196 22.8467 3.88549C22.4852 4.09551 22.1257 4.30879 21.7658 4.52157C21.3339 4.77691 20.9009 5.03024 20.4716 5.28958C20.3559 5.35967 20.2801 5.34941 20.218 5.22574C20.1654 5.12136 20.1073 5.01947 20.0458 4.92009C19.7834 4.49754 19.4492 4.14758 18.9789 3.96409C18.2817 3.69198 17.577 3.62489 16.8859 3.98612C16.6375 4.11554 16.4465 4.32206 16.3997 4.59442C16.3046 5.14839 16.446 5.45154 16.9444 5.77421C17.5552 6.16948 18.2579 6.34997 18.9365 6.58653C19.639 6.8306 20.3524 7.04939 21.036 7.33751C21.794 7.65793 22.4411 8.14432 22.8867 8.86026C22.9118 8.90056 22.9571 8.92835 22.9931 8.96214C23.0096 8.90957 23.0407 8.85726 23.0409 8.80469C23.0439 8.01015 23.0429 7.21485 23.0429 6.41931ZM36.7907 12.4753C36.8208 12.4699 36.85 12.4611 36.8781 12.449C37.4726 12.1085 38.0669 11.7676 38.6609 11.4261C38.7415 11.3798 38.7933 11.3961 38.8361 11.4932C38.8947 11.6328 38.9688 11.7654 39.0574 11.8882C39.5553 12.5539 40.259 12.5937 40.9835 12.4973C41.0811 12.4843 41.1787 12.4405 41.2676 12.3939C41.6203 12.2087 41.7097 11.7763 41.3387 11.5758C41.1059 11.4518 40.8631 11.3477 40.6127 11.2647C39.9183 11.0304 39.2109 10.8351 38.5242 10.5773C37.9735 10.3697 37.4876 10.0391 37.1359 9.54891C37.0205 9.3882 36.9244 9.21372 36.7922 9.00195L36.7907 12.4753ZM44.2838 8.61594C44.2838 8.48477 44.2838 8.3536 44.2838 8.22242C44.2828 7.85862 44.2815 7.49489 44.2798 7.13124C44.2798 6.92022 44.26 6.9087 44.0715 7.00608C44.0009 7.04263 43.9311 7.08118 43.861 7.11873C43.2707 7.43764 42.6792 7.75456 42.0912 8.07798C41.966 8.14632 41.8909 8.13556 41.8131 8.0109C41.6406 7.73253 41.4255 7.49497 41.1039 7.38508C40.7033 7.2489 40.3013 7.21285 39.9273 7.46017C39.6647 7.6329 39.654 8.00063 39.9126 8.17136C40.0793 8.28265 40.261 8.36997 40.452 8.4307C41.0868 8.62821 41.7327 8.79142 42.3645 8.99819C43.0537 9.22349 43.6687 9.57645 44.1248 10.163C44.1534 10.1995 44.2024 10.2205 44.242 10.2486C44.256 10.1985 44.2815 10.1497 44.2818 10.0999C44.285 9.60549 44.2838 9.11084 44.2838 8.61594Z"
										fill="#222222" />
									<path
										d="M59.9225 14.1477H55.5686C55.5148 14.1477 55.4712 14.1913 55.4712 14.2451V14.8474C55.4712 14.9011 55.5148 14.9448 55.5686 14.9448H59.9225C59.9764 14.9448 60.0199 14.9011 60.0199 14.8474V14.2451C60.0199 14.1913 59.9764 14.1477 59.9225 14.1477Z"
										fill="#222222" />
									<path
										d="M7.64334 0.755859H4.82314C4.78454 0.755859 4.74689 0.767923 4.71547 0.790365C4.68405 0.812804 4.66042 0.844501 4.64791 0.881024L0.029848 14.5389C0.0203931 14.5668 0.0177087 14.5965 0.0220167 14.6257C0.0263246 14.6548 0.0375013 14.6825 0.0546228 14.7064C0.0717443 14.7304 0.0943191 14.7499 0.120481 14.7634C0.146643 14.7769 0.175641 14.7839 0.205078 14.784H3.02578C3.06438 14.784 3.102 14.7719 3.13342 14.7495C3.16484 14.727 3.18844 14.6953 3.20101 14.6588L7.81907 1.00068C7.82848 0.972776 7.83113 0.943032 7.82678 0.913907C7.82242 0.884781 7.81118 0.857112 7.79401 0.833188C7.77684 0.809262 7.75421 0.789771 7.72802 0.776324C7.70181 0.762879 7.67277 0.755862 7.64334 0.755859Z"
										fill="#222222" />
									<path
										d="M12.0572 0.755859H9.23696C9.19836 0.755859 9.16071 0.767923 9.12929 0.790365C9.09787 0.812804 9.07424 0.844501 9.06173 0.881024L4.44367 14.5389C4.43421 14.5668 4.43153 14.5965 4.43583 14.6257C4.44014 14.6548 4.45133 14.6825 4.46845 14.7064C4.48557 14.7304 4.50813 14.7499 4.53431 14.7634C4.56047 14.7769 4.58946 14.7839 4.6189 14.784H7.4396C7.4782 14.784 7.51582 14.7719 7.54724 14.7495C7.57866 14.727 7.60229 14.6953 7.61483 14.6588L12.2329 1.00068C12.2423 0.972776 12.245 0.943032 12.2406 0.913907C12.2362 0.884781 12.225 0.857112 12.2078 0.833188C12.1907 0.809262 12.168 0.789771 12.1418 0.776324C12.1156 0.762879 12.0866 0.755862 12.0572 0.755859Z"
										fill="#222222" />
								</svg>

							</div>
							<div class="event-info">
								<h3 class="event-title">Slash Hackathon</h3>
								<span class="event-description">Community Event</span>
								<span class="event-date">23.8. - 26.8.</span>
							</div>
						</div>
						<div class="event">
							<div class="event-logo-container">
								<svg style="height: 2rem" width="103" height="93" viewBox="0 0 103 93" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M76.5282 69.3914L51.0188 83.7404L25.5093 69.3914V54.231L18.2209 50.1819V73.6537L51.0188 92.1025L83.8166 73.6537V50.1819L76.5282 54.231V69.3914Z" />
									<path
										d="M51.0188 0L0 26.4542V32.7709L51.0188 61.1139L94.7492 36.8201V56.9459H102.038V26.4542L51.0188 0ZM87.4608 32.5316L80.1724 36.5805L51.0188 52.7778L21.8652 36.5805L14.5768 32.5316L9.52526 29.7251L51.0188 8.20993L92.5124 29.7251L87.4608 32.5316Z" />
								</svg>

							</div>
							<div class="event-info">
								<h3 class="event-title">Graduation Ceremony</h3>
								<span class="event-description">Community Event</span>
								<span class="event-date">23.8. - 26.8.</span>
							</div>
						</div>
						<div class="event">
							<div class="event-logo-container">
								<svg style="height: 2rem" width="103" height="94" viewBox="0 0 103 94" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M96.9357 11.9044H78.2288V0H71.4263V11.9044H30.6113V0H23.8088V11.9044H5.10188C3.74926 11.906 2.45249 12.444 1.49605 13.4004C0.539599 14.3569 0.0015753 15.6537 0 17.0063V88.4326C0.0015753 89.7852 0.539599 91.082 1.49605 92.0384C2.45249 92.9949 3.74926 93.5329 5.10188 93.5345H96.9357C98.2884 93.5329 99.5851 92.9949 100.542 92.0384C101.498 91.082 102.036 89.7852 102.038 88.4326V17.0063C102.036 15.6537 101.498 14.3569 100.542 13.4004C99.5851 12.444 98.2884 11.906 96.9357 11.9044ZM95.2351 86.732H6.80251V18.7069H23.8088V27.21H30.6113V18.7069H71.4263V27.21H78.2288V18.7069H95.2351V86.732Z" />
									<path d="M27.21 39.1145H20.4075V45.917H27.21V39.1145Z" />
									<path d="M45.917 39.1145H39.1145V45.917H45.917V39.1145Z" />
									<path d="M62.9231 39.1145H56.1206V45.917H62.9231V39.1145Z" />
									<path d="M81.6301 39.1145H74.8276V45.917H81.6301V39.1145Z" />
									<path d="M27.21 54.4202H20.4075V61.2227H27.21V54.4202Z" />
									<path d="M45.917 54.4202H39.1145V61.2227H45.917V54.4202Z" />
									<path d="M62.9231 54.4202H56.1206V61.2227H62.9231V54.4202Z" />
									<path d="M81.6301 54.4202H74.8276V61.2227H81.6301V54.4202Z" />
									<path d="M27.21 69.7256H20.4075V76.5281H27.21V69.7256Z" />
									<path d="M45.917 69.7256H39.1145V76.5281H45.917V69.7256Z" />
									<path d="M62.9231 69.7256H56.1206V76.5281H62.9231V69.7256Z" />
									<path d="M81.6301 69.7256H74.8276V76.5281H81.6301V69.7256Z" />
								</svg>

							</div>
							<div class="event-info">
								<h3 class="event-title">Module Deadlines</h3>
								<span class="event-description">Academic Deadline</span>
								<span class="event-date">23.8. - 26.8.</span>
							</div>
						</div>
						<div class="event">
							<div class="event-logo-container">
								<svg style="height: 2rem" width="99" height="98" viewBox="0 0 99 98" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M47.2473 97.9209H0.913574V51.5871H47.2473V97.9209ZM98.4712 97.9209H52.1374V51.5871H98.4712V97.9209ZM47.2473 46.6971H0.913574V0.363281H47.2473V46.6971ZM98.4712 46.6971H52.1374V0.363281H98.4712V46.6971Z" />
								</svg>


							</div>
							<div class="event-info">
								<h3 class="event-title">Microsoft Event</h3>
								<span class="event-description">Community Event</span>
								<span class="event-date">23.8. - 26.8.</span>
							</div>
						</div>
						<div class="event">
							<div class="event-logo-container">
								<svg width="61" height="16" viewBox="0 0 61 16" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M26.0809 8.64147C26.2086 8.29727 26.321 7.94631 26.4672 7.61012C26.9178 6.57351 27.6259 5.7607 28.6185 5.20697C29.4195 4.75938 30.2862 4.57789 31.1969 4.64899C32.1188 4.72108 32.9507 5.02949 33.6233 5.69361C33.6483 5.71864 33.6801 5.73892 33.7522 5.79549C33.7522 5.611 33.7522 5.46681 33.7522 5.32262C33.7522 4.93286 33.7522 4.93236 34.1375 4.93211C34.9503 4.93211 35.7634 4.93411 36.5764 4.92885C36.7216 4.92885 36.7767 4.96766 36.7749 5.12236C36.7667 5.66732 36.7717 6.21254 36.7717 6.80957C36.8195 6.74999 36.843 6.73047 36.8543 6.70518C37.0566 6.2586 37.3244 5.85907 37.7127 5.55367C38.149 5.20947 38.6414 4.97942 39.1778 4.82772C39.9281 4.61617 40.7166 4.57967 41.4831 4.72108C42.4899 4.90182 43.3621 5.36042 44.035 6.15496C44.0933 6.2238 44.1942 6.30291 44.2618 6.36399C44.277 6.26458 44.284 6.16415 44.2833 6.06359C44.2868 4.42176 44.2868 2.77987 44.2833 1.13788C44.2833 0.965158 44.3334 0.915593 44.5071 0.917346C45.3454 0.926525 46.1838 0.926525 47.0221 0.917346C47.2081 0.915343 47.2705 0.964658 47.2697 1.15791C47.2644 2.63485 47.2697 4.11178 47.2725 5.58872C47.2725 5.6493 47.281 5.70988 47.29 5.82828C47.4151 5.70938 47.5043 5.62677 47.5904 5.54216C48.0247 5.1201 48.5581 4.89131 49.1377 4.75888C49.7154 4.62616 50.3142 4.61084 50.898 4.71382C51.4051 4.80054 51.886 5.00022 52.3056 5.29809C52.9549 5.75794 53.3945 6.3745 53.6406 7.12098C53.7512 7.45692 53.8458 7.81414 53.8571 8.1646C53.8984 9.46055 53.9072 10.758 53.9184 12.055C53.9264 12.9519 53.9184 13.8491 53.9214 14.7462C53.9214 14.8874 53.8671 14.941 53.7264 14.9402C52.8543 14.9371 51.9821 14.9371 51.1097 14.9402C50.9653 14.9402 50.9182 14.8902 50.9185 14.7472C50.9215 12.8981 50.9265 11.0486 50.916 9.19946C50.9132 8.67902 50.7786 8.19063 50.3728 7.82115C50.0223 7.50223 49.5968 7.40811 49.1359 7.40836C48.5536 7.40836 48.0485 7.56982 47.6807 8.04694C47.4156 8.39089 47.2942 8.79593 47.2902 9.21748C47.273 11.0449 47.2727 12.8723 47.2747 14.6997C47.2747 14.8934 47.2144 14.9437 47.0269 14.9417C46.1758 14.9325 45.3247 14.9352 44.4735 14.9395C44.3281 14.9395 44.2783 14.8839 44.2803 14.7442C44.285 14.3772 44.2818 14.01 44.2818 13.5957C44.2157 13.6408 44.1759 13.6555 44.1549 13.6843C43.8728 14.0762 43.5055 14.3991 43.0807 14.6288C42.6269 14.8724 42.1477 15.0544 41.6343 15.115C41.1619 15.17 40.6831 15.2421 40.2115 15.2209C39.085 15.1708 38.0196 14.9027 37.1434 14.1289C37.0305 14.0288 36.9229 13.9237 36.7875 13.797C36.7792 13.8678 36.7704 13.9094 36.7704 13.9509C36.7692 14.2218 36.7669 14.4926 36.7704 14.7635C36.7722 14.8852 36.7256 14.9387 36.6 14.9387C35.7108 14.9362 34.8216 14.9362 33.9325 14.9387C33.8073 14.9387 33.7572 14.8887 33.7572 14.7655C33.76 14.5437 33.7572 14.3217 33.7572 14.0538C33.6611 14.1259 33.5975 14.1625 33.5475 14.2128C33.0901 14.6734 32.5284 14.9563 31.9091 15.1014C31.0134 15.3115 30.1192 15.2767 29.2493 14.949C28.445 14.6448 27.7749 14.1607 27.2242 13.4938C26.7736 12.9474 26.4732 12.3296 26.2331 11.6734C26.1763 11.517 26.133 11.356 26.0579 11.1958C26.0479 11.3092 26.0296 11.4224 26.0293 11.5358C26.0271 12.6019 26.0256 13.6681 26.0293 14.7345C26.0293 14.8884 25.981 14.9415 25.8243 14.9405C24.9607 14.9345 24.0969 14.9345 23.2329 14.9405C23.0892 14.9405 23.0377 14.8889 23.0384 14.7472C23.0412 14.1677 23.0384 13.588 23.0332 13.0082C23.0332 12.9679 23.0061 12.9281 22.9919 12.888C22.9596 12.9131 22.9168 12.9334 22.897 12.9666C22.2962 14.003 21.37 14.6035 20.2483 14.9392C19.4556 15.1792 18.6265 15.2761 17.7998 15.2256C16.6338 15.1528 15.5161 14.8934 14.5238 14.2303C13.6511 13.647 13.0338 12.861 12.635 11.8965C12.5945 11.7979 12.6223 11.7355 12.7169 11.681C13.5405 11.2073 14.3625 10.731 15.1831 10.2521C15.2853 10.1925 15.3468 10.2035 15.4022 10.3154C15.6159 10.7482 15.8845 11.1443 16.2578 11.4552C16.6012 11.7418 17.004 11.918 17.4396 12.0169C17.9899 12.1412 18.5603 12.1473 19.113 12.0347C19.5887 11.939 20.0322 11.7395 20.1747 11.1926C20.2748 10.8038 20.0996 10.3487 19.7789 10.1224C19.2532 9.75043 18.6497 9.57795 18.0474 9.39496C17.6469 9.2733 17.2431 9.1604 16.8491 9.01947C16.3527 8.84274 15.8477 8.67827 15.3776 8.44371C14.4724 7.99162 13.7522 7.33676 13.3965 6.35698C13.1712 5.73316 13.1152 5.08456 13.184 4.42569C13.2921 3.38934 13.7417 2.5252 14.5157 1.83129C14.9814 1.41375 15.5243 1.12837 16.1133 0.921601C16.7312 0.704817 17.3675 0.628467 18.0173 0.63898C19.272 0.659007 20.4162 1.00997 21.412 1.79049C22.0081 2.25735 22.4732 2.83661 22.8372 3.49823C22.8469 3.52131 22.8602 3.54274 22.8765 3.56181C22.9133 3.59611 22.9546 3.62565 22.9939 3.65719C23.0086 3.60887 23.0359 3.56081 23.0362 3.5125C23.0399 2.50968 23.0429 1.50662 23.0389 0.503804C23.0389 0.345847 23.087 0.286268 23.2505 0.288772C24.1216 0.302039 24.9925 0.308297 25.8636 0.312052C26.0138 0.312052 26.0354 0.392157 26.0354 0.514568C26.0354 3.1128 26.0359 5.71106 26.0371 8.30929V8.63672L26.0809 8.64147ZM33.7537 9.9214C33.7858 9.50338 33.7037 9.08448 33.5159 8.70956C33.3472 8.3554 33.0818 8.05606 32.7504 7.84593C32.4052 7.62614 32.037 7.48996 31.6324 7.4772C31.3571 7.46844 31.074 7.47244 30.8079 7.53177C30.5247 7.59468 30.2524 7.69929 30.0001 7.84218C29.8068 7.95282 29.6554 8.14257 29.4966 8.30678C29.1978 8.61819 29.0598 9.01171 29.003 9.42525C28.9657 9.69736 28.9935 9.97848 28.9947 10.2553C28.997 10.766 29.195 11.2051 29.5084 11.5938C29.785 11.935 30.1638 12.1785 30.5888 12.2885C31.0872 12.4244 31.6132 12.423 32.1111 12.2845C32.8085 12.094 33.2821 11.6559 33.5585 11.0218C33.7605 10.6408 33.7605 10.3177 33.7537 9.9214ZM23.0429 6.41931H23.0409C23.0409 5.6155 23.0409 4.81145 23.0387 4.00765C23.0382 3.95087 23.0182 3.896 22.9821 3.85219C22.9666 3.83517 22.8875 3.86196 22.8467 3.88549C22.4852 4.09551 22.1257 4.30879 21.7658 4.52157C21.3339 4.77691 20.9009 5.03024 20.4716 5.28958C20.3559 5.35967 20.2801 5.34941 20.218 5.22574C20.1654 5.12136 20.1073 5.01947 20.0458 4.92009C19.7834 4.49754 19.4492 4.14758 18.9789 3.96409C18.2817 3.69198 17.577 3.62489 16.8859 3.98612C16.6375 4.11554 16.4465 4.32206 16.3997 4.59442C16.3046 5.14839 16.446 5.45154 16.9444 5.77421C17.5552 6.16948 18.2579 6.34997 18.9365 6.58653C19.639 6.8306 20.3524 7.04939 21.036 7.33751C21.794 7.65793 22.4411 8.14432 22.8867 8.86026C22.9118 8.90056 22.9571 8.92835 22.9931 8.96214C23.0096 8.90957 23.0407 8.85726 23.0409 8.80469C23.0439 8.01015 23.0429 7.21485 23.0429 6.41931ZM36.7907 12.4753C36.8208 12.4699 36.85 12.4611 36.8781 12.449C37.4726 12.1085 38.0669 11.7676 38.6609 11.4261C38.7415 11.3798 38.7933 11.3961 38.8361 11.4932C38.8947 11.6328 38.9688 11.7654 39.0574 11.8882C39.5553 12.5539 40.259 12.5937 40.9835 12.4973C41.0811 12.4843 41.1787 12.4405 41.2676 12.3939C41.6203 12.2087 41.7097 11.7763 41.3387 11.5758C41.1059 11.4518 40.8631 11.3477 40.6127 11.2647C39.9183 11.0304 39.2109 10.8351 38.5242 10.5773C37.9735 10.3697 37.4876 10.0391 37.1359 9.54891C37.0205 9.3882 36.9244 9.21372 36.7922 9.00195L36.7907 12.4753ZM44.2838 8.61594C44.2838 8.48477 44.2838 8.3536 44.2838 8.22242C44.2828 7.85862 44.2815 7.49489 44.2798 7.13124C44.2798 6.92022 44.26 6.9087 44.0715 7.00608C44.0009 7.04263 43.9311 7.08118 43.861 7.11873C43.2707 7.43764 42.6792 7.75456 42.0912 8.07798C41.966 8.14632 41.8909 8.13556 41.8131 8.0109C41.6406 7.73253 41.4255 7.49497 41.1039 7.38508C40.7033 7.2489 40.3013 7.21285 39.9273 7.46017C39.6647 7.6329 39.654 8.00063 39.9126 8.17136C40.0793 8.28265 40.261 8.36997 40.452 8.4307C41.0868 8.62821 41.7327 8.79142 42.3645 8.99819C43.0537 9.22349 43.6687 9.57645 44.1248 10.163C44.1534 10.1995 44.2024 10.2205 44.242 10.2486C44.256 10.1985 44.2815 10.1497 44.2818 10.0999C44.285 9.60549 44.2838 9.11084 44.2838 8.61594Z"
										fill="#222222" />
									<path
										d="M59.9225 14.1477H55.5686C55.5148 14.1477 55.4712 14.1913 55.4712 14.2451V14.8474C55.4712 14.9011 55.5148 14.9448 55.5686 14.9448H59.9225C59.9764 14.9448 60.0199 14.9011 60.0199 14.8474V14.2451C60.0199 14.1913 59.9764 14.1477 59.9225 14.1477Z"
										fill="#222222" />
									<path
										d="M7.64334 0.755859H4.82314C4.78454 0.755859 4.74689 0.767923 4.71547 0.790365C4.68405 0.812804 4.66042 0.844501 4.64791 0.881024L0.029848 14.5389C0.0203931 14.5668 0.0177087 14.5965 0.0220167 14.6257C0.0263246 14.6548 0.0375013 14.6825 0.0546228 14.7064C0.0717443 14.7304 0.0943191 14.7499 0.120481 14.7634C0.146643 14.7769 0.175641 14.7839 0.205078 14.784H3.02578C3.06438 14.784 3.102 14.7719 3.13342 14.7495C3.16484 14.727 3.18844 14.6953 3.20101 14.6588L7.81907 1.00068C7.82848 0.972776 7.83113 0.943032 7.82678 0.913907C7.82242 0.884781 7.81118 0.857112 7.79401 0.833188C7.77684 0.809262 7.75421 0.789771 7.72802 0.776324C7.70181 0.762879 7.67277 0.755862 7.64334 0.755859Z"
										fill="#222222" />
									<path
										d="M12.0572 0.755859H9.23696C9.19836 0.755859 9.16071 0.767923 9.12929 0.790365C9.09787 0.812804 9.07424 0.844501 9.06173 0.881024L4.44367 14.5389C4.43421 14.5668 4.43153 14.5965 4.43583 14.6257C4.44014 14.6548 4.45133 14.6825 4.46845 14.7064C4.48557 14.7304 4.50813 14.7499 4.53431 14.7634C4.56047 14.7769 4.58946 14.7839 4.6189 14.784H7.4396C7.4782 14.784 7.51582 14.7719 7.54724 14.7495C7.57866 14.727 7.60229 14.6953 7.61483 14.6588L12.2329 1.00068C12.2423 0.972776 12.245 0.943032 12.2406 0.913907C12.2362 0.884781 12.225 0.857112 12.2078 0.833188C12.1907 0.809262 12.168 0.789771 12.1418 0.776324C12.1156 0.762879 12.0866 0.755862 12.0572 0.755859Z"
										fill="#222222" />
								</svg>

							</div>
							<div class="event-info">
								<h3 class="event-title">Slash Hackathon</h3>
								<span class="event-description">Community Event</span>
								<span class="event-date">23.8. - 26.8.</span>
							</div>

						</div>
					</div>
				</div>
			</div>

			<div class="heading" style="width: 63rem; margin-top: 2rem">
				<h2>Best of CODE Review</h2>
			</div>
			<div class="row gallery" style="position: relative">

				<?php foreach ($best_of_code_review_0 as $post): ?>
					<div class="article article-type-1">
						<div class="article-info">
							<span class="article-tag">
								<?php echo get_the_category($post->ID)[0]->name; ?>

								<!-- <?php the_author(); ?> -->
								<!-- <?php the_date(); ?> -->
							</span>
							<h1 class="article-title">
								<?php echo get_the_title($post->ID); ?>
							</h1>
							<p class="article-description">
								<?php echo get_the_excerpt($post->ID); ?>
							</p>
						</div>
						<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID)); ?>
						<img src="<?php echo $image[0]; ?>" class="article-image">
					</div>
				<?php endforeach; ?>

				<div style="position:absolute; width: 4rem; height:4rem; top: 3rem; right: 4px">
					<a href="#" class="button primary" style="height: 4rem">
						<span>></span>
					</a>
				</div>
			</div>

			<div class="row reverse-row" style="margin-top: 3rem">
				<div class="block medium sache">
					<div class="heading">
						<h2>New Articles</h2>
					</div>

					<?php foreach ($newest_articles_1 as $post): ?>
						<div class="article article-type-0">
							<div class="article-info">
								<span class="article-tag">
									<?php echo get_the_category($post->ID)[0]->name; ?>

									<!-- <?php the_author(); ?> -->
									<!-- <?php the_date(); ?> -->
								</span>
								<h1 class="article-title">
									<?php echo get_the_title($post->ID); ?>
								</h1>
								<p class="article-description">
									<?php echo get_the_excerpt($post->ID); ?>
								</p>
							</div>
							<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID)); ?>
							<img src="<?php echo $image[0]; ?>" class="article-image">
						</div>
					<?php endforeach; ?>

					<!--<?php if (have_posts()):
						while (have_posts()):
							the_post(); ?>
																																																																																																																																																																																		<div class="article article-type-0">
																																																																																																																																																																																			<div class="article-info">
																																																																																																																																																																																				<span class="article-tag">
																																																																																																																																																																																				<?php the_category(" "); ?>
																																																																																																																																																																																				</span>
																																																																																																																																																																																				<h1 class="article-title">
																																																																																																																																																																																					<?php the_title(); ?>
																																																																																																																																																																																				</h1>
																																																																																																																																																																																				<p class="article-description">
																																																																																																																																																																																				<?php the_excerpt(); ?>
																																																																																																																																																																																				</p>
																																																																																																																																																																																			</div>
																																																																																																																																																																																			<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id()); ?>
																																																																																																																																																																																			<img src="<?php echo $image[0]; ?>" class="article-image">
																																																																																																																																																																																		</div>
																																																																																											<?php endwhile; endif; ?>-->
				</div>


			</div>



			<div class="heading" style="margin-top: 2rem">
				<h2>Upcoming</h2>
			</div>
			<div class="row">
				<div class="block small">
					<div style="display:flex; flex-direction:column">
						<div class="event">
							<div class="event-logo-container">
								<svg style="height: 2rem" width="61" height="16" viewBox="0 0 61 16" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M26.0809 8.64147C26.2086 8.29727 26.321 7.94631 26.4672 7.61012C26.9178 6.57351 27.6259 5.7607 28.6185 5.20697C29.4195 4.75938 30.2862 4.57789 31.1969 4.64899C32.1188 4.72108 32.9507 5.02949 33.6233 5.69361C33.6483 5.71864 33.6801 5.73892 33.7522 5.79549C33.7522 5.611 33.7522 5.46681 33.7522 5.32262C33.7522 4.93286 33.7522 4.93236 34.1375 4.93211C34.9503 4.93211 35.7634 4.93411 36.5764 4.92885C36.7216 4.92885 36.7767 4.96766 36.7749 5.12236C36.7667 5.66732 36.7717 6.21254 36.7717 6.80957C36.8195 6.74999 36.843 6.73047 36.8543 6.70518C37.0566 6.2586 37.3244 5.85907 37.7127 5.55367C38.149 5.20947 38.6414 4.97942 39.1778 4.82772C39.9281 4.61617 40.7166 4.57967 41.4831 4.72108C42.4899 4.90182 43.3621 5.36042 44.035 6.15496C44.0933 6.2238 44.1942 6.30291 44.2618 6.36399C44.277 6.26458 44.284 6.16415 44.2833 6.06359C44.2868 4.42176 44.2868 2.77987 44.2833 1.13788C44.2833 0.965158 44.3334 0.915593 44.5071 0.917346C45.3454 0.926525 46.1838 0.926525 47.0221 0.917346C47.2081 0.915343 47.2705 0.964658 47.2697 1.15791C47.2644 2.63485 47.2697 4.11178 47.2725 5.58872C47.2725 5.6493 47.281 5.70988 47.29 5.82828C47.4151 5.70938 47.5043 5.62677 47.5904 5.54216C48.0247 5.1201 48.5581 4.89131 49.1377 4.75888C49.7154 4.62616 50.3142 4.61084 50.898 4.71382C51.4051 4.80054 51.886 5.00022 52.3056 5.29809C52.9549 5.75794 53.3945 6.3745 53.6406 7.12098C53.7512 7.45692 53.8458 7.81414 53.8571 8.1646C53.8984 9.46055 53.9072 10.758 53.9184 12.055C53.9264 12.9519 53.9184 13.8491 53.9214 14.7462C53.9214 14.8874 53.8671 14.941 53.7264 14.9402C52.8543 14.9371 51.9821 14.9371 51.1097 14.9402C50.9653 14.9402 50.9182 14.8902 50.9185 14.7472C50.9215 12.8981 50.9265 11.0486 50.916 9.19946C50.9132 8.67902 50.7786 8.19063 50.3728 7.82115C50.0223 7.50223 49.5968 7.40811 49.1359 7.40836C48.5536 7.40836 48.0485 7.56982 47.6807 8.04694C47.4156 8.39089 47.2942 8.79593 47.2902 9.21748C47.273 11.0449 47.2727 12.8723 47.2747 14.6997C47.2747 14.8934 47.2144 14.9437 47.0269 14.9417C46.1758 14.9325 45.3247 14.9352 44.4735 14.9395C44.3281 14.9395 44.2783 14.8839 44.2803 14.7442C44.285 14.3772 44.2818 14.01 44.2818 13.5957C44.2157 13.6408 44.1759 13.6555 44.1549 13.6843C43.8728 14.0762 43.5055 14.3991 43.0807 14.6288C42.6269 14.8724 42.1477 15.0544 41.6343 15.115C41.1619 15.17 40.6831 15.2421 40.2115 15.2209C39.085 15.1708 38.0196 14.9027 37.1434 14.1289C37.0305 14.0288 36.9229 13.9237 36.7875 13.797C36.7792 13.8678 36.7704 13.9094 36.7704 13.9509C36.7692 14.2218 36.7669 14.4926 36.7704 14.7635C36.7722 14.8852 36.7256 14.9387 36.6 14.9387C35.7108 14.9362 34.8216 14.9362 33.9325 14.9387C33.8073 14.9387 33.7572 14.8887 33.7572 14.7655C33.76 14.5437 33.7572 14.3217 33.7572 14.0538C33.6611 14.1259 33.5975 14.1625 33.5475 14.2128C33.0901 14.6734 32.5284 14.9563 31.9091 15.1014C31.0134 15.3115 30.1192 15.2767 29.2493 14.949C28.445 14.6448 27.7749 14.1607 27.2242 13.4938C26.7736 12.9474 26.4732 12.3296 26.2331 11.6734C26.1763 11.517 26.133 11.356 26.0579 11.1958C26.0479 11.3092 26.0296 11.4224 26.0293 11.5358C26.0271 12.6019 26.0256 13.6681 26.0293 14.7345C26.0293 14.8884 25.981 14.9415 25.8243 14.9405C24.9607 14.9345 24.0969 14.9345 23.2329 14.9405C23.0892 14.9405 23.0377 14.8889 23.0384 14.7472C23.0412 14.1677 23.0384 13.588 23.0332 13.0082C23.0332 12.9679 23.0061 12.9281 22.9919 12.888C22.9596 12.9131 22.9168 12.9334 22.897 12.9666C22.2962 14.003 21.37 14.6035 20.2483 14.9392C19.4556 15.1792 18.6265 15.2761 17.7998 15.2256C16.6338 15.1528 15.5161 14.8934 14.5238 14.2303C13.6511 13.647 13.0338 12.861 12.635 11.8965C12.5945 11.7979 12.6223 11.7355 12.7169 11.681C13.5405 11.2073 14.3625 10.731 15.1831 10.2521C15.2853 10.1925 15.3468 10.2035 15.4022 10.3154C15.6159 10.7482 15.8845 11.1443 16.2578 11.4552C16.6012 11.7418 17.004 11.918 17.4396 12.0169C17.9899 12.1412 18.5603 12.1473 19.113 12.0347C19.5887 11.939 20.0322 11.7395 20.1747 11.1926C20.2748 10.8038 20.0996 10.3487 19.7789 10.1224C19.2532 9.75043 18.6497 9.57795 18.0474 9.39496C17.6469 9.2733 17.2431 9.1604 16.8491 9.01947C16.3527 8.84274 15.8477 8.67827 15.3776 8.44371C14.4724 7.99162 13.7522 7.33676 13.3965 6.35698C13.1712 5.73316 13.1152 5.08456 13.184 4.42569C13.2921 3.38934 13.7417 2.5252 14.5157 1.83129C14.9814 1.41375 15.5243 1.12837 16.1133 0.921601C16.7312 0.704817 17.3675 0.628467 18.0173 0.63898C19.272 0.659007 20.4162 1.00997 21.412 1.79049C22.0081 2.25735 22.4732 2.83661 22.8372 3.49823C22.8469 3.52131 22.8602 3.54274 22.8765 3.56181C22.9133 3.59611 22.9546 3.62565 22.9939 3.65719C23.0086 3.60887 23.0359 3.56081 23.0362 3.5125C23.0399 2.50968 23.0429 1.50662 23.0389 0.503804C23.0389 0.345847 23.087 0.286268 23.2505 0.288772C24.1216 0.302039 24.9925 0.308297 25.8636 0.312052C26.0138 0.312052 26.0354 0.392157 26.0354 0.514568C26.0354 3.1128 26.0359 5.71106 26.0371 8.30929V8.63672L26.0809 8.64147ZM33.7537 9.9214C33.7858 9.50338 33.7037 9.08448 33.5159 8.70956C33.3472 8.3554 33.0818 8.05606 32.7504 7.84593C32.4052 7.62614 32.037 7.48996 31.6324 7.4772C31.3571 7.46844 31.074 7.47244 30.8079 7.53177C30.5247 7.59468 30.2524 7.69929 30.0001 7.84218C29.8068 7.95282 29.6554 8.14257 29.4966 8.30678C29.1978 8.61819 29.0598 9.01171 29.003 9.42525C28.9657 9.69736 28.9935 9.97848 28.9947 10.2553C28.997 10.766 29.195 11.2051 29.5084 11.5938C29.785 11.935 30.1638 12.1785 30.5888 12.2885C31.0872 12.4244 31.6132 12.423 32.1111 12.2845C32.8085 12.094 33.2821 11.6559 33.5585 11.0218C33.7605 10.6408 33.7605 10.3177 33.7537 9.9214ZM23.0429 6.41931H23.0409C23.0409 5.6155 23.0409 4.81145 23.0387 4.00765C23.0382 3.95087 23.0182 3.896 22.9821 3.85219C22.9666 3.83517 22.8875 3.86196 22.8467 3.88549C22.4852 4.09551 22.1257 4.30879 21.7658 4.52157C21.3339 4.77691 20.9009 5.03024 20.4716 5.28958C20.3559 5.35967 20.2801 5.34941 20.218 5.22574C20.1654 5.12136 20.1073 5.01947 20.0458 4.92009C19.7834 4.49754 19.4492 4.14758 18.9789 3.96409C18.2817 3.69198 17.577 3.62489 16.8859 3.98612C16.6375 4.11554 16.4465 4.32206 16.3997 4.59442C16.3046 5.14839 16.446 5.45154 16.9444 5.77421C17.5552 6.16948 18.2579 6.34997 18.9365 6.58653C19.639 6.8306 20.3524 7.04939 21.036 7.33751C21.794 7.65793 22.4411 8.14432 22.8867 8.86026C22.9118 8.90056 22.9571 8.92835 22.9931 8.96214C23.0096 8.90957 23.0407 8.85726 23.0409 8.80469C23.0439 8.01015 23.0429 7.21485 23.0429 6.41931ZM36.7907 12.4753C36.8208 12.4699 36.85 12.4611 36.8781 12.449C37.4726 12.1085 38.0669 11.7676 38.6609 11.4261C38.7415 11.3798 38.7933 11.3961 38.8361 11.4932C38.8947 11.6328 38.9688 11.7654 39.0574 11.8882C39.5553 12.5539 40.259 12.5937 40.9835 12.4973C41.0811 12.4843 41.1787 12.4405 41.2676 12.3939C41.6203 12.2087 41.7097 11.7763 41.3387 11.5758C41.1059 11.4518 40.8631 11.3477 40.6127 11.2647C39.9183 11.0304 39.2109 10.8351 38.5242 10.5773C37.9735 10.3697 37.4876 10.0391 37.1359 9.54891C37.0205 9.3882 36.9244 9.21372 36.7922 9.00195L36.7907 12.4753ZM44.2838 8.61594C44.2838 8.48477 44.2838 8.3536 44.2838 8.22242C44.2828 7.85862 44.2815 7.49489 44.2798 7.13124C44.2798 6.92022 44.26 6.9087 44.0715 7.00608C44.0009 7.04263 43.9311 7.08118 43.861 7.11873C43.2707 7.43764 42.6792 7.75456 42.0912 8.07798C41.966 8.14632 41.8909 8.13556 41.8131 8.0109C41.6406 7.73253 41.4255 7.49497 41.1039 7.38508C40.7033 7.2489 40.3013 7.21285 39.9273 7.46017C39.6647 7.6329 39.654 8.00063 39.9126 8.17136C40.0793 8.28265 40.261 8.36997 40.452 8.4307C41.0868 8.62821 41.7327 8.79142 42.3645 8.99819C43.0537 9.22349 43.6687 9.57645 44.1248 10.163C44.1534 10.1995 44.2024 10.2205 44.242 10.2486C44.256 10.1985 44.2815 10.1497 44.2818 10.0999C44.285 9.60549 44.2838 9.11084 44.2838 8.61594Z"
										fill="#222222" />
									<path
										d="M59.9225 14.1477H55.5686C55.5148 14.1477 55.4712 14.1913 55.4712 14.2451V14.8474C55.4712 14.9011 55.5148 14.9448 55.5686 14.9448H59.9225C59.9764 14.9448 60.0199 14.9011 60.0199 14.8474V14.2451C60.0199 14.1913 59.9764 14.1477 59.9225 14.1477Z"
										fill="#222222" />
									<path
										d="M7.64334 0.755859H4.82314C4.78454 0.755859 4.74689 0.767923 4.71547 0.790365C4.68405 0.812804 4.66042 0.844501 4.64791 0.881024L0.029848 14.5389C0.0203931 14.5668 0.0177087 14.5965 0.0220167 14.6257C0.0263246 14.6548 0.0375013 14.6825 0.0546228 14.7064C0.0717443 14.7304 0.0943191 14.7499 0.120481 14.7634C0.146643 14.7769 0.175641 14.7839 0.205078 14.784H3.02578C3.06438 14.784 3.102 14.7719 3.13342 14.7495C3.16484 14.727 3.18844 14.6953 3.20101 14.6588L7.81907 1.00068C7.82848 0.972776 7.83113 0.943032 7.82678 0.913907C7.82242 0.884781 7.81118 0.857112 7.79401 0.833188C7.77684 0.809262 7.75421 0.789771 7.72802 0.776324C7.70181 0.762879 7.67277 0.755862 7.64334 0.755859Z"
										fill="#222222" />
									<path
										d="M12.0572 0.755859H9.23696C9.19836 0.755859 9.16071 0.767923 9.12929 0.790365C9.09787 0.812804 9.07424 0.844501 9.06173 0.881024L4.44367 14.5389C4.43421 14.5668 4.43153 14.5965 4.43583 14.6257C4.44014 14.6548 4.45133 14.6825 4.46845 14.7064C4.48557 14.7304 4.50813 14.7499 4.53431 14.7634C4.56047 14.7769 4.58946 14.7839 4.6189 14.784H7.4396C7.4782 14.784 7.51582 14.7719 7.54724 14.7495C7.57866 14.727 7.60229 14.6953 7.61483 14.6588L12.2329 1.00068C12.2423 0.972776 12.245 0.943032 12.2406 0.913907C12.2362 0.884781 12.225 0.857112 12.2078 0.833188C12.1907 0.809262 12.168 0.789771 12.1418 0.776324C12.1156 0.762879 12.0866 0.755862 12.0572 0.755859Z"
										fill="#222222" />
								</svg>

							</div>
							<div class="event-info">
								<h3 class="event-title">Slash Hackathon</h3>
								<span class="event-description">Community Event</span>
								<span class="event-date">23.8. - 26.8.</span>
							</div>
						</div>
						<div class="event">
							<div class="event-logo-container">
								<svg style="height: 2rem" width="103" height="93" viewBox="0 0 103 93" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M76.5282 69.3914L51.0188 83.7404L25.5093 69.3914V54.231L18.2209 50.1819V73.6537L51.0188 92.1025L83.8166 73.6537V50.1819L76.5282 54.231V69.3914Z" />
									<path
										d="M51.0188 0L0 26.4542V32.7709L51.0188 61.1139L94.7492 36.8201V56.9459H102.038V26.4542L51.0188 0ZM87.4608 32.5316L80.1724 36.5805L51.0188 52.7778L21.8652 36.5805L14.5768 32.5316L9.52526 29.7251L51.0188 8.20993L92.5124 29.7251L87.4608 32.5316Z" />
								</svg>

							</div>
							<div class="event-info">
								<h3 class="event-title">Graduation Ceremony</h3>
								<span class="event-description">Community Event</span>
								<span class="event-date">23.8. - 26.8.</span>
							</div>
						</div>
						<div class="event">
							<div class="event-logo-container">
								<svg style="height: 2rem" width="103" height="94" viewBox="0 0 103 94" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M96.9357 11.9044H78.2288V0H71.4263V11.9044H30.6113V0H23.8088V11.9044H5.10188C3.74926 11.906 2.45249 12.444 1.49605 13.4004C0.539599 14.3569 0.0015753 15.6537 0 17.0063V88.4326C0.0015753 89.7852 0.539599 91.082 1.49605 92.0384C2.45249 92.9949 3.74926 93.5329 5.10188 93.5345H96.9357C98.2884 93.5329 99.5851 92.9949 100.542 92.0384C101.498 91.082 102.036 89.7852 102.038 88.4326V17.0063C102.036 15.6537 101.498 14.3569 100.542 13.4004C99.5851 12.444 98.2884 11.906 96.9357 11.9044ZM95.2351 86.732H6.80251V18.7069H23.8088V27.21H30.6113V18.7069H71.4263V27.21H78.2288V18.7069H95.2351V86.732Z" />
									<path d="M27.21 39.1145H20.4075V45.917H27.21V39.1145Z" />
									<path d="M45.917 39.1145H39.1145V45.917H45.917V39.1145Z" />
									<path d="M62.9231 39.1145H56.1206V45.917H62.9231V39.1145Z" />
									<path d="M81.6301 39.1145H74.8276V45.917H81.6301V39.1145Z" />
									<path d="M27.21 54.4202H20.4075V61.2227H27.21V54.4202Z" />
									<path d="M45.917 54.4202H39.1145V61.2227H45.917V54.4202Z" />
									<path d="M62.9231 54.4202H56.1206V61.2227H62.9231V54.4202Z" />
									<path d="M81.6301 54.4202H74.8276V61.2227H81.6301V54.4202Z" />
									<path d="M27.21 69.7256H20.4075V76.5281H27.21V69.7256Z" />
									<path d="M45.917 69.7256H39.1145V76.5281H45.917V69.7256Z" />
									<path d="M62.9231 69.7256H56.1206V76.5281H62.9231V69.7256Z" />
									<path d="M81.6301 69.7256H74.8276V76.5281H81.6301V69.7256Z" />
								</svg>

							</div>
							<div class="event-info">
								<h3 class="event-title">Module Deadlines</h3>
								<span class="event-description">Academic Deadline</span>
								<span class="event-date">23.8. - 26.8.</span>
							</div>
						</div>
						<div class="event">
							<div class="event-logo-container">
								<svg style="height: 2rem" width="99" height="98" viewBox="0 0 99 98" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M47.2473 97.9209H0.913574V51.5871H47.2473V97.9209ZM98.4712 97.9209H52.1374V51.5871H98.4712V97.9209ZM47.2473 46.6971H0.913574V0.363281H47.2473V46.6971ZM98.4712 46.6971H52.1374V0.363281H98.4712V46.6971Z" />
								</svg>


							</div>
							<div class="event-info">
								<h3 class="event-title">Microsoft Event</h3>
								<span class="event-description">Community Event</span>
								<span class="event-date">23.8. - 26.8.</span>
							</div>
						</div>
						<div class="event">
							<div class="event-logo-container">
								<svg width="61" height="16" viewBox="0 0 61 16" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M26.0809 8.64147C26.2086 8.29727 26.321 7.94631 26.4672 7.61012C26.9178 6.57351 27.6259 5.7607 28.6185 5.20697C29.4195 4.75938 30.2862 4.57789 31.1969 4.64899C32.1188 4.72108 32.9507 5.02949 33.6233 5.69361C33.6483 5.71864 33.6801 5.73892 33.7522 5.79549C33.7522 5.611 33.7522 5.46681 33.7522 5.32262C33.7522 4.93286 33.7522 4.93236 34.1375 4.93211C34.9503 4.93211 35.7634 4.93411 36.5764 4.92885C36.7216 4.92885 36.7767 4.96766 36.7749 5.12236C36.7667 5.66732 36.7717 6.21254 36.7717 6.80957C36.8195 6.74999 36.843 6.73047 36.8543 6.70518C37.0566 6.2586 37.3244 5.85907 37.7127 5.55367C38.149 5.20947 38.6414 4.97942 39.1778 4.82772C39.9281 4.61617 40.7166 4.57967 41.4831 4.72108C42.4899 4.90182 43.3621 5.36042 44.035 6.15496C44.0933 6.2238 44.1942 6.30291 44.2618 6.36399C44.277 6.26458 44.284 6.16415 44.2833 6.06359C44.2868 4.42176 44.2868 2.77987 44.2833 1.13788C44.2833 0.965158 44.3334 0.915593 44.5071 0.917346C45.3454 0.926525 46.1838 0.926525 47.0221 0.917346C47.2081 0.915343 47.2705 0.964658 47.2697 1.15791C47.2644 2.63485 47.2697 4.11178 47.2725 5.58872C47.2725 5.6493 47.281 5.70988 47.29 5.82828C47.4151 5.70938 47.5043 5.62677 47.5904 5.54216C48.0247 5.1201 48.5581 4.89131 49.1377 4.75888C49.7154 4.62616 50.3142 4.61084 50.898 4.71382C51.4051 4.80054 51.886 5.00022 52.3056 5.29809C52.9549 5.75794 53.3945 6.3745 53.6406 7.12098C53.7512 7.45692 53.8458 7.81414 53.8571 8.1646C53.8984 9.46055 53.9072 10.758 53.9184 12.055C53.9264 12.9519 53.9184 13.8491 53.9214 14.7462C53.9214 14.8874 53.8671 14.941 53.7264 14.9402C52.8543 14.9371 51.9821 14.9371 51.1097 14.9402C50.9653 14.9402 50.9182 14.8902 50.9185 14.7472C50.9215 12.8981 50.9265 11.0486 50.916 9.19946C50.9132 8.67902 50.7786 8.19063 50.3728 7.82115C50.0223 7.50223 49.5968 7.40811 49.1359 7.40836C48.5536 7.40836 48.0485 7.56982 47.6807 8.04694C47.4156 8.39089 47.2942 8.79593 47.2902 9.21748C47.273 11.0449 47.2727 12.8723 47.2747 14.6997C47.2747 14.8934 47.2144 14.9437 47.0269 14.9417C46.1758 14.9325 45.3247 14.9352 44.4735 14.9395C44.3281 14.9395 44.2783 14.8839 44.2803 14.7442C44.285 14.3772 44.2818 14.01 44.2818 13.5957C44.2157 13.6408 44.1759 13.6555 44.1549 13.6843C43.8728 14.0762 43.5055 14.3991 43.0807 14.6288C42.6269 14.8724 42.1477 15.0544 41.6343 15.115C41.1619 15.17 40.6831 15.2421 40.2115 15.2209C39.085 15.1708 38.0196 14.9027 37.1434 14.1289C37.0305 14.0288 36.9229 13.9237 36.7875 13.797C36.7792 13.8678 36.7704 13.9094 36.7704 13.9509C36.7692 14.2218 36.7669 14.4926 36.7704 14.7635C36.7722 14.8852 36.7256 14.9387 36.6 14.9387C35.7108 14.9362 34.8216 14.9362 33.9325 14.9387C33.8073 14.9387 33.7572 14.8887 33.7572 14.7655C33.76 14.5437 33.7572 14.3217 33.7572 14.0538C33.6611 14.1259 33.5975 14.1625 33.5475 14.2128C33.0901 14.6734 32.5284 14.9563 31.9091 15.1014C31.0134 15.3115 30.1192 15.2767 29.2493 14.949C28.445 14.6448 27.7749 14.1607 27.2242 13.4938C26.7736 12.9474 26.4732 12.3296 26.2331 11.6734C26.1763 11.517 26.133 11.356 26.0579 11.1958C26.0479 11.3092 26.0296 11.4224 26.0293 11.5358C26.0271 12.6019 26.0256 13.6681 26.0293 14.7345C26.0293 14.8884 25.981 14.9415 25.8243 14.9405C24.9607 14.9345 24.0969 14.9345 23.2329 14.9405C23.0892 14.9405 23.0377 14.8889 23.0384 14.7472C23.0412 14.1677 23.0384 13.588 23.0332 13.0082C23.0332 12.9679 23.0061 12.9281 22.9919 12.888C22.9596 12.9131 22.9168 12.9334 22.897 12.9666C22.2962 14.003 21.37 14.6035 20.2483 14.9392C19.4556 15.1792 18.6265 15.2761 17.7998 15.2256C16.6338 15.1528 15.5161 14.8934 14.5238 14.2303C13.6511 13.647 13.0338 12.861 12.635 11.8965C12.5945 11.7979 12.6223 11.7355 12.7169 11.681C13.5405 11.2073 14.3625 10.731 15.1831 10.2521C15.2853 10.1925 15.3468 10.2035 15.4022 10.3154C15.6159 10.7482 15.8845 11.1443 16.2578 11.4552C16.6012 11.7418 17.004 11.918 17.4396 12.0169C17.9899 12.1412 18.5603 12.1473 19.113 12.0347C19.5887 11.939 20.0322 11.7395 20.1747 11.1926C20.2748 10.8038 20.0996 10.3487 19.7789 10.1224C19.2532 9.75043 18.6497 9.57795 18.0474 9.39496C17.6469 9.2733 17.2431 9.1604 16.8491 9.01947C16.3527 8.84274 15.8477 8.67827 15.3776 8.44371C14.4724 7.99162 13.7522 7.33676 13.3965 6.35698C13.1712 5.73316 13.1152 5.08456 13.184 4.42569C13.2921 3.38934 13.7417 2.5252 14.5157 1.83129C14.9814 1.41375 15.5243 1.12837 16.1133 0.921601C16.7312 0.704817 17.3675 0.628467 18.0173 0.63898C19.272 0.659007 20.4162 1.00997 21.412 1.79049C22.0081 2.25735 22.4732 2.83661 22.8372 3.49823C22.8469 3.52131 22.8602 3.54274 22.8765 3.56181C22.9133 3.59611 22.9546 3.62565 22.9939 3.65719C23.0086 3.60887 23.0359 3.56081 23.0362 3.5125C23.0399 2.50968 23.0429 1.50662 23.0389 0.503804C23.0389 0.345847 23.087 0.286268 23.2505 0.288772C24.1216 0.302039 24.9925 0.308297 25.8636 0.312052C26.0138 0.312052 26.0354 0.392157 26.0354 0.514568C26.0354 3.1128 26.0359 5.71106 26.0371 8.30929V8.63672L26.0809 8.64147ZM33.7537 9.9214C33.7858 9.50338 33.7037 9.08448 33.5159 8.70956C33.3472 8.3554 33.0818 8.05606 32.7504 7.84593C32.4052 7.62614 32.037 7.48996 31.6324 7.4772C31.3571 7.46844 31.074 7.47244 30.8079 7.53177C30.5247 7.59468 30.2524 7.69929 30.0001 7.84218C29.8068 7.95282 29.6554 8.14257 29.4966 8.30678C29.1978 8.61819 29.0598 9.01171 29.003 9.42525C28.9657 9.69736 28.9935 9.97848 28.9947 10.2553C28.997 10.766 29.195 11.2051 29.5084 11.5938C29.785 11.935 30.1638 12.1785 30.5888 12.2885C31.0872 12.4244 31.6132 12.423 32.1111 12.2845C32.8085 12.094 33.2821 11.6559 33.5585 11.0218C33.7605 10.6408 33.7605 10.3177 33.7537 9.9214ZM23.0429 6.41931H23.0409C23.0409 5.6155 23.0409 4.81145 23.0387 4.00765C23.0382 3.95087 23.0182 3.896 22.9821 3.85219C22.9666 3.83517 22.8875 3.86196 22.8467 3.88549C22.4852 4.09551 22.1257 4.30879 21.7658 4.52157C21.3339 4.77691 20.9009 5.03024 20.4716 5.28958C20.3559 5.35967 20.2801 5.34941 20.218 5.22574C20.1654 5.12136 20.1073 5.01947 20.0458 4.92009C19.7834 4.49754 19.4492 4.14758 18.9789 3.96409C18.2817 3.69198 17.577 3.62489 16.8859 3.98612C16.6375 4.11554 16.4465 4.32206 16.3997 4.59442C16.3046 5.14839 16.446 5.45154 16.9444 5.77421C17.5552 6.16948 18.2579 6.34997 18.9365 6.58653C19.639 6.8306 20.3524 7.04939 21.036 7.33751C21.794 7.65793 22.4411 8.14432 22.8867 8.86026C22.9118 8.90056 22.9571 8.92835 22.9931 8.96214C23.0096 8.90957 23.0407 8.85726 23.0409 8.80469C23.0439 8.01015 23.0429 7.21485 23.0429 6.41931ZM36.7907 12.4753C36.8208 12.4699 36.85 12.4611 36.8781 12.449C37.4726 12.1085 38.0669 11.7676 38.6609 11.4261C38.7415 11.3798 38.7933 11.3961 38.8361 11.4932C38.8947 11.6328 38.9688 11.7654 39.0574 11.8882C39.5553 12.5539 40.259 12.5937 40.9835 12.4973C41.0811 12.4843 41.1787 12.4405 41.2676 12.3939C41.6203 12.2087 41.7097 11.7763 41.3387 11.5758C41.1059 11.4518 40.8631 11.3477 40.6127 11.2647C39.9183 11.0304 39.2109 10.8351 38.5242 10.5773C37.9735 10.3697 37.4876 10.0391 37.1359 9.54891C37.0205 9.3882 36.9244 9.21372 36.7922 9.00195L36.7907 12.4753ZM44.2838 8.61594C44.2838 8.48477 44.2838 8.3536 44.2838 8.22242C44.2828 7.85862 44.2815 7.49489 44.2798 7.13124C44.2798 6.92022 44.26 6.9087 44.0715 7.00608C44.0009 7.04263 43.9311 7.08118 43.861 7.11873C43.2707 7.43764 42.6792 7.75456 42.0912 8.07798C41.966 8.14632 41.8909 8.13556 41.8131 8.0109C41.6406 7.73253 41.4255 7.49497 41.1039 7.38508C40.7033 7.2489 40.3013 7.21285 39.9273 7.46017C39.6647 7.6329 39.654 8.00063 39.9126 8.17136C40.0793 8.28265 40.261 8.36997 40.452 8.4307C41.0868 8.62821 41.7327 8.79142 42.3645 8.99819C43.0537 9.22349 43.6687 9.57645 44.1248 10.163C44.1534 10.1995 44.2024 10.2205 44.242 10.2486C44.256 10.1985 44.2815 10.1497 44.2818 10.0999C44.285 9.60549 44.2838 9.11084 44.2838 8.61594Z"
										fill="#222222" />
									<path
										d="M59.9225 14.1477H55.5686C55.5148 14.1477 55.4712 14.1913 55.4712 14.2451V14.8474C55.4712 14.9011 55.5148 14.9448 55.5686 14.9448H59.9225C59.9764 14.9448 60.0199 14.9011 60.0199 14.8474V14.2451C60.0199 14.1913 59.9764 14.1477 59.9225 14.1477Z"
										fill="#222222" />
									<path
										d="M7.64334 0.755859H4.82314C4.78454 0.755859 4.74689 0.767923 4.71547 0.790365C4.68405 0.812804 4.66042 0.844501 4.64791 0.881024L0.029848 14.5389C0.0203931 14.5668 0.0177087 14.5965 0.0220167 14.6257C0.0263246 14.6548 0.0375013 14.6825 0.0546228 14.7064C0.0717443 14.7304 0.0943191 14.7499 0.120481 14.7634C0.146643 14.7769 0.175641 14.7839 0.205078 14.784H3.02578C3.06438 14.784 3.102 14.7719 3.13342 14.7495C3.16484 14.727 3.18844 14.6953 3.20101 14.6588L7.81907 1.00068C7.82848 0.972776 7.83113 0.943032 7.82678 0.913907C7.82242 0.884781 7.81118 0.857112 7.79401 0.833188C7.77684 0.809262 7.75421 0.789771 7.72802 0.776324C7.70181 0.762879 7.67277 0.755862 7.64334 0.755859Z"
										fill="#222222" />
									<path
										d="M12.0572 0.755859H9.23696C9.19836 0.755859 9.16071 0.767923 9.12929 0.790365C9.09787 0.812804 9.07424 0.844501 9.06173 0.881024L4.44367 14.5389C4.43421 14.5668 4.43153 14.5965 4.43583 14.6257C4.44014 14.6548 4.45133 14.6825 4.46845 14.7064C4.48557 14.7304 4.50813 14.7499 4.53431 14.7634C4.56047 14.7769 4.58946 14.7839 4.6189 14.784H7.4396C7.4782 14.784 7.51582 14.7719 7.54724 14.7495C7.57866 14.727 7.60229 14.6953 7.61483 14.6588L12.2329 1.00068C12.2423 0.972776 12.245 0.943032 12.2406 0.913907C12.2362 0.884781 12.225 0.857112 12.2078 0.833188C12.1907 0.809262 12.168 0.789771 12.1418 0.776324C12.1156 0.762879 12.0866 0.755862 12.0572 0.755859Z"
										fill="#222222" />
								</svg>

							</div>
							<div class="event-info">
								<h3 class="event-title">Slash Hackathon</h3>
								<span class="event-description">Community Event</span>
								<span class="event-date">23.8. - 26.8.</span>
							</div>

						</div>
					</div>
				</div>

				<div class="calendar">
					<div class="cell">1</div>
					<div class="cell">2</div>
					<div class="cell">3</div>
					<div class="cell">4</div>
					<div class="cell">5</div>
					<div class="cell event-cell">
						<svg class="corner" viewBox="0 0 1 1" xmlns="http://www.w3.org/2000/svg" fill="#E0BBE4">
							<path d="M1 0H0L1 1V0Z" />
						</svg>
						<svg class="corner" style="transform: rotate(180deg)" viewBox=" 0 0 1 1" fill="#957DAD"
							xmlns="http://www.w3.org/2000/svg">
							<path d="M1 0H0L1 1V0Z" />
						</svg>
						<span>
							6
						</span>
					</div>
					<div class="cell">7</div>
					<div class="cell">8</div>
					<div class="cell">9</div>
					<div class="cell">10</div>
					<div class="cell today">11</div>
					<div class="cell">12</div>
					<div class="cell">13</div>
					<div class="cell">14</div>
					<div class="cell">15</div>
					<div class="cell event-cell" style="background: var(--constDarkBlue)">16</div>
					<div class="cell">17</div>
					<div class="cell event-cell" style="background: var(--commentGreen)">18</div>
					<div class="cell">19</div>
					<div class="cell">20</div>
					<div class="cell event-cell" style="background: var(--stringOrange)">21</div>
					<div class="cell">22</div>
					<div class="cell">23</div>
					<div class="cell">24</div>
					<div class="cell">25</div>
					<div class="cell">26</div>
					<div class="cell">27</div>
					<div class="cell">28</div>
					<div class="cell">29</div>
					<div class="cell">30</div>
				</div>
			</div>
	</main>
	<footer></footer>
</body>

</html>