# payments.paymentReceiptStars

**Description** : *Receipt for payment made using Telegram Stars*

**Layer** : 229

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
	date : 53,
	bot_id : 749619127383753215,
	title : 'hFoIf7Gv6ruyTMq3',
	description : 'G1JMA6EyfsUiIN0Q',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -6508331579960437063,
		size : 44,
		mime_type : 'nx9X6aSGOJQMwgZc',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 38,
				h : 83,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'rNa3nxYzO4jBit0d',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 6,
					x : -587654.6396484375,
					y : 1564342.6279296875,
					zoom : -97813.85546875,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1278929.5673828125,
				w : 43,
				h : 9,
				preload_prefix_size : 41,
				video_start_ts : 383483.458984375,
				video_codec : 'BdS8VZzW1ejC65ny',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 14,
				title : 'lQST7NpCnYhcI4R0',
				performer : 'pCOQHGNRYUaBItc8',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : '4GtIlF6jYyzx2kBn',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'JTpa7nPBIEvCheXG',
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
		currency : 'XgxdmOB5sEtwS7Hh',
		prices : array(
			$client->labeledPrice(
				label : 'XjUT4KAvHDoeJLIz',
				amount : -905175029085670018,
			),
		),
		max_tip_amount : -5569097877166819171,
		suggested_tip_amounts : array(-4215499368055582531),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 66,
	),
	currency : 'jBCpP2HAmYrFUIc1',
	total_amount : 8665675157364664136,
	transaction_id : 'qVD6A5sMQzifRNEk',
	users : array(
		$client->userEmpty(
			id : -2130335626131037802,
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
			id : 5347363997396957564,
			access_hash : -3544042551455861093,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 78,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'YzyqBmVIvU4ldpow',
					reason : 'DhH3w6ZJzkpyIROK',
					text : 'LEplx3Imbos0u52t',
				),
			),
			bot_inline_placeholder : 'dr4Ig9p20vYqz5o8',
			lang_code : 'UkZ2tq1H9xuzsG85',
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
				max_id : 37,
			),
			color : $client->peerColor(
				color : 48,
				background_emoji_id : -9061694584582051545,
			),
			profile_color : $client->peerColor(
				color : 32,
				background_emoji_id : -4881841197190263297,
			),
			bot_active_users : 66,
			bot_verification_icon : 8691080815676833740,
			send_paid_messages_stars : 5722371783913592818,
			linked_community_id : 750582289891092993,
		),
	),
);
```