# payments.paymentForm

**Description** : *Payment form*

**Layer** : 227

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
	form_id : -8319455861812167108,
	bot_id : -864387761284181500,
	title : 'Yb9fce1w83hmZvBd',
	description : 'DY6CM4FQJ5lafqon',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -8075866111111649858,
		size : 18,
		mime_type : 'qZTDglNwCP7OsUz6',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 48,
				h : 20,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'uQBnbJpiL6wH3Zvq',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 36,
					x : 887085.8330078125,
					y : -383067.314453125,
					zoom : -751636.9833984375,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -682508.7255859375,
				w : 38,
				h : 68,
				preload_prefix_size : 49,
				video_start_ts : -1614884.9794921875,
				video_codec : 'teD31JQLAq8Cmukv',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 22,
				title : 'hW35uN7ZopJGyXxA',
				performer : 'I8B4wZiCSPpmydhs',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'VHFGwS5LkXtPnWZD',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'AVjrxM6Edos7XUlc',
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
		currency : 'G8paHnB01P3dy6uz',
		prices : array(
			$client->labeledPrice(
				label : 'y3xwhzeJop9YGfmi',
				amount : 2373468440372313738,
			),
		),
		max_tip_amount : 8575514247651586960,
		suggested_tip_amounts : array(2114025794996803177),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 86,
	),
	provider_id : -7071511900975700949,
	url : 'https://docs.liveproto.dev',
	native_provider : 'RbCKuSUqoi1LlG47',
	native_params : $client->dataJSON(
		data : '3rNTZoOmAyqkEGDt',
	),
	additional_methods : array(
		$client->paymentFormMethod(
			url : 'https://docs.liveproto.dev',
			title : 'o1x9TP3Ug7y6WpCA',
		),
	),
	saved_info : $client->paymentRequestedInfo(
		name : 'j5EyqJld0o2ONSmV',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : 'U2zIO01usxLyrfVn',
			street_line2 : 'zlGn7MTmyR0Ah1Xi',
			city : '5JoRP2hzlVDygjE3',
			state : '9e61L3fSmhHDGMdr',
			country_iso2 : 'exH3NKyaUqgtJQGW',
			post_code : 'IwdVp3k9RXfunWzG',
		),
	),
	saved_credentials : array(
		$client->paymentSavedCredentialsCard(
			id : 'rEv1HFJ0BKwG6Zsp',
			title : 'BtxTjO2JgpqvanY8',
		),
	),
	users : array(
		$client->userEmpty(
			id : -8937920871889542863,
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
			id : 2874755018497471798,
			access_hash : 4561182797762301984,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 39,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '45vFAlxnmMGi8awH',
					reason : 'IfJU1AQCDq37jLyF',
					text : 'gk7cUuIhvBSjxRyM',
				),
			),
			bot_inline_placeholder : 'O0jd9mH6yuPrX3Zn',
			lang_code : 'zyknpbX2lC80UJH4',
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
				max_id : 49,
			),
			color : $client->peerColor(
				color : 9,
				background_emoji_id : -1846544256586504043,
			),
			profile_color : $client->peerColor(
				color : 25,
				background_emoji_id : 2469572315850796880,
			),
			bot_active_users : 12,
			bot_verification_icon : 7576698276550897496,
			send_paid_messages_stars : 999922390121706137,
		),
	),
);
```