# payments.paymentFormStars

**Description** : *Represents a payment form, for payments to be using Telegram Stars, see here &raquo; for more info*

**Layer** : 218

```tl
payments.paymentFormStars#7bf6b15c flags:# can_save_credentials:flags.2?true form_id:long password_missing:flags.3?true bot_id:long title:string description:string photo:flags.5?WebDocument invoice:Invoice users:Vector<User> = payments.PaymentForm;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **can_save_credentials** | [`flags.2?true`](type/true) | NOTHING |
| <mark>form_id</mark> | [`long`](type/long) | Form ID |
| **password_missing** | [`flags.3?true`](type/true) | NOTHING |
| <mark>bot_id</mark> | [`long`](type/long) | Bot ID |
| <mark>title</mark> | [`string`](type/string) | Form title |
| <mark>description</mark> | [`string`](type/string) | Description |
| **photo** | [`flags.5?WebDocument`](type/WebDocument) | Product photo |
| <mark>invoice</mark> | [`Invoice`](type/Invoice) | Invoice |
| <mark>users</mark> | [`Vector<User>`](type/User) | Info about users mentioned in the other fields |

---

## Type

[payments.PaymentForm](type/payments.PaymentForm)

---

## Example

```php
$paymentsPaymentForm = $client->payments->paymentFormStars(
	can_save_credentials : true,
	form_id : 4125253124944548915,
	password_missing : true,
	bot_id : 125068426229997108,
	title : 'jSZJwt0FGvmPk7Ve',
	description : 'Laor4GiYUNhlyFBw',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 3040807468188663326,
		size : 80,
		mime_type : 'BQXZ8KbjVg9e45wA',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 42,
				h : 1,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'Cn39TzKy4tIB1GVp',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 87,
					x : 258806.09375,
					y : -688512.919921875,
					zoom : 1788698.314453125,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -122262.39453125,
				w : 19,
				h : 57,
				preload_prefix_size : 17,
				video_start_ts : 273466.744140625,
				video_codec : '9aWdVZXpsB6f5LIH',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 19,
				title : 'OiJVfw5arveXhFAY',
				performer : 'SrQpG67JYgnTHL82',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'Z7hsHzMAgaGq3e8D',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'rNnF30SMzxR5jXOa',
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
		currency : 'bg5X4NoRMyFfz13c',
		prices : array(
			$client->labeledPrice(
				label : 'Qfvok9FyA8lRciBw',
				amount : -7581535745915182059,
			),
		),
		max_tip_amount : -8556678083802675773,
		suggested_tip_amounts : array(-1373632745649824031),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 44,
	),
	users : array(
		$client->userEmpty(
			id : -3159937534452873441,
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
			id : 5053239360494855054,
			access_hash : -1785667459930630729,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 47,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'PoipJws3IEthARGQ',
					reason : 'Uxn5taSwlM90WsHG',
					text : 'WeM3VEpXKmFCjOaz',
				),
			),
			bot_inline_placeholder : '2hu17z8MZWG6m53E',
			lang_code : 'S5KZYhqEfCUM2cBA',
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
				max_id : 6,
			),
			color : $client->peerColor(
				color : 87,
				background_emoji_id : -9092245348968120753,
			),
			profile_color : $client->peerColor(
				color : 62,
				background_emoji_id : -4934246264414781970,
			),
			bot_active_users : 86,
			bot_verification_icon : -3436254247427691573,
			send_paid_messages_stars : 6169425538990223202,
		),
	),
);
```