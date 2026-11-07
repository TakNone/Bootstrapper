# starsSubscription

**Description** : *Represents a Telegram Star subscription &raquo;*

**Layer** : 229

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
	id : 'mQyegbGrpB8VODi2',
	peer : $client->peerUser(
		user_id : 8776553732280035973,
	),
	until_date : 88,
	pricing : $client->starsSubscriptionPricing(
		period : 43,
		amount : 7164607211653706735,
	),
	chat_invite_hash : 'pmHTWC5DGUxXhduk',
	title : '27wosf9cUz8WGX4S',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -6305156320132473549,
		size : 95,
		mime_type : '6yP5EASMtK3bfsem',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 95,
				h : 32,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'bihQsxWEkMcGmueP',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 6,
					x : 1907440.572265625,
					y : -1750325.095703125,
					zoom : -1617310.263671875,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 364665.1845703125,
				w : 96,
				h : 59,
				preload_prefix_size : 45,
				video_start_ts : 1132906.14453125,
				video_codec : '7hwHg6AdJUPtDuoF',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 89,
				title : 'QnqNz7EeFl4cPS6T',
				performer : '5sR2Io0S1N4A6FaV',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : '5fIVZqKarXzDTFJb',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'NiGqDyuwL1foS4eA',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	invoice_slug : 'wUR8j9cXSGB2Lefs',
);
```