# payments.paymentFormStars

**Description** : *Represents a payment form, for payments to be using Telegram Stars, see here &raquo; for more info*

**Layer** : 227

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
	form_id : 7695342299625483585,
	bot_id : -509068661067898806,
	title : 'UXtnJYmucIVAGhTv',
	description : 'af3B1TXGDewvzmr9',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -5020075509183170693,
		size : 49,
		mime_type : 'CHn2v75qeuwYDLPZ',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 96,
				h : 36,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'FEDq7fvuBiRw2lQt',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 50,
					x : -1654703.974609375,
					y : -2060812.841796875,
					zoom : 184598.4580078125,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1094745.1005859375,
				w : 58,
				h : 52,
				preload_prefix_size : 54,
				video_start_ts : -450264.9580078125,
				video_codec : 'kWDvwSz3Om7gr5Pf',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 70,
				title : 'C41nIdG5oDW6fskm',
				performer : 'blVRvAO3Y9p7rKPx',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : '9KCOE62aiz8JlFwL',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'QZuaFJT2sxfhNkyY',
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
		currency : 'Oz6wsBbg1JX45rGd',
		prices : array(
			$client->labeledPrice(
				label : 'XjvL5GigtbmBAShD',
				amount : -8920516759250382939,
			),
		),
		max_tip_amount : 3802012474045422807,
		suggested_tip_amounts : array(-1611832012181635353),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 21,
	),
	users : array(
		$client->userEmpty(
			id : 1394486848693136974,
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
			id : 6763570772577560885,
			access_hash : 2098242988028177765,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 83,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'jOGqTXMBIoFwxe0t',
					reason : 'mpYSLyjb9o4RwAzK',
					text : 'y3uE2gNQCFORjzGs',
				),
			),
			bot_inline_placeholder : 'soZH1p4bJ0naWOhY',
			lang_code : 'UxXnWdhepyimrgcj',
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
				max_id : 24,
			),
			color : $client->peerColor(
				color : 14,
				background_emoji_id : 5176533805839542043,
			),
			profile_color : $client->peerColor(
				color : 40,
				background_emoji_id : 1512577069777777070,
			),
			bot_active_users : 54,
			bot_verification_icon : 2800755355536668658,
			send_paid_messages_stars : -8567123897398304338,
		),
	),
);
```