# payments.paymentReceipt

**Description** : *Receipt*

**Layer** : 214

```tl
payments.paymentReceipt#70c4fe03 flags:# date:int bot_id:long provider_id:long title:string description:string photo:flags.2?WebDocument invoice:Invoice info:flags.0?PaymentRequestedInfo shipping:flags.1?ShippingOption tip_amount:flags.3?long currency:string total_amount:long credentials_title:string users:Vector<User> = payments.PaymentReceipt;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	date : 40,
	bot_id : -162909724645702790,
	provider_id : -4668086142519516653,
	title : 'kSZ4D6GAbpKXjsyw',
	description : 'wW5j2sbEeUAtY8Of',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 429424041824028291,
		size : 99,
		mime_type : 'i7Uf2q8QMKXmguDj',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 52,
				h : 6,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'qNQeSaVCgbkp6z7A',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -1179741.28515625,
				w : 0,
				h : 92,
				preload_prefix_size : 16,
				video_start_ts : 613148.1708984375,
				video_codec : 'xuEeJnf0qGTN8Yys',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 10,
				title : 'o1LiYezuhPUMFTwl',
				performer : 'xEDGXjyektQ7sLpT',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : '1cDhv4uJ98rfLFyn',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'za7iQ2RYr8XFHyAW',
				stickerset : $client->inputStickerSetEmpty(...),
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
		currency : 'Dh0zwgTVkK4BXv6t',
		prices : array(
			$client->labeledPrice(
				label : 'LgYE9Wn3ClTrbN78',
				amount : -1003731992932860748,
			),
		),
		max_tip_amount : 6149138930560239192,
		suggested_tip_amounts : array(-8759518399526531166),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 71,
	),
	info : $client->paymentRequestedInfo(
		name : 'cNkx3ITiyv6BCOfA',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : 'v5Kw1QBWDLakTJe2',
			street_line2 : 'dpzbHolAkfhrQaGT',
			city : 'JtezHNmFsAlTo9KD',
			state : 'RtkTdQGZOfa0ozES',
			country_iso2 : '0vflcdwsKiRHk2hB',
			post_code : 'wd4nftCMzigkG06y',
		),
	),
	shipping : $client->shippingOption(
		id : 'xeUnTZ2hgOA7mYsH',
		title : 'cS0T6ukg7oKYHtWV',
		prices : array(
			$client->labeledPrice(
				label : 'XyRpe2JIw4jEgZzS',
				amount : 1023010172189354238,
			),
		),
	),
	tip_amount : -2819420901429544821,
	currency : 'tMgxwET5VoaAc2Lv',
	total_amount : -7778874739090291002,
	credentials_title : 'FOW07MrzUjNDlBZw',
	users : array(
		$client->userEmpty(
			id : -3853116803016207511,
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
			id : -5225218951984731420,
			access_hash : -5467238239941666753,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 92,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'LoyqcSUNQsFYxu1E',
					reason : 'GDCpktEQ8srMh9x2',
					text : 'SAO4tq58Tuf1VDLZ',
				),
			),
			bot_inline_placeholder : 'NCOdwuKetmPRAGkY',
			lang_code : 'bkKnG8QgOP9qIYxd',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 77,
			color : $client->peerColor(
				color : 45,
				background_emoji_id : -4978653693445922618,
			),
			profile_color : $client->peerColor(
				color : 100,
				background_emoji_id : -5536352955323187684,
			),
			bot_active_users : 67,
			bot_verification_icon : -8284930055983854542,
			send_paid_messages_stars : 1034693200215951914,
		),
	),
);
```