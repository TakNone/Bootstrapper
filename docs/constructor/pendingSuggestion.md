# pendingSuggestion

**Layer** : 214

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
	suggestion : 'EZxAzTDY8BU2ru5C',
	title : $client->textWithEntities(
		text : 'wHonse7rfIm856yb',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 39,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 97,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 81,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 39,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 44,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 32,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 82,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 0,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 98,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 92,
				language : '0nMBYhAT6GIDiepC',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 17,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 12,
				user_id : 1623077043974449768,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 99,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 17,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 11,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 52,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 13,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 78,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 67,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 18,
				document_id : -4848245869964274722,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 18,
			),
		),
	),
	description : $client->textWithEntities(
		text : 'FZhECV0MY5cj87sQ',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 56,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 99,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 23,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 15,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 85,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 20,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 81,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 27,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 87,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 9,
				language : '8KC0k1vugmBPOEH5',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 87,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 75,
				user_id : -1475114587292841021,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 92,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 89,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 37,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 85,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 62,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 38,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 50,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 21,
				document_id : 8715365202066042237,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 40,
			),
		),
	),
	url : 'https://docs.liveproto.dev',
);
```