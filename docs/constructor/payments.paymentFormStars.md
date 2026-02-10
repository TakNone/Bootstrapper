# payments.paymentFormStars

**Description** : *Represents a payment form, for payments to be using Telegram Stars, see here &raquo; for more info*

**Layer** : 222

```tl
payments.paymentFormStars#7bf6b15c flags:# form_id:long bot_id:long title:string description:string photo:flags.5?WebDocument invoice:Invoice users:Vector<User> = payments.PaymentForm;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>form_id</mark> | [`long`](type/long) | Form ID |
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
	form_id : -7742426608295375784,
	bot_id : 3963470154064528864,
	title : 's7CDjo4JeFMwEtQa',
	description : 'l5uW10N3EYw4OvPs',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 8807339679742325625,
		size : 87,
		mime_type : '72ZHmO9P86JdjtaD',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 38,
				h : 36,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'ReK5ibmIkJ70qSch',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 12,
					x : -874195.8330078125,
					y : -1824415.09765625,
					zoom : 1593459.8603515625,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1840559.0341796875,
				w : 44,
				h : 51,
				preload_prefix_size : 60,
				video_start_ts : -428381.5439453125,
				video_codec : 'hWPMT5Ac9OzNRQVE',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 61,
				title : 'zga5YFoA2hsUyTrZ',
				performer : 'kxHb5qi4Sd8FLKjC',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : '5oCuRjyAlQK6m0nH',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'ezohgATQRwPZ9qy0',
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
		currency : 'fj3tOy8UmIzQo2VD',
		prices : array(
			$client->labeledPrice(
				label : 'EypeUHtYlB2duZCr',
				amount : 7079548129305876878,
			),
		),
		max_tip_amount : 8450312568043465884,
		suggested_tip_amounts : array(8012861937207218665),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 33,
	),
	users : array(
		$client->userEmpty(
			id : 2738390282295576697,
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
			id : 8938112914111678583,
			access_hash : -7730048771962417058,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 21,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ZsrkqVd4yNIDcp6e',
					reason : 'ghdMSGcoICWk9Pat',
					text : 'PysY8RLO5ZJhExzS',
				),
			),
			bot_inline_placeholder : 'XEm54DUr1vchxoqG',
			lang_code : '4DCjR5TfBdlUuHLv',
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
				color : 66,
				background_emoji_id : 1038787836976455064,
			),
			profile_color : $client->peerColor(
				color : 80,
				background_emoji_id : 5080140850775079671,
			),
			bot_active_users : 61,
			bot_verification_icon : 6457429660096754830,
			send_paid_messages_stars : -5843926734318794268,
		),
	),
);
```