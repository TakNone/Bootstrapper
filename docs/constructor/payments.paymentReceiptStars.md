# payments.paymentReceiptStars

**Description** : *Receipt for payment made using Telegram Stars*

**Layer** : 216

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
	date : 37,
	bot_id : -1213586806238220660,
	title : 'bU9jXo7EvaY2Gr5S',
	description : 'IvASCe1pxhTEOnKl',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 5149646579368840650,
		size : 28,
		mime_type : 'BvFNPx4w2X6G8eUp',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 67,
				h : 49,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'nJcpCZ48rjM1KfXW',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 515013.3193359375,
				w : 67,
				h : 32,
				preload_prefix_size : 58,
				video_start_ts : -1504840.8291015625,
				video_codec : 'dUgOtqBTkWmJshxb',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 74,
				title : 'R1au3goPrJH9xZME',
				performer : 'lvdTgoIZxUYfn2Kb',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'P6ofgb4YsIpdRkVF',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'Dz1TFGSQYrMLBgtI',
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
		currency : '9Sm8rYMZnkDl4c7U',
		prices : array(
			$client->labeledPrice(
				label : 'VBTeUx4jfN6da5kp',
				amount : 8373267286438169776,
			),
		),
		max_tip_amount : -6525479228019612059,
		suggested_tip_amounts : array(-5583647818749338328),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 98,
	),
	currency : 'GIkx4zLg05CvaJOQ',
	total_amount : -6405189295397201979,
	transaction_id : 'SFYBtQyOzXecEfaU',
	users : array(
		$client->userEmpty(
			id : 4578689464044929207,
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
			id : 1534555798515661528,
			access_hash : 5953658693634930102,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 71,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '0kNqnhwpQH9MDtYz',
					reason : 'JlgypH8YMFW0LsRo',
					text : '4lNG2Hoe8YdqiPIt',
				),
			),
			bot_inline_placeholder : 'wEUp1a0Jr5FNHGt2',
			lang_code : 'N360jikDLI8HTaFv',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 0,
			color : $client->peerColor(
				color : 45,
				background_emoji_id : 6124255060176399829,
			),
			profile_color : $client->peerColor(
				color : 10,
				background_emoji_id : 7637422271585796113,
			),
			bot_active_users : 52,
			bot_verification_icon : -5393748492849285382,
			send_paid_messages_stars : 6955556505668674332,
		),
	),
);
```