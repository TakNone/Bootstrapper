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
	date : 44,
	bot_id : -3077000498367775409,
	title : 'lGDIWYnKjVSFu3Pt',
	description : 'O17B9WLQ2dR3VKpx',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -935358057966132018,
		size : 15,
		mime_type : 'ZSsRqXvdwjNBf7Jr',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 77,
				h : 75,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'HsZGwxYDtbJXTV1c',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 63,
					x : -1750447.5546875,
					y : 303766.0849609375,
					zoom : -1629684.044921875,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -418927.96484375,
				w : 23,
				h : 89,
				preload_prefix_size : 20,
				video_start_ts : -291664.6982421875,
				video_codec : 'rzjATtuUymNI2hER',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 49,
				title : '23tbXy796QAeTdHO',
				performer : '0XxcRrHF2mlAvYwU',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'bILBZXmErqO2pQFP',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : '9EKkmdPs0h1pqrMx',
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
		currency : 'tQVyR91zeGOi3UWX',
		prices : array(
			$client->labeledPrice(
				label : 'TtXL4N5JSkrZmFwH',
				amount : -6936033073147926314,
			),
		),
		max_tip_amount : -6871547001568179310,
		suggested_tip_amounts : array(-6479259179025441656),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 76,
	),
	currency : '7IjJwHfAtlcW5koY',
	total_amount : 1357410512147274297,
	transaction_id : 'sMceF37Dmvql0UBa',
	users : array(
		$client->userEmpty(
			id : -4335344113664049549,
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
			id : -927013300211434114,
			access_hash : -8492016846905609257,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 5,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'IzgeUcXJNCFr07Mt',
					reason : 'yWdgwfbT5hkDaMUH',
					text : 'JbI0Avg8k21Szp5U',
				),
			),
			bot_inline_placeholder : 'xrOYk0o1Ea8scQ2C',
			lang_code : 'PXoWYj3TNp1OlRzD',
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
				max_id : 75,
			),
			color : $client->peerColor(
				color : 74,
				background_emoji_id : -5936869217382969002,
			),
			profile_color : $client->peerColor(
				color : 21,
				background_emoji_id : -3299273692753627909,
			),
			bot_active_users : 13,
			bot_verification_icon : 3594064992449193316,
			send_paid_messages_stars : 6084341744104109182,
		),
	),
);
```