# payments.paymentReceiptStars

**Description** : *Receipt for payment made using Telegram Stars*

**Layer** : 214

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
	date : 55,
	bot_id : -4472831492867380043,
	title : 'FKvN2cQXiAWB9zfb',
	description : 'w9n5ut3DoKbU7xmV',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -3156309596013674390,
		size : 17,
		mime_type : 'rvHnR1PoAITQ38up',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 74,
				h : 3,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'wtIv7DkW2q3cSxsJ',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -1986198.9404296875,
				w : 85,
				h : 57,
				preload_prefix_size : 72,
				video_start_ts : -314543.32421875,
				video_codec : 'dukeh57JztSY1rx9',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 18,
				title : 'ycjipbCBah7GzRwF',
				performer : '853gKOU0P1aB6kGZ',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'tjzO0fmHBSu2Nn6G',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : '5rLuiGAn3a7X9Chz',
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
		currency : 'jRAxenS5DmTiCqzb',
		prices : array(
			$client->labeledPrice(
				label : 'P9oeBhdgzQMa4pcI',
				amount : 7193088011249655264,
			),
		),
		max_tip_amount : 4972604360944214474,
		suggested_tip_amounts : array(4463327020570149568),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 46,
	),
	currency : 'AFPh6taYcZ7ivn4B',
	total_amount : 2863174121253783866,
	transaction_id : 'jzHcwFSfEIBthr3D',
	users : array(
		$client->userEmpty(
			id : 4206139783454524750,
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
			id : -5638489101185510326,
			access_hash : -6731784821577045077,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 16,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '2WS4e6xl35LmRZ9f',
					reason : 'BE2YT1bZDmJSWc7V',
					text : 'QbUHocSIdWOemuCx',
				),
			),
			bot_inline_placeholder : 'LzAXF3piKEsv46rH',
			lang_code : 'TfyIDbd0nBCV5NLr',
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
				color : 55,
				background_emoji_id : 5078560644884773969,
			),
			profile_color : $client->peerColor(
				color : 29,
				background_emoji_id : 7266716933983439508,
			),
			bot_active_users : 33,
			bot_verification_icon : 3317277846716815972,
			send_paid_messages_stars : 4546326767902715231,
		),
	),
);
```