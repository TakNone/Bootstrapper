# payments.paymentForm

**Description** : *Payment form*

**Layer** : 216

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
	form_id : -1877345252817497187,
	bot_id : 2599772532118565652,
	title : 'piJKZgPxHIQTEVF2',
	description : 'HDXsd3mi0tVrPjSq',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 3139332517908374862,
		size : 14,
		mime_type : 'Mx2DQvEHNO50sbXw',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 71,
				h : 29,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'fz7rNHYwAxU8hF64',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -1077160.63671875,
				w : 88,
				h : 17,
				preload_prefix_size : 46,
				video_start_ts : 1163439.7666015625,
				video_codec : '2suop4A1k7IMcez9',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 98,
				title : 'VmM6FSAtCc2hOkoQ',
				performer : 'fjs9IwUclZX30bov',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : '9SjvLn1D5zx7hJgb',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'zN5WkiecRVOPGnEg',
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
		currency : 'hHAZRxB8lCi9ywf7',
		prices : array(
			$client->labeledPrice(
				label : 'fcwHjh7F1MdR3Y6D',
				amount : 2044859444420538258,
			),
		),
		max_tip_amount : -2109338565479113678,
		suggested_tip_amounts : array(7855908792516879484),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 98,
	),
	provider_id : -1220115280409540046,
	url : 'https://docs.liveproto.dev',
	native_provider : 'svnGfLqED8dzUYpr',
	native_params : $client->dataJSON(
		data : 'LMzRn37lr4cUtKYG',
	),
	additional_methods : array(
		$client->paymentFormMethod(
			url : 'https://docs.liveproto.dev',
			title : '9R0vhkAqV3pblLXU',
		),
	),
	saved_info : $client->paymentRequestedInfo(
		name : '0jEDdyrS56ilZaO9',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : '6uao71qE38IKJ0bj',
			street_line2 : '81FQpYDXJ25CseP0',
			city : 'vUOqoMDfwkLYmjPQ',
			state : 'x6rNmHCbkD0ThU4d',
			country_iso2 : 'E9BQRsrgAUzywuLp',
			post_code : 'R8wXruF7KNVd9Wbf',
		),
	),
	saved_credentials : array(
		$client->paymentSavedCredentialsCard(
			id : 'q2h19rQTg3X7GZSo',
			title : 'tvHCPYs6DN3Foc4d',
		),
	),
	users : array(
		$client->userEmpty(
			id : -478796679716563363,
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
			id : -2656715255634378418,
			access_hash : -5482330115739428007,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 66,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '1jnfZLUelvGVuCXP',
					reason : 'EQx7sNTDnaelhdyG',
					text : 'BqRvUhPNj1HMA0mo',
				),
			),
			bot_inline_placeholder : '8KOAXcEliQotyaNI',
			lang_code : 'WmMqD91hRZsu5eCi',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 38,
			color : $client->peerColor(
				color : 11,
				background_emoji_id : -6348011338651612892,
			),
			profile_color : $client->peerColor(
				color : 46,
				background_emoji_id : 7110448487578792925,
			),
			bot_active_users : 84,
			bot_verification_icon : -3862301446425913853,
			send_paid_messages_stars : -8827011716508581638,
		),
	),
);
```