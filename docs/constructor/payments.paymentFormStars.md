# payments.paymentFormStars

**Description** : *Represents a payment form, for payments to be using Telegram Stars, see here &raquo; for more info*

**Layer** : 225

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
	form_id : 1226926921719678448,
	bot_id : 4815036646171286791,
	title : 'V28XxTKsNfjMGyaQ',
	description : 'J86iBIkXefWzOld5',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -1420167968469585510,
		size : 75,
		mime_type : 'Bd2jJ3DRUtIPK5q1',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 65,
				h : 79,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'gUXMj7QmDLuKqow2',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 93,
					x : 804125.177734375,
					y : 650736.126953125,
					zoom : 1944185.90234375,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 469804.673828125,
				w : 27,
				h : 63,
				preload_prefix_size : 10,
				video_start_ts : 538656.3251953125,
				video_codec : 'QPeArEBmGvoZnR3g',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 14,
				title : 'lubEzKawePo3NLDB',
				performer : 'CRhdMEwPlY7gjmDZ',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : '4Y26CGl1SBcLMuJP',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : '1JsieaX0IHjktgEl',
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
		currency : 'KaN1iy8Crs4WdbnQ',
		prices : array(
			$client->labeledPrice(
				label : 'z56RAoJHuvVlqbT4',
				amount : -4431433918392232566,
			),
		),
		max_tip_amount : 1152024793263385165,
		suggested_tip_amounts : array(-2473025107675685740),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 9,
	),
	users : array(
		$client->userEmpty(
			id : 6055757821931822061,
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
			id : 2434047661306613108,
			access_hash : 6509816423549841148,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 62,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Aym0g9MVWvnhx3RN',
					reason : 'f2JtpYNqQRCzGwBg',
					text : 'JeErvh8OPtCdFayK',
				),
			),
			bot_inline_placeholder : 'hGATdjDIEBuHWY18',
			lang_code : '1gibJuXQ2aYezkEB',
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
				max_id : 57,
			),
			color : $client->peerColor(
				color : 4,
				background_emoji_id : -5127534774487193853,
			),
			profile_color : $client->peerColor(
				color : 51,
				background_emoji_id : -5760667222864750282,
			),
			bot_active_users : 42,
			bot_verification_icon : -67277000841723023,
			send_paid_messages_stars : -4364552346480890891,
		),
	),
);
```