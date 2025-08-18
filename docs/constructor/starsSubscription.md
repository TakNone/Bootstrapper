# starsSubscription

**Description** : *Represents a Telegram Star subscription &raquo;*

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
	id : 'KanGdJisroqbOxmY',
	peer : $client->peerUser(
		user_id : -7441523259823114683,
	),
	until_date : 72,
	pricing : $client->starsSubscriptionPricing(
		period : 90,
		amount : -4899654260936592771,
	),
	chat_invite_hash : 'rx2KiDLuyWPVXzfH',
	title : 'jXa3hOMIvdgctQWi',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 4920922998931963297,
		size : 77,
		mime_type : 'U9b46DpJVx3ifYqC',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 57,
				h : 80,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : '076BiFYpjxGsc9wW',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 264748.7666015625,
				w : 91,
				h : 12,
				preload_prefix_size : 26,
				video_start_ts : 1570829.4775390625,
				video_codec : 'wPcrER6Onu0pkD2j',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 100,
				title : 'epbMhxijJkS6CsmD',
				performer : '4lCGRicWHb7AdK0m',
				waveform : 't??xsLiveProto??g8?',
			),
			$client->documentAttributeFilename(
				file_name : 'LYquw0mFHQ61jAOv',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'LF2trYbaCGEJ5mxi',
				stickerset : $client->inputStickerSetEmpty(...),
			),
		),
	),
	invoice_slug : 'wfUvadnSbB7gICc1',
);
```