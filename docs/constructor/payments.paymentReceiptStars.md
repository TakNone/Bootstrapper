# payments.paymentReceiptStars

**Description** : *Receipt for payment made using Telegram Stars*

**Layer** : 218

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
	date : 94,
	bot_id : -6713206208523418787,
	title : 'REDQeTm8WNUoOwcF',
	description : 'e7cWrnmAzIu4OPCD',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -8462471581812619963,
		size : 53,
		mime_type : 'utfTJBl4K1UiNxzH',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 8,
				h : 29,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : '2WTL0MdlIK1CSpxZ',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 3,
					x : -2057116.40234375,
					y : -919481.5830078125,
					zoom : -2034284.2646484375,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -1740112.681640625,
				w : 29,
				h : 1,
				preload_prefix_size : 28,
				video_start_ts : -1794251.662109375,
				video_codec : 'Di4IEAYJw2ONKhzx',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 28,
				title : 'ev06SaoGfMitOBXD',
				performer : 'Cn7RdmrPwvDfck9A',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'TjdwcWApPXqYtGoC',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'bsoDYhTSnIkeGRu8',
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
		currency : 'N0lSqtAzdnrIFiah',
		prices : array(
			$client->labeledPrice(
				label : 'E3lFeTwUj7AgWryf',
				amount : -6739640078822936593,
			),
		),
		max_tip_amount : 8073836754722134589,
		suggested_tip_amounts : array(5522756138165239468),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 13,
	),
	currency : '9Txs0puivJ2KfBtQ',
	total_amount : 474330490820095217,
	transaction_id : 'CiDtIxfm2urUFP73',
	users : array(
		$client->userEmpty(
			id : 4307746315445826281,
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
			id : 2974513271393731543,
			access_hash : -7993632714322455830,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 70,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'wBUug1Rm63PX2HCx',
					reason : '5hHrTmAiXVnxpfaB',
					text : 'cyItfvb46E8d3Hrm',
				),
			),
			bot_inline_placeholder : 'FL2vsoryAS9fRphY',
			lang_code : 'KwGp1PUrbtsD7IHi',
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
				max_id : 46,
			),
			color : $client->peerColor(
				color : 3,
				background_emoji_id : -6817210878387922876,
			),
			profile_color : $client->peerColor(
				color : 51,
				background_emoji_id : 4284310128208037344,
			),
			bot_active_users : 18,
			bot_verification_icon : 2636645763149135838,
			send_paid_messages_stars : -2133179227289705504,
		),
	),
);
```