# starsSubscription

**Description** : *Represents a Telegram Star subscription &raquo;*

**Layer** : 216

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
	id : 'Q3IMRonTNv75JDSk',
	peer : $client->peerUser(
		user_id : -3155898084275834191,
	),
	until_date : 79,
	pricing : $client->starsSubscriptionPricing(
		period : 32,
		amount : 2047218070469842155,
	),
	chat_invite_hash : 'pSoJ5UmPdcg4O9ni',
	title : 'DKo7MBUQb3efcYx6',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 7569487254343907610,
		size : 34,
		mime_type : 'VBertK9xclzyo3id',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 65,
				h : 72,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'RpHjtEVswzx7gPDQ',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 33706.4765625,
				w : 64,
				h : 93,
				preload_prefix_size : 39,
				video_start_ts : -2008063.0673828125,
				video_codec : 'cRZTUt4In5sx26Ke',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 93,
				title : 'XEQ4r9LNeZ5hDObG',
				performer : 'eXOdN24BzA5Pl7tQ',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'ZdRQOm124EwI0SFj',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'gvtm43MUeVkbn9OB',
				stickerset : $client->inputStickerSetEmpty(...),
			),
		),
	),
	invoice_slug : 'PvputrNKdf2x4gDh',
);
```