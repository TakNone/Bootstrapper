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
	date : 12,
	bot_id : -1213191289892591779,
	title : 'lnU9ZaPxgyeV7rQc',
	description : 'YgboSTAQwJXyWHKD',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -6973957569473659337,
		size : 95,
		mime_type : 'Uhona5pLtN9JPzuK',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 84,
				h : 95,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'jzk8i35xoXOlPYwd',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 75,
					x : 1831959.6552734375,
					y : -1294309.8203125,
					zoom : -347079.5703125,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -1544361.0126953125,
				w : 48,
				h : 24,
				preload_prefix_size : 74,
				video_start_ts : -617462.259765625,
				video_codec : 'rWoV9k6QBqSnPMYH',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 56,
				title : 'wspOMLb5e1698Yug',
				performer : 'RW45SQ8P7jvECyZY',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'lVRNC4S7dHmK5Pj2',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'S8LRrEIm4JPajpQ6',
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
		currency : 'vXxBk4l09ahtOPfD',
		prices : array(
			$client->labeledPrice(
				label : '21BloEhFuXGUOLV5',
				amount : 1401976180248456096,
			),
		),
		max_tip_amount : -4391649648126953061,
		suggested_tip_amounts : array(-7397531440535879102),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 55,
	),
	currency : '3ejmxwhBlfSUT104',
	total_amount : 1116486899358104931,
	transaction_id : 'YftC7eIvxX4KniPB',
	users : array(
		$client->userEmpty(
			id : 5271828015052589334,
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
			id : -9140282270395941957,
			access_hash : -4132043858076810171,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 68,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'hJ7B9NoZsDqT1Q0z',
					reason : 'R7CxTQGqKIoV1Up3',
					text : 'SCklYZKB3ugAGFhe',
				),
			),
			bot_inline_placeholder : 'gvlDnMiT75QRYGPO',
			lang_code : 'Zw7lLsTjbuOPnqiz',
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
				max_id : 63,
			),
			color : $client->peerColor(
				color : 23,
				background_emoji_id : -2923587488181119912,
			),
			profile_color : $client->peerColor(
				color : 89,
				background_emoji_id : 7633872255640133170,
			),
			bot_active_users : 33,
			bot_verification_icon : 419925138953287341,
			send_paid_messages_stars : 2208245255272413128,
		),
	),
);
```