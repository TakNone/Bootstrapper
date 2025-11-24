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
	form_id : -3263487541676634737,
	bot_id : 3048014356656361774,
	title : 'bnH4NlKSyk6iIftL',
	description : 'JLhyeW6t5Qp79wMg',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 5917984050599062975,
		size : 8,
		mime_type : 'x4wiE20JopGDFuNr',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 14,
				h : 26,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'A1yvq8MkuKYdbspW',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 89,
					x : 1823440.35546875,
					y : -460076.0703125,
					zoom : 1016424.177734375,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1569726.873046875,
				w : 52,
				h : 67,
				preload_prefix_size : 70,
				video_start_ts : 1292388.171875,
				video_codec : 'A2iUNsgOh4RrZxpD',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 63,
				title : '6WOBz9bCTVHrJgjX',
				performer : 'OdHw7rs2e1ZWJEqD',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'Isy6FTcUihAflLeV',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : '1BQ7Z3yYWFsJfPSh',
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
		currency : 'MfB6t8oOaewqHKl7',
		prices : array(
			$client->labeledPrice(
				label : 'zjlJQdSw8b9ytWMT',
				amount : -281984047881897910,
			),
		),
		max_tip_amount : -3968237242393269870,
		suggested_tip_amounts : array(8650479600508632151),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 84,
	),
	provider_id : -7787078446649625472,
	url : 'https://docs.liveproto.dev',
	native_provider : '03ISAKlkThC7EqHP',
	native_params : $client->dataJSON(
		data : 'fL2kpZBz9ocXQ5Ex',
	),
	additional_methods : array(
		$client->paymentFormMethod(
			url : 'https://docs.liveproto.dev',
			title : 'UhRfFAqBmwn45NWM',
		),
	),
	saved_info : $client->paymentRequestedInfo(
		name : 'UYWFlcG9kQnEH7zZ',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : 'bh7rnSvZyaj5tcdw',
			street_line2 : 'PoGS31u720zONy4U',
			city : 'vT3Owh7bQm6fq8MN',
			state : 'pExjzC7FGM03TbZ4',
			country_iso2 : 'ZAvnipjx3f9PLR21',
			post_code : 'TcsqL2ilQNMvwnPy',
		),
	),
	saved_credentials : array(
		$client->paymentSavedCredentialsCard(
			id : '1qBQjV3gYIrJGwxs',
			title : 'HVJl8WpndmUyDAkw',
		),
	),
	users : array(
		$client->userEmpty(
			id : -7323450436599843634,
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
			id : -3593172182739608882,
			access_hash : -5311125697145108180,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 67,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'SyopZuXG1M5VROrY',
					reason : 'MuRdJcb2kVNzAYEo',
					text : 'SM1j78mwqzouGgKA',
				),
			),
			bot_inline_placeholder : 'qgNrIJ52ZYPomHUO',
			lang_code : 'pNQWkOJdKCXjZVRI',
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
				max_id : 13,
			),
			color : $client->peerColor(
				color : 92,
				background_emoji_id : 4169753705102285744,
			),
			profile_color : $client->peerColor(
				color : 6,
				background_emoji_id : -210353861213979850,
			),
			bot_active_users : 60,
			bot_verification_icon : 30467625066348010,
			send_paid_messages_stars : 8845622566974117881,
		),
	),
);
```