# payments.paymentReceipt

**Description** : *Receipt*

**Layer** : 214

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
	date : 40,
	bot_id : -1015583604864400615,
	provider_id : 3030797738854841148,
	title : 'B9bvOLpaXSDYEQNy',
	description : 'xejzRmyGK4SPs76Z',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -5398024759258762749,
		size : 8,
		mime_type : 'GmUdCR2o8hgE9JLr',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 74,
				h : 77,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : '6FDWt7Rxe3ZXUfOQ',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 513009.1708984375,
				w : 0,
				h : 62,
				preload_prefix_size : 25,
				video_start_ts : 1878727.5146484375,
				video_codec : 'b0DsnX6QhYfSkR1Z',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 81,
				title : 'lGwgMWKckuYN3Ezs',
				performer : '2dgmPsp7IyWSnDvM',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : '7FeKNikngmSPjMq1',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'AwU1uHZXiapDFd2x',
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
		currency : 'vbiHpxJF2SkNGPT0',
		prices : array(
			$client->labeledPrice(
				label : 'lh6MKH7XxVyJ8svP',
				amount : 3015675854611726747,
			),
		),
		max_tip_amount : 7115265674182365416,
		suggested_tip_amounts : array(2366305086367090954),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 90,
	),
	info : $client->paymentRequestedInfo(
		name : 'lUSG43yWmztXQiRv',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : 'ZEG8xwjdH05IvLbU',
			street_line2 : '1Y2JFZXwjydOUPmN',
			city : 'BjqLkOa5P6ZM9NoJ',
			state : 'eI52HOQ1UPDwWrXu',
			country_iso2 : 'l5UwRJ2TYkba7Vnp',
			post_code : 'N0M2ywecadKuspXi',
		),
	),
	shipping : $client->shippingOption(
		id : 'WISabp0219YtTz4r',
		title : 'IT0k26vfY4eKzc8S',
		prices : array(
			$client->labeledPrice(
				label : 'vKWaAugRMDBzFfHS',
				amount : 55453174160291527,
			),
		),
	),
	tip_amount : -6814984226808502235,
	currency : 'BkFcXWY1JzbpMVOg',
	total_amount : 5454536872057025609,
	credentials_title : 'unmkJphFU1zCe02l',
	users : array(
		$client->userEmpty(
			id : 1411569652215766472,
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
			id : -6594449405932778646,
			access_hash : -366095512175792964,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 30,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'EQaBXskInfZjR7rp',
					reason : '4z1p2OTNajufboMw',
					text : 'B8Z2HMpq7ExDAOCs',
				),
			),
			bot_inline_placeholder : 'a8HQU3MrRg0tNplh',
			lang_code : 'nVcRo83gWyfqMLCA',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 90,
			color : $client->peerColor(
				color : 23,
				background_emoji_id : -5538767250806265989,
			),
			profile_color : $client->peerColor(
				color : 87,
				background_emoji_id : 3713251099847353476,
			),
			bot_active_users : 68,
			bot_verification_icon : 1619381326363717682,
			send_paid_messages_stars : 1824777453689078838,
		),
	),
);
```