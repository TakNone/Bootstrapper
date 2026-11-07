# payments.paymentFormStars

**Description** : *Represents a payment form, for payments to be using Telegram Stars, see here &raquo; for more info*

**Layer** : 229

```tl
payments.paymentFormStars#7bf6b15c flags:# form_id:long bot_id:long title:string description:string photo:flags.5?WebDocument invoice:Invoice users:Vector<User> = payments.PaymentForm;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	form_id : -1968585754082215375,
	bot_id : 8450527427433175360,
	title : 'zKBa9UgTZIGdtVNo',
	description : 'T7IpwujgSEKDxbdA',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -4272273267276308247,
		size : 86,
		mime_type : 'muFKwdvsPjMEAV2W',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 87,
				h : 18,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'HD0fnEJu14wLp6Ul',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 93,
					x : -2089749.607421875,
					y : -863181.6796875,
					zoom : -1397541.4970703125,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 804445.994140625,
				w : 75,
				h : 91,
				preload_prefix_size : 4,
				video_start_ts : 1447893.83203125,
				video_codec : '5e0tGoOkxwmlpW48',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 31,
				title : 'AMYCseQyEJWkB61K',
				performer : 'UvTCExnGaJt8oS0d',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'rJpj7wOXtL30VZdz',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'hEGrsluegaMVScHJ',
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
		currency : 'xvy6JhKiUu9XzsCW',
		prices : array(
			$client->labeledPrice(
				label : 'yYHENMOancljA4gm',
				amount : 505763061758380578,
			),
		),
		max_tip_amount : -3625851855557988566,
		suggested_tip_amounts : array(-5481930624493486588),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 73,
	),
	users : array(
		$client->userEmpty(
			id : 5571983731605135932,
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
			id : 4302267119853216288,
			access_hash : 3858946808348001467,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 56,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'souvfy4QrXq7HIPi',
					reason : 'QAjLmkVuloYC5IJv',
					text : 'RcDQK6IvX34JNx1r',
				),
			),
			bot_inline_placeholder : 'hGoTLtK0Xf1U4anS',
			lang_code : '0keYdnsO3tvGSfjM',
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
				max_id : 34,
			),
			color : $client->peerColor(
				color : 87,
				background_emoji_id : -5725684599673796353,
			),
			profile_color : $client->peerColor(
				color : 24,
				background_emoji_id : 4573612199108419752,
			),
			bot_active_users : 2,
			bot_verification_icon : 2422829100963644978,
			send_paid_messages_stars : -1794333796537973208,
			linked_community_id : -8910804132342605466,
		),
	),
);
```