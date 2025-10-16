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
	country : 'iynJsPQxmFOt4Vvw',
	text : $client->textWithEntities(
		text : '92VLHl85KPwzaMFB',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 56,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 23,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 31,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 27,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 17,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 64,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 7,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 61,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 48,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 82,
				language : 'Tan4qvdcs85R9hVY',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 73,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 73,
				user_id : 3551213084914397136,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 44,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 3,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 45,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 74,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 36,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 84,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 37,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 84,
				document_id : 2252874185094443876,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 83,
			),
		),
	),
	hash : 0,
);
```