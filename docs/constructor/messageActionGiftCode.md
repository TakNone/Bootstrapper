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
		user_id : -8103350299000553806,
	),
	months : 5,
	slug : 'CKkvz4em6hQiFS3H',
	currency : '67nvESXjkdh8O51y',
	amount : -9124048841963727932,
	crypto_currency : '4OHveLljrxmEhVaY',
	crypto_amount : 1769204828248621162,
	message : $client->textWithEntities(
		text : 'ySeqQNKsFg2Eo8Ud',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 99,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 70,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 0,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 70,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 89,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 53,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 86,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 43,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 28,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 67,
				language : 'diF6tnyQ0lMwf8vE',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 72,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 12,
				user_id : 5239747563308103558,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 10,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 2,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 32,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 59,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 71,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 66,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 90,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 29,
				document_id : 4837219457577218247,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 10,
			),
		),
	),
);
```