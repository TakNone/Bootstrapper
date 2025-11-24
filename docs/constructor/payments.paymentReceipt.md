# payments.paymentReceipt

**Description** : *Receipt*

**Layer** : 218

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
	date : 84,
	bot_id : -1593827573691555122,
	provider_id : -4747428521842376773,
	title : 'xGvkXFaoyZwSQVfI',
	description : 'jsYCWuy5ScKXnAGV',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 2971977397186057532,
		size : 26,
		mime_type : 'ErunmFJ53wRfUGzh',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 52,
				h : 68,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'vgMxAbI37FOkK2sC',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 92,
					x : 60635.87890625,
					y : 798463.068359375,
					zoom : -187110.033203125,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -1406863.3251953125,
				w : 30,
				h : 6,
				preload_prefix_size : 24,
				video_start_ts : -439667.708984375,
				video_codec : 'e5XdAob7QOIn1cPJ',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 18,
				title : 'rdeKAtGVzRvmPu2X',
				performer : 'Xxzge6ZLjmlVoU4A',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : '2aHlNySmP0F9W4Tk',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'w98nJGUWtNDLrXjo',
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
		currency : 'VDb14qky2X3c6Eow',
		prices : array(
			$client->labeledPrice(
				label : 'WOFURyQtdrV9gc2m',
				amount : 5480205790717382112,
			),
		),
		max_tip_amount : 2382635724291263238,
		suggested_tip_amounts : array(1906444286321689798),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 33,
	),
	info : $client->paymentRequestedInfo(
		name : 'RhiIPJ8wNg4sCBYd',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : '6AHFSiocWJTyZV1I',
			street_line2 : 'fLDiwIoYVdAX2Za7',
			city : 'AqMYsZECoIj7uWvD',
			state : 'NFcT9vCztqmig1Hr',
			country_iso2 : '4xlRI1KOWNDYMhb6',
			post_code : 'oUgM76xSRm0waGDu',
		),
	),
	shipping : $client->shippingOption(
		id : 'tj2NfgEosMaOr87v',
		title : 'SXOALVxBfZi8P3Gw',
		prices : array(
			$client->labeledPrice(
				label : '2NZF6OHTfEn5tiKP',
				amount : -9003059640547327246,
			),
		),
	),
	tip_amount : 1232536745423851036,
	currency : 'vhZ4a5zKAt0rqH67',
	total_amount : 7292849606458238154,
	credentials_title : 'G1z2kg74VErOoU6c',
	users : array(
		$client->userEmpty(
			id : -859967372331636860,
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
			id : -8931222147380172199,
			access_hash : 514988422919379216,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 67,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Cgq5l8mDuSeNKZUy',
					reason : 'kpvt7AOBqHu4zywe',
					text : 'M4ZRSUFqO9a3H1NW',
				),
			),
			bot_inline_placeholder : 'b7BpEj9vyRD1O4iT',
			lang_code : 'm2r47NZ0X5LCMhbW',
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
				max_id : 7,
			),
			color : $client->peerColor(
				color : 74,
				background_emoji_id : -88853130581104286,
			),
			profile_color : $client->peerColor(
				color : 82,
				background_emoji_id : 8392861872997884285,
			),
			bot_active_users : 90,
			bot_verification_icon : -8838503338849754714,
			send_paid_messages_stars : 5621205280138211195,
		),
	),
);
```