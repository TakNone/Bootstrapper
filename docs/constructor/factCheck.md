# factCheck

**Description** : *Represents a fact\-check &raquo; created by an independent fact\-checker*

**Layer** : 229

```tl
factCheck#b89bfccf flags:# need_check:flags.0?true country:flags.1?string text:flags.1?TextWithEntities hash:long = FactCheck;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	country : 'CbcoRryIEhZk7Asd',
	text : $client->textWithEntities(
		text : 'hXOGvBMkUy2LWFdA',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 47,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 75,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 19,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 45,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 43,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 53,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 83,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 14,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 99,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 5,
				language : 'NruHA0Te8iqKRdPy',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 67,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 28,
				user_id : -8165291779452133612,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 50,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 47,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 92,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 77,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 63,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 7,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 13,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 90,
				document_id : 3282251673939863692,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 2,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 94,
				date : 8,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 16,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 27,
				old_text : 'JHdFmYpP69ZyacoD',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 29,
			),
		),
	),
	hash : 0,
);
```