# payments.paymentReceiptStars

**Description** : *Receipt for payment made using Telegram Stars*

**Layer** : 222

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
	date : 69,
	bot_id : 216038110584035555,
	title : 'obB9psFIaxnvJuGU',
	description : 'hmST08gDN37OsIBM',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -6146185259784561221,
		size : 98,
		mime_type : 'gwPEzbA4JLopfix3',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 73,
				h : 49,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'ETQ8xoLd7lFMUAiX',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 70,
					x : 1345236.63671875,
					y : 1015588.6484375,
					zoom : -37685.224609375,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1069978.82421875,
				w : 61,
				h : 78,
				preload_prefix_size : 75,
				video_start_ts : -1406614.904296875,
				video_codec : 'YNGuAx9o2bUMi5y4',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 54,
				title : 'XnPioHmMRuhk4tbQ',
				performer : 'FLkePtwyNHh52ToB',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'Ng6HedYxDbwZ9y2I',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'wRKESahFQonfvtAy',
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
		currency : 'qh5CzUO4pFvK8ngs',
		prices : array(
			$client->labeledPrice(
				label : 'ndE0a3Ateu74YkOU',
				amount : -4809598568352069642,
			),
		),
		max_tip_amount : -2296680743962154999,
		suggested_tip_amounts : array(2048541212112048680),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 86,
	),
	currency : 'Nn3BRIYaGAT91O5l',
	total_amount : -913053663906185165,
	transaction_id : 'NB5Gf6Fn8aTsAtI1',
	users : array(
		$client->userEmpty(
			id : 2171073885936596666,
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
			id : 8753298747066060412,
			access_hash : -8894740443165039705,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 37,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'qyEdvaXCV9FY4GMr',
					reason : '91BIst4TSfYHchJi',
					text : 'f9M5Aq6Z4GbdwUBI',
				),
			),
			bot_inline_placeholder : 'vHRDTiK7kPNyxGfp',
			lang_code : 'A4nbk0x9escQoaLH',
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
				max_id : 51,
			),
			color : $client->peerColor(
				color : 80,
				background_emoji_id : 7573316845077766211,
			),
			profile_color : $client->peerColor(
				color : 54,
				background_emoji_id : 680340289646245450,
			),
			bot_active_users : 8,
			bot_verification_icon : -8504827009679976267,
			send_paid_messages_stars : 3394475416851255446,
		),
	),
);
```