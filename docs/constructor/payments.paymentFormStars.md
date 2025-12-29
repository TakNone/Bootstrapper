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
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	form_id : 9049780117637150202,
	password_missing : true,
	bot_id : 5164549835396584078,
	title : 'Q2jrwbHCcATGs7WO',
	description : 'ED0Ol3rcf7aJK45t',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 4424465047395952467,
		size : 97,
		mime_type : 'uxtLjw2qhZsKlXWy',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 15,
				h : 96,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'QhwaOfXEdeV5boxF',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 4,
					x : 1921070.072265625,
					y : 348586.400390625,
					zoom : 2015771.134765625,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -1722744.4912109375,
				w : 83,
				h : 67,
				preload_prefix_size : 16,
				video_start_ts : -1277726.7568359375,
				video_codec : 'QNPHcVw3k687OlMn',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 66,
				title : 'AUtBPpcarRNYhW9z',
				performer : 'TsOPnDH53yuEiagU',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'ozfejKXnHuhCpr1B',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'wd4AtOkNUxpQsf5r',
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
		currency : 'sX1OjFzMqYN0mRP4',
		prices : array(
			$client->labeledPrice(
				label : '7otVKDk9GZNrF01u',
				amount : 5318150543473466902,
			),
		),
		max_tip_amount : 384673046072102602,
		suggested_tip_amounts : array(43995417829902666),
		terms_url : 'https://docs.liveproto.dev',
		subscription_period : 80,
	),
	users : array(
		$client->userEmpty(
			id : 5590787465905288061,
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
			id : -7448521943633733513,
			access_hash : -25716288434099638,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 33,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'OJUW4BF7VhdiIze9',
					reason : 'hC5xNkKpnAU96fGO',
					text : 'UM26poCWIqP7gSa0',
				),
			),
			bot_inline_placeholder : 'w1E4lFHdrOTy7mC3',
			lang_code : 'ECFkTo4OubxVIRhn',
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
				max_id : 66,
			),
			color : $client->peerColor(
				color : 1,
				background_emoji_id : 7555908347087783387,
			),
			profile_color : $client->peerColor(
				color : 66,
				background_emoji_id : -355048087615441326,
			),
			bot_active_users : 91,
			bot_verification_icon : 6821571423396893392,
			send_paid_messages_stars : -8353457607311853590,
		),
	),
);
```