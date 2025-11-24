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
	form_id : -2789751372333684879,
	bot_id : 803881414936903389,
	title : 'b3PvTskBchW4w5nd',
	description : 'eED56r0V9KOnRC1L',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -5147377308958452041,
		size : 54,
		mime_type : 'r5Ko0SdTFgDq2LA4',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 21,
				h : 64,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'HBxJ1EIXFtGjqkCz',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 28,
					x : -1997712.458984375,
					y : 1859945.482421875,
					zoom : 509510.0224609375,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -1580290.990234375,
				w : 49,
				h : 22,
				preload_prefix_size : 54,
				video_start_ts : -1404160.1337890625,
				video_codec : 'E7cdLOTqnRKi1l2N',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 63,
				title : 'xItEcuwbYSvh8BsG',
				performer : 'w8l7JZuxkYpXFO6L',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 's4NS3uxm8o10wQfd',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'bwkAL3xKPFzge1nj',
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
		currency : 'gyWxuGKzQSA1DBRd',
		prices : array(
			$client->labeledPrice(
				label : 'pU2mjWX0R7ytrPkw',
				amount : -4490429949745880279,
			),
		),
		max_tip_amount : -1094709179727853122,
		suggested_tip_amounts : array(8042540943518937047),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 73,
	),
	provider_id : 8861845544202083042,
	url : 'https://docs.liveproto.dev',
	native_provider : 'JDlYMpkFOxWAq31S',
	native_params : $client->dataJSON(
		data : 'J0PfxcS159UeD6YA',
	),
	additional_methods : array(
		$client->paymentFormMethod(
			url : 'https://docs.liveproto.dev',
			title : 'U29wRh7CVaPuQo0A',
		),
	),
	saved_info : $client->paymentRequestedInfo(
		name : 'ZMaN8AcK21fvj3HT',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : 'SXQhdwPxBWgk3yIA',
			street_line2 : '584uTnQMtWi2UpDh',
			city : '2JBNxoHGWlXdOCFu',
			state : 'cT1IsJ5vjXaDo6R7',
			country_iso2 : 'm6xUkar3JqlyWHVC',
			post_code : 'JctEbrU0KhasDHdQ',
		),
	),
	saved_credentials : array(
		$client->paymentSavedCredentialsCard(
			id : 'b127NYWAjya5pZBE',
			title : 'FUYZjzJcxRACeKEd',
		),
	),
	users : array(
		$client->userEmpty(
			id : 2174845829209334572,
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
			id : 2010499106197268418,
			access_hash : -4551205582545957636,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 12,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'yYW9lXK51N7h8iuw',
					reason : 'mnH4kzxKjdE9aRqZ',
					text : '27Yvo8Xxu6geyRNZ',
				),
			),
			bot_inline_placeholder : '6j7BI59z0LN1Ppel',
			lang_code : 'Oox2nu6F8CHKZ0bh',
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
				max_id : 40,
			),
			color : $client->peerColor(
				color : 70,
				background_emoji_id : 7899857635232433282,
			),
			profile_color : $client->peerColor(
				color : 42,
				background_emoji_id : -5574825986564143751,
			),
			bot_active_users : 17,
			bot_verification_icon : -4464358447749392324,
			send_paid_messages_stars : -6958551326889751676,
		),
	),
);
```