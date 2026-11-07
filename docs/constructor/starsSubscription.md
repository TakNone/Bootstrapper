# starsSubscription

**Description** : *Represents a Telegram Star subscription &raquo;*

**Layer** : 233

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
	id : 'kPNAosFbMtq4XS2O',
	peer : $client->peerUser(
		user_id : -50528232855081801,
	),
	until_date : 97,
	pricing : $client->starsSubscriptionPricing(
		period : 9,
		amount : -8829510617430595085,
	),
	chat_invite_hash : '85kIEViYQMl2DvHz',
	title : '7biZLD86nT4xNRHF',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -7348483144564432183,
		size : 74,
		mime_type : 'uFNRfexVv3i47aOH',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 39,
				h : 80,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : '4o65M8EYa2WLOqSe',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 78,
					x : -1194667.9951171875,
					y : 1202865.2822265625,
					zoom : 2063006.8212890625,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -1265138.9873046875,
				w : 74,
				h : 75,
				preload_prefix_size : 34,
				video_start_ts : 1720316.568359375,
				video_codec : 'T6bAQxBraefFOYvq',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 57,
				title : 'xC6hMiBluOV2Jtg0',
				performer : 'kOrvo5EFcKSym7jf',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'yMVQxrSAaz0RLtqB',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'ILkXoFCzYxGghPl8',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	invoice_slug : 'pYjcTG5XvKdRFfD3',
);
```