# factCheck

**Description** : *Represents a fact\-check &raquo; created by an independent fact\-checker*

**Layer** : 214

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
	country : 's1tnRzdIZxA3h5TL',
	text : $client->textWithEntities(
		text : 'ug5GURv1ZtQc0JIP',
		entities : array(
			$client->messageEntityUnknown(
				offset : 8,
				length : 49,
			),
			$client->messageEntityMention(
				offset : 72,
				length : 20,
			),
			$client->messageEntityHashtag(
				offset : 30,
				length : 66,
			),
			$client->messageEntityBotCommand(
				offset : 82,
				length : 14,
			),
			$client->messageEntityUrl(
				offset : 92,
				length : 99,
			),
			$client->messageEntityEmail(
				offset : 53,
				length : 87,
			),
			$client->messageEntityBold(
				offset : 28,
				length : 87,
			),
			$client->messageEntityItalic(
				offset : 94,
				length : 15,
			),
			$client->messageEntityCode(
				offset : 39,
				length : 70,
			),
			$client->messageEntityPre(
				offset : 41,
				length : 51,
				language : 'mfFZeqQgltKAWsbp',
			),
			$client->messageEntityTextUrl(
				offset : 82,
				length : 84,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 51,
				length : 60,
				user_id : 6492176066935555100,
			),
			$client->inputMessageEntityMentionName(
				offset : 30,
				length : 42,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 54,
				length : 43,
			),
			$client->messageEntityCashtag(
				offset : 69,
				length : 83,
			),
			$client->messageEntityUnderline(
				offset : 99,
				length : 54,
			),
			$client->messageEntityStrike(
				offset : 19,
				length : 55,
			),
			$client->messageEntityBankCard(
				offset : 81,
				length : 24,
			),
			$client->messageEntitySpoiler(
				offset : 73,
				length : 63,
			),
			$client->messageEntityCustomEmoji(
				offset : 81,
				length : 84,
				document_id : -3997490422330944319,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 67,
				length : 99,
			),
		),
	),
	hash : -778416310166293308,
);
```