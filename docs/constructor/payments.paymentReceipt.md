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
	date : 14,
	bot_id : 4902082229636124072,
	provider_id : -2810361103820939779,
	title : 'roHaVZTncpy817Ef',
	description : 'wFQb5YEGCAJHcxoI',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 5466820089004257619,
		size : 1,
		mime_type : 'HodBSrXsZlq3UJRi',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 48,
				h : 81,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'dmfcX30wnhgvz2So',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 100,
					x : -97489.9306640625,
					y : -281178.697265625,
					zoom : -427569.05859375,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -1212226.388671875,
				w : 23,
				h : 1,
				preload_prefix_size : 84,
				video_start_ts : 1917320.98828125,
				video_codec : 'zowv9qObfachmnut',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 46,
				title : 'YXRnOJMPISKZEprw',
				performer : 'Ix8ZFJPLiflsjwkq',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'M89mcE2st5Fkv0UC',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'BIZy2EWRQ7Obadzi',
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
		currency : 'NflrpCtOGL4V1eBT',
		prices : array(
			$client->labeledPrice(
				label : 'xN1Jle0f8QiFTHtv',
				amount : 8690804217633215273,
			),
		),
		max_tip_amount : -4762720838096360356,
		suggested_tip_amounts : array(-8120559302574677342),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 89,
	),
	info : $client->paymentRequestedInfo(
		name : 'kIDAro7OTsbRjUZQ',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : 'ZBxY97iLTmCVfv51',
			street_line2 : '1jPJGiXuSUk34eF2',
			city : '2WyXiwCre7HRTbFu',
			state : 'nitqPZAa0GWsDg8f',
			country_iso2 : 'r3CQ65Lm01EzbqBS',
			post_code : '7m3Aqje8ERCIvNPp',
		),
	),
	shipping : $client->shippingOption(
		id : 'ac5LGRhIfBmytxJ9',
		title : 'PIlbcRvm4V3Nk57U',
		prices : array(
			$client->labeledPrice(
				label : '8d7CJspgIKPfxctl',
				amount : 2835142522339121550,
			),
		),
	),
	tip_amount : 8584324976945719369,
	currency : 'R5JPvcBYeKAVnl18',
	total_amount : -2206300989608763143,
	credentials_title : 'kGjOZyQ2CWq0zEer',
	users : array(
		$client->userEmpty(
			id : 8434747133572127686,
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
			id : -8489598962668150768,
			access_hash : 6656193210010334813,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 18,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Hi7PRaebI2E9Glpw',
					reason : 'KrPJ1EaToxUmpcnt',
					text : 'pexyTf4LDGH8dlck',
				),
			),
			bot_inline_placeholder : 'Y74HeEVl5Fyc6gnB',
			lang_code : 'zShEes3196CYXJTf',
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
				max_id : 41,
			),
			color : $client->peerColor(
				color : 66,
				background_emoji_id : 6180927384711110582,
			),
			profile_color : $client->peerColor(
				color : 44,
				background_emoji_id : 2979922004976309952,
			),
			bot_active_users : 92,
			bot_verification_icon : -4821988892352570730,
			send_paid_messages_stars : -5907484274113657785,
		),
	),
);
```