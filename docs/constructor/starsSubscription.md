# starsSubscription

**Description** : *Represents a Telegram Star subscription &raquo;*

**Layer** : 214

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
	id : 'iBuIr0xtghlPnvS5',
	peer : $client->peerUser(
		user_id : -2631713081017157947,
	),
	until_date : 4,
	pricing : $client->starsSubscriptionPricing(
		period : 82,
		amount : 8696761437023912677,
	),
	chat_invite_hash : 'hzWEZPvJNdKQsxX7',
	title : 'uoBxfCgZH6pOhkJe',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -1481620570999243910,
		size : 96,
		mime_type : 'xy8sa6GD5KVRv1fm',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 83,
				h : 45,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'JaI47AnzOUDFs6WH',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1038612.4873046875,
				w : 21,
				h : 78,
				preload_prefix_size : 41,
				video_start_ts : -696203.8720703125,
				video_codec : 'ZFRvMOsYEmxTKrPC',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 73,
				title : 'ORACVbSYmnZGi0Dv',
				performer : 'O25e4EGZQxUjKhL0',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'PTIm5fw3nuFizJqC',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'myFGozZ43d9VQw1k',
				stickerset : $client->inputStickerSetEmpty(...),
			),
		),
	),
	invoice_slug : 'fsuYWXUMKgCVw0e8',
);
```