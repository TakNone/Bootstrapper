# starsSubscription

**Description** : *Represents a Telegram Star subscription &raquo;*

**Layer** : 225

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
	id : 'yRePNbkdT5hjKxm4',
	peer : $client->peerUser(
		user_id : -4379320572020243466,
	),
	until_date : 57,
	pricing : $client->starsSubscriptionPricing(
		period : 12,
		amount : -6128607022147033196,
	),
	chat_invite_hash : 'ACpwHQ7hEFMlV8aO',
	title : 'rU4d3AxYLteRhE2Z',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 238889293692430723,
		size : 99,
		mime_type : 'oRkld3sAVzmNw1fj',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 9,
				h : 17,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'Y68s2ATil1OuXgeS',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 62,
					x : -594379.7080078125,
					y : -1538952.4228515625,
					zoom : 1700958.6044921875,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -1784635.318359375,
				w : 70,
				h : 56,
				preload_prefix_size : 7,
				video_start_ts : -755493.111328125,
				video_codec : 'ixkPgR0IuCUSnE9z',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 24,
				title : 'oCpnDMkZOhAeburl',
				performer : '5BapmcKyghkOoet8',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'oiKP5pmwRzUfWBXr',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : '807egK6Y4PdOk1Av',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	invoice_slug : 'DIhaPYtTLFxm4k5J',
);
```