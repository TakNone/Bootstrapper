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
	date : 88,
	bot_id : -7952443042699816982,
	title : 'LIm6U0f2bOk3G4gZ',
	description : 'qRZ53Dl2Qcp1yfYH',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 547600960786407343,
		size : 34,
		mime_type : 'Af30B4pEahj75TeW',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 41,
				h : 56,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : '4mcJi0ZBj7KzwTvh',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 98073.8779296875,
				w : 22,
				h : 2,
				preload_prefix_size : 82,
				video_start_ts : -869950.361328125,
				video_codec : 'asVpX8cPt7Fil53Z',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 24,
				title : 'YSDiXJGhFMv3TqNy',
				performer : '7i2HYIkoBnqx1gZP',
				waveform : '?{?F?LiveProto1r??}',
			),
			$client->documentAttributeFilename(
				file_name : '8pZwIeSY9CFEybNT',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'onxTDVqYMZc9R2gE',
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
		currency : 'YsuJBate0rF3oWgd',
		prices : array(
			$client->labeledPrice(
				label : 'qieLNmvzno5V3BaA',
				amount : 723801919881258830,
			),
		),
		max_tip_amount : -5295496292086803524,
		suggested_tip_amounts : array(-3593295629935299475),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 28,
	),
	currency : 'NTp6gVLlc2kmYfIW',
	total_amount : 7060498429152766494,
	transaction_id : 'MvTrs3eapQAP9CLm',
	users : array(
		$client->userEmpty(
			id : -1989795322668726349,
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
			id : -7456557058205273126,
			access_hash : -4580148841249417042,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 50,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'eD89MLNTZp4xOFv6',
					reason : 'nXKqxVTCLspBafve',
					text : 'l1tFHiUSbNyOBkCz',
				),
			),
			bot_inline_placeholder : 'XqW8DBj2IROlJ04r',
			lang_code : '1xsh56LAUnYpOBZ0',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 25,
			color : $client->peerColor(
				color : 31,
				background_emoji_id : 6108942020664985965,
			),
			profile_color : $client->peerColor(
				color : 76,
				background_emoji_id : 6800281772187800941,
			),
			bot_active_users : 72,
			bot_verification_icon : -1669422468316414859,
			send_paid_messages_stars : -2483549728244645401,
		),
	),
);
```