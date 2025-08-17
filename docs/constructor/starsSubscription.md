# starsSubscription

**Description** : *Represents a Telegram Star subscription »*

**Layer** : 211

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
	id : 'Xcq2SmArPCQz0vDh',
	peer : $client->peerUser(
		user_id : -7904573933501087435,
	),
	until_date : 82,
	pricing : $client->starsSubscriptionPricing(
		period : 79,
		amount : 3238615556281520737,
	),
	chat_invite_hash : '06wVIB4Ts1Lf9v8C',
	title : 'cOqKHz5RbVmFJYpA',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 1805986245955823829,
		size : 34,
		mime_type : 'i31YSEdmJpL05AVU',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 57,
				h : 95,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : '49C6TqfV8vn5eFbz',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 895896.185546875,
				w : 13,
				h : 77,
				preload_prefix_size : 64,
				video_start_ts : 40587.46875,
				video_codec : 'qj6sOKWwuHkdcIAa',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 58,
				title : 'IEY2Gr6CQ3Tvzm0M',
				performer : '8EYMLcAHz10SJCGh',
				waveform : 'v?do?LiveProto~???)',
			),
			$client->documentAttributeFilename(
				file_name : 'a3oBzHVykXQ0SjUv',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'LwS1UXimyHjgpKtQ',
				stickerset : $client->inputStickerSetEmpty(...),
			),
		),
	),
	invoice_slug : 'PEBfbM4Iat9qHCxl',
);
```