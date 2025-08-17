# factCheck

**Description** : *Represents a fact-check » created by an independent fact-checker*

**Layer** : 211

```tl
factCheck#b89bfccf flags:# need_check:flags.0?true country:flags.1?string text:flags.1?TextWithEntities hash:long = FactCheck;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **need_check** | [`flags.0?true`](type/true) | If set, the country/text fields will not be set, and the fact check must be fetched manually by the client (if it isn't already cached with the key specified in hash) using bundled messages.getFactCheck requests, when the message with the factcheck scrolls into view |
| **country** | [`flags.1?string`](type/string) | A two-letter ISO 3166-1 alpha-2 country code of the country for which the fact-check should be shown |
| **text** | [`flags.1?TextWithEntities`](type/TextWithEntities) | The fact-check |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |

---

## Type

[FactCheck](type/FactCheck)

---

## Example

```php
$factCheck = $client->factCheck(
	need_check : true,
	country : 'RX5SeYpoj0C7h9Ks',
	text : $client->textWithEntities(
		text : 'frsE0CjRHWplOKzo',
		entities : array(
			$client->messageEntityUnknown(
				offset : 83,
				length : 74,
			),
			$client->messageEntityMention(
				offset : 24,
				length : 42,
			),
			$client->messageEntityHashtag(
				offset : 72,
				length : 14,
			),
			$client->messageEntityBotCommand(
				offset : 99,
				length : 19,
			),
			$client->messageEntityUrl(
				offset : 69,
				length : 95,
			),
			$client->messageEntityEmail(
				offset : 63,
				length : 34,
			),
			$client->messageEntityBold(
				offset : 66,
				length : 61,
			),
			$client->messageEntityItalic(
				offset : 9,
				length : 49,
			),
			$client->messageEntityCode(
				offset : 86,
				length : 43,
			),
			$client->messageEntityPre(
				offset : 77,
				length : 99,
				language : 'Rcxt0buTfrS6DYJj',
			),
			$client->messageEntityTextUrl(
				offset : 62,
				length : 89,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 32,
				length : 67,
				user_id : 115691862745353521,
			),
			$client->inputMessageEntityMentionName(
				offset : 15,
				length : 20,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 86,
				length : 89,
			),
			$client->messageEntityCashtag(
				offset : 67,
				length : 21,
			),
			$client->messageEntityUnderline(
				offset : 51,
				length : 51,
			),
			$client->messageEntityStrike(
				offset : 83,
				length : 36,
			),
			$client->messageEntityBankCard(
				offset : 89,
				length : 59,
			),
			$client->messageEntitySpoiler(
				offset : 19,
				length : 59,
			),
			$client->messageEntityCustomEmoji(
				offset : 4,
				length : 22,
				document_id : 4151274437111994591,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 97,
				length : 6,
			),
		),
	),
	hash : -4367716220056777540,
);
```