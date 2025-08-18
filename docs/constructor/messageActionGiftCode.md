# messageActionGiftCode

**Description** : *Contains a Telegram Premium giftcode link*

**Layer** : 211

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
		user_id : 7231803848020411725,
	),
	months : 38,
	slug : 'pUPrCmvD57uAGcOe',
	currency : 'VLQ7mzIep3XMuHGr',
	amount : 7358559806472628187,
	crypto_currency : 'lBt3VeJuqifbLkrN',
	crypto_amount : 4618193500920553633,
	message : $client->textWithEntities(
		text : '3rVTshwdfeaoScOM',
		entities : array(
			$client->messageEntityUnknown(
				offset : 88,
				length : 3,
			),
			$client->messageEntityMention(
				offset : 23,
				length : 49,
			),
			$client->messageEntityHashtag(
				offset : 9,
				length : 39,
			),
			$client->messageEntityBotCommand(
				offset : 54,
				length : 20,
			),
			$client->messageEntityUrl(
				offset : 48,
				length : 54,
			),
			$client->messageEntityEmail(
				offset : 17,
				length : 29,
			),
			$client->messageEntityBold(
				offset : 40,
				length : 52,
			),
			$client->messageEntityItalic(
				offset : 7,
				length : 23,
			),
			$client->messageEntityCode(
				offset : 76,
				length : 6,
			),
			$client->messageEntityPre(
				offset : 49,
				length : 22,
				language : 'CsXqVfUO8AvnmcJS',
			),
			$client->messageEntityTextUrl(
				offset : 6,
				length : 71,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 35,
				length : 49,
				user_id : 478363453235020016,
			),
			$client->inputMessageEntityMentionName(
				offset : 55,
				length : 92,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 21,
				length : 95,
			),
			$client->messageEntityCashtag(
				offset : 86,
				length : 50,
			),
			$client->messageEntityUnderline(
				offset : 46,
				length : 91,
			),
			$client->messageEntityStrike(
				offset : 37,
				length : 36,
			),
			$client->messageEntityBankCard(
				offset : 26,
				length : 0,
			),
			$client->messageEntitySpoiler(
				offset : 5,
				length : 60,
			),
			$client->messageEntityCustomEmoji(
				offset : 90,
				length : 44,
				document_id : 7964271821281066922,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 71,
				length : 48,
			),
		),
	),
);
```