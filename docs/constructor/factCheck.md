# factCheck

**Description** : *Represents a fact\-check &raquo; created by an independent fact\-checker*

**Layer** : 216

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
	country : 'Rghy2zxI4r3qDX9v',
	text : $client->textWithEntities(
		text : '5PwIzCKgMuZDaTio',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 16,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 27,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 77,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 77,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 67,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 4,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 95,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 87,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 36,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 55,
				language : 'noC8zeks9hmLrUg4',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 58,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 90,
				user_id : -5975793524399127417,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 25,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 80,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 2,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 62,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 99,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 73,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 53,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 98,
				document_id : 7750535294602040259,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 20,
			),
		),
	),
	hash : 0,
);
```