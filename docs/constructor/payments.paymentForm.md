# payments.paymentForm

**Description** : *Payment form*

**Layer** : 229

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
	form_id : -6968585253640414026,
	bot_id : 2041729334501363449,
	title : 'xKomwnOGXVyT4rQt',
	description : 'QP6iCAF1Lzl2TSeE',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -3199166838084363622,
		size : 25,
		mime_type : 'xa1h5tXmuvojEYkP',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 17,
				h : 68,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : '0y8zrwcnq4CpPiKd',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 13,
					x : -623676.0751953125,
					y : 595118.2626953125,
					zoom : -1949449.95703125,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1816982.091796875,
				w : 93,
				h : 44,
				preload_prefix_size : 14,
				video_start_ts : 1753513.03125,
				video_codec : '8UQS25NgzrtvDly7',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 44,
				title : '7wZ0Ty5bVfohjEHO',
				performer : 'JM9SHK4DA1TGXsVu',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'cSkgdwmPyCDv1e4W',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : '8yZV5miepq7Ou2fj',
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
		currency : 'EJKq7dUvYkPoDZBL',
		prices : array(
			$client->labeledPrice(
				label : 'UFDOh5Jcayepjl1k',
				amount : -1444920341980866562,
			),
		),
		max_tip_amount : -4357312096844890723,
		suggested_tip_amounts : array(5612654032134642741),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 55,
	),
	provider_id : -7730335122130775312,
	url : 'https://docs.liveproto.dev',
	native_provider : 'VQtjnLsGIUf14EYS',
	native_params : $client->dataJSON(
		data : 'sfLGoTSl7tKhay30',
	),
	additional_methods : array(
		$client->paymentFormMethod(
			url : 'https://docs.liveproto.dev',
			title : 'yMOS8kvH6QuKieER',
		),
	),
	saved_info : $client->paymentRequestedInfo(
		name : 'W70uM6N5vtlFhfw1',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : 'Q9nyvHzINkKR7LG5',
			street_line2 : '9I6y37WlEHJupSq8',
			city : 'H29wCfumvkjx8LBt',
			state : 'fJBikwuYLnUZr0Sh',
			country_iso2 : 'hKXHNY0obF3LEuxm',
			post_code : 'PlXwH60fmCazMNvt',
		),
	),
	saved_credentials : array(
		$client->paymentSavedCredentialsCard(
			id : '52ZQ7anIwu6eSHDK',
			title : '2roTCLedDtPkpbEG',
		),
	),
	users : array(
		$client->userEmpty(
			id : 7228282581155133214,
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
			id : 5275054730799189198,
			access_hash : 2726289151109276273,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 35,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '1XA6EFk9cGNxdQBu',
					reason : 'PLVhYyuJxH58FiQZ',
					text : 'REjM1xHt9K8UyJnT',
				),
			),
			bot_inline_placeholder : 'gxdwuSqKEHlInjBe',
			lang_code : 'tS5jMNms1BlConR4',
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
				max_id : 35,
			),
			color : $client->peerColor(
				color : 93,
				background_emoji_id : -2113965112077472319,
			),
			profile_color : $client->peerColor(
				color : 43,
				background_emoji_id : 4722860581024374498,
			),
			bot_active_users : 35,
			bot_verification_icon : -5536301272684919300,
			send_paid_messages_stars : -5654097813809742161,
			linked_community_id : -8045301743042870590,
		),
	),
);
```