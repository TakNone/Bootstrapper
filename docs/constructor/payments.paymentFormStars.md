# payments.paymentFormStars

**Description** : *Represents a payment form, for payments to be using Telegram Stars, see here &raquo; for more info*

**Layer** : 216

```tl
payments.paymentFormStars#7bf6b15c flags:# can_save_credentials:flags.2?true password_missing:flags.3?true form_id:long bot_id:long title:string description:string photo:flags.5?WebDocument invoice:Invoice users:Vector<User> = payments.PaymentForm;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **can_save_credentials** | [`flags.2?true`](type/true) | NOTHING |
| **password_missing** | [`flags.3?true`](type/true) | NOTHING |
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
	can_save_credentials : true,
	password_missing : true,
	form_id : 2600145886104544433,
	bot_id : 875279763796114292,
	title : 'qE1jmr8peY0fDMav',
	description : 'vuY1pE9yhTtwlodP',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 6534705851170050416,
		size : 65,
		mime_type : 'b2An5YWCwgHJDsMP',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 44,
				h : 67,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'vi5ZnfAQBlGr9TaH',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1100159.6064453125,
				w : 6,
				h : 64,
				preload_prefix_size : 26,
				video_start_ts : 1991302.0693359375,
				video_codec : 'Nt85k9FCaUMXWQqS',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 93,
				title : 'ZDaMteFCf1NLgOBy',
				performer : 'INUoDe6ZulAFCzfa',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'ms9yRhiBWwt7oGNa',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'n7SqrYH6gibWF3os',
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
		currency : 'mjG1Kb8vf2cpY7RW',
		prices : array(
			$client->labeledPrice(
				label : 'X0ek1Ap4y8Rg3QC2',
				amount : 8525513336360532342,
			),
		),
		max_tip_amount : -8784459807974839746,
		suggested_tip_amounts : array(-1204662363684380388),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 30,
	),
	users : array(
		$client->userEmpty(
			id : 2377913916130226224,
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
			id : 5933049806248096014,
			access_hash : 3841533507906470796,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 75,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '3Kte1xUAVTzDLaGY',
					reason : 'P6Y5M0mUA9cifkLH',
					text : 'IQxEBdXDmtjALq4Z',
				),
			),
			bot_inline_placeholder : 'AnvTD0FfXoOJ7sVb',
			lang_code : 'T35NkuJXfr1sw4Rn',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 46,
			color : $client->peerColor(
				color : 41,
				background_emoji_id : 5934458744420970628,
			),
			profile_color : $client->peerColor(
				color : 50,
				background_emoji_id : 4832323459335326144,
			),
			bot_active_users : 38,
			bot_verification_icon : 5916784714994198710,
			send_paid_messages_stars : 3432253606299911085,
		),
	),
);
```