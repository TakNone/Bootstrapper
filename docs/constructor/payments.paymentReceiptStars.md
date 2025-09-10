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
	date : 63,
	bot_id : 3025572150532923489,
	title : 'PfHiS3KN57p60l4G',
	description : 'BVKsXzrm3R0gUx1F',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 8933191407169375720,
		size : 44,
		mime_type : 'bMlEw9UPB0zpfTye',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 66,
				h : 20,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'uhMD9HG3L42i8oOK',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -1781958.080078125,
				w : 21,
				h : 2,
				preload_prefix_size : 1,
				video_start_ts : -235227.3984375,
				video_codec : 'rJAW7fYiUbm6cywq',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 71,
				title : 'nUbwBgyQCLShW6ap',
				performer : 'fEG5nhATDYbJp7Vu',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'JXLu08bBxS2vQ5da',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'RK5QOEB1SJulascU',
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
		currency : 'FqvPt01TZ5wBHfRs',
		prices : array(
			$client->labeledPrice(
				label : 'DG7udjsqw6YaPHIT',
				amount : -8072232747262283310,
			),
		),
		max_tip_amount : 8203177300382545491,
		suggested_tip_amounts : array(-4139074277259052950),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 2,
	),
	currency : 'nFY1xLdRuJVHGoXI',
	total_amount : 1696998066597586564,
	transaction_id : 'JV4jHX6uvOoSRKi0',
	users : array(
		$client->userEmpty(
			id : 7803489450021947281,
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
			id : -7316285421045825856,
			access_hash : 5046859443879657644,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 84,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'QSCUbflRjNrIHa8X',
					reason : 'BkfryO4u3QNHjv91',
					text : 'grSdsRojw5El1ceu',
				),
			),
			bot_inline_placeholder : 'eG5BPo1pZURLJdrX',
			lang_code : 'CqoxT1drMBFv83AZ',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 10,
			color : $client->peerColor(
				color : 75,
				background_emoji_id : -1015447394025102782,
			),
			profile_color : $client->peerColor(
				color : 58,
				background_emoji_id : -7577581733542919852,
			),
			bot_active_users : 3,
			bot_verification_icon : 633782203238774356,
			send_paid_messages_stars : 5209903855599846805,
		),
	),
);
```