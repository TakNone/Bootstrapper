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
	form_id : 8735101794678587374,
	bot_id : -972022337598268081,
	title : 'gIJhNFiozRLlHYru',
	description : 'wYNfq6sA854yePiE',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 4333611748386475380,
		size : 8,
		mime_type : 'SaiecXTx93JQMK61',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 2,
				h : 64,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'x69X4bDuKrJHnPzO',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 61,
					x : -2002318.6796875,
					y : 1940590.8427734375,
					zoom : 1182795.32421875,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 487474.7568359375,
				w : 62,
				h : 17,
				preload_prefix_size : 63,
				video_start_ts : -56369.958984375,
				video_codec : 'qJMYycXsh1uIKUQr',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 93,
				title : '2p9kJPr1zX86tMeg',
				performer : 'NlqaoeOhzR2spbj0',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'ax9YFwGjDZmbA4JR',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'AjzREefOvSQZ5tbT',
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
		currency : '0JhtonOZ1BGrSYc3',
		prices : array(
			$client->labeledPrice(
				label : 'N1LKbC0y5Id4MGxw',
				amount : -3764576506029583547,
			),
		),
		max_tip_amount : -4837732662387027833,
		suggested_tip_amounts : array(2818858049530498398),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 78,
	),
	users : array(
		$client->userEmpty(
			id : -5786666536532762006,
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
			id : 7114508242779418328,
			access_hash : 2171429654019064706,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 94,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'VnkiJCzp8qgdcAeS',
					reason : 'sNtOaeUcI0Q2TYX9',
					text : 'iEwAZadGQnFpPxz7',
				),
			),
			bot_inline_placeholder : 'Dzb0gUv3JKasYCHL',
			lang_code : 'GVx7WscmeNFt5oHz',
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
				max_id : 94,
			),
			color : $client->peerColor(
				color : 55,
				background_emoji_id : 3391618436215865133,
			),
			profile_color : $client->peerColor(
				color : 9,
				background_emoji_id : 6229917697200419448,
			),
			bot_active_users : 79,
			bot_verification_icon : -2195960525504754549,
			send_paid_messages_stars : 8281510922315175317,
		),
	),
);
```