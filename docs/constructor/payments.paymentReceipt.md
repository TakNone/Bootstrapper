# payments.paymentReceipt

**Description** : *Receipt*

**Layer** : 216

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
	date : 43,
	bot_id : -8203119171618006827,
	provider_id : 1302432437243252654,
	title : 'iu6lt7OPbjELqVpa',
	description : 'spk6ZIOx51iWnroV',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 3504616663418010494,
		size : 78,
		mime_type : 'GlxVHdNMZ56LEnuq',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 76,
				h : 69,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'whqQBpHxD8t60YPI',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -761529.4580078125,
				w : 41,
				h : 49,
				preload_prefix_size : 100,
				video_start_ts : 1616108.9765625,
				video_codec : 'ZLiCNHmx7kfgs3K9',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 16,
				title : 'tscmZzWBuoGSn8qd',
				performer : 'Bg0AeHldX7YuwpbS',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'aNjg5TMbXohLAmSQ',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'qheBWgJmHDpuKCrd',
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
		currency : 'o0QyYrTMR6VfbN14',
		prices : array(
			$client->labeledPrice(
				label : 'bosFXGaKQxRfDkl2',
				amount : 2978726335466353846,
			),
		),
		max_tip_amount : -7523126538298395151,
		suggested_tip_amounts : array(932142327269061624),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 100,
	),
	info : $client->paymentRequestedInfo(
		name : 'sAx72c1Ez46Y90Gf',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : '9TfOcdw2D5VimsoB',
			street_line2 : 'Mra7m3bDsXUJEi6W',
			city : '3RSg5fo9hb8WFyu6',
			state : 'EOiCwe8Ar0JguTV5',
			country_iso2 : '2lpFAzmfUDSIixw8',
			post_code : 'vgAPRfX3KaEUQr41',
		),
	),
	shipping : $client->shippingOption(
		id : 'RXdky31ngP8az6Gc',
		title : 'm3yaoW80zUgAlJ5r',
		prices : array(
			$client->labeledPrice(
				label : '94AXhW5k1lNdiyjB',
				amount : -928118384717523049,
			),
		),
	),
	tip_amount : 1484924338666817135,
	currency : 'MTtiUxH1n9vkulme',
	total_amount : 3833614354632706252,
	credentials_title : 'hfsHz7VZlOA9nE6w',
	users : array(
		$client->userEmpty(
			id : 548859208608883656,
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
			id : 5587280365690164289,
			access_hash : 4644455752823484462,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 18,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'lc8jAMuzoFD1r9kX',
					reason : '4pEfMgjn6zcuKhJx',
					text : 'VnZJz0M7e9T8os4N',
				),
			),
			bot_inline_placeholder : 'O4QuD97nRZi6CAlF',
			lang_code : 'x5vRoXhpI31uOPtf',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 49,
			color : $client->peerColor(
				color : 86,
				background_emoji_id : -8139181635344697176,
			),
			profile_color : $client->peerColor(
				color : 28,
				background_emoji_id : -2748503677845605117,
			),
			bot_active_users : 82,
			bot_verification_icon : 8857387804281078676,
			send_paid_messages_stars : -3297944422816631677,
		),
	),
);
```