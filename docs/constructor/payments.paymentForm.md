# payments.paymentForm

**Description** : *Payment form*

**Layer** : 233

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
	form_id : -8357228315509728323,
	bot_id : -2986025737316939735,
	title : 'OfnmyJkageUo1Rhq',
	description : 'xBEf4Jm81cUk9a2h',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -5399483645653003622,
		size : 6,
		mime_type : 'Wnvfw0PoaqSXJMkI',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 52,
				h : 5,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'xIOPbh42UEDadXqQ',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 46,
					x : 186708.955078125,
					y : 1405763.5048828125,
					zoom : -1849894.5380859375,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -1017752.9892578125,
				w : 16,
				h : 60,
				preload_prefix_size : 33,
				video_start_ts : 1408047.7412109375,
				video_codec : 'saCWhHIt9xFSfMdG',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 18,
				title : 'fwc32jQPFOsDimdg',
				performer : 'OemWTc5LrtzwFdfC',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'CEp8FuJm5Rqwf9Tb',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'rFBDQat6WdzOoLx0',
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
		currency : 'qcns8ivmgk1b2D6w',
		prices : array(
			$client->labeledPrice(
				label : 'l128OAZa7zKnIhdL',
				amount : -1330917573144220938,
			),
		),
		max_tip_amount : -334707204744562777,
		suggested_tip_amounts : array(-846161257533296695),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 48,
	),
	provider_id : 4625765591373051697,
	url : 'https://docs.liveproto.dev',
	native_provider : '3qPDQUft0iFg1GCY',
	native_params : $client->dataJSON(
		data : 'YdpH8b47ay5QRmtX',
	),
	additional_methods : array(
		$client->paymentFormMethod(
			url : 'https://docs.liveproto.dev',
			title : 'Q3vj8iBR6ktUIoyY',
		),
	),
	saved_info : $client->paymentRequestedInfo(
		name : '1zn9eiBZhJlPLmOk',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : 'jHhaNUM8Tf0mE3Ws',
			street_line2 : 'Dmgf4do2MaFqGHNk',
			city : 'I6rdDS9LTM2KfyeF',
			state : '2sQSJ1rTezCfp5AF',
			country_iso2 : 'W823aB1NsxlEo6P7',
			post_code : 'Q6EN9dBeW1ADOw0t',
		),
	),
	saved_credentials : array(
		$client->paymentSavedCredentialsCard(
			id : 'C1Mnmc2fG9i3wZUy',
			title : 'qfTk6u4Hal5Y9USm',
		),
	),
	users : array(
		$client->userEmpty(
			id : 5593145815043605126,
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
			bot_forum_sidebar : true,
			id : -4254491283908158500,
			access_hash : 6182138432867594935,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 18,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'yZvTLHXnf5lQrUpJ',
					reason : 'oWkrv0tIR7nca3Zs',
					text : 'sJ2IAaLE0xKoBVw4',
				),
			),
			bot_inline_placeholder : 'pg7TQMaySGZmOJ5w',
			lang_code : 't1hQ8NGi2IL3Tufc',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					deletable : true,
					expired : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 1,
			),
			color : $client->peerColor(
				color : 96,
				background_emoji_id : -599475226922317131,
			),
			profile_color : $client->peerColor(
				color : 46,
				background_emoji_id : -7614557336364308036,
			),
			bot_active_users : 37,
			bot_verification_icon : -5772909770449323313,
			send_paid_messages_stars : -5573742962794749429,
			linked_community_id : -6801982405787479174,
		),
	),
);
```