# payments.paymentForm

**Description** : *Payment form*

**Layer** : 222

```tl
payments.paymentForm#a0058751 flags:# can_save_credentials:flags.2?true password_missing:flags.3?true form_id:long bot_id:long title:string description:string photo:flags.5?WebDocument invoice:Invoice provider_id:long url:string native_provider:flags.4?string native_params:flags.4?DataJSON additional_methods:flags.6?Vector<PaymentFormMethod> saved_info:flags.0?PaymentRequestedInfo saved_credentials:flags.1?Vector<PaymentSavedCredentials> users:Vector<User> = payments.PaymentForm;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **can_save_credentials** | [`flags.2?true`](type/true) | Whether the user can choose to save credentials |
| **password_missing** | [`flags.3?true`](type/true) | Indicates that the user can save payment credentials, but only after setting up a 2FA password (currently the account doesn't have a 2FA password) |
| <mark>form_id</mark> | [`long`](type/long) | Form ID |
| <mark>bot_id</mark> | [`long`](type/long) | Bot ID |
| <mark>title</mark> | [`string`](type/string) | Form title |
| <mark>description</mark> | [`string`](type/string) | Description |
| **photo** | [`flags.5?WebDocument`](type/WebDocument) | Product photo |
| <mark>invoice</mark> | [`Invoice`](type/Invoice) | Invoice |
| <mark>provider_id</mark> | [`long`](type/long) | Payment provider ID |
| <mark>url</mark> | [`string`](type/string) | Payment form URL |
| **native_provider** | [`flags.4?string`](type/string) | Payment provider name.One of the following:- stripe |
| **native_params** | [`flags.4?DataJSON`](type/DataJSON) | Contains information about the payment provider, if available, to support it natively without the need for opening the URL.A JSON object that can contain the following fields:- apple_pay_merchant_id: Apple Pay merchant ID- google_pay_public_key: Google Pay public key- need_country: True, if the user country must be provided,- need_zip: True, if the user ZIP/postal code must be provided,- need_cardholder_name: True, if the cardholder name must be provided |
| **additional_methods** | [`flags.6?Vector<PaymentFormMethod>`](type/PaymentFormMethod) | Additional payment methods |
| **saved_info** | [`flags.0?PaymentRequestedInfo`](type/PaymentRequestedInfo) | Saved server-side order information |
| **saved_credentials** | [`flags.1?Vector<PaymentSavedCredentials>`](type/PaymentSavedCredentials) | Contains information about saved card credentials |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users |

---

## Type

[payments.PaymentForm](type/payments.PaymentForm)

---

## Example

```php
$paymentsPaymentForm = $client->payments->paymentForm(
	can_save_credentials : true,
	password_missing : true,
	form_id : -3430404990794174414,
	bot_id : 6009019426384967464,
	title : '0kcvL5MjSexgrqwW',
	description : '1sKaXOAv6q98BhNG',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 1693024726777031600,
		size : 76,
		mime_type : 'GTXrEA2dIfUOwmkC',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 37,
				h : 15,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'LiGdEFpmjxZasND1',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 18,
					x : -1246084.6513671875,
					y : 1646358.3408203125,
					zoom : 1660142.46875,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -1856279.04296875,
				w : 6,
				h : 7,
				preload_prefix_size : 67,
				video_start_ts : -222466.5849609375,
				video_codec : 'JjkUd4rnhMbYHiwE',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 7,
				title : 'kl8F5aqDxpds7uTe',
				performer : '5s9Q8b2UXYVCx1zt',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'tbLjpXFiHeY971TO',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'Rwc8J9fFCsovDUOn',
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
		currency : 'bHNfu7tLJQCXPE2G',
		prices : array(
			$client->labeledPrice(
				label : '54l97XGIWDNfQAkn',
				amount : 3600771150244733302,
			),
		),
		max_tip_amount : -6527670301498624183,
		suggested_tip_amounts : array(4716553039305216635),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 87,
	),
	provider_id : 1747478920801165243,
	url : 'https://docs.liveproto.dev',
	native_provider : 'eFx1XWVJSZgRksqw',
	native_params : $client->dataJSON(
		data : 'UjfX8VgRP7xdFIQu',
	),
	additional_methods : array(
		$client->paymentFormMethod(
			url : 'https://docs.liveproto.dev',
			title : 'M9cO6Kwx4qkX3g2m',
		),
	),
	saved_info : $client->paymentRequestedInfo(
		name : 'JYBKSA7c3XGureTI',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : '9VqYcAmDTHfnaSo0',
			street_line2 : 'F2a8dcJxSiG0tPrv',
			city : 'CQyVPGsnBAK0b5DO',
			state : '9Fckeml3KZuMYHXg',
			country_iso2 : 'zKVrAhIivytQelFx',
			post_code : 'maWo2BvESw0uI8DF',
		),
	),
	saved_credentials : array(
		$client->paymentSavedCredentialsCard(
			id : 'LsFVIRohQ3mJCSHy',
			title : 'uX2Prslkf4W9MONa',
		),
	),
	users : array(
		$client->userEmpty(
			id : -1309891513890971033,
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
			id : 6280720297564486084,
			access_hash : 6227561872741527493,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 45,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'R7cNPbxLlXzg3YVS',
					reason : 'Feg1cWOhJZCHfSLu',
					text : 'oT7aGElRegcF6WAp',
				),
			),
			bot_inline_placeholder : 'tPVjufpesXIhi5ow',
			lang_code : 'ewTC4uXLsUpE5zqD',
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
				max_id : 94,
			),
			color : $client->peerColor(
				color : 78,
				background_emoji_id : -4314302716407445481,
			),
			profile_color : $client->peerColor(
				color : 80,
				background_emoji_id : 8078776850974569010,
			),
			bot_active_users : 32,
			bot_verification_icon : -9116858058152903349,
			send_paid_messages_stars : 7039459999474695101,
		),
	),
);
```