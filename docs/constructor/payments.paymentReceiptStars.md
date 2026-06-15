# payments.paymentReceiptStars

**Description** : *Receipt for payment made using Telegram Stars*

**Layer** : 227

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
	date : 90,
	bot_id : -9001603574129599455,
	title : 'SKMVN0sJjFbgYH4k',
	description : 'JAO46HDPBN7jGQuZ',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 5856680413341768215,
		size : 76,
		mime_type : '6g4Sx8C9iQNuIqet',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 3,
				h : 72,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'TlQ4DqvJf3jxbsVr',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 96,
					x : -711392.6201171875,
					y : 1247204.3037109375,
					zoom : -790797.4013671875,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 633747.8798828125,
				w : 43,
				h : 44,
				preload_prefix_size : 5,
				video_start_ts : 1598534.7802734375,
				video_codec : 'RcATC7UoYk19jdhy',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 13,
				title : '6TOP4VZYWo7NsXwI',
				performer : 'cQ3Za4jq5nOT6PLK',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'X0EwC6npkW1hRDvy',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'NipWI0JXBjKCDbTH',
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
		currency : 'reg2NE954LBKW3Ja',
		prices : array(
			$client->labeledPrice(
				label : 'gapKW9GmBji18oq7',
				amount : -1733378699970784427,
			),
		),
		max_tip_amount : -1760139327339624709,
		suggested_tip_amounts : array(-2003896190162324444),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 78,
	),
	currency : 'LTeH9iyOpBrInxdb',
	total_amount : 1059522537563908174,
	transaction_id : '3jCNan7oxSO2EqvV',
	users : array(
		$client->userEmpty(
			id : -985500969819893316,
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
			id : 4103759547620465243,
			access_hash : 1201393389478651998,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 47,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ET4Rs3AHd5LnMK2e',
					reason : 'ZfEFDmo90BAcw73U',
					text : 'wfzH2WkPhro7YDva',
				),
			),
			bot_inline_placeholder : 'ymvQRMUVle9NL8oH',
			lang_code : '8bqUR3fB6k2gWlLh',
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
				max_id : 89,
			),
			color : $client->peerColor(
				color : 56,
				background_emoji_id : 7902602092835602651,
			),
			profile_color : $client->peerColor(
				color : 16,
				background_emoji_id : -6869325712134012624,
			),
			bot_active_users : 51,
			bot_verification_icon : -3063976940890746781,
			send_paid_messages_stars : -8410727244410671098,
		),
	),
);
```