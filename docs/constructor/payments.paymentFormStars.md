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
	form_id : -8965135451687170932,
	password_missing : true,
	bot_id : -6354699196708545714,
	title : 'w2L7YlRz69PkbUnZ',
	description : 'Kv08RMtBIAiFkEWz',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 4609421554031710999,
		size : 90,
		mime_type : 'X3xKWuPrUvnVN4B0',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 48,
				h : 45,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : '9RhTVf0t5lwO7a68',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 33,
					x : 525402.412109375,
					y : 86923.0224609375,
					zoom : 595336.1474609375,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -881053.9951171875,
				w : 89,
				h : 13,
				preload_prefix_size : 76,
				video_start_ts : -34300.2216796875,
				video_codec : 'DGUrdn43YLM8viqh',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 60,
				title : 'oG1zujZ4KTEl9aWq',
				performer : 'SzoRqTQH9w74ImJr',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'z49SeEgkGdN7wULO',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'ONzLlEn6mSbR789J',
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
		currency : '0T3Op6fgPlVzJjqB',
		prices : array(
			$client->labeledPrice(
				label : 'CPRp7GFXeYUnIE2L',
				amount : 825956928156807619,
			),
		),
		max_tip_amount : -8448070585728206557,
		suggested_tip_amounts : array(3708349261165419622),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 68,
	),
	users : array(
		$client->userEmpty(
			id : -8911061183288407796,
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
			id : -6014994041749655726,
			access_hash : 6700814589816927798,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 14,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'lxCJ6j3F5qByhHXO',
					reason : '0OgdFuBZkeV9aAHz',
					text : '8SN0J95eXGrVu7Ag',
				),
			),
			bot_inline_placeholder : 'Na5oGC78dVLegzBJ',
			lang_code : 'VUJcyFIeqOkGlHMv',
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
				max_id : 16,
			),
			color : $client->peerColor(
				color : 57,
				background_emoji_id : -684024724329136892,
			),
			profile_color : $client->peerColor(
				color : 51,
				background_emoji_id : 8980863954690432280,
			),
			bot_active_users : 43,
			bot_verification_icon : -6763658242276921765,
			send_paid_messages_stars : 6429186476831798921,
		),
	),
);
```