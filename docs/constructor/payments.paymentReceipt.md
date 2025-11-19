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
	date : 99,
	bot_id : -8314862807172146174,
	provider_id : -3943882395798276480,
	title : 'QWKcUmtzPRrGwY2j',
	description : 'Wc9Ex0FP8jJnqDkp',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -4804471922795963564,
		size : 79,
		mime_type : 'd7NC5AZTgkfilvL2',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 20,
				h : 78,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'm7YUqFLz1IGMVfjC',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 75,
					x : -1306546.1953125,
					y : 1179318.2265625,
					zoom : 873673.5322265625,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -1696914.783203125,
				w : 100,
				h : 84,
				preload_prefix_size : 76,
				video_start_ts : 719697.7578125,
				video_codec : 'unYNQaczyR1wkLe0',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 81,
				title : '7KvAyHNBtsE0coMa',
				performer : 'gacFekbShnA8GOrE',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'IeUHaPEcXqOCbgNd',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : '9ZOLcbJd5x0e1SBu',
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
		currency : 'BLTZhcWeEKtJ2naG',
		prices : array(
			$client->labeledPrice(
				label : 'Eae4JpsjqodHXIPT',
				amount : 212148447686368598,
			),
		),
		max_tip_amount : -296592015939504508,
		suggested_tip_amounts : array(-7979640173210928622),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 20,
	),
	info : $client->paymentRequestedInfo(
		name : 'S2GwF6mPL15qesxt',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : 'RnkUJtCVG1jaIWs4',
			street_line2 : 'RjCwvgiSKPaYnI40',
			city : '3U4KEHC1dslTBYAq',
			state : 'tZb2J06c7QMBxfPn',
			country_iso2 : 'c7Wt2QybIdJhxKFw',
			post_code : 'YQpNj4cLWtqxFny7',
		),
	),
	shipping : $client->shippingOption(
		id : 'toLdnq5bFIZXCeAu',
		title : 'G7esZkdTqORrycBJ',
		prices : array(
			$client->labeledPrice(
				label : 'txQlH9ySg1L2X8iB',
				amount : -4329112625368432785,
			),
		),
	),
	tip_amount : 8466041705222640019,
	currency : 'lrcNV0ITb4FjWEtn',
	total_amount : -1926712097737497019,
	credentials_title : 'yDm8gCFGUdjnYV0a',
	users : array(
		$client->userEmpty(
			id : -7857285042494253409,
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
			id : -5696370477190095978,
			access_hash : -2561429941417319911,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 37,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'arRmUHwpciWIBqJX',
					reason : 'mLEnhdRwt625YyGv',
					text : 'simxyOt6vMnpZ5d4',
				),
			),
			bot_inline_placeholder : 'xcf9gFi7oSXQd5tq',
			lang_code : 'I4GAHXgnkyDoYrRm',
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
				max_id : 59,
			),
			color : $client->peerColor(
				color : 14,
				background_emoji_id : -1863850767703874780,
			),
			profile_color : $client->peerColor(
				color : 67,
				background_emoji_id : 2692500243441029263,
			),
			bot_active_users : 33,
			bot_verification_icon : 8301665808881178725,
			send_paid_messages_stars : 8517763888098037585,
		),
	),
);
```