# payments.paymentReceipt

**Description** : *Receipt*

**Layer** : 218

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
	date : 55,
	bot_id : 2126407889929190561,
	provider_id : -6501420546082754650,
	title : 'BHtU5dAVCK6rWQ8v',
	description : '1F5ctYDKHzfEZXey',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -4720587605708902552,
		size : 26,
		mime_type : 'YUg9XsZd1SkBRQn0',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 6,
				h : 38,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'arTvDl53t4okK0nP',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 42,
					x : -1202526.9970703125,
					y : 664330.51953125,
					zoom : 328645.99609375,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -865832.2548828125,
				w : 93,
				h : 68,
				preload_prefix_size : 11,
				video_start_ts : 32558.42578125,
				video_codec : 'wNjZWzyJK2kB0On6',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 87,
				title : 'GiaukNcdPWgswXFh',
				performer : 'sbf7CImgkKHB42yR',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'BZI47WfFQ8w0VSqu',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : '3S17VWvzxrKQemIX',
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
		currency : 'ALbjcdqWIRUruMmH',
		prices : array(
			$client->labeledPrice(
				label : '5pfmaFinRzNykcHZ',
				amount : 8213742124794205304,
			),
		),
		max_tip_amount : -1566841599876974129,
		suggested_tip_amounts : array(-5875876387867209504),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 92,
	),
	info : $client->paymentRequestedInfo(
		name : 'RConimbD3WrlLtG6',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : 'ahXT7Axprq5o0usJ',
			street_line2 : '38VZHUBkYmzigc0C',
			city : 'rIRZYhOflGjPsaSm',
			state : 'WO5FtI9UBud8HqTQ',
			country_iso2 : 'm5bVABkgNQGi38cK',
			post_code : 'TOe3qcNFhnHbaLMi',
		),
	),
	shipping : $client->shippingOption(
		id : 'EfnMNbiLpjuc0sZ3',
		title : 'Lw5N2YlBRnsoxQAP',
		prices : array(
			$client->labeledPrice(
				label : 'SKgIP3Rs97Qfja4q',
				amount : 4387725957701824811,
			),
		),
	),
	tip_amount : -3167060029007422416,
	currency : '1nx4PrBQWz2j86YM',
	total_amount : -4300149533752314047,
	credentials_title : 'DUvMIz1prLGHtWq9',
	users : array(
		$client->userEmpty(
			id : -941586434013789997,
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
			id : 8785772241797016638,
			access_hash : 4019501112923311772,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 78,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'NfqOM3IpEhK09QFP',
					reason : '4NtrByW20kUvL9Fx',
					text : 'mewLzMXvfgPs9GT1',
				),
			),
			bot_inline_placeholder : 'RUTGWdYqCsOjbPB3',
			lang_code : 'A1zoSBUJMhaxXdRD',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 88,
			),
			color : $client->peerColor(
				color : 66,
				background_emoji_id : -2138490223685458372,
			),
			profile_color : $client->peerColor(
				color : 65,
				background_emoji_id : 5752825129121425509,
			),
			bot_active_users : 59,
			bot_verification_icon : 218311625251655792,
			send_paid_messages_stars : -7498502826283702462,
		),
	),
);
```