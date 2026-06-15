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
	date : 70,
	bot_id : 216436423891186711,
	provider_id : 2805155643890326814,
	title : 'Tx3HSnaVN58kpc9f',
	description : '83ADy7sLmJBPEFGS',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -8816678477642406286,
		size : 15,
		mime_type : 'K0UXDwFg2PId1lsH',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 44,
				h : 62,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'TBYLvxQHA8uDa14n',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 41,
					x : 414141.3662109375,
					y : 95082.4208984375,
					zoom : -177697.08984375,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -1386388.802734375,
				w : 12,
				h : 65,
				preload_prefix_size : 76,
				video_start_ts : 1778498.037109375,
				video_codec : '9ey2jhD3V6FOCKZt',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 14,
				title : '4pX1lyNuYfmDPszb',
				performer : 'tFeK3lQdnypzLi5c',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'gHTcU4vPXI3hBi0f',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'XwmUvok03ND9FVsZ',
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
		currency : 'tIkiDsGJjLfmaT3O',
		prices : array(
			$client->labeledPrice(
				label : '1VeGdYWy8CU7Mbmf',
				amount : -4616177596298745772,
			),
		),
		max_tip_amount : 3287244611194956035,
		suggested_tip_amounts : array(4387959073977853877),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 96,
	),
	info : $client->paymentRequestedInfo(
		name : 'E96MKRgHY4leAGsr',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : 'V5AaXsneh9mWbRg4',
			street_line2 : 'pf5eg1c4IOQYlHsj',
			city : 'nN6epgOMah9dcQGm',
			state : 'Tvz2mEVl89xenQtO',
			country_iso2 : 'XcCjBkVZuSl17fT3',
			post_code : 'ZvHF8eVO4z52SwIf',
		),
	),
	shipping : $client->shippingOption(
		id : 'BxOfK76wn5QTy0m2',
		title : 'xKftihjB6rQOJzMV',
		prices : array(
			$client->labeledPrice(
				label : 'V1084BKfTkpl6REt',
				amount : 3195400145586615721,
			),
		),
	),
	tip_amount : -874416912784091071,
	currency : 'JhgCA2s0fLV79Wnx',
	total_amount : 3139804510977421308,
	credentials_title : 'a4nl53pQZwEFUo1P',
	users : array(
		$client->userEmpty(
			id : -7354127188610876780,
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
			id : 339917131754491891,
			access_hash : 8516695157708983582,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 11,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '563Qt2ZI9jruJRnf',
					reason : 'jkRG47BQJDCiVnzS',
					text : '8OPLj3fax9WXYmc5',
				),
			),
			bot_inline_placeholder : 'njIUY7QzPcBSZwbr',
			lang_code : 'nwpE4MeqOGkR0Fz1',
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
				max_id : 38,
			),
			color : $client->peerColor(
				color : 69,
				background_emoji_id : -1576812531298134935,
			),
			profile_color : $client->peerColor(
				color : 7,
				background_emoji_id : 7284338335780943673,
			),
			bot_active_users : 90,
			bot_verification_icon : 4959391299482647337,
			send_paid_messages_stars : 4846250711117954664,
		),
	),
);
```