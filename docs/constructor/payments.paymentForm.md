# payments.paymentForm

**Description** : *Payment form*

**Layer** : 218

```tl
payments.paymentForm#a0058751 flags:# can_save_credentials:flags.2?true password_missing:flags.3?true form_id:long bot_id:long title:string description:string photo:flags.5?WebDocument invoice:Invoice provider_id:long url:string native_provider:flags.4?string native_params:flags.4?DataJSON additional_methods:flags.6?Vector<PaymentFormMethod> saved_info:flags.0?PaymentRequestedInfo saved_credentials:flags.1?Vector<PaymentSavedCredentials> users:Vector<User> = payments.PaymentForm;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	form_id : -1666508638947663027,
	bot_id : 8763978151704147566,
	title : 'CoRZSAjp93Uz8VbX',
	description : 'e5XUK9G41VbaHCop',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 7096500105520265813,
		size : 86,
		mime_type : 'B6uCs7SyAOJZlhLi',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 34,
				h : 64,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'egM83ibz5PWrCkf7',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 41,
					x : -734746.197265625,
					y : -758886.109375,
					zoom : 86664.310546875,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 831164.6640625,
				w : 90,
				h : 86,
				preload_prefix_size : 56,
				video_start_ts : -548968.2119140625,
				video_codec : 'Pwe3JOyNvh8LaAzm',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 61,
				title : 'QaSgfs7pTG0BLK3h',
				performer : 'YAds6GgbLQ8mtn0p',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'XJA9xkSNOFGHP3uE',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'ghmLSaew0QXtEb5k',
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
		currency : 'mBCEjSxkJWtaNUyb',
		prices : array(
			$client->labeledPrice(
				label : 'hfUJZ2Yc5tCDNHTA',
				amount : -7061828971041417505,
			),
		),
		max_tip_amount : 287175958719818218,
		suggested_tip_amounts : array(4408267453889143833),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 24,
	),
	provider_id : -6218735515537956636,
	url : 'https://docs.liveproto.dev',
	native_provider : '3CSrm0qDEbWg6Bx9',
	native_params : $client->dataJSON(
		data : '35nRbvQomPKH0kD2',
	),
	additional_methods : array(
		$client->paymentFormMethod(
			url : 'https://docs.liveproto.dev',
			title : 'ih5qIcbt4eCogpFD',
		),
	),
	saved_info : $client->paymentRequestedInfo(
		name : 'iRfBrOMaP31Wb9t2',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : 'VvkoFOWr2Y130Q5L',
			street_line2 : 'MfzIRXxOSBjaoYbp',
			city : 'RGmPciEroM29Qpqe',
			state : 'K2YixqTCLe1l5uNc',
			country_iso2 : 'j4Cph7xkKYMJR2s5',
			post_code : 'qGCHVR6g8N43AQIY',
		),
	),
	saved_credentials : array(
		$client->paymentSavedCredentialsCard(
			id : 'vuwOEreycRXQ8TfH',
			title : '1zPUOxAGcfTojk2t',
		),
	),
	users : array(
		$client->userEmpty(
			id : 3708301673950421406,
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
			id : -1632035448684557269,
			access_hash : -3782455323169092984,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 68,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '06makGyBJefA1w8d',
					reason : '9tce4dfRHjsTX3BU',
					text : 'qmvsPJ5i7ax4UItX',
				),
			),
			bot_inline_placeholder : 'pjIEwgYPJDVBFqxl',
			lang_code : 'Mni8AwbQ041B2PZO',
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
				max_id : 62,
			),
			color : $client->peerColor(
				color : 66,
				background_emoji_id : -6068528125758887703,
			),
			profile_color : $client->peerColor(
				color : 21,
				background_emoji_id : 8419401885906026066,
			),
			bot_active_users : 30,
			bot_verification_icon : 8929804860741019651,
			send_paid_messages_stars : 9198057858501226523,
		),
	),
);
```