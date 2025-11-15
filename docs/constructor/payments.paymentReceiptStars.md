# payments.paymentReceiptStars

**Description** : *Receipt for payment made using Telegram Stars*

**Layer** : 216

```tl
payments.paymentReceiptStars#dabbf83a flags:# date:int bot_id:long title:string description:string photo:flags.2?WebDocument invoice:Invoice currency:string total_amount:long transaction_id:string users:Vector<User> = payments.PaymentReceipt;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	date : 37,
	bot_id : -1441158055357357017,
	title : 'uJTbFxrstUXv2gpe',
	description : 'b07pADBkV98MHWUo',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -223571469845329709,
		size : 58,
		mime_type : 'rW3U0Ab4TpsK85nH',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 97,
				h : 67,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'IJWSwRCUvyDHY4qG',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 145940.4140625,
				w : 77,
				h : 93,
				preload_prefix_size : 85,
				video_start_ts : -958024.5009765625,
				video_codec : 'kV0ROnxfycMzdSto',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 2,
				title : 'nDbsSRPQ2WIyeNtr',
				performer : 'IwXhrWkTDl6aNEcg',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'dnQMy4R1ulko9s7t',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'IRemZSOpgJwL1uG6',
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
		currency : 'LqVBlRzIjwkGhxaT',
		prices : array(
			$client->labeledPrice(
				label : 'oiwbEpH8XquhQLca',
				amount : 5064154185345706469,
			),
		),
		max_tip_amount : 6107052216464541566,
		suggested_tip_amounts : array(2349446934615834747),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 56,
	),
	currency : 'tnebJc0SXs3djx6i',
	total_amount : 8326623430364920025,
	transaction_id : '4wchMU1tWLi2nYsJ',
	users : array(
		$client->userEmpty(
			id : -2536214675657975870,
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
			id : -8590955263377731651,
			access_hash : 2091844360416696121,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 64,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '0I13GrvSa2ebQ6xd',
					reason : '4NWXrILuOwqPbl6M',
					text : 'wEPQo8yHsWFSl0z4',
				),
			),
			bot_inline_placeholder : 'Y95AIyShktEQ1sRl',
			lang_code : 'N8g7s92h51iLbEmf',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 36,
			color : $client->peerColor(
				color : 32,
				background_emoji_id : 8767456081908365261,
			),
			profile_color : $client->peerColor(
				color : 36,
				background_emoji_id : -8514957212606827993,
			),
			bot_active_users : 19,
			bot_verification_icon : 2131993796850047244,
			send_paid_messages_stars : -901970455364104871,
		),
	),
);
```