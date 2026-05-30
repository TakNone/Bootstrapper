# payments.paymentForm

**Description** : *Payment form*

**Layer** : 225

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
	form_id : -8844904338245830788,
	bot_id : 597247830944976051,
	title : 'nfsYrxRh6oL4IUqp',
	description : 'd6pDuhZWVkOFH9gU',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -3118249371686858323,
		size : 9,
		mime_type : 'VxceFHBg6Wk1vKMz',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 27,
				h : 45,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'i6Q84RXAd5pFGrvY',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 29,
					x : 977225.8125,
					y : -941404.859375,
					zoom : 2072047.234375,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -1225430.2294921875,
				w : 20,
				h : 2,
				preload_prefix_size : 1,
				video_start_ts : -1304900.5908203125,
				video_codec : 'BlmRqhpKJbTvPoHc',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 45,
				title : 'h2w0y67iPDoqO5ux',
				performer : 'pH3NjoP8mW5vxsCS',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'EBxhmuXNjMQFCS6c',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : '1xkJ2gVdRrUPaQvG',
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
		currency : 'wvRaXbxVhUMifByA',
		prices : array(
			$client->labeledPrice(
				label : 'sd5Q1eBUwC7yZa2l',
				amount : -6290996861253728080,
			),
		),
		max_tip_amount : -8870742801819392317,
		suggested_tip_amounts : array(3968246258997890946),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 74,
	),
	provider_id : 6417958143275411294,
	url : 'https://docs.liveproto.dev',
	native_provider : 'jTskQBJYrVL7KtI8',
	native_params : $client->dataJSON(
		data : 'izTb3sqj7Q4tWfuR',
	),
	additional_methods : array(
		$client->paymentFormMethod(
			url : 'https://docs.liveproto.dev',
			title : 'uQH5CGPSyAcaXqdn',
		),
	),
	saved_info : $client->paymentRequestedInfo(
		name : '9BhHn2YAJaC4Qwf6',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : 'iB5fOgu17djDc8tv',
			street_line2 : '5RdKbeotgDaUzMqv',
			city : 'xiIaQ0hmbvEB38PR',
			state : 'oxN2Jtu3EmPnhVQT',
			country_iso2 : 'cYVj6lr1eJHDaA35',
			post_code : 'nkbq5t2FIAzSgBME',
		),
	),
	saved_credentials : array(
		$client->paymentSavedCredentialsCard(
			id : 'jVueAtXfRO6P4DG3',
			title : '04Zp8IvXucmsMxUr',
		),
	),
	users : array(
		$client->userEmpty(
			id : 2287801736475945355,
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
			id : 3789896701898319448,
			access_hash : -5141172282253945621,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 15,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'XPWnEi1FhSMGbwvA',
					reason : 'dHklYxS61iuAyOXc',
					text : 'qiRH3stUy0B1KWTJ',
				),
			),
			bot_inline_placeholder : 'zI9QqdWsVMjt2pFo',
			lang_code : '1xuaj7KCM4EsB39Z',
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
				max_id : 56,
			),
			color : $client->peerColor(
				color : 37,
				background_emoji_id : -1608253075259532789,
			),
			profile_color : $client->peerColor(
				color : 16,
				background_emoji_id : -2045303380771536954,
			),
			bot_active_users : 32,
			bot_verification_icon : 4680962032166007789,
			send_paid_messages_stars : 1514800810405222592,
		),
	),
);
```