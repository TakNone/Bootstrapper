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
	suggestion : 'jlRZnLX2dSPOHD91',
	title : $client->textWithEntities(
		text : 'fNlBRzUshOLv1u96',
		entities : array(
			$client->messageEntityUnknown(
				offset : 43,
				length : 71,
			),
			$client->messageEntityMention(
				offset : 29,
				length : 73,
			),
			$client->messageEntityHashtag(
				offset : 49,
				length : 44,
			),
			$client->messageEntityBotCommand(
				offset : 63,
				length : 45,
			),
			$client->messageEntityUrl(
				offset : 50,
				length : 39,
			),
			$client->messageEntityEmail(
				offset : 76,
				length : 39,
			),
			$client->messageEntityBold(
				offset : 100,
				length : 87,
			),
			$client->messageEntityItalic(
				offset : 99,
				length : 83,
			),
			$client->messageEntityCode(
				offset : 52,
				length : 88,
			),
			$client->messageEntityPre(
				offset : 37,
				length : 8,
				language : 'EvWdeSwCctH8OyaU',
			),
			$client->messageEntityTextUrl(
				offset : 6,
				length : 0,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 59,
				length : 31,
				user_id : -4977424344752867954,
			),
			$client->inputMessageEntityMentionName(
				offset : 32,
				length : 84,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 57,
				length : 72,
			),
			$client->messageEntityCashtag(
				offset : 7,
				length : 69,
			),
			$client->messageEntityUnderline(
				offset : 68,
				length : 54,
			),
			$client->messageEntityStrike(
				offset : 8,
				length : 9,
			),
			$client->messageEntityBankCard(
				offset : 56,
				length : 11,
			),
			$client->messageEntitySpoiler(
				offset : 6,
				length : 8,
			),
			$client->messageEntityCustomEmoji(
				offset : 99,
				length : 76,
				document_id : -746177315643549402,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 88,
				length : 69,
			),
		),
	),
	description : $client->textWithEntities(
		text : 'W7j5yfGAUxlrpnRC',
		entities : array(
			$client->messageEntityUnknown(
				offset : 73,
				length : 73,
			),
			$client->messageEntityMention(
				offset : 42,
				length : 100,
			),
			$client->messageEntityHashtag(
				offset : 27,
				length : 49,
			),
			$client->messageEntityBotCommand(
				offset : 80,
				length : 19,
			),
			$client->messageEntityUrl(
				offset : 63,
				length : 74,
			),
			$client->messageEntityEmail(
				offset : 5,
				length : 14,
			),
			$client->messageEntityBold(
				offset : 12,
				length : 48,
			),
			$client->messageEntityItalic(
				offset : 42,
				length : 43,
			),
			$client->messageEntityCode(
				offset : 94,
				length : 38,
			),
			$client->messageEntityPre(
				offset : 18,
				length : 38,
				language : 'AgUVSDCPW3IFNcdz',
			),
			$client->messageEntityTextUrl(
				offset : 59,
				length : 22,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 31,
				length : 30,
				user_id : -1437648798961796921,
			),
			$client->inputMessageEntityMentionName(
				offset : 33,
				length : 9,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 59,
				length : 48,
			),
			$client->messageEntityCashtag(
				offset : 59,
				length : 23,
			),
			$client->messageEntityUnderline(
				offset : 53,
				length : 83,
			),
			$client->messageEntityStrike(
				offset : 73,
				length : 15,
			),
			$client->messageEntityBankCard(
				offset : 69,
				length : 95,
			),
			$client->messageEntitySpoiler(
				offset : 100,
				length : 70,
			),
			$client->messageEntityCustomEmoji(
				offset : 32,
				length : 89,
				document_id : -1990131062509232615,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 58,
				length : 40,
			),
		),
	),
	url : 'https://docs.liveproto.dev',
);
```