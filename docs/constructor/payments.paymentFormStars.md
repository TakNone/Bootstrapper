# payments.paymentFormStars

**Description** : *Represents a payment form, for payments to be using Telegram Stars, see here &raquo; for more info*

**Layer** : 211

```tl
payments.paymentFormStars#7bf6b15c flags:# form_id:long bot_id:long title:string description:string photo:flags.5?WebDocument invoice:Invoice users:Vector<User> = payments.PaymentForm;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	form_id : -6633093750176345708,
	bot_id : 7866629159875468255,
	title : '2PpDX3s1MVdeRU5C',
	description : '2RwTUx5GyonKVapd',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -4458999120891600295,
		size : 60,
		mime_type : '2xIf0RWShg7U3QLr',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 57,
				h : 34,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : '19RMFJlAVKW7tYCE',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1665077.693359375,
				w : 57,
				h : 94,
				preload_prefix_size : 99,
				video_start_ts : 52010.9677734375,
				video_codec : 'wKW0k19Ltn8GXCbh',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 3,
				title : 's3bX2a6GugSFqork',
				performer : 'p3hGzmlRifg15tsW',
				waveform : 'yH??LiveProto?q?Q?',
			),
			$client->documentAttributeFilename(
				file_name : 'yfaKuS2HhqxA56EJ',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'AC4upq9LyNe0QrVK',
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
		currency : 'EgiSvuVnMAxZOoDC',
		prices : array(
			$client->labeledPrice(
				label : 'Qd89Nv7t0o3PXBVp',
				amount : -8527785229127839549,
			),
		),
		max_tip_amount : -6065968414558220597,
		suggested_tip_amounts : array(-7761109730824441509),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 87,
	),
	users : array(
		$client->userEmpty(
			id : -1813712617859985894,
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
			id : -5283775353619008976,
			access_hash : -2855568082687183492,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 33,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '7IqXGH1SkdUebaP0',
					reason : 'eWAHq4y0TVNzhXtE',
					text : 'KBUjSgAEoTvriy2n',
				),
			),
			bot_inline_placeholder : 'txsKLP4RTfMco0kH',
			lang_code : 'tH3GjFW2acNALhQ0',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 87,
			color : $client->peerColor(
				color : 95,
				background_emoji_id : -3632629590129570905,
			),
			profile_color : $client->peerColor(
				color : 13,
				background_emoji_id : -6930301747933173167,
			),
			bot_active_users : 28,
			bot_verification_icon : 7196231682706116132,
			send_paid_messages_stars : 2481404930518334838,
		),
	),
);
```