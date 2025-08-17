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
	form_id : 4348079661114928129,
	bot_id : 330724586365256393,
	title : 'UzAeWrhnK90oD5PV',
	description : 'J2tivcZaOXFQLAns',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 8890553269482706813,
		size : 100,
		mime_type : 'AReDZYahB1Szxbt3',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 75,
				h : 80,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : '0Q2KYXJOapABibRh',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 129706.0126953125,
				w : 12,
				h : 84,
				preload_prefix_size : 95,
				video_start_ts : 1781795.9716796875,
				video_codec : 'HcGEJ4k0hCAsy2f9',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 74,
				title : 'nMJ7EZ0LygTFciW6',
				performer : 'J3fpC5TURzydDVcg',
				waveform : '݆?LiveProtoz??i?',
			),
			$client->documentAttributeFilename(
				file_name : 'nNwPQtK4dsoHIJZ0',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'oKH31wSadycxMlPV',
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
		currency : 'jBQHhfgJDtz4oKOP',
		prices : array(
			$client->labeledPrice(
				label : 'KnFMGyvlH35ACrU9',
				amount : 6837851660730754011,
			),
		),
		max_tip_amount : 5890919251668280895,
		suggested_tip_amounts : array(-5510276495598016368),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 15,
	),
	provider_id : -5829312407631090493,
	url : 'https://docs.liveproto.dev',
	native_provider : 'tqf2UcokjvNxdA31',
	native_params : $client->dataJSON(
		data : '8UWdxVJEfXjtS95g',
	),
	additional_methods : array(
		$client->paymentFormMethod(
			url : 'https://docs.liveproto.dev',
			title : '2NW9xgG7qAH18Ehw',
		),
	),
	saved_info : $client->paymentRequestedInfo(
		name : 'qgL0oRPKwySlTBQn',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : 'q7kTO143nclA9VrY',
			street_line2 : 'tAmI2Dcfuhsdj50F',
			city : 'u7PVmaUrEAD65TGn',
			state : 'CA6n29dqRU3PK8i7',
			country_iso2 : '01tkXgPEAdfihozL',
			post_code : '4i7K9w01MgkmTN8c',
		),
	),
	saved_credentials : array(
		$client->paymentSavedCredentialsCard(
			id : 'ULBpiIZkw3OMl9y2',
			title : 'oM8J0jQAB7TbtWOS',
		),
	),
	users : array(
		$client->userEmpty(
			id : 3260370613492997948,
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
			id : 2907543586502301059,
			access_hash : -6499822030463979784,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 21,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'glsz3OV2vLoNYdA1',
					reason : 'VMiX5vnHD9uGUEJk',
					text : 'Mk2wQ7erLqlXtB9n',
				),
			),
			bot_inline_placeholder : 'jhE8xHDeFgPmBlLd',
			lang_code : 'Z7Q9CuK4zXmqdDp2',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 96,
			color : $client->peerColor(
				color : 9,
				background_emoji_id : -1308301991639634345,
			),
			profile_color : $client->peerColor(
				color : 56,
				background_emoji_id : -2891969034986378039,
			),
			bot_active_users : 11,
			bot_verification_icon : 128877733743041195,
			send_paid_messages_stars : 6264433690738805648,
		),
	),
);
```