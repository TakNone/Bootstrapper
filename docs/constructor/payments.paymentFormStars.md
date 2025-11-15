# payments.paymentFormStars

**Description** : *Represents a payment form, for payments to be using Telegram Stars, see here &raquo; for more info*

**Layer** : 216

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
	form_id : -3038936649979132069,
	password_missing : true,
	bot_id : -4379504803817475505,
	title : 'HM7Ep3kuKoWOUyrN',
	description : 'hlz0NHxQ7a8jgR3A',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -6813469285019204351,
		size : 40,
		mime_type : 'SFAc38DvTIt42pyf',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 42,
				h : 8,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'joRuAKHkZzX09U7C',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -752600.9091796875,
				w : 98,
				h : 90,
				preload_prefix_size : 70,
				video_start_ts : -395791.576171875,
				video_codec : 'JIoUKTBYlSW2kFQa',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 54,
				title : 'w0g8UQAx1J6eIH4C',
				performer : 'YRfFKdA5iCu8DLx4',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'tnwGEx7RQJdieF61',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'til1qWUOoLN7vpkT',
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
		currency : 'kJnO6CpIrKaFHvgo',
		prices : array(
			$client->labeledPrice(
				label : 'tgfZcPl4zmRQa1sw',
				amount : -8344511232753625546,
			),
		),
		max_tip_amount : 3364752920640716019,
		suggested_tip_amounts : array(2571327426469770292),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 86,
	),
	users : array(
		$client->userEmpty(
			id : -7644330639697420386,
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
			id : 2196033724336942792,
			access_hash : 1660571137303929744,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 36,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '3SqaAEkd2DX58eTx',
					reason : 'SsmH3ChLAX76rUyj',
					text : 'PKeisaTGq1ku08wC',
				),
			),
			bot_inline_placeholder : 'EvSZtKULq8x4sXum',
			lang_code : 'CjfOQ72Zy3mHdegq',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 7,
			color : $client->peerColor(
				color : 85,
				background_emoji_id : 4377234960167388470,
			),
			profile_color : $client->peerColor(
				color : 6,
				background_emoji_id : 8538564774876120009,
			),
			bot_active_users : 2,
			bot_verification_icon : -3224649642446592226,
			send_paid_messages_stars : -175385818112725182,
		),
	),
);
```