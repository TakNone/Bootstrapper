# messageActionGiftCode

**Description** : *Contains a Telegram Premium giftcode link*

**Layer** : 218

```tl
messageActionGiftCode#31c48347 flags:# via_giveaway:flags.0?true unclaimed:flags.5?true boost_peer:flags.1?Peer days:int slug:string currency:flags.2?string amount:flags.2?long crypto_currency:flags.3?string crypto_amount:flags.3?long message:flags.4?TextWithEntities = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **via_giveaway** | [`flags.0?true`](type/true) | If set, this gift code was received from a giveaway » started by a channel/supergroup we're subscribed to |
| **unclaimed** | [`flags.5?true`](type/true) | If set, the link was not redeemed yet |
| **boost_peer** | [`flags.1?Peer`](type/Peer) | Identifier of the channel/supergroup that created the gift code either directly or through a giveaway: if we import this giftcode link, we will also automatically boost this channel/supergroup |
| <mark>days</mark> | [`int`](type/int) | NOTHING |
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
		user_id : -2776761792373370893,
	),
	days : 65,
	slug : 'ViPhpoUZ1dFYcsjC',
	currency : 'vnpg70R6UDJZIjBM',
	amount : 6415916461889777343,
	crypto_currency : '38HD9rGWPzNAsUvc',
	crypto_amount : -435023810966589834,
	message : $client->textWithEntities(
		text : 'NyIPWo0dujJV8Qer',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 54,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 32,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 90,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 25,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 21,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 48,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 3,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 76,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 78,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 93,
				language : 'tgCGED9FWAIaBKpy',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 16,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 11,
				user_id : 2354357562844521196,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 92,
				user_id : $client->get_input_user(peer : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 25,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 64,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 34,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 6,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 49,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 73,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 24,
				document_id : -5937803667142291555,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 5,
			),
		),
	),
);
```