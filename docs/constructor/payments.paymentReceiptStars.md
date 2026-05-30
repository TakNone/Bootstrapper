# payments.paymentReceiptStars

**Description** : *Receipt for payment made using Telegram Stars*

**Layer** : 225

```tl
payments.paymentReceiptStars#dabbf83a flags:# date:int bot_id:long title:string description:string photo:flags.2?WebDocument invoice:Invoice currency:string total_amount:long transaction_id:string users:Vector<User> = payments.PaymentReceipt;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>date</mark> | [`int`](type/int) | Date of generation |
| <mark>bot_id</mark> | [`long`](type/long) | Bot ID |
| <mark>title</mark> | [`string`](type/string) | Title |
| <mark>description</mark> | [`string`](type/string) | Description |
| **photo** | [`flags.2?WebDocument`](type/WebDocument) | Product photo |
| <mark>invoice</mark> | [`Invoice`](type/Invoice) | Invoice |
| <mark>currency</mark> | [`string`](type/string) | Currency, always XTR |
| <mark>total_amount</mark> | [`long`](type/long) | Amount of Telegram Stars |
| <mark>transaction_id</mark> | [`string`](type/string) | Transaction ID |
| <mark>users</mark> | [`Vector<User>`](type/User) | Info about users mentioned in the other fields |

---

## Type

[payments.PaymentReceipt](type/payments.PaymentReceipt)

---

## Example

```php
$paymentsPaymentReceipt = $client->payments->paymentReceiptStars(
	date : 15,
	bot_id : -130522737883854362,
	title : 'knzpsjBuDqN3Q8Yg',
	description : 'QlAPUk6anBrC5HWi',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 49984796830031012,
		size : 54,
		mime_type : 'n7f0QLzFsNcSZYeW',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 62,
				h : 35,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'SP0yAfr6uBl7HzI9',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 89,
					x : 1542706.80078125,
					y : -1635077.673828125,
					zoom : -574170.544921875,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -1097562.587890625,
				w : 97,
				h : 35,
				preload_prefix_size : 4,
				video_start_ts : 1009430.94140625,
				video_codec : 'xh87fRFGEtDO2Js3',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 84,
				title : 'EAGjS7LdN9oZfb32',
				performer : '1btmBv98VIN2eJpX',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'JhTcZYf4PA7Hb6p3',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'BGy1jq5Tka9Mn2OJ',
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
		currency : '1R4aqutHYCDTBQ68',
		prices : array(
			$client->labeledPrice(
				label : 'y18sWEm2QCFpvtRM',
				amount : 5715822777307684249,
			),
		),
		max_tip_amount : 1888225203903946586,
		suggested_tip_amounts : array(-5182140519475063733),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 18,
	),
	currency : '5FRpPaltnyvwIkMi',
	total_amount : -7923319940216710460,
	transaction_id : 'Y8d0N9HL5s6UAKjx',
	users : array(
		$client->userEmpty(
			id : -7862388219416716062,
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
			id : 2815364273642023954,
			access_hash : -914990044012154318,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 90,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '5dIj6WeSZnqcHCka',
					reason : 'TfZiFhHDeIr4GKtV',
					text : '2PQ1vRUwMDZ0yHVY',
				),
			),
			bot_inline_placeholder : 'LW51kBb2vqOQm9dK',
			lang_code : '9qPnXLJuwf1mH3bj',
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
				max_id : 93,
			),
			color : $client->peerColor(
				color : 69,
				background_emoji_id : -1640634000223376452,
			),
			profile_color : $client->peerColor(
				color : 18,
				background_emoji_id : 8286949207788139191,
			),
			bot_active_users : 83,
			bot_verification_icon : -4118649859180485728,
			send_paid_messages_stars : -3254984391082469702,
		),
	),
);
```