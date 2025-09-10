# messageActionGiftCode

**Description** : *Contains a Telegram Premium giftcode link*

**Layer** : 214

```tl
messageActionGiftCode#56d03994 flags:# via_giveaway:flags.0?true unclaimed:flags.5?true boost_peer:flags.1?Peer months:int slug:string currency:flags.2?string amount:flags.2?long crypto_currency:flags.3?string crypto_amount:flags.3?long message:flags.4?TextWithEntities = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **via_giveaway** | [`flags.0?true`](type/true) | If set, this gift code was received from a giveaway » started by a channel/supergroup we're subscribed to |
| **unclaimed** | [`flags.5?true`](type/true) | If set, the link was not redeemed yet |
| **boost_peer** | [`flags.1?Peer`](type/Peer) | Identifier of the channel/supergroup that created the gift code either directly or through a giveaway: if we import this giftcode link, we will also automatically boost this channel/supergroup |
| <mark>months</mark> | [`int`](type/int) | Duration in months of the gifted Telegram Premium subscription |
| <mark>slug</mark> | [`string`](type/string) | Slug of the Telegram Premium giftcode link |
| **currency** | [`flags.2?string`](type/string) | Three-letter ISO 4217 currency code |
| **amount** | [`flags.2?long`](type/long) | Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies) |
| **crypto_currency** | [`flags.3?string`](type/string) | If set, the gift was made using the specified cryptocurrency |
| **crypto_amount** | [`flags.3?long`](type/long) | If crypto_currency is set, contains the paid amount, in the smallest units of the cryptocurrency |
| **message** | [`flags.4?TextWithEntities`](type/TextWithEntities) | Message attached with the gift |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionGiftCode(
	via_giveaway : true,
	unclaimed : true,
	boost_peer : $client->peerUser(
		user_id : -1013938614327982213,
	),
	months : 99,
	slug : 'KSvoG6OY0F4e8Njs',
	currency : 'TK7oWDMBZteAkbqg',
	amount : -7278011315275029753,
	crypto_currency : 'ufljScQqNxLyEz98',
	crypto_amount : -7052353161469007193,
	message : $client->textWithEntities(
		text : 'Xxh4sUyFMg7930aR',
		entities : array(
			$client->messageEntityUnknown(
				offset : 13,
				length : 40,
			),
			$client->messageEntityMention(
				offset : 69,
				length : 61,
			),
			$client->messageEntityHashtag(
				offset : 1,
				length : 7,
			),
			$client->messageEntityBotCommand(
				offset : 14,
				length : 74,
			),
			$client->messageEntityUrl(
				offset : 43,
				length : 31,
			),
			$client->messageEntityEmail(
				offset : 50,
				length : 63,
			),
			$client->messageEntityBold(
				offset : 7,
				length : 83,
			),
			$client->messageEntityItalic(
				offset : 12,
				length : 95,
			),
			$client->messageEntityCode(
				offset : 32,
				length : 51,
			),
			$client->messageEntityPre(
				offset : 41,
				length : 76,
				language : '5Ofb7hpYUiWdJ6LC',
			),
			$client->messageEntityTextUrl(
				offset : 46,
				length : 0,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 59,
				length : 6,
				user_id : 3284950298782163231,
			),
			$client->inputMessageEntityMentionName(
				offset : 4,
				length : 61,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 49,
				length : 87,
			),
			$client->messageEntityCashtag(
				offset : 63,
				length : 48,
			),
			$client->messageEntityUnderline(
				offset : 7,
				length : 73,
			),
			$client->messageEntityStrike(
				offset : 96,
				length : 85,
			),
			$client->messageEntityBankCard(
				offset : 81,
				length : 54,
			),
			$client->messageEntitySpoiler(
				offset : 27,
				length : 0,
			),
			$client->messageEntityCustomEmoji(
				offset : 35,
				length : 69,
				document_id : -5815708270676129899,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 56,
				length : 63,
			),
		),
	),
);
```