# payments.paymentFormStars

**Description** : *Represents a payment form, for payments to be using Telegram Stars, see here &raquo; for more info*

**Layer** : 233

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
	form_id : 7098683346581931007,
	bot_id : 1026822642973409145,
	title : 'm0AUFN7XRlOavWSk',
	description : 'w6Is1pU0hfAtDGxo',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -4503145724451760138,
		size : 11,
		mime_type : 'LsfhOG6Fnjdy0EDp',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 10,
				h : 11,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : '0QsDLx8guytHfN96',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 37,
					x : 54374.373046875,
					y : 1044297.30859375,
					zoom : 941998.5830078125,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -2020793.662109375,
				w : 27,
				h : 8,
				preload_prefix_size : 38,
				video_start_ts : 1827007.0380859375,
				video_codec : 'EryWvkwC57hq0Njg',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 26,
				title : 'AOauTk238bmgqGdD',
				performer : 'yNV1wpkA25sofZOh',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'AtnJzYF9wpbkBq78',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'TZCMIkr3Fxuan9Rt',
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
		currency : '4Fda8qsuonHrxYDz',
		prices : array(
			$client->labeledPrice(
				label : 'FZlSQUu7etw0YbIP',
				amount : -7222724453161749313,
			),
		),
		max_tip_amount : 1071165890770726497,
		suggested_tip_amounts : array(7521700267497049370),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 11,
	),
	users : array(
		$client->userEmpty(
			id : 3296112369005473375,
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
			bot_forum_sidebar : true,
			id : -1796671455519521447,
			access_hash : -6944561315975735692,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 46,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '2WX3RkTnyaOmAPEK',
					reason : 'i7P6sguWSX530BtH',
					text : '4fRESZHwu5PrOGQV',
				),
			),
			bot_inline_placeholder : 'ItcuTY7aK1gOEM6e',
			lang_code : 'Z3vwY7sMtSuDKHgJ',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					deletable : true,
					expired : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 91,
			),
			color : $client->peerColor(
				color : 33,
				background_emoji_id : 6594691095111026021,
			),
			profile_color : $client->peerColor(
				color : 45,
				background_emoji_id : 8776913644219353933,
			),
			bot_active_users : 16,
			bot_verification_icon : -973806625783439072,
			send_paid_messages_stars : -2956486891910088353,
			linked_community_id : 5184047097534417545,
		),
	),
);
```