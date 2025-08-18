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
	date : 93,
	bot_id : -1708275521594554293,
	provider_id : 1711199835381061589,
	title : '8NlyeZ652dgm3K7T',
	description : 'nTAbpgSGlMJsEUXK',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 1376036622870891028,
		size : 88,
		mime_type : 'AKjkfodwD0vL9aIW',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 77,
				h : 15,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'Y7VbCSBTaiwex2Ph',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 454544.6376953125,
				w : 33,
				h : 19,
				preload_prefix_size : 27,
				video_start_ts : -944596.8701171875,
				video_codec : 'lpvMmW5wysdLcazO',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 54,
				title : 'ctVNl5e7mDUZpzWa',
				performer : 'BTvo5KSq2gnGZ4kY',
				waveform : '9U???LiveProto???²',
			),
			$client->documentAttributeFilename(
				file_name : 'UxnPXqtWRauBvs1f',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'seHJxdZ8uCMNovzg',
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
		currency : 'aSk1ZVJn9gwTyqs5',
		prices : array(
			$client->labeledPrice(
				label : 'dwH8YzcZmUROTiNx',
				amount : -5122845135563749932,
			),
		),
		max_tip_amount : -8975177313632897699,
		suggested_tip_amounts : array(-5037987923066461405),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 29,
	),
	info : $client->paymentRequestedInfo(
		name : 'ajQyN7kwtX5bh8L6',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : '0GYdOAaXokhu4Bni',
			street_line2 : 'wfTbajCJHKqIo3OE',
			city : 'LrMfIalBb7oEjVzO',
			state : '8xcVoiKQrL0O5YIE',
			country_iso2 : 'liBSyg8InpZtv0PM',
			post_code : 'OjniWNe4bYZ2Jts3',
		),
	),
	shipping : $client->shippingOption(
		id : 'j8z2NKsrGE6LRtBF',
		title : 'lg8LV9eEbwvRC15o',
		prices : array(
			$client->labeledPrice(
				label : '4YBuWK0C97DLUTtN',
				amount : -4868390290177969809,
			),
		),
	),
	tip_amount : 4602117300126626977,
	currency : 'ClmrzUvjHxKb36ua',
	total_amount : -1468310782108458888,
	credentials_title : 'SGmVQ7RlhJZu5q6T',
	users : array(
		$client->userEmpty(
			id : 349021663710210271,
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
			id : -1166952224484522941,
			access_hash : 614007207503637268,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 77,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'jZHFxCigfMhoSAuU',
					reason : '91kofuhLn4pUY5yG',
					text : 'wWoNOlUGDCZAMpKt',
				),
			),
			bot_inline_placeholder : 'Ziz2PofNJxt1UMlL',
			lang_code : 'wfHvTusxo70MSlZp',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 83,
			color : $client->peerColor(
				color : 52,
				background_emoji_id : -961217624500877197,
			),
			profile_color : $client->peerColor(
				color : 22,
				background_emoji_id : -5338025828832543662,
			),
			bot_active_users : 58,
			bot_verification_icon : -7302981364521270584,
			send_paid_messages_stars : 3100975909524090623,
		),
	),
);
```