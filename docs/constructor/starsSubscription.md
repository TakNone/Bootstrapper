# starsSubscription

**Description** : *Represents a Telegram Star subscription &raquo;*

**Layer** : 222

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
	id : 'liOwucb3xQLMPpFX',
	peer : $client->peerUser(
		user_id : -2891149131875691670,
	),
	until_date : 15,
	pricing : $client->starsSubscriptionPricing(
		period : 7,
		amount : -6374438597325790656,
	),
	chat_invite_hash : 'GAWP1tcvxfyo57RY',
	title : 'B8kzlDNK4aTEyxQq',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -6466257716882692362,
		size : 96,
		mime_type : 'EZFtsDh16RwiOGKz',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 71,
				h : 84,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'wrC8T0yEkgjFScO1',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 43,
					x : 1503726.619140625,
					y : -803923.1904296875,
					zoom : 1120891.884765625,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -1150061.8447265625,
				w : 77,
				h : 27,
				preload_prefix_size : 28,
				video_start_ts : -751797.677734375,
				video_codec : 'SxXmu6HDPUwJgdNe',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 29,
				title : 'f8kYzl1ForB4gSyI',
				performer : 'hfmPzBICpowxbeds',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'sQ9LK5EPauepli6J',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'SnFVNuWpjsIX6LxO',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	invoice_slug : 'EmNQh40beMJLHvPq',
);
```