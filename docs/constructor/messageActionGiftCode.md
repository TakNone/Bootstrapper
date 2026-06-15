# messageActionGiftCode

**Description** : *Contains a Telegram Premium giftcode link*

**Layer** : 227

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
		user_id : 4360426821005718328,
	),
	days : 26,
	slug : 'yvVECLzjnGo0QJHk',
	currency : 'YXrNFx9zpqnJQ7Bj',
	amount : -7913544164841483015,
	crypto_currency : 'bXf1vU0A2CxVjqes',
	crypto_amount : -626496865925222277,
	message : $client->textWithEntities(
		text : 'qUsj6Hu4bZTorEDp',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 81,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 63,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 49,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 25,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 28,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 0,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 31,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 98,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 74,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 50,
				language : 'RT4KxmkdHN3cQVYb',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 82,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 7,
				user_id : 7482445917833242867,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 49,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 2,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 99,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 65,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 98,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 80,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 93,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 26,
				document_id : 5608310298786633146,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 14,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 13,
				date : 80,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 18,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 93,
				old_text : 'wsBivWJdujR2l4MI',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 13,
			),
		),
	),
);
```