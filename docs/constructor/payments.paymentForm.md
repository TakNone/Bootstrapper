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
	form_id : 4200113583342338050,
	bot_id : -7245202543907650129,
	title : 'FIbPHk5sNodGqgKB',
	description : 'h2RYzjQcm5gBVsFu',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 8779732735592630987,
		size : 15,
		mime_type : 'Oj0xSDFBCTsMlbZU',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 3,
				h : 49,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'Z7jB4hmVcAYN3qks',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -1886004.57421875,
				w : 100,
				h : 56,
				preload_prefix_size : 74,
				video_start_ts : 806382.6611328125,
				video_codec : 'HV1JmaXGOhFYc7Ai',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 36,
				title : '89G2aBxqiUDJK3oe',
				performer : 'CfeqpGABD2Jkdh9s',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'eHI4KngBbVi950tj',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'U6vQLKWqnVHkhTO5',
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
		currency : 'ctFP4Is1y0UhCADf',
		prices : array(
			$client->labeledPrice(
				label : '3VTDzUINfBah6PnA',
				amount : -6483206295341597810,
			),
		),
		max_tip_amount : 8611944512444500126,
		suggested_tip_amounts : array(3775160612850654779),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 30,
	),
	provider_id : -5217785513402116332,
	url : 'https://docs.liveproto.dev',
	native_provider : 'WVCSnEtNu8R0vO2d',
	native_params : $client->dataJSON(
		data : 'Ok1w9yY4arobJdMI',
	),
	additional_methods : array(
		$client->paymentFormMethod(
			url : 'https://docs.liveproto.dev',
			title : 'oAT8Zk31WjygusmX',
		),
	),
	saved_info : $client->paymentRequestedInfo(
		name : 'EH3ylCcTpnP5UwDI',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : 'EeomvBdfZzuOYcQg',
			street_line2 : 'GZR0NI6gCaDpOoc9',
			city : 'dpvKzYJTgkC1Se4u',
			state : 'mG4hIlcxboXdnstZ',
			country_iso2 : 'IO3p9WYkVTM4K7oX',
			post_code : 'PS7v0LeYoTJujlCX',
		),
	),
	saved_credentials : array(
		$client->paymentSavedCredentialsCard(
			id : 'okZjb4eR0CPiuYXE',
			title : 'uCArGipjRY0Xz6Ll',
		),
	),
	users : array(
		$client->userEmpty(
			id : 189076639040477157,
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
			id : -9194429695413348041,
			access_hash : -3643713953282317890,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 80,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'zVvxBhl7KrZfWyNb',
					reason : 'olZCPfQ0JgtBvIxW',
					text : 'asICSFJbMDrdAHkw',
				),
			),
			bot_inline_placeholder : 'kgbpi3ncUlmPxZ86',
			lang_code : 'm0Dn6HhAaS4QGKPU',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 34,
			color : $client->peerColor(
				color : 60,
				background_emoji_id : 452472077311599409,
			),
			profile_color : $client->peerColor(
				color : 52,
				background_emoji_id : -6987690286729725357,
			),
			bot_active_users : 58,
			bot_verification_icon : -5342071364256123199,
			send_paid_messages_stars : -505534464670948140,
		),
	),
);
```