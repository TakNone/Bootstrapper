# payments.paymentFormStars

**Description** : *Represents a payment form, for payments to be using Telegram Stars, see here &raquo; for more info*

**Layer** : 214

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
	form_id : 5906400082312621040,
	password_missing : true,
	bot_id : -1283693883000076467,
	title : 'Cki4yIl3mEecpM5W',
	description : '4Ywoqk2SImJlgK6A',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 593400537449109396,
		size : 72,
		mime_type : 'pCRHjmAqr4OQhZez',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 50,
				h : 75,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'XKTvh5n7FYQpaD6t',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1874936.708984375,
				w : 50,
				h : 73,
				preload_prefix_size : 25,
				video_start_ts : -937516.46484375,
				video_codec : 'LMqbQDvwAl1dIrZO',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 78,
				title : 'pPUGCf8FXAHQlW5h',
				performer : 'RCF2dhNqTQjJYkLB',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'mRinPhKvpBIDw1jA',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : '35pFIGoT2veftsXC',
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
		currency : 'jFzevT7Vb2HR03xG',
		prices : array(
			$client->labeledPrice(
				label : 'VeuzoKQJUTmhFrdZ',
				amount : -8042933869674225571,
			),
		),
		max_tip_amount : -7934637471951798973,
		suggested_tip_amounts : array(-5601588345336865551),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 51,
	),
	users : array(
		$client->userEmpty(
			id : -7715831572695059980,
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
			id : 5348260976221732313,
			access_hash : 638033304643071965,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 43,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'wbJx5NtSaU14HL8M',
					reason : 'g5UH0eITWNskRZjc',
					text : 'LJYtACuT3fMX7WvU',
				),
			),
			bot_inline_placeholder : 'RYABbZDvngwHpNdu',
			lang_code : 'UFmKJ6ghqNzoS8H3',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 96,
			color : $client->peerColor(
				color : 15,
				background_emoji_id : 5174920552012871822,
			),
			profile_color : $client->peerColor(
				color : 51,
				background_emoji_id : -6725781284977244218,
			),
			bot_active_users : 54,
			bot_verification_icon : -6804018770737505522,
			send_paid_messages_stars : 8158757624148762615,
		),
	),
);
```