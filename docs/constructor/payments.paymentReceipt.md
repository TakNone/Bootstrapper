# payments.paymentReceipt

**Description** : *Receipt*

**Layer** : 233

```tl
payments.paymentReceipt#70c4fe03 flags:# date:int bot_id:long provider_id:long title:string description:string photo:flags.2?WebDocument invoice:Invoice info:flags.0?PaymentRequestedInfo shipping:flags.1?ShippingOption tip_amount:flags.3?long currency:string total_amount:long credentials_title:string users:Vector<User> = payments.PaymentReceipt;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>date</mark> | [`int`](type/int) | Date of generation |
| <mark>bot_id</mark> | [`long`](type/long) | Bot ID |
| <mark>provider_id</mark> | [`long`](type/long) | Provider ID |
| <mark>title</mark> | [`string`](type/string) | Title |
| <mark>description</mark> | [`string`](type/string) | Description |
| **photo** | [`flags.2?WebDocument`](type/WebDocument) | Photo |
| <mark>invoice</mark> | [`Invoice`](type/Invoice) | Invoice |
| **info** | [`flags.0?PaymentRequestedInfo`](type/PaymentRequestedInfo) | Info |
| **shipping** | [`flags.1?ShippingOption`](type/ShippingOption) | Selected shipping option |
| **tip_amount** | [`flags.3?long`](type/long) | Tipped amount |
| <mark>currency</mark> | [`string`](type/string) | Three-letter ISO 4217 currency code |
| <mark>total_amount</mark> | [`long`](type/long) | Total amount in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies) |
| <mark>credentials_title</mark> | [`string`](type/string) | Payment credential name |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users |

---

## Type

[payments.PaymentReceipt](type/payments.PaymentReceipt)

---

## Example

```php
$paymentsPaymentReceipt = $client->payments->paymentReceipt(
	date : 16,
	bot_id : -3748842304082753626,
	provider_id : -3942166278169457052,
	title : 'Ut0HdIV1hLgfmPyb',
	description : 'Acnd825GBwW9Nib1',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 1962930360361838377,
		size : 59,
		mime_type : 'd9COqKnWzTASsglJ',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 29,
				h : 41,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'cYXw8RDEB4vj6gIx',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 17,
					x : 1801008.8466796875,
					y : -1022708.6923828125,
					zoom : -56304.390625,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 486985.0439453125,
				w : 92,
				h : 93,
				preload_prefix_size : 25,
				video_start_ts : -552269.5390625,
				video_codec : 'kS89Qz3rnIK1pNYM',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 84,
				title : 'W8fxbLGPHShnX4UB',
				performer : 'hMw1qL0uRcfC8UiD',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'AIkPOlm7gMZYHxiq',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'yrsbYMVOLgTe5BCp',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	invoice : $client->invoice(
		test : true,
		name_requested : true,
		phone_requested : true,
		email_requested : true,
		shipping_address_requested : true,
		flexible : true,
		phone_to_provider : true,
		email_to_provider : true,
		recurring : true,
		currency : 'LmWODBw5olR09yKb',
		prices : array(
			$client->labeledPrice(
				label : 'MPsjuqBXgDchmoNn',
				amount : 3365167374862417548,
			),
		),
		max_tip_amount : -1330226479211836207,
		suggested_tip_amounts : array(-9197383521353488595),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 99,
	),
	info : $client->paymentRequestedInfo(
		name : 'fxUyp64MeYjOK3u1',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : '52figV8vLksNCrcJ',
			street_line2 : 'gUrkIv8L5swGD6pP',
			city : 'jCHQA6WMpdxP82ow',
			state : 'KhpnmFEGZ4owIUQT',
			country_iso2 : 'qXbw8IjugecsKdE0',
			post_code : 'RMbCGcVpvlhOj6Hu',
		),
	),
	shipping : $client->shippingOption(
		id : 'naN2G04xlJSkdQ9e',
		title : 'GmAKeoXixMLWFTPq',
		prices : array(
			$client->labeledPrice(
				label : 'MclmCuODo2N4PWFk',
				amount : 8826564140019095817,
			),
		),
	),
	tip_amount : 2323345309499174256,
	currency : 'csLMyUQrvGCkuNaD',
	total_amount : -8886098675426086445,
	credentials_title : 'nNwMpr8K5EYcm4SQ',
	users : array(
		$client->userEmpty(
			id : 3150147498858568230,
		),
		$client->user(
			self : true,
			contact : true,
			mutual_contact : true,
			deleted : true,
			bot : true,
			bot_chat_history : true,
			bot_nochats : true,
			verified : true,
			restricted : true,
			min : true,
			bot_inline_geo : true,
			support : true,
			scam : true,
			apply_min_photo : true,
			fake : true,
			bot_attach_menu : true,
			premium : true,
			attach_menu_enabled : true,
			bot_can_edit : true,
			close_friend : true,
			stories_hidden : true,
			stories_unavailable : true,
			contact_require_premium : true,
			bot_business : true,
			bot_has_main_app : true,
			bot_forum_view : true,
			bot_forum_can_manage_topics : true,
			bot_can_manage_bots : true,
			bot_guestchat : true,
			bot_guard : true,
			bot_forum_sidebar : true,
			id : 3366658023857904486,
			access_hash : -936838911107085398,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 56,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'vJIuqATRf4KYFDch',
					reason : 'MSIEzY7TNr5Bldhs',
					text : 'O2sZGq0ek8AvPJh3',
				),
			),
			bot_inline_placeholder : 'epn8NlUJWZ0tbG16',
			lang_code : '0Cq1Q8LcorIwujz3',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					deletable : true,
					expired : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 77,
			),
			color : $client->peerColor(
				color : 10,
				background_emoji_id : -6030189993255228248,
			),
			profile_color : $client->peerColor(
				color : 17,
				background_emoji_id : 737363858135001854,
			),
			bot_active_users : 41,
			bot_verification_icon : 599940170303787277,
			send_paid_messages_stars : 2094757625180364723,
			linked_community_id : 7931900591428077848,
		),
	),
);
```