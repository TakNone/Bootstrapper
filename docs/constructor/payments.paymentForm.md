# payments.paymentForm

**Description** : *Payment form*

**Layer** : 211

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
	form_id : 7736927501870799599,
	bot_id : -2793234518313587578,
	title : 'uYXROkFhvPHgwsNV',
	description : 'VLDM7AYe4k0Kmso8',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 566502378442865866,
		size : 58,
		mime_type : 'lZc6JAQLpygj0dGa',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 73,
				h : 43,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'P0KUlnsROqm7JEFZ',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -788495.0986328125,
				w : 86,
				h : 49,
				preload_prefix_size : 0,
				video_start_ts : -210350.7705078125,
				video_codec : 'ErANdV6KwvjWGgXl',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 79,
				title : 'jUwHCgB6DZeAWuEV',
				performer : '4IlLSa9k52NtbuZE',
				waveform : 'on_?LiveProtoT?E2?',
			),
			$client->documentAttributeFilename(
				file_name : 'Ofw9mqXrDjLvd2RV',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'njd8PXFxtC4LKaGS',
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
		currency : 'MnsjyUrOS5RecpfN',
		prices : array(
			$client->labeledPrice(
				label : 'EFlNjIQdi9tU1P3Y',
				amount : 7504980309561861582,
			),
		),
		max_tip_amount : -4977163064096988240,
		suggested_tip_amounts : array(-3648025340466396365),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 29,
	),
	provider_id : 9180080315056646989,
	url : 'https://docs.liveproto.dev',
	native_provider : 'nYQBhztXfxbZ0l8q',
	native_params : $client->dataJSON(
		data : 'QplOW5FvE2UGAcr7',
	),
	additional_methods : array(
		$client->paymentFormMethod(
			url : 'https://docs.liveproto.dev',
			title : 'CyGQJFwq9IUMsh4D',
		),
	),
	saved_info : $client->paymentRequestedInfo(
		name : 'PIwbCOyz946ro2Av',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : 'yuJzFOSWYsXkfD59',
			street_line2 : 't8qj0hzCHaFD5o9I',
			city : 'u0k1ApFPv2YUaw73',
			state : 'CHx9LZGJE1kXm2jg',
			country_iso2 : 'dNfB1gp50QU6nvhL',
			post_code : '08mjbLZJAXftanIo',
		),
	),
	saved_credentials : array(
		$client->paymentSavedCredentialsCard(
			id : 'sYOISkrBgWcRQ3bx',
			title : 'OKw5rbWAc37iEFVg',
		),
	),
	users : array(
		$client->userEmpty(
			id : 9197368909547801762,
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
			id : 6405775510543242083,
			access_hash : -4602480687679381278,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 68,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'EGK8Zd6kvx4T7pMY',
					reason : 'NiGJesCmwIEjcT4v',
					text : 'GigkxTOCdo9tSamn',
				),
			),
			bot_inline_placeholder : 'QpwyWh29fo1g6Tn7',
			lang_code : 'cWSg9pd3C5iFlYLx',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 63,
			color : $client->peerColor(
				color : 83,
				background_emoji_id : -8113849708322399775,
			),
			profile_color : $client->peerColor(
				color : 50,
				background_emoji_id : -2772464753688971773,
			),
			bot_active_users : 12,
			bot_verification_icon : 3797899660127766813,
			send_paid_messages_stars : -4779908461206278673,
		),
	),
);
```