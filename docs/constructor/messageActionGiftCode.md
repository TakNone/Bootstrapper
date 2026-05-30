# messageActionGiftCode

**Description** : *Contains a Telegram Premium giftcode link*

**Layer** : 222

```tl
messageActionGiftCode#31c48347 flags:# via_giveaway:flags.0?true unclaimed:flags.5?true boost_peer:flags.1?Peer days:int slug:string currency:flags.2?string amount:flags.2?long crypto_currency:flags.3?string crypto_amount:flags.3?long message:flags.4?TextWithEntities = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
		user_id : -1699505527621110556,
	),
	days : 24,
	slug : 'ZnbAkV0ROGvQzhtJ',
	currency : 'rlE7XTSURzbL2teI',
	amount : 3575439622672478903,
	crypto_currency : '3qowGnAIR9U74QEJ',
	crypto_amount : -345753642454065472,
	message : $client->textWithEntities(
		text : 'KuivU6EMcA5GIOe8',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 39,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 0,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 13,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 0,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 92,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 16,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 39,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 84,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 91,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 81,
				language : 'H6zi4Ts2rUBML3Z1',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 35,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 34,
				user_id : -9079154469254623106,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 90,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 93,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 31,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 80,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 69,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 27,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 50,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 37,
				document_id : 5551599338518767208,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 98,
			),
		),
	),
);
```