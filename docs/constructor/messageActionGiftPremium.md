# messageActionGiftPremium

**Description** : *Info about a gifted Telegram Premium subscription*

**Layer** : 218

```tl
messageActionGiftPremium#48e91302 flags:# currency:string amount:long days:int crypto_currency:flags.0?string crypto_amount:flags.0?long message:flags.1?TextWithEntities = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>currency</mark> | [`string`](type/string) | Three-letter ISO 4217 currency code |
| <mark>amount</mark> | [`long`](type/long) | Price of the gift in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies) |
| <mark>days</mark> | [`int`](type/int) | NOTHING |
| **crypto_currency** | [`flags.0?string`](type/string) | If the gift was bought using a cryptocurrency, the cryptocurrency name |
| **crypto_amount** | [`flags.0?long`](type/long) | If the gift was bought using a cryptocurrency, price of the gift in the smallest units of a cryptocurrency |
| **message** | [`flags.1?TextWithEntities`](type/TextWithEntities) | Message attached with the gift |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionGiftPremium(
	currency : 'v5Qn3yaMhlsY8gmF',
	amount : -2175241870576788517,
	days : 32,
	crypto_currency : 'gOXEqbQBUCvI563m',
	crypto_amount : 1826566950819971457,
	message : $client->textWithEntities(
		text : 'oULaxZYTpPhmRAtw',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 99,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 67,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 16,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 42,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 69,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 6,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 96,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 0,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 23,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 69,
				language : 'k5yWhXbNZu20B6oV',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 77,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 82,
				user_id : 506194798065596256,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 35,
				user_id : $client->get_input_user(peer : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 92,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 97,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 10,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 55,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 61,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 48,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 2,
				document_id : -3756859504294751273,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 86,
			),
		),
	),
);
```