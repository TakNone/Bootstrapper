# factCheck

**Description** : *Represents a fact\-check &raquo; created by an independent fact\-checker*

**Layer** : 222

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
	country : '9BCPNuQEGd8jX7rz',
	text : $client->textWithEntities(
		text : 'vKI319nrOlMsXCZE',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 65,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 50,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 18,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 47,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 94,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 85,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 56,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 81,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 98,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 9,
				language : 'zNqlnwxjFOdsyX87',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 96,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 83,
				user_id : 4952973617610561767,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 72,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 83,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 21,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 20,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 18,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 92,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 81,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 39,
				document_id : 414337942887842295,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 41,
			),
		),
	),
	hash : 0,
);
```