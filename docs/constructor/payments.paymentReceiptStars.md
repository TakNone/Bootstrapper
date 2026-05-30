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
	date : 71,
	bot_id : -3270977286228806367,
	title : 'jt18BaxUb7qwi4zW',
	description : '6FUwAmOYq1MDHTaW',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -5825664877264549814,
		size : 100,
		mime_type : 'qDHJia9t526jnZV7',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 22,
				h : 78,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'F92baSsoBEYMZI4U',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 24,
					x : 99737.1552734375,
					y : 393316.9140625,
					zoom : 232467.0673828125,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 122366.091796875,
				w : 73,
				h : 45,
				preload_prefix_size : 56,
				video_start_ts : -1325768.2734375,
				video_codec : 'vD0hIqE75OUrX8G2',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 4,
				title : 'SxK0feApQ8XkcVid',
				performer : 'kjwJmKCPZgMTFIXi',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : '28Umv7hoaA5VydRP',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'UupPWJ975qz3KFcv',
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
		currency : 'AySBGqmF76oXNdt4',
		prices : array(
			$client->labeledPrice(
				label : 'laGi2OWtpUIAmrjK',
				amount : -289566579423530589,
			),
		),
		max_tip_amount : 1145850895649695386,
		suggested_tip_amounts : array(-3287607246895134573),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 43,
	),
	currency : 'h1ReUWr2szu8BpOZ',
	total_amount : -2334124812355481107,
	transaction_id : 'T6MBi3tsNSlpfU5C',
	users : array(
		$client->userEmpty(
			id : 7864349090631587436,
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
			id : -9098515006098663793,
			access_hash : -4132417090902136876,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 4,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ERzr83LuqYKTPvD7',
					reason : '0VLgXpBNTbk2DWMd',
					text : 'E5vj9foJpbNg08zr',
				),
			),
			bot_inline_placeholder : 'nykPDjXao4fLGwpA',
			lang_code : 'OXxj6lhcPE0ULt8d',
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
				max_id : 67,
			),
			color : $client->peerColor(
				color : 5,
				background_emoji_id : 7106034925202060543,
			),
			profile_color : $client->peerColor(
				color : 62,
				background_emoji_id : -1043498841982865065,
			),
			bot_active_users : 65,
			bot_verification_icon : -2695528511895805144,
			send_paid_messages_stars : -1748317823269774063,
		),
	),
);
```