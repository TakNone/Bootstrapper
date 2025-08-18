# factCheck

**Description** : *Represents a fact\-check &raquo; created by an independent fact\-checker*

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
	country : 'ZwNIhLJxtA3zCMPd',
	text : $client->textWithEntities(
		text : 'oNinkq35fyE7FQj6',
		entities : array(
			$client->messageEntityUnknown(
				offset : 22,
				length : 0,
			),
			$client->messageEntityMention(
				offset : 86,
				length : 24,
			),
			$client->messageEntityHashtag(
				offset : 1,
				length : 38,
			),
			$client->messageEntityBotCommand(
				offset : 31,
				length : 10,
			),
			$client->messageEntityUrl(
				offset : 17,
				length : 57,
			),
			$client->messageEntityEmail(
				offset : 56,
				length : 90,
			),
			$client->messageEntityBold(
				offset : 29,
				length : 14,
			),
			$client->messageEntityItalic(
				offset : 33,
				length : 63,
			),
			$client->messageEntityCode(
				offset : 49,
				length : 53,
			),
			$client->messageEntityPre(
				offset : 90,
				length : 87,
				language : 'P29dHFVXwzYMm0uW',
			),
			$client->messageEntityTextUrl(
				offset : 85,
				length : 55,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 64,
				length : 85,
				user_id : 1302462758267150795,
			),
			$client->inputMessageEntityMentionName(
				offset : 27,
				length : 34,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 82,
				length : 8,
			),
			$client->messageEntityCashtag(
				offset : 35,
				length : 56,
			),
			$client->messageEntityUnderline(
				offset : 99,
				length : 94,
			),
			$client->messageEntityStrike(
				offset : 32,
				length : 56,
			),
			$client->messageEntityBankCard(
				offset : 17,
				length : 90,
			),
			$client->messageEntitySpoiler(
				offset : 9,
				length : 58,
			),
			$client->messageEntityCustomEmoji(
				offset : 92,
				length : 89,
				document_id : 2611327252114172975,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 41,
				length : 19,
			),
		),
	),
	hash : 4408830661210329425,
);
```