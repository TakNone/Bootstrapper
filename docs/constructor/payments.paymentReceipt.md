# payments.paymentReceipt

**Description** : *Receipt*

**Layer** : 222

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
	date : 78,
	bot_id : 4545692150262336920,
	provider_id : -4992755140745972589,
	title : 'JV8FBrRHT2nLN5Yd',
	description : 'gKyijJcePqMWLvfC',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 3732005028256841240,
		size : 14,
		mime_type : 'O2Yc3gBo4KFzyjtn',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 24,
				h : 56,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : '26yxWf90GYUSzIpO',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 9,
					x : -1649148.2236328125,
					y : 1165462.994140625,
					zoom : 810118.443359375,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 889621.3974609375,
				w : 64,
				h : 47,
				preload_prefix_size : 89,
				video_start_ts : 1167944.21875,
				video_codec : 'ti4GHOTJ8Ebszhgd',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 32,
				title : 'VfzJbUZEIMynsFmQ',
				performer : '5etbrINwzB6M3gVA',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'HgDRajim8CbEKqJf',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'CFHZ6tqG1VX2kc7x',
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
		currency : 'Qqzx7gZM1ncVER03',
		prices : array(
			$client->labeledPrice(
				label : 'bYh68ZSrkRBsVP43',
				amount : -1376486557345576831,
			),
		),
		max_tip_amount : 5078956612421470867,
		suggested_tip_amounts : array(5962129502905981855),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 45,
	),
	info : $client->paymentRequestedInfo(
		name : '8j9uKmraz5McpWTF',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : 'NQ0yPvqTniCYBpsX',
			street_line2 : 'WFnyGA0BZEI21dcg',
			city : 'zIFoMPxB9jUR6LaA',
			state : 'UKQWAuBOXsPrM1Sv',
			country_iso2 : 'vXBN3nTVF7cS0IJz',
			post_code : 'yNYrJs1E7kumCXIc',
		),
	),
	shipping : $client->shippingOption(
		id : 'tyFIl2c0aPiVQKAk',
		title : 'l5v8OAgpcWTRX9ws',
		prices : array(
			$client->labeledPrice(
				label : 'y6G0u5Hxg31eSABF',
				amount : -6491372860698038825,
			),
		),
	),
	tip_amount : 618195392540319823,
	currency : '0pEejuoKmknOgtSP',
	total_amount : 2369216680950398704,
	credentials_title : '6mTxOpAPzvRdQUNF',
	users : array(
		$client->userEmpty(
			id : -6760132160828457825,
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
			id : 1369517646859816477,
			access_hash : -3717996431958691834,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 89,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'XPpvJAVrHxI8NdL7',
					reason : 'GHfyV4R3lqwOsTcQ',
					text : 'EZyMY6Dd20aulP8T',
				),
			),
			bot_inline_placeholder : 'L5r0af2gZpdOKHye',
			lang_code : 'WHD3w1lfmcgAB6G5',
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
				max_id : 22,
			),
			color : $client->peerColor(
				color : 62,
				background_emoji_id : -5487879560369397620,
			),
			profile_color : $client->peerColor(
				color : 31,
				background_emoji_id : -3175937500136597269,
			),
			bot_active_users : 63,
			bot_verification_icon : -7604599379449077040,
			send_paid_messages_stars : -1042056604000947799,
		),
	),
);
```