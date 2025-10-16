# pendingSuggestion

**Layer** : 216

```tl
pendingSuggestion#e7e82e12 suggestion:string title:TextWithEntities description:TextWithEntities url:string = PendingSuggestion;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>suggestion</mark> | [`string`](type/string) | NOTHING |
| <mark>title</mark> | [`TextWithEntities`](type/TextWithEntities) | NOTHING |
| <mark>description</mark> | [`TextWithEntities`](type/TextWithEntities) | NOTHING |
| <mark>url</mark> | [`string`](type/string) | NOTHING |

---

## Type

[PendingSuggestion](type/PendingSuggestion)

---

## Example

```php
$pendingSuggestion = $client->pendingSuggestion(
	suggestion : 'mw2NVivYuOyG96a5',
	title : $client->textWithEntities(
		text : 'Ds6yld73gMrpObwH',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 50,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 44,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 84,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 100,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 59,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 40,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 52,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 83,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 76,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 26,
				language : 'gmUF6oeiynTZbGKc',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 64,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 70,
				user_id : -4695308322374468150,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 79,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 50,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 87,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 72,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 79,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 8,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 17,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 8,
				document_id : -4403206562445481344,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 80,
			),
		),
	),
	description : $client->textWithEntities(
		text : 'UN2JnEamTQj3iRrl',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 32,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 13,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 92,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 54,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 97,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 100,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 47,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 2,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 37,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 87,
				language : '52oHUzwROdKuFGMp',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 95,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 67,
				user_id : -5780460071093184085,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 17,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 20,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 89,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 97,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 88,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 17,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 83,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 75,
				document_id : -7939825284943525396,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 61,
			),
		),
	),
	url : 'https://docs.liveproto.dev',
);
```