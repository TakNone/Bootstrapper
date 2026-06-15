# starsSubscription

**Description** : *Represents a Telegram Star subscription &raquo;*

**Layer** : 227

```tl
starsSubscription#2e6eab1a flags:# canceled:flags.0?true can_refulfill:flags.1?true missing_balance:flags.2?true bot_canceled:flags.7?true id:string peer:Peer until_date:int pricing:StarsSubscriptionPricing chat_invite_hash:flags.3?string title:flags.4?string photo:flags.5?WebDocument invoice_slug:flags.6?string = StarsSubscription;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	id : 'zdr6iuY8l0ngpLsO',
	peer : $client->peerUser(
		user_id : -2261744375428202134,
	),
	until_date : 10,
	pricing : $client->starsSubscriptionPricing(
		period : 30,
		amount : 1645992350651032779,
	),
	chat_invite_hash : 'udCV5AxJBqm4gin2',
	title : 'QFTyhSjeixf0osWu',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 1513753711481489844,
		size : 73,
		mime_type : 'mIwcUblPF3uBpr6e',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 13,
				h : 63,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : '98XTE7FtgvyWwj06',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 83,
					x : -178724.0888671875,
					y : -1427515.9716796875,
					zoom : 1178347.5595703125,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 387295.2431640625,
				w : 37,
				h : 90,
				preload_prefix_size : 47,
				video_start_ts : 274409.55078125,
				video_codec : 'iJmrSUdLeAuBjKb7',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 100,
				title : 'AmBn5i8QTbaVkEIj',
				performer : 'gcXS3z21ekbAvI7s',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'BzUDylcTrj18fXtv',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'DftcInY8Me2SiQWV',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	invoice_slug : 'vqhEkRJzBIdaXCQ9',
);
```