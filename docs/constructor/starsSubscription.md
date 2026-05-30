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
	id : 'KqEv7hSBafFiQDJT',
	peer : $client->peerUser(
		user_id : 5126445401368876114,
	),
	until_date : 83,
	pricing : $client->starsSubscriptionPricing(
		period : 98,
		amount : -2200311069953674852,
	),
	chat_invite_hash : '4FHb5OWaSLnYrAjd',
	title : '0uHGimQkIXUZ3scy',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 6056056984234101056,
		size : 22,
		mime_type : 'VRNHCYwiPruZqIS0',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 35,
				h : 53,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'ojO0afn4upqRhVDF',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 69,
					x : 2087473.162109375,
					y : -583759.78125,
					zoom : 431462.708984375,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -498874.9560546875,
				w : 27,
				h : 55,
				preload_prefix_size : 0,
				video_start_ts : 1445323.736328125,
				video_codec : 'mxTqYfS9ciIEAV6O',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 20,
				title : 'yuWcmGD1HxSojbQC',
				performer : 'lUeTIDgFmzcv75Hn',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : '6Pku3BJDms2z9lW1',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'A8SreI307dmPKjgn',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	invoice_slug : 'mV8BPYOGRd4tF51w',
);
```