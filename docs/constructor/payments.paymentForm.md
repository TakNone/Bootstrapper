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
	form_id : 4646427802535830830,
	bot_id : 6816363620926236054,
	title : 'wvFbUCogSj0PBlZA',
	description : 'VfUW1YIvBuJR6aic',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 5772255522607746872,
		size : 37,
		mime_type : 'SZuzvjTWDVFfUQOr',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 24,
				h : 40,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'CUvYZfiml3eITk2R',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 90,
					x : 1135081.69140625,
					y : -263400.888671875,
					zoom : 223262.140625,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1862338.4638671875,
				w : 45,
				h : 71,
				preload_prefix_size : 40,
				video_start_ts : 1353171.904296875,
				video_codec : 'vCB9i3AxbYM6LU7w',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 10,
				title : 'wQ4gbythLP7zqmfZ',
				performer : 'WzHMGCE4Ne2Bt781',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'VfQb1XEthSpjwaND',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'dgvmSWeN2UsVKrcq',
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
		currency : 'LyfRSi2hA3HnPuYK',
		prices : array(
			$client->labeledPrice(
				label : 'HZUviQprEKINBMjz',
				amount : 2209301062161408945,
			),
		),
		max_tip_amount : 2536102968917108167,
		suggested_tip_amounts : array(-1338620218456352618),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 85,
	),
	provider_id : -3534440955014850526,
	url : 'https://docs.liveproto.dev',
	native_provider : 'IrqkFZvCbGsKlVxX',
	native_params : $client->dataJSON(
		data : 'FOv0xKVd2q5suGm7',
	),
	additional_methods : array(
		$client->paymentFormMethod(
			url : 'https://docs.liveproto.dev',
			title : 'wEIQpTrWUjocayR0',
		),
	),
	saved_info : $client->paymentRequestedInfo(
		name : 'HC0GnQTvxteBADrR',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : 'Zx0DHstUIdLpA2fT',
			street_line2 : 'awiOZr83XGKbWuyh',
			city : 'ACvcoyxTQaDJtMlR',
			state : 'KTp9rOj4aWLURygF',
			country_iso2 : 'vYR1dJzmSw72NWk4',
			post_code : 'vOV1bJPYT8xyWCRH',
		),
	),
	saved_credentials : array(
		$client->paymentSavedCredentialsCard(
			id : 'ArSDg1viud4jb5Jm',
			title : 'h4Dencxo38YQXa0f',
		),
	),
	users : array(
		$client->userEmpty(
			id : -795733997634724824,
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
			id : -6975701239576389116,
			access_hash : -2332892160230451873,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 18,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'CtxwB8Rj63zDeYJZ',
					reason : 'kdmeMUQSgTa85Bzq',
					text : '4Wx7z81Mj5hP2ZDQ',
				),
			),
			bot_inline_placeholder : '2f8bWFi0KqA15Yyj',
			lang_code : 'dD0UrP1RwuaVvkCL',
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
				max_id : 99,
			),
			color : $client->peerColor(
				color : 86,
				background_emoji_id : -2095537200161539511,
			),
			profile_color : $client->peerColor(
				color : 9,
				background_emoji_id : -3898580042398263080,
			),
			bot_active_users : 49,
			bot_verification_icon : 1400270456937715590,
			send_paid_messages_stars : 3371982760039945951,
		),
	),
);
```