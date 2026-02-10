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
	form_id : 7490420909465419035,
	bot_id : -8929207009059355976,
	title : 'aTOIo7WPNy3H9mLK',
	description : 'ZawoWiUf4gJmGCzA',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 1227509920508679609,
		size : 65,
		mime_type : 'w285UVW7EeQsPgMY',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 82,
				h : 43,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'BtWFxmIwRCYJM8hr',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 68,
					x : 1744579.0576171875,
					y : -943190.314453125,
					zoom : 1261763.2783203125,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1833462.4638671875,
				w : 52,
				h : 30,
				preload_prefix_size : 92,
				video_start_ts : -1339941.09375,
				video_codec : '2saW5YmP1xi4tzQD',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 22,
				title : 'E9pvzCI4UD26Xmf7',
				performer : 'K5rUTelEQimXygnA',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : '2akVxq4PHvDulKni',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'df0tZrqAoXFVbJUg',
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
		currency : 'HoNlmy4M8eCwx13r',
		prices : array(
			$client->labeledPrice(
				label : '5fkYjaq9i1QAvCwE',
				amount : 5935143882095723417,
			),
		),
		max_tip_amount : -1406811971211371010,
		suggested_tip_amounts : array(-4826774944241599904),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 69,
	),
	provider_id : -2419852243042455347,
	url : 'https://docs.liveproto.dev',
	native_provider : '6rGeR92ZoDAsOWSg',
	native_params : $client->dataJSON(
		data : 'Q0JctCSxn7bO9NgW',
	),
	additional_methods : array(
		$client->paymentFormMethod(
			url : 'https://docs.liveproto.dev',
			title : 'OB3DgSE09I2yueoG',
		),
	),
	saved_info : $client->paymentRequestedInfo(
		name : 'FcZHe0sClYKXf76I',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : 'OlFoftug6CAeDm9v',
			street_line2 : '7zBsiZnNKxQlbqWL',
			city : 'uGljTkvdAgMH8rCY',
			state : 'qX89vZJWoyU7zSgR',
			country_iso2 : 'UxLHtwJqzDnmSYbi',
			post_code : '9KlMtob2kvOrzHyq',
		),
	),
	saved_credentials : array(
		$client->paymentSavedCredentialsCard(
			id : 'apuNL4UwTOtPeG3H',
			title : 'QMa6qjXNJE0cR2Ft',
		),
	),
	users : array(
		$client->userEmpty(
			id : -5651987364810517629,
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
			id : 8312668979667920992,
			access_hash : 1237684116483615566,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 99,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Y7aXP6JE3LnBgzAf',
					reason : 'Ah8RG3cuK7rvgOtW',
					text : '3PT49ZBCxpfH58hQ',
				),
			),
			bot_inline_placeholder : 'sSELzchUaKR6gIMJ',
			lang_code : 'VIDLixKfS0Foe8vC',
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
				max_id : 82,
			),
			color : $client->peerColor(
				color : 20,
				background_emoji_id : 352002929644293146,
			),
			profile_color : $client->peerColor(
				color : 99,
				background_emoji_id : -1771355619584313141,
			),
			bot_active_users : 81,
			bot_verification_icon : -7673226165174745914,
			send_paid_messages_stars : -6530278111530910811,
		),
	),
);
```