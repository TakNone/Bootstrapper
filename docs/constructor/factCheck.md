# factCheck

**Description** : *Represents a fact\-check &raquo; created by an independent fact\-checker*

**Layer** : 227

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
	country : 'cUQ25ZEWtoKHGTnJ',
	text : $client->textWithEntities(
		text : 'k9jQ0mGwnR8WU5JX',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 93,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 57,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 44,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 86,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 40,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 53,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 36,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 19,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 99,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 24,
				language : 'qvmd2nourVPKWhEI',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 4,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 52,
				user_id : -8526188431951475200,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 56,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 27,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 33,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 49,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 13,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 67,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 55,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 6,
				document_id : -6956873305130529868,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 68,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 54,
				date : 50,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 39,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 99,
				old_text : 'hFX60WSjI2LcPRaQ',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 10,
			),
		),
	),
	hash : 0,
);
```