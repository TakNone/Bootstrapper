# payments.paymentReceiptStars

**Description** : *Receipt for payment made using Telegram Stars*

**Layer** : 233

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
	date : 57,
	bot_id : 4295469300311042190,
	title : 'LPHetb7kBnDThSJQ',
	description : 'sj5mhPyAQrR9vUgY',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 1944677673728359877,
		size : 80,
		mime_type : 'heYw2b5vdnEaQyVB',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 1,
				h : 74,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'gwxu8c3Y09bCB16h',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 13,
					x : 1598806.9130859375,
					y : -676367.318359375,
					zoom : -1043192.3271484375,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -1651079.751953125,
				w : 38,
				h : 62,
				preload_prefix_size : 59,
				video_start_ts : 1068800.9931640625,
				video_codec : 'D6S0CA17Hw2RquNV',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 17,
				title : 'en5vZVFROxHWUCib',
				performer : 'oVj7hva0eKGOQMxS',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'UI6YZeTrDbygRH9j',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : '0x6GXAOihQMEfg3e',
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
		currency : 'tyvpYa2WgD4cC1Kd',
		prices : array(
			$client->labeledPrice(
				label : 'clLxZOk3j9eN0rn2',
				amount : -8095684343239405496,
			),
		),
		max_tip_amount : -4491701154335025397,
		suggested_tip_amounts : array(-6461542942404890745),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 78,
	),
	currency : 'TY6Cn8KP2Afm3U7y',
	total_amount : 3281454967013960618,
	transaction_id : 'tlDS49XTd7a5jzYn',
	users : array(
		$client->userEmpty(
			id : -2181085109160794345,
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
			bot_forum_sidebar : true,
			id : -7971058943625491944,
			access_hash : -1404196418691502822,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 99,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'VFWSMiJzbYOHDNG1',
					reason : 'F7VliSwrOzkR5yce',
					text : 'ejupfmvw4ZW6I7Bz',
				),
			),
			bot_inline_placeholder : 'fICePU2waAXVSbDq',
			lang_code : '8O2KRFWg1l3YuTaZ',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					deletable : true,
					expired : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 17,
			),
			color : $client->peerColor(
				color : 25,
				background_emoji_id : 6795507967457831553,
			),
			profile_color : $client->peerColor(
				color : 40,
				background_emoji_id : -7352610508425734284,
			),
			bot_active_users : 86,
			bot_verification_icon : 5514506532665142653,
			send_paid_messages_stars : -260681264763519743,
			linked_community_id : 8682721528266850706,
		),
	),
);
```