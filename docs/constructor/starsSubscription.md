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
	id : 'b1x5T20YNpQWVPZy',
	peer : $client->peerUser(
		user_id : 6353185349919139616,
	),
	until_date : 16,
	pricing : $client->starsSubscriptionPricing(
		period : 1,
		amount : 2787129823853398928,
	),
	chat_invite_hash : 'l4FYytqOzQ0MxpKf',
	title : '07r4wXlgqcukxFMp',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -7344068849234328214,
		size : 8,
		mime_type : 'LSH5PE4nDQ8pMoyq',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 98,
				h : 42,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'z79JO4K50yjaSXBT',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 85,
					x : 1351081.53125,
					y : 1869065.888671875,
					zoom : 1824001.7080078125,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 2079210.51171875,
				w : 57,
				h : 37,
				preload_prefix_size : 4,
				video_start_ts : 1830757.484375,
				video_codec : 'x5Eaev60hCq9HBUw',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 26,
				title : 'BkzyKbJowvMadCpW',
				performer : '0meoaDB17E2pdfrn',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'k1lTNEGt7QbBfOV2',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : '0qp8do7yCP2lEJWh',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	invoice_slug : 'YIAkF4JN9u65REtw',
);
```