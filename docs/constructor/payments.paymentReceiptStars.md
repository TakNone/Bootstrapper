# payments.paymentReceiptStars

**Description** : *Receipt for payment made using Telegram Stars*

**Layer** : 211

```tl
payments.paymentReceiptStars#dabbf83a flags:# date:int bot_id:long title:string description:string photo:flags.2?WebDocument invoice:Invoice currency:string total_amount:long transaction_id:string users:Vector<User> = payments.PaymentReceipt;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>date</mark> | [`int`](type/int) | Date of generation |
| <mark>bot_id</mark> | [`long`](type/long) | Bot ID |
| <mark>title</mark> | [`string`](type/string) | Title |
| <mark>description</mark> | [`string`](type/string) | Description |
| **photo** | [`flags.2?WebDocument`](type/WebDocument) | Product photo |
| <mark>invoice</mark> | [`Invoice`](type/Invoice) | Invoice |
| <mark>currency</mark> | [`string`](type/string) | Currency, always XTR |
| <mark>total_amount</mark> | [`long`](type/long) | Amount of Telegram Stars |
| <mark>transaction_id</mark> | [`string`](type/string) | Transaction ID |
| <mark>users</mark> | [`Vector<User>`](type/User) | Info about users mentioned in the other fields |

---

## Type

[payments.PaymentReceipt](type/payments.PaymentReceipt)

---

## Example

```php
$paymentsPaymentReceipt = $client->payments->paymentReceiptStars(
	date : 8,
	bot_id : 906383000032894452,
	title : 'iMh5Krnxv7ARVLYZ',
	description : 'x6He0Gu91KwcRT4N',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -2099969290308737782,
		size : 64,
		mime_type : '1nKAImd3tSEZjeDy',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 42,
				h : 50,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'ORNI23fVizjGK9cd',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -1042546.16015625,
				w : 31,
				h : 3,
				preload_prefix_size : 23,
				video_start_ts : 63153.22265625,
				video_codec : 'HzM7E6R1qIkfrDKv',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 2,
				title : '4O3vhB8rjTdJbMUG',
				performer : 'qEmLC0kN9zyVY1hU',
				waveform : '?)S?LiveProto??',
			),
			$client->documentAttributeFilename(
				file_name : '0tvORzyl7WBgSJNs',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'sKky3DOGEvbnWYU2',
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
		currency : 'oZa93DUKTV7ksEQh',
		prices : array(
			$client->labeledPrice(
				label : 'vhKgO0FG2b3pnXU9',
				amount : -6758869622062604237,
			),
		),
		max_tip_amount : 7322512018931841734,
		suggested_tip_amounts : array(2877225312207336325),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 76,
	),
	currency : 'BJoD0C8Ga3rEXSgc',
	total_amount : -2061555884913344677,
	transaction_id : 'EjchO2Iq1oyC8PBZ',
	users : array(
		$client->userEmpty(
			id : -7914703613942841648,
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
			id : 8849659046700440344,
			access_hash : 402197315044737577,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 13,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'l7DNuSaGY5hbwngM',
					reason : 'MlVB4q1LFpX3dvUe',
					text : '3Qog7CyNfKZ0H8jP',
				),
			),
			bot_inline_placeholder : 'RuByidqCJ1389D5U',
			lang_code : 'vsgNKVny8jEd5Z3b',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 66,
			color : $client->peerColor(
				color : 42,
				background_emoji_id : 7823261338307699356,
			),
			profile_color : $client->peerColor(
				color : 5,
				background_emoji_id : 2763790212703636417,
			),
			bot_active_users : 44,
			bot_verification_icon : 8342945808693524900,
			send_paid_messages_stars : 614610200325139842,
		),
	),
);
```