# payments.paymentFormStars

**Description** : *Represents a payment form, for payments to be using Telegram Stars, see here &raquo; for more info*

**Layer** : 214

```tl
payments.paymentFormStars#7bf6b15c flags:# can_save_credentials:flags.2?true password_missing:flags.3?true form_id:long bot_id:long title:string description:string photo:flags.5?WebDocument invoice:Invoice users:Vector<User> = payments.PaymentForm;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **can_save_credentials** | [`flags.2?true`](type/true) | NOTHING |
| **password_missing** | [`flags.3?true`](type/true) | NOTHING |
| <mark>form_id</mark> | [`long`](type/long) | Form ID |
| <mark>bot_id</mark> | [`long`](type/long) | Bot ID |
| <mark>title</mark> | [`string`](type/string) | Form title |
| <mark>description</mark> | [`string`](type/string) | Description |
| **photo** | [`flags.5?WebDocument`](type/WebDocument) | Product photo |
| <mark>invoice</mark> | [`Invoice`](type/Invoice) | Invoice |
| <mark>users</mark> | [`Vector<User>`](type/User) | Info about users mentioned in the other fields |

---

## Type

[payments.PaymentForm](type/payments.PaymentForm)

---

## Example

```php
$paymentsPaymentForm = $client->payments->paymentFormStars(
	can_save_credentials : true,
	password_missing : true,
	form_id : 2327995656143664624,
	bot_id : 6881089238503177344,
	title : '5J43AzncFPuCbelT',
	description : 'wKaq4FNBPElDc6vn',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 5389459621630487364,
		size : 97,
		mime_type : 'MlL0sOrvDIjcFwQi',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 25,
				h : 68,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : '2pw3tqguIms8Rf7X',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -1244083.666015625,
				w : 74,
				h : 36,
				preload_prefix_size : 8,
				video_start_ts : 1378081.6484375,
				video_codec : 'p52whSL9ACEOBxr3',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 18,
				title : 'P9dk7K0DMA1mXWTG',
				performer : 'MRlSjh8nLNpiItrv',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'UaIB1nbqiopOYed0',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'y9v2Jx8YgFLI3srG',
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
		currency : 'plYEhx5qO6jIw1go',
		prices : array(
			$client->labeledPrice(
				label : 'By1Xc047ikZPY9lt',
				amount : 4563154060685695614,
			),
		),
		max_tip_amount : -5103673460062981970,
		suggested_tip_amounts : array(1374599373317240694),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 12,
	),
	users : array(
		$client->userEmpty(
			id : -2601125114518005222,
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
			id : 4559509355468532689,
			access_hash : 190252178377441870,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 88,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'KCE3w140NSursQLc',
					reason : 'y6cqIFGxZ8TvRw75',
					text : '8PQMu6akY0JirRSd',
				),
			),
			bot_inline_placeholder : 'a9r0SqVME4TBDwpN',
			lang_code : '9TpWrI3PqJ5GFEx4',
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
				color : 40,
				background_emoji_id : 71127924093310232,
			),
			profile_color : $client->peerColor(
				color : 41,
				background_emoji_id : -2159251394654392995,
			),
			bot_active_users : 33,
			bot_verification_icon : -7830882003917953205,
			send_paid_messages_stars : 6665287269291886689,
		),
	),
);
```