# payments.paymentFormStars

**Description** : *Represents a payment form, for payments to be using Telegram Stars, see here » for more info*

**Layer** : 211

```tl
payments.paymentFormStars#7bf6b15c flags:# form_id:long bot_id:long title:string description:string photo:flags.5?WebDocument invoice:Invoice users:Vector<User> = payments.PaymentForm;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	form_id : -7089602154709894661,
	bot_id : 7620976769849611780,
	title : 'FRwC4kU9sVYyKnAf',
	description : 'jriW58NnYVp3gSau',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 3716647528227575380,
		size : 29,
		mime_type : 'VjvbHDOzJe5atXm3',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 27,
				h : 55,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'Ut9w2b4Ix56sm7Yf',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -1544629.439453125,
				w : 27,
				h : 89,
				preload_prefix_size : 99,
				video_start_ts : -1808230.552734375,
				video_codec : 'd76eVaD2R4ibouNA',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 80,
				title : '2qrSFTuwRt8kJzIj',
				performer : 'C2DEn3sLOvawAlFZ',
				waveform : '?????LiveProto?9?3',
			),
			$client->documentAttributeFilename(
				file_name : '0GMUfaZwV6yrkgEh',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'sa0Dj9vqreCMhuXg',
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
		currency : 'AOQ5V3xzMLkurGaI',
		prices : array(
			$client->labeledPrice(
				label : 'HonGeJct47Ejzs0m',
				amount : -3078884471003317490,
			),
		),
		max_tip_amount : 2746581196341340929,
		suggested_tip_amounts : array(-8860222087754552647),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 3,
	),
	users : array(
		$client->userEmpty(
			id : 5391172197928987587,
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
			id : -1279397557534309801,
			access_hash : 5455350034318808023,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 6,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'lwi8qruOta1VEDPG',
					reason : 'ngmZeiNuJFbDBRwE',
					text : 'dLOqDyufEvn6YgV8',
				),
			),
			bot_inline_placeholder : 'r4F31eEQikYR9jbg',
			lang_code : '2FAZd9JarnVYgpBR',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 95,
			color : $client->peerColor(
				color : 54,
				background_emoji_id : -5233055671068772478,
			),
			profile_color : $client->peerColor(
				color : 28,
				background_emoji_id : -1593461074862122403,
			),
			bot_active_users : 34,
			bot_verification_icon : 5256346822243740822,
			send_paid_messages_stars : -1261787547514689234,
		),
	),
);
```