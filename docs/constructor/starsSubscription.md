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
	id : 'MyBatkbGzXVldwv6',
	peer : $client->peerUser(
		user_id : -1192542409705993604,
	),
	until_date : 30,
	pricing : $client->starsSubscriptionPricing(
		period : 78,
		amount : -2450869122468416791,
	),
	chat_invite_hash : '6CpAtuvLQo7iNSe4',
	title : 'YT9qg8V1dlMfZjHB',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 1042962858244998316,
		size : 58,
		mime_type : 'kPr7lQKfmaD6sW25',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 90,
				h : 11,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'fHKXgqP49BtG7o5Q',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 42,
					x : 520565.1875,
					y : 1672019.0166015625,
					zoom : -1710448.9697265625,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 743904.29296875,
				w : 71,
				h : 93,
				preload_prefix_size : 68,
				video_start_ts : -240888.591796875,
				video_codec : 'KMSLzZraPhRqeu9Q',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 24,
				title : 'k85lTtnPUgHxw6Be',
				performer : 'q2vW9Q6Maxlruhij',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : '7S4ykT0GvYWs5j9H',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : '2a7sWGMxrwIDofgR',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	invoice_slug : 'LBwKaX827cPeIq6Y',
);
```