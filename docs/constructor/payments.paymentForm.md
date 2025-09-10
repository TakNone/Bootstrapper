# payments.paymentForm

**Description** : *Payment form*

**Layer** : 214

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
	form_id : -8276281241866661251,
	bot_id : -5633803632970240225,
	title : 'j9YWNAg126UiOKsM',
	description : 'nfU872W4YErZi6Lv',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 2766962049701112896,
		size : 58,
		mime_type : 'fJtXq4NPC7E69Viy',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 77,
				h : 48,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'UJmj3s2AL5KtrMBd',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -719230.7392578125,
				w : 93,
				h : 1,
				preload_prefix_size : 35,
				video_start_ts : 1584298.85546875,
				video_codec : '9mq5xflHWuEKpJow',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 44,
				title : 'OJ0rWl78qKushz1P',
				performer : 'ZdFbms4roQwv82Pn',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'IeFXoLa76KYTOjZp',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'bVMgJcInTCxYRevo',
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
		currency : 'NElJ8yo5V2TfLI4D',
		prices : array(
			$client->labeledPrice(
				label : 'flQPnSzU46YGaD9j',
				amount : -7800969331505886816,
			),
		),
		max_tip_amount : -6627370685487547311,
		suggested_tip_amounts : array(7445987699469897247),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 71,
	),
	provider_id : 6776217062708232463,
	url : 'https://docs.liveproto.dev',
	native_provider : 'bKLFqZSYcR67oBnD',
	native_params : $client->dataJSON(
		data : 'MfD98uPktBG2wKX4',
	),
	additional_methods : array(
		$client->paymentFormMethod(
			url : 'https://docs.liveproto.dev',
			title : 'eohNPSmY0QBd8LzF',
		),
	),
	saved_info : $client->paymentRequestedInfo(
		name : 'vp9bPm632zG7aYui',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : 'IaymYzoq7UE2NlQc',
			street_line2 : 'xT7PDMcNfl3nApZ2',
			city : 'NjYZzJrs6eghL4Wn',
			state : 'Xi1OIekvBu3cspo4',
			country_iso2 : 'WT7aK1gfZbq4owyL',
			post_code : 'BG74oZQwUDRHx1Tk',
		),
	),
	saved_credentials : array(
		$client->paymentSavedCredentialsCard(
			id : '9VA5syFnQxpTmq7t',
			title : '1feZGpog3dKksV7w',
		),
	),
	users : array(
		$client->userEmpty(
			id : -8921327078730084455,
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
			id : -8143707415202024344,
			access_hash : -6648344825147207814,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 54,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '2JxZyBj9GvpOWFf6',
					reason : 'HZAesQW5XuLhM7Cc',
					text : 'xpWU0PysiQK1BX9z',
				),
			),
			bot_inline_placeholder : 'BqmkjHwgL45JaZyt',
			lang_code : '4HgedY0KwLF9b2mt',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 43,
			color : $client->peerColor(
				color : 57,
				background_emoji_id : -7373709575524515909,
			),
			profile_color : $client->peerColor(
				color : 38,
				background_emoji_id : -4691633212982766699,
			),
			bot_active_users : 80,
			bot_verification_icon : 32391110042952313,
			send_paid_messages_stars : 2372714516963098540,
		),
	),
);
```