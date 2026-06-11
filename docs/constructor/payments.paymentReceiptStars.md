# payments.paymentReceiptStars

**Description** : *Receipt for payment made using Telegram Stars*

**Layer** : 227

```tl
payments.paymentReceiptStars#dabbf83a flags:# date:int bot_id:long title:string description:string photo:flags.2?WebDocument invoice:Invoice currency:string total_amount:long transaction_id:string users:Vector<User> = payments.PaymentReceipt;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	date : 100,
	bot_id : -2836426479983112546,
	title : 'H2qMpGIQY0lonZvc',
	description : 'KTMdeZfWGU5Xs4v3',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -976593594678284599,
		size : 95,
		mime_type : 'uV5AZ1sGejHUB748',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 24,
				h : 67,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : '08Jz23UpklZ7XgD9',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 68,
					x : 185593.23046875,
					y : -1660713.2578125,
					zoom : 1239773.189453125,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1622258.7099609375,
				w : 86,
				h : 65,
				preload_prefix_size : 100,
				video_start_ts : 717153.7841796875,
				video_codec : 'uifsTEq805jra2dM',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 71,
				title : 'iSktAFuEmO5K3lwH',
				performer : '8nuMwx2ZsFNE15Qk',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'jvh6IXOCmoiB3Pkc',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 't4kARcYbQoXa0VGq',
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
		currency : '89qaYctQLFWSx0N2',
		prices : array(
			$client->labeledPrice(
				label : 'pVOnlqvrETHBmgsy',
				amount : -2930385690309195888,
			),
		),
		max_tip_amount : -3400932309238064841,
		suggested_tip_amounts : array(4049004773556650305),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 29,
	),
	currency : 'cQb5jxZtR0M17IoG',
	total_amount : 8555117076378021415,
	transaction_id : 'OlFLno5cv70JshWG',
	users : array(
		$client->userEmpty(
			id : -6237269470860148866,
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
			id : 2579675456387319027,
			access_hash : -8513669026989019421,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 49,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'tC5duYPkAsDR01Ux',
					reason : 'd30IMBWEuxQUm2jA',
					text : '49MpxdkNGRrTzBoH',
				),
			),
			bot_inline_placeholder : 'THAtFq0sGW1Vgm63',
			lang_code : 'gICKhBOVFZJa3cE6',
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
				color : 100,
				background_emoji_id : 4100512304683154083,
			),
			profile_color : $client->peerColor(
				color : 26,
				background_emoji_id : 4967609209220804906,
			),
			bot_active_users : 12,
			bot_verification_icon : -3605599027868047139,
			send_paid_messages_stars : -4212422425340425336,
		),
	),
);
```