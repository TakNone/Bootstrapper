# factCheck

**Description** : *Represents a fact\-check &raquo; created by an independent fact\-checker*

**Layer** : 218

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
	country : 'R0KGroPEq1kxtJOT',
	text : $client->textWithEntities(
		text : 'm2MsZT0kcgb9tN35',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 78,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 9,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 59,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 44,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 100,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 81,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 11,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 41,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 0,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 58,
				language : 'yLCWEcHPsjk1riuG',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 59,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 86,
				user_id : 3347654159471623785,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 8,
				user_id : $client->get_input_user(peer : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 73,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 55,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 93,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 28,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 39,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 96,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 43,
				document_id : -6949885551654367561,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 23,
			),
		),
	),
	hash : 0,
);
```