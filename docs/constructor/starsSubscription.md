# starsSubscription

**Description** : *Represents a Telegram Star subscription &raquo;*

**Layer** : 218

```tl
starsSubscription#2e6eab1a flags:# canceled:flags.0?true can_refulfill:flags.1?true missing_balance:flags.2?true bot_canceled:flags.7?true id:string peer:Peer until_date:int pricing:StarsSubscriptionPricing chat_invite_hash:flags.3?string title:flags.4?string photo:flags.5?WebDocument invoice_slug:flags.6?string = StarsSubscription;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **canceled** | [`flags.0?true`](type/true) | Whether this subscription was cancelled |
| **can_refulfill** | [`flags.1?true`](type/true) | Whether we left the associated private channel, but we can still rejoin it using payments.fulfillStarsSubscription because the current subscription period hasn't expired yet |
| **missing_balance** | [`flags.2?true`](type/true) | Whether this subscription has expired because there are not enough stars on the user's balance to extend it |
| **bot_canceled** | [`flags.7?true`](type/true) | Set if this bot subscription was cancelled by the bot |
| <mark>id</mark> | [`string`](type/string) | Subscription ID |
| <mark>peer</mark> | [`Peer`](type/Peer) | Identifier of the associated private chat |
| <mark>until_date</mark> | [`int`](type/int) | Expiration date of the current subscription period |
| <mark>pricing</mark> | [`StarsSubscriptionPricing`](type/StarsSubscriptionPricing) | Pricing of the subscription in Telegram Stars |
| **chat_invite_hash** | [`flags.3?string`](type/string) | Invitation link, used to renew the subscription after cancellation or expiration |
| **title** | [`flags.4?string`](type/string) | For bot subscriptions, the title of the subscription invoice |
| **photo** | [`flags.5?WebDocument`](type/WebDocument) | For bot subscriptions, the photo from the subscription invoice |
| **invoice_slug** | [`flags.6?string`](type/string) | For bot subscriptions, the identifier of the subscription invoice |

---

## Type

[StarsSubscription](type/StarsSubscription)

---

## Example

```php
$starsSubscription = $client->starsSubscription(
	canceled : true,
	can_refulfill : true,
	missing_balance : true,
	bot_canceled : true,
	id : 'DdRLxwnPkhiIt78v',
	peer : $client->peerUser(
		user_id : -3248710638689150337,
	),
	until_date : 70,
	pricing : $client->starsSubscriptionPricing(
		period : 9,
		amount : 9053644355203693507,
	),
	chat_invite_hash : 'ipWJecAHrtymDw1s',
	title : '2uAST8cqhVPd6Fns',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 8473029451655762447,
		size : 13,
		mime_type : '5NO8fkw6uIEpLn3R',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 61,
				h : 52,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'AMhbmzUda5jnq3Ir',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 99,
					x : -1805823.6884765625,
					y : -1254827.01953125,
					zoom : 1946314.400390625,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 72193.71875,
				w : 43,
				h : 20,
				preload_prefix_size : 35,
				video_start_ts : -210141.8330078125,
				video_codec : 'u254ai8vGVbMe0dt',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 81,
				title : 'uAiyqIOKCx40nN7Y',
				performer : 'f0bd5UKD2evJRoig',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'qgoHZB0wlu2T84Nx',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'W8IY1qnMvDheOwPj',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	invoice_slug : 'V3brZdMhYsQtpOEj',
);
```