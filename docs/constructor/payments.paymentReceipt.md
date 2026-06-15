# payments.paymentReceipt

**Description** : *Receipt*

**Layer** : 227

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
	date : 21,
	bot_id : -2176550825376198899,
	provider_id : -1104263764154510725,
	title : 'XKhxtgVC4lje5HPR',
	description : '1O3459iPfv0tVMyh',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -5794229510069024740,
		size : 88,
		mime_type : 'EAk62zb5ePyr8gSf',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 59,
				h : 61,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'lI6v93WOML4H5QKA',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 84,
					x : 746523.955078125,
					y : -161430.3427734375,
					zoom : 8990.794921875,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 745154.0712890625,
				w : 71,
				h : 36,
				preload_prefix_size : 8,
				video_start_ts : -443038.505859375,
				video_codec : 'FTszW4uUlM3pAKrm',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 29,
				title : 'PnNtFTlJm4ORaD1X',
				performer : 'aGYzJrI1ocBvHFfN',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'Pt1yElpAJrUBzHa0',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : '4v1CYbNAFTkaPLz9',
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
		currency : 'nS1BoI6ThWUK7gbm',
		prices : array(
			$client->labeledPrice(
				label : 'N6507zrE23bVwcLY',
				amount : 6238034002651133113,
			),
		),
		max_tip_amount : 8480174676124932027,
		suggested_tip_amounts : array(-5158918181133947778),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 34,
	),
	info : $client->paymentRequestedInfo(
		name : 'LHtUPKFJZymzsMVl',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : 'mi5BygZpYcS1N9EA',
			street_line2 : 'Mn0Qskp2Od16z89Z',
			city : 'cjItwUGXx4OEoePu',
			state : 'LwouyhJ4WkcFN9Ml',
			country_iso2 : '2akYB1sn4yUzqRHW',
			post_code : 'jgCr0VD9zpRQSvXq',
		),
	),
	shipping : $client->shippingOption(
		id : 's7bpIBVoyGxhLZdD',
		title : '25Yh6nQZJEagpBbL',
		prices : array(
			$client->labeledPrice(
				label : 'V6No2QiLDeBErn70',
				amount : -1518584992227781092,
			),
		),
	),
	tip_amount : -1112991385038369412,
	currency : 'rU3OzmWpo58e4LN7',
	total_amount : -688448671832356684,
	credentials_title : 'iK2cUG8ZvrDTPXqa',
	users : array(
		$client->userEmpty(
			id : -6668885789648334206,
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
			id : -1933109111199725216,
			access_hash : 301272598138350114,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 58,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'DijsFSvR3oyNJ4ke',
					reason : '0vBodImp5F6QtcL3',
					text : 'gPKjOmaNUdvXsHiM',
				),
			),
			bot_inline_placeholder : 'qMcuIBJkyt8Fs4ez',
			lang_code : 'pBIJSsPygvawemHt',
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
				max_id : 4,
			),
			color : $client->peerColor(
				color : 91,
				background_emoji_id : -4933687920624071953,
			),
			profile_color : $client->peerColor(
				color : 29,
				background_emoji_id : -7910238693210623329,
			),
			bot_active_users : 28,
			bot_verification_icon : 2269165295960985707,
			send_paid_messages_stars : -8931860716469180881,
		),
	),
);
```