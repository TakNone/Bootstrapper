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
	id : 'TjOKVRPYua8nfiqF',
	peer : $client->peerUser(
		user_id : -5164847277349298474,
	),
	until_date : 89,
	pricing : $client->starsSubscriptionPricing(
		period : 89,
		amount : -1364977165062662621,
	),
	chat_invite_hash : 'ZbqAofU9EiIL3tle',
	title : 'cyOGravBmlCetnDj',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 3308597575257731003,
		size : 19,
		mime_type : 'VuXaOzFDdTwiGoJY',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 36,
				h : 13,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'ToOuebAiGjL1SN7R',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 39,
					x : 1712578.685546875,
					y : -975549.5791015625,
					zoom : -871662.09765625,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -910946.3515625,
				w : 93,
				h : 71,
				preload_prefix_size : 70,
				video_start_ts : 1359223.529296875,
				video_codec : 'hJUZnBtvWlNbqGSi',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 74,
				title : 'nbOg8NdqH0t6ICvE',
				performer : 'LoFSrRx3inBNlDmV',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'EZ8AMxjTlHbz1JPg',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : '7ocCmdVIknfx9lq5',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	invoice_slug : 'ySnwMLeYTpidqA2b',
);
```