# payments.paymentReceipt

**Description** : *Receipt*

**Layer** : 216

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
	date : 27,
	bot_id : 5283632256273513963,
	provider_id : -7541028981110994799,
	title : 'PFTw0mLoc9CrijXt',
	description : 'rOmzA65Uv0F9wMNE',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 3193225051766528,
		size : 49,
		mime_type : 'u2AInXs14rKLhQPp',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 13,
				h : 46,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'LTRb7Ei6dvZ9mPgy',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -225778.7099609375,
				w : 78,
				h : 28,
				preload_prefix_size : 39,
				video_start_ts : 1053605.0263671875,
				video_codec : 'PyLpdTR7xY5jlekV',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 28,
				title : 'M803l5ImgAFzv6VB',
				performer : 'cGteIsLNdWrRJkjf',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'gk9e4KCpvmIToNLB',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'Kkp2MOX3bmGWEH1o',
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
		currency : 'zEnJPbcGhsC6q0e4',
		prices : array(
			$client->labeledPrice(
				label : 'HEJCINrgKtVO8jD6',
				amount : -8285492495322842007,
			),
		),
		max_tip_amount : -6416550052791249902,
		suggested_tip_amounts : array(-6370566856639466077),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 84,
	),
	info : $client->paymentRequestedInfo(
		name : 'Yv85cVWaf7hXBZTE',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : 'hRTbXSyfsVn1PJza',
			street_line2 : 'H9xFIsSBGeycDJwt',
			city : 'pGyJxRFDkcEXm4wC',
			state : 'p8HJSucsKytBRrxv',
			country_iso2 : 'XD8EqACkHw5M71NB',
			post_code : 'iyTrxANwOep8jRfa',
		),
	),
	shipping : $client->shippingOption(
		id : 'Bjq5umFbCzgtasdH',
		title : '64YUrL3KCpi5GQAF',
		prices : array(
			$client->labeledPrice(
				label : 'Rm90OPp3FE5LiBsG',
				amount : 44560345248601031,
			),
		),
	),
	tip_amount : -6098834901031798277,
	currency : 'kngzOBmVdAQx9SC4',
	total_amount : -5442411999131860976,
	credentials_title : 'HvD2OMU9ztPxQnwe',
	users : array(
		$client->userEmpty(
			id : -936577586912317092,
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
			id : 541451173947059629,
			access_hash : -1736654090901467504,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 53,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'vj62Kfp7Rr3tBugQ',
					reason : 'uIU3pJmA0iTcfjrL',
					text : 'hARrKj9BV0mO56ST',
				),
			),
			bot_inline_placeholder : 'xlXqeK7HS0t1cPzi',
			lang_code : 'LcVdmPsZp0wo1DFv',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 65,
			color : $client->peerColor(
				color : 92,
				background_emoji_id : -8927361666134568809,
			),
			profile_color : $client->peerColor(
				color : 36,
				background_emoji_id : 4050573993103736949,
			),
			bot_active_users : 44,
			bot_verification_icon : -1825257275863566628,
			send_paid_messages_stars : -4725004508242571842,
		),
	),
);
```