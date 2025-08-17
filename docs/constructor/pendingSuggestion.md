# pendingSuggestion

**Layer** : 211

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
	suggestion : 'gkxKS7ahejWuV4zZ',
	title : $client->textWithEntities(
		text : 'pb43vdnGcLkhRPml',
		entities : array(
			$client->messageEntityUnknown(
				offset : 28,
				length : 96,
			),
			$client->messageEntityMention(
				offset : 28,
				length : 55,
			),
			$client->messageEntityHashtag(
				offset : 71,
				length : 40,
			),
			$client->messageEntityBotCommand(
				offset : 44,
				length : 71,
			),
			$client->messageEntityUrl(
				offset : 75,
				length : 64,
			),
			$client->messageEntityEmail(
				offset : 26,
				length : 28,
			),
			$client->messageEntityBold(
				offset : 33,
				length : 11,
			),
			$client->messageEntityItalic(
				offset : 48,
				length : 52,
			),
			$client->messageEntityCode(
				offset : 28,
				length : 95,
			),
			$client->messageEntityPre(
				offset : 9,
				length : 5,
				language : 'sIib3E2GeCnVBfpg',
			),
			$client->messageEntityTextUrl(
				offset : 30,
				length : 16,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 13,
				length : 13,
				user_id : 8460852828709573465,
			),
			$client->inputMessageEntityMentionName(
				offset : 76,
				length : 90,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 4,
				length : 39,
			),
			$client->messageEntityCashtag(
				offset : 27,
				length : 32,
			),
			$client->messageEntityUnderline(
				offset : 51,
				length : 25,
			),
			$client->messageEntityStrike(
				offset : 63,
				length : 86,
			),
			$client->messageEntityBankCard(
				offset : 34,
				length : 66,
			),
			$client->messageEntitySpoiler(
				offset : 78,
				length : 81,
			),
			$client->messageEntityCustomEmoji(
				offset : 48,
				length : 43,
				document_id : 7306147770309427050,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 21,
				length : 78,
			),
		),
	),
	description : $client->textWithEntities(
		text : '2zyVnxemcLHQ1Ilt',
		entities : array(
			$client->messageEntityUnknown(
				offset : 30,
				length : 87,
			),
			$client->messageEntityMention(
				offset : 64,
				length : 73,
			),
			$client->messageEntityHashtag(
				offset : 96,
				length : 29,
			),
			$client->messageEntityBotCommand(
				offset : 31,
				length : 14,
			),
			$client->messageEntityUrl(
				offset : 12,
				length : 64,
			),
			$client->messageEntityEmail(
				offset : 77,
				length : 90,
			),
			$client->messageEntityBold(
				offset : 24,
				length : 60,
			),
			$client->messageEntityItalic(
				offset : 29,
				length : 34,
			),
			$client->messageEntityCode(
				offset : 76,
				length : 25,
			),
			$client->messageEntityPre(
				offset : 2,
				length : 10,
				language : '2l4DRTKXfEtcJhA0',
			),
			$client->messageEntityTextUrl(
				offset : 33,
				length : 59,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 22,
				length : 53,
				user_id : -5179987005681400495,
			),
			$client->inputMessageEntityMentionName(
				offset : 77,
				length : 26,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 35,
				length : 21,
			),
			$client->messageEntityCashtag(
				offset : 94,
				length : 91,
			),
			$client->messageEntityUnderline(
				offset : 52,
				length : 41,
			),
			$client->messageEntityStrike(
				offset : 97,
				length : 76,
			),
			$client->messageEntityBankCard(
				offset : 48,
				length : 7,
			),
			$client->messageEntitySpoiler(
				offset : 23,
				length : 14,
			),
			$client->messageEntityCustomEmoji(
				offset : 12,
				length : 1,
				document_id : -1740343176664441436,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 94,
				length : 46,
			),
		),
	),
	url : 'https://docs.liveproto.dev',
);
```