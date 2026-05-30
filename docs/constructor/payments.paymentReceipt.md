# payments.paymentReceipt

**Description** : *Receipt*

**Layer** : 225

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
	date : 39,
	bot_id : -4563854700277898637,
	provider_id : 5373333076401628457,
	title : '8QGKhUvqtSPYajTg',
	description : 'V7ZfBH39km8SNAjs',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -1453436081519095971,
		size : 18,
		mime_type : 'JK4MnB1NrXV8LYtw',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 32,
				h : 56,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'RKce06klVfIY7Uvg',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 56,
					x : 431837.2451171875,
					y : 950854.9306640625,
					zoom : -318567.9013671875,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1017016.4755859375,
				w : 70,
				h : 74,
				preload_prefix_size : 22,
				video_start_ts : -1725290.9208984375,
				video_codec : 'tB3ZAKfuQ9oHL1Vj',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 75,
				title : 'odLVGviIMn2W9wzm',
				performer : 'QGqY4NEZok61rmyi',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'KoPUVwF0kzLGjvNh',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'eg0PqbvoGpOJKdAa',
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
		currency : 'MNE9Ykdu2lm6iPCv',
		prices : array(
			$client->labeledPrice(
				label : 'wo9LrNn8JMmcA1zP',
				amount : -8153046673663615348,
			),
		),
		max_tip_amount : 2061613452801727809,
		suggested_tip_amounts : array(-1458154875218905223),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 97,
	),
	info : $client->paymentRequestedInfo(
		name : 'Qrpf8h2qM5uYnZ1d',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : 'oyUVzHmvEeLkrhJg',
			street_line2 : 'RuE5XqgwB0HA2bUM',
			city : 'fTi1Vjn9wkl2PEcA',
			state : '4sdiVvo6KR7rAuCb',
			country_iso2 : 'bDs9xUFpgrQR3lSi',
			post_code : 'CQdgKE2NWSsVU84Z',
		),
	),
	shipping : $client->shippingOption(
		id : 'Pjh9vp1IWXRmK47g',
		title : 'dOlpcSyWn6F3VeoB',
		prices : array(
			$client->labeledPrice(
				label : '04xDGdpFigj7y5SN',
				amount : -7090079332978409028,
			),
		),
	),
	tip_amount : -8850504704463044609,
	currency : 'OHwlrMYLniKmqRh4',
	total_amount : 3710285355927016093,
	credentials_title : 'olFZY1GySavIOUxV',
	users : array(
		$client->userEmpty(
			id : 2293977311849554181,
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
			id : -5491696777743003490,
			access_hash : -6179508959852688432,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 87,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '7UtAdIXNhQzBjVx5',
					reason : 'V8hjYwyOkazcbU3p',
					text : 'LBk4tuZfYVwRm0cN',
				),
			),
			bot_inline_placeholder : 'DANLjeJ2ZCwPtYTI',
			lang_code : '5fzjk4hnmKBQ0D82',
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
				max_id : 5,
			),
			color : $client->peerColor(
				color : 60,
				background_emoji_id : 5846384447217576724,
			),
			profile_color : $client->peerColor(
				color : 94,
				background_emoji_id : 5658320044499536033,
			),
			bot_active_users : 3,
			bot_verification_icon : 6238770961886074282,
			send_paid_messages_stars : 788303579849838977,
		),
	),
);
```