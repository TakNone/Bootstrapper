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
		user_id : -2962756048838384740,
	),
	days : 100,
	slug : 'vzDUiYkFM0fp5Cmn',
	currency : 'EtCe2xKB5UNbwhIj',
	amount : -4040180357148547959,
	crypto_currency : 'NJkspftdWrvnS1Ty',
	crypto_amount : 8559403791352935382,
	message : $client->textWithEntities(
		text : '2RJDexd9spVa1iHq',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 56,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 3,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 60,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 53,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 50,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 87,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 55,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 69,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 63,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 84,
				language : 'NIZtVzhYwUD69FSJ',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 4,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 37,
				user_id : 3153973447171509855,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 13,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 61,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 3,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 81,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 81,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 79,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 21,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 73,
				document_id : -2219772108345592609,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 46,
			),
		),
	),
);
```