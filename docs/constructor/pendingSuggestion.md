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
	suggestion : 'JHRumiDxZhW8U5Pr',
	title : $client->textWithEntities(
		text : 'tab7hT6fFeZqrmWO',
		entities : array(
			$client->messageEntityUnknown(
				offset : 42,
				length : 59,
			),
			$client->messageEntityMention(
				offset : 12,
				length : 54,
			),
			$client->messageEntityHashtag(
				offset : 46,
				length : 73,
			),
			$client->messageEntityBotCommand(
				offset : 15,
				length : 77,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 42,
			),
			$client->messageEntityEmail(
				offset : 64,
				length : 45,
			),
			$client->messageEntityBold(
				offset : 28,
				length : 24,
			),
			$client->messageEntityItalic(
				offset : 41,
				length : 14,
			),
			$client->messageEntityCode(
				offset : 95,
				length : 18,
			),
			$client->messageEntityPre(
				offset : 14,
				length : 92,
				language : 'h0OeICZFRTok5m4s',
			),
			$client->messageEntityTextUrl(
				offset : 60,
				length : 55,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 92,
				length : 47,
				user_id : 4130862995933126231,
			),
			$client->inputMessageEntityMentionName(
				offset : 32,
				length : 83,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 70,
				length : 44,
			),
			$client->messageEntityCashtag(
				offset : 86,
				length : 27,
			),
			$client->messageEntityUnderline(
				offset : 24,
				length : 99,
			),
			$client->messageEntityStrike(
				offset : 22,
				length : 97,
			),
			$client->messageEntityBankCard(
				offset : 39,
				length : 82,
			),
			$client->messageEntitySpoiler(
				offset : 87,
				length : 44,
			),
			$client->messageEntityCustomEmoji(
				offset : 81,
				length : 87,
				document_id : 6155569967626225929,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 82,
				length : 92,
			),
		),
	),
	description : $client->textWithEntities(
		text : 'NzeKsWFrbV3YIUm5',
		entities : array(
			$client->messageEntityUnknown(
				offset : 10,
				length : 44,
			),
			$client->messageEntityMention(
				offset : 64,
				length : 79,
			),
			$client->messageEntityHashtag(
				offset : 9,
				length : 95,
			),
			$client->messageEntityBotCommand(
				offset : 53,
				length : 56,
			),
			$client->messageEntityUrl(
				offset : 43,
				length : 32,
			),
			$client->messageEntityEmail(
				offset : 50,
				length : 32,
			),
			$client->messageEntityBold(
				offset : 44,
				length : 47,
			),
			$client->messageEntityItalic(
				offset : 77,
				length : 77,
			),
			$client->messageEntityCode(
				offset : 49,
				length : 9,
			),
			$client->messageEntityPre(
				offset : 2,
				length : 76,
				language : 'CilUvbBjzaNEKf3T',
			),
			$client->messageEntityTextUrl(
				offset : 9,
				length : 52,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 13,
				length : 59,
				user_id : -8764470194647665720,
			),
			$client->inputMessageEntityMentionName(
				offset : 44,
				length : 99,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 66,
				length : 34,
			),
			$client->messageEntityCashtag(
				offset : 50,
				length : 39,
			),
			$client->messageEntityUnderline(
				offset : 22,
				length : 4,
			),
			$client->messageEntityStrike(
				offset : 96,
				length : 70,
			),
			$client->messageEntityBankCard(
				offset : 14,
				length : 1,
			),
			$client->messageEntitySpoiler(
				offset : 43,
				length : 64,
			),
			$client->messageEntityCustomEmoji(
				offset : 84,
				length : 72,
				document_id : 1194575612090994381,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 53,
				length : 83,
			),
		),
	),
	url : 'https://docs.liveproto.dev',
);
```