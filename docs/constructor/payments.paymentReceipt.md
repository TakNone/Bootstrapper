# payments.paymentReceipt

**Description** : *Receipt*

**Layer** : 229

```tl
payments.paymentReceipt#70c4fe03 flags:# date:int bot_id:long provider_id:long title:string description:string photo:flags.2?WebDocument invoice:Invoice info:flags.0?PaymentRequestedInfo shipping:flags.1?ShippingOption tip_amount:flags.3?long currency:string total_amount:long credentials_title:string users:Vector<User> = payments.PaymentReceipt;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	date : 45,
	bot_id : -3904813546481223808,
	provider_id : 3992087585902051317,
	title : '9lMrCt7wEGgNmUZV',
	description : 'pfdtOeVvD8SZTx7E',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 6683874380470289231,
		size : 8,
		mime_type : 'WNZyGJMp59PArdaQ',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 37,
				h : 3,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'ejmFJQ4HINrwaOPd',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 5,
					x : -883688.7333984375,
					y : 1545315.5712890625,
					zoom : 261652.68359375,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -832847.4296875,
				w : 72,
				h : 20,
				preload_prefix_size : 76,
				video_start_ts : -16404.205078125,
				video_codec : 'nNSzC7g8UxVF3ofe',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 79,
				title : '8lObFGIr7W9R2uZP',
				performer : 'SmZ7rOi6oNTIBU21',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'vMfZRjmsYk6UNhAT',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : '65O4s32UiukjKZhJ',
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
		currency : 'psqB4PotYFmIdDW0',
		prices : array(
			$client->labeledPrice(
				label : 'hnSZ8bUt9q2GVN0s',
				amount : 7355144292260747555,
			),
		),
		max_tip_amount : 1776605636613169815,
		suggested_tip_amounts : array(-5329659931193931209),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 31,
	),
	info : $client->paymentRequestedInfo(
		name : 'xOpa78eYmtAoIWd1',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : 'qIpQcg9UK0DZtNWv',
			street_line2 : 'JRUIOliHzgsuBmhP',
			city : 'kG9RvBmszJeQMEwU',
			state : 'mTkiLsdVQNOP0xub',
			country_iso2 : 'ILTr6wUO9X48pnPm',
			post_code : 'YkJhCR1LFtS4eTwv',
		),
	),
	shipping : $client->shippingOption(
		id : 'gFA5KSoLDdBU1kb4',
		title : 'dPcqWyD6ZNxkbBoQ',
		prices : array(
			$client->labeledPrice(
				label : 'DydaAFpjWLShVHZ7',
				amount : 5847911355538594614,
			),
		),
	),
	tip_amount : -5102441384037262495,
	currency : 'kDbJhgwMqzvsC4YB',
	total_amount : -2070561044012244041,
	credentials_title : '8IXRlugAkzPZYeH0',
	users : array(
		$client->userEmpty(
			id : -5658748710940152856,
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
			id : -6010467815986048423,
			access_hash : 8648050467218069784,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 52,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '4i2F9x5PaIBQtjNR',
					reason : 'daS9B5WDZ7C4yeLJ',
					text : 'aHCnbt6FogMx84rc',
				),
			),
			bot_inline_placeholder : 'zxFEm8AnJNo6Q2Zb',
			lang_code : '3AIkM6vJ8NxWY9Dd',
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
				max_id : 66,
			),
			color : $client->peerColor(
				color : 78,
				background_emoji_id : 5325952508461609189,
			),
			profile_color : $client->peerColor(
				color : 6,
				background_emoji_id : -3713982403797545108,
			),
			bot_active_users : 62,
			bot_verification_icon : 5308701798335931854,
			send_paid_messages_stars : 612819142786623595,
			linked_community_id : 5493696583244381802,
		),
	),
);
```