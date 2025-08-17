# payments.paymentReceipt

**Description** : *Receipt*

**Layer** : 211

```tl
payments.paymentReceipt#70c4fe03 flags:# date:int bot_id:long provider_id:long title:string description:string photo:flags.2?WebDocument invoice:Invoice info:flags.0?PaymentRequestedInfo shipping:flags.1?ShippingOption tip_amount:flags.3?long currency:string total_amount:long credentials_title:string users:Vector<User> = payments.PaymentReceipt;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>date</mark> | [`int`](type/int) | Date of generation |
| <mark>bot_id</mark> | [`long`](type/long) | Bot ID |
| <mark>provider_id</mark> | [`long`](type/long) | Provider ID |
| <mark>title</mark> | [`string`](type/string) | Title |
| <mark>description</mark> | [`string`](type/string) | Description |
| **photo** | [`flags.2?WebDocument`](type/WebDocument) | Photo |
| <mark>invoice</mark> | [`Invoice`](type/Invoice) | Invoice |
| **info** | [`flags.0?PaymentRequestedInfo`](type/PaymentRequestedInfo) | Info |
| **shipping** | [`flags.1?ShippingOption`](type/ShippingOption) | Selected shipping option |
| **tip_amount** | [`flags.3?long`](type/long) | Tipped amount |
| <mark>currency</mark> | [`string`](type/string) | Three-letter ISO 4217 currency code |
| <mark>total_amount</mark> | [`long`](type/long) | Total amount in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies) |
| <mark>credentials_title</mark> | [`string`](type/string) | Payment credential name |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users |

---

## Type

[payments.PaymentReceipt](type/payments.PaymentReceipt)

---

## Example

```php
$paymentsPaymentReceipt = $client->payments->paymentReceipt(
	date : 68,
	bot_id : -926322425874385851,
	provider_id : 4414714592334959902,
	title : 'EqSm1NiJcvpoawjG',
	description : 'sBSKwzYUFn8Gj2Z7',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -877535105375725399,
		size : 87,
		mime_type : '481IWcCMDmfVp2qZ',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 1,
				h : 98,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'A3nHVWly2tu7vqTe',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -1997049.03125,
				w : 41,
				h : 88,
				preload_prefix_size : 84,
				video_start_ts : 683723.7412109375,
				video_codec : 'KzodCLnsBhZ0p98Y',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 20,
				title : 'Zcmdh0nQC96zXDWV',
				performer : '4e3WqLzEacwDfidX',
				waveform : '???`BLiveProto?\'?7?',
			),
			$client->documentAttributeFilename(
				file_name : 'GiKo17gWU0jFudME',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : '9Sht853ABjmgViOz',
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
		currency : 'CW6he7JAL3ZP4Eo8',
		prices : array(
			$client->labeledPrice(
				label : 'PpguearyWHT0wBn9',
				amount : 57656535557396034,
			),
		),
		max_tip_amount : 2859682980306521067,
		suggested_tip_amounts : array(6058787915084588080),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 52,
	),
	info : $client->paymentRequestedInfo(
		name : 'wBnFaYxbtvdGMQqo',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : '8uTYmVnFEctD2oIx',
			street_line2 : 'ruIjxmNKvg19hYJE',
			city : '94SZgVkrICRp2H7W',
			state : 'xAl2GtNfpyvIobEd',
			country_iso2 : 'V95HdGpy6XelRUOQ',
			post_code : 'v7OSPRH8jzsD0mQB',
		),
	),
	shipping : $client->shippingOption(
		id : 'yJ5XiH4prYuv3mfO',
		title : 'h0UXEqxn51LkcedB',
		prices : array(
			$client->labeledPrice(
				label : '7vhm9ZxPNCLE0tWd',
				amount : 6637696979329516883,
			),
		),
	),
	tip_amount : 6457430381375414331,
	currency : '04IZrz6pDstRSWBl',
	total_amount : -861396328990262087,
	credentials_title : 'Plym4pbX6kzBtivL',
	users : array(
		$client->userEmpty(
			id : 9073250342470451980,
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
			id : -5680679674495037735,
			access_hash : -6714160359844779113,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 25,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ab5J2RrIX9he40sL',
					reason : 'nkb0T12D7ypelG5d',
					text : '4b8uzCEXhWGoklfY',
				),
			),
			bot_inline_placeholder : 'IQZwVPp2bmakWlK8',
			lang_code : 'WIpjmXcZstePwEVM',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 14,
			color : $client->peerColor(
				color : 66,
				background_emoji_id : 4030783198036897497,
			),
			profile_color : $client->peerColor(
				color : 0,
				background_emoji_id : 5651970570806624149,
			),
			bot_active_users : 40,
			bot_verification_icon : -4893740234638885576,
			send_paid_messages_stars : 7103790210167500927,
		),
	),
);
```