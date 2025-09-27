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
	form_id : 4569435534107676428,
	bot_id : 3511842429313513889,
	title : 'RMHtVswiWZYOhKIz',
	description : '5gY24iSzUZpAeloM',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 7123168904496176183,
		size : 5,
		mime_type : 'Yq7FBkHNCQGWndpL',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 30,
				h : 13,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'KSr0vdaG4tzue7oP',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 793597.8134765625,
				w : 43,
				h : 41,
				preload_prefix_size : 7,
				video_start_ts : 75506.83984375,
				video_codec : 'Bjl2nAhT5bpeu7FI',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 69,
				title : 'rIDdvGmcpOxQHzoA',
				performer : '68cvXwoRHSzIZJmu',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'jR18DWdaPYBUHt3A',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'J9mnRWv6b14htVfN',
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
		currency : 'hdDpHNvWUAjzQ4rR',
		prices : array(
			$client->labeledPrice(
				label : 'vtECJPnNxo7aDkc1',
				amount : 6026206257134555348,
			),
		),
		max_tip_amount : 2711547190850225263,
		suggested_tip_amounts : array(4855044371334111586),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 10,
	),
	provider_id : -5997401673453882463,
	url : 'https://docs.liveproto.dev',
	native_provider : '2vgROIadpDSi8yEP',
	native_params : $client->dataJSON(
		data : 'FfgS6nIM3W2L1JXu',
	),
	additional_methods : array(
		$client->paymentFormMethod(
			url : 'https://docs.liveproto.dev',
			title : '0UrIjCJNgyf3YuHp',
		),
	),
	saved_info : $client->paymentRequestedInfo(
		name : 'eWfF8pvh51bScEux',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : 'OBkzsDRUqT7AP09L',
			street_line2 : 'N0tce7Jm1TRa8vXQ',
			city : 'MIxbumQYhjozTBiW',
			state : 'OKclq0WF2NjSe1nV',
			country_iso2 : 'AwE4KRYTmavCd36H',
			post_code : 'xjNh0rlpCSQY4FDU',
		),
	),
	saved_credentials : array(
		$client->paymentSavedCredentialsCard(
			id : 'FuHypO6ZadfIv3h4',
			title : 'BvRXbN7idrmIfGOJ',
		),
	),
	users : array(
		$client->userEmpty(
			id : 1169680381970382380,
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
			id : -6701110820786807252,
			access_hash : 7416337229430392333,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 61,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'IpcXhOeHmrWA9yzZ',
					reason : 'he1iyqZAQaKEcR7l',
					text : 'WtL5JHlfVoNYSTj0',
				),
			),
			bot_inline_placeholder : 'heQSalwomKzqgNx2',
			lang_code : 'ReakpKNyfd6Prb3x',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 66,
			color : $client->peerColor(
				color : 10,
				background_emoji_id : -5971724900621497028,
			),
			profile_color : $client->peerColor(
				color : 70,
				background_emoji_id : 6571674029176957557,
			),
			bot_active_users : 82,
			bot_verification_icon : 1555463874598580715,
			send_paid_messages_stars : 415302100569837543,
		),
	),
);
```